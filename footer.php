<section class="footer-main">
    <div class="container">
        <div class="row g-3 d-flex align-items-center">

            <div class="col-md-4">
                <ul class="nav justify-content-start">
                    <li class="nav-item">
                        <a href="https://twitter.com/TechSportGlobal" target="_blank" class="nav-link social-icon">
                            <i class="bi bi-twitter"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.instagram.com/techsportglobal/" target="_blank" class="nav-link social-icon">
                            <i class="bi bi-instagram"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://goo.gl/maps/M1RD6EucjC2f8eWR6" target="_blank" class="nav-link social-icon">
                            <i class="bi bi-geo-alt-fill"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-md-4 py-2">
                <!-- TrustBox widget - Review Collector -->
                <div class="trustpilot-widget" data-locale="en-GB" data-template-id="56278e9abfbbba0bdcd568bc"
                    data-businessunit-id="629534fe67f7ac0968509262" data-style-height="52px" data-style-width="100%">
                    <a href="https://uk.trustpilot.com/review/techsport-global.com" target="_blank"
                        rel="noopener">Trustpilot</a>
                </div>
                <!-- End TrustBox widget -->
            </div>


            <div class="col-md-4">
                <ul class="nav mt-1 justify-content-end">
                    <li class="nav-item">
                        <a href="terms.php" class="nav-link">
                            Terms Of Use
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="privacy.php" class="nav-link">
                            Privacy Statement
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</section>

<section class="copyright py-3">
    <div class="container py-3 text-center">
        <div class="row">
            <div class="col">
                <h1>
                    Copyright © 2022 All Rights Reserved
                </h1>
                <P class="mb-0">
                    © 2022 Tech Sport Global (UK) Limited. The information provided on this
                    website is for information purposes only. The website and its content
                    are not, and should not be deemed to be an offer of, or invitation to
                    engage in any investment activity. The website should not be construed
                    as advice or a personal recommendation by Tech Sport Global (UK) Limited
                    or any of its partners. Tech Sport Global (UK) Limited is not authorised
                    and regulated by the Financial Conduct Authority (FCA). The content of this
                    promotion is not authorised under the Financial Services and Markets Act
                    2000 (FSMA). Reliance on the promotion for the purpose of engaging in any
                    investment activity may expose an individual to a significant risk of
                    losing all of the investment. UK residents wishing to participate in this
                    promotion must fall into the category of sophisticated investor or high
                    net worth individual as outlined by the Financial Conduct Authority (FCA).
                </P>
            </div>
        </div>
    </div>
</section>




<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="js/jquery.countup.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js' async defer></script>
<script src='js/matches.js'></script>
<script src='js/all-fixture.js'></script>
<!-- TrustBox script -->
<script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
<!-- End TrustBox script -->
<!-- Cookies Alert Start Here -->
<div class="wrapper-hidden" id="cookies-alert">
    <div class="content">
        <header>Cookies Consent</header>
        <p>We use cookies to manage user login sessions, enhance user experience, perform essential site operations and
            tailor advertising and other content to reflect your specific interests. By clicking <span
                style="color:#fff;">"I Accept"</span> you consent to the use of cookies and similar technologies for the
            purposes we outline in our <a href="privacy.php" target="_blank">Privacy Policy</a>.</p>
        <div class="buttons">
            <button class="btn btn-primary">I Accept</button>
        </div>
    </div>
</div>
<div class="back-to-top">Top</div>


