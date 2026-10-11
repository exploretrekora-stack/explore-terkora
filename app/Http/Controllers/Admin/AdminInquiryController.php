<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminInquiryController extends Controller
{
    /**
     * Display a paginated list of all inquiries.
     */
    public function index(Request $request): View
    {
        $search = $request->input('search');

        $inquiries = Inquiry::when($search, function ($query, $search) {
            $query->where('name', 'like', "%{$search}%")
                ->orWhere('email', 'like', "%{$search}%")
                ->orWhere('phone_number', 'like', "%{$search}%")
                ->orWhere('destinations', 'like', "%{$search}%");
        })
            ->latest()
            ->paginate(15)
            ->withQueryString();

        return view('admin.inquiries', compact('inquiries', 'search'));
    }

    /**
     * Show a single inquiry detail.
     */
    public function show(Inquiry $inquiry): View
    {
        return view('admin.inquiry-detail', compact('inquiry'));
    }
}
