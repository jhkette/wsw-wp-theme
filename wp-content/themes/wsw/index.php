<?php get_header(); ?>



<div class="carousel">
      <div class="carousel-cell"  id="lead"><h1>Hello</h1></div>
      <div class="carousel-cell" id="lead2"></div>
      <div class="carousel-cell" id="lead3"></div>
     
    </div>
    <main class="main-body">
      <div class="lead">
        <article class="container-club">
          <h2>The Club</h2>
          <p>
            Based in Bury St Edmunds and formed in 1922, West Suffolk Wheelers
            is a welcoming and friendly cycling and triathlon club. If you're
            just getting into cycling for fitness or a race hardened triathlete,
            you'll find something for you and plenty of like minded individuals
            to help you achieve your goals.
          </p>
          <p>
            There are activities and events on nearly every day of the week and
            a thriving community to welcome you. We offer a "try before you buy"
            policy, so feel free to come along to one of our regular activities
            to see how you like us.
          </p>
          <div class="button-container">
            <a href="#" class="join">Join now!</a>
          </div>
        </article>
        <article class="container-aims">
          <h2>Our Aims</h2>

          <ul class="list-intro">
            <li>
              <img
                src=<?php echo get_theme_file_uri("images/child-reaching-solid.svg")?>
                class="community"
                alt="community"
              />
              <div>
                <h3>Open to All</h3>
                <p>
                  The club is open to all cyclists and triathletes, whether new
                  to the sport or a seasoned veteran
                </p>
              </div>
            </li>
            <li>
              <img src=<?php echo get_theme_file_uri("images/bicycle-solid.svg")?> class="bike" alt="bike"  />
              <div>
                <h3>Participation and Community</h3>
                <p>
                  The club is a community that encourages participation,
                  enjoyment and development in all aspects of cycling and
                  triathlon
                </p>
              </div>
            </li>
            <li>
              <img src=<?php echo get_theme_file_uri("images/trophy-solid.svg")?> class="trophy" alt="trophy" />
              <div>
                <h3>Racing and Competition</h3>
                <p>
                  The club provides avenues for members to race, train, and
                  compete and works together to promote open events
                </p>
              </div>
            </li>
          </ul>
        </article>
      </div>
      <div class="container-secondary">
        <article class="container-news">
          <h2>Latest News</h2>
          <article class="feature-item">
            <h3>Title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, eos vitae consectetur voluptates odit fugit voluptate molestias numquam, minima suscipit earum facilis repellendus assumenda exercitationem. Incidunt praesentium nobis doloribus dignissimos?</p>
            <a href="#" class="readmore"
              >Read more
              <div class="container-chevron" id="chevron">
                <i class="fa-solid fa-chevron-right"></i
                ><i class="fa-solid fa-chevron-right"></i></div
            ></a>
          </article>
          <article class="feature-item">
            <h3>Title</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis maiores quia quibusdam delectus fugit facere maxime temporibus nostrum dolorem, quam itaque rerum quasi inventore quis dolores unde eius esse nesciunt?</p>
            <a href="#" class="readmore"
              >Read more
              <div class="container-chevron" id="chevron1">
                <i class="fa-solid fa-chevron-right"></i
                ><i class="fa-solid fa-chevron-right"></i></div
            ></a>
          </article>
    
        </article>
        <article class="container-twitter">
          <h2>Twitter</h2>
        </article>


      
      </div>
      <div class="container-third">
        <section class="cal-information">
          <h2>News</h2>
          <article class="container-news">
            <h2>Latest News</h2>
         
            <h2>Calender</h2>
            <ul id="calender-list"></ul>
        </section>
        <section class="container-images">
          <div class="image-container">
            <div class="imagelink">
              <a href="#">
                <div class="authorimage one"></div>
              </a>
            </div>
            <h3 id="activities">Activities</h3>
          </div>
          <div class="image-container">
            <div class="imagelink">
              <a href="#">
                <div class="authorimage two"></div>
              </a>
            </div>
            <h3 id="events">Events</h3>
          </div>
  
      
  
          <div class="image-container">
            <div class="imagelink">
              <!-- cc licensed from https://www.flickr.com/photos/medmss/6882587043 -->
              <a href="#">
                <div class="authorimage four"></div>
              </a>
            </div>
            <h3 id="information">Information</h3>
          </div>
        </section>
      </div>
   
    </div>
      
     
     
    </main>
    <?php get_footer(); ?>