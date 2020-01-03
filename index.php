<?php
  require 'header.php';
 ?>
   <main>
     <section class="banner">
       <div class="index-text">
         <h2><span id="greeting">Hello</span>, I'm Harry.</h2>
         <h3>A Front-end Web Developer.</h3>
         <a href="files/harry thrall cv.pdf" target="_blank" class="link-btn">Click to view my CV</a>
         <div class="icons">
           <a href="https://www.linkedin.com/in/harry-thrall/" target="_blank" class="fab fa-linkedin"></a>
           <a href="https://github.com/harry-thrall" target="_blank" class="fab fa-github"></a>
           <a href="https://codepen.io/HThrall/" target="_blank" class="fab fa-codepen"></a>
         </div>
       </div>
     </section>

     <section id="projects">
       <div class="projects-wrapper">
         <div class="image-wrapper">
           <span class="banner-top"><p>The Locket</p></span>
           <a href="#"><img src="imgs/mountain.jpg" alt=""></a>
           <span class="banner-bottom"><a href="#"><p>HTML, CSS, JQuery <br><span class="banner-highlight">Click for more information</span></p></a></span>
         </div>

         <div class="image-wrapper">
           <span class="banner-top"><p>Wedding Website</p></span>
           <a href="#"><img src="imgs/mountain.jpg" alt=""></a>
           <span class="banner-bottom"><a href="#"><p>HTML, CSS, JQuery, PHP, MySQL, PDO <br><span class="banner-highlight">Click for more information</span></p></a></span>
         </div>
       </div>
     </section>

     <section id="about">
       <div class="about-me">
         <h2 class="section-header"><span>About Me</span></h2>
         <p>I'm a front-end developer with some experience of back-end development. I graduated from the University of York in 2018 with a Master's Degree in Information Technology. I have since used my programming knowledge gained on my degree to develop my skills in the web development field. Each project I have completed has taught me something new and my journey is far from over. <br><br> For more information about me please check out my resume at the top of the page and my projects above.</p>
       </div>
     </section>

     <section id="contact">
       <div class="contact-form">
         <h2 class="section-header"><span>Reach out to me</span></h2>
         <p>I'm a front-end developer with some experience of back-end development. I graduated from the University of York in 2018 with a Master's Degree in Information Technology. I have since used my programming knowledge gained on my degree to develop new skills in the web development field. Each project I have completed has taught me something new and my journey is far from over. <br><br> For more information about me please check out my resume at the top of the page and my projects above.</p>
       </div>
     </section>
   </main>
 </div>
 <script src="script.js"></script>

 <?php
    require 'footer.php';
  ?>
