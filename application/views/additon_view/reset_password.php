
<?php

  $info = isset($check_email) != null ? [$check_email] : $users ;

?>


<!-- start: main content -->
      <div class="col-lg-9">
        <!-- start: breadcrumb -->
        <div class="page-header mb-3">
          <div class="d-flex justify-content-between">
            <h3 class="mt-3">ระบบรีเซ็ตรหัสผ่านผู้ใช้งาน</h3>
            <!-- <a class="btn btn-primary align-self-end" href="/ui/4.2.3.admin-users-add.html"><i class="bi-person-plus-fill me-1"></i> เพิ่มผู้ใช้งาน</a> -->
          </div>
        </div>

        <!-- end: breadcrumb -->
        <form action="<?php echo base_url('addition/reset_password'); ?>" id="adminForm" method="POST">
          <div class="card mb-3" id="passwordSection">
            <div class="card-header">
              <div class="row">
                <div class="col-12 col-sm-5 mb-2">
                  <div class="input-group">
                    <input type="text" name="users_filter_search" id="search" value="" class="form-control" onchange="document.adminForm.submit();" />
                    <button class="input-group-text" onclick="this.form.submit();">
                      <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                  </div>
                </div>

                <div class="col-12 col-sm-7">
                  <div class="d-flex justify-content-end">
                    <select class="form-select me-2" name="users_filter_user_type" onchange="document.adminForm.submit();">
                      <option value="">- ค้าหารายแผนก -</option>
                      <option value="ช่างยนต์">ช่างยนต์</option>
                      <option value="ช่างไฟฟ้ากำลัง">
                        ช่างไฟฟ้ากำลัง
                      </option>
                      <option value="เทคโนโลยีสารสนเทศ">
                        เทคโนโลยีสารสนเทศ
                      </option>
                      <option value="ช่างเชื่อม">
                        ช่างเชื่อม
                      </option>
                      <option value="บัญชี">
                        บัญชี
                      </option>
                      <option value="คอมพิวเตอร์ธุรกิจ">
                        คอมพิวเตอร์ธุรกิจ
                      </option>
                      <option value="โยธาฯ">โยธาฯ</option>
                    </select>

                  </div>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div>
                <div class="row d-none d-md-flex">
                  <div class="col-1"><strong>#</strong></div>
                  <div class="col-4"><strong>อีเมล์</strong></div>
                  <div class="col-3"><strong>ชื่อ-นามสกุล</strong></div>
                  <div class="col-3"><strong>รีเซ็ตรหัสผ่าน</strong></div>
                </div>

                <hr />

                <?php foreach($info as $index => $row){ ?>
                <div class="row gy-2">

                  <div class="col-12 col-md-1">
                    <div class="d-flex">
                      <span class="d-md-none w-50">ลำดับที่: </span><?php echo $index+1 ?>
                    </div>
                  </div>

                  <div class="col-12 col-md-4">
                    <div class="d-flex">
                      <div>
                        <div class="d-block"><?php echo $row->email ?></div>
                      </div>
                    </div>
                  </div>

                  <div class="col-12 col-md-3">
                    <div class="d-flex">
                      <div>
                      <div class="d-block"><?php echo $row->firstname . ' ' . $row->lastname ?></div>
                      </div>
                    </div>
                  </div>

                  <div class="col-12 col-md-3 mb-3">
                    <div class="d-flex">
                      <div>
                        <a class="btn btn-md btn-primary" href="<?php echo base_url("addition/reset/") . $row->id ?>">รีเซ็ตรหัสผ่าน</a>
                      </div>
                    </div>
                  </div>

                </div>

                <?php } ?>

              </div>
              <hr />
              <div id="pagination" class="row gy-3">
                <div class="col-12 col-sm-6 text-center">
                  <span>Showing:</span>
                  <select class="form-select d-inline" style="width: 15%">
                    <option value="5" selected>5</option>
                    <option value="10">10</option>
                    <option value="10">30</option>
                    <option value="10">50</option>
                    <option value="10">100</option>
                  </select>
                  <span>of</span>
                  <span>200</span>
                </div>
                <div class="col-12 col-sm-6 text-center">
                  <a class="btn btn-outline-secondary" href="#">ก่อนหน้า</a>
                  <a class="btn btn-primary" href="#">1</a>
                  <a class="btn btn-secondary" href="#">2</a>
                  <a class="btn btn-secondary" href="#">3</a>
                  <a class="btn btn-secondary" href="#">4</a>
                  <a class="btn btn-secondary" href="#">5</a>
                  <a class="btn btn-outline-secondary" href="#">ถัดไป</a>
                </div>
              </div>
            </div>
          </div>
      </div>
      </form>
      </div>
      <!-- end: main content -->

      </div>
      </div>
      </main>