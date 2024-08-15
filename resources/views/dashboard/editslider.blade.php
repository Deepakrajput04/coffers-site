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
                                        <h4 class="modal-title">updated slider</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" method="POST" enctype="multipart/form-data">
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

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
 
<x-adminfooter/>