<script src="js/cookies.js"></script>
<!--Count Down Timer-->
<!-- <script>
// Set the date we're counting down to
var countDownDate = new Date("Mar 18, 2022 12:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script> -->

<!--Count Down Timer-->


<!-- Cookies Alert Ending -->
<script>
// var fixed_top = $(".navbar-top");
// $(window).on("scroll", function () {
//   if ($(window).scrollTop() > 50) {
//     fixed_top.addClass("header-fixed");
//   }
//   else {
//     fixed_top.removeClass("header-fixed");
//   }
// });

$('.navbar-toggler').click(function() {
    $(this).find('i').toggleClass("bi-list bi-x");
});

/*Form Validation*/
$(".spinner-border").hide();
$('#submit-form').click(function() {
    const fname = $('input[name="fname"]').val();
    const email = $('input[name="email"]').val();
    const subject = $('input[name="subject"]').val();
    const message = $('textarea[name="msg"]').val();
    const mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if (fname == '') {
        $('.fname-error').text('This field is required');
        return false;
    } else {
        $('.fname-error').text('');
    }


    if (email == '') {
        $('.email-error').text('This field is required');
        return false;
    }
    if (!email.match(mailformat)) {
        $('.email-error').text('Invalid email address');
        return false;
    } else {
        $('.email-error').text('');
    }


    if (subject == '') {
        $('.subject-error').text('This field is required');
        return false;
    } else {
        $('.subject-error').text('');
    }

    if (message == '') {
        $('.message-error').text('This field is required');
        return false;
    } else {
        $('.message-error').text('');
    }

    $('#submit-form').attr('disabled', true);
    $("#ic_icon").hide();
    $(".spinner-border").show();

    $.post("send_email.php", {
            form: "contact",
            f_name: fname,
            email: email,
            subject: subject,
            msg: message,
            g_recaptcha_response: grecaptcha.getResponse(),
        },

        function(data, status) {
            console.log(data);
            if (data == 'success') {
                $("#success-msg").fadeIn(300).delay(3000).fadeOut(200);
                $("input").val('');
                $("textarea").val('');
            } else if (data == 'captcha-error') {
                $('.captcha-error').text('Captcha is required');
            } else {
                $("#fail-msg").fadeIn(300).delay(3000).fadeOut(200);
            }
        });

    $(document).ajaxComplete(function() {
        $(".spinner-border").fadeOut();
        $("#ic_icon").show();
        $('#submit-form').attr('disabled', false);

    });

});
$('#register-form').click(function() {

    const fname = $('input[name="f_name"]').val();
    const lname = $('input[name="lname"]').val();
    const email = $('input[name="email"]').val();
    const phone = $('input[name="phone"]').val();
    const mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (fname == '') {
        $('.fname-error').text('This field is required');
        return false;
    } else {
        $('.fname-error').text('');
    }

    if (lname == '') {
        $('.lname-error').text('This field is required');
        return false;
    } else {
        $('.lname-error').text('');
    }

    if (email == '') {
        $('.email-error').text('This field is required');
        return false;
    }
    if (!email.match(mailformat)) {
        $('.email-error').text('Invalid email address');
        return false;
    } else {
        $('.email-error').text('');
    }

    if (phone == '') {
        $('.phone-error').text('This field is required');
        return false;
    }
    if (isNaN(phone)) {
        $('.phone-error').text('Invalid phone number');
        return false;
    } else {
        $('.phone-error').text('');
    }

    $('#register-form').attr('disabled', true);
    $("#ic_icon").hide();
    $(".spinner-border").show();

    $.post("send_email.php", {
            form: "register",
            f_name: fname,
            l_name: lname,
            email: email,
            phone: phone,
            g_recaptcha_response: grecaptcha.getResponse(),
        },

        function(data, status) {
            console.log(data);
            if (data == 'success') {
                $("#success-msg").fadeIn(300).delay(3000).fadeOut(200);
                $("input").val('');
            } else if (data == 'captcha-error') {
                $('.captcha-error').text('Captcha is required');
            } else {
                $("#fail-msg").fadeIn(300).delay(3000).fadeOut(200);
            }
        });

    $(document).ajaxComplete(function() {
        $(".spinner-border").fadeOut();
        $("#ic_icon").show();
        $('#register-form').attr('disabled', false);
    });
});
$('#open-menu').click(function() {
    $('.side-mobile-nav').fadeIn();
    $('body').addClass('modal-open')
});

$('#close-menu').click(function() {
    $('.side-mobile-nav').fadeOut();
    $('body').removeClass('modal-open')
});

$('.side-mobile-nav .nav li a').click(function() {
    $('.side-mobile-nav').fadeOut();
    $('body').removeClass('modal-open')
});

jQuery(document).ready(function($) {
    $('.counter').countUp({
        'time': 2000,
        'delay': 10
    });
});

/*Form Validation*/
</script>