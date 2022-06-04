<x-header />
<section class="inner-header">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h1>CONTACT US</h1>
      </div>
    </div>
  </div>
</section>
<!-- end inner header -->
<section class="inner-content">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-8 col-xs-12">
        <div class="left-side">
          <h1 class="title-bottom-line"><strong>CONTACT</strong> FORM</h1>
          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
          <form id="contact-form">
            <input type="text" name="name" id="name" placeholder="Your name">
            <input type="text" name="surname" id="surname"  placeholder="Surname">
            <input type="text" name="phone" id="phone" placeholder="Phone">
            <input type="text" name="email" id="email" placeholder="E-mail">
            <input type="text" name="city" id="city" placeholder="City">
            <input type="text" name="state" id="state" placeholder="State">
            <input type="text" name="subject" id="subject" placeholder="What is your contact reason" class="subject">
            <textarea name="message" id="message" placeholder="Your Message"></textarea>
            <input type="submit" name="submit" value="SEND IT">
          </form>
          <div id="success">
            <p>Your message was sent successfully! We will be in touch as soon as we can.</p>
          </div>
          <div id="error">
            <p>Something went wrong, try refreshing and submitting the form again.</p>
          </div>
        </div>
      </div>
      <!-- end left side -->
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="side-bar">
          <h1 class="title-bottom-line"><strong>HEAD</strong> OFFICE</h1>
          <div class="panel-group" id="accordion">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">New York Hospitals</a> </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse">
                <div class="panel-body gray-bg">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d755.670575004187!2d-73.82493643799931!3d40.74701573236736!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2606ea6fbfbd9%3A0xa3ec5195d0f041ac!2s56-45+Main+St%2C+Flushing%2C+NY+11355%2C+Birle%C5%9Fik+Devletler!5e0!3m2!1str!2s!4v1415186541806" style=" width:100%; height:140px; border:0"></iframe>
                  <p><strong>New York Hospital Queens</strong></p>
                  <p>56-45 Main St Flushing, NY 11355<br>
                    US</p>
                  <h3>1-800-555-1234</h3>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Los Angelas Hospitals</a> </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body gray-bg">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d755.670575004187!2d-73.82493643799931!3d40.74701573236736!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2606ea6fbfbd9%3A0xa3ec5195d0f041ac!2s56-45+Main+St%2C+Flushing%2C+NY+11355%2C+Birle%C5%9Fik+Devletler!5e0!3m2!1str!2s!4v1415186541806" style=" width:100%; height:140px; border:0"></iframe>
                  <p><strong>Los Angelas Queens</strong></p>
                  <p>56-45 Main St Flushing, NY 11355<br>
                    US</p>
                  <h3>1-800-555-1234</h3>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Chicago Hospitals</a> </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse in">
                <div class="panel-body gray-bg">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d755.670575004187!2d-73.82493643799931!3d40.74701573236736!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2606ea6fbfbd9%3A0xa3ec5195d0f041ac!2s56-45+Main+St%2C+Flushing%2C+NY+11355%2C+Birle%C5%9Fik+Devletler!5e0!3m2!1str!2s!4v1415186541806" style=" width:100%; height:140px; border:0"></iframe>
                  <p><strong>Chicago Queens</strong></p>
                  <p>56-45 Main St Flushing, NY 11355<br>
                    US</p>
                  <h3>1-800-555-1234</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end right side -->
    </div>
    <!-- end row -->
  </div>
</section>
<!-- end section -->
<x-footer/>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script type="text/javascript">

// validate contact form
$(function() {
	$("#contact-form").validate({
    	rules: {
            name: {
                required: true,
                minlength: 2
            },
			surname: {
                required: true,
                minlength: 2
            },
			phone: {
                required: true,
                minlength: 2
            },
            email: {
                required: true,
                email: true
            },
			city: {
                required: true,
				minlength: 2
            },
			state: {
                required: true,
				minlength: 2
            },
            subject: {
                required: true
            },
			message: {
                required: true
            }
        },
		messages: {
            name: {
                required: "Please type your name",
                minlength: "Please type your name correctly"
            },
			surname: {
                required: "Please type your surname",
                minlength: "Please type your surname correctly"
            },
			phone: {
                required: "Please type your phone number",
                minlength: "Please type your phone number correctly"
            },
            email: {
                required: "Please type your e-mail correctly"
            },
			city: {
                required: "Please type your city",
                minlength: "Please type your city correctly"
            },
			state: {
                required: "Please type your state",
                minlength: "Please type your state correctly"
            },
            subject: {
                required: "Please type about subject",
                minlength: "To short subject"
            },
			 message: {
                required: "Please type your message",
                minlength: "To short message"
            }
        },
		submitHandler: function(form) {
            $(form).ajaxSubmit({
                type:"POST",
                data: $(form).serialize(),
                url:"process.php",
                success: function() {
                    $('#contact-form :input').attr('disabled', 'disabled');
                    $('#contact-form').fadeTo( "slow", 0, function() {
                        $(this).find(':input').attr('disabled', 'disabled');
                        $(this).find('label').css('cursor','default');
                        $('#success').fadeIn();
                    });
                },
                error: function() {
                    $('#contact-form').fadeTo( "slow", 0, function() {
                        $('#error').fadeIn();
                    });
                }
            });
        }
    });
});
</script>
