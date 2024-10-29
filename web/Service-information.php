<head>

  <link rel="stylesheet" href="./web/asset/css/cssfonten/Service-information.css">
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
    <span>ข้อมูลบริการ </span>
  </div>
  <div class="text">
    <span class="Sales-order">ข้อมูลบริการที่ติดตาม</span>
    <button class=" btn-Following" type="submit" data-toggle="modal" data-target="#myModal"> + เพิ่มข้อมูลบริการ</button>
  </div>
  <div class="container-fluid ">
    <div class="d-flex justify-content-between  align-items-end">
      <div class="w-100 w-lg-60">
        <form class="row w-100" id="searchContent">
          <div class="col-lg-3 mb-2">
            <label class="mb-0">สถานะ</label>
            <select name="selecttype" id="selecttype" class="form-select">
              <option value="All" selected>ทั้งหมด</option>
              <option value="wait">ปิดการใช้งาน</option>
            </select>
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

              <th>รหัส</th>
              <th>ชื่อโปรเจค</th>
              <th>เรทราคา</th>
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
                <td>project</td>
                <td><?= number_format(100) ?></td>
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
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <div class="col-6">
          <div class="servict">
            <th scope="col">เพิ่มข้อมูลการบริการ</th>
          </div>
        </div>
        <div class="col-6">
          <div class="produck">
            <th scope="col">เลขสินค้า</th>
            <div class="p0005">
              <th scope="col">P00005</th>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-body">
        <div class="input-group1">
          <div class="type">
            <th scope="col">ประเภท</th>
          </div>
          <div class="project">
            <input type="radio" name="sex" id="" value="male"> โปรเจค <br>
          </div>
        </div>
        <div class="input-group2">
          <div class="type">
            <th scope="col">ข้อมูลโปรเจค</th>
          </div>
          <div class="project">
            <input type="text" name="username" id="" class="project-1" placeholder="กรุณากรอกชื่อโปรเจค">
          </div>
        </div>
        <div class="input-group3">
          <div class="type">
            <th scope="col">เรทราคา</th>
          </div>
          <div class="project">
            <input type="number" name="number" id="number" class="project-1" placeholder="0.00">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" id="btnSearch" class="primary">เพืมรายชื่อ</button>
        <button type="button" class="default" data-dismiss="modal">ยกเลิก</button>
      </div>
    </div>
  </div>
</div>