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

                <p><img src="img/icon/clock.png" width="19" height="19"><span class="contact-icon-title">HOURS OF OPERATION</span></p>
                <p class="information-description">Monday to Friday: 9:00am to 5:00pm </p>
                <p class="information-description">Saturday: 10:00am to 4:00pm</p>
                <p class="information-description">Sundays and Statutory Holidays: Closed</p>
                <p class="information-description">Online orders available 24/7</p>

                <p><img src="img/icon/phone.png" width="15" height="17"><span class="contact-icon-title">PHONE</span></p><p class="information-description"><a href="tel:778-123-4567">(778) 123-4567</a></p>

                <p><img src="img/icon/email.png" width="20" height="13"><span class="contact-icon-title-email">EMAIL</span></p><p class="information-description"><a href="mailto:info@vancouvermeats.ca">info@vancouvermeats.ca</a></p>

                <p><img src="img/icon/location.png" width="15" height="20"><span class="contact-icon-title">ADDRESS</span></p><p class="information-description">1234 Commercial Dr.<br>
                Vancouver, BC<br>
                V5L 2B5</p>
            </div>
        </div>
    </div>
</section>

<?php
	include ("includes/footer.html");
?>