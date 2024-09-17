<?php
namespace App\Http\Controllers;

use App\Models\PageContent;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        
        $locale = $request->input('locale', app()->getLocale());

        $content = PageContent::whereIn('page', ['front.index'])
            ->where('locale', $locale)
            ->pluck('value', 'key')
            ->toArray();

        
        return view('front.index', ['content' => $content]);
    }

}