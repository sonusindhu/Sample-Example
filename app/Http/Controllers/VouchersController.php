<?php

#use Modules\Core\Models\User;
namespace App\Http\Controllers;
use \DB;

class VouchersController extends Controller {
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
        
        $dealVouchers = DB::table('vouchers')
                ->where('voucher_type', 'deal')
                ->take(24)
                ->orderBy('id' , 'desc')
                ->get();
        
        return view('vouchers/all' , array('dealVouchers' => $dealVouchers));
    }
    
    public function discount() {
        
        
        $discountVouchers = DB::table('vouchers')
                ->where('voucher_type', 'discount')
                ->take(24)->orderBy('id' , 'desc')->get();
        
        return view('vouchers/discount' , array('discountVouchers' => $discountVouchers));
    }
    
    public function group() {
        
        $groupVouchers = DB::table('vouchers')->where('voucher_type', 'group')->take(24)->orderBy('id' , 'desc')->get();
       
        return view('vouchers/group' , array('groupVouchers' => $groupVouchers));
    }
    
    public function gift() {
        
        $giftVouchers = DB::table('vouchers')->where('voucher_type', 'gift')->take(24)->orderBy('id' , 'desc')->get();
        
        return view('vouchers/gift' , array('giftVouchers' => $giftVouchers));
    }
    
    public function offer() {
        $offerVouchers = DB::table('vouchers')->where('voucher_type', 'offer')->take(24)->orderBy('id' , 'desc')->get();
        
        return view('vouchers/offer' , array('offerVouchers' => $offerVouchers));
    }
    
    public function deal() {
        
        $dealVouchers = DB::table('vouchers')->where('voucher_type', 'deal')->take(24)->orderBy('id' , 'desc')->get();
       
        return view('vouchers/deal' , array('dealVouchers' => $dealVouchers ));
    }

}
