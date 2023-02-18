
      <!-- start: main content -->
      <div class="col-lg-9">
        <!-- start: breadcrumb -->
        <div class="page-header mb-3">
          <div class="d-flex justify-content-between">
            <h3 class="mt-3">รายงานการปฎิบัติงานของครูที่ปรึกษา</h3>
            <a class="btn btn-primary align-self-end" href="#"><i class="fa-solid fa-print"></i> พิมพ์เอกสาร </a>
          </div>
        </div>

        <!-- end: breadcrumb -->
        <form id="adminForm">
          <div class="card mb-3" id="passwordSection">
            <div class="card-header">
              <div class="row">

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

                    <a class="btn btn-primary" href="/ui/4.2.3.admin-users-add.html"><i class="fa-solid fa-magnifying-glass"></i></a>

                  </div>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div>
                <div class="row d-none d-md-flex">
                  <div class="col-2"><strong>ห้องที่ปรึกษา</strong></div>
                  <div class="col-2"><strong>สัปดาห์ปฏิบัติทั้งหมด</strong></div>
                  <div class="col-2"><strong>สัปดาห์ที่ปฏิบัติงาน</strong></div>
                  <div class="col-3"><strong>สัปดาห์ที่ไม่ได้ปฏิบัติงาน</strong></div>
                  <div class="col-1"><strong>ร้อยละ</strong></div>
                  <div class="col-2"><strong>สุปผลปฏิบัติงาน</strong></div>
                </div>

                <hr />

                <div class="row gy-2">
                  <div class="col-12 col-md-2">
                    <div class="d-flex">
                      <span class="d-md-none w-50">ห้องที่ปรึกษา: </span>E1
                    </div>
                  </div>
                  <div class="col-12 col-md-2">
                    <div class="d-flex">
                      <span class="d-md-none w-50">สัปดาห์ปฏิบัติทั้งหมด: <br />18:</span>
                      <div>
                        <div class="d-block">18</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-2">
                    <div class="d-flex">
                      <span class="d-md-none w-50">สัปดาห์ที่ปฏิบัติงาน </span>18
                    </div>
                  </div>
                  <div class="col-12 col-md-3">
                    <div class="d-flex">
                      <span class="d-md-none w-50">สัปดาห์ที่ไม่ได้ปฏิบัติงาน </span>0
                    </div>
                  </div>
                  <div class="col-12 col-md-1">
                    <div class="d-flex">
                      <span class="d-md-none w-50">ร้อยละ </span>100.00%
                    </div>
                  </div>
                  <div class="col-12 col-md-2">
                    <div class="d-flex">
                      <span class="d-md-none w-50">สรุปผลปฏิบัติงาน </span>100.00%
                    </div>
                  </div>
                </div>
                <hr />

                <div class="row gy-2">
                  <div class="col-12 col-md-2">
                    <div class="d-flex">
                      <span class="d-md-none w-50">ห้องที่ปรึกษา: </span>E5
                    </div>
                  </div>
                  <div class="col-12 col-md-2">
                    <div class="d-flex">
                      <span class="d-md-none w-50">สัปดาห์ปฏิบัติทั้งหมด: <br />18:</span>
                      <div>
                        <div class="d-block">18</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-2">
                    <div class="d-flex">
                      <span class="d-md-none w-50">สัปดาห์ที่ปฏิบัติงาน </span>18
                    </div>
                  </div>
                  <div class="col-12 col-md-3">
                    <div class="d-flex">
                      <span class="d-md-none w-50">สัปดาห์ที่ไม่ได้ปฏิบัติงาน </span>0
                    </div>
                  </div>
                  <div class="col-12 col-md-1">
                    <div class="d-flex">
                      <span class="d-md-none w-50">ร้อยละ </span>100.00%
                    </div>
                  </div>
                  <div class="col-12 col-md-2">
                    <div class="d-flex">
                      <span class="d-md-none w-50">สรุปผลปฏิบัติงาน </span>100.00%
                    </div>
                  </div>
                </div>
                <hr />

                <div class="row gy-2">
                  <div class="col-12 col-md-2">
                    <div class="d-flex">
                      <span class="d-md-none w-50">ห้องที่ปรึกษา: </span>E6
                    </div>
                  </div>
                  <div class="col-12 col-md-2">
                    <div class="d-flex">
                      <span class="d-md-none w-50">สัปดาห์ปฏิบัติทั้งหมด: <br />18:</span>
                      <div>
                        <div class="d-block">18</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-2">
                    <div class="d-flex">
                      <span class="d-md-none w-50">สัปดาห์ที่ปฏิบัติงาน </span>18
                    </div>
                  </div>
                  <div class="col-12 col-md-3">
                    <div class="d-flex">
                      <span class="d-md-none w-50">สัปดาห์ที่ไม่ได้ปฏิบัติงาน </span>0
                    </div>
                  </div>
                  <div class="col-12 col-md-1">
                    <div class="d-flex">
                      <span class="d-md-none w-50">ร้อยละ </span>100.00%
                    </div>
                  </div>
                  <div class="col-12 col-md-2">
                    <div class="d-flex">
                      <span class="d-md-none w-50">สรุปผลปฏิบัติงาน </span>100.00%
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