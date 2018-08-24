 @extends('footer')
 
 


 <!doctype html>
        <html lang="{{ app()->getLocale() }}">
        <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">



        <title>Bootlegged</title>

        <!-- Fonts -->

        <link href="https://fonts.googleapis.com/css?family=Yrsa" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/app.css">
        
  

        <!-- Styles -->
        <style>
        p{margin: 0px;}

          html, body {
              background-color: #fff;
              color: #636b6f;
              font-family: 'Yrsa', serif;
              /*font-weight: 500;*/
              height: 500px;
              margin: 0;
              background-image: url(Images/back.jpg);
              background-repeat: no-repeat; 
              /*background-size: 1440px 700px;*/
              background-size: 100% 120%;
              /*-webkit-background-size: cover;*/
              /*-moz-background-size: cover;*/
              /*-o-background-size: cover;*/
              /*background-size: cover;*/

          }
          
          .form_box{
            width: 50%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
          }
        </style>
        </head>
        <body> 

        <div>
               <img style=" position: absolute; display: inline;" class="logo"  alt ="logo" src="/Images/logo1.png">

              <a href="{{URL::to('login')}}" style="float: right;margin-right: 100px; font-size: 19px; text-decoration: none; vertical-align:middle; " id="log" class="button">Login</a>
             
              <a href="{{URL::to('home')}}" style="float: right;margin-right: 60px; font-size: 19px; text-decoration: none; " id="log">Contact</a>
              <a href="{{URL::to('home')}}"  id="log" style=" font-size: 19px; float: right; text-decoration: none; margin-right: 50px; ">FAQ</a>
              <a href="{{URL::to('home')}}"  id="log" style=" font-size: 19px; float: right; text-decoration: none; margin-right: 50px; ">About</a>


              <a href="{{URL::to('home')}}" id="log" style="float: right;  margin-right:50px ; font-size: 19px; text-decoration: none;">Home
                   </a>

         
          </div>    

          <div class="para" id="home">
              <ul>
            <p style="font-size: 40px; ">WELCOME TO BOOTLEGGED</p>
            <p style="color: white; font-size: 20px;" >Bootlegged is a peer to peer marketplace where buyers and sellers of alcoholic <br> bevergaes meet.We find potiential buyers for your excess inventory and uncover <br>buying opportunities for you in real time</p>
            </ul>
        </div>

     <!-- Login Div -->

        <div class="moving_size" style="height: 475px;">
            <img src="Images/About.png" name="about_pic" class="about_pic">
          
         <div class="about" id="about" style="margin-top: -450px;">
       
         <p style="font-size: 40px; margin-left: 270px;  ">Login</p>

          <form  action="" method="" id="login_form" style="margin-top: 20px; margin-left: 150px;  ">
                    <input class="form_box" type="email" name="username" placeholder="Email ID" required><br><br><br>
                    <input type="password" name="password" placeholder="Password" class="form_box" required><br><br><br>
                   <!--  <input class="form_box" type="number" name="contact_no" placeholder="Contact Number" required><br><br>
                    <input class="form_box" type="number" name="license_no" placeholder="License Number" required><br><br>
                     <input class="form_box" type="text" name="address" placeholder="Address" required><br><br>
                    <p style="font-size: 20px; font-family:'Yrsa', serif; margin-left: 250px;">You are&nbsp;&nbsp;</p>
                    <input type="radio" name="user" value="Manufacturer" style="font-size: 22px; margin-left: 150px;"> Store Owner &nbsp;&nbsp;
                    <input type="radio" name="user" value="Store Owner" style="font-size: 22px;"> Manufacturer<br><br> <br> -->

           <a href= "" ><button type="submit" class="button" style="vertical-align:middle; width: 140px; font-family:'Yrsa', serif; font-size: 25px; margin-left: 100px; "><span>LOG IN </span></button></a><br><br>
           <a href="" style="margin-left: 115px;"> Forget Password </a><br><br>
         </div>
         </div>


<!-- Footer -->

  @yield('footer')

        </body>
        </html>
