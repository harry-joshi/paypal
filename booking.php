<?php
include_once 'header.php';
?>
<section style="padding-top: 30px; padding-bottom: 30px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <h2>Book Now</h2>
                <div>
                    <form method="post" action="payments.php">
                        <input type="hidden" name="cmd" value="_xclick" />
                        <input type="hidden" name="no_note" value="1" />
                        <input type="hidden" name="lc" value="UK" />
                        <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="login-username" type="text" class="form-control" required name="first_name" value="" placeholder="First Name">                                        
                        </div>
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="login-username" type="text" class="form-control" required name="last_name" value="" placeholder="Last Name">                                        
                        </div>
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                            <input id="login-username" type="text" class="form-control" required name="payer_email" value="" placeholder="Email">                                        
                        </div>
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            <input id="login-username" type="text" class="form-control" required name="phoneno" value="" placeholder="Phone">                                        
                        </div>
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="fa fa-users"></i></span>
                            <input id="login-username" type="text" class="form-control" required name="noofperson" value="" placeholder="Number of person">                                        
                        </div>
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="fa fa-usd"></i></span>
                            <input id="login-username" type="text" readonly class="form-control" required name="price" value="<?= $_GET['price'];?>" placeholder="Price">                                        
                        </div>
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="fa fa-motorcycle"></i></span>
                            <input id="login-username" type="text" readonly class="form-control" required name="location" value="<?= $_GET['name'];?>" placeholder="location">
                        </div>
                        <div>
                            <input type="submit" class="btn btn-primary" value="submit" name="submit" style="background: brown;">
                        </div>
                    </form>
                </div>
                
            </div>
            <div class="col-lg-3"></div>
            </div>
        </div>
    
</section>
<?php
include_once 'footer.php';
?>