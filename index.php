  


 <!-- Login -->
<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>

<!doctype html>
 <html lang="en">
   <head>
     <title> Facbook</title>
     <!-- Required meta tags sections -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


     <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;600&family=Fredoka:wght@300;400;500&family=League+Gothic&family=Oswald:wght@200;400&family=PT+Serif:ital,wght@1,700&family=Poppins:ital,wght@0,200;0,300;0,700;1,100;1,200;1,300;1,400;1,900&family=Praise&family=Roboto+Serif:wght@200&family=Roboto+Slab:wght@100;200;300&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap" rel="stylesheet">


     <script src="https://kit.fontawesome.com/64340c05bf.js" crossorigin="anonymous"></script>


     <link rel="stylesheet" href="facbook.css">
   </head>
   <body>
  <!------------body-----11111111111111111111---------------->
       <nav>
         <div class="nav-left">
           <img src="img/logo.png"  class="logo">
           <ul>
              <li><img src="img/notification.png"  ></li>
              <li><img src="img/inbox.png"  ></li>
              <li><img src="img/video.png"  ></li>
           </ul>
         </div>
         <div class="nav-right">
           <div class="search-box">
             <img src="img/search.png" >
             <input type="text" placeholder="search">
           </div>
           <div class="nav-user-icon online" onclick="settingsMenuToggle()">
             <img src="img/profile-pic.png" >
           </div>
         </div>


         <!----------Setting manu------Setting manu-->
         <div class="Settings-menu">


          <div id="dark-btn"   >
            <span></span>
          </div>

           <div class="Settings-menu-inner">

          


          <div class="user-profile">
            <img src="img/profile-pic.png">
            <div>
              <p>Avijit Biswas</p>
                
              <a href="#"> see your profile</a>
            </div>
          </div>

          <hr>
          <div class="user-profile">
            <img src="img/feedback.png">
            <div>
              <p> give feedback</p>
                
              <a href="#">settimg improve</a>
            </div>
          </div>
          <hr>

          <div class="settings-links">
            <img src="img/setting.png"  class="setting-icon">
            <a href="#"> Settinng & privacy <img src="img/arrow.png"
              width="5px"></a> 
          </div>

          
          <div class="settings-links">
            <img src="img/help.png"  class="setting-icon">
            <a href="#">  help & support <img src="img/arrow.png"
              width="5px"></a> 
          </div>

          
          <div class="settings-links">
            <img src="img/display.png"  class="setting-icon">
            <a href="#"> display & Accesiblity <img src="img/arrow.png"
              width="5px"></a> 
          </div>
          
          <div class="settings-links">
            <img src="img/logout.png"  class="setting-icon">
           
              <a href="logout.php" class="btn btn-warning">Logout</a>
          </div>

         </div>
        </div>
       </nav>


       <!-------Continer 2n step ----222222222222222222222222222-->

       <div class="container">
         <!----------left sidebar--------->
         <div class="left-sidebar">
           <div class="img-links">
         <a href="#"> <img src="img/news.png"> Latest News</a>
         <a href="#"> <img src="img/friends.png">  Friends</a>
         <a href="#"> <img src="img/group.png">Group</a>
         <a href="#"> <img src="img/marketplace.png"> Marketplace</a>
         <a href="#"> <img src="img/watch.png" > Watch</a>
         <a href="">see more</a>
         
           </div>
           <div class="shortcut-link">
             <p>Your Shortcuts</p>
             <a href="#"><img src="img/shortcut-1.png">Web Developers</a>
             <a href="#"><img src="img/shortcut-2.png"> Web desine course</a>
             <a href="#"><img src="img/shortcut-3.png" > Full stack development</a>
             <a href="#"><img src="img/shortcut-4.png">Website Experts</a>
           </div>
         </div>



          <!---------- main ----sidebar--------->




         <div class="main-content ">
           <div class="story-gallery">
             <div class="story story1">
                <img src="img/upload.png" alt="">
                <p>Post Story</p>
             </div>
             <div class="story story2">
              <img src="img/member-1.png" alt="">
              <p>tuli </p>
           </div>
           <div class="story story3">
            <img src="img/member-2.png" alt="">
            <p>  Avijit Biswas</p>
         </div>
         <div class="story story4">
          <img src="img/member-3.png" alt="">
          <p> sakiba </p>
       </div>
       <div class="story story5">
        <img src="img/member-4.png" alt="">
        <p> Mex-well</p>
     </div>
    </div>

    <div class="write-post-contanier">
      <div class="user-profile">
        <img src="img/profile-pic.png" alt="">
        <div>
          <p>Avijit Biswas</p>
          <small>Public<i class="fa-solid fa-caret-down"></i></small>
        </div>
      </div>
      <div class="post-input-container">
         <textarea  rows="3 " placeholder="What's your name mind, Ovi?"></textarea>
        <div class="add-post-links">
          <a href="#"><img src="img/live-video.png"  >Live/video</a>
          <a href="#"><img src="img/photo.png" >Photo/Video</a>
          <a href="#"><img src="img/feeling.png"  >Feeling/Activity</a>
        </div>
        </div>
    </div>



    <div class="post-contanier">
       <div class="post-row">
      <div class="user-profile">
        <img src="img/profile-pic.png"  >
        <div>
          <p>Avijit Biswas</p>
          <span>April 18 2022, 02.30 PM</span>
        </div>
      </div>
     <a href=""><i class="fa-solid fa-ellipsis-vertical"></i></a> 
      </div>
      <p class="post-text"> Hi! I'm <span> @Avijit BIswas.</span> I'm student stady at Faridpur Polythnice Institute, Faridpur <a href="#">facbook.com</a> <a href="#"> Youtube.com</a> </p>
      <img src="img/feed-image-1.png"  class="post-img">
      <div class="post-row">
      <div class="Activity-icons">
  <div><img src="img/like-blue.png"  >123</div>
  <div><img src="img/comments.png" >23</div>
  <div><img src="img/share.png"  >13</div>
      </div>
      <div class="post-profile-icon">
        <img src="img/profile-pic.png" ><i class="fa-solid fa-caret-down"></i>
      </div>
    </div>
    </div>





    <div class="post-contanier">
      <div class="post-row">
     <div class="user-profile">
       <img src="img/profile-pic.png"  >
       <div>
         <p>Avijit Biswas</p>
         <span>April 18 2022, 02.30 PM</span>
       </div>
     </div>
    <a href=""><i class="fa-solid fa-ellipsis-vertical"></i></a> 
     </div>
     <p class="post-text"> Hi! I'm <span> @Avijit BIswas.</span> I'm student stady at Faridpur Polythnice Institute, Faridpur <a href="#">facbook.com</a> <a href="#"> Youtube.com</a> </p>
     <img src="img/feed-image-2.png"  class="post-img">
     <div class="post-row">
     <div class="Activity-icons">
 <div><img src="img/like-blue.png"  >123</div>
 <div><img src="img/comments.png" >23</div>
 <div><img src="img/share.png"  >13</div>
     </div>
     <div class="post-profile-icon">
       <img src="img/profile-pic.png" ><i class="fa-solid fa-caret-down"></i>
     </div>
   </div>
   </div>

   <div class="post-contanier">
    <div class="post-row">
   <div class="user-profile">
     <img src="img/profile-pic.png"  >
     <div>
       <p>Avijit Biswas</p>
       <span>April 18 2022, 02.30 PM</span>
     </div>
   </div>
  <a href=""><i class="fa-solid fa-ellipsis-vertical"></i></a> 
   </div>
   <p class="post-text"> Hi! I'm <span> @Avijit BIswas.</span> I'm student stady at Faridpur Polythnice Institute, Faridpur <a href="#">facbook.com</a> <a href="#"> Youtube.com</a> </p>
   <img src="img/feed-image-3.png"  class="post-img">
   <div class="post-row">
   <div class="Activity-icons">
