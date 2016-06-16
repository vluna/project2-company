<?php
	$title = "Contact"; 
	$description = "Contact page for Vanocouver Meets we can be reached at 778-123-4567";
	include ("includes/header.html");
?>

<section id="contact">
	<h1> Contact </h1>
    <div class="grid">
        <div class="col-1of2">
            <div class="container-content">
                <div id="form-div">
                    <form method="post" action="">
                        <input name="name" type="text" class="input-field" placeholder="Name" id="name" required>

                        <input name="email" type="email" class="input-field" id="email" placeholder="Email" required>

                        <textarea name="message" class="textarea-field" id="comment" placeholder="Comment" required></textarea>

                        <input type="submit" name="submit" value="SEND MESSAGE" class="button-submit">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-1of2">
        	<div class="contact-information">
                <h3>INFORMATION</h3>
                <p class="contact-information-description"></p>
                <h4><img src="img/icon/clock.png" width="19" height="19"><span class="contact-icon-title">HOURS OF OPERATION</span></h4><p></p>
                <h4><img src="img/icon/phone.png" width="15" height="17"><span class="contact-icon-title">PHONE</span></h4><p></p>
                <h4><img src="img/icon/email.png" width="20" height="13"><span class="contact-icon-title-email">EMAIL</span></h4><p></p>
                <h4><img src="img/icon/facebook-letter.png" width="12" height="20"><span class="contact-icon-title">FACEBOOK</span></h4><p></p>
                <h4><img src="img/icon/location.png" width="15" height="20"><span class="contact-icon-title">ADDRESS</span></h4><p class="contact-information-description"></p>
            </div>
        </div>
    </div>
</section>

<?php
	include ("includes/footer.html");
?>