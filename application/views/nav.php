<!-- ดูตัวอย่างได้จาก: https://github.com/itchaiyaphum/food_delivery2/blob/main/nav.php -->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ระบบโฮมรูม</title>

  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fontawesome/css/all.css'); ?>" />
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.css') ?>">
</head>

<body>

  <header class="p-3 mb-3 border-bottom">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="<?php echo base_url('home'); ?>" class="nav-link px-2 link-secondary">ระบบโฮมรูม</a></li>
          </ul>

          <div class="dropdown text-end">
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small">
              <li><a class="dropdown-item" href="#">หน้าแรก</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">แก้ไขข้อมูลส่วนตัว</a></li>
              <li><a class="dropdown-item" href="#">ออกจากระบบ</a></li>
            </ul>
          </div>
          
        </div>
      </div>
    </header>
