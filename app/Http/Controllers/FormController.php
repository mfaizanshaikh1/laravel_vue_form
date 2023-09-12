<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormData;
use App\Jobs\SendEmail;


class FormController extends Controller
{
    public function submit(Request $request)
    {
        // Validation (you can add more validation rules)
        $request->validate([
            'name' => 'required|string',
            'mobile' => 'required|string',
            'shop' => 'required|string',
            'cr' => 'required|string',
            'vat' => 'required|string|unique:form_data,vat', // Ensure VAT number is unique
        ]);

        // Create a new record in the database
        $formData = new FormData([
            'name' => $request->input('name'),
            'mobile' => $request->input('mobile'),
            'shop' => $request->input('shop'),
            'cr' => $request->input('cr'),
            'vat' => $request->input('vat'),
        ]);
        $formData->save();
        

        SendEmail::dispatch($formData);

        // Dispatch a job to handle further processing (e.g., sending notifications)
        // You need to create a job class and dispatch it here
        

        return response()->json(['success' => true]);
    }
    
}
