<?php

if (isset($_REQUEST['delete_id'])) {
  $id = $_REQUEST['delete_id'];

  $select_stmt = $db->prepare("SELECT * FROM tbl_person WHERE id = :id");
  $select_stmt->bindParam(':id', $id);
  $select_stmt->execute();
  $row = $select_stmt->fetch(PDO::FETCH_ASSOC);

  // Delete an original record from db
  $delete_stmt = $db->prepare('DELETE FROM tbl_person WHERE id = :id');
  $delete_stmt->bindParam(':id', $id);
  $delete_stmt->execute();

  header('Location:index.php');
}
?>

<head>

  <link rel="stylesheet" href="./web/asset/css/cssfonten/Sales-order-2.css">
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
    <span class="Document-information">ข้อมูลเอกสาร</span>
    <div class="box-1">
      <table>
        <tr>
          <td class="Sales-order">ใบสั่งขาย</td>
          <td class="Sales-order1">เลขที่</td>
          <td class="Sales-order2">#PO-20240600002 <a href=""><svg width="17" height="19" viewBox="0 0 17 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.65358 3.45986L13.9041 8.21068L4.67424 18.5269L0.884537 18.9945C0.377206 19.0572 -0.0514349 18.5777 0.0050089 18.0107L0.426678 13.772L9.65358 3.45986ZM16.5331 2.75254L14.5373 0.521859C13.9148 -0.173953 12.9051 -0.173953 12.2825 0.521859L10.405 2.62043L14.6555 7.37125L16.5331 5.27268C17.1556 4.5765 17.1556 3.44835 16.5331 2.75254Z" fill="#3B3C66" />
              </svg>
            </a></td>
        </tr>
      </table>
      <div class="box-button">
        <button type="button" class="documents"><svg width="20" height="20" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M23.2417 0.15775L0.609861 13.2144C-0.273928 13.7222 -0.161624 14.9527 0.717283 15.3238L5.90771 17.5015L19.936 5.13822C20.2046 4.89896 20.5854 5.26517 20.356 5.54349L8.59326 19.8745V23.8052C8.59326 24.9576 9.98486 25.4117 10.6685 24.5767L13.769 20.8023L19.853 23.3511C20.5464 23.6441 21.3374 23.2095 21.4644 22.4624L24.98 1.36869C25.146 0.38236 24.0864 -0.330531 23.2417 0.15775Z" fill="white" />
          </svg>
          ส่งเอกสาร</button>
        <button type="button" class="print"><svg width="20" height="20" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M21.875 9.375V3.77197C21.875 3.35742 21.7104 2.96045 21.4175 2.66699L19.2075 0.45752C18.9146 0.164551 18.5171 0 18.1025 0H4.6875C3.82471 0 3.125 0.699707 3.125 1.5625V9.375C1.39893 9.375 0 10.7739 0 12.5V17.9688C0 18.4004 0.349609 18.75 0.78125 18.75H3.125V23.4375C3.125 24.3003 3.82471 25 4.6875 25H20.3125C21.1753 25 21.875 24.3003 21.875 23.4375V18.75H24.2188C24.6504 18.75 25 18.4004 25 17.9688V12.5C25 10.7739 23.6011 9.375 21.875 9.375ZM18.75 21.875H6.25V17.1875H18.75V21.875ZM18.75 10.9375H6.25V3.125H15.625V5.46875C15.625 5.90039 15.9746 6.25 16.4062 6.25H18.75V10.9375ZM21.0938 14.4531C20.4468 14.4531 19.9219 13.9282 19.9219 13.2812C19.9219 12.6338 20.4468 12.1094 21.0938 12.1094C21.7407 12.1094 22.2656 12.6338 22.2656 13.2812C22.2656 13.9282 21.7407 14.4531 21.0938 14.4531Z" fill="white" />
          </svg> พิมพ์เอกสาร</button>
        <button type="button" class="choice"><svg width="15" height="15" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M21.0938 18.75H0.78125C0.57405 18.75 0.375336 18.8323 0.228823 18.9788C0.0823101 19.1253 0 19.324 0 19.5312L0 21.0938C0 21.301 0.0823101 21.4997 0.228823 21.6462C0.375336 21.7927 0.57405 21.875 0.78125 21.875H21.0938C21.301 21.875 21.4997 21.7927 21.6462 21.6462C21.7927 21.4997 21.875 21.301 21.875 21.0938V19.5312C21.875 19.324 21.7927 19.1253 21.6462 18.9788C21.4997 18.8323 21.301 18.75 21.0938 18.75ZM21.0938 12.5H0.78125C0.57405 12.5 0.375336 12.5823 0.228823 12.7288C0.0823101 12.8753 0 13.074 0 13.2812L0 14.8438C0 15.051 0.0823101 15.2497 0.228823 15.3962C0.375336 15.5427 0.57405 15.625 0.78125 15.625H21.0938C21.301 15.625 21.4997 15.5427 21.6462 15.3962C21.7927 15.2497 21.875 15.051 21.875 14.8438V13.2812C21.875 13.074 21.7927 12.8753 21.6462 12.7288C21.4997 12.5823 21.301 12.5 21.0938 12.5ZM21.0938 6.25H0.78125C0.57405 6.25 0.375336 6.33231 0.228823 6.47882C0.0823101 6.62534 0 6.82405 0 7.03125L0 8.59375C0 8.80095 0.0823101 8.99966 0.228823 9.14618C0.375336 9.29269 0.57405 9.375 0.78125 9.375H21.0938C21.301 9.375 21.4997 9.29269 21.6462 9.14618C21.7927 8.99966 21.875 8.80095 21.875 8.59375V7.03125C21.875 6.82405 21.7927 6.62534 21.6462 6.47882C21.4997 6.33231 21.301 6.25 21.0938 6.25ZM21.0938 0H0.78125C0.57405 0 0.375336 0.08231 0.228823 0.228823C0.0823101 0.375336 0 0.57405 0 0.78125L0 2.34375C0 2.55095 0.0823101 2.74966 0.228823 2.89618C0.375336 3.04269 0.57405 3.125 0.78125 3.125H21.0938C21.301 3.125 21.4997 3.04269 21.6462 2.89618C21.7927 2.74966 21.875 2.55095 21.875 2.34375V0.78125C21.875 0.57405 21.7927 0.375336 21.6462 0.228823C21.4997 0.08231 21.301 0 21.0938 0Z" fill="white" />
          </svg>
          ตัวเลือก</button>
      </div>
      <table class="cir">
        <tr class="cir1">
          <td>
            <div class="circle"></div>
          </td>
          <td><span class="Waiting-approval">รออนุมัติ</span></td>
        </tr>
        <tr class="Seller">
          <td><svg width="22" height="25" viewBox="0 0 22 25" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M21.2891 23.4375H20.3125V1.17188C20.3125 0.524658 19.7878 0 19.1406 0H2.73438C2.08716 0 1.5625 0.524658 1.5625 1.17188V23.4375H0.585938C0.262354 23.4375 0 23.6999 0 24.0234V25H21.875V24.0234C21.875 23.6999 21.6126 23.4375 21.2891 23.4375ZM6.25 3.71094C6.25 3.38735 6.51235 3.125 6.83594 3.125H8.78906C9.11265 3.125 9.375 3.38735 9.375 3.71094V5.66406C9.375 5.98765 9.11265 6.25 8.78906 6.25H6.83594C6.51235 6.25 6.25 5.98765 6.25 5.66406V3.71094ZM6.25 8.39844C6.25 8.07485 6.51235 7.8125 6.83594 7.8125H8.78906C9.11265 7.8125 9.375 8.07485 9.375 8.39844V10.3516C9.375 10.6751 9.11265 10.9375 8.78906 10.9375H6.83594C6.51235 10.9375 6.25 10.6751 6.25 10.3516V8.39844ZM8.78906 15.625H6.83594C6.51235 15.625 6.25 15.3626 6.25 15.0391V13.0859C6.25 12.7624 6.51235 12.5 6.83594 12.5H8.78906C9.11265 12.5 9.375 12.7624 9.375 13.0859V15.0391C9.375 15.3626 9.11265 15.625 8.78906 15.625ZM12.5 23.4375H9.375V19.3359C9.375 19.0124 9.63735 18.75 9.96094 18.75H11.9141C12.2376 18.75 12.5 19.0124 12.5 19.3359V23.4375ZM15.625 15.0391C15.625 15.3626 15.3626 15.625 15.0391 15.625H13.0859C12.7624 15.625 12.5 15.3626 12.5 15.0391V13.0859C12.5 12.7624 12.7624 12.5 13.0859 12.5H15.0391C15.3626 12.5 15.625 12.7624 15.625 13.0859V15.0391ZM15.625 10.3516C15.625 10.6751 15.3626 10.9375 15.0391 10.9375H13.0859C12.7624 10.9375 12.5 10.6751 12.5 10.3516V8.39844C12.5 8.07485 12.7624 7.8125 13.0859 7.8125H15.0391C15.3626 7.8125 15.625 8.07485 15.625 8.39844V10.3516ZM15.625 5.66406C15.625 5.98765 15.3626 6.25 15.0391 6.25H13.0859C12.7624 6.25 12.5 5.98765 12.5 5.66406V3.71094C12.5 3.38735 12.7624 3.125 13.0859 3.125H15.0391C15.3626 3.125 15.625 3.38735 15.625 3.71094V5.66406Z" fill="#3B3C66" />
            </svg>
          </td>
          <td>
            <div class="information"><span class="Seller-information">ข้อมูลผู้ขาย</span></div>
          </td>
          <td>
            <div class="name-sell">
              <span class="name-sell1">ชื่อผู้ขาย <a href=""><svg width="17" height="19" viewBox="0 0 17 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.65358 3.45986L13.9041 8.21068L4.67424 18.5269L0.884537 18.9945C0.377206 19.0572 -0.0514349 18.5777 0.0050089 18.0107L0.426678 13.772L9.65358 3.45986ZM16.5331 2.75254L14.5373 0.521859C13.9148 -0.173953 12.9051 -0.173953 12.2825 0.521859L10.405 2.62043L14.6555 7.37125L16.5331 5.27268C17.1556 4.5765 17.1556 3.44835 16.5331 2.75254Z" fill="#3B3C66" />
                  </svg>
                </a></span><br>
              <span class="channel-customers">ลูกค้าช่องทางออนไลน์ 1</span>
            </div>
          </td>
          <td>
            <div class="name-sell2">
              <span class="name-sell1">ที่อยู่ <a href=""><svg width="17" height="19" viewBox="0 0 17 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.65358 3.45986L13.9041 8.21068L4.67424 18.5269L0.884537 18.9945C0.377206 19.0572 -0.0514349 18.5777 0.0050089 18.0107L0.426678 13.772L9.65358 3.45986ZM16.5331 2.75254L14.5373 0.521859C13.9148 -0.173953 12.9051 -0.173953 12.2825 0.521859L10.405 2.62043L14.6555 7.37125L16.5331 5.27268C17.1556 4.5765 17.1556 3.44835 16.5331 2.75254Z" fill="#3B3C66" />
                  </svg>
                </a></span><br>
              <span class="channel-customers">-</span>
            </div>
          </td>
          <td class="name-sel">
            <div class="name-sell3">
              <span class="name-sell1">วันที่ออก <a href=""><svg width="17" height="19" viewBox="0 0 17 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.65358 3.45986L13.9041 8.21068L4.67424 18.5269L0.884537 18.9945C0.377206 19.0572 -0.0514349 18.5777 0.0050089 18.0107L0.426678 13.772L9.65358 3.45986ZM16.5331 2.75254L14.5373 0.521859C13.9148 -0.173953 12.9051 -0.173953 12.2825 0.521859L10.405 2.62043L14.6555 7.37125L16.5331 5.27268C17.1556 4.5765 17.1556 3.44835 16.5331 2.75254Z" fill="#3B3C66" />
                  </svg>
                </a></span><br>
              <input type="date">
            </div>
          </td>
          <td class="name-sel">
            <div class="name-sell3">
              <span class="name-sell1">วันที่ใช้ได้ถึง <a href=""><svg width="17" height="19" viewBox="0 0 17 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.65358 3.45986L13.9041 8.21068L4.67424 18.5269L0.884537 18.9945C0.377206 19.0572 -0.0514349 18.5777 0.0050089 18.0107L0.426678 13.772L9.65358 3.45986ZM16.5331 2.75254L14.5373 0.521859C13.9148 -0.173953 12.9051 -0.173953 12.2825 0.521859L10.405 2.62043L14.6555 7.37125L16.5331 5.27268C17.1556 4.5765 17.1556 3.44835 16.5331 2.75254Z" fill="#3B3C66" />
                  </svg>
                </a></span><br>
              <input type="date">
            </div>
          </td>
        </tr>
        <tr class="Seller">
          <td><svg width="15" height="15" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4.75 9.16481C7.37522 9.16481 9.5 7.30219 9.5 5.00086C9.5 2.69954 7.37522 0.836914 4.75 0.836914C2.12478 0.836914 0 2.69954 0 5.00086C0 7.30219 2.12478 9.16481 4.75 9.16481ZM4.75 3.21631C5.87388 3.21631 6.78571 4.01564 6.78571 5.00086C6.78571 5.98608 5.87388 6.78541 4.75 6.78541C3.62612 6.78541 2.71429 5.98608 2.71429 5.00086C2.71429 4.01564 3.62612 3.21631 4.75 3.21631ZM14.25 11.5442C11.6248 11.5442 9.5 13.4068 9.5 15.7082C9.5 18.0095 11.6248 19.8721 14.25 19.8721C16.8752 19.8721 19 18.0095 19 15.7082C19 13.4068 16.8752 11.5442 14.25 11.5442ZM14.25 17.4927C13.1261 17.4927 12.2143 16.6934 12.2143 15.7082C12.2143 14.7229 13.1261 13.9236 14.25 13.9236C15.3739 13.9236 16.2857 14.7229 16.2857 15.7082C16.2857 16.6934 15.3739 17.4927 14.25 17.4927ZM16.6377 0.84435L17.9779 0.840632C18.8007 0.836914 19.2884 1.65111 18.8134 2.24596L3.28259 19.4854C3.18895 19.6025 3.06452 19.6981 2.91983 19.7641C2.77514 19.8301 2.61445 19.8646 2.45134 19.8647L1.03482 19.8684C0.207812 19.8684 -0.27567 19.0542 0.19933 18.463L15.8065 1.22357C15.9973 0.985626 16.3069 0.84435 16.6377 0.84435Z" fill="#3B3C66" />
            </svg>
          </td>
          <td>
            <div class="Seller-information1"></div><span class="Seller-information">ข้อมูลราคาและภาษี</span>
          </td>
          <td>
            <div class="name-sell">
              <span class="name-sell3">ประเภทราคา <br>
                <span class="channel-customers1">เเยกภาษี</span>
            </div>
          </td>
        </tr>
        <tr class="Sapproval">
          <td>
            <div class="circle1"></div>
          </td>
          <td><span class="Waiting-approval1">รายการ</span></td>
        </tr>
      </table>
      <div class="mt-2 ">
        <div class="card-body table-responsive p-3 bg-white rounded-3">
          <table id="table_main"
            class="table table-sm  table-bordered table-striped table-hover table-head-fixed text-nowrap   ">
            <thead>
              <tr>
                <td>เลขที่เอกสาร</td>
                <td>ชื่อลูกค้า</td>
                <td>วันที่ออก</td>
                <td>ใช้ได้ถึง</td>
                <td>มูลค่าสุทธิ</td>
                <td>สถานะ</td>
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
          <table class="star">
            <tr>
              <td>
                <div class="dt-layout-row ">
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
    </div>
    <div class="container-fluid ">

    </div>
  </div>
</section>