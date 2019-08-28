<?php include('header.php'); ?>

<main>
    <!-- breadcrumb -->
    <div class="ic-breadcrumb">
        <div class="container">
            <div class="inner">
                <h2>Sending Oder’s Product Information</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">User Profile </a></li>
                        <li class="breadcrumb-item"><a href="#">Sending Oder’s Products Information</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->
    <section class="ic-sendOrder">
        <div class="container">
            <h2>Sending Oder’s Product Information</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
            <div class="row">
                <div class="col-md-8 col-lg-8 col-sm-12">
                    <form>
                        <div class="row">
                            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                <label for="first-name">First Name</label>
                                <input type="text" class="form-control" placeholder="First Name">
                            </div>
                            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                <label for="last-name">Last Name</label>
                                <input type="text" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address">
                            </div>
                            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                <label>Phone Number</label>
                                <input type="text" class="form-control" placeholder="Enter Number">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Products Name</label>
                            <input type="text" class="form-control" placeholder="Enter Products Name">
                        </div>
                        <div class="form-group">
                            <label>Products Detais</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Details"></textarea>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                <label>Products Tracking ID</label>
                                <input type="email" class="form-control" placeholder="Enter Id">
                            </div>
                            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                <label>Where To Buy</label>
                                <input type="text" class="form-control" placeholder="Enter Market Or Shop Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                <label>Purchase Date</label>
                                <input type='text' class="ic-datepicker form-control" placeholder="DD / MM / YYYY" />
                            </div>
                            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                <label>Delivery Date</label>
                                <input type="text" class="ic-datepicker form-control" placeholder="DD / MM / YYYY">
                            </div>
                        </div>
                        <button type="submit" class="ic-btn-primary">Submit Information</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- Required JavaScript Libr
aries -->
<?php include('footer.php'); ?>
