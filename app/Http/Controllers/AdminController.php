<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Driver;
use Illuminate\Support\Facades\Storage;
use App\Models\Booking;
use App\Models\Pricing;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\Car;


class AdminController extends Controller
{
    // public function index()
    // {
    //     return view('admin.index'); // Return the admin index view
    // }
    public function index()
{
    
    $totalPricing = Pricing::count();
    $totalTestimonials = Testimonial::count();
    $totalServices = Service::count();
    $totalCars = Car::count();
    $totalContact = Contact::count();
    $totalBooking = Booking::count();
    $totalDrivers = Driver::count();

    return view('admin.index', compact('totalPricing', 'totalTestimonials','totalServices','totalCars','totalContact','totalBooking','totalDrivers'));
}



    // public function booking()
    // {
    //     return view('admin.booking'); // Return the booking management view
    // }
    public function booking()
    {
        // Fetch booking data
        $todaysBookings = Booking::whereDate('pick_up_date', today())->count();
        $monthBookings = Booking::whereMonth('pick_up_date', date('m'))->count();
        $totalBookings = Booking::count();
        $bookings = Booking::all(); // Fetch all bookings for the details table

        // Return the view with data
        return view('admin.booking', compact('todaysBookings', 'monthBookings', 'totalBookings', 'bookings'));
    }
    public function deleteBooking(Request $request)
    {
        $bookingId = $request->input('booking_id');
        // Assuming you have a Booking model
        Booking::destroy($bookingId);
        return redirect()->route('admin.booking')->with('success', 'Booking deleted successfully');
    }

    public function driver()
    {
        // Retrieve all drivers from the `drivers` table
        $drivers = Driver::all();

        // Return the admin driver view with the retrieved drivers data
        return view('admin.driver', compact('drivers'));
    }
    public function deleteDriver(Request $request)
{
    $request->validate([
        'driver_id' => 'required|exists:drivers,id',
    ]);

    // Find the driver by ID and delete
    $driver = Driver::findOrFail($request->driver_id);
    $driver->delete();

    return redirect()->back()->with('success', 'Driver deleted successfully.');
}

    // public function driver()
    // {
    //     return view('admin.driver'); 
        
    // }
    
     

  
    
   
    public function car()
    {
        $cars = Car::all(); // Fetch all cars
        return view('admin.car', compact('cars')); // Pass $cars to the view
    }
    

