<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function slider_feature(Request $request)
    {
        if (!$request->session()->has('admin'))
            return redirect('login')->with(['error' => 'Login & Continue']);

        $data = DB::table('slider_setings')->orderBy('id', 'ASC')
            ->select('*')->get();
        return view('admin/slider_feature', compact('data'));
    }

    public function slider_feature_insert(Request $request)
    {
        if (!$request->session()->has('admin'))
            return redirect('login')->with(['error' => 'Login & Continue']);

        $titel_1 = $request->titel;
        $discription_1 = $request->discription;
        $link_1 = $request->link;
        $button_name_1 = $request->button_name;
        $button_link_1 = $request->button_link;

        DB::table('slider_setings')
            ->where('id', 0)
            ->update(['value_1' => $titel_1]);
        DB::table('slider_setings')
            ->where('id', 1)
            ->update(['value_1' => $discription_1]);
        DB::table('slider_setings')
            ->where('id', 2)
            ->update(['value_1' => $link_1]);
        DB::table('slider_setings')
            ->where('id', 3)
            ->update(['value_1' => $button_name_1]);
        DB::table('slider_setings')
            ->where('id', 4)
            ->update(['value_1' => $button_link_1]);
        DB::table('slider_setings')
            ->where('id', 50)
            ->update(['value_1' => $request->enable == 'on' ? 'true' : 'false']);

        

        return redirect('Slider-Feature')->with(['success' => 'Slider Feature 1 Update Successfully.']);
    }
    public function slider_feature_insert2(Request $request)
    {
        if (!$request->session()->has('admin'))
            return redirect('login')->with(['error' => 'Login & Continue']);

        $titel_2 = $request->titel2;
        $discription_2 = $request->discription2;
        $link_2 = $request->link2;
        $button_name_2 = $request->button_name2;
        $button_link_2 = $request->button_link2;

        DB::table('slider_setings')
            ->where('id', 5)
            ->update(['value_1' => $titel_2]);
        DB::table('slider_setings')
            ->where('id', 6)
            ->update(['value_1' => $discription_2]);
        DB::table('slider_setings')
            ->where('id', 7)
            ->update(['value_1' => $link_2]);
        DB::table('slider_setings')
            ->where('id', 8)
            ->update(['value_1' => $button_name_2]);
        DB::table('slider_setings')
            ->where('id', 9)
            ->update(['value_1' => $button_link_2]);

        return redirect('Slider-Feature')->with(['success' => 'Slider Feature 2 Update Successfully.']);
    }
    public function schedule_insert(Request $request)
    {
        if (!$request->session()->has('admin'))
            return redirect('login')->with(['error' => 'Login & Continue']);

        $titel_2 = $request->s_titel;
        $s_name_1 = $request->s_name_1;
        $s_time_1 = $request->s_time_1;
        $s_name_2 = $request->s_name_2;
        $s_time_2 = $request->s_time_2;
        $s_name_3 = $request->s_name_3;
        $s_time_3 = $request->s_time_3;


        DB::table('slider_setings')
            ->where('id', 10)
            ->update(['value_1' => $titel_2]);
        DB::table('slider_setings')
            ->where('id', 11)
            ->update(['value_1' => $s_name_1]);
        DB::table('slider_setings')
            ->where('id', 12)
            ->update(['value_1' => $s_time_1]);
        DB::table('slider_setings')
            ->where('id', 13)
            ->update(['value_1' => $s_name_2]);
        DB::table('slider_setings')
            ->where('id', 14)
            ->update(['value_1' => $s_time_2]);
        DB::table('slider_setings')
            ->where('id', 15)
            ->update(['value_1' => $s_name_3]);
        DB::table('slider_setings')
            ->where('id', 16)
            ->update(['value_1' => $s_time_3]);

        return redirect('Slider-Feature')->with(['success' => 'Schedule Update Successfully.']);
    }

    public function header(Request $request)
    {
        if (!$request->session()->has('admin'))
            return redirect('login')->with(['error' => 'Login & Continue']);

        $data = DB::table('slider_setings')->orderBy('id', 'ASC')
            ->select('*')->get();
        return view('admin/header', compact('data'));
    }


    public function header_insert_process(Request $request)
    {
        if (!$request->session()->has('admin'))
            return redirect('login')->with(['error' => 'Login & Continue']);

        $address = $request->address;
        $mobile = $request->mobile;
        $email = $request->email;
        $link_1 = $request->link_1;
        $link_2 = $request->link_2;
        $link_3 = $request->link_3;
        $link_4 = $request->link_4;


        DB::table('slider_setings')
            ->where('id', 17)
            ->update(['value_1' => $address]);
        DB::table('slider_setings')
            ->where('id', 18)
            ->update(['value_1' => $mobile]);
        DB::table('slider_setings')
            ->where('id', 19)
            ->update(['value_1' => $email]);
        DB::table('slider_setings')
            ->where('id', 20)
            ->update(['value_1' => $link_1]);
        DB::table('slider_setings')
            ->where('id', 21)
            ->update(['value_1' => $link_2]);
        DB::table('slider_setings')
            ->where('id', 22)
            ->update(['value_1' => $link_3]);
        DB::table('slider_setings')
            ->where('id', 23)
            ->update(['value_1' => $link_4]);
        DB::table('slider_setings')
            ->where('id', 34)
            ->update(['value_1' => $request->enable == 'on' ? 'true' : 'false']);


        return redirect('Header')->with(['success' => 'Header Update Successfully.']);
    }
    public function logo_details()
    {
        $data = DB::table('slider_setings')->orderBy('id', 'ASC')
            ->select('*')->get();
        return view('Admin.logo', compact('data'));
    }
    public function video()
    {
        $data = DB::table('slider_setings')->orderBy('id', 'ASC')
            ->select('*')->get();
        return view('Admin.video', compact('data'));
    }
    public function video_process(Request $request)
    {
        if (!$request->session()->has('admin'))
            return redirect('login')->with(['error' => 'Login & Continue']);


        DB::table('slider_setings')
            ->where('id', 27)
            ->update(['value_1' => $request->title]);

        DB::table('slider_setings')
            ->where('id', 26)
            ->update(['value_1' => $request->discription]);

        DB::table('slider_setings')
            ->where('id', 25)
            ->update(['value_1' => $request->link]);

        DB::table('slider_setings')
            ->where('id', 24)
            ->update(['value_1' => $request->enable == 'on' ? 'true' : 'false']);

            if ($request->has('thumbnail')) {
                $slider_image  = $request->thumbnail->store('public');
                DB::table('slider_setings')
                    ->where('id', 77)
                    ->update(['value_1' => $slider_image]);
            }

        return redirect('Video')->with(['success' => 'RECOMMENDED VIDEO Update Successfully']);
    }

    public function newsletter()
    {
        $data = DB::table('newsletter')->orderBy('id', 'DESC')
            ->select('*')->get();
        return view('admin.newsletter', compact('data'));
    }

    public function body_section()
    {
        $data = DB::table('slider_setings')->orderBy('id', 'ASC')
            ->select('*')->get();
        return view('Admin.bodysection', compact('data'));
    }
    public function body_section_process(Request $request)
    {

        if ($request->has('Side_image')) {

            $slider_image  = $request->Side_image->store('public');

            DB::table('slider_setings')
                ->where('id', 32)
                ->update(['value_1' => $slider_image]);
        }

        DB::table('slider_setings')
            ->where('id', 30)
            ->update(['value_1' => $request->title]);

        DB::table('slider_setings')
            ->where('id', 31)
            ->update(['value_1' => $request->discription]);

        DB::table('slider_setings')
            ->where('id', 33)
            ->update(['value_1' => $request->enable == 'on' ? 'true' : 'false']);


        return redirect('Body-Section')->with(['success' => 'Section Update Successfully']);
    }

    public function team()
    {
        $data = DB::table('slider_setings')->orderBy('id', 'ASC')
            ->select('*')->get();
        return view('Admin.team', compact('data'));
    }
    public function team_section_process(Request $request)
    {
        if (!$request->session()->has('admin'))
            return redirect('login')->with(['error' => 'Login & Continue']);

        DB::table('slider_setings')
            ->where('id', 35)
            ->update(['value_1' => $request->enable == 'on' ? 'true' : 'false']);

        DB::table('slider_setings')
            ->where('id', 36)
            ->update(['value_1' => $request->title]);

        DB::table('slider_setings')
            ->where('id', 37)
            ->update(['value_1' => $request->discription]);


        DB::table('slider_setings')
            ->where('id', 38)
            ->update(['value_1' => $request->mamber_1_enable == 'on' ? 'true' : 'false']);

        DB::table('slider_setings')
            ->where('id', 39)
            ->update(['value_1' => $request->member_1_name]);

        DB::table('slider_setings')
            ->where('id', 40)
            ->update(['value_1' => $request->member_1_deg]);

        if ($request->has('member_1_image')) {
            $slider_image  = $request->member_1_image->store('public');
            DB::table('slider_setings')
                ->where('id', 41)
                ->update(['value_1' => $slider_image]);
        }


        DB::table('slider_setings')
            ->where('id', 42)
            ->update(['value_1' => $request->mamber_2_enable == 'on' ? 'true' : 'false']);

        DB::table('slider_setings')
            ->where('id', 43)
            ->update(['value_1' => $request->member_2_name]);

        DB::table('slider_setings')
            ->where('id', 44)
            ->update(['value_1' => $request->member_2_deg]);

        if ($request->has('member_2_image')) {
            $slider_image  = $request->member_2_image->store('public');
            DB::table('slider_setings')
                ->where('id', 45)
                ->update(['value_1' => $slider_image]);
        }


        DB::table('slider_setings')
            ->where('id', 46)
            ->update(['value_1' => $request->mamber_3_enable == 'on' ? 'true' : 'false']);

        DB::table('slider_setings')
            ->where('id', 47)
            ->update(['value_1' => $request->member_3_name]);

        DB::table('slider_setings')
            ->where('id', 48)
            ->update(['value_1' => $request->member_3_deg]);

        if ($request->has('member_3_image')) {
            $slider_image  = $request->member_3_image->store('public');
            DB::table('slider_setings')
                ->where('id', 49)
                ->update(['value_1' => $slider_image]);
        }

        return redirect('Team')->with(['success' => 'Team Update Successfully']);
    }

    public  function about_details_1()
    {
        $data = DB::table('slider_setings')->orderBy('id', 'ASC')
            ->select('*')->get();
        return view('Admin.about_details_1', compact('data'));
    }
    public  function about_details_1_process(Request $request)
    {

        DB::table('slider_setings')
            ->where('id', 51)
            ->update(['value_1' => $request->enable == 'on' ? 'true' : 'false']);

        DB::table('slider_setings')
            ->where('id', 52)
            ->update(['value_1' => $request->title]);

        DB::table('slider_setings')
            ->where('id', 53)
            ->update(['value_1' => $request->discription]);

        if ($request->has('img')) {
            $slider_image  = $request->img->store('public');
            DB::table('slider_setings')
                ->where('id', 54)
                ->update(['value_1' => $slider_image]);
        }

        return redirect('About-Details-1')->with(['success' => 'About Details 1 Update Successfully']);
    }

    public  function about_details_2()
    {
        $data = DB::table('slider_setings')->orderBy('id', 'ASC')
            ->select('*')->get();
        return view('Admin.about_details_2', compact('data'));
    }

    public  function about_details_2_process(Request $request)
    {

        DB::table('slider_setings')
            ->where('id', 55)
            ->update(['value_1' => $request->enable == 'on' ? 'true' : 'false']);

        DB::table('slider_setings')
            ->where('id', 56)
            ->update(['value_1' => $request->title]);

        DB::table('slider_setings')
            ->where('id', 57)
            ->update(['value_1' => $request->discription]);

        if ($request->has('img')) {
            $slider_image  = $request->img->store('public');
            DB::table('slider_setings')
                ->where('id', 58)
                ->update(['value_1' => $slider_image]);
        }

        return redirect('About-Details-1')->with(['success' => 'About Details 1 Update Successfully']);
    }

    public function about_member()
    {
        $data = DB::table('slider_setings')->orderBy('id', 'ASC')
            ->select('*')->get();
        return view('Admin.about_mamber', compact('data'));
    }
    public function about_member_process(Request $request)
    {
        DB::table('slider_setings')
            ->where('id', 59)
            ->update(['value_1' => $request->enable == 'on' ? 'true' : 'false']);

        DB::table('slider_setings')
            ->where('id', 60)
            ->update(['value_1' => $request->title]);


        DB::table('slider_setings')
            ->where('id', 61)
            ->update(['value_1' => $request->mamber_1_enable == 'on' ? 'true' : 'false']);

        DB::table('slider_setings')
            ->where('id', 62)
            ->update(['value_1' => $request->member_1_name]);

        DB::table('slider_setings')
            ->where('id', 63)
            ->update(['value_1' => $request->member_1_deg]);

        if ($request->has('member_1_image')) {
            $slider_image  = $request->member_1_image->store('public');
            DB::table('slider_setings')
                ->where('id', 64)
                ->update(['value_1' => $slider_image]);
        }

        DB::table('slider_setings')
            ->where('id', 65)
            ->update(['value_1' => $request->mamber_2_enable == 'on' ? 'true' : 'false']);

        DB::table('slider_setings')
            ->where('id', 66)
            ->update(['value_1' => $request->member_2_name]);

        DB::table('slider_setings')
            ->where('id', 67)
            ->update(['value_1' => $request->member_2_deg]);

        if ($request->has('member_2_image')) {
            $slider_image  = $request->member_2_image->store('public');
            DB::table('slider_setings')
                ->where('id', 68)
                ->update(['value_1' => $slider_image]);
        }

        DB::table('slider_setings')
            ->where('id', 69)
            ->update(['value_1' => $request->mamber_3_enable == 'on' ? 'true' : 'false']);

        DB::table('slider_setings')
            ->where('id', 70)
            ->update(['value_1' => $request->member_3_name]);

        DB::table('slider_setings')
            ->where('id', 71)
            ->update(['value_1' => $request->member_3_deg]);

        if ($request->has('member_3_image')) {
            $slider_image  = $request->member_3_image->store('public');
            DB::table('slider_setings')
                ->where('id', 72)
                ->update(['value_1' => $slider_image]);
        }


        DB::table('slider_setings')
            ->where('id', 73)
            ->update(['value_1' => $request->mamber_4_enable == 'on' ? 'true' : 'false']);

        DB::table('slider_setings')
            ->where('id', 74)
            ->update(['value_1' => $request->member_4_name]);

        DB::table('slider_setings')
            ->where('id', 75)
            ->update(['value_1' => $request->member_4_deg]);

        if ($request->has('member_4_image')) {
            $slider_image  = $request->member_4_image->store('public');
            DB::table('slider_setings')
                ->where('id', 76)
                ->update(['value_1' => $slider_image]);
        }
        return redirect('About-Members')->with(['success' => 'About Member Update Successfully']);
    }

    public function about_galary()
    {
        $data = DB::table('galary')->orderBy('id', 'DESC')
        ->select('*')->get();
        return view('Admin.galary', compact('data'));
    }

    public function galary_process(Request $request)
    {
        $simg=null;
        if ($request->has('image')) {
            $simg  = $request->image->store('public');
        }
        $data = array(
            'title'=> $request->titel,
            'image'=> $simg
        );
        DB::table('galary')->insert($data);
        return redirect('About-Galary')->with(['success' => 'About Page, Galary Image Successfully Added.']);

    }
    public function delete_galary($id)
    {
      DB::table('galary')->where('id',$id)->delete();
      return redirect('About-Galary')->with(['success' => 'About Page, Galary Image Successfully Deleted.']);
    }

     public function contact_details()
    {
        $data = DB::table('slider_setings')->orderBy('id', 'ASC')
            ->select('*')->get();
        return view('Admin.contact_details', compact('data'));
    }

    public function contact_details_process(Request $request)
    {
        DB::table('slider_setings')
        ->where('id', 78)
        ->update(['value_1' => $request->description]);

        DB::table('slider_setings')
        ->where('id', 79)
        ->update(['value_1' => $request->location]);

        DB::table('slider_setings')
        ->where('id', 80)
        ->update(['value_1' => $request->mobile1]);

        DB::table('slider_setings')
        ->where('id', 81)
        ->update(['value_1' => $request->mobile2]);

        DB::table('slider_setings')
        ->where('id', 82)
        ->update(['value_1' => $request->email]);

        DB::table('slider_setings')
        ->where('id', 83)
        ->update(['value_1' => $request->website]);

        DB::table('slider_setings')
        ->where('id', 84)
        ->update(['value_1' => $request->latitude]);

        DB::table('slider_setings')
        ->where('id', 85)
        ->update(['value_1' => $request->longitude]);

        return redirect('Contact-Details')->with(['success' => 'Contact Details Update Successfully.']);

    }

    public function contact_message()
    {
        $data = DB::table('contactus')->orderBy('id', 'DESC')
            ->select('*')->get();
        return view('Admin.contact_message', compact('data'));
    }
    

    public function terms_condition()
    {
        $data = DB::table('slider_setings')->orderBy('id', 'ASC')
            ->select('*')->get();
        return view('Admin.terms_condition', compact('data'));
    }    
    
    public function terms_condition_show()
    {
        $data = DB::table('slider_setings')->orderBy('id', 'ASC')
            ->select('*')->get();
        return view('frontend.terms_condition', compact('data'));
    }    
    public function privacy_policy()
    {
        $data = DB::table('slider_setings')->orderBy('id', 'ASC')
            ->select('*')->get();
        return view('Admin.privacy_policy', compact('data'));
    }  
    public function privacy_policys_show()
    {
        $data = DB::table('slider_setings')->orderBy('id', 'ASC')
            ->select('*')->get();
        return view('frontend.privacy_policy', compact('data'));
    }
    
    public function terms_condition_process(Request $request)
    {
        DB::table('slider_setings')
        ->where('id', 93)
        ->update(['value_1' => $request->title]);

        DB::table('slider_setings')
        ->where('id', 94)
        ->update(['value_1' => $request->discription]);

        return redirect('Terms-Condition')->with(['success' => 'Terms Condition Update Successfully.']);
    }   
    public function privacy_policy_process(Request $request)
    {
        DB::table('slider_setings')
        ->where('id', 95)
        ->update(['value_1' => $request->title]);

        DB::table('slider_setings')
        ->where('id', 96)
        ->update(['value_1' => $request->discription]);

        return redirect('Privacy-Policy')->with(['success' => 'Privacy-Policy Update Successfully.']);
    }


    


}
