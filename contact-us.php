<?php include 'inc/header.php' ; ?>
<?php include 'inc/function.php' ; ?>
<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2>CONTACT US</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-item">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <form action="" method="GET" role="form">
                    <legend>Send Message Us</legend>
                    <div class="form-group">
                        <label for="">Your name*</label>
                        <input name = "name" type="text" class="form-control" id="" placeholder="Enter your name" required="required">
                    </div>
                    <div class="form-group">
                        <label for="">Your Email*</label>
                        <input name = "email" type="email" class="form-control" id="" placeholder="Enter your email" required="required">
                    </div>
                    <div class="form-group">
                        <label for="textarea">Your Message* </label>
                        <textarea name="message" id="textarea" class="form-control" rows="3" required="required"></textarea>
                    </div>
                    <button type="submit" class="btn red-btn" name="submit">Submit</button>
                </form>
            </div>
            <div class="col-md-4">
                <section class="contact-details">
                    <div class="row">
                        <div class="col-md-12">
                            <legend>Contact Information</legend>
                            <div class="contact-info">
                                <address>
                                    <ul>
                                        <li> <i class="fa fa-map-marker" aria-hidden="true"></i> 
                                            <span>FF INFO. 2no gate, Chittagong.</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-phone-square" aria-hidden="true"></i>  <span>+8801823 94999</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                             <span>admin@ffmanagement.com</span>
                                        </li>
                                          <li>
                                            <i class="fa fa-info" aria-hidden="true"></i> 
                                             <span>info@ffmangement.com</span>
                                        </li>
                                    </ul>
                                </address>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
<?php include 'inc/message.php' ; ?>
<?php include 'inc/footer.php' ; ?>


