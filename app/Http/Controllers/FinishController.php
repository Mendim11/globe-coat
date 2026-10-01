<?php

namespace App\Http\Controllers;

use App\Models\Finish;
use Illuminate\View\View;

class FinishController extends Controller
{
    public function show(Finish $finish): View
    {
        abort_unless($finish->is_published, 404);

        return view('finishes.show', [
            'finish' => $finish,
        ]);
    }
}
