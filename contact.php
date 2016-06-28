<?php
	$title = "Contact"; 
	$description = "Contact page for Vanocouver Meets we can be reached at 778-123-4567";
	include ("includes/header.html");
?>

<section id="contact">

    <div id="modal">
        <div class="modal-content">  
            <img src="img/icon/checkmark.png" width="45" height="45" alt="Green chemark indicating that the process was completed" class="checkmark-icon">
            <h2> Your form has been submitted! </h2>
            <p>Thank you for contacting Vancouver Meats. We will get back to you shoortly. Meanwhile, please keep in touch with us in our social medias.</p>
            <div class="social-media-icons">
                <img src="img/icon/facebook-letter.png" width="15" height="25" alt="Facebook social media icon image">
                <img src="img/icon/twitter-logo.png" width="26" height="26" alt="Twitter social media icon image">
                <img src="img/icon/instagram-logo.png" width="26" height="26" alt="Instagram social media icon image">
            </div>
            <input name="submit" value="CLOSE" class="button-submit close">
        </div>
    </div>

	<h1> Contact </h1>
    <div class="grid">
        <div class="col-1of2">
            <div class="container-content">
                <div id="form-div">
                    <form>
                        <label>*Name</label>
                        <input name="name" type="text" class="input-field">

                        <label>*Email</label>
                        <input name="email" type="email" class="input-field">

                        <label>*Message</label>
                        <textarea name="message" class="textarea-field"></textarea>

                        <input name="submit" value="SEND MESSAGE" id="close-button" class="button-submit">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-1of2">
        	<div class="contact-information">
                <h3>INFORMATION</h3>
                <p class="contact-information-description"></p>

                <p><img src="img/icon/clock.png" width="19" height="19" alt="Image of a clock icon"><span class="contact-icon-title">HOURS OF OPERATION</span></p>
                <p class="information-description">Monday to Friday: 9:00am to 5:00pm </p>
                <p class="information-description">Saturday: 10:00am to 4:00pm</p>
                <p class="information-description">Sundays and Statutory Holidays: Closed</p>
                <p class="information-description">Online orders available 24/7</p>

                <p><img src="img/icon/phone.png" width="15" height="17" alt="Image of a phone icon"><span class="contact-icon-title">PHONE</span></p><p class="information-description"><a href="tel:778-123-4567">(778) 123-4567</a></p>

                <p><img src="img/icon/email.png" width="20" height="13" alt="Image of an email icon"><span class="contact-icon-title-email">EMAIL</span></p><p class="information-description"><a href="mailto:info@vancouvermeats.ca">info@vancouvermeats.ca</a></p>

                <p><img src="img/icon/location.png" width="15" height="20" alt="Image of a location icon"><span class="contact-icon-title">ADDRESS</span></p><p class="information-description">1234 Commercial Dr.<br>
                Vancouver, BC<br>
                V5L 2B5</p>
            </div>
        </div>
    </div>
</section>

<?php
	include ("includes/footer.html");
?>