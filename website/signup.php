<?php
 include_once('header.php');
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype php>
<php lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Livefloor an Interior & Furniture Category Bootstrap Responsive Template | Contact :: W3layouts</title>
  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
  <!-- google fonts -->
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <!-- Template CSS -->
</head>

<body>
  <!-- about breadcrumb -->
  <section class="w3l-about-breadcrumb text-left">
    <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
      <div class="container">
        <h2 class="title">Signup</h2>
        <ul class="breadcrumbs-custom-path mt-2">
          <li><a href="#url">Home</a></li>
          <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> signup </li>
        </ul>
      </div>
    </div>
  </section>
  <!-- //about breadcrumb -->
   <!-- /contact-->
  <div class="signup-form py-5" id="signup">
    <div class="container py-lg-5 py-md-4">
      
      <h3 class="hny-title mb-lg-5 mb-4">Registration Form</h3>
        <div class="signup12-main mb-5">
            <form action="https://sendmail.w3layouts.com/submitForm" method="post">
                <div class="main-input">
				<div class="d-grid">
                    <input type="name" name="w3lSender" id="w3lSender" placeholder="First Name:"
                            class="signup-input" /><br>
                        <input type="last name" name="w3llast name" id="w3llast name" placeholder="Last Name:"
                            class="signup-input" /><br>
                </div>   
                    <div class="d-grid">
                        <input type="email" name="w3lSender" id="w3lSender" placeholder="Your Email id :"
                            class="signup-input" /><br>
                        <input type="password" name="w3lpassword" id="w3lpassword" placeholder="password :"
                            class="signup-input" /><br>
						<input type="Address" name="w3lAddress" id="w3lAdress" placeholder="Address :"
                            class="signup-input" /><br>
						<input type="Phone Number" name="w3lPhone Number" id="w3lPhone Number" placeholder="Phone Number :"
                            class="signup-input" /><br>
					    <input type="Gender" name="w3lGender" id="w3lGender" placeholder="Gender :"
                            class="signup-input" /><br>
						
					</div>
                </div>
                
                <div class="text-right">
                    <button class="btn btn-style btn-primary btn-contact">Submit Now</button>
                </div>
            </form>
        </div>
            
        <div class="row pt-lg-4">
          <div class="col-md-12">
              <div class="row">
                  <div class="col-lg-4 col-md-6">
                      <div class="contact-address">
                          <ul>
                              <li class="icon-color"><span class="fa fa-map-marker"></span> <span>703 Homestead Street
                                      <br>Waltham, MA 02453</span> </li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                      <div class="contact-address">
                          <ul>
                              <li class="icon-color"><span class="fa fa-phone"></span> <span><a class="" href="tel:+(21)-234-9999">Phone :+(21)-234-9999</a>
                                 <a class="" href="tel:+(21)-234-8888">Fax :+(21)-234-8888</a></span></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                      <div class="contact-address">
                          <ul>
                              <li class="icon-color"><span class="fa fa-mail-reply"></span><span>
                                  <a href="mailto:travel@mail.com"> Livefloor@mail.com</a>
                                  <a href="mailto:info@travel.com"> info@Livefloor1.com</a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>
    <div class="maphny">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2895687731!2d-74.26055986835598!3d40.697668402590374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1562582305883!5m2!1sen!2sin"
            frameborder="0" style="border:0" allowfullscreen=""></iframe>
    </div>

<!--//contact-->
  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->

  <!-- Template JavaScript -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/theme-change.js"></script>
  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->

  <script src="assets/js/bootstrap.min.js"></script>
<?php
 include_once('footer.php');
?>
</body>

