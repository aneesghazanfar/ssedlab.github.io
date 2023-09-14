<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no, viewport-fit=cover">
    <title>Winfinity: Premium Quality Online Casino Provider</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./public/css/swiper-bundle.min.css?v=4.043453451">
    <link rel="stylesheet" href="./public/css/style.min.css?v=4.0.012">
    <link rel="stylesheet" href="./public/css/custom-style.min.css?v=1">
    <link rel="stylesheet" href="./public/css/live-style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="./i/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./i/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./i/favicon-16x16.png">
    <link rel="manifest" href="./i/site.webmanifest">
    <link rel="mask-icon" href="./i/safari-pinned-tab.svg" color="#000">
    <link rel="shortcut icon" href="./i/favicon.ico">
    <meta name="description" content="Winfinity offers high-end, innovative, and regulated solutions for iGaming industry, providing premium quality content and products.">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="./i/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    
</head>

<body id="page-index">
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PCK6J8B" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <div class="body-wrap-1">
        <?php
        require 'shared/_navbar.php';
        navBar();
        ?>

      <div class="form-section">
        <div class="container">
                  <div class="demo_request form_sucsess_parent">
        <div class="demo_request__wrap">
          <div class="demo_request__form form_page__wrap">
            <div class="form_page" style="margin-top:70px;">
              <div class="demo_request__head">
                 Contact us</div>
              <div class="demo_request__descr demo_request__descr--gate">We will process your personal information in accordance with our <span style="color: orange;">Privacy Policy.</span></div>
              <form class="form demo_request_form contact-form" action="api/v1/auth/token/master-session">
              <div class="form-label">
              <div class="label-1">
                  <label class="form__input field">
                  <input type="text" name="login" data-valid="false" data-name="login" placeholder="Login">
                  <div class="form__input_label">Name</div>
                  
                </label>
                <label class="form__input field">
                  <input type="email" name="email" data-valid="false" data-name="email" placeholder="Password">
                  <div class="form__input_label">Email</div>
                  
                </label>
               
                <label class="attach-file">
                    <input type="file" id="myfile" name="myfile">
                    
                </label>
              </div>

                <div class="label-2">
                  <label class="form__input field">
                  <input type="text" name="login" data-valid="false" data-name="login" placeholder="Login">
                  <div class="form__input_label">Phone</div>
                  
                </label>
                <label class="form__input field">
                  <input type="text" name="message" data-valid="false" data-name="password" placeholder="Password">
                  <div class="form__input_label">Message</div>
                  
                </label>
                
                
                 <label class="form__check field forrm-checkbox">
                    <input type="checkbox" data-valid="false" data-name="Agree">
                      <span class="form__check_input"></span>
                    <div class="">We will process your personal information in accordance with our Privacy Policy.</div>
                </label>
                
              </div>

          </div>
              
                <div class="form__submit">
                  <button class="disabled button button--orange"><span class="button__wrap"><span class="button__inner_wrap"><b class="button__inner_text">Send Message</b></span><span class="button__arrow">
                        <svg class="alternative_solution" viewBox="0 0 1000 1000" preserveAspectRatio="none">
                          <foreignobject class="foreignobject" width="1000" height="1000"><span class="foreignobject"></span></foreignobject>
                        </svg><span class="button__arrow_svg"><svg viewBox="0 0 17 19" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M6.36402 2L14 9.63598L6.36403 17.272" stroke-width="3"/>
