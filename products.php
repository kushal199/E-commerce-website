<?php
require ('includes\common.php');
include('includes\header.php');
include('includes\check-if-added.php');

?>
<div class="container">
            <div class="jumbotron home-spacer">
                <center><h1>Welcome to our E-Store</h1>
                <p>We have the best things from Biggest Brands for you. No need to worry, we have all in one place.</p>
              </center>
            </div>
            <hr>
            <br>
             <div class="row">
            <div class="col-sm-3" >
               <div class="panel-group">
               
               <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 style="color:orange">Brands</h3>
                    </div>
                    <div class="panel-body">
                       <div class="rmvb">
                           <p><a href="#"><span style="color:black">SHIRTS</span></a></p>
                           <p><a href="#"><span style="color:black">WATCHES</span></a></p>
                           <p><a href="#"><span style="color:black">CAMERA</span></a></p>
                            <p><a href="#"><span style="color:black">MOBILES</span></a></p>
                        </div>
                    </div>
                </div>
               <br>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 style="color:orange">OS</h3>
                    </div>
                    
                    <div class="panel-body">
                       <div class="rmvb">
                            <p><a href="#"><span style="color:black">ANDROID</span></a></p>
                            <p><a href="#"><span style="color:black">IOS</span></a></p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
                 <div class="panel-body">
                        <div class="col-sm-4 ">
                            <div class="thumbnail">
                                <img src="images\peter_eng.jpeg" alt="Titan" >
                                    <div class="caption">
                                        <h3>PETER ENGLAND</h3>
                                        <p>Price: Rs. 6000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "login.php"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
           
                                            if (check_if_added_to_cart(6)) {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
                        <div class="col-sm-4 home-feature">
                            <div class="thumbnail">
                                <img src="images\van_heusen.jpeg" alt="vanhausen">
                                    <div class="caption">
                                        <h3>VAN HAUSEN</h3>
                                            <p>Price: Rs. 36000.00 </p>
                                                <?php if (!isset($_SESSION['email'])) { ?>
                                            <p><a href= "login.php"  role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                                <?php
                                            } else {
                                            
                                            if (check_if_added_to_cart(4)) {
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                    
            