<div><img src="img/like-blue.png"  >123</div>
<div><img src="img/comments.png" >23</div>
<div><img src="img/share.png"  >13</div>
   </div>
   <div class="post-profile-icon">
     <img src="img/profile-pic.png" ><i class="fa-solid fa-caret-down"></i>
   </div>
 </div>
 </div>


 <div class="post-contanier">
  <div class="post-row">
 <div class="user-profile">
   <img src="img/profile-pic.png"  >
   <div>
     <p>Avijit Biswas</p>
     <span>April 18 2022, 02.30 PM</span>
   </div>
 </div>
<a href=""><i class="fa-solid fa-ellipsis-vertical"></i></a> 
 </div>
 <p class="post-text"> Hi! I'm <span> @Avijit BIswas.</span> I'm student stady at Faridpur Polythnice Institute, Faridpur <a href="#">facbook.com</a> <a href="#"> Youtube.com</a> </p>
 <img src="img/feed-image-4.png"  class="post-img">
 <div class="post-row">
 <div class="Activity-icons">
<div><img src="img/like-blue.png"  >123</div>
<div><img src="img/comments.png" >23</div>
<div><img src="img/share.png"  >13</div>
 </div>
 <div class="post-profile-icon">
   <img src="img/profile-pic.png" ><i class="fa-solid fa-caret-down"></i>
 </div>
