@extends('layouts.master')

@section('title')
  Johnathan's Resume
@stop

@section('content')

	<title>Johnathan Resume</title>

  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      height: 200px ;
      margin: auto;
  }

  .section-bg-color {
    background-color: #f3f5f8;
}
  </style>


    <section id="about" class="about-4 about-4_bg section-bg-color rel-img" data-top-bottom="background-position: 0px 200px;" data-bottom-top="background-position: 0px -675px">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-offset-1 col-md-11 padding-top-130 padding-bottom-100">
            <h1 class="big-heading heading heading-underlined black">Full Stack Software Engineer</h1>
            <p>I have a passion for turning people's great ideas into reality and have the skillset necessary to make it happen.</p>
          </div>
        </div>
      </div>
    </section>

          <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-5 padding-top-130 padding-bottom-130">
            <ul class="nav nav-tabs small list-inline primary-typo">
              <li class="active">
                <a data-toggle="tab" href="#tab1">Design</a>
              </li>
              <li class="">
                <a data-toggle="tab" href="#tab2">Development</a>
              </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div id="tab1" class="tab-pane fade active in">
                <div class="row">
                  <div class="col-sm-12 col-md-12 margin-top-40">
                    <div class="service-2-content space-reduced">
                      <div class="service-2-icon">
                        <i class="ion-iphone large-icon"></i>
                      </div>
                      <div class="service-2-text">
                        <h5 class="heading heading-underlined">Mobile First</h5>
                        <p>Nowadays, with screen sizes and resolutions varying greatly, it has become essential to ensure that when developing a website or application that the interface remains user friendly no matter the device. Something I take seriously when developing applications.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-12 margin-top-40">
                    <div class="service-2-content space-reduced">
                      <div class="service-2-icon">
                        <i class="ion-social-javascript large-icon"></i>
                      </div>
                      <div class="service-2-text">
                        <h5 class="heading heading-underlined">Javascript</h5>
                        <p>Javascript is perhaps the most dynamic of programming languages that exist and whether you need complex animations or a site built using AngularJs, I can integrate it into an application to suit your needs.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-12 margin-top-40">
                    <div class="service-2-content space-reduced">
                      <div class="service-2-icon">
                        <i class="ion-cube large-icon"></i>
                      </div>
                      <div class="service-2-text">
                        <h5 class="heading heading-underlined">Clean & Modern Design</h5>
                        <p>The design and layout of a website is an integral part of attracting users and keeping traffic driven to the site, with that in mind I work extensively on the "Front-End" of the site utilizing clean and modern arcitecture to ensure that your visual specifications are met.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="tab2" class="tab-pane fade">
                <div class="row">
                  <div class="col-sm-12 col-md-12 margin-top-40">
                    <div class="service-2-content space-reduced">
                      <div class="service-2-icon">
                        <i class="fa fa-code fa-4x"></i>
                      </div>
                      <div class="service-2-text">
                        <h5 class="heading heading-underlined">PHP & Laravel</h5>
                        <p>For those that need something more than just a beautiful website, I am also a software enginner and can develop an application for virtually anything that someone may need. I make use of the Laravel PHP Framework as it allows me to build an application in a proficient amount of time and is fun to use.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-12 margin-top-40">
                    <div class="service-2-content space-reduced">
                      <div class="service-2-icon">
                        <i class="fa fa-database fa-4x"></i>
                      </div>
                      <div class="service-2-text">
                        <h5 class="heading heading-underlined">MySQL Databases</h5>
                        <p>For 'Back-End' work I use MySQL databases to store data</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-12 margin-top-40">
                    <div class="service-2-content space-reduced">
                      <div class="service-2-icon">
                        <i class="fa fa-linux fa-4x"></i>
                      </div>
                      <div class="service-2-text">
                        <h5 class="heading heading-underlined">LEMP</h5>
                        <p><strong>ABBR.</strong>(Linux,Nginx,MySql,PHP), I am a LEMP software developer as you might have guessed from reading my other descriptions regarding development. I really enjoy using this stack and find that it is very efficient when used for application development.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-offset-1 col-md-6 padding-left-130 margin-200 padding-bottom-120 padding-top-120 visible-md visible-lg white">
            <div class="section-heading">
              <h2 class="heading heading-underlined">Solutions</h2>
              <p class="additional-heading">How I build applications</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="contact-bar" class="contact-bar section-bg-color">
      <div class="container">
        <div class="row margin-70">
          <div class="col-md-4 margin-60">
            <div class="contact-content">
              <div class="contact-icon">
                <i class="ion-paper-airplane medium-icon"></i>
              </div>
              <div class="contact-details">
                <h5 class="contact-heading-text">EMAIL</h5>
                <p>johnathan.christopherson@live.com</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 margin-60"></div>
          <div class="col-md-4 margin-60">
            <div class="contact-content">
              <div class="contact-icon">
                <i class="ion-iphone medium-icon"></i>
              </div>
              <div class="contact-details">
                <h5 class="contact-heading-text">Mobile Number</h5>
                <p>(210) 632-5789</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="contact" class="contact">
      <div class="container-fluid">       
        <div class="row">
          <div class="col-sm-12 col-md-6 no-padding">
          </div>
          <div class="padding-top-130 padding-bottom-110 padding-left-30 padding-right-30">
            <div class="section-heading">
              <h2 class="heading" align="center">Contact</h2>
              <p class="additional-heading"  align="center">Have an idea? I'm currently taking requests for projects. Fill out the form below and i will respond usually within 24 hours.</p>
            </div>


            <form method="POST" action="http://jdgarza.com/sendMail" accept-charset="UTF-8" id="contactForm" class="contact-form"><input name="_token" type="hidden" value="DRwKRR2eY2L4De0Xi3GXXBWMrdNjKYcviEU5MRNZ">
              <div class="row">
                <div class="col-xs-12">
                  <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                      <input type="text" class="form-control" placeholder="Name *" id="name" name="name" required data-validation-required-message="Please enter your name.">
                      <p class="help-block text-danger required-alert"></p>
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                      <input type="email" class="form-control" placeholder="Email Address *" id="email" required data-validation-required-message="Please enter your email address." name="email">
                      <p class="help-block text-danger required-alert"></p>
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                      <textarea rows="4" class="form-control" placeholder="Message *" id="message" name="message" required data-validation-required-message="Please enter a message."></textarea>
                      <p class="help-block text-danger required-alert"></p>
                    </div>
                  </div>
                </div>
                <div class="form-group col-xs-12 margin-20">
                  <button type="submit" class="btn btn-default primary-typo">SUBMIT</button>
                </div>                
                <div class="clearfix"></div>
                <div class="text-left clearfix">
                  <div id="success"></div>
                </div>
              </div>
            </form>
          </div>
        </div>        
      </div>
    </section>

<div id="footer-area" class="footer">
      <div class="container">
        <div class="footer-social text-center">
          <ul class="social-icons small list-inline">
            <li><a href="https://www.linkedin.com/profile/view?id=AAIAABeNZyIB4DwbO8rUlcx6DEiGIk3Y6YKovpE&trk=nav_responsive_tab_profile" target="_blank">LinkedIn</a></li>
            <li><a href="https://github.com/john5652" target="_blank">GitHub</a></li>
            <li><a href="">CodeUp Profile</a></li>
          </ul>
        </div>
        <div class="separator separator_center footer-sep">
          <span class="sep_holder sep_holder_r"><span class="sep_line"></span></span>
        </div>  
        <div id="colophon" class="footer-colophon text-center">
          <p class="site-info small">Johnathan Christopherson Design & Development 2015</p>
        </div>
      </div>
    </div>

      </div>
  
  <div class="throbbers_loader">
    <div class="throbber">#johnslife</div>
  </div>

@stop