    public function carStore(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'car_name' => 'required|string|max:255',
            'car_image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'price_per_day' => 'required|numeric',
        ]);
    
        
        $imageName = null;
    
        
        if ($request->hasFile('car_image')) {
            
            $imagePath = $request->file('car_image')->store('images', 'public'); // Store in public disk
    
           
            $imageName = basename($imagePath); 
        }
    
        
        Car::create([
            'car_name' => $request->car_name,
            'car_image' => $imageName, 
            'price_per_day' => $request->price_per_day,
        ]);
    
        return redirect()->route('admin.car')->with('success', 'Car added successfully!');
    }
    

    public function Carupdate(Request $request)
    {
        
        $request->validate([
            'car_name' => 'required|string|max:255',
            'price_per_day' => 'required|numeric',
            'car_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        
        $car = Car::find($request->car_id);
        if (!$car) {
            return redirect()->route('admin.car')->with('error', 'Car not found');
        }

        $car->car_name = $request->car_name;
        $car->price_per_day = $request->price_per_day;

       
        if ($request->hasFile('car_image')) {
           
            $car->car_image = $request->file('car_image')->store('images'); // Adjust storage path as necessary
        }

       
        $car->save();

        return redirect()->route('admin.car')->with('success', 'Car updated successfully');
    }
    public function cardestroy($id)
    {
      
        $car = Car::findOrFail($id);
        
       
        $car->delete();

      
        return redirect()->route('admin.car')->with('success', 'Car deleted successfully.');
    }





    
    public function contact()
    {
        // Retrieve all drivers from the `drivers` table
        $contacts = Contact::all();

        // Return the admin driver view with the retrieved drivers data
        return view('admin.Contact', compact('contacts'));
    }

    public function deleteContact(Request $request)
    {
        // Validate the request
        $request->validate([
            'contact_id' => 'required|integer|exists:contacts,id',
        ]);

        // Find the contact by ID and delete it
        $contact = Contact::find($request->contact_id);

        if ($contact) {
            $contact->delete();
            return redirect()->back()->with('success', 'Contact deleted successfully.');
        }

        return redirect()->back()->with('error', 'Contact not found.');
    }

    // public function pricing()
    // {
    //     return view('admin.pricing'); // Return the pricing management view
    // }




    public function pricing()
    {
        $pricing = Pricing::all(); // Retrieve all pricing records from the database
        return view('admin.pricing', compact('pricing')); // Pass the $pricing variable to the view
    }



public function pricingStore(Request $request)
{
    // Validate the incoming request data
    $request->validate([
        'car_name' => 'required|string|max:255',
        'car_image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Validation for the image
        'per_hour_rate' => 'required|numeric',
        'per_day_rate' => 'required|numeric',
        'leasing_rate' => 'required|numeric',
    ]);

    // Handle the uploaded image
    if ($request->hasFile('car_image')) {
        // Store the image using the Storage facade
        $path = $request->file('car_image')->store('images', 'public'); // Store in storage/app/public/images

        // Create a new car pricing record
        Pricing::create([
            'car_name' => $request->car_name,
            'image' => $path, // Store the path of the uploaded image
            'per_hour_rate' => $request->per_hour_rate,
            'per_day_rate' => $request->per_day_rate,
            'leasing_rate' => $request->leasing_rate,
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Car added successfully.');
    }

    // If no image was uploaded, handle the case as necessary
    return redirect()->back()->with('error', 'Image upload failed.');
}


    public function pricingUpdate(Request $request, $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'car_name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Change 'car_image' to 'image'
            'per_hour_rate' => 'required|numeric',
            'per_day_rate' => 'required|numeric',
            'leasing_rate' => 'required|numeric',
        ]);

        // Find the pricing record by ID
        $pricing = Pricing::findOrFail($id); // Assuming you're using a Pricing model

        // Update the fields
        $pricing->car_name = $validatedData['car_name'];

        // Handle file upload for the image
        if ($request->hasFile('image')) { // Change 'car_image' to 'image'
            // Store the new image and get the path
            $filePath = $request->file('image')->store('images', 'public');
            $pricing->image = $filePath; // Change 'car_image' to 'image'
        }

        $pricing->per_hour_rate = $validatedData['per_hour_rate'];
        $pricing->per_day_rate = $validatedData['per_day_rate'];
        $pricing->leasing_rate = $validatedData['leasing_rate'];

        // Save the updated record
        $pricing->save();

        // Redirect back with a success message
        return redirect()->route('admin.pricing')->with('success', 'Pricing updated successfully.');
    }
    public function pricingDestroy($id)
    {
        // Find the pricing record by ID
        $pricing = Pricing::findOrFail($id);

        // Delete the pricing record
        $pricing->delete();

        // Redirect back with a success message
        return redirect()->route('admin.pricing')->with('success', 'Pricing details deleted successfully.');
    }





    public function service()
    {
        // Retrieve all services to pass to the view
        $services = Service::all();
        return view('admin.service', compact('services')); // Return the service management view with services data
    }

    public function store(Request $request)
    {
        $request->validate([
            'service_icon' => 'required|string|max:255',
            'service_name' => 'required|string|max:255',
            'description' => 'required|string|max:500',
        ]);

        // Create a new service
        Service::create([
            'service_icon' => $request->service_icon,
            'service_name' => $request->service_name,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.service')->with('success', 'Service added successfully!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'service_icon' => 'required|string|max:255',
            'service_name' => 'required|string|max:255',
            'description' => 'required|string|max:500',
        ]);

        // Find the service by ID and update it
        $service = Service::findOrFail($id);
        $service->service_icon = $request->service_icon;
        $service->service_name = $request->service_name;
        $service->description = $request->description;
        $service->save();

        return redirect()->route('admin.service')->with('success', 'Service updated successfully!');
    }
    public function destroy($id)
    {
        // Find the service by ID and delete it
        $service = Service::findOrFail($id);
        $service->delete();

        return redirect()->route('admin.service')->with('success', 'Service deleted successfully!');
    }





    public function testimonial()
    {
        $testimonials = Testimonial::all(); // Retrieves all testimonials without ordering
        return view('admin.testimonial', compact('testimonials'));
    }
    



    public function testimonialstore(Request $request)
    {
        $request->validate([
            'icon' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:500',
        ]);

        // Create a new testimonial
        Testimonial::create([
            'icon' => $request->icon,
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.testimonial')->with('success', 'Testimonial added successfully!');
    }
    public function terstimonialupdate(Request $request, $id)
    {
        // Validate the incoming data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            // Add other validation rules as necessary
        ]);

        // Find the testimonial by ID
        $testimonial = Testimonial::findOrFail($id);

        // Update the testimonial with new data
        $testimonial->name = $request->input('name');
        $testimonial->description = $request->input('description');
        // Set other fields as necessary
        $testimonial->save();

        // Redirect back or to a specific page with a success message
        return redirect()->route('admin.testimonial')->with('success', 'Testimonial updated successfully!');
    }
    public function terstimonialdelete($id)
    {
        // Find the testimonial by ID and delete it
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();

        // Redirect back with a success message
        return redirect()->route('admin.testimonial')->with('success', 'Testimonial deleted successfully!');
    }


}
