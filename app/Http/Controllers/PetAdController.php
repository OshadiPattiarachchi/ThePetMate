<?php

namespace App\Http\Controllers;

use App\Models\PetAd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class PetAdController extends Controller
{
    public function create()
    {
        return view('post-ad');
    }

    public function store(Request $request) //STORE THE PET DATA
    {
        $request->validate([
            'title' => 'required|max:255',
            'gender' => 'required|in:Male,Female', //RULES
            'age' => 'required|integer|min:0',
            'breed' => 'required|string|max:255',
            'pedigree' => 'required|boolean',
            'description' => 'required',
            'phone_number' => 'required|string|max:15',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', //2MB MAX
        ]);

        $imagePath = $request->file('image') ? $request->file('image')->store('pet_ads', 'public') : null;
       // If the user uploads an image, it is stored in the storage/app/public/pet_ads/ folder.
       //If no image is uploaded, $imagePath = null

        PetAd::create([ //SAVING DATA TO DB
            'title' => $request->title,
            'gender' => $request->gender,
            'age' => $request->age,
            'breed' => $request->breed,
            'pedigree' => $request->pedigree,
            'description' => $request->description,
            'phone_number' => $request->phone_number,
            'price' => $request->price,
            'image' => $imagePath ? Storage::url($imagePath) : null,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('post-ad.create')->with('success', 'Ad posted successfully!');
    }

    public function index()
    {
        $petAds = PetAd::all(); // Get all pet ads from the database
        return view('ads.find-a-pet', compact('petAds')); // Passes them to the find-a-pet.blade.php view to display a list of pet ads
    }//If no ad is found, it throws a 404 Not Found error (findOrFail).
    

public function show($id)
{
    $petAd = PetAd::findOrFail($id); // Find the pet ad by ID
    return view('ads.show-ad', compact('petAd')); // Show the detailed ad
}

//create()-	Show pet ad form
//store(Request $request)	-Validate and store pet ad
//index()	-List all pet ads
//show($id)	- Show details of a pet ad
    
    

}
