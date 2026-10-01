<?php

namespace App\Http\Controllers;

use App\Models\Finish;
use App\Models\GalleryImage;
use App\Models\SiteSetting;
use Illuminate\View\View;

class PresentationController extends Controller
{
    public function index(): View
    {
        return view('presentation', [
            'site' => SiteSetting::current(),
            'finishes' => Finish::query()
                ->where('is_published', true)
                ->orderBy('sort_order')
                ->get(),
            'gallery' => GalleryImage::query()
                ->orderBy('row')
                ->orderBy('sort_order')
                ->get()
                ->groupBy('row'),
        ]);
    }
}
