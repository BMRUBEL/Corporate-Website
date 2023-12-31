<section id="team">
  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <h3>Team</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
    </div>


    <div class="row">

      <?php foreach ($team as $k => $v) { ?>
        <div class="col-lg-3 col-md-6" data-aos="zoom-out" data-aos-delay="100">
          <div class="member">
            <img src="<?php echo base_url() . 'uploads/' . $v->photo; ?>" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4><?php echo $v->title; ?></h4>
                <span><?php echo $v->deg; ?></span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>



      <!-- <div class="col-lg-3 col-md-6" data-aos="zoom-out" data-aos-delay="200">
        <div class="member">
          <img src="<?php echo base_url() ?>assets/assets/img/team-2.jpg" class="img-fluid" alt="">
          <div class="member-info">
            <div class="member-info-content">
              <h4>Sarah Jhonson</h4>
              <span>Product Manager</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6" data-aos="zoom-out" data-aos-delay="300">
        <div class="member">
          <img src="<?php echo base_url() ?>assets/assets/img/team-3.jpg" class="img-fluid" alt="">
          <div class="member-info">
            <div class="member-info-content">
              <h4>William Anderson</h4>
              <span>CTO</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6" data-aos="zoom-out" data-aos-delay="400">
        <div class="member">
          <img src="<?php echo base_url() ?>assets/assets/img/team-4.jpg" class="img-fluid" alt="">
          <div class="member-info">
            <div class="member-info-content">
              <h4>Amanda Jepson</h4>
              <span>Accountant</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div> -->

    </div>


  </div>
</section>