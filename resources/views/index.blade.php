<x-header />
<section class="slider">
  <div class="demo-2">
    <div id="slider" class="sl-slider-wrapper">
      <div class="sl-slider">
        <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
          <div class="sl-slide-inner">
            <div class="bg-img bg-img-1"></div>
            <div class="content">
              <h2>We have more <u>+100</u><br>
                surgens to take care of you</h2>
              <img src="images/pulse.png" alt="Image"><br>
              <a href="#" class="btn-turquaz-lg">READ MORE</a> </div>
            <!-- end content -->
          </div>
          <!-- end sl-slide-inner -->
        </div>
        <!-- end sl-slide -->
        <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
          <div class="sl-slide-inner">
            <div class="bg-img bg-img-2"></div>
            <div class="content">
              <h2>Our <u>MRI</u> room has<br>
                been renew for our patients</h2>
              <img src="images/pulse.png" alt="Image"><br>
              <a href="#" class="btn-turquaz-lg">READ MORE</a> </div>
            <!-- end content -->
          </div>
          <!-- end sl-slide-inner -->
        </div>
        <!-- end sl-slide -->
        <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
          <div class="sl-slide-inner">
            <div class="bg-img bg-img-3"></div>
            <div class="content">
              <h2>Online <u>appointment</u> so<br>
                easy to get from our new website</h2>
              <img src="images/pulse.png" alt="Image"><br>
              <a href="#" class="btn-turquaz-lg">READ MORE</a> </div>
            <!-- end content -->
          </div>
          <!-- end sl-slide-inner -->
        </div>
        <!-- end sl-slide -->
        <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
          <div class="sl-slide-inner">
            <div class="bg-img bg-img-4"></div>
            <div class="content">
              <h2>30% <u>discount</u> for <br>
                special thereatment patients</h2>
              <img src="images/pulse.png" alt="Image"><br>
              <a href="#" class="btn-turquaz-lg">READ MORE</a> </div>
            <!-- end content -->
          </div>
          <!-- end sl-slide-inner -->
        </div>
        <!-- end sl-slide -->
      </div>
      <!-- sl-slider -->
      <nav id="nav-arrows" class="nav-arrows"> <span class="nav-arrow-prev">Previous</span> <span class="nav-arrow-next">Next</span> </nav>
      <!-- end nav-arrows -->
      <nav id="nav-dots" class="nav-dots"> <span class="nav-dot-current"></span> <span></span> <span></span> <span></span> </nav>
      <!-- end nav-dots -->
    </div>
    <!-- end sl-slider-wrapper -->
  </div>
  <!-- end demo2 -->
</section>
<!-- end slider -->
<section class="appointment">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h2>Appointment</h2>
      </div>
      <!-- end col-12 -->
      <form action="/departments" method="POST">
        @csrf
        <div class="col-md-4 col-sm-4 col-xs-12">
          <label>Patient name</label>
          <input type="text" name="name">
        </div>
        <!-- end col-4 -->

        <div class="col-md-4 col-sm-4 col-xs-12">
          <label>Phone number</label>
          <input type="text" id="phone" name="phoneno">
        </div>
        <!-- end col-4 -->
        <div class="col-md-4 col-sm-4 col-xs-12">
          <label>E-mail</label>
          <input type="text" name="email">
        </div>
        <!-- end col-4 -->
        <div class="col-xs-12">
          <hr>
        </div>
        <!-- end col-12 -->
        <div class="col-md-2 col-sm-6 col-xs-12 date">
          <label>Select date</label>
          <input type="text" class="datepicker" name="date" data-date-format="mm/dd/yy" placeholder="mm/dd/yy" maxlength="8">
        </div>
        <!-- end col-3 -->
        <div class="col-md-3 col-sm-6 col-xs-12 department">
          <label>Department</label>
          <select name="department">
            <option value="Cardiology">Cardiology</option>
            <option value="Gastrology">Gastrology</option>
            <option value="Embryology">Embryology</option>
            <option value="Neurology">Neurology</option>
          </select>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 department">
          <label>Doctors</label>
          <select name="doctors">
            <option>Others</option>
            <option value="Dr. Zuhaib Khan">Dr. Zuhaib Khan</option>
            <option value="Dr. Ravi Tiwari">Dr. Ravi Tiwari</option>
            <option value="Dr. Rishabh Pandey">Dr. Rishabh Pandey</option>
            <option value="Dr. Saurbh Tiwari">Dr. Saurbh Tiwari</option>
          </select>
        </div>
        <!-- end col-3 -->
        <div class="col-md-4 col-sm-12 col-xs-12 gender mt-3" style="margin-top: 30px;">
          <input name="gender" type="radio" checked>
          <label>Male</label>
          <input name="gender" type="radio">
          <label>Female</label>
          <input type="submit" value="MAKE IT">
        </div>
        <!-- end col-4 -->
        <small style="text-align: center" class="hidden-xs">
            <label style="font-size:15px;">Note: Today's new appointments after 2 p.m. will be scheduled for next day.</label>
        </small>
      </form>
      <!-- end form -->

    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
