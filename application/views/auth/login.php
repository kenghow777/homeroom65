<!-- ดูตัวอย่างได้จาก: https://github.com/itchaiyaphum/food_delivery2/blob/main/auth_login.php -->


<div class="container mb-5">
  <div class="row text-center mt-5">

    <div class="col">
      <div class="w-100 p-2">
        <img style="width: 200px;" src="<?php echo base_url('assets/img_addition/bg_login.png') ?>" />
      </div>
    </div>

  </div>

  <div class="row mt-5 justify-content-center">
    <div class="col-md-8 col-lg-6">
      <h4 class="text-center mb-3">ลงชื่อเข้าสู่ระบบ</h4>
      <div class="card">
        <div class="card-body">
          <form action="<?php echo base_url('auth/login/'); ?>" method="POST">

            <div class="mb-3">
              <label for="inputEmail" class="form-label">อีเมล์</label>
              <input type="email" class="form-control" id="inputEmail" name="email" />
            </div>

            <div class="mb-3">
              <label for="inputPassword" class="form-label">รหัสผ่าน</label>
              <input type="password" class="form-control" id="inputPassword" name="password" />
            </div>

            <button type="submit" class="btn btn-primary w-100">เข้าสู่ระบบ</button>

          </form>
          <hr />
          <!-- <div class="text-center"><a href="/" class="link-secondary">Go back to homepage</a></div> -->

        </div>
      </div>

    </div>
  </div>
</div>