<div class="row">
    <div class="col s12">
        <h4>Windmachine</h4>
    </div>
</div>
<div class="row">
    <div class="col s12">
        <nav>
            <div class="nav-wrapper">
                <div class="col s12 en-breadcrumb">
                    <a href="/Energy" class="breadcrumb">Home</a>
                    <a href="/Energy/index/detail" class="breadcrumb">NRE</a>
                    <span class="breadcrumb en-breadcrumb-active">Windmachine</span>
                </div>
            </div>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col s10">
        <h5 class="en-h5-title">Produktion '[kWh]</h5>
        <div id="chart_div_line" style="width: 100%; height: 500px;"></div>
    </div>
    <div class="col s2 en-fieldset-detail">
        <fieldset class="en-fieldset">
            <legend>Neue RE</legend>
            <?php
            $act = $this->currentAction;
            echo '
            <div class="col s6">';
            if ($act == 'pv') {
                echo '
                <span class="en-field-active"><img src="/Energy/assets/img/pv.png"/>
                    PV
                </span>';
            } else {
                echo '
                <a href="/Energy/energies/pv"><img src="/Energy/assets/img/pv.png"/>
                    PV
                </a>';
            }
            echo '
            </div>
            <div class="col s6">';
            if ($act == 'minihydraulic') {
                echo '
                <span class="en-field-active"><img src="/Energy/assets/img/mini-hydraulic.png"/>
                    Mini-hydr
                </span>';
            } else {
                echo '
                <a href="/Energy/energies/minihydraulic"><img src="/Energy/assets/img/mini-hydraulic.png"/>
                    Mini-hydr
                </a>';
            }
            echo '
            </div>
            <div class="col s6">';
            if ($act == 'windturbine') {
                echo '
                <span class="en-field-active"><img src="/Energy/assets/img/windturbine.png"/>
                    Windmachine
                </span>';
            } else {
                echo '
                <a href="/Energy/energies/windturbine"><img src="/Energy/assets/img/windturbine.png"/>
                    Windmachine
                </a>';
            }
            echo '
            </div>
            <div class="col s6">';
            if ($act == 'biogas') {
                echo '
                <span class="en-field-active"><img src="/Energy/assets/img/bio-gas.png"/>
                    Bio-gas
                </span>';
            } else {
                echo '
                <a href="/Energy/energies/biogas"><img src="/Energy/assets/img/bio-gas.png"/>
                    Bio-gas
                </a>';
            }
            echo '
            </div>';
            ?>
        </fieldset>
    </div>
</div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages': ['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Jahr', 'horizontale Windturbine', 'vertikale Windturbine'],
            ['2013', 500, 200],
            ['2014', 650, 950],
            ['2015', 1000, 700],
            ['2016', 900, 1100]
        ]);

        var options = {
            hAxis: {title: 'Jahr', titleTextStyle: {color: '#333'}},
            vAxis: {minValue: 0},
            legend: {position: 'bottom'}
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart_div_line'));

        chart.draw(data, options);
    }
</script>