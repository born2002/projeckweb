<head>

  <link rel="stylesheet" href="./web/asset/css/cssfonten/paste-leaves1.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
</head>

<aside>
  <?php include("web/layout/slidebar.php"); ?>
</aside>

<section>
  <div class="headbar">
    <span>ใบวางบิล </span>
  </div>
  <div class="text">
    <span class="Sales-order">เลือกเอกสารสร้างใบวางบิล</span>
  </div>
  <div class="container-fluid ">
    <div class="row mt-4">
      <div class="col-2">
        <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M9 9.5C11.8406 9.5 14.1429 7.37363 14.1429 4.75C14.1429 2.12637 11.8406 0 9 0C6.15938 0 3.85714 2.12637 3.85714 4.75C3.85714 7.37363 6.15938 9.5 9 9.5ZM12.6 10.6875H11.929C11.0371 11.066 10.0446 11.2812 9 11.2812C7.95536 11.2812 6.96696 11.066 6.07098 10.6875H5.4C2.41875 10.6875 0 12.9215 0 15.675V17.2188C0 18.2021 0.863839 19 1.92857 19H16.0714C17.1362 19 18 18.2021 18 17.2188V15.675C18 12.9215 15.5813 10.6875 12.6 10.6875Z" fill="#7C7C7C" />
        </svg>
        <span class="Select-contact">เลือกผู้ติดต่อ</span>
      </div>
      <div class="col-3 ">
        <input type="text" name="" id="" class="box-fluid" placeholder="ชื่อผู้ขาย ">
      </div>
    </div>
    <div class="row mt-4 mb-5">
      <div class="col-2">
        <svg width="22" height="25" viewBox="0 0 22 25" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M15.5459 10.1562H13.6372C13.5645 11.4761 13.3179 12.6636 12.9434 13.5942C14.2964 12.9478 15.2881 11.6807 15.5459 10.1562ZM15.5459 8.59375C15.2876 7.06934 14.2964 5.80225 12.9434 5.15576C13.3184 6.08643 13.5645 7.27393 13.6372 8.59375H15.5459ZM10.9375 4.75146C10.562 5.11523 9.92334 6.43213 9.79346 8.59375H12.082C11.9517 6.43262 11.313 5.11523 10.9375 4.75146ZM8.93164 5.15576C7.57861 5.80225 6.58691 7.06934 6.3291 8.59375H8.23779C8.31055 7.27393 8.55664 6.08643 8.93164 5.15576ZM8.93164 13.5942C8.55664 12.6636 8.31055 11.4761 8.23779 10.1562H6.3291C6.58691 11.6807 7.57861 12.9478 8.93164 13.5942ZM12.0815 10.1562H9.79297C9.92285 12.3174 10.5615 13.6348 10.937 13.9985C11.313 13.6348 11.9517 12.3174 12.0815 10.1562ZM21.875 17.5V1.25C21.875 0.46875 21.4062 0 20.625 0H4.6875C2.03125 0 0 2.03125 0 4.6875V20.3125C0 22.9688 2.03125 25 4.6875 25H20.625C21.25 25 21.875 24.5312 21.875 23.75V22.9688C21.875 22.6562 21.7188 22.3438 21.4062 22.0312C21.25 21.25 21.25 19.0625 21.4062 18.4375C21.7188 18.2812 21.875 17.9688 21.875 17.5ZM10.9375 3.125C14.3892 3.125 17.1875 5.92334 17.1875 9.375C17.1875 12.8267 14.3892 15.625 10.9375 15.625C7.48584 15.625 4.6875 12.8267 4.6875 9.375C4.6875 5.92334 7.48584 3.125 10.9375 3.125ZM18.75 21.875H4.6875C3.75 21.875 3.125 21.25 3.125 20.3125C3.125 19.375 3.90625 18.75 4.6875 18.75H18.75V21.875Z" fill="#7C7C7C" />
        </svg>

        <span class="Select-contact">ประเภทเอกสาร</span>
      </div>
      <div class="col-3 box-fluid-1">
        <input type="text" name="" id="" class="box-fluid" placeholder="ประเภทเอกสาร ">
      </div>
    </div>

    <div class="d-flex justify-content-between  align-items-end">
      <div class="w-100 w-lg-60">
        <form class="row w-100" id="searchContent">
          <div class="col-lg-3 mb-2">
            <label class="mb-0">สถานะ</label>
            <select name="selecttype" id="selecttype" class="form-select">
              <option value="All" selected>ทั้งหมด</option>
              <option value="wait">ร่าง</option>
              <option value="process">รออนุมัติ</option>
              <option value="in-ship">รอชำระ</option>
              <option value="cancle">เกินเวลาชำระห</option>
              <option value="cancle">ชำระเเล้ว</option>
              <option value="cancle">ถังขยะ</option>
            </select>
          </div>
          <div class="col-lg-3 mb-2">
            <label class="mb-0">ตั้งเเต่วันที่ทำรายการ</label>
            <div class="d-flex gap-2 align-items-center">
              <input type="date" class="form-control" name="date-start">
              <span class="ขีด">-</span>
              <input type="date" class="form-control" name="date-end">
              <button class="btn btn-admin-add" type="submit"><svg xmlns="http://www.w3.org/2000/svg" height="14" width="14" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                  <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                </svg><i class="fas fa-search"></i></button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="mt-2 ">
      <div class="card-body table-responsive p-3 bg-white rounded-3">
        <table id="table_main"
          class="table table-sm  table-bordered table-striped table-hover table-head-fixed text-nowrap   ">
          <thead>
            <tr>
              <th><input type="checkbox" id="scales" name="scales" checked />
                <label for="scales"></label>
              </th>
              <th>เลขที่เอกสาร</th>
              <th>ชื่อลูกค้า</th>
              <th>วันที่ออก</th>
              <th>ใช้ได้ถึง</th>
              <th>มูลค่าสุทธิ</th>
              <th>สถานะ</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach (range(1, 1) as $key  => $data) { ?>
              <?php
              $date = date_create("2024-08-01 12:00:1");
              ?>
              <tr>
                <!-- <td align="center"><?= $order++ ?></td> -->
                <td>1</td>
                <td>10524</td>
                <td>xxx-xxx-xxxx</td>
                <td><?= date_format($date, "d/m/Y"); ?></td>
                <td><?= date_format($date, "d/m/Y"); ?></td>
                <td><?= number_format(100) ?></td>
                <td> <i class="fas fa-clock">ทำงานอยู่</i></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
        <table class=" star">
          <tr>
            <td>
              <div class=" dt-layout">
                <div class=" dt-layout-start">
                  <div class="dt-info" aria-live="polite" id="example_info" role="status">Showing 1 to 1 of 0 entries</div>
                </div>
              </div>
            </td>
            <td>
              <div class=" dt-layout-end">
                <div class="dt-paging">
                  <nav aria-label="pagination"><button class="dt-paging-button disabled first" role="link" type="button" aria-controls="example" aria-disabled="true" aria-label="First" data-dt-idx="first" tabindex="-1">«</button><button class="dt-paging-button disabled previous" role="link" type="button" aria-controls="example" aria-disabled="true" aria-label="Previous" data-dt-idx="previous" tabindex="-1">‹</button><button class="dt-paging-button current" role="link" type="button" aria-controls="example" aria-current="page" data-dt-idx="0">1</button><button class="dt-paging-button" role="link" type="button" aria-controls="example" data-dt-idx="1">2</button><button class="dt-paging-button" role="link" type="button" aria-controls="example" data-dt-idx="2">3</button><button class="dt-paging-button" role="link" type="button" aria-controls="example" data-dt-idx="3">4</button><button class="dt-paging-button" role="link" type="button" aria-controls="example" data-dt-idx="4">5</button><button class="dt-paging-button" role="link" type="button" aria-controls="example" data-dt-idx="5">6</button><button class="dt-paging-button next" role="link" type="button" aria-controls="example" aria-label="Next" data-dt-idx="next">›</button><button class="dt-paging-button last" role="link" type="button" aria-controls="example" aria-label="Last" data-dt-idx="last">»</button></nav>
                </div>
              </div>
            </td>
          </tr>
        </table>
        <div class="butr">
          <button type="button" class="btn btn-primary"> <a href="paste-leaves2.php">ถัดไป</a>
          </button>
        </div>

      </div>
    </div>
  </div>
</section>



<script>
  const fetchData = async () => {
    let table = new DataTable('#table_main', {
      "fixedHeader": true,
      "responsive": false,
      "lengthChange": true,
      "searching": true,
      "autoWidth": false,
    }).buttons().container().appendTo('#table_main_wrapper .col-md-6:eq(0)');
  }

  fetchData();
</script>