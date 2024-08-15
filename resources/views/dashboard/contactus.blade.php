<x-adminheader />

<div class="container mt-5" style="height:800px;">
    <h1 class="text-center fw-bolder">Contact Us</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>phone</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @php
        $i = 1; 
        @endphp
        @foreach($contact as $key)

        <tr>
            <td>{{$i++}}</td>
            <td>{{$key->name}}</td>
            <td>{{$key->email}}</td>
            <td>{{$key->phone}}</td>
            <td>{{$key->message}}</td>
            <td><a href="{{URL::to('deletecontact',$key->id)}}" class="btn btn-danger">Delete</a></td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>
</div>

<x-adminfooter />