@extends('layouts.app')

@section('content')

<!-- Content -->
      <article>
        <header class="section background-dark background-transparent text-center" data-image-src="img/bsp/bsp257556904.jpg">
            <h1 class="text-white margin-bottom-0 text-size-50 text-thin text-line-height-1">Contact</h1>
        </header>
        <div class="section background-white"> 
          <div class="line">
            <div class="margin">
              
              <!-- Company Information -->
              <div class="s-12 m-12 l-6">
                <h2 class="text-uppercase text-strong">Company Information</h2>
                <hr class="break break-small background-dark">
                <div class="float-left">
                  <i class="icon-placepin background-dark icon-circle-small text-size-20"></i>
                </div>
                <div class="margin-left-80 margin-bottom">
                  <h4 class="text-strong margin-bottom-0">Company Address</h4>
                  <p>Mexico City<br>
                     Mexico<br>
                  </p>               
                </div>
                <div class="float-left">
                  <i class="icon-paperplane_ico background-dark icon-circle-small text-size-20"></i>
                </div>
                <div class="margin-left-80 margin-bottom">
                  <h4 class="text-strong margin-bottom-0">E-mail</h4>
                  <p>hello@roosteravocados.com<br>
                  </p>              
                </div>
                <div class="float-left">
                  <i class="icon-smartphone background-dark icon-circle-small text-size-20"></i>
                </div>
                <div class="margin-left-80">
                  <h4 class="text-strong margin-bottom-0">Phone Numbers</h4>
                  <p>+52 1 55 9191 2790<br>
                  </p>             
                </div>
              </div>
              
              <!-- Contact Form -->
              <div class="s-12 m-12 l-6">
                <h2 class="text-uppercase text-strong margin-m-top-50">Contact Us</h2>
                <hr class="break break-small background-primary">
                <!-- If you want to make a field required, add the "required" class to the input. -->
                <!-- The form e-mail address you can change on file resp-email.php on line 4. -->
                <form name="contactForm" class="customform ajax-form" method="post" enctype="multipart/form-data">
                  <div class="line">
                    <div class="margin">
                      <div class="s-12 m-12 l-6">
                        <input name="email" class="required email" placeholder="Your e-mail" title="Your e-mail" type="text" />
                        <p class="email-error form-error">Please enter your e-mail.</p>
                      </div>
                      <div class="s-12 m-12 l-6">
                        <input name="name" class="name" placeholder="Your name" title="Your name" type="text" />
                        <p class="name-error form-error">Please enter your name.</p>
                      </div>
                    </div>
                  </div>
                         
                  <div class="s-12">
                    <input name="subject" class="required subject" placeholder="Subject" title="Subject" type="text" />
                    <p class="subject-error form-error">Please enter your subject.</p>
                  </div>
                  <div class="s-12">
                    <textarea name="message" class="required message" placeholder="Your message" rows="3"></textarea>
                    <p class="message-error form-error">Please enter your message.</p>
                  </div>
                  <!-- <div class="s-12">
                    <input type="file" name="file[]" />                    
                  </div> -->
                  <!-- full-name-field is hidden antirobot field -->
                  <input name="full-name-field" type="text" id="full-name-field" class="full-name-field" />
                  <div class="s-12"><a class="captcha-button text-white background-dark margin-bottom"><span class="not-a-robot-icon"><i class="icon-check text-green"></i></span> <span class="not-a-robot-text">I'm not a robot</span></a></div> 
                  <!-- The submit button text you can edit in the file validation.sj on the line 8. -->
                  <div class="s-12 button-parent"></div>
                  <div class="line">
                    <p class="mail-success form-success">Your message has been sent successfully.</p>
                    <p class="mail-fail form-error">Sorry, error occured this time sending your message.</p>
                  </div>  
                </form>
              </div>  
            </div>  
          </div> 
        </div> 
      </article>
        
@endsection
