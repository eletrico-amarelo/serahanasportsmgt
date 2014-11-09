<!-- stored in app/views/public/site/about.blade.php -->

    <div class="large-12 columns main-content" role="main" data-equalizer-watch>
        <section class="contact">
            <div class="row">
                <div class="columns large-7">
                    <h2 class="contact-title">Serahana Events &amp; Sports Management Ltd</h2>
                    <h4 class="contact-title">Get in touch with us, let's achieve your goals together</h4>
                    <div class="contact-note">
                    <p>Promoting personal growth and building relationships that cuts across professional representation is our attitude.</p>
                    <p>Contact us on the following email address and phone numbers to learn more about Serahana, and who knows; it could just be the beginning of something great.</p>
                    </div>
                    <div class="contact-form">

                        <form data-abide>
                            <div class="row">
                                <div class="large-6 columns">
                                    <div class="name-field">
                                        <label for="name">
                                            name<span class="required">*</span>
                                            <input type="text" required pattern="[a-zA-Z]+">
                                        </label>
                                        <small class="error">Name is required and must be a string.</small>
                                    </div>
                                </div>
                                <div class="large-6 columns">
                                    <div class="email-field">
                                        <label for="email">
                                            email<span class="required">*</span>
                                            <input type="text" required pattern="email">
                                        </label>
                                        <small class="error">This is not a valid email address.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="large-12 columns">
                                    <div class="message-field">
                                        <label for="message">
                                            message<span class="required">*</span>
                                            <textarea name="message" required></textarea>
                                        </label>
                                        <small class="error">A message is required and cannot be empty.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row show-for-large-up">
                                <div class="columns large-6">
                                    <a href="{{ URL::asset('assets/downloads/serahanasportsmgt.zip') }}" title="Download Electronic Business Cards" class="button secondary small expand left">Download vCard</a>
                                </div>
                                <div class="columns large-6">
                                    <button class="button success small expand right" type="submit">Send</button>
                                </div>
                            </div>
                            <div class="row show-for-medium-down">
                                <div class="columns  medium-12">
                                    <button class="button success small expand right" type="submit">Send</button>
                                </div>
                                <div class="columns medium-12">
                                    <a href="{{ URL::asset('assets/downloads/serahanasportsmgt.zip') }}" title="Download Electronic Business Cards" class="button secondary small expand left">Download vCard</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="columns large-5">
                    <div class="contact-info">
                        <dl>
                            <dt><h4>Email</h4></dt>
                            <dd>{{ HTML::mailto('info@serahanasportsmgt.com', 'Click to send us an email', array('title' => 'email' ) ) }}</a></dd>
                            <dt><h4>Telephone</h4></dt>
                            <dd>
                                <dl>
                                    <dt><h4 class="subheader">France:</h4></dt>
                                    <dd><a title="Click to call us" href="tel:0033651233081">0033 651 233 081</a></dd>
                                    <dt><h4 class="subheader">Portugal:</h4></dt>
                                    <dd><a title="Click to call us" href="tel:00351962653469">00351 962 653 469</a></dd>
                                    <dt><h4 class="subheader">Nigeria:</h4></dt>
                                    <dd><a title="Click to call us" href="tel:002347030808944">00234 703 080 8944</a></dd>
                                    <dd><a title="Click to call us" href="tel:002347055951043">00234 705 595 1043</a></dd>
                                </dl>
                            </dd>
                        </dl>
                        <dl>
                            <dt><h4>Connect with Us</h4></dt>
                            <dd>
                                <ul>
                                    <li><a title="Find us on Facebook"><i class="fi-social-facebook size-28"></i></a></li>
                                    <li><a title="Follow us on Twitter"><i class="fi-social-twitter size-28"></i></a></li>
                                    <li><a title="Connect with us on Google +"><i class="fi-social-google-plus size-28"></i></a></li>
                                    <li><a title="Click to call us on Skype" href="skype:serahanasports?call"><i class="fi-social-skype size-28"></i></a></li>
                                </ul>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </section>
    </div>



