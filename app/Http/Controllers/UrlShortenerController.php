<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UrlShortenerController extends Controller
{
    public function create()
    {
        return view('shortener');
    }

    public function store(Request $request)
    {
        $request->validate([
            'original_url' => 'required|url'
        ]);

        $short_url = Str::random(6);

        $url = Url::create([
            'original_url' => $request->original_url,
            'short_url' => $short_url
        ]);

        return back()->with('short_url', url($url->short_url));
    }

    public function show($short_url)
    {
        $url = Url::where('short_url', $short_url)->firstOrFail();

        return redirect($url->original_url);
    }
}
