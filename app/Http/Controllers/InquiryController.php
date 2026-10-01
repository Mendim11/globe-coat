<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class InquiryController extends Controller
{
    public function sample(): View
    {
        return view('sample');
    }

    public function store(Request $request): RedirectResponse
    {
        if ($request->filled('company_website')) {
            return back()->with('status', 'Thank you. We will be in touch shortly.');
        }

        $data = $request->validate([
            'type' => ['required', 'in:contact,sample'],
            'first_name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'subject' => ['nullable', 'string', 'max:160'],
            'message' => ['nullable', 'string', 'max:5000'],
        ]);

        Inquiry::query()->create($data);

        $message = $data['type'] === 'sample'
            ? 'Your sample request has been received. Our studio will be in touch.'
            : 'Thank you. Your message has been received.';

        return back()->with('status', $message);
    }
}