</section>
<!-- end appointment -->
<section class="home-services text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="title-box">
          <h2>Specialities</h2>
          <h5>Consectetuer adipiscing elit, sed diam nonummy</h5>
        </div>
        <!-- end title-box -->
      </div>
      <!-- end col-12 -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="content">
          <div class="line">
            <div class="icon"><img src="images/icon1.png" alt="Icon"> </div>
          </div>
          <h3>CARDIOLOGY</h3>
          <p>Consectetuer adipiscing elit, sed diam nonummy</p>
        </div>
        <!-- end content -->
      </div>
      <!-- end col-3 -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="content">
          <div class="line">
            <div class="icon"><img src="images/icon2.png" alt="Icon"></div>
          </div>
          <h3>OPHTHALMOLOGY</h3>
          <p>Consectetuer adipiscing elit, sed diam nonummy</p>
        </div>
        <!-- end content -->
      </div>
      <!-- end col-3 -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="content">
          <div class="line">
            <div class="icon"><img src="images/icon3.png" alt="Icon"></div>
          </div>
          <h3>NEUROLOGY</h3>
          <p>Consectetuer adipiscing elit, sed diam nonummy</p>
        </div>
        <!-- end content -->
      </div>
      <!-- end col-3 -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="content">
          <div class="icon"><img src="images/icon4.png" alt="Icon"></div>
          <h3>DERMATOLOGY</h3>
          <p>Consectetuer adipiscing elit, sed diam nonummy</p>
        </div>
        <!-- end content -->
      </div>
      <!-- end col-3 -->
      <div class="col-xs-12"> <a href="#" class="btn-turquaz-md">CLICK FOR ALL</a> </div>
      <!-- end col-12 -->
    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
</section>
<!-- end home-services -->
<section class="box-content">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12 no-padding">
        <div class="first-box">
          <div class="icon"><img src="images/icon1.png" alt="Icon"></div>
          <div class="content">
            <h3>LAB SCHEDULE</h3>
            <p>Call emergency appointment number for emergency service.</p>
            <a href="#" class="btn-ghost-md">ABOUT MORE</a> </div>
          <!-- end content -->
        </div>
        <!-- end first-box -->
      </div>
      <!-- end col-4 -->
      <div class="col-md-4 col-sm-4 col-xs-12 no-padding">
        <div class="second-box">
          <div class="icon"><img src="images/icon2.png" alt="Icon"></div>
          <div class="content">
            <h3>CHECK UP</h3>
            <p>Call emergency appointment number for emergency service.</p>
            <a href="#" class="btn-ghost-md">ABOUT MORE</a> </div>
          <!-- end content -->
        </div>
        <!-- end second-box -->
      </div>
      <!-- end col-4 -->
      <div class="col-md-4 col-sm-4 col-xs-12 no-padding">
        <div class="third-box">
          <div class="icon"><img src="images/icon3.png" alt="Icon"></div>
          <div class="content">
            <h3>OTHER CLINICS</h3>
            <p>Call emergency appointment number for emergency service.</p>
            <a href="#" class="btn-ghost-md">ABOUT MORE</a> </div>
          <!-- end content -->
        </div>
        <!-- end third-box -->
      </div>
      <!-- end col-4 -->
    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
