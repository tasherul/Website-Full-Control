<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Traits\UploadTrait;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

use DB;
use Session;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data=DB::table('slider_setings')->orderBy('id', 'ASC')
      ->select('*')->get();

      $slider=DB::table('slider')->orderBy('id', 'DESC')
      ->select('*')->get();

    $fetcher=DB::table('slider_setings')->orderBy('id', 'ASC')
      ->select('*')->get();

      $activities=DB::table('activities')->orderBy('id', 'DESC')
      ->select('*')->limit(6)->get();

      $galary=DB::table('galary')->orderBy('id', 'DESC')
      ->select('*')->limit(6)->get();

      $news=DB::table('news')->orderBy('id', 'DESC')
      ->select('*')->limit(6)->get();

       return view('frontend/home',compact('data','slider','fetcher','activities','galary','news'));
    }
      
    public function news_add()
    {
       return view('admin/news');
    }
      
    public function delete_slide($id)
    {
       DB::table('slider')->where('id',$id)->delete();

       return redirect('Home-Slider')->with(['success'=>'Slider Delete Successfully.']); 
        
    }

    public function news_insert_process(Request $request)
    {
      if(!$request->session()->has('admin'))
      return redirect('login')->with(['error'=> 'Login & Continue']);

        $title=$request->title;
        $short_discription=$request->short_discription;
        $Discription=$request->description;
        $slug = Str::slug($title, '-');
        $date= date('d');
        $month=date('M');
        $year=date('Y');

        $news_image=Null;
        
        if ($request->has('news_image')) {
         
            $image = $request->file('news_image');
           
             $name =time();
            $folder = '/public';
        
            $news_image  = $request->news_image->store('public');
        }
       

        $data = [
            
            'title'=>$title,
            'short_description'=>$short_discription,
            'Discription'=>$Discription,
            'slug'=>$slug,
            'date'=>$date,
            'month'=>$month,
            'year'=>$year,
            'image'=>$news_image,
            
        ];
        if (isset($data)) {
          DB::table('news')->insert($data);
        return redirect('News-Add')->with(['success'=>'News Insert Successfully.']); 
        }
        else
        {
          return redirect('News-Add')->with(['success'=>'News Insert Error Please Try Again.']); 
        }
        
    }

    public function activities_insert_process(Request $request)
    {
      if(!$request->session()->has('admin'))
      return redirect('login')->with(['error'=> 'Login & Continue']);

        $title=$request->title;
        $short_description=$request->short_description;
        $Discription=$request->description;
        $slug = Str::slug($title, '-');
        $date= date('d');
        $month=date('M');
        $year=date('Y');
        
        $activities_image=Null;
        
        if ($request->has('activities_image')) {
         
            $image = $request->file('activities_image');
           
             $name =time();
            $folder = '/public';
        
            $activities_image  = $request->activities_image->store('public');
        }
        
       

        $data = [
            
            'title'=>$title,
            'short_description'=>$short_description,
            'Discription'=>$Discription,
            'slug'=>$slug,
            'date'=>$date,
            'month'=>$month,
            'year'=>$year,
            'activities_image'=>$activities_image,
            
        ];
        if (isset($data)) {
          DB::table('activities')->insert($data);
        return redirect('Activities')->with(['success'=>'Activities Insert Successfully.']); 
        }
        else
        {
          return redirect('News-Add')->with(['success'=>'News Insert Error Please Try Again.']); 
        }
        
    }
    public function insert_slider_activities(Request $request)
    {
      if(!$request->session()->has('admin'))
      return redirect('login')->with(['error'=> 'Login & Continue']);

        $activities_id=$request->activities_id;
        $activities_titel=$request->activities_titel;
        // $slug = Str::slug($title, '-');
        // $date= date('d');
        // $month=date('M');
        // $year=date('Y');
        
        $slider_image=Null;
        
        if ($request->has('slider_image')) {
         
            $image = $request->file('slider_image');
           
             $name =time();
            $folder = '/public';
        
            $slider_image  = $request->slider_image->store('public');
        }
        
       

        $data = [
            
            'activities_id'=>$activities_id,
            'titel'=>$activities_titel,
            'image'=>$slider_image,
            
            
        ];
        if (isset($data)) {
          DB::table('activities_slider')->insert($data);
        return redirect('Add-Slider-Activities')->with(['success'=>'Activities Slider Insert Successfully.']); 
        }
        else
        {
          return redirect('Add-Slider-Activities')->with(['success'=>'Activities Slider Insert Error Please Try Again.']); 
        }
        
    }

    public function news_view()
    {
      $show_news=DB::table('news')
        ->select('*')->get();
      return view('admin/news_view',compact('show_news'));
    }
    

    public function news_delete($id)
    {
      DB::table('news')->where('id',$id)->delete();

       return redirect('News-view')->with(['success'=>'News Delete Successfully.']); 
    }

    public function activities_delete($id)
    {
      DB::table('activities')->where('id',$id)->delete();

       return redirect('View-Activities')->with(['success'=>'Activities Delete Successfully.']); 
    }

    public function activities_slider_delete($id)
    {
      DB::table('activities_slider')->where('id',$id)->delete();

       return redirect('Add-Slider-Activities')->with(['success'=>'Activities Slider Delete Successfully.']); 
    }

    public function news_update(Request $request)
    {
      if(!$request->session()->has('admin'))
      return redirect('login')->with(['error'=> 'Login & Continue']);
        $id=$request->hidden_id;
        $title=$request->title;
        $Discription=$request->description;
        $slug = Str::slug($title, '-');
        $date= date('d');
        $month=date('M');
        $year=date('Y');
        $news_image=$request->hidden_img;
       // $slider_image= Null;
        //$link=$request->link;
        
        
         if ($request->has('news_image')) {
         
            $image = $request->file('news_image');
           
             $name =time();
            $folder = '/public';
        
            $news_image  = $request->news_image->store('public');
        }

       

        $data = [
            
            'title'=>$title,
            'Discription'=>$Discription,
            'slug'=>$slug,
            'date'=>$date,
            'month'=>$month,
            'year'=>$year,
            'image'=>$news_image,
            
        ];

         DB::table('news')
            ->where('id', $id)
            ->update($data);
        return redirect('News-view')->with(['success'=>'News Update Successfully.']);
    }

    public function activities_update(Request $request)
    {
      if(!$request->session()->has('admin'))
      return redirect('login')->with(['error'=> 'Login & Continue']);
        $id=$request->hidden_id;
        $title=$request->title;
        $Discription=$request->description;
        $slug = Str::slug($title, '-');
        $date= date('d');
        $month=date('M');
        $year=date('Y');
        $activities_image=$request->hidden_img;
       // $slider_image= Null;
        //$link=$request->link;
        
        
         if ($request->has('activities_image')) {         
            $image = $request->file('activities_image');           
            $name =time();
            $folder = '/public';        
            $activities_image  = $request->activities_image->store('public');
        }
        

        $data = [
            
            'title'=>$title,
            'Discription'=>$Discription,
            'slug'=>$slug,
            'date'=>$date,
            'month'=>$month,
            'year'=>$year,
            'activities_image'=>$activities_image,
            
        ];

         DB::table('activities')
            ->where('id', $id)
            ->update($data);
        return redirect('View-Activities')->with(['success'=>'News Update Successfully.']);
    }


    public function activities(Request $request)
    {
      return view('admin/activities');
    }
    public function activities_view_process(Request $request)
    {
      $show_news=DB::table('activities')->orderBy('id', 'DESC')
        ->select('*')->get();
      
      return view('admin/view_activities',compact('show_news'));
    }

    public function add_slider_activities()
    {  


      $show_act=DB::table('activities')
      ->select('*')->get();

      $slider_act=DB::table('activities_slider')
      //->where('activities_slider.activities_id', '=','activities.id' )
      ->join('activities','activities.id','=','activities_slider.activities_id')
      ->select('activities_slider.titel as act_s_titel','activities_slider.activities_id as act_id','activities_slider.id','activities_slider.image','activities.title','activities.id as act_id')->get();
      return view('admin/slider_activities',compact('show_act','slider_act'));
    }

    //Logo And Footer About Us Insert Process
    public function logo_about_footer(Request $request)
    {
      if(!$request->session()->has('admin'))
        return redirect('login')->with(['error'=> 'Login & Continue']);

        $about_us_footer=$request->footer_about;
        

        
        if ($request->has('logo_image')) {
         
            $logo_images  = $request->logo_image->store('public');
            DB::table('slider_setings')
            ->where('id', 29)
            ->update(['value_1' =>$logo_images]);
    
        }
        if ($request->has('about_us_image')) {
         
        
            $about_us_image  = $request->about_us_image->store('public');
            DB::table('slider_setings')
            ->where('id', 86)
            ->update(['value_1' =>$about_us_image]);
    
        }
        if ($request->has('activities')) {
         
        
            $activities  = $request->activities->store('public');
            DB::table('slider_setings')
            ->where('id', 87)
            ->update(['value_1' =>$activities]);
    
        }
        if ($request->has('activities_d_image')) {
         
        
            $activities_d_image  = $request->activities_d_image->store('public');
            DB::table('slider_setings')
            ->where('id', 88)
            ->update(['value_1' =>$activities_d_image]);
    
        }
        if ($request->has('news_image')) {
         
            $news_image  = $request->news_image->store('public');
            DB::table('slider_setings')
            ->where('id', 89)
            ->update(['value_1' =>$news_image]);
    
        }
        if ($request->has('news_details_image')) {
         
            $news_details_image  = $request->news_details_image->store('public');
            DB::table('slider_setings')
            ->where('id', 90)
            ->update(['value_1' =>$news_details_image]);
    
        }
        if ($request->has('fav_icon')) {
         
            $fav_icon  = $request->fav_icon->store('public');
            DB::table('slider_setings')
            ->where('id', 91)
            ->update(['value_1' =>$fav_icon]);
    
        }
       
        DB::table('slider_setings')
        ->where('id', 28)
        ->update(['value_1' =>$request->footer_about]);

        DB::table('slider_setings')
        ->where('id', 92)
        ->update(['value_1' =>$request->logoName]);
        
          return redirect('Logo-Details')->with(['success'=>'Logo & Footer About Us Update Successfully.']); 
        
        
    }

    public function activiteis_slider_update(Request $request)
    {
      if(!$request->session()->has('admin'))
      return redirect('login')->with(['error'=> 'Login & Continue']);
        $id=$request->hidden_id;
        $activities_id=$request->activities_id;
        $discription=$request->discription;
        
        $activities_slider_image=$request->hidden_img;

         if ($request->has('slider_image')) {         
            $image = $request->file('slider_image');           
            $name =time();
            $folder = '/public';        
            $activities_slider_image  = $request->slider_image->store('public');
        }
        

        $data = [
            
            'activities_id'=>$activities_id,
            'titel'=>$discription,
            'image'=>$activities_slider_image,
            
            
        ];

         DB::table('activities_slider')
            ->where('id', $id)
            ->update($data);
        return redirect('Add-Slider-Activities')->with(['success'=>'Activities Slider Update Successfully.']);
    }


    public function insert_news_leter(Request $request)
    {
      $email=$request->email;

      $data = [
            
            'email'=>$email,
                     
        ];
          DB::table('newsletter')->insert($data);

          return redirect('/');

    }

    public function about_us()
    {
      $data=DB::table('slider_setings')->orderBy('id', 'ASC')
      ->select('*')->get();

      $galary=DB::table('galary')->orderBy('id', 'DESC')
      ->select('*')->get();

       return view('frontend/about_us', compact('data','galary'));
    }

    public function news()
    {
      $data=DB::table('slider_setings')->orderBy('id', 'ASC')
      ->select('*')->get();
      $news=DB::table('news')->orderBy('id', 'DESC')
      ->select('*')->get();
      return view('frontend/news', compact('data','news'));

    }
    public function activities_page()
    {
      $data=DB::table('slider_setings')->orderBy('id', 'ASC')
      ->select('*')->get();

      $act=DB::table('activities')->orderBy('id', 'DESC')
      ->select('*')->get();
     
      return view('frontend/activities', compact('data','act'));

    }

    public function contract_us_page()
    {
       $data=DB::table('slider_setings')->orderBy('id', 'ASC')
      ->select('*')->get();
      return view('frontend/contract_us', compact('data'));

    }

    public function send_message(Request $request)
    {
       $name=$request->name;
       $email=$request->email;
       $message=$request->message;

      $data = [
            
            'name'=>$name,
            'email'=>$email,
            'message'=>$message,
                     
        ];
          DB::table('contactus')->insert($data);

          return redirect('/Contract-Us-Page');
    }

    public function activities_details($id,$slug)
    {
      $data=DB::table('slider_setings')->orderBy('id', 'ASC')
      ->select('*')->get();

      $act_details=DB::table('activities')->where('id',$id)

      ->select('*')->first();

      $related=DB::table('activities')->where('id','!=',$id)

      ->select('*')->limit(3)->get();

      $act_slider=DB::table('activities_slider')->where('activities_id',$id)
      ->select('*')->get();

      return view('frontend/activities_update', compact('data','act_details','act_slider','related'));
    }

    public function news_details($id,$slug)
    {
       $data=DB::table('slider_setings')->orderBy('id', 'ASC')
      ->select('*')->get();

      $news_details=DB::table('news')->where('id',$id)

      ->select('*')->first();

      $related=DB::table('news')->where('id','!=',$id)->orderBy('id', 'DESC')

      ->select('*')->limit(10)->get();
      return view('frontend/news_details', compact('data','news_details','related'));
    }


    public function news_update_view($id)
    {
      $news_update_view_show=DB::table('news')->where('id',$id)

      ->select('*')->first();
      
    echo json_encode($news_update_view_show);
    }
    public function activities_update_view($id)
    {
      $activities_update_view_show=DB::table('activities')->where('id',$id)

      ->select('*')->first();
      
    echo json_encode($activities_update_view_show);
    }

   
}