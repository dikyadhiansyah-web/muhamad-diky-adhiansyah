<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaesarController extends Controller
{
    public function index()
    {
        return view('caesar');
    }

    public function process(Request $request)
    {
        $text = $request->text;
        $shift = $request->shift;
        $mode = $request->mode;

        $result = '';

        $shift = $shift % 26;

        for ($i = 0; $i < strlen($text); $i++) {
            $char = $text[$i];

            if (ctype_alpha($char)) {
                $ascii = ord($char);
                $base = ctype_upper($char) ? 65 : 97;

                if ($mode == 'encrypt') {
                    $result .= chr(($ascii - $base + $shift) % 26 + $base);
                } else {
                    $result .= chr(($ascii - $base - $shift + 26) % 26 + $base);
                }
            } else {
                $result .= $char;
            }
        }

        return view('caesar', compact('result', 'text', 'shift'));
    }
}