<x-adminheader />

<div class="container">
    <center><h1 style="margin-top: 42px;">Update About</h1></center>
    <center><form method="post" action="{{URL::to('updatedabouts',$about->id)}}" enctype="multipart/form-data">
        @csrf
        <label for="image"></label><br>
        <input type="file" name="image" placeholder="images" style="border: ridge;">
        <div>
        <img src="{{url('/images/'.$about->image)}}" style="width:100px;height:100px" alt="">
        </div>
        <br><br>
        <label for="title"></label><br>
        <input type="text" name="title" placeholder="title" value="{{$about->title}}" style="width: 22%; border: ridge;"><br><br>
        <textarea name="description" placeholder="description"  id="" cols="30" rows="10">{{$about->description}}</textarea><br><br>

        <button type="submit">submit</button>

     </form></center>
    </div>
</div>

<x-adminfooter />