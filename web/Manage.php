<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
  <link rel="stylesheet" href="./web/asset/css/cssfonten/Manage.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

  <meta charset="utf-8">
  <title>รายชื่อลูกค้า</title>

</head>

<aside>
  <?php include("web/layout/slidebar.php"); ?>
</aside>
<section>

  <div class="headbar">
    <span>การจัดการบัญชี</span>
  </div>
  <div class="content">
    <span class="account">บัญชีการติดตาม</span>
    <div class="row">
      <div class="col-3">
        <div class="box1">
          <table class="Sales">
            <thead class="Sales-tax">
              <tr>
                <td>ภาษีขาย ภ.พ.30</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="debt">หนี้สินทางภาษีและประกันสังคม</td>
              </tr>

            </tbody>
          </table>
          <div class="S">
            <table class="Sales">
              <tr>
                <td class="number"> 215101</td>
                <td class="number-1">0.00</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="box1">
          <table class="Sales">
            <thead class="Sales-tax">
              <tr>
                <td>ภ.ง.ด. 1 ค้างจ่าย</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="debt">หนี้สินทางภาษีและประกันสังคม</td>
              </tr>
            </tbody>
          </table>
          <div class="S">
            <table class="Sales">
              <tr>
                <td class="number"> 215101</td>
                <td class="number-1">0.00</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="box1">
          <table class="Sales">
            <thead class="Sales-tax">
              <tr>
                <td>ภ.ง.ด. 3 ค้างจ่าย</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="debt">หนี้สินทางภาษีและประกันสังคม</td>
              </tr>

            </tbody>
          </table>
          <div class="S">
            <table class="Sales">
              <tr>
                <td class="number"> 215101</td>
                <td class="number-1">0.00</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <div class="col-3">
        <div class="box1">
          <table class="Sales">
            <thead class="Sales-tax">
              <tr>
                <td>ภ.ง.ด. 53 ค้างจ่าย</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="debt">หนี้สินทางภาษีและประกันสังคม</td>
              </tr>
            </tbody>
          </table>
          <div class="S">
            <table class="Sales">
              <tr>
                <td class="number"> 215101</td>
                <td class="number-1">0.00</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="body">
      <div class="row">
        <div class="col-7">
          <span class="seve">บันทึกค่าใช้จ่ายที่ชำระแล้ว รอชำระ และพ้นกำหนด</span>
          <div class="box-seve">
            <canvas id="myChart" style="width:100%;max-width:1000px;height:53px"></canvas>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
          </div>
        </div>
        <div class="col-5">
          <span class="seve">เอกสารที่ออก</span>
          <div class="box-seve">
            <div
              id="myChart1" style="width:100%; max-width:650px; height:300px; margin:auto; display: block; ">
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<script>
  var xValues = ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"];
  var yValues = [55, 49, 44, 24, 16, 20, 30, 50, 40, 35, 22, 23];
  // var barColors = ["blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue", "blue"];

  new Chart("myChart", {
    type: "bar",
    data: {
      labels: xValues,
      datasets: [{
        backgroundColor: "blue",
        data: yValues
      }]
    },
    options: {
      legend: {
        display: false
      },
      title: {
        display: true,
        text: "บันทึกค่าใช้จ่ายที่ชำระแล้ว รอชำระ และพ้นกำหนด"
      }
    }
  });


  google.charts.load('current', {
    'packages': ['corechart']
  });
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    const data = google.visualization.arrayToDataTable([
      ['Contry', 'Mhl'],
      ['Italy', 54.8],
      ['France', 48.6],
      ['Spain', 44.4],
      ['USA', 23.9],
      ['Argentina', 14.5]
    ]);

    const options = {
      title: 'เอกสารที่ออก',
      is3D: true
    };

    const chart = new google.visualization.PieChart(document.getElementById('myChart1'));
    chart.draw(data, options);
  }
</script>