</div>
</div>



<div class="post-contanier">
  <div class="post-row">
 <div class="user-profile">
   <img src="img/profile-pic.png"  >
   <div>
     <p>Avijit Biswas</p>
     <span>April 18 2022, 02.30 PM</span>
   </div>
 </div>
<a href=""><i class="fa-solid fa-ellipsis-vertical"></i></a> 
 </div>
 <p class="post-text"> Hi! I'm <span> @Avijit BIswas.</span> I'm student stady at Faridpur Polythnice Institute, Faridpur <a href="#">facbook.com</a> <a href="#"> Youtube.com</a> </p>
 <img src="img/feed-image-5.png"  class="post-img">
 <div class="post-row">
 <div class="Activity-icons">
<div><img src="img/like-blue.png"  >123</div>
<div><img src="img/comments.png" >23</div>
<div><img src="img/share.png"  >13</div>
 </div>
 <div class="post-profile-icon">
   <img src="img/profile-pic.png" ><i class="fa-solid fa-caret-down"></i>
 </div>
</div>
</div>



<div class="post-contanier">
  <div class="post-row">
 <div class="user-profile">
   <img src="img/profile-pic.png"  >
   <div>
     <p>Avijit Biswas</p>
     <span>April 18 2022, 02.30 PM</span>
   </div>
 </div>
<a href=""><i class="fa-solid fa-ellipsis-vertical"></i></a> 
 </div>
 <p class="post-text"> Hi! I'm <span> @Avijit BIswas.</span> I'm student stady at Faridpur Polythnice Institute, Faridpur <a href="#">facbook.com</a> <a href="#"> Youtube.com</a> </p>
 <img src="img/feed-image-3.png"  class="post-img">
 <div class="post-row">
 <div class="Activity-icons">
<div><img src="img/like-blue.png"  >123</div>
<div><img src="img/comments.png" >23</div>
<div><img src="img/share.png"  >13</div>
 </div>
 <div class="post-profile-icon">
   <img src="img/profile-pic.png" ><i class="fa-solid fa-caret-down"></i>
 </div>
</div>
</div>
<div class="post-contanier">
  <div class="post-row">
 <div class="user-profile">
   <img src="img/profile-pic.png"  >
   <div>
     <p>Avijit Biswas</p>
     <span>April 18 2022, 02.30 PM</span>
   </div>
 </div>
<a href=""><i class="fa-solid fa-ellipsis-vertical"></i></a> 
 </div>
 <p class="post-text"> Hi! I'm <span> @Avijit BIswas.</span> I'm student stady at Faridpur Polythnice Institute, Faridpur <a href="#">facbook.com</a> <a href="#"> Youtube.com</a> </p>
 <img src="img/feed-image-1.png"  class="post-img">
 <div class="post-row">
 <div class="Activity-icons">
<div><img src="img/like-blue.png"  >123</div>
<div><img src="img/comments.png" >23</div>
<div><img src="img/share.png"  >13</div>
 </div>
 <div class="post-profile-icon">
   <img src="img/profile-pic.png" ><i class="fa-solid fa-caret-down"></i>
 </div>
</div>
</div>



<div class="post-contanier">
  <div class="post-row">
 <div class="user-profile">
   <img src="img/profile-pic.png"  >
   <div>
     <p>Avijit Biswas</p>
     <span>April 18 2022, 02.30 PM</span>
   </div>
 </div>
<a href=""><i class="fa-solid fa-ellipsis-vertical"></i></a> 
 </div>
 <p class="post-text"> Hi! I'm <span> @Avijit BIswas.</span> I'm student stady at Faridpur Polythnice Institute, Faridpur <a href="#">facbook.com</a> <a href="#"> Youtube.com</a> </p>
 <img src="img/feed-image-4.png"  class="post-img">
 <div class="post-row">
 <div class="Activity-icons">
<div><img src="img/like-blue.png"  >123</div>
<div><img src="img/comments.png" >23</div>
<div><img src="img/share.png"  >13</div>
 </div>
 <div class="post-profile-icon">
   <img src="img/profile-pic.png" ><i class="fa-solid fa-caret-down"></i>
 </div>
</div>
</div>



<div class="post-contanier">
  <div class="post-row">
 <div class="user-profile">
   <img src="img/profile-pic.png"  >
   <div>
     <p>Avijit Biswas</p>
     <span>April 18 2022, 02.30 PM</span>
   </div>
 </div>
<a href=""><i class="fa-solid fa-ellipsis-vertical"></i></a> 
 </div>
 <p class="post-text"> Hi! I'm <span> @Avijit BIswas.</span> I'm student stady at Faridpur Polythnice Institute, Faridpur <a href="#">facbook.com</a> <a href="#"> Youtube.com</a> </p>
 <img src="img/feed-image-5.png"  class="post-img">
 <div class="post-row">
 <div class="Activity-icons">
<div><img src="img/like-blue.png"  >123</div>
<div><img src="img/comments.png" >23</div>
<div><img src="img/share.png"  >13</div>
 </div>
 <div class="post-profile-icon">
   <img src="img/profile-pic.png" ><i class="fa-solid fa-caret-down"></i>
 </div>
</div>
</div>





<div class="post-contanier">
  <div class="post-row">
 <div class="user-profile">
   <img src="img/profile-pic.png"  >
   <div>
     <p>Avijit Biswas</p>
     <span>April 18 2022, 02.30 PM</span>
   </div>
 </div>
<a href=""><i class="fa-solid fa-ellipsis-vertical"></i></a> 
 </div>
 <p class="post-text"> Hi! I'm <span> @Avijit BIswas.</span> I'm student stady at Faridpur Polythnice Institute, Faridpur <a href="#">facbook.com</a> <a href="#"> Youtube.com</a> </p>
 <img src="img/feed-image-1.png"  class="post-img">
 <div class="post-row">
 <div class="Activity-icons">
<div><img src="img/like-blue.png"  >123</div>
<div><img src="img/comments.png" >23</div>
<div><img src="img/share.png"  >13</div>
 </div>
 <div class="post-profile-icon">
   <img src="img/profile-pic.png" ><i class="fa-solid fa-caret-down"></i>
 </div>
</div>
</div>





<div class="post-contanier">
  <div class="post-row">
 <div class="user-profile">
   <img src="img/profile-pic.png"  >
   <div>
     <p>Avijit Biswas</p>
     <span>April 18 2022, 02.30 PM</span>
   </div>
 </div>
<a href=""><i class="fa-solid fa-ellipsis-vertical"></i></a> 
 </div>
 <p class="post-text"> Hi! I'm <span> @Avijit BIswas.</span> I'm student stady at Faridpur Polythnice Institute, Faridpur <a href="#">facbook.com</a> <a href="#"> Youtube.com</a> </p>
 <img src="img/feed-image-2.png"  class="post-img">
 <div class="post-row">
 <div class="Activity-icons">
<div><img src="img/like-blue.png"  >123</div>
<div><img src="img/comments.png" >23</div>
<div><img src="img/share.png"  >13</div>
 </div>
 <div class="post-profile-icon">
   <img src="img/profile-pic.png" ><i class="fa-solid fa-caret-down"></i>
 </div>
</div>
</div>




<div class="post-contanier">
  <div class="post-row">
 <div class="user-profile">
   <img src="img/profile-pic.png"  >
   <div>
     <p>Avijit Biswas</p>
     <span>April 18 2022, 02.30 PM</span>
   </div>
 </div>
<a href=""><i class="fa-solid fa-ellipsis-vertical"></i></a> 
 </div>
 <p class="post-text"> Hi! I'm <span> @Avijit BIswas.</span> I'm student stady at Faridpur Polythnice Institute, Faridpur <a href="#">facbook.com</a> <a href="#"> Youtube.com</a> </p>
 <img src="img/feed-image-4.png"  class="post-img">
 <div class="post-row">
 <div class="Activity-icons">
<div><img src="img/like-blue.png"  >123</div>
<div><img src="img/comments.png" >23</div>
<div><img src="img/share.png"  >13</div>
 </div>
 <div class="post-profile-icon">
   <img src="img/profile-pic.png" ><i class="fa-solid fa-caret-down"></i>
 </div>
</div>
</div>




<div class="post-contanier">
  <div class="post-row">
 <div class="user-profile">
   <img src="img/profile-pic.png"  >
   <div>
     <p>Avijit Biswas</p>
     <span>April 18 2022, 02.30 PM</span>
   </div>
 </div>
<a href=""><i class="fa-solid fa-ellipsis-vertical"></i></a> 
 </div>
 <p class="post-text"> Hi! I'm <span> @Avijit BIswas.</span> I'm student stady at Faridpur Polythnice Institute, Faridpur <a href="#">facbook.com</a> <a href="#"> Youtube.com</a> </p>
 <img src="img/feed-image-3.png"  class="post-img">
 <div class="post-row">
 <div class="Activity-icons">
<div><img src="img/like-blue.png"  >123</div>
<div><img src="img/comments.png" >23</div>
<div><img src="img/share.png"  >13</div>
 </div>
 <div class="post-profile-icon">
   <img src="img/profile-pic.png" ><i class="fa-solid fa-caret-down"></i>
 </div>
</div>
</div>




<div class="post-contanier">
  <div class="post-row">
 <div class="user-profile">
   <img src="img/profile-pic.png"  >
   <div>
     <p>Avijit Biswas</p>
     <span>April 18 2022, 02.30 PM</span>
   </div>
 </div>
<a href=""><i class="fa-solid fa-ellipsis-vertical"></i></a> 
 </div>
 <p class="post-text"> Hi! I'm <span> @Avijit BIswas.</span> I'm student stady at Faridpur Polythnice Institute, Faridpur <a href="#">facbook.com</a> <a href="#"> Youtube.com</a> </p>
 <img src="img/feed-image-1.png"  class="post-img">
 <div class="post-row">
 <div class="Activity-icons">
<div><img src="img/like-blue.png"  >123</div>
<div><img src="img/comments.png" >23</div>
<div><img src="img/share.png"  >13</div>
 </div>
 <div class="post-profile-icon">
   <img src="img/profile-pic.png" ><i class="fa-solid fa-caret-down"></i>
 </div>
</div>
</div>




<div class="post-contanier">
  <div class="post-row">
 <div class="user-profile">
   <img src="img/profile-pic.png"  >
   <div>
     <p>Avijit Biswas</p>
     <span>April 18 2022, 02.30 PM</span>
   </div>
 </div>
<a href=""><i class="fa-solid fa-ellipsis-vertical"></i></a> 
 </div>
 <p class="post-text"> Hi! I'm <span> @Avijit BIswas.</span> I'm student stady at Faridpur Polythnice Institute, Faridpur <a href="#">facbook.com</a> <a href="#"> Youtube.com</a> </p>
 <img src="img/feed-image-1.png"  class="post-img">
 <div class="post-row">
 <div class="Activity-icons">
<div><img src="img/like-blue.png"  >123</div>
<div><img src="img/comments.png" >23</div>
<div><img src="img/share.png"  >13</div>
 </div>
 <div class="post-profile-icon">
   <img src="img/profile-pic.png" ><i class="fa-solid fa-caret-down"></i>
 </div>
</div>
</div>




<div class="post-contanier">
  <div class="post-row">
 <div class="user-profile">
   <img src="img/profile-pic.png"  >
   <div>
     <p>Avijit Biswas</p>
     <span>April 18 2022, 02.30 PM</span>
   </div>
 </div>
<a href=""><i class="fa-solid fa-ellipsis-vertical"></i></a> 
 </div>
 <p class="post-text"> Hi! I'm <span> @Avijit BIswas.</span> I'm student stady at Faridpur Polythnice Institute, Faridpur <a href="#">facbook.com</a> <a href="#"> Youtube.com</a> </p>
 <img src="img/feed-image-2.png"  class="post-img">
 <div class="post-row">
 <div class="Activity-icons">
<div><img src="img/like-blue.png"  >123</div>
<div><img src="img/comments.png" >23</div>
<div><img src="img/share.png"  >13</div>
 </div>
 <div class="post-profile-icon">
   <img src="img/profile-pic.png" ><i class="fa-solid fa-caret-down"></i>
 </div>