</section>
<!-- end box-content -->
<section class="latest-news">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <div class="title-box">
          <h2>LATEST NEWS</h2>
          <h5>Consectetuer adipiscing elit, sed diam nonummy</h5>
        </div>
        <!-- end title-box -->
      </div>
      <!-- end col-12 -->
      <div class="col-md-6 col-xs-12">
        <div class="left">
          <div class="article-image"><img src="images/image8.jpg" alt="Image"> </div>
          <img src="images/rated-article.png" alt="Image" class="rated-article">
          <h3><strong>SPECIAL</strong> THREATMENT</h3>
          <small>Posted <strong>2nd March </strong>by George Washington</small>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
          <a href="#" class="btn-turquaz-md">READ MORE</a> </div>
        <!-- end left -->
      </div>
      <!-- end col-6 -->
      <div class="col-md-6 col-xs-12">
        <div class="right">
          <div class="article-image"><img src="images/image9.jpg" alt="Image"></div>
          <img src="images/rated-article.png" alt="Image" class="rated-article">
          <h3><strong>DISEASE</strong> CENTER</h3>
          <small>Posted <strong>2nd March </strong>by George Washington</small>
          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using, making it look like readable English. </p>
          <a href="#" class="btn-turquaz-md">READ MORE</a> </div>
        <!-- end right -->
      </div>
      <!-- end col-6 -->
    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
</section>
<!-- end latest-news -->
<section class="frase overlay text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 no-padding"> <img src="images/icon4.png" alt="Image">
        <h2>HEALTHY WEEKEND CHECK UP</h2>
        <h4>Combine your Check - up in Our Hospital with refreshing Bosphorus tour in Istanbul!</h4>
        <a href="#" class="btn-ghost-lg">READ MORE</a> </div>
      <!-- end col-12 -->
    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
</section>
<!-- end frase -->
<section class="gallery text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="title-box">
          <h2>Gallery</h2>
          <h5>Consectetuer adipiscing elit, sed diam nonummy</h5>
        </div>
        <!-- end title-box -->
      </div>
      <!-- end col-12 -->
    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
  <div class="home-gallery">
    <div class="item">
      <div class="thumb">
        <div class="desc"><a href="images/image1.jpg" class="fancybox" rel="lightbox" title="Enjoys music, interests in photography and offers"><strong>Emergency</strong> Room <i class="ion-qr-scanner"></i></a></div>
        <img src="images/image1.jpg" alt="Image"> </div>
    </div>
    <!-- end item -->
    <div class="item">
      <div class="thumb">
        <div class="desc"> <a href="images/image6.jpg" class="fancybox" rel="lightbox" title="Enjoys music, interests in photography and offers"><strong>Medical</strong> Threatment<i class="ion-qr-scanner"></i></a> </div>
        <img src="images/image6.jpg" alt="Image"></div>
    </div>
    <!-- end item -->
    <div class="item">
      <div class="thumb">
        <div class="desc"> <a href="images/image3.jpg" class="fancybox" rel="lightbox" title="Enjoys music, interests in photography and offers"><strong>Research</strong> Lab<i class="ion-qr-scanner"></i></a></div>
        <img src="images/image3.jpg" alt="Image"> </div>
    </div>
    <!-- end item -->
    <div class="item">
      <div class="thumb">
        <div class="desc"><a href="images/image6.jpg" class="fancybox" rel="lightbox" title="Enjoys music, interests in photography and offers"><strong>Support</strong> Center<i class="ion-qr-scanner"></i></a></div>
        <img src="images/image6.jpg" alt="Image"> </div>
    </div>
    <!-- end item -->
  </div>
  <!-- end home-gallery -->
</section>
<!-- end gallery -->
<section class="boxed-image-feature">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <div class="title-box">
          <h2>Departments</h2>
          <h5>Consectetuer adipiscing elit, sed diam nonummy</h5>
        </div>
        <!-- end title-box -->
      </div>
      <!-- end col-12 -->
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="content-box">
          <div class="thumb"><img src="images/image4.jpg" alt="Image"></div>
          <div class="icon"><img src="images/icon6.png" alt="Image"></div>
          <h3>CARDIOLOGY</h3>
          <p>You need a doctor urgently outside of medicenter opening hours, call <strong>emergency</strong> appointmen</p>
          <a href="#" class="btn-ghost-md">READ MORE</a> </div>
        <!-- end content-box -->
      </div>
      <!-- end col-6 -->
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="content-box">
          <div class="thumb"><img src="images/image6.jpg" alt="Image"></div>
          <div class="icon"><img src="images/icon5.png" alt="Image"></div>
          <h3>DENTAL</h3>
          <p>You need a doctor <strong>urgently</strong> outside of medicenter opening hours, call emergency appointmen</p>
          <a href="#" class="btn-ghost-md">READ MORE</a> </div>
        <!-- end content-box -->
      </div>
      <!-- end col-6 -->
    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
</section>
<!-- end boxed-image-feature -->
<x-sponsers/>
<x-footer/>
