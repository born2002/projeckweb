<head>

  <link rel="stylesheet" href="./web/asset/css/cssfonten/receipt.css">
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
    <span>ใบเสร็จรับเงิน </span>
  </div>
  <div class="text">
    <span class="Sales-order">ใบเสร็จรับเงิน</span>
    <button class=" btn-Following" type="submit" data-toggle="modal" data-target="#myModal"><a class="sangbai" href="receipt1.php">+ สร้างใบเสร็จรับเงิน</a></button>
    <button class=" btn-Following1" type="submit" data-toggle="modal" data-target="#myModal"><img src="web/asset/image/print.png" alt=""> พิมพ์รายงาน</button>
  </div>
  <div class="container-fluid ">
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
              <option value="cancle">ชำระเเล้ว</option>
              <option value="cancle">ถังขยะ</option>
              <option value="cancle">เอกสารรายเดือน</option>
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
            <?php foreach (range(start: 1, end: 1) as $key  => $data) { ?>
              <?php
              $date = date_create(datetime: "2024-08-01 12:00:1");
              ?>
              <tr>
                <!-- <td align="center"><?= $order++ ?></td> -->
                <td>1</td>
                <td>10524</td>
                <td>xxx-xxx-xxxx</td>
                <td><?= date_format(object: $date, format: "d/m/Y"); ?></td>
                <td><?= date_format(object: $date, format: "d/m/Y"); ?></td>
                <td><?= number_format(num: 100) ?></td>
                <td> <i class="fas fa-clock">ทำงานอยู่</i></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
        <table class="star">
          <tr>
            <td>
              <div class="dt-layout-row">
                <div class="dt-layout-start">
                  <div class="dt-info" aria-live="polite" id="example_info" role="status">Showing 1 to 1 of 0 entries</div>
                </div>
              </div>
            </td>
            <td>
              <div class="dt-layout-end">
                <div class="dt-paging">
                  <nav aria-label="pagination"><button class="dt-paging-button disabled first" role="link" type="button" aria-controls="example" aria-disabled="true" aria-label="First" data-dt-idx="first" tabindex="-1">«</button><button class="dt-paging-button disabled previous" role="link" type="button" aria-controls="example" aria-disabled="true" aria-label="Previous" data-dt-idx="previous" tabindex="-1">‹</button><button class="dt-paging-button current" role="link" type="button" aria-controls="example" aria-current="page" data-dt-idx="0">1</button><button class="dt-paging-button" role="link" type="button" aria-controls="example" data-dt-idx="1">2</button><button class="dt-paging-button" role="link" type="button" aria-controls="example" data-dt-idx="2">3</button><button class="dt-paging-button" role="link" type="button" aria-controls="example" data-dt-idx="3">4</button><button class="dt-paging-button" role="link" type="button" aria-controls="example" data-dt-idx="4">5</button><button class="dt-paging-button" role="link" type="button" aria-controls="example" data-dt-idx="5">6</button><button class="dt-paging-button next" role="link" type="button" aria-controls="example" aria-label="Next" data-dt-idx="next">›</button><button class="dt-paging-button last" role="link" type="button" aria-controls="example" aria-label="Last" data-dt-idx="last">»</button></nav>
                </div>
              </div>
            </td>
          </tr>
        </table>
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