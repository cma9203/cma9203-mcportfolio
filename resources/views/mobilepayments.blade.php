<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <link rel="stylesheet" type="text/css" href="css/app.css" />
      <link rel="stylesheet" type="text/css" href="css/ihover.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
   <body>
      <div class="works">
         <div class="container">
            <i style="font-size:100px" class="fa"><a href="#" onclick="history.go(-1)" style="text-decoration:none;">&#xf190;</a></i>
            <div class="mobilepaymentpage">
               <article>
                  <h2>Modern Pay methods and Credit Card Processing</h2>
                  <h3>Project Type: Android simulation, iOS simulation & packet capture</h3>
                  <p><strong>Scope-</strong> Find out the difference between Apple Pay, Samsung Pay and Android Pay <br/><br/>
                     Currently with scientific development, instead of using physical card, people will use their phone to pay.
                     A simple mobile web payment system can also include a credit card payment flow allowing a consumer to enter their card details to make purchases. This process is familiar but any entry of details on a mobile phone is known to reduce the success rate (conversion) of payments.<br/><br/>
                     <img class="img1" src="{{ asset('imgs/Payment-Gateway-Graphic.png') }}" alt="img"><br/><br/>
                     Here is an example of how to receive encrypted Android Pay payment credentials. Set the tokenization type and add a publicKey parameter as shown:<br/><br/>
                     <img class="img2" src="{{ asset('imgs/androidexample.jpg') }}" alt="img"><br/><br/>
                     As mentioned before, there are several parties involved to complete a whole transaction. Apple pay doesn't fulfill payment transactions, it only authorizes transactions and creates tokens that allow payments to be processes. You still need online payment processor to process the transaction, here we will use Stripe as for instance.<br/><br/> 
                     <img class="img3" src="{{ asset('imgs/applepay1.jpg') }}" alt="img"><br/><br/>
                     This will invoke the Stripe API with the authorized Apple Pay token, which sends the token to Stripe<br/><br/>
                     <img class="img4" src="{{ asset('imgs/applepay2.jpg') }}" alt="img"><br/><br/>
                     This will construct the JSON for the request. Also includes the token property such as the amount and the description sent to Stripe. I used mitmproxy to sniff the internet packet when using the Apple pay. 
                     I also use WireShark to capture the packet through my phone while I tried to purchase a coffee from Starbucks using Apple Pay.<br/><br/>
                     <img class="img5" src="{{ asset('imgs/packetcapture.jpg') }}" alt="img">
                  </p>
               </article>
            </div>
         </div>
      </div>
   </body>
</html>
