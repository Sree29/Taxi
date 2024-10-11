<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use App\Models\Car;
use App\Models\Pricing;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function index()
    // {
    //     return view('user.index'); // Return the user index view
    // }
   
    public function index()
    {
        $services = Service::all(); // Fetch all services
        $testimonials = Testimonial::all(); 
        return view('user.index', compact('services','testimonials',)); // Pass services to the user index view
    }
  
    
    public function storeBooking(Request $request)
    {
        // Validate the booking form data
        $request->validate([
            'pick_up_location' => 'required|string|max:255',
            'drop_off_location' => 'required|string|max:255',
            'pick_up_date' => 'required|date',
            'drop_off_date' => 'required|date',
            'pick_up_time' => 'required',
        ]);
    
        // Store the booking data
        Booking::create([
            'pick_up_location' => $request->pick_up_location,
            'drop_off_location' => $request->drop_off_location,
            'pick_up_date' => $request->pick_up_date,
            'drop_off_date' => $request->drop_off_date,
            'pick_up_time' => $request->pick_up_time,
        ]);
    
        // Redirect back to the index page with a success message
        return redirect()->route('user.index')->with('success', 'Booking has been successfully created!');
    }
    


    
    // public function cars()
    // {
    //     return view('user.cars'); // Return the cars view
    // }
    public function car()
    {
        // Retrieve all cars from the database
        $cars = Car::all();

        // Return the view with the retrieved cars
        return view('user.cars', compact('cars'));
    }
    // public function pricing()
    // {
    //     return view('user.pricing'); // Return the pricing view
    // }
    public function pricing()
    {
        // Fetch data from the Pricing model
        $pricings = Pricing::all(); // Adjust this according to your requirements
    
        // Return the pricing view with the pricing data
        return view('user.pricing', compact('pricings'));
    }
    
    
    
    public function contact()
    {
        return view('user.contact'); // Return the contact view
    }
}
