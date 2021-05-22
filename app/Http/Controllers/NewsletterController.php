<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
    if ( ! Newsletter::isSubscribed($request->newsletter_email) ) {

        Newsletter::subscribe($request->newsletter_email);

        return redirect()->back()->with('newsletter', 'You have successfully subscribed to our newsletter');

    }
   }
}
