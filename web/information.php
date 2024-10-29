<head>

  <link rel="stylesheet" href="./web/asset/css/cssfonten/information.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <title>รายชื่อลูกค้า</title>

</head>

<aside>
  <?php include("web/layout/slidebar.php"); ?>
</aside>
<section>

  <div class="headbar">
    <span>รายชื่อลูกค้า</span>
    <button type="button" class="btn-ont" data-toggle="modal" data-target="#myModal">เพิ่มรายชื่อลูกค้า</button>
  </div>
  <div class="search">
    <div class="form-outline" data-mdb-input-init>
      <input id="search-focus" type="search" id="form1" class="form-control">
      <a href=""><svg xmlns="http://www.w3.org/2000/svg" height="25" width="20" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
          <path fill="rgb(189, 189, 189)" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
        </svg></a>
    </div>
  </div>
  <div class="box1">
    <table class="table">
      <thead>
        <tr>
          <th scope="col"><img src="web/asset/image/crosswalk.png" alt=""></th>
          <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn"><svg xmlns="http://www.w3.org/2000/svg" height="30" width="30" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z" />
              </svg></button>
            <div id="myDropdown" class="dropdown-content">
              <a href="#Edit">เเก้ไข</a>
              <a href="#Dlete">ลบ</a>
            </div>
          </div>
          <th scope="col">
            <div class="Crosswalk">Crosswalk Agency
            </div>
          </th>
        </tr>

        <tr>
          <th scope="col" class="name1">ชื่อลูกค้า
          <td class="name">Crosswalk Agency</td>
          </th>
        </tr>
        <tr>
          <th scope="col" class="name1">เลขผู้เสียภาษี
          <td class="name">0994000160461</td>
          </th>
        <tr>
          <th scope="col" class="name1">บุคคลที่ติดต่อ (Ae)
          <td class="name"> P’Nooja</td>
          </th>
      </thead>
    </table>
    <tr>
      <td>
        <div class="button">
          <a href="information1.php"><button type="button" class="details">รายระเอียดเพิ่มเติม</button></a>
        </div>
      </td>
    </tr>
  </div>

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">

        <div class="modal-header">
          <h1 class="modal-title">ข้อมูลลูกค้า</h1>

        </div>
        <div class="modal-body">
          <div class="input-group">
            <div class="name">
              <div class="row">
                <div class="files">
                  <div class="saction-input-file">
                    <img src="" alt="" class="file-preview" id="preview-file" height="200" width="200">
                    <div class="button-label">
                      <button type="button" class="warning1"><label for="uploadfile">เพิ่มภาพ</label></button>
                      <input type="file" name="uploadfile" onchange="updateImage(this)" id="uploadfile" class="d-none">
                    </div>
                  </div>
                </div>
              </div>
              <tbody>
                <div class="row">
                  <div class="col-6 pr-0">
                    <div class="tranform">
                      <div class="contro1">
                        <tr>
                          <th scope="col"><input type="name" id="name" class="form-control3" placeholder="ชื่อบริษัท"></th>
                          <th scope="col"><input type="name" id="name" class="form-control3" placeholder="ชื่อลูกค้า"></th>
                          <div class="">
                            <span class="start-date">บุคคลติดต่อ (Ae)</span>
                            <th scope="col"><input type="name" id="name" class="form-control5"></th>
                          </div>
                          <div class="">
                            <span class="start-date">ที่อยู่</span>
                            <th scope="col"><input type="name" id="name" class="form-control5"></th>
                          </div>
                          <div class="">
                            <span class="start-date">เลขผู้เสียภาษี</span>
                            <th scope="col"><input type="name" id="name" class="form-control5"></th>
                          </div>
                        </tr>
                      </div>


                    </div>
                  </div>
                  <div class="col-6">
                    <div class="contro3">
                      <tr>
                        <div class="Em">
                          <th scope="col "><input type="image" src="web/asset/image/Gmail.png" width="35" height="25"></th>
                          <th scope="col"><input type="email" id="email" class="form-control7" placeholder="กรอกอีเมล"></th>
                        </div>
                        <div class="Em">
                          <th scope="col "><input type="image" src="web/asset/image/tell.png" width="35" height="25"></th>
                          <th scope="col"><input type="email" id="email" class="form-control7" placeholder="กรอกอีเมล"></th>
                        </div>
                        <div class="Em">
                          <th scope="col "><input type="image" src="web/asset/image/line.png" width="35" height="30"></th>
                          <th scope="col"><input type="email" id="email" class="form-control7" placeholder="กรอกอีเมล"></th>
                        </div>

                      </tr>
                    </div>
                  </div>
              </tbody>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" id="btnSearch" class="primary">เพืมรายชื่อ</button>
        <button type="button" class="default " data-dismiss="modal">ยกเลิก</button>
      </div>
    </div>
  </div>
  </div>

</section>

<script>
  /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
  function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }

  // Close the dropdown if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var x = 0;
      var dropdowns = $("dropdown-content-" + x++);
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }
  document.requestStorageAccess({
    createObjectURL: true
  }).then(
    (handle) => {
      console.log("createObjectURL access granted");
      handle.createObjectURL(new Blob(["foo"]));
    },
    () => {
      console.log("createObjectURL access denied");
    },
  );



  const updateImage = (e) => {
    const url = URL.createObjectURL(e.files[0])
    document.getElementById("preview-file").src = url
  }
</script>