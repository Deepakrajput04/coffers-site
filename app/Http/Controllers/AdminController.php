<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\Slider;

use App\models\About;

use App\models\Offer;

use App\models\Blog;

use App\models\Contact;




class AdminController extends Controller
{
    public function index()
    {  
        if(session()->get('type')=='admin')
        {
            return view('dashboard.index');
        }
        return redirect()->back();
       
    }

    public function slider()
    {   
        if(session()->get('type')=='admin')
        {
            $slider = Slider::get();
            return view('dashboard.slider',compact('slider'));
        }
        return redirect()->back();
    }

    public function addslider(Request $_request)
    {   
        if(session()->get('type')=='admin')
        {
        $title = $_request->title;
        $description = $_request->description;
        
       $slider = new Slider;
        if($_request->has('image')) {
            $image = $_request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('/images'), $filename);
            $slider->image = $filename;
    }   
        $slider->title = $title;
        $slider->description = $description;

        $slider->save();
        return redirect()->back();
        }
        return redirect()->back();

    }

    public function editslider($id)
    {
        if(session()->get('type')=='admin')
        {
        $slider= Slider::where('id',$id)->first();
        return view('dashboard.editslider',compact('slider'));
        }
        return redirect()->back();
    }

    public function abouts()
    { 
        if(session()->get('type')=='admin')
        {
        $about = About::get();
        return view('dashboard.abouts',compact('about'));
        }
        return redirect()->back();
    }

    public function addabouts(Request $_request)
    {   $title = $_request->title;
        $description = $_request->description;
        
       $about = new About;
        if($_request->has('image')) {
            $image = $_request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('/images'), $filename);
            $about->image = $filename;
    }   
        $about->title = $title;
        $about->description = $description;

        $about->save();
        return redirect()->back();
    }

    public function editabouts($id)
    {
        if(session()->get('type')=='admin')
        {
        $about= About::where('id',$id)->first();
        return view('dashboard.editabouts',compact('about'));
        }
        return redirect()->back();
    }
    public function updatedabouts(Request $_request ,$id)
    {
        if(session()->get('type')=='admin')
        {
        $about = About::find($id);
        $about->title = $_request->title;
        $about->description = $_request->description;
        if($_request->has('image')) {
            $image = $_request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('/images'), $filename);
            $about->image = $filename;
    }   
        $about->save();
        return redirect()->route('abouts');
    }
        return redirect()->back();
    }

    public function deleteabouts($id)
    {   
        if(session()->get('type')=='admin')
        {
        $about = About::where('id',$id)->delete();
        return redirect()->back();
        }
        return redirect()->back();
    }

    public function offer()
    {   
        if(session()->get('type')=='admin')
        {
        $offer = Offer::get();
        return view('dashboard.offer',compact('offer'));
        }
        return redirect()->back();
    }

    public function addoffer(Request $_request)
    {   
        if(session()->get('type')=='admin')
        {
        $title = $_request->title;
        $description = $_request->description;
        
       $offer = new Offer;
        if($_request->has('image')) {
            $image = $_request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('/images'), $filename);
            $offer->image = $filename;
    }   
        $offer->title = $title;
        $offer->description = $description;

        $offer->save();
        return redirect()->back();
    }
        return redirect()->back();
    }

    public function editoffer($id)
    {  
        if(session()->get('type')=='admin')
        {
        $offer= Offer::where('id',$id)->first();
        return view('dashboard.editoffer',compact('offer'));
        }
        return redirect()->back();
    }

    public function updatedoffer(Request $_request ,$id)
    {   
        if(session()->get('type')=='admin')
        {
        $offer = Offer::find($id);
        $offer->title = $_request->title;
        $offer->description = $_request->description;
        if($_request->has('image')) {
            $image = $_request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('/images'), $filename);
            $offer->image = $filename;
    }   
        $offer->save();
        return redirect()->route('offer');
        }
        return redirect()->back();

    }

    public function deleteoffer($id)
    {   
        if(session()->get('type')=='admin')
        {
        $offer = Offer::where('id',$id)->delete();
        return redirect()->back();
        }
        return redirect()->back();
    }

    public function blogs()
    {   
        if(session()->get('type')=='admin')
        {
        $blog = Blog::get();
        return view('dashboard.blogs',compact('blog'));
        }
        return redirect()->back();
        
    }

    public function addblogs(Request $_request)
    {   
        if(session()->get('type')=='admin')
        {
        $title = $_request->title;
        $description = $_request->description;
        
       $blog = new Blog;
        if($_request->has('image')) {
            $image = $_request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('/images'), $filename);
            $blog->image = $filename;
    }   
        $blog->title = $title;
        $blog->description = $description;

        $blog->save();
        return redirect()->back();
        }
        return redirect()->back();
    }

    public function editblogs($id)
    {   
        if(session()->get('type')=='admin')
        {
        $blog= Blog::where('id',$id)->first();
        return view('dashboard.editblogs',compact('blog'));
        }
        return redirect()->back();
    }

    public function updatedblogs(Request $_request ,$id)
    {
        if(session()->get('type')=='admin')
        {
        $blog = Blog::find($id);
        $blog->title = $_request->title;
        $blog->description = $_request->description;
        if($_request->has('image')) {
            $image = $_request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('/images'), $filename);
            $blog->image = $filename;
    }   
        $blog->save();
        return redirect()->route('blogs');
        }
        return redirect()->back();
    }

    public function deleteblogs($id)
    {
        if(session()->get('type')=='admin')
        {
        $blog = Blog::where('id',$id)->delete();
        return redirect()->back();
        }
        return redirect()->back();

    }

    public function contactus()
    {   
        if(session()->get('type')=='admin')
        {
        $contact = Contact::get();
        return view ('dashboard.contactus',compact('contact'));
        }
        return redirect()->back();

    }

    public function addcontact(Request $request)
    {   
        if(session()->get('type')=='admin')
        {
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $message = $request->message;

        $contact = new Contact;
        $contact->name= $name;
        $contact->email= $email;
        $contact->phone= $phone;
        $contact->message= $message;
        $contact->save();
        return redirect()->back();
        }
        return redirect()->back();
    }

    public function deletecontact($id)
    {   
        if(session()->get('type')=='admin')
        {
        $contact = Contact::where('id',$id)->delete();
        return redirect()->back();
        }
        return redirect()->back();

    }
   
    
}