</div>
</div>




<div class="post-contanier">
  <div class="post-row">
 <div class="user-profile">
   <img src="img/profile-pic.png"  >
   <div>
     <p>Avijit Biswas</p>
     <span>April 18 2022, 02.30 PM</span>
   </div>
 </div>
<a href=""><i class="fa-solid fa-ellipsis-vertical"></i></a> 
 </div>
 <p class="post-text"> Hi! I'm <span> @Avijit BIswas.</span> I'm student stady at Faridpur Polythnice Institute, Faridpur <a href="#">facbook.com</a> <a href="#"> Youtube.com</a> </p>
 <img src="img/feed-image-1.png"  class="post-img">
 <div class="post-row">
 <div class="Activity-icons">
<div><img src="img/like-blue.png"  >123</div>
<div><img src="img/comments.png" >23</div>
<div><img src="img/share.png"  >13</div>
 </div>
 <div class="post-profile-icon">
   <img src="img/profile-pic.png" ><i class="fa-solid fa-caret-down"></i>
 </div>
</div>
</div>



<div class="post-contanier">
  <div class="post-row">
 <div class="user-profile">
   <img src="img/profile-pic.png"  >
   <div>
     <p>Avijit Biswas</p>
     <span>April 18 2022, 02.30 PM</span>
   </div>
 </div>
<a href=""><i class="fa-solid fa-ellipsis-vertical"></i></a> 
 </div>
 <p class="post-text"> Hi! I'm <span> @Avijit BIswas.</span> I'm student stady at Faridpur Polythnice Institute, Faridpur <a href="#">facbook.com</a> <a href="#"> Youtube.com</a> </p>
 <img src="img/feed-image-1.png"  class="post-img">
 <div class="post-row">
 <div class="Activity-icons">
<div><img src="img/like-blue.png"  >123</div>
<div><img src="img/comments.png" >23</div>
<div><img src="img/share.png"  >13</div>
 </div>
 <div class="post-profile-icon">
   <img src="img/profile-pic.png" ><i class="fa-solid fa-caret-down"></i>
 </div>
</div>
</div>


<div class="post-contanier">
  <div class="post-row">
 <div class="user-profile">
   <img src="img/profile-pic.png"  >
   <div>
     <p>Avijit Biswas</p>
     <span>April 18 2022, 02.30 PM</span>
   </div>
 </div>
<a href=""><i class="fa-solid fa-ellipsis-vertical"></i></a> 
 </div>
 <p class="post-text"> Hi! I'm <span> @Avijit BIswas.</span> I'm student stady at Faridpur Polythnice Institute, Faridpur <a href="#">facbook.com</a> <a href="#"> Youtube.com</a> </p>
 <img src="img/feed-image-1.png"  class="post-img">
 <div class="post-row">
 <div class="Activity-icons">
<div><img src="img/like-blue.png"  >123</div>
<div><img src="img/comments.png" >23</div>
<div><img src="img/share.png"  >13</div>
 </div>
 <div class="post-profile-icon">
   <img src="img/profile-pic.png" ><i class="fa-solid fa-caret-down"></i>
 </div>
</div>
</div>
<div class="post-contanier">
  <div class="post-row">
 <div class="user-profile">
   <img src="img/profile-pic.png"  >
   <div>
     <p>Avijit Biswas</p>
     <span>April 18 2022, 02.30 PM</span>
   </div>
 </div>
<a href=""><i class="fa-solid fa-ellipsis-vertical"></i></a> 
 </div>
 <p class="post-text"> Hi! I'm <span> @Avijit BIswas.</span> I'm student stady at Faridpur Polythnice Institute, Faridpur <a href="#">facbook.com</a> <a href="#"> Youtube.com</a> </p>
 <img src="img/feed-image-1.png"  class="post-img">
 <div class="post-row">
 <div class="Activity-icons">
<div><img src="img/like-blue.png"  >123</div>
<div><img src="img/comments.png" >23</div>
<div><img src="img/share.png"  >13</div>
 </div>
 <div class="post-profile-icon">
   <img src="img/profile-pic.png" ><i class="fa-solid fa-caret-down"></i>
 </div>
</div>
</div>
<div class="post-contanier">
  <div class="post-row">
 <div class="user-profile">
   <img src="img/profile-pic.png"  >
   <div>
     <p>Avijit Biswas</p>
     <span>April 18 2022, 02.30 PM</span>
   </div>
 </div>
<a href=""><i class="fa-solid fa-ellipsis-vertical"></i></a> 
 </div>
 <p class="post-text"> Hi! I'm <span> @Avijit BIswas.</span> I'm student stady at Faridpur Polythnice Institute, Faridpur <a href="#">facbook.com</a> <a href="#"> Youtube.com</a> </p>
 <img src="img/feed-image-1.png"  class="post-img">
 <div class="post-row">
 <div class="Activity-icons">
<div><img src="img/like-blue.png"  >123</div>
<div><img src="img/comments.png" >23</div>
<div><img src="img/share.png"  >13</div>
 </div>
 <div class="post-profile-icon">
   <img src="img/profile-pic.png" ><i class="fa-solid fa-caret-down"></i>
 </div>
</div>
</div>
<div class="post-contanier">
  <div class="post-row">
 <div class="user-profile">
   <img src="img/profile-pic.png"  >
   <div>
     <p>Avijit Biswas</p>
     <span>April 18 2022, 02.30 PM</span>
   </div>
 </div>
<a href=""><i class="fa-solid fa-ellipsis-vertical"></i></a> 
 </div>
 <p class="post-text"> Hi! I'm <span> @Avijit BIswas.</span> I'm student stady at Faridpur Polythnice Institute, Faridpur <a href="#">facbook.com</a> <a href="#"> Youtube.com</a> </p>
 <img src="img/feed-image-1.png"  class="post-img">
 <div class="post-row">
 <div class="Activity-icons">
<div><img src="img/like-blue.png"  >123</div>
<div><img src="img/comments.png" >23</div>
<div><img src="img/share.png"  >13</div>
 </div>
 <div class="post-profile-icon">
   <img src="img/profile-pic.png" ><i class="fa-solid fa-caret-down"></i>
 </div>
</div>
</div><div class="post-contanier">
  <div class="post-row">
 <div class="user-profile">
   <img src="img/profile-pic.png"  >
   <div>
     <p>Avijit Biswas</p>
     <span>April 18 2022, 02.30 PM</span>
   </div>
 </div>
<a href=""><i class="fa-solid fa-ellipsis-vertical"></i></a> 
 </div>
 <p class="post-text"> Hi! I'm <span> @Avijit BIswas.</span> I'm student stady at Faridpur Polythnice Institute, Faridpur <a href="#">facbook.com</a> <a href="#"> Youtube.com</a> </p>
 <img src="img/feed-image-1.png"  class="post-img">
 <div class="post-row">
 <div class="Activity-icons">
<div><img src="img/like-blue.png"  >123</div>
<div><img src="img/comments.png" >23</div>
<div><img src="img/share.png"  >13</div>
 </div>
 <div class="post-profile-icon">
   <img src="img/profile-pic.png" ><i class="fa-solid fa-caret-down"></i>
 </div>
</div>
</div>
<div class="post-contanier">
  <div class="post-row">
 <div class="user-profile">
   <img src="img/profile-pic.png"  >
   <div>
     <p>Avijit Biswas</p>
     <span>April 18 2022, 02.30 PM</span>
   </div>
 </div>
<a href=""><i class="fa-solid fa-ellipsis-vertical"></i></a> 
 </div>
 <p class="post-text"> Hi! I'm <span> @Avijit BIswas.</span> I'm student stady at Faridpur Polythnice Institute, Faridpur <a href="#">facbook.com</a> <a href="#"> Youtube.com</a> </p>
 <img src="img/feed-image-1.png"  class="post-img">
 <div class="post-row">
 <div class="Activity-icons">
<div><img src="img/like-blue.png"  >123</div>
<div><img src="img/comments.png" >23</div>
<div><img src="img/share.png"  >13</div>
 </div>
 <div class="post-profile-icon">
   <img src="img/profile-pic.png" ><i class="fa-solid fa-caret-down"></i>
 </div>
</div>
</div>
<div class="post-contanier">
  <div class="post-row">
 <div class="user-profile">
   <img src="img/profile-pic.png"  >
   <div>
     <p>Avijit Biswas</p>
     <span>April 18 2022, 02.30 PM</span>
   </div>
 </div>
<a href=""><i class="fa-solid fa-ellipsis-vertical"></i></a> 
 </div>
 <p class="post-text"> Hi! I'm <span> @Avijit BIswas.</span> I'm student stady at Faridpur Polythnice Institute, Faridpur <a href="#">facbook.com</a> <a href="#"> Youtube.com</a> </p>
 <img src="img/feed-image-1.png"  class="post-img">
 <div class="post-row">
 <div class="Activity-icons">
<div><img src="img/like-blue.png"  >123</div>
<div><img src="img/comments.png" >23</div>
<div><img src="img/share.png"  >13</div>
 </div>
 <div class="post-profile-icon">
   <img src="img/profile-pic.png" ><i class="fa-solid fa-caret-down"></i>
 </div>
</div>
</div>
 

 <button type="button" class="Lode-more-btn"> Lode More </button>

</div>  

























          <!----------righgt sidebar--------->
         <div class="right-sidebar">
           

           <div class="saidbar-title">
             <h4>Events</h4>
             <a href="#">see all</a>
           </div>

           <div class="event">
             <div class="left-event">
               <h3>18</h3>
               <span>March</span>
             </div>
             <div class="right-event">
               <h6>Social midea</h6>
               <p><i class="fa-solid fa-location-dot"></i>Willson Tech Park</p>
               <a href="#">More info</a>
             </div>
           </div>

           <div class="event">
            <div class="left-event">
              <h3>22  </h3>
              <span> April</span>
            </div>
            <div class="right-event">
              <h6> Mobile</h6>
              <p><i class="fa-solid fa-location-dot"></i>Willson Tech Park</p>
              <a href="#">More info</a>
            </div>
          </div>
          <div class="saidbar-title">
            <h4> Advertisment</h4>
            <a href="#"> close</a>
          </div>
          <img src="img/advertisement.png "  class="sidebar-ads">
          <div class="saidbar-title">
            <h4> Conversation</h4>
            <a href="#"> Hide Chart</a>
          </div>

          <div class="online-list">
          <div class="online">
             <img src="img/member-2.png" alt="">
          </div>
          <p> Avijit BIswas</p>
          </div>

          <div class="online-list">
            <div class="online">
              <img src="img/member-1.png" alt="">
            </div>
            <p> Sumona mondol</p>
            </div>

            <div class="online-list">
              <div class="online">
                <img src="img/member-3.png" alt="">
              </div>
              <p> Monika Biswas</p>
              </div>
              <div class="online-list">
                <div class="online">
                  <img src="img/member-4.png" alt="">
                </div>
                <p> Monika Biswas</p>
               
                </div>
                
          <div class="online-list">
            <div class="online">
              <img src="img/member-1.png" alt="">
            </div>
            <p> Sumona mondol</p>
            </div>

            <div class="online-list">
              <div class="online">
                <img src="img/member-3.png" alt="">
              </div>
              <p> Monika Biswas</p>
              </div>
              <div class="online-list">
                <div class="online">
                  <img src="img/member-4.png" alt="">
                </div>
                <p> Monika Biswas</p>
               
                </div>

                
          <div class="online-list">
            <div class="online">
              <img src="img/member-1.png" alt="">
            </div>
            <p> Sumona mondol</p>
            </div>

            <div class="online-list">
              <div class="online">
                <img src="img/member-3.png" alt="">
              </div>
              <p> Monika Biswas</p>
              </div>
              <div class="online-list">
                <div class="online">
                  <img src="img/member-4.png" alt="">
                </div>
                <p> Monika Biswas</p>
               
                </div>

                
          <div class="online-list">
            <div class="online">
              <img src="img/member-1.png" alt="">
            </div>
            <p> Sumona mondol</p>
            </div>

            <div class="online-list">
              <div class="online">
                <img src="img/member-3.png" alt="">
              </div>
              <p> Monika Biswas</p>
              </div>
              <div class="online-list">
                <div class="online">
                  <img src="img/member-4.png" alt="">
                </div>
                <p> Monika Biswas</p>
               </div>
         </div>
       </div>

       <div class="footer">
         <p> Made By Avijit Biswas Ovi . Thaqnk You Everyone </p>
       </div>


       <div>
       <a href="logout.php" class="btn btn-warning">Logout</a>





























     <!-- Optional JavaScript -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <script src="script.js"></script>
   </body>
 </html>
 