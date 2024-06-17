<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Log;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    /**
     * Show the contact form.
     *
     * @return \Illuminate\View\View
     */
    public function showContactForm()
    {
        return view('contact_us');
    }

    /**
     * Handle the form submission.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submitContactForm(Request $request)
    
    {
        $contactData = $request->only('name', 'email', 'message');

        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Process the form data (e.g., send email, save to database, etc.)
        $contactData = $request->only('name', 'email', 'message');

        // Optionally, send an email
        // Mail::to(config('mail.from.address'))->send(new ContactMail($contactData));


        // Optionally, save the data to the database or log it
        // Example of logging the data:
        Log::info('Contact form submitted', $contactData);

        // Redirect with success message
        return redirect()->route('contact.show')->with('success', 'Thank you for your message. We will get back to you soon.');
    }}
