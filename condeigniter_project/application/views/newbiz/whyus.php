<section id="why-us">
  <div class="container" data-aos="fade-up">
    <header class="section-header">
      <h3>Why choose us?</h3>
      <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
    </header>

    <div class="row row-eq-height justify-content-center">
      <?php foreach ($whyus as $k => $v) { ?>
        <div class="col-lg-4 mb-4">
          <div class="card" data-aos="zoom-in" data-aos-delay="100">
            <i class="<?php echo $v->icon ?>"></i>
            <div class="card-body">
              <h5 class="card-title"><?php echo $v->title ?></h5>
              <p class="card-text"><?php echo $v->description ?></p>
              <a href="#" class="readmore">Read more </a>
            </div>
          </div>
        </div>
      <?php } ?>

      <!-- <div class="col-lg-4 mb-4">
            <div class="card" data-aos="zoom-in" data-aos-delay="200">
              <i class="bi bi-camera-reels"></i>
              <div class="card-body">
                <h5 class="card-title">Voluptates dolores</h5>
                <p class="card-text">Voluptates nihil et quis omnis et eaque omnis sint aut. Ducimus dolorum aspernatur.</p>
                <a href="#" class="readmore">Read more </a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card" data-aos="zoom-in" data-aos-delay="300">
              <i class="bi bi-chat-square-text"></i>
              <div class="card-body">
                <h5 class="card-title">Eum ut aspernatur</h5>
                <p class="card-text">Autem quod nesciunt eos ea aut amet laboriosam ab. Eos quis porro in non nemo ex. </p>
                <a href="#" class="readmore">Read more </a>
              </div>
            </div>
          </div> -->

    </div>

    <div class="row counters" data-aos="fade-up" data-aos-delay="100">

      <div class="col-lg-3 col-6 text-center">
        <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
        <p>Clients</p>
      </div>

      <div class="col-lg-3 col-6 text-center">
        <span data-purecounter-start="0" data-purecounter-end="421" data-purecounter-duration="1" class="purecounter"></span>
        <p>Projects</p>
      </div>

      <div class="col-lg-3 col-6 text-center">
        <span data-purecounter-start="0" data-purecounter-end="1364" data-purecounter-duration="1" class="purecounter"></span>
        <p>Hours Of Support</p>
      </div>

      <div class="col-lg-3 col-6 text-center">
        <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
        <p>Hard Workers</p>
      </div>

    </div>

  </div>
</section>