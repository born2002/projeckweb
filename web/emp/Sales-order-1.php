<head>

  <link rel="stylesheet" href="./web/asset/css/cssfonten/Sales-order-1.css">
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
    <span>ใบสั่งขาย</span>
  </div>
  <div class="box-sales-order">
    <div class="row">
      <div class="col-6 sr">
        <div class="servict">
          <th scope="above">ใบสั่งขาย</th>
        </div>
      </div>
      <div class="col-6 sr">
        <div class="produck">
          <th scope="col">เลขที่เอกสาร</th>
          <div class="p0005">
            <th scope="col">PO-20240600002</th>
          </div>
        </div>
      </div>
    </div>
    <div class="sur"></div>
    <div class="Seller-information">
      <div class="row">
        <div class="col-2">
          <div class="checkbox-disabled">
            <input type="checkbox" id="scales" name="scales" checked disabled />
            <label for="scales"> ข้อมูลผู้ขาย</label>
          </div>
        </div>
        <div class="col-4">
          <div class="name-seller">
            <span class="name-seller-1">ชื่อผู้ขาย</span>
            <input type="text" class="form-control5">
          </div>
          <div class="name-seller">
            <span class="name-seller-1">ที่อยู่</span>
            <input type="text" class="form-control6">
          </div>
        </div>
        <div class="col-4">
          <div class="name-seller">
            <span class="name-seller-1">เบอร์โทร</span>
            <input type="text" class="form-control5">
          </div>
        </div>
        <div class="col-2">
          <div class="produck">
            <th scope="col">วันที่ออก</th>
            <div class="p0005">
              <input type="date" id="day" name="day" class="day">
            </div>
          </div>
        </div>
      </div>
      <div class="sur"></div>
    </div>
    <div class="row">
      <div class="col-2">
        <div class="checkbox-disabled">
          <input type="checkbox" id="scales" name="scales" checked disabled />
          <label for="scales"> ข้อมูลราคาและภาษี</label>
        </div>
      </div>
      <div class="col-4">
        <div class="name-seller">
          <span class="name-seller-2">ประเภทราคา</span>
          <select name="template_name" type="text" required name="name" class="form-control7" autocomplete="off" placeholder="<?php echo $lang_template_name; ?>" value="ตำเเหน่ง">
            <option value="ตำเเหน่ง">เเยกภาษี</option>
            <option value="Design">Design</option>
            <option value="......">......</option>
            <option value="......">......</option>
          </select>
        </div>
      </div>
    </div>
    <div class="sur"></div>
    <div class="">
      <div class="checkbox-disabled">
        <input type="checkbox" id="scales" name="scales" checked disabled />
        <label for="scales"> รายการ</label>
      </div>
    </div>
    <div class="xo">
      <div class="row">
        <div class="col-6">
          <div class="name-m1">
            <span class="name-seller-2">โปรเจ็ค:</span>
            <select name="template_name" type="text" required name="name" class="form-control8" autocomplete="off" placeholder="<?php echo $lang_template_name; ?>" value="ตำเเหน่ง">
              <option value="ตำเเหน่ง">.....</option>
            </select>
          </div>
        </div>
        <div class="col-3">
          <div class="name-m1">
            <span class="name-seller-2">เลขที่อ้างอิง:
            </span>
            <input type="text" class="form-control9">
          </div>
        </div>
        <div class="col-3">
          <div class="name-m1">
            <span class="name-seller-2">ราคาสินค้า:</span>
            <select name="template_name" type="text" required name="name" class="form-control10" autocomplete="off" placeholder="<?php echo $lang_template_name; ?>" value="ตำเเหน่ง">
              <option value="ตำเเหน่ง">......</option>
            </select>
          </div>
        </div>
        <div class="col-12">
          <div class="name-m1">
            <span class="name-seller-2">รายละเอียด:</span>
            <input type="text" class="form-control11">
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid ">
      <div class="mt-2 ">
        <div class="card-body table-responsive p-3 bg-white rounded-3">
          <table id="table_main"
            class="table table-sm  table-bordered table-striped table-hover table-head-fixed text-nowrap   ">
            <thead>
              <tr>
                <th><svg xmlns="http://www.w3.org/2000/svg" height="14" width="12.25" viewBox="0 0 448 512">Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.
                    <path d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z" />
                  </svg>
                </th>
                <th>ชื่อสินค้า / รายละเอียด</th>
                <th>จำนวน </th>
                <th>หน่วย</th>
                <th>ราคาต่อหน่วย</th>
                <th>ราคารวม </th>
              </tr>
            </thead>
            <tbody>
              <?php foreach (range(1, 1) as $key  => $data) { ?>
                <?php
                $date = date_create("2024-08-01 12:00:1");
                ?>
                <tr>

                  <td>1</td>
                  <td>
                    <div class="name-m1">
                      <select name="template_name" type="text" required name="name" class="form-control13" autocomplete="off" placeholder="ชื่อสินค้า" value="ตำเเหน่ง">
                        <option value="ตำเเหน่ง">ชื่อสินค้า</option>
                      </select>
                    </div>
                    <input type="text" name="" id="" placeholder="ชื่อสินค้า" class="form-control14">
                  </td>
                  <td> <input type="text" name="" id="" placeholder="1.00" class="form-control15"></td>
                  <td> <input type="text" name="" id="" placeholder="" class="form-control16"></td>
                  <td> <input type="text" name="" id="" placeholder="0.00" class="form-control17"></td>
                  <td><?= number_format(0.00) ?></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="button-pprimary"><button type="button" class="btn btn-primary"><a href="" class="new-item">+ รายการใหม่</a></button></div>
      <div class="row">
        <div class="col-3">
          <div class="Sarapu">
            <svg xmlns="http://www.w3.org/2000/svg" height="10" width="10" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path fill="#878787" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z" />
            </svg>
            <label for="scales"> สรุป </label>
          </div>
        </div>
        <div class="col-3">
          <div class="total">
            <div class="">
              <input class="checkbox1" type="checkbox" id="scales" name="scales" checked />
              <span class="Total-discount">มูลค่าส่วนลดรวม</span>
            </div>
            <div class="">
              <span class="Total-discount">มูลค่ารายการยกเว้นภาษี</span>
            </div>
            <div class="">
              <span class="Total-discount">มูลค่ารายการภาษี 0%</span>
            </div>
            <div class="">
              <span class="Total-discount">มูลค่ารายการภาษี 7%</span>
            </div>
            <div class="">
              <span class="Total-discount">ภาษีมูลค่าเพิ่มรวม</span>
            </div>
          </div>
        </div>
        <div class="col-2">
          <div class="">
            <span>0.00 บาท</span>
          </div>
          <div class="">
            <span>0.00 บาท</span>
          </div>
          <div class="">
            <span>0.00 บาท</span>
          </div>
          <div class="">
            <span>0.00 บาท</span>
          </div>
          <div class="">
            <span>0.00 บาท</span>
          </div>
        </div>
        <div class="col-4 ">
          <div class="Total-worth">
            <table class="Total-net-worth">
              <tr>
                <td scope="col" class="name1">มูลค่าสุทธิรวม </td>
                <td class="name">0.00 บาท</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <div class="button-42">
        <button type="button" class="button">ยกเลิก</button>
        <button type="button" class="button1">บันทึกเเบบร่าง</button>
        <button type="button" class="button2"><a href="Sales-order-2.php">อนุมัติใบสั่งซื้อ</a> </button>
      </div>
    </div>
    </tbody>
  </div>
</section>