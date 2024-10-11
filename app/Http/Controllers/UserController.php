<?php

namespace App\Http\Controllers;
use Carbon\Carbon;

use App\Models\Booking;
use App\Models\Car; // Assuming you have a Car model
use App\Models\Contact;
use App\Models\Driver;
use App\Models\Pricing; // Assuming you have a Pricing model
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;
// use SebastianBergmann\CodeCoverage\Driver\Driver;

class UserController extends Controller
{
    // Display the user index page
    // public function index()
    // {
    //     return view('user.index'); // Adjust the view as necessary
    // }
    public function index()
    {
        $services = Service::all();           // Fetch all services
        $testimonials = Testimonial::all();   // Fetch all testimonials
        return view('user.index', compact('services', 'testimonials')); // Pass both services and testimonials to the view
    }
    public function storeBooking(Request $request)
    {
        // Validate the booking form data
        $request->validate([
            'pick_up_location' => 'required|string|max:255',
            'drop_off_location' => 'required|string|max:255',
            'pick_up_date' => 'required|date',
            'drop_off_date' => 'required|date',
            'pick_up_time' => 'required|string', // Ensure time is a string for AM/PM
        ]);
    
        // Format the pick_up_time to AM/PM if it is in 24-hour format
        $formattedTime = date('g:i A', strtotime($request->pick_up_time));
    
        // Store the booking data
        Booking::create([
            'pick_up_location' => $request->pick_up_location,
            'drop_off_location' => $request->drop_off_location,
            'pick_up_date' => $request->pick_up_date,
            'drop_off_date' => $request->drop_off_date,
            'pick_up_time' => $formattedTime, // Store as formatted string (e.g., "2 PM" or "10:30 AM")
        ]);
    
        // Redirect with a success message
        return redirect()->back()->with('success', 'Booking has been successfully created!');
    }
    
    
    
    

    public function storeDriver(Request $request)
{
    // Validate the form inputs
    $request->validate([
        'driver-select' => 'required',
        'pickup-location' => 'required|string|max:255',
        'dropoff-location' => 'required|string|max:255',
        'pickup-date' => 'required|date',
        'dropoff-date' => 'required|date',
        'pickup_time' => 'required', // Use pickup_time to match input name and database column
    ]);

    // Format the pickup time
    $formattedTime = date('g:i A', strtotime($request->input('pickup_time')));

    // Store the data into the 'drivers' table
    Driver::create([
        'name' => $request->input('driver-select'),
        'pickup_location' => $request->input('pickup-location'),
        'dropoff_location' => $request->input('dropoff-location'),
        'pickup_date' => $request->input('pickup-date'),
        'dropoff_date' => $request->input('dropoff-date'),
        'pickup_time' => $formattedTime, // Match the column name
    ]);

    // Redirect with a success message
    return redirect()->route('user.index')->with('success', 'Driver details stored successfully.');
}





    // Display the list of cars
    public function car()
    {
        $cars = Car::all(); // Fetch all cars from the database
        return view('user.cars', compact('cars')); // Pass cars to the view
    }

    // Display the pricing page
    public function pricing()
    {
        $pricings = Pricing::all(); // Fetch all pricing details
        return view('user.pricing', compact('pricings')); // Pass pricing details to the view
    }

    // Display the contact page
    public function contact()
    {
        return view('user.contact'); // Adjust the view as necessary
    }

    public function storeContact(Request $request)
    {
        // Validate the form inputs
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'message' => 'required|string|max:255',
        ]);
    
        // Store the data into the 'contacts' table using the Contact model
        Contact::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'message' => $request->input('message'),
        ]);
    
        // Redirect to the contact page or another page with a success message
        return redirect()->route('user.contact')->with('success', 'Contact details stored successfully.');
    }
}
