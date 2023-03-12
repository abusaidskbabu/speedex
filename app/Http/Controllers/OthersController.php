<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cit;
use DB;
use App\Notifications\arifPasswordResetNotification;
use Hash;
use Helper;
use Carbon;

use Illuminate\Support\Str;

class OthersController extends Controller{

	public function aboutus(){
		$data['title'] = 'About Us';
        $data['setting'] = DB::TABLE('tb_website_settings')->orderBy('id', 'desc')->first();
        return view('layouts.default.template.about-us', $data);
	}

	public function partners(){
		$data['title'] = 'Our Partners';
        $data['setting'] = DB::TABLE('tb_website_settings')->orderBy('id', 'desc')->first();
        return view('layouts.default.template.partners', $data);
	}

	public function teams(){
		$data['title'] = 'Our Teams';
        $data['setting'] = DB::TABLE('tb_website_settings')->orderBy('id', 'desc')->first();
        return view('layouts.default.template.teams', $data);
	}

	public function blogs(){
		$data['title'] = 'Blogs';
        $data['setting'] = DB::TABLE('tb_website_settings')->orderBy('id', 'desc')->first();
        return view('layouts.default.template.blogs', $data);
	}

	public function blogDetails($id){
		$data['title'] = 'Blogs';
        $data['setting'] = DB::TABLE('tb_website_settings')->orderBy('id', 'desc')->first();
        $data['blog'] = DB::TABLE('tb_blogs')->where('id',$id)->first();
        return view('layouts.default.template.blog-details', $data);
	}

	public function serviceDetails($id){
		$data['title'] = 'Service';
        $data['setting'] = DB::TABLE('tb_website_settings')->orderBy('id', 'desc')->first();
        $data['service'] = DB::TABLE('tb_service')->where('id',$id)->first();
        return view('layouts.default.template.service-details', $data);
	}

	public function contact(){
		$data['title'] = 'Contact Us';
        $data['setting'] = DB::TABLE('tb_website_settings')->orderBy('id', 'desc')->first();
        return view('layouts.default.template.contact', $data);
	}

	public function faqs(){
		$data['title'] = 'FAQ';
        $data['setting'] = DB::TABLE('tb_website_settings')->orderBy('id', 'desc')->first();
        return view('layouts.default.template.faq', $data);
	}

	public function searchShipment(Request $request){

		$tracking_no = $request->tracking_no;

		$bill = DB::table('bill_details')->where('tracking_no',$tracking_no)->first();
		$bill_id = $bill->bill_id;

		$bill_details = DB::table('bill_details')
		    ->join('shipers_details', 'bill_details.tracking_no', '=', 'shipers_details.tracking_no')
		    ->where(['bill_details.tracking_no'=>$tracking_no],['bill_details.id'=>$bill_id])
		    ->first();

		$data['title'] = 'Shipment Details';
        $data['setting'] = DB::TABLE('tb_website_settings')->orderBy('id', 'desc')->first();
        $data['bill_details'] = $bill_details;
        return view('layouts.default.template.search', $data);
	}
}
?>