<?php
session_start();
global $LNG;
require '../../lang/ar.php';
require './acc.php';
 ?>

 <html lang="ar" dir="rtl">
 <head>
   <meta charset="utf-8">
   <link rel="icon" href="../images/favicon.png">
   <meta name="description" content="<?php echo $LNG[description]; ?>">
  <meta name="keywords" content="<?php echo $LNG[keywords]; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?php echo $LNG[admintitle]; ?></title>
   <link rel="stylesheet" href="../admin-css/admin.css" type="text/css">
   <link rel="stylesheet" href="../../css/bootstrap/bootstrap.css" >
 </head>
 <body>
   <header>
     <div class="container-fluid" style=" margin-top: -20px; " >
       <nav class="navbar navbar-expand-md navbar-dark bg-dark">
           <a href="../dash.php" class="navbar-brand"> <img src="../images/logo.png" alt=""> </a>
           <span class="navbar-text"><?php echo $LNG[SiteName]; ?></span>
           <ul class="navbar-nav">
             <li class="nav-item"> <a href="../dash.php" class="nav-link"> <?php echo $LNG[home]; ?> </a> </li>
             <li class="nav-item"> <a href="../logout.php" class="nav-link"> <?php echo $LNG[signout]; ?></a> </li>

           </ul>

       </nav>

       <div class="container" style=" margin-top: -70px;" align=center dir="rtl">
         <div class="jumbotron">
           <h2> <?php echo $LNG[filmdit]; ?></h2>
          <br>
           <form class="" action="./upmovie.php" method="POST" enctype="multipart/form-data">
            <input type="text" class="form-control" placeholder="اسم الفيلم" name="mname" value="" required>
             <input type="text" class="form-control" placeholder="تاريخ الاصدار" name="release" value="" required>
             <input type="text" class="form-control" placeholder="النوع" name="genre" value="" required>
             <input type="number" class="form-control" placeholder="وقت الفيلم" name="rtime" value="" required>
             <input type="text" class="form-control" placeholder="الوصف..." name="desc" value="" required><br>
                <table><br>
                      <div class="input-group-prepend" >
                       <span class="input-group-text" id="inputGroupFileAddon01" >  صورة الفيلم بصيغة: (PNG,JPG,JPEG)</span>
                    </div>
                       <div class="custom-file">
                            <input type="hidden" name="size" value="100000">
                     <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="image" value="" accept=".jpg, .jpeg, .png" required> 
                     <label class="custom-file-label" for="inputGroupFile01">اختر الصورة</label>
                     </div></table><br><br>
               <table>
                   <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon02">الترجمة  بصيغة: (VTT)</span>
                    </div>
                     <div class="custom-file">
                     <input type="hidden" name="size" value="100000">
                    <input type="file" class="custom-file-input" id="inputGroupFile02" aria-describedby="inputGroupFileAddon02" name="subtitle" value="" data-inline="true" accept=".vtt" disabled>
                        <label class="custom-file-label" for="inputGroupFile02">اختر ملف ترجمة</label>
                         </div>
                          <div>
                          <label><input type="checkbox" id="ok" /> لتفعيل رفع الترجمة اضغط هنا (لاحاجة اذا كان الفيلم مترجم)</label>
                              <script>
                                      document.getElementById('ok').onchange = function() {
                                      document.getElementById('inputGroupFile02').disabled = !this.checked;};
                              </script>
                          </div></table><br>
               <table>
                   <div class="input-group-prepend">
                   <span class="input-group-text" id="inputGroupFileAddon03" >الفيلم  بصيغة: (MP4,OGG,WEBM)</span>
                   </div>
                          <div class="custom-file">
                              <input type="hidden" name="size" value="30000000" >
                              <input type="file" class="custom-file-input" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" name="video" value="" accept=".mp4, .ogg, .webm" required>
                              <label class="custom-file-label" for="inputGroupFile03">اختر الفيلم</label>
                          </div></table>
              <br>
             <div class="signupbutton">
               <input type="submit" class ="btn btn-success btn-lg" name="up" value="رفع الفيلم" >
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
