<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ajifatur\FaturCMS\Models\Cabang;

class CabangController extends Controller
{		
    /**
     * Menampilkan semua cabang
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Referral
        referral($request->query('ref'), 'site.cabang.index');
		
		// Data cabang
        $cabang = Cabang::all();

        // View
        return view('front.cabang.index', [
            'cabang' => $cabang,
		]);
    }
}