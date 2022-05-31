<section class="footer-top">
    <div class="overlay py-3 py-md-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 col-lg-6 mb-3 mb-md-0">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="terms.php" class="nav-link">
                                TERMS CONDITIONS
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="privacy.php" class="nav-link">
                                PRIVACY POLICY
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 col-lg-6">
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a href="https://twitter.com/motoindexhq" target="_blank" class="nav-link" title="twitter">
                                <i class="bi bi-twitter"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://g.co/kgs/F3qf2b" target="_blank" class="nav-link" title="twitter">
                                <i class="bi bi-geo-alt-fill"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.instagram.com/motoindexhq" target="_blank" class="nav-link" title="Instagram">
                                <i class="bi bi-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="footer-bottom py-3 py-md-5">
    <div class="overlay">
        <div class="container text-center">
            <div class="row">
                <div class="col-12">
                    <p class="top">COPYRIGHT © 2016 ALL RIGHTS RESERVED</p>

                    <p>
                        © 2016 Moto Index (UK) Limited. The information provided on this website is for information
                        purposes only. The website and its content are not, and should not be deemed to be an offer of,
                        or invitation to engage in any investment activity. The website should not be construed as
                        advice or a personal recommendation by Moto Index (UK) Limited or any of its partners. Moto
                        Index (UK) Limited is not authorized and regulated by the Financial Conduct Authority (FCA). The
                        content of this promotion is not authorized under the Financial Services and Markets Act 2000
                        (FSMA). Reliance on the promotion for the purpose of engaging in any investment activity may
                        expose an individual to a significant risk of losing all of the investment. UK residents wishing
                        to participate in this promotion must fall into the category of sophisticated investor or high
                        net worth individual as outlined by the Financial Conduct Authority (FCA).
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Cookies Alert Start Here -->
<div class="wrapper-hidden" id="cookies-alert">
    <div class="content">
        <header>Cookies Consent</header>
        <p>We use cookies to manage user login sessions, enhance user experience, perform essential site operations and
            tailor advertising and other content to reflect your specific interests. By clicking <span style="color:#fff;">"I Accept"</span> you consent to the use of cookies and similar technologies for the
            purposes we outline in our <a href="privacy.php" target="_blank">Privacy Policy</a>.</p>
        <div class="buttons">
            <button class="btn btn-primary">I Accept</button>
        </div>
    </div>
</div>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js' async defer></script>
<script src="js/jquery.countup.js"></script>
<script src="js/cookies.js"></script>
<script src="js/wow.min.js"></script>


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
                // console.log(data);
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