<section class="section-contact section-outer">
    <div class="section-inner">
        <div class="section-contact-wrapper">
            <div class="section-contact-wrapper__title">Contact Us</div>
            <div class="section-contact-wrapper__subtitle">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            </div>
            <div class="section-contact-location-and-phone_number-and-email">
                <div class="section-contact__location section-contact-info-part">
                    <div class="section-contact-info-part__image">
                        <img src="../SVG/location.svg" alt="">
                    </div>
                    <div class="section-contact-info-part__text">
                        Nobinagar savar,Dhaka Bangladesh
                    </div>
                </div>
                <div class="section-contact__phone_number section-contact-info-part">
                    <div class="section-contact-info-part__image">
                        <img src="../SVG/phone.svg" alt="">
                    </div>
                    <div class="section-contact-info-part__text">
                        +8801743331996
                        +8801928737807
                    </div>

                </div>
                <div class="section-contact__email section-contact-info-part">
                    <div class="section-contact-info-part__image">
                        <img src="../SVG/email.svg" alt="">
                    </div>
                    <div class="section-contact-info-part__text">
                        quickmasud@gmail.com
                        quickmasud@yahoo.com
                    </div>
                </div>
            </div>
        </div>
        <div class="section-contact-content">
            <form method="post" action="views.php" class="section-contact-content-form" id="form-contact">
                <input type="hidden" name="mail">
                <div class="section-contact-content-name-and-email">
                    <input type="text" name='contact__name' placeholder="Your Name" class="section-contact-content-name-and-email__name">
                    <input type="email" name='contact__email' placeholder="Your Email" class="section-contact-content-name-and-email__email">
                </div>
                <textarea placeholder="Your Message" class="section-contact-content__message" name='contact__message'></textarea>
                <div class="section-contact-content__send">
                    <input type='submit' class="section-contact-content__send-btn" value="SEND" id='form-btn-contact'></input>
                </div>
            </form>
        </div>
    </div>
</section>
