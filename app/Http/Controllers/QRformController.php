<?php

namespace App\Http\Controllers;

use App\Models\QrForm;
// use Barryvdh\DomPDF\PDF;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class QRformController extends Controller
{
    // Show QR Image
    public function show()
    {
        return view('qr.index');
    }

    // Show Create Form
    public function create()
    {
        return view('qr.register');
    }

    // Store Register Data
    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')]
        ]);

        // Register User
        $qrForm = QrForm::create($formFields);

        return redirect('/qr/download')->with('message', 'User registered successfully!');
    }

    public function download(Request $request)
    {
        return view('qr.download');
    }

    public function generatePDF()
    {
        $fileName =  'abcd.pdf' ;
        $pdf = public_path('pdf/'.$fileName);
        return response()->download($pdf);
    }
}




