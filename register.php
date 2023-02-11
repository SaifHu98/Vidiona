<?php
session_start();
global $LNG;
require 'lang/ar.php';
 ?>


 <html lang="ar" dir="rtl">
 <head>
   <meta charset="utf-8">
   <link rel="icon" href="./images/favicon.png">
   <meta name="description" content="<?php echo $LNG[description]; ?>">
  <meta name="keywords" content="<?php echo $LNG[keywords]; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?php echo $LNG[reg]; ?></title>
   <link rel="stylesheet" href="./css/user.css" type="text/css">
   <link rel="stylesheet" href="./css/bootstrap/bootstrap.css" >
 </head>
 <body>
   <header>
     <div class="container-fluid">
       <nav class="navbar navbar-expand-md navbar-dark bg-dark">
           <a href="login.php" class="navbar-brand"> <img src="images/logo.png" alt=""> </a>
           <span class="navbar-text"><?php echo $LNG[SiteName]; ?></span>

           <ul class="navbar-nav">
             <li class="nav-item"> <a href="user-login.php" class="nav-link"> <?php echo $LNG[Login]; ?></a> </li>

           </ul>

       </nav>

       <div class="container" align=center>

         <div class="jumbotron">
           <h1><?php echo $LNG[regnow]; ?></h1>
           <p><?php echo $LNG[regfree]; ?> </p> <br>

           <form class="" action="user.php" method="POST">
             <div class="row">
               <div class="col">
                 <input type="text" class="form-control" placeholder="الاسم الاول" name="fname" value="" required>

               </div>
               <div class="col">
                 <input type="text" class="form-control" placeholder="الاسم الاخير" name="lname" value="" required>
               </div>

             </div> <br>
             <input type="text" class="form-control" placeholder="اسم المستخدم" name="usname" value="" required>
             <br>
             <input type="email" class="form-control" placeholder="عنوان البريد الالكتروني" name="email" value="" required>
             <br>
             <input type="password" class="form-control" placeholder="كلمة المرور" name="pass" value="" required> 

             <div class="form-group col-md-8">
               <label for="dob"> <br> <?php echo $LNG[dob]; ?> </label>
               <div class="row" >
                 <div class="col">
                   <select class="form-control" name='date'>


                     <option selected>اليوم..</option>
                     <option value='1'>1</option>
                     <option value='2'>2</option>
                     <option value='3'>3</option>
                     <option value='4'>4</option>
                     <option value='5'>5</option>
                     <option value='6'>6</option>
                     <option value='7'>7</option>
                     <option value='8'>8</option>
                     <option value='9'>9</option>
                     <option value='10'>10</option>
                     <option value='11'>11</option>
                     <option value='12'>12</option>
                     <option value='13'>13</option>
                     <option value='14'>14</option>
                     <option value='15'>15</option>
                     <option value='16'>16</option>
                     <option value='17'>17</option>
                     <option value='18'>18</option>
                     <option value='19'>19</option>
                     <option value='20'>20</option>
                     <option value='21'>21</option>
                     <option value='22'>22</option>
                     <option value='23'>23</option>
                     <option value='24'>24</option>
                     <option value='25'>25</option>
                     <option value='26'>26</option>
                     <option value='27'>27</option>
                     <option value='28'>28</option>
                     <option value='29'>29</option>
                     <option value='30'>30</option>
                     <option value='31'>31</option>

                 </select>
               </div>
                 <div class="col">
                     <select class="form-control" name='month'>
                       <option selected>الشهر...</option>


                       <option value='01'><?php echo $LNG[month_1]; ?></option>
                       <option value='02'><?php echo $LNG[month_2]; ?></option>
                       <option value='03'><?php echo $LNG[month_3]; ?></option>
                       <option value='04'><?php echo $LNG[month_4]; ?></option>
                       <option value='05'><?php echo $LNG[month_5]; ?></option>
                       <option value='06'><?php echo $LNG[month_6]; ?></option>
                       <option value='07'><?php echo $LNG[month_7]; ?></option>
                       <option value='08'><?php echo $LNG[month_8]; ?></option>
                       <option value='09'><?php echo $LNG[month_9]; ?></option>
                       <option value='10'><?php echo $LNG[month_10]; ?></option>
                       <option value='11'><?php echo $LNG[month_11]; ?></option>
                       <option value='12'><?php echo $LNG[month_12]; ?></option>

                     </select>
                 </div>
                 <div class="col">
                   <select class="form-control" name='year'>
                     <option selected>السنة...</option>
                     <option value='1980'>1980</option>
                     <option value='1981'>1981</option>
                     <option value='1982'>1982</option>
                     <option value='1983'>1983</option>
                     <option value='1984'>1984</option>
                     <option value='1985'>1985</option>
                     <option value='1986'>1986</option>
                     <option value='1987'>1987</option>
                     <option value='1988'>1988</option>
                     <option value='1989'>1989</option>
                     <option value='1990'>1990</option>
                     <option value='1991'>1991</option>
                     <option value='1992'>1992</option>
                     <option value='1993'>1993</option>
                     <option value='1994'>1994</option>
                     <option value='1995'>1995</option>
                     <option value='1996'>1996</option>
                     <option value='1997'>1997</option>
                     <option value='1998'>1998</option>
                     <option value='1999'>1999</option>
                     <option value='2000'>2000</option>
                     <option value='2001'>2001</option>
                     <option value='2002'>2002</option>
                     <option value='2003'>2003</option>
                     <option value='2004'>2004</option>
                     <option value='2005'>2005</option>
                     <option value='2006'>2006</option>
                     <option value='2007'>2007</option>
                     <option value='2008'>2008</option>
                     <option value='2009'>2009</option>
                     <option value='2010'>2010</option>
                     <option value='2011'>2011</option>
                     <option value='2012'>2012</option>


                     </select>
                 </div>

                   </div>

                 </div>
                 <div class="signupbutton">
                  <br><br>
                  <button type="submit" class="btn btn-success btn-lg" name="sub" value="submit"><?php echo $LNG[regs]; ?></button>
                  
                 </div>
                 <div style="text-align:center;">
                 <a href="user-login.php" class="btn btn-*"><?php echo $LNG[haveacc]; ?></a>
                </div>
             </div>
           </form>




         </div>

       </div>


   </div>

 </header>
 <footer class="page-footer font-small blue">

   <div class="footer-copyright text-center py-3"><?php echo $LNG[Copy]; ?>
   </div>

 </footer>
   </body>
 </html>
