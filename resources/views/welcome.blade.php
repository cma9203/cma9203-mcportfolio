<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
      <link rel="stylesheet" type="text/css" href="css/app.css" />
      <link rel="stylesheet" type="text/css" href="css/ihover.css" />
      <script src="{{ asset('js/jquery.min.js') }}"></script>
      <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
      <script src="{{ asset('js/scrolloverflow.js') }}"></script>
      <script src="{{ asset('js/jquery.fullPage.js') }}"></script>
      <script type="text/javascript">
         $(document).ready(function() {
             $('#fullpage').fullpage({
                 anchors: ['hello', 'work', 'about'],
                 menu: '#menu',
                 loopTop: true,
                 loopBottom: true,
                 responsiveWidth: 900,
                 afterResponsive: function(isResponsive){
                 }
             });
         });
         jQuery(document).ready(function($){
         var bArray = [];
         var sArray = [4,6,8,10];
          for (var i = 0; i < $('.bubbles').width(); i++) {
             bArray.push(i);
         }
         function randomValue(arr) {
             return arr[Math.floor(Math.random() * arr.length)];
         }
          setInterval(function(){
             var size = randomValue(sArray);
             $('.bubbles').append('<div class="individual-bubble" style="left: ' + randomValue(bArray) + 'px; width: ' + size + 'px; height:' + size + 'px;"></div>');
             $('.individual-bubble').animate({
                 'bottom': '100%',
                 'opacity' : '-=0.7'
             }, 3000, function(){
                 $(this).remove()
             }
             );
         }, 350);
         }); 
      </script>
      <style>
         #section0,#section1,#section2{
         background-image: url(imgs/redbackground2.jpg);
         }
         .headshot {
          width: 250px;
          height: 250px;
          margin: 25px auto;
          background-image: url(imgs/selfie1.jpg);
          background-size: 100%;
          border-radius: 125px;
          box-shadow: 0 0 0 20px #ecf0f1;
          margin-bottom: 5%;
          overflow: hidden;
          transition-duration: .25s;
        }
        .headshot:hover {
          background-image: url(imgs/selfie2.jpg);
          box-shadow: 0px 0px 0px 20px #80aeef;
          background-size: 130%;

        }
      </style>
      <title>Chi Ma</title>
   </head>
   <body>
      <ul id="menu">
         <li data-menuanchor="work" class="active"><a href="#work">Work</a></li>
         <li data-menuanchor="about"><a href="#about">About</a></li>
      </ul>
      <div id="fullpage">
         <div class="section active" id="section0">
            <div class="flex-center position-ref full-height">
               <div class="contentTitle" id="content">
                  <div class="title m-b-md">
                     <article>
                        <div class="headshot"></div> 
                        <h1><strong>Hello.</strong><br/></h1>
                        <p style="font-size:35px"><strong>My name is Chi Ma.</strong></p>
                        <p style="font-size:30px"><strong>Love <a class="programming after" href="#">programming<span><img src="{{ asset('imgs/programming.gif') }}"></span></a>, also do some <a class="swimming after" href="#">sports<span><img src="{{ asset('imgs/swimming.gif') }}"></span></a>.</strong>
                        </p>
                     </article>
                  </div>
               </div>
            </div>
         </div>
         <div class="section" id="section1">
            <div class="container0">
               <div class="center-outer">
                  <div class="center-inner">
                     <div class="bubbles">
                        <h1>Major Work</h1>
                     </div>
                  </div>
               </div>
            </div>
            <div class="container1">
               <div class="ih-item square effect6 from_top_and_bottom">
                  <a href="mobilepayments">
                     <div class="img"><img src="{{ asset('imgs/Apple-Pay-Vs-Samsung-Pay.jpg') }}" alt="img"></div>
                     <div class="info">
                        <h3>Mobile Payments</h3>
                        <p>Find out the difference between Apple Pay, Samsung Pay and Android Pay</p>
                     </div>
                  </a>
               </div>
            </div>
            <div class="container2">
               <div class="ih-item square effect7">
                  <a href="wepapp">
                     <div class="img"><img src="{{ asset('imgs/seniordesign.jpg') }}" alt="img"></div>
                     <div class="info">
                        <h3>Web application</h3>
                        <p>Build an internship management wep application</p>
                     </div>
                  </a>
               </div>
            </div>
            <div class="container3">
               <div class="ih-item square effect13 left_to_right">
                  <a href="peoplesoftsql">
                     <div class="img"><img src="{{ asset('imgs/peoplesoft.jpg') }}" alt="img"></div>
                     <div class="info">
                        <h3>Peoplesoft & SQL</h3>
                        <p>Peoplesoft, SQL and XML(XSL)</p>
                     </div>
                  </a>
               </div>
            </div>
         </div>
         <div class="section" id="section2">
            <div class="flex-center position-ref full-height" id="infoAboutme">
               <article>
                  <p>I am 24 years old, currently I am living in Lincoln, Nebraska. I am graduated from University of Nebraska-Lincoln with major of Computer Science. I have experience with software, web and database development. <br/>
                  </p>
                  <br/>
                  <p>Feel free to contact me if you are interested:</p>
                  <br />
                  <p>cma9203@gmail.com       <a href="mailto:cma9203@gmail.com"><img src="{{ asset('imgs/icon-mail.png') }}" style="width:40px;height:35px;" ></a></p>
                  <br/>
                  <p> 
                  <a href="{{ asset('Chi Ma_Resume.pdf') }}" download="">Click here to download my CV</a>
                  </p>
               </article>
            </div>
         </div>
      </div>
   </body>
</html>
