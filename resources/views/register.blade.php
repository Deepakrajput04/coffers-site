<x-header/>

<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mx-auto mt-4">
                <div class="section-title">
                    <h2>Create New Account</h2>
                </div>
                <div class="contact__form">
                    
                    <form action="{{ URL::to('registerUser')}}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                        <div class="col-lg-12">
                                <input type="fullname" name="fullname" placeholder="FullName" required>
                            </div>
                            <div class="col-lg-12">
                                <input type="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="col-lg-12">
                                <input type="password" name="password" placeholder="Password" required>
                            </div>
                            <div class="col-lg-12">
                            <button type="submit" name="register" class="site-btn">Sign up</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<x-footer/>