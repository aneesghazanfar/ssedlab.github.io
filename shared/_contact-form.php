<?php
function contactForm(){
    echo('    
    <div class="form-section">
        <div class="container">
                  <div class="demo_request form_sucsess_parent">
        <div class="demo_request__wrap">
          <div class="demo_request__form form_page__wrap">
            <div class="form_page">
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
                  <div class="form__input_label">Email</div>                </label>
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
    </div>');
  }