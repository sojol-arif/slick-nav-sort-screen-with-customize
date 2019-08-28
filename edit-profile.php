<?php include('header.php'); ?>

<main>
    <!-- breadcrumb -->
    <div class="ic-breadcrumb">
        <div class="container">
            <div class="inner">
                <h2>Profile</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">User Profile</a></li>
                        <li class="breadcrumb-item"><a href="#">Profile</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->

    <section class="ic-notification-page ic-profile ic-edit-profile">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-3">
                    <div class="col-3-inner">
                        <div class="ic-profile-image">
                            <div class="ic-inner">
                                <img src="images/notification.png" id="profile-img">
                                <div class="ic-button">
                                    <input type="file" name="file" id="profile-input" class="hidden">
                                    <label for="profile-input" class="banner-label mb-0"><i class="fa fa-plus"></i><span class="ic-add-image">Add Image</span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-lg-9">
                    <div class="ic-right-col">
                        <h1 class="secondary-color">Edit Profile</h1>
                        <form action="">
                            <div class="ic-single-block">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Designation">
                                </div>
                            </div>
                            <div class="ic-single-block">
                                <h3>Short Bio</h3>
                                <div class="form-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Write your sort biodata"></textarea>
                                </div>
                            </div>
                            <div class="ic-single-block">
                                <h3>Contact Info</h3>
                                <table>
                                    <tr>
                                        <td>Address</td>
                                        <td>:</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Adress">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Phone</td>
                                        <td>:</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Phone">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>:</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Email">
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="ic-single-block">
                                <h3>Social Links</h3>
                                <ul class="social ic-invert ic-edit-profile-social">
                                    <li>
                                        <a href="">
                                            <span><i class="fa fa-facebook" aria-hidden="true"></i></span>
                                            <span><i class="fa fa-facebook" aria-hidden="true"></i></span>
                                        </a>
                                        <span>:</span>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Link">
                                        </div>
                                    </li>
                                    <li>
                                        <a href="">
                                        <span><i class="fa fa-twitter" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-twitter" aria-hidden="true"></i></span></a>
                                        <span>:</span>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Link">
                                        </div>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span><i class="fa fa-linkedin" aria-hidden="true"></i></span>
                                            <span><i class="fa fa-linkedin" aria-hidden="true"></i></span>
                                        </a>
                                        <span>:</span>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Link">
                                        </div>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span><i class="fa fa-pinterest-p" aria-hidden="true"></i></span>
                                            <span><i class="fa fa-pinterest-p" aria-hidden="true"></i></span>
                                        </a>
                                        <span>:</span>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Link">
                                        </div>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span><i class="fa fa-instagram" aria-hidden="true"></i></span>
                                            <span><i class="fa fa-instagram" aria-hidden="true"></i></span>
                                        </a>
                                        <span>:</span>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Link">
                                        </div>
                                    </li>
                                </ul>
                                <input type="submit" value="Update" class="form-control ic-form-btn ic-edit-profile-form-btn">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- Required JavaScript Libr
aries -->
<?php include('footer.php'); ?>
