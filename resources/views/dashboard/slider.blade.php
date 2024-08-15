<x-adminheader/>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title mb-0">Slider</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addNewModel">
                            Add New
                        </button>
                        <!-- Add New Slider Modal -->
                        <div class="modal" id="addNewModel">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add New Slider</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{URL::to('addslider')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <label for="image">Image</label>
                                            <input type="file" name="image" placeholder="Image" class="form-control mb-2" id="image">
                                            <label for="title">Title</label>
                                            <input type="text" name="title" placeholder="Title" class="form-control mb-2" id="title">
                                            <label for="description">Description</label>
                                            <input type="text" name="description" placeholder="Description" class="form-control mb-2" id="description">
                                            <input type="submit" name="save" class="btn btn-success" value="Save Now">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slider Table -->
                        <div class="table-responsive">
                            <table class="table table-striped table-borderless">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($slider as $item)

                                    <tr>
                                        <td><img src="{{ url('/images/'.$item->image) }}" style="width:100px;height:100px; border-radius:10px;" alt=""></td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td class="font-weight-medium">
                                        <a class="btn btn-success" href="{{URL::to('editslider',$item->id)}}">edit</a>
                                        <a class="btn btn-danger" href="">delete</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
<x-adminfooter/>
