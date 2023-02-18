
      <!-- start: main content -->
      <div class="col-lg-9">
        <!-- start: breadcrumb -->
        <div class="page-header mb-3">
          <div class="d-flex justify-content-between">
            <h3 class="mt-3">จัดการรายชื่อผู้ใช้งาน</h3>
            <!-- <a class="btn btn-primary align-self-end" href="/ui/4.2.3.admin-users-add.html"><i class="bi-person-plus-fill me-1"></i> เพิ่มผู้ใช้งาน</a> -->
          </div>
        </div>

        <!-- end: breadcrumb -->
        <form id="adminForm">
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
                  <div class="col-2"><strong>#</strong></div>
                  <div class="col-5"><strong>ชื่อ-นามสกุล</strong></div>
                  <div class="col-5"><strong>ตำแหน่ง</strong></div>
                </div>

                <hr />

                <div class="row gy-2">
                  <div class="col-12 col-md-2">
                    <div class="d-flex">
                      <span class="d-md-none w-50">ลำดับที่: </span>1
                    </div>
                  </div>
                  <div class="col-12 col-md-5">
                    <div class="d-flex">
                      <span class="d-md-none w-50">ชื่อ-นามสกุล:<br />อีเมล์:</span>
                      <div>
                        <div class="d-block">อ.ชัยชนะ แสนสุรินทร์</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-5">
                    <div class="d-flex">
                      <span class="d-md-none w-50">ตำแหน่ง: </span>หัวหน้าแผนกฯ
                    </div>
                  </div>
                </div>
                <hr />

                <div class="row gy-2">
                  <div class="col-12 col-md-2">
                    <div class="d-flex">
                      <span class="d-md-none w-50">ลำดับที่: </span>2
                    </div>
                  </div>
                  <div class="col-12 col-md-5">
                    <div class="d-flex">
                      <span class="d-md-none w-50">ชื่อ-นามสกุล:<br />อีเมล์:</span>
                      <div>
                        <div class="d-block">อ.มีนา ใจดี</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-5">
                    <div class="d-flex">
                      <span class="d-md-none w-50">ประเภทผู้ใช้: </span>หัวหน้าแผนกฯ
                    </div>
                  </div>

                </div>
                <hr />
                <div class="row gy-2">
                  <div class="col-12 col-md-2">
                    <div class="d-flex">
                      <span class="d-md-none w-50">ลำดับที่: </span>3
                    </div>
                  </div>
                  <div class="col-12 col-md-5">
                    <div class="d-flex">
                      <span class="d-md-none w-50">ชื่อ-นามสกุล:<br />อีเมล์:</span>
                      <div>
                        <div class="d-block">อ.ปรียา สุวรรณชัย</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-5">
                    <div class="d-flex">
                      <span class="d-md-none w-50">ประเภทผู้ใช้: </span>หัวหน้าแผนกฯ
                    </div>
                  </div>
                </div>

                <hr />
                <div class="row gy-2">
                  <div class="col-12 col-md-2">
                    <div class="d-flex">
                      <span class="d-md-none w-50">ลำดับที่: </span>4
                    </div>
                  </div>
                  <div class="col-12 col-md-5">
                    <div class="d-flex">
                      <span class="d-md-none w-50">ชื่อ-นามสกุล:<br />อีเมล์:</span>
                      <div>
                        <div class="d-block">อ.กฤษณา แนววิเศษ</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-5">
                    <div class="d-flex">
                      <span class="d-md-none w-50">ประเภทผู้ใช้: </span>ครูที่ปรึกษา
                    </div>
                  </div>
                </div>
                <hr />

                <div class="row gy-2">
                  <div class="col-12 col-md-2">
                    <div class="d-flex">
                      <span class="d-md-none w-50">ลำดับที่: </span>5
                    </div>
                  </div>
                  <div class="col-12 col-md-5">
                    <div class="d-flex">
                      <span class="d-md-none w-50">ชื่อ-นามสกุล:<br />อีเมล์:</span>
                      <div>
                        <div class="d-block">อ.อลงกรณ์ ภูคงคา</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-5">
                    <div class="d-flex">
                      <span class="d-md-none w-50">ประเภทผู้ใช้: </span>ครูที่ปรึกษา
                    </div>
                  </div>

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