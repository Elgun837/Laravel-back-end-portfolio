
    <!-- Footer Starts Here -->
    <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-3 footer-item">
              <h4>Finance Business</h4>
              <p>Vivamus tellus mi. Nulla ne cursus elit,vulputate. Sed ne cursus augue hasellus lacinia sapien vitae.</p>
              <ul class="social-icons">
              <li><a href="{{$info->facebook}}"><i class="fa fa-facebook"></i></a></li>
              <li><a href="{{$info->twitter}}"><i class="fa fa-twitter"></i></a></li>
              <li><a href="{{$info->instagram}}"><i class="fa fa-instagram"></i></a></li>
              <li><a href="{{$info->behance}}"><i class="fa fa-behance"></i></a></li>
              <li><a href="{{$info->youtube}}"><i class="fa fa-youtube"></i></a></li>
              <li><a href="{{$info->github}}"><i class="fa fa-github"></i></a></li>
              </ul>
            </div>
            <div class="col-md-3 footer-item">
              <h4>Useful Links</h4>
              <ul class="menu-list">
                <li><a href="#">Vivamus ut tellus mi</a></li>
                <li><a href="#">Nulla nec cursus elit</a></li>
                <li><a href="#">Vulputate sed nec</a></li>
                <li><a href="#">Cursus augue hasellus</a></li>
                <li><a href="#">Lacinia ac sapien</a></li>
              </ul>
            </div>
            <div class="col-md-3 footer-item">
              <h4>Additional Pages</h4>
              <ul class="menu-list">
                <li><a href="/about-us">About Us</a></li>
                <li><a href="/about-us">How We Work</a></li>
                <li><a href="/contact-us">Quick Support</a></li>
                <li><a href="/contact-us">Contact Us</a></li>
                <li><a href="/services">Privacy Policy</a></li>
              </ul>
            </div>
            <div class="col-md-3 footer-item last-item">
              <h4>Contact Us</h4>
              <div class="contact-form">
                <form id="contact footer-contact" action="" method="post">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <fieldset>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                      </fieldset>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <fieldset>
                        <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </footer>

      <div class="sub-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <p>{{$settings->copyright}}

              <br>
              Distributed By: <a rel="nofollow noopener" href="https://themewagon.com" target="_blank">{{$settings->author}}</a>
            </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Bootstrap core JavaScript -->
      <script src="{{asset('front/vendor/jquery/jquery.min.js')}}"></script>
      <script src="{{asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

      <!-- Additional Scripts -->
      <script src="{{ asset('front/assets/js/custom.js') }}"></script>
      <script src="{{asset('front/assets/js/owl.js')}}"></script>
      <script src="{{asset('front/assets/js/slick.js')}}"></script>
      <script src="{{asset('front/assets/js/accordions.js')}}"></script>
      <script type= "text/Javascript">
          let cleared;
          cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t){                   //declaring the array outside of the
        if(! cleared[t.id]){                      // function makes it static and global
            cleared[t.id] = 1;  // you could use true and false, but that's more typing
            t.value='';         // with more chance of typos
            t.style.color='#fff';
            }
        }
      </script>

    </body>
  </html>
