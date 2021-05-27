<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ajifatur\FaturCMS\Models\Mentor;
use Ajifatur\FaturCMS\Models\Mitra;
use Ajifatur\FaturCMS\Models\Slider;
use App\User;

class HomeController extends Controller
{		
    /**
     * Home Page
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Referral
        referral($request->query('ref'), 'site.home');

        // Data slider
        $slider = Slider::where('status_slider','=',1)->orderBy('order_slider','asc')->get();

        // Data mentor
        $mentor = Mentor::orderBy('order_mentor','asc')->get();
		
		// Data mitra
		$mitra = Mitra::orderBy('order_mitra','asc')->get();

        // View
        return view('front.home', [
            'mitra' => $mitra,
			'mentor' => $mentor,
			'slider' => $slider,
		]);
    }
}