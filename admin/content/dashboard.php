<?php
$today = date('Y-m-d');
$year = date('Y');
$mois = date('m');
if(isset($_GET['year']) AND isset($_GET['month'])){
    $year = $_GET['year'];
    $mois = $_GET['month'];
}

?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="font-weight: bold;">
        Dashboard::Admin
</h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <?php
        if(isset($_SESSION['error'])){
            echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Erreur!</h4>
              ".$_SESSION['error']."
            </div>
          ";
            unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
            echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Succès!</h4>
              ".$_SESSION['success']."
            </div>
          ";
            unset($_SESSION['success']);
        }
        ?>
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">

                        <?php
                        $livre = "SELECT COUNT(CodeLivre) as nbre FROM t_livre";
                        $livre = $app->fetch($livre);

                        echo "<h3>".$livre['nbre']."</h3>";
                        ?>
                        <p>Nos livres</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-book"></i>
                    </div>
                    <a href="#" class="small-box-footer">Plus d'info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <?php
                        $lecteur = "SELECT COUNT(CodeCompte) as nbre FROM t_compte";
                        $lecteur = $app->fetch($lecteur);

                        echo "<h3>".$lecteur['nbre']."</h3>";
                        ?>
                        <p>Nos lecteurs</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <a href="#" class="small-box-footer">Plus d'info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <?php
                        $admin = "SELECT COUNT(CodeSuper) as nbre FROM t_superadmin WHERE CodeCategorie=2";
                        $admin = $app->fetch($admin);

                        echo "<h3>".$admin['nbre']."</h3>";
                        ?>
                        <p>Nos administrateurs</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-user"></i>
                    </div>
                    <a href="#" class="small-box-footer">Plus d'info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <?php
                        $lecture = "SELECT SUM(Readed) as nbre FROM t_livre";
                        $lecture = $app->fetch($lecture);

                        echo "<h3>".$lecture['nbre']."</h3>";
                        ?>
                        <p>Total lecture</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-pencil"></i>
                    </div>
                    <a href="#" class="small-box-footer">Plus d'info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-6 col-xs-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Statistique de publication</h3>
                        <div class="box-tools pull-right">
                            <form class="form-inline">
                                <div class="form-group">
                                    <select class="form-control input-sm" id="select_year">
                                        <?php
                                        for($i=2015; $i<=2040; $i++){
                                            $selected = ($i==$year)?'selected':'';
                                            echo "
                            <option value='".$i."' ".$selected.">".$i."</option>
                          ";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="chart">
                            <br>
                            <div id="legend" class="text-center"></div>
                            <canvas id="barChart" style="height:380px"></canvas>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-6 col-xs-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Statistique de lecture</h3>
                    </div>
                    <div class="box-body">
                        <div class="chart">
                            <br>
                            <div id="legend" class="text-center"></div>
                            <canvas id="pieChart" style="height:400px"></canvas>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include("includes/footer.php");
?>
<!-- ./wrapper -->
<?php
//$nosouvr = array();
//$nosnombres = array();
//$stmt1 = "SELECT CodeOuvrage,SUBSTRING(Titre, 1, 15) as ouvrage FROM t_ouvrage ORDER BY Readed DESC LIMIT 10";
//$stmt1=$app->fetchPrepared($stmt1);
//foreach($stmt1 as $row)
//{
//    $codeouvr = $row['CodeOuvrage'];
//    $ouvr = $row['ouvrage'];
//    $stmt2 = "SELECT Readed as nbre FROM t_ouvrage WHERE CodeOuvrage=$codeouvr";
//    $stmt2 = $app->fetchPrepared($stmt2);
//    foreach($stmt2 as $row)
//    {
//        $nombres = $row['nbre'];
//    }
//    array_push($nosnombres, $nombres);
//    array_push($nosouvr, $ouvr);
//}
//
//$nosnombres = json_encode($nosnombres);
//$nosouvr = json_encode($nosouvr);

?>
<?php
$livre = array();
$months = array();
for( $m = 1; $m <= 12; $m++ ) {
    try{
        $stmt = "SELECT COUNT(CodeLivre) as nombre FROM t_livre WHERE MONTH(Created_on)=$m AND YEAR(Created_on)=$year";
        $stmt = $app->fetchPrepared($stmt);
        $total = 0;
        foreach($stmt as $row){
            $nombre = $row['nombre'];
        }
        array_push($livre, round($nombre, 2));
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }

    $num = str_pad( $m, 2, 0, STR_PAD_LEFT );
    $month =  date('M', mktime(0, 0, 0, $m, 1));
    array_push($months, $month);
}

$months = json_encode($months);
$livre = json_encode($livre);

?>
<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="../superadmin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="../superadmin/bower_components/raphael/raphael.min.js"></script>
<!-- Sparkline -->
<script src="../superadmin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../superadmin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../superadmin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../superadmin/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../superadmin/bower_components/moment/min/moment.min.js"></script>
<script src="../superadmin/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../superadmin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../superadmin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../superadmin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../superadmin/bower_components/fastclick/lib/fastclick.js"></script>
<script src="../superadmin/bower_components/chart.js/Chart.js"></script>
<!-- AdminLTE App -->
<script src="../superadmin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../superadmin/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../superadmin/dist/js/demo.js"></script>





<script>
    $(function(){
        var barChartCanvas = $('#barChart').get(0).getContext('2d')
        var barChart = new Chart(barChartCanvas)
        var barChartData = {
            labels  : <?php echo $months; ?>,
            datasets: [
                {
                    label               : 'LIVRES',
                    fillColor           : 'rgba(60,141,188,0.9)',
                    strokeColor         : 'rgba(60,141,188,0.8)',
                    pointColor          : '#3b8bba',
                    pointStrokeColor    : 'rgba(60,141,188,1)',
                    pointHighlightFill  : '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data                : <?php echo $livre; ?>
                }
            ]
        }
        //barChartData.datasets[1].fillColor   = '#00a65a'
        //barChartData.datasets[1].strokeColor = '#00a65a'
        //barChartData.datasets[1].pointColor  = '#00a65a'
        var barChartOptions                  = {
            //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
            scaleBeginAtZero        : true,
            //Boolean - Whether grid lines are shown across the chart
            scaleShowGridLines      : true,
            //String - Colour of the grid lines
            scaleGridLineColor      : 'rgba(0,0,0,.05)',
            //Number - Width of the grid lines
            scaleGridLineWidth      : 1,
            //Boolean - Whether to show horizontal lines (except X axis)
            scaleShowHorizontalLines: true,
            //Boolean - Whether to show vertical lines (except Y axis)
            scaleShowVerticalLines  : true,
            //Boolean - If there is a stroke on each bar
            barShowStroke           : true,
            //Number - Pixel width of the bar stroke
            barStrokeWidth          : 2,
            //Number - Spacing between each of the X value sets
            barValueSpacing         : 5,
            //Number - Spacing between data sets within X values
            barDatasetSpacing       : 1,
            //String - A legend template
            legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
            //Boolean - whether to make the chart responsive
            responsive              : true,
            maintainAspectRatio     : true
        }

        barChartOptions.datasetFill = false
        var myChart = barChart.Bar(barChartData, barChartOptions)
        document.getElementById('legend').innerHTML = myChart.generateLegend();




        //PIECHART
        var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
        var pieChart       = new Chart(pieChartCanvas)

        
        var PieData        = [
            <?php
            $stmt = "SELECT COUNT(CodeLecture) as nombre, Titre FROM t_lecture
                INNER JOIN t_livre
                ON t_lecture.CodeLivre=t_livre.CodeLivre
                GROUP BY t_lecture.CodeLivre
                ORDER BY nombre DESC LIMIT 10";
            $stmt = $app->fetchPrepared($stmt);
            $index = 0;
            foreach ($stmt as $row){
            $index++;
                ?>
            {
            value    : '<?php echo $row['nombre'] ?>',
            color    : "<?php if($index==1)
                    {
                        echo "#f56954";
                    }elseif($index==2)
                    {
                        echo "#00a65a";
                    }elseif($index==3)
                    {
                        echo "#f39c12";
                    }elseif($index==4)
                    {
                        echo "#00c0ef";
                    }elseif($index==5)
                    {
                        echo "#3c8dbc";
                    }elseif($index==6)
                    {
                        echo "#d2d6de";
                    }elseif($index==7)
                    {
                        echo "#f56954";
                    }
                    elseif($index==8)
                    {
                        echo "#00a65a";
                    }
                    elseif($index==9)
                    {
                        echo "#f39c12";
                    }
                    elseif($index==10)
                    {
                        echo "#00c0ef";
                    }
                                ?>",
            highlight: "<?php if($index==1)
                    {
                        echo "#f56954";
                    }elseif($index==2)
                    {
                        echo "#00a65a";
                    }elseif($index==3)
                    {
                        echo "#f39c12";
                    }elseif($index==4)
                    {
                        echo "#00c0ef";
                    }elseif($index==5)
                    {
                        echo "#3c8dbc";
                    }elseif($index==6)
                    {
                        echo "#d2d6de";
                    }elseif($index==7)
                    {
                        echo "#f56954";
                    }
                    elseif($index==8)
                    {
                        echo "#00a65a";
                    }
                    elseif($index==9)
                    {
                        echo "#f39c12";
                    }
                    elseif($index==10)
                    {
                        echo "#00c0ef";
                    }
                ?>",
            label    : "<?php echo $row['Titre'] ?>"
             },
            <?php
            }
            ?>
        ]
        var pieOptions     = {
            //Boolean - Whether we should show a stroke on each segment
            segmentShowStroke    : true,
            //String - The colour of each segment stroke
            segmentStrokeColor   : '#fff',
            //Number - The width of each segment stroke
            segmentStrokeWidth   : 2,
            //Number - The percentage of the chart that we cut out of the middle
            percentageInnerCutout: 50, // This is 0 for Pie charts
            //Number - Amount of animation steps
            animationSteps       : 100,
            //String - Animation easing effect
            animationEasing      : 'easeOutBounce',
            //Boolean - Whether we animate the rotation of the Doughnut
            animateRotate        : true,
            //Boolean - Whether we animate scaling the Doughnut from the centre
            animateScale         : false,
            //Boolean - whether to make the chart responsive to window resizing
            responsive           : true,
            // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
            maintainAspectRatio  : true,
            //String - A legend template
            legendTemplate       : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        pieChart.Doughnut(PieData, pieOptions)
    });
</script>

<script>
    $(function(){
        /** add active class and stay opened when selected */
        var url = window.location;

        // for sidebar menu entirely but not cover treeview
        $('ul.sidebar-menu a').filter(function() {
            return this.href == url;
        }).parent().addClass('active');

        // for treeview
        $('ul.treeview-menu a').filter(function() {
            return this.href == url;
        }).parentsUntil(".sidebar-menu > .treeview-menu").addClass('active');

    });
</script>
</body>
</html>
