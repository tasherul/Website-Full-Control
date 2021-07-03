<?php

namespace App\Http\Controllers;
use App\Models\rw;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Str;
use Illuminate\Http\Request;
use App\Traits\UploadTrait;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

use DB;
use Session;

class LoginController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('admin/login');
    }

    public function login_process(Request $request)
    {
       $user_name=$request->user_name;
       $password=$request->password;

       $login_select=DB::table('admin')
        ->where('user_name','=',$user_name)
        ->where('Password','=',$password)
        ->select('*')->get();
        if(count($login_select)==1)
        {
            $login_select = $login_select[0];
            Session::put('admin',$login_select);

            return redirect('dashbord');
        }
        else
        {
            
            return redirect('login')->with(['error'=> 'Your User ID And Password Not Match']);
        }
    }

    public function dashbord(Request $request)
    {
        if(!$request->session()->has('admin'))
            return redirect('login')->with(['error'=> 'Login & Continue']);
        
        
        $data = DB::table('slider_setings')->orderBy('id', 'ASC')
            ->select('*')->get();

        return view('admin/dashbord',compact('data'));
    }

    public function logout()
    {
        Session::forget('admin');
        return redirect('login')->with(['error'=> 'logout Succesfully']);
    }


    public function home_slider(Request $request)
    {
        if(!$request->session()->has('admin'))
            return redirect('login')->with(['error'=> 'Login & Continue']);

        $slide = DB::table('slider')->select('*')->get();
        
        return view('admin/slider',compact('slide'));
    }

    public function slider_insert_process(Request $request)
    {
        if(!$request->session()->has('admin'))
            return redirect('login')->with(['error'=> 'Login & Continue']);
        $titel=$request->titel;
        $discription=$request->discription;
        //$slider_image=$request->slider_image;
        $slider_image= Null;
        $link=$request->link;
        
        
        if ($request->has('slider_image')) {
            // Get image file
            $image = $request->file('slider_image');
            // Make a image name based on user name and current timestamp
             $name =time();// Str::slug(time());
            // Define folder path
            $folder = '/public';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            //$filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image
            
            // Set user profile image path in database to filePath
            $slider_image  = $request->slider_image->store('public');//$name.'.' . $image->getClientOriginalExtension();

            //$request->slider_image->store('public');
        }

        $data = [
            'titel'=>$titel,
            'discription'=>$discription,
            'image'=>$slider_image,
            'link'=>$link
        ];
        DB::table('slider')->insert($data);

        return redirect('Home-Slider')->with(['success'=>'Slider Insert Successfully.']);
    }

    public function home_slider_update(Request $request)
    {
        if(!$request->session()->has('admin'))
        return redirect('login')->with(['error'=> 'Login & Continue']);
        $id=$request->hidden_id;
        $titel=$request->titel;
        $discription=$request->discription;
        
        $slider_image=$request->hidden_img;
       // $slider_image= Null;
        $link=$request->link;
        
        
        if ($request->has('slider_image')) {
        
            $image = $request->file('slider_image');
            
             $name =time();
            $folder = '/public';
            
            $slider_image  = $request->slider_image->store('public');

            $request->slider_image->store('public');
        }

        $data = [
            'titel'=>$titel,
            'discription'=>$discription,
            'image'=>$slider_image,
            'link'=>$link
        ];

        DB::table('slider')
            ->where('id', $id)
            ->update($data);
            
            $data = DB::table('slider_setings')->orderBy('id', 'ASC')
            ->select('*')->get();

        return redirect('Home-Slider')->with(['success'=>'Slider Update Successfully.']);
    }
    public function profile()
    {
        return view('Admin.profile');
    } 
    public function profile_process(Request $request)
    {

        $new_password = $request->newpass;
        $confirm_password = $request->confirmpass;
        $dt = Session::get('admin'); 
        $images =$dt->image;
        $password=$request->hinndenpass;

        
        if ($request->has('image')) {
            $images  = $request->image->store('public');
        }

        if($new_password!=null && $confirm_password !=null)
        {
            if($new_password == $confirm_password)
            {
                $password = $new_password;
            }
            else{
            return redirect('Profile')->with(['error'=>'Password is Not Match.']);
            }
        }
           
        $data = array(
            'Full_name'=>$request->name,
            'Password'=>$password,
            'user_name'=>$request->username,
            'image'=>$images,
        );
        DB::table('admin')->where('id', $dt->id)->update( $data);
        return redirect('Profile')->with(['success'=>'Profile Update']);
    }
}
