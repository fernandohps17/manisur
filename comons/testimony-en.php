<section>
  <header class="title">
    <h2>
      OUR JOBS
    </h2>
  </header>
</section>

<div class="container_testimony">
  <div class="arrow_right_blog next">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
      <path d="m321-80-71-71 329-329-329-329 71-71 400 400L321-80Z" />
    </svg>
  </div>

  <div class="arrow_left_blog prev">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
      <path d="M400-80 0-480l400-400 71 71-329 329 329 329-71 71Z" />
    </svg>
  </div>

  <div class="slider">
    <div id="map"></div>

    <div class="blog_post testimonios_contenedor" id="testimonios_contenedor">
      <?php
      // session_start();
      require_once($_SERVER["DOCUMENT_ROOT"] . "/our-jobs/components/data/dataPageBlog.php");
      require_once($_SERVER["DOCUMENT_ROOT"] . "/our-jobs/components/listsPostsHome.php");
      ?>
    </div>
  </div>
</div>

<div class="btn_jobs">
  <a href="/our-jobs/">See our works</a>
</div><br><br>