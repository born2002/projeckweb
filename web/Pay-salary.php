<head>

  <link rel="stylesheet" href="./web/asset/css/cssfonten/Pay-salary.css">
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
    <span>จ่ายเงินเดือน/ค่าจ่าง </span>
  </div>
  <div class="text">
    <span class="Sales-order">จ่ายเงินเดือน/ค่าจ่าง</span>
    <button class=" btn-Following" type="submit" data-toggle="modal" data-target="#myModal">+ จ่ายเงินเดือน/ค่าจ่าง</button>
    <div class="container-fluid ">
      <div class="d-flex justify-content-between  align-items-end">
        <div class="w-100 w-lg-60">
          <form class="row w-100" id="searchContent">
          </form>
        </div>
      </div>
      <div class="mt-2 ">
        <div class="card-body table-responsive p-3 bg-white rounded-3">
          <table id="table_main"
            class="table table-sm  table-bordered table-striped table-hover table-head-fixed text-nowrap   ">
            <thead>
              <tr>
                <th>ช่วงวันที่</th>
                <th>วันที่ชำระ</th>
                <th>ค่าใช้จ่ายพนักงานรวม</th>
                <th>ยอดจ่ายรวมสุทธิ</th>
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
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>

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
        <div class="servict">
          <th scope="col">สร้างรายการเงินเดือน</th>
        </div>
      </div>
      <span class="Employee-type">กรุณาเลือกประเภทพนักงาน และช่องทางการชำระ เพื่อสร้างรายการเงินเดือน</span>
      <span class="Employee-1">ประเภทพนักงาน:</span>
      <div class="box-m">
        <div class="box-month ">
          <div class="row">
            <div class="col-2"><input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked></div>
            <div class="col-2"><svg width="40" height="40" viewBox="0 0 46 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48.0312C0 50.7744 2.20759 53 4.92857 53H41.0714C43.7924 53 46 50.7744 46 48.0312V19.875H0V48.0312ZM6.57143 28.1562C6.57143 27.2453 7.31071 26.5 8.21429 26.5H18.0714C18.975 26.5 19.7143 27.2453 19.7143 28.1562V38.0938C19.7143 39.0047 18.975 39.75 18.0714 39.75H8.21429C7.31071 39.75 6.57143 39.0047 6.57143 38.0938V28.1562ZM41.0714 6.625H36.1429V1.65625C36.1429 0.745312 35.4036 0 34.5 0H31.2143C30.3107 0 29.5714 0.745312 29.5714 1.65625V6.625H16.4286V1.65625C16.4286 0.745312 15.6893 0 14.7857 0H11.5C10.5964 0 9.85714 0.745312 9.85714 1.65625V6.625H4.92857C2.20759 6.625 0 8.85059 0 11.5938V16.5625H46V11.5938C46 8.85059 43.7924 6.625 41.0714 6.625Z" fill="#13AAEF" />
              </svg>
            </div>
            <div class="col-6">
              <div class="pre">
                <span class="">พนักงานรายเดือน</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <span class="Employee-1">ประเภทพนักงาน:</span>
      <div class="box-m">
        <div class="box-month1">
          <div class="row">
            <div class="col-2"><input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked></div>
            <div class="col-2"><svg width="50" height="38" viewBox="0 0 50 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 10.6411V9.12131C0 7.86222 1.04932 6.84155 2.34375 6.84155H37.5V2.28203C37.5 0.252382 40.0292 -0.761636 41.5011 0.669958L49.3136 8.26915C50.2288 9.15949 50.2288 10.603 49.3136 11.4932L41.5011 19.0924C40.0348 20.5184 37.5 19.5185 37.5 17.4804V12.9209H2.34375C1.04932 12.9209 0 11.9002 0 10.6411ZM47.6562 25.0796H12.5V20.5201C12.5 18.4955 9.97441 17.4728 8.49893 18.908L0.686426 26.5072C-0.228809 27.3976 -0.228809 28.841 0.686426 29.7313L8.49893 37.3305C9.9665 38.7579 12.5 37.7548 12.5 35.7185V31.159H47.6562C48.9507 31.159 50 30.1383 50 28.8792V27.3594C50 26.1003 48.9507 25.0796 47.6562 25.0796Z" fill="#3297FF" />
              </svg>

            </div>
            <div class="col-6">
              <div class="pre1">
                <span class="">จ่ายด้วยเงินโอน</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" id="btnSearch" class="primary-1">ถัดไป</button>
        <button type="button" class="default" data-dismiss="modal">ยกเลิก</button>
      </div>
    </div>
  </div>
</div>



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