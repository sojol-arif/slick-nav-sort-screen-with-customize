<?php include('header.php'); ?>

<main>
    <!-- breadcrumb -->
    <div class="ic-breadcrumb">
        <div class="container">
            <div class="inner">
                <h2>Select Schedule To Recive</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">User Profile </a></li>
                        <li class="breadcrumb-item"><a href="#">Select Schedule To Recive</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->
    <section class="ic-select-schedule">
        <div class="container">
            <h2>Select Schedule To Recive</h2>
            <p class="heading-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
            <div class="single-block">
                <h3>Product Name</h3>
                <h6>M3 Smart Band Color Monitor Waterproof Heart</h6>
            </div>
            <div class="single-block">
                <h3>Product Name</h3>
                <p>Model: M3</p>
                <p>Battery: 110mAh ( Stand By 8-10 Days )</p>
                <p>Power interface: USB interface</p>
                <p>Vibration motor: 0827 wire welding motor</p>
                <p>Bluetooth: Bluetooth 4.0</p>
                <p>Bluetooth: Bluetooth 4.0</p>
                <p>Compatible system: Android /IOS</p>
                <p>Net Weight: 18.4g <a href="#" class="ic-link-more">More</a></p>
            </div>
            <div class="single-block">
                <h3>Information To Recive</h3>
            </div>
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
                    <label>Delivery Address</label>
                    <input type="text" class="form-control" placeholder="Enter Address">
                </div>
                <div class="row">
                    <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label>Reciving Date</label>
                        <input type="text" class="ic-datepicker form-control" placeholder="DD / MM / YYYY">
                    </div>
                    <div class="form-group col-sm-6 col-md-6 col-lg-6">
                        <label>Reciving Time</label>
                        <!-- <input type="text" class="ic-datepicker-time form-control" placeholder="HH : MM   (Select Local Time)"> -->
                        <div class="input-group clockpicker">
                            <input type="text" class="form-control ic-clockpicker" placeholder="HH : MM    (Select Local Time)">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-time"></span>
                            </span>
                        </div>

                    </div>
                </div>
                <button type="submit" class="ic-btn-primary">Submit Information</button>
            </form>
        </div>
    </section>
</main>
<!-- Required JavaScript Libr
aries -->
<?php include('footer.php'); ?>
