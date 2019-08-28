<?php include('header.php'); ?>

<main>
    <!-- breadcrumb -->
    <div class="ic-breadcrumb">
        <div class="container">
            <div class="inner">
                <h2>Subscription Plan</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">User Profile </a></li>
                        <li class="breadcrumb-item"><a href="#">Subscription Plan</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->
    <section class="ic-payment">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <h2>Subscrition Plan</h2>
                    <table>
                        <tbody>
                            <tr>
                                <td>Purchase Date</td>
                                <td>:</td>
                                <td>10 July, 2019</td>
                            </tr>
                            <tr>
                                <td>Expired Date</td>
                                <td>:</td>
                                <td>11 August, 2019</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="plan">
                        <div class="wrapper">
                            <div class="inner">
                                <div class="single-plan">
                                    <div class="single-plan-inner">
                                        <div class="top">
                                            <div class="icon">
                                                <i class="fa fa-plane" aria-hidden="true"></i>
                                            </div>
                                            <h2>Premium Plan</h2>
                                            <h3>$45</h3>
                                            <h1>$30</h1>
                                        </div>
                                        <div class="bottom">
                                            <p>6 Products Only <br>
                                            Weight Max 7 Kg<br>
                                            10 Time Request</p>
                                            <a href="#">Start Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-8">
                    <h2 class="ic-right-col-h2">Payment Method</h2>
                    <p class="ic-right-col-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incide ilabore et dolore magna aliqua. vel facilisis. </p>
                    <form>
                        <div class="form-group">
                            <label>Payment Type</label>
                            <div class="ic-input-group">
                                <div class="input-group-prepend">
                                    <i class="fa fa-credit-card" aria-hidden="true"></i>
                                </div>
                                <input type="text" class="form-control ic-icon-card" placeholder="Card Number" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Cardholder Name</label>
                            <input type="text" class="form-control" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label>Card Number</label>
                            <input type="number" class="form-control" placeholder="4510 9658 3456 0735">
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                <label>CVV Number</label>
                                <input type="number" class="form-control" placeholder="987">
                            </div>
                            <div class="form-group col-sm-6 col-md-6 col-lg-6">
                                <label>Expiration Date</label>
                                <input type="text"
                                class="ic-datepicker-payment form-control"
                                data-language='en'
                                data-min-view="months"
                                data-view="months"
                                data-date-format="mm / yyyy" placeholder="11 / 2022"/>
                            </div>
                        </div>
                        <button type="submit" class="ic-btn-primary">Change Payment Method</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- Required JavaScript Libr
aries -->
<?php include('footer.php'); ?>
