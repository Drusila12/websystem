<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;

class DonationController extends Controller
{
    public function processDonation(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'fullname' => 'required|string|max:255',
            'gcash_number' => 'required|string|max:11',
            'amount' => 'required|numeric|min:0',
            'reference_number' => 'nullable|string|max:255',
        ]);

        // Store the donation in the database
        $donation = new Donation();
        $donation->fullname = $validatedData['fullname'];
        $donation->gcash_number = $validatedData['gcash_number'];
        $donation->amount = $validatedData['amount'];
        $donation->reference_number = $validatedData['reference_number'];
        $donation->save();

        // Redirect to the thank you page
        return redirect()->route('thank_you');
    }

    public function thankYou()
    {
        return view('thank_you');
    }
}