<path d="M14 9.63379L0.000713587 9.63379" stroke-width="3"/>
</svg>
</span></span></span></button>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
        </div>
    </div>


    <?php
    require 'shared/_footer.php';
    footer();
    ?>
    <div class="popup-custom">
        <div class="popup__wrapper popup__presentation">
            <div class="popup__close closePopup" data-popup="popup__presentation__close">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L16.5 16.5" stroke="white" stroke-width="2"></path>
                    <path d="M16.5 1L1 16.5" stroke="white" stroke-width="2"></path>
                </svg>
            </div>
            <div class="popup_presentation__wrap">
                <div class="popup_presentation__content_wrap form_sucsess_parent">
                    <div class="popup_presentation__content_form">
                        <div class="section__head popup__small_head"><span class="color-small"><b class="top_section__head_i_inner">PRESENTATION</b> </span></div>
                        <div class="section__head small_head"><span class="color"><b class="top_section__head_i_inner">Download</b> </span><b class="top_section__head_i_inner">winfinity</b> <b class="top_section__head_i_inner">presentation</b></div>
                        <div class="section__bottom">Provide your Email and we will send you Winfinity product
                            Presentation download link.</div>
                        <div class="section__form">
                            <form class="form" action="/api/mailing/presentation-mail" method="post">
                                <label class="form__input field">
                                    <input type="email" name="email" data-valid="false" data-name="email" placeholder="Email">
                                    <div class="form__input_label">Email</div>
                                    <div class="form__input_error" data-empty="The field is required" data-emptyall="all fields should be filled" data-error="invalid Email format" data-errorbox="invalid Email format" data-errorback="We can’t find this Email"><span>We can’t find this
                                            Email</span></div>
                                </label>
                                <label class="form__check field">
                                    <input type="checkbox" data-valid="false" data-name="Agree"><span class="form__check_input"></span>
                                    <div class="form__check_label">By checking this checkbox, I give a permission
                                        for use of my personal data. </div>
                                </label>
                                <div class="form__submit">
                                    <button class="disabled button button--orange">
                                        <span class="button__wrap">
                                            <span class="button__inner_wrap">
                                                <b class="button__inner_text">SEND ME A LINK</b>
                                            </span>
                                            <span class="button__arrow">
                                                <svg class="alternative_solution" viewBox="0 0 1000 1000" preserveAspectRatio="none">
                                                    <foreignObject class="foreignobject" width="1000" height="1000">
                                                        <span class="foreignobject"></span>
                                                    </foreignObject>
                                                </svg>
                                                <span class="button__arrow_svg">
                                                    <svg viewBox="0 0 17 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6.36402 2L14 9.63598L6.36403 17.272" stroke-width="3"></path>
                                                        <path d="M14 9.63379L0.000713587 9.63379" stroke-width="3"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="inner_product_presentation__thanks inner_product_thanks">
                        <div class="inner_product_thanks__head"><span class="color">Thanks </span><br>for your
                            request</div>
                        <div class="inner_product_thanks__ckeck_email">Check your Email</div>
                        <div class="inner_product_thanks__email_to">Presentation Download Link was sent to <span class="mail_content">*****<a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1a7b737d5a7d777b737634797577">[email&#160;protected]</a></span>
                        </div>
                    </div>
                </div>
                <div class="popup__presentation_img_wrap">
                    <img src="./public/img/main_page__download--mob.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="popup">
        <!-- <div class="popup__wrapper popup__age">
                <div class="popup__title"> <span>Winfinity content is intended for persons <b>18 years or
                            older</b></span></div>
                <div class="popup__description"> <span>Please confirm you meet the legal age requirement</span></div>
                <div class="popup__age_buttons">
                    <button class="button button--black_hover button--gradient_hover popup__button_no"><span
                            class="button__wrap"><span class="button__inner_wrap"><b class="button__inner_text">NO, take
                                    me back</b></span><span class="button__arrow">
                                <svg class="alternative_solution" viewBox="0 0 1000 1000" preserveAspectRatio="none">
                                    <foreignobject class="foreignobject" width="1000" height="1000"><span
                                            class="foreignobject"></span></foreignobject>
                                </svg><span class="button__arrow_svg"><svg viewBox="0 0 17 19" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.36402 2L14 9.63598L6.36403 17.272" stroke-width="3" />
                                        <path d="M14 9.63379L0.000713587 9.63379" stroke-width="3" />
                                    </svg>
                                </span></span></span></button>
                    <button class="button button--orange closePopup"><span class="button__wrap"><span
                                class="button__inner_wrap"><b class="button__inner_text">yes, i am 18 years or
                                    older</b></span><span class="button__arrow">
                                <svg class="alternative_solution" viewBox="0 0 1000 1000" preserveAspectRatio="none">
                                    <foreignobject class="foreignobject" width="1000" height="1000"><span
                                            class="foreignobject"></span></foreignobject>
                                </svg><span class="button__arrow_svg"><svg viewBox="0 0 17 19" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.36402 2L14 9.63598L6.36403 17.272" stroke-width="3" />
                                        <path d="M14 9.63379L0.000713587 9.63379" stroke-width="3" />
                                    </svg>
                                </span></span></span></button>
                </div> -->
    </div>
    <div class="popup__wrapper popup__cookies">
        <div class="popup__close closePopup">
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L16.5 16.5" stroke="white" stroke-width="2"></path>
                <path d="M16.5 1L1 16.5" stroke="white" stroke-width="2"></path>
            </svg>
        </div>
        <div class="popup__title"> <span>We use cookies</span></div>
        <div class="popup__cookies_scroll">
            <div class="popup__description"> <span>This site uses cookies for several reasons. First and
                    foremost, to ensure the correct operation of the site, as well as to collect statistical
                    data and to personalize advertising and marketing content. Learn more about this on our <a href="#">cookie policy page.</a></span></div>
            <div class="popup__settings">
                <div class="popup__settings_wrapper">
                    <div class="popup__title"> <span>Necessary cookies</span></div>
                    <div class="popup__settings_orange"> <span>Always ON</span></div>
                    <div class="popup__description"> <span>the purpose of the use is to provide technical
                            functionality of our websites. The data from these cookies are processed on the
                            basis of Winfinity’s legitimate interest.</span></div>
                    <div class="popup__settings_checkboxes">
                        <div class="popup__settings_checkbox_container">
                            <div class="popup__title popup__settings_checkbox_label"> <span>Statistical
                                    cookies</span>
                                <label class="popup__settings_checkbox">
                                    <input type="checkbox"><span> </span>
                                </label>
                                <div class="popup__settings_checkbox_arrow">
                                    <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L7 7L13 1" stroke="#60626A"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="popup__settings_checkbox_info">
                                <div class="popup__description popup__settings_checkbox_info_container">
                                    <span>the purpose of the use is to identify usage trends and derive
                                        analytics and statistics. These cookies are used to remember your
                                        choices and make assumptions about your preferences for statistical
                                        purposes, the legal basis is your consent. Winfinity uses an automated
                                        tool called Google Analytics which allows us to record and analyze how
                                        you and other visitors use the website. You can learn more about how
                                        Google Analytics works and the information it allows us to collect and
                                        analyze here <a href="https://support.google.com/analytics/answer/1012034?hl=lten&amp;ref_topic=6157800">https://support.google.com/analytics/answer/1012034?hl=lten&ref_topic=6157800.</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="popup__settings_checkbox_container">
                            <div class="popup__title popup__settings_checkbox_label"> <span>Marketing
                                    cookies</span>
                                <label class="popup__settings_checkbox">
                                    <input type="checkbox"><span> </span>
                                </label>
                                <div class="popup__settings_checkbox_arrow">
                                    <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L7 7L13 1" stroke="#60626A"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="popup__settings_checkbox_info">
                                <div class="popup__description popup__settings_checkbox_info_container">
                                    <span>the purpose of the use is to identify usage trends and derive
                                        analytics and statistics. These cookies are used to remember your
                                        choices and make assumptions about your preferences for statistical
                                        purposes, the legal basis is your consent. Winfinity uses an automated
                                        tool called Google Analytics which allows us to record and analyze how
                                        you and other visitors use the website. You can learn more about how
                                        Google Analytics works and the information it allows us to collect and
                                        analyze here <a href="https://support.google.com/analytics/answer/1012034?hl=lten&amp;ref_topic=6157800">https://support.google.com/analytics/answer/1012034?hl=lten&ref_topic=6157800.</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="popup__cookies_buttons">
            <button class="button button--black_hover button--gradient_hover toggleSettings" data-save="Save preferences" data-manage="manage cookies"><span class="button__wrap"><span class="button__inner_wrap"><b class="button__inner_text">manage cookies</b></span><span class="button__arrow">
                        <svg class="alternative_solution" viewBox="0 0 1000 1000" preserveAspectRatio="none">
                            <foreignobject class="foreignobject" width="1000" height="1000"><span class="foreignobject"></span></foreignobject>
                        </svg><span class="button__arrow_svg"><svg viewBox="0 0 17 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.36402 2L14 9.63598L6.36403 17.272" stroke-width="3" />
                                <path d="M14 9.63379L0.000713587 9.63379" stroke-width="3" />
                            </svg>
                        </span></span></span></button>
            <button class="button button--black_hover button--gradient_hover"><span class="button__wrap"><span class="button__inner_wrap"><b class="button__inner_text">deny</b></span><span class="button__arrow">
                        <svg class="alternative_solution" viewBox="0 0 1000 1000" preserveAspectRatio="none">
                            <foreignobject class="foreignobject" width="1000" height="1000"><span class="foreignobject"></span></foreignobject>
                        </svg><span class="button__arrow_svg"><svg viewBox="0 0 17 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.36402 2L14 9.63598L6.36403 17.272" stroke-width="3" />
                                <path d="M14 9.63379L0.000713587 9.63379" stroke-width="3" />
                            </svg>
                        </span></span></span></button>
            <button class="button button--orange popup__button_consent closePopup"><span class="button__wrap"><span class="button__inner_wrap"><b class="button__inner_text">consent</b></span><span class="button__arrow">
                        <svg class="alternative_solution" viewBox="0 0 1000 1000" preserveAspectRatio="none">
                            <foreignobject class="foreignobject" width="1000" height="1000"><span class="foreignobject"></span></foreignobject>
                        </svg><span class="button__arrow_svg"><svg viewBox="0 0 17 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.36402 2L14 9.63598L6.36403 17.272" stroke-width="3" />
                                <path d="M14 9.63379L0.000713587 9.63379" stroke-width="3" />
                            </svg>
                        </span></span></span></button>
        </div>
    </div>
    </div>
    </div>
    <script data-cfasync="false" src="./cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="./public/js/tween.js"></script>
    <script src="./public/js/custom.js"></script>
    <script src="./public/js/axios.min.js"></script>
    <script src="./public/js/swiper-bundle.min.js"></script>
    <script src="./public/js/lightgallery.js"></script>
    <script src="./public/js/main.min.js?v=5.0.6"></script>
    <script src="./public/js/custom-main.min.js?v=1"></script>
    <script src="./public/js/accordian.min.js"></script>

    
</body>

</html>