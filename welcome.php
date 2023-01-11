<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: login.php");
  exit;
}
?>
 <!-- comment edited sauvik's comment 11/1/2023 -->
 <!-- comment edited new -->
<!doctype html>
<html lang="eng" >
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-+4j30LffJ4tgIMrq9CwHvn0NjEvmuDCOfk6Rpg2xg7zgOxWWtLtozDEEVvBPgHqE" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> -->
    <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
    <title>Welcome - <?php $_SESSION['Username']?></title>
  </head>
  <body>
    <?php require 'partials/_nav.php' ?>
    Welcome - <?php echo $_SESSION['Username']?>
  <head>
<style>
.button {
  border-radius: 8px;
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 105px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 13px;
  margin: 2px 2px;
  cursor: pointer;
  
}

.button2 {border-radius: 8px; background-color: #008CBA;} /* Blue */
.button3 {border-radius: 8px; background-color: #f44336;} /* Red */ 
.button4 {border-radius: 8px; background-color: #556b2f;} 
.button5 {border-radius: 8px; background-color: #f4a460;} /* fuchsia  */
.button6 {border-radius: 8px; background-color:	#008080;}
.button7 {border-radius: 8px; background-color: #c71585;}
.button8 {border-radius: 8px; background-color: #40e0d0;}
</style>
</head>

<div class="row">
    <div class="col ">
    <button class="button"  onclick="window.location.href='Management Snapshot.php'"; >Management Snapshot</button>
    <button class="button button2" onclick="window.location.href='Management Snapshot.php'";>Supply Availability</button>
    <button class="button button3" onclick="window.location.href='Management Snapshot.php'";>Demands</button>
    <button class="button button4" onclick="window.location.href='Management Snapshot.php'";>RTM Bidding</button>
    </div>
  </div>

  <div class="row">
    <div class="col">
    <button class="button button5" onclick="window.location.href='Management Snapshot.php'";>DAM Bidding</button>
    <button class="button button6" onclick="window.location.href='Management Snapshot.php'";>DSM</button>
    <button class="button button7" onclick="window.location.href='Management Snapshot.php'";>Market Watch</button>
    <button class="button button8" onclick="window.location.href='Management Snapshot.php'";>Real Time Scheduling</button>
    </div>
  </div>

  <!-- ,block2 , block3 , block4 , block5 , block6 ,	block7,	block8,	block9,	block10,	block11,	block12,	block13,	block14,	block15,	block16,	block17,	block18,	block19,	block20,	block21,	block22,	block23,	block24,	block25,	block26,	block27,	block28,	block29,	block30,	block31,	block32,	block33,	block34,	block35,	block36,	block37,	block38,	block39,	block40,	block41,	block42,	block43,	block44,	block45,	block46,	block47,	block48,	block49,	block50,	block51,	block52,	block53,	block54,	block55,	block56,	block57,	block58,	block59,	block60,	block61,	block62,	block63,	block64,	block65,	block66,	block67,	block68,	block69,	block70,	block71,	block72,	block73,	block74,	block75,	block76,	block77,	block78,	block79,	block80,	block81,	block82,	block83,	block84,	block85,	block86,	block87,	block88,	block89,	block90,	block91,block92,	block93,	block94,	block95,	block96 , -->

<?php
$server = "localhost";
$Username = "root";
$password = "";
$database = "demands";
// $date= $_GET["Date"];

$conn =mysqli_connect($server, $Username, $password, $database);
// $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$Date="Select Date from demand_table";
$results = mysqli_query($conn, $Date);
$results1 = mysqli_query($conn, $Date);
// $sql="SELECT block1,	block2,	block3,	block4,	block5	block6,	block7,	block8,	block9,	block10,	block11,	block12,	block13,	block14,	block15,	block16,	block17,	block18,	block19,	block20,	block21,	block22,	block23,	block24,	block25,	block26,	block27,	block28,	block29,	block30,	block31,	block32,	block33,	block34,	block35,	block36,	block37,	block38,	block39,	block40,	block41,	block42,	block43,	block44,	block45,	block46,	block47,	block48,	block49,	block50,	block51,	block52,	block53,	block54,	block55,	block56,	block57,	block58,	block59,	block60,	block61,	block62,	block63,	block64,	block65,	block66,	block67,	block68,	block69,	block70,	block71,	block72,	block73,	block74,	block75,	block76,	block77,	block78,	block79,	block80,	block81,	block83,	block84,	block85,	block86,	block87,	block88,	block89,	block90,	block91,	block92,	block93,	block94,	block95,	block96
//      FROM `demand_table` WHERE Date= '2021-12-12' ";
// ="SELECT block1 FROM demand_table WHERE Date='2021-12-11'";
// $d_result = $conn->query($query);

// $result = mysqli_query($conn, $sql);
// $result = mysqli_query($conn, $Date);
// $num = mysqli_num_rows($result);

  // $row = mysqli_fetch_assoc($result);
  // $var1= $_POST['Date'];
  // print_r($var1);

  // $var2 =$_POST['date'];
  // print_r($var2);
  //  var_dump($rows);
  // $demand= var_dump($rows);

  // echo  $demand ;

// try
// {
//  $stmt = $conn->prepare($Date);
//  $stmt->execute();
//  $result=$stmt->fetch_all();
// }
// catch(Exception $ex)
// {
//   echo($ex -> getMessage());
// }
 
?>
<label>
  <form action="<?php  $_SERVER['PHP_SELF'] ;?>" method="post">
  <!--  -->
       <!-- <script type="text/javascript">
       document.getElementById('date').value = "<?php echo $_GET['date'];?>";
       </script>      -->
       <!-- <input type="submit" name="submit" value="Filter"> -->
   <!-- <input type="submit" name="submit" value="submit"/> -->
    
    </form> 
</label>
<?php
    if(isset($_POST['submit'])){
      if(isset($_POST['date'])){
        $value = $_POST['date'];
        //  echo"<p >$value</p>";
      }
    }
  ?>  

  <?php
    if(isset($_POST['submit'])){
      if(isset($_POST['Date'])){
        $value = $_POST['Date'];
        //  echo"<p >$value</p>";
      }
    }
  ?> 




<?php
      
    /** 
     * Write code on Method
     *
     * @return response()
     */
    // function getBetweenDates($startDate, $endDate)
    // {
    //     $rangArray = [];
            
    //     $startDate = strtotime($startDate);
    //     $endDate = strtotime($endDate);
             
    //     for ($currentDate = $startDate; $currentDate <= $endDate; 
    //                                     $currentDate += (86400)) {
                                                
    //         $date = date('Y-m-d', $currentDate);
    //         $rangArray[] = $date;
    //     }
  
    //     return $rangArray;
    // }
  
    // $dates = getBetweenDates($var1, $var2);

    
     
    // print_r($dates);
?>
 <?php
//  $datasets=[];
//  $sql="SELECT block1,	block2,	block3,	block4,	block5	block6,	block7,	block8,	block9,	block10,	block11,	block12,	block13,	block14,	block15,	block16,	block17,	block18,	block19,	block20,	block21,	block22,	block23,	block24,	block25,	block26,	block27,	block28,	block29,	block30,	block31,	block32,	block33,	block34,	block35,	block36,	block37,	block38,	block39,	block40,	block41,	block42,	block43,	block44,	block45,	block46,	block47,	block48,	block49,	block50,	block51,	block52,	block53,	block54,	block55,	block56,	block57,	block58,	block59,	block60,	block61,	block62,	block63,	block64,	block65,	block66,	block67,	block68,	block69,	block70,	block71,	block72,	block73,	block74,	block75,	block76,	block77,	block78,	block79,	block80,	block81,	block83,	block84,	block85,	block86,	block87,	block88,	block89,	block90,	block91,	block92,	block93,	block94,	block95,	block96
//  FROM `demand_table` WHERE Date= '".$value."'";
//  foreach ($dates as $value){
//  $datasets.append(
//   'name'$value;
//   'data' $row;
//  )
// }
// print_r($datasets); 


 ?>
 
 <?php
    $colors=  Array('indianred', 'salmon', 'darksalmon', 'crimson', 'red', 'darkred', 'pink', 'hotpink', 'deeppink',
    'palevioletred', 'coral', 'tomato', 'orangered', 'darkorange', 'orange', 'gold', 'palegoldenrod',
    'darkkhaki', 'thistle', 'plum', 'violet', 'orchid', 'fuchsia', 'magenta', 'rebeccapurple', 'blueviolet',
    'darkviolet', 'darkorchid', 'darkmagenta', 'purple', 'indigo', 'slateblue', 'darkslateblue', 'greenyellow',
    'lawngreen', 'limegreen', 'springgreen', 'seagreen', 'forestgreen', 'green', 'darkgreen', 'yellowgreen',
    'olivedrab', 'darkolivegreen', 'darkseagreen', 'darkcyan', 'teal', 'cyan', 'aquamarine', 'turquoise',
    'darkturquoise', 'cadetblue', 'steelblue', 'powderblue', 'skyblue', 'deepskyblue', 'dodgerblue',
    'cornflowerblue', 'royalblue', 'blue', 'darkblue', 'navy', 'midnightblue', 'burlywood', 'tan', 'rosybrown',
    'sandybrown', 'goldenrod', 'darkgoldenrod', 'peru', 'chocolate', 'saddlebrown', 'sienna', 'brown', 'maroon',
    'aliceblue', 'darkgray', 'darkslategray', 'black');
  //   $datasets=[];
  //   foreach ($dates as $value){
  //   $sql="SELECT block1, block2,	block3,	block4,	block5,	block6,	block7,	block8,	block9,	block10,	block11,	block12,	block13,	block14,	block15,	block16,	block17,	block18,	block19,	block20,	block21,	block22,	block23,	block24,	block25,	block26,	block27,	block28,	block29,	block30,	block31,	block32,	block33,	block34,	block35,	block36,	block37,	block38,	block39,	block40,	block41,	block42,	block43,	block44,	block45,	block46,	block47,	block48,	block49,	block50,	block51,	block52,	block53,	block54,	block55,	block56,	block57,	block58,	block59,	block60,	block61,	block62,	block63,	block64,	block65,	block66,	block67,	block68,	block69,	block70,	block71,	block72,	block73,	block74,	block75,	block76,	block77,	block78,	block79,	block80,	block81,	block82, block83,	block84,	block85,	block86,	block87,	block88,	block89,	block90,	block91,	block92,	block93,	block94,	block95,	block96
  //   FROM `demand_table` WHERE Date= '".$value."'";
  //    $result = $conn->query($sql);
  //    $row = mysqli_fetch_assoc($result);
  //    $reCreateArray = array_values($row);
  //    array_unshift($reCreateArray, "");
  //    unset($reCreateArray[0]);
  //    $color=$colors[array_rand($colors)];
  //   //  print_r( $row); 
  //   //  print_r( $value)
  //   $datasets[] = array(
      
  //       "name"=> $value,
  //       "data"=> $reCreateArray ,
        
  //   );

  // }
    //  array_push(
    //   $datasets,array(
    //  "label"=> $value,
    //  "data"=> $row,
    //  "borderColor"=> $color,
    //  "borderWidth"=> 1.5,

    //   )
    //  )
   
  ?>

  <?php
  // array_unshift($reCreateArray, "");
  // unset($reCreateArray[0]);
  // ?>
  
  
  
  


<?php
// foreach ($result as $product) {
//   foreach ($product as $key => $val){
//   echo "$key";
//  }
// }
?>

<?php
// $number = range(1,97);
// print_r ( array_column($datasets,'data'));


?>


<?php
// foreach ($Date as $product) {
//   foreach ($product as $key => $val){
//   echo "$key: $val";
//  }
// }
?>

<div class="row row-cols-2 row-cols-lg-12">
<div class="col-md-12">
      <div class="row mb-10">
        <div class="card" >
      <div class="card-body">
      <div id="myChart"></div>
      <!-- <canvas id="myChart" width="900" height="350"></canvas> -->
      <iframe src="https://mercadosemi-in-1.domo.com/embed/card/private/WnPEx" width="1270" height=350" marginheight="1" marginwidth="1" frameborder="1"></iframe>
  
      
  </div>
  </div>
  </div>
  
  </div>
  <!-- <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script> -->
   
  <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
  <style>
      @import url(https://fonts.googleapis.com/css?family=Roboto);
        body {
        font-family: Roboto, sans-serif;
         }

  </style>
      <script>
        // const ctx = document.getElementById('myChart').getContext('2d');
        




  
 
  <!-- <div class="col-md-6">
      <div class="row mb-6">
        <div class="card" >
      <div class="card-body">
      <canvas id="Rohan" width="900" height="450"></canvas>
      
  </div>
  </div>
  </div>
  
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <script type="text/javascript" src="./chart.js"></script>
      <script>
        const cty = document.getElementById('Rohan').getContext('2d');
        var chartdata1= <?php echo json_encode($datasets);  ?>;
        var chartdemand1=Object.values(chartdata1);
        var chartblocks1=Object.keys(chartdata[0]['data']);
        console.log ("chartdata", chartdata)

        console.log ("chartdatakeys",Object.keys(chartdata))
        console.log ("chartdatavalues",Object.values(chartdata))

        const Rohan = new Chart(cty, {
        type: 'bar',
        data: {
        labels: chartblocks1,
        datasets: chartdata1
    },
    options: {
      responsive: true,
      // maintainAspectRatio: true,
      legend: {
        position: "top"
      },
      title: {
        position: "top",
        display: true
      },
      tooltips: {
        mode: "index",
        intersect: false
      },
       
      elements: {
        point: {
          radius: 2,
          hoverRadius: 2
        }
      },
      interaction: {
        Mode: "nearest",
        axis: "xy",
        intersect: false
      },
    }
});

      </script>
 -->



  




<!-- <div class="container">
<div class="col mb-6">
    <div class="card">
      <div class="card-body">
          <canvas width="900" height="200"></canvas>
      </div>
    </div>
</div>
<div class="col mb-6">
    <div class="card">
      <div class="card-body">
          <canvas  width="900" height="200"></canvas>
      </div>
    </div>
</div>
</div> -->

        
        

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> -->
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    -->
  </body>
</html>