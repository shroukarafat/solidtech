
<?php

use Illuminate\Support\Facades\App;

if (!function_exists('trans_key')) {
    function trans_key($key)
    {
        $lang = session('lang', 'en'); 
        return \App\Models\Translation::where('lang_code', $lang)
                                      ->where('key', $key)
                                      ->first()
                                      ->value ?? $key; 
    }
}
