<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <title>Contact Us - Weeksinyear</title>
 <meta name="Description" content="Feel free to contact us with any query about our dedicated tools" />
    <link rel="stylesheet" href="calstyles.css?v=2">
</head>

<body>
    <!-- Navbar  -->
    <?php include('navbar.php') ?>
    <!-- MAIN BODY  -->


    <div class="container">
        <div class="px-md-5">
            <h1 class="mt-4 mb-4 contactus_heading">Contact Us</h1>
            <p class="pb-3 contact_pera">We would really love to hear you out! Do you have any suggestions for improvement?<br>
                ideas for content that will break the internet? Or maybe just want to say hello?<br>
                Don't be shy! You can contact us via this form:</p>
            <form role="form" method="post" id="reused_form">
                <div class="row">
                    <div class="col-sm-6 form-group">

                        <input placeholder="First Name" type="text" class="form-control mb-3" id="firstname" name="firstname" maxlength="50" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input placeholder="Last Name" type="text" class="form-control mb-3" id="lastname" name="lastname" maxlength="50" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <input placeholder="Email" type="text" class="form-control mb-3" id="email" name="email" maxlength="50" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input placeholder="Phone" type="tel" class="form-control mb-3" id="phone" name="phone" required maxlength="50">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Message" maxlength="6000" rows="7"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <button type="submit" class="btn main-button  send_contact_btn" id="btnContactUs">Send Message!
                        </button>
                    </div>
                </div>
            </form>
            <div class="succes_message" id="success_message" style="display: none;">
                <h3>Sent your message
                    successfully!</h3>
            </div>
            <div id="error_message" class="error_message" style="display:none; ">
                <h3>Error</h3> Sorry there was
                an error sending your form.
            </div>
            <br><br><br>
        </div>
    </div>

     <?php include 'footer.php'; ?>
    <script src="script.js"></script>

    <!-- footer link -->
   
</body>

</html>