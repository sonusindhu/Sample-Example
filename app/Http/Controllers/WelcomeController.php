<?php

#use Modules\Core\Models\User;
namespace App\Http\Controllers;

class WelcomeController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Welcome Controller
      |--------------------------------------------------------------------------
      |
      | This controller renders the "marketing page" for the application and
      | is configured to only allow guests. Like most of the other sample
      | controllers, you are free to modify or remove it as you desire.
      |
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest');
    }

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index() {
        
//        $dealVouchers = \DB::table('vouchers')->where('voucher_type', 'deal')->take(3)->orderBy('id' , 'desc')->get();
//        
//        $giftVouchers = \DB::table('vouchers')->where('voucher_type', 'gift')->take(3)->orderBy('id' , 'desc')->get();
//        
//        $discountVouchers = \DB::table('vouchers')->where('voucher_type', 'discount')->take(3)->orderBy('id' , 'desc')->get();
//        
//        $offerVouchers = \DB::table('vouchers')->where('voucher_type', 'offer')->take(3)->orderBy('id' , 'desc')->get();
//        
//        $groupVouchers = \DB::table('vouchers')->where('voucher_type', 'group')->take(3)->orderBy('id' , 'desc')->get();
        
        
//        echo '<pre>';
//        print_r($groupVouchers);
//        echo '</pre>';
//        exit;
        //return view('welcome' , array('dealVouchers' => $dealVouchers , 'giftVouchers' => $giftVouchers , 'discountVouchers' => $discountVouchers, 'offerVouchers' => $offerVouchers , 'groupVouchers' => $groupVouchers));
            
            return view('welcome' );
    }
    
    
    public function about() {
        return view('welcome' );
    }
    
    public function contact() {
        return view('welcome' );
    }
    
    public function intimatesolutions() {
        return view('welcome' );
    }
    
    public function gottmantherapy() {
        return view('welcome' );
    }

}
