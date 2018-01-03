<div class="row">
    <div class="col s12">
        <h4>Portal der neue erneuerbaren Energien in Wallis</h4>
    </div>
</div>
<div class="row">
    <div class="col l6">
        <h5>Produktion '[kWh]</h5>
        <div id="chart_div_production" style="width: 100%; height: 400px;"></div>
    </div>
    <div class="col l6">
        <h5>Leistung '[kW]</h5>
        <div id="chart_div_power" style="width: 100%; height: 400px;"></div>
    </div>
</div>
<div class="row">
    <div class="col l11">
        <div id="chart_div_pie" style="width: 100%; height: 300px;"></div>
    </div>
    <div class="col l1">
        <a href="/Energy/index/detail" class="en-link">
            <i class="large material-icons">arrow_forward</i>
        </a>
        NER Detail
    </div>
</div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawPieChart);
    google.charts.setOnLoadCallback(drawChartProduction);

    google.charts.setOnLoadCallback(drawChartPower);

    function drawChartProduction() {
        var data = google.visualization.arrayToDataTable([
            ['Jahr', 'Hydraulisch zum Wasser', 'Hydraulikspeicher'],
            ['2013',  1000,      400],
            ['2014',  1170,      460],
            ['2015',  660,       1120],
            ['2016',  1030,      540]
        ]);

        var options = {
            hAxis: {title: 'Jahr',  titleTextStyle: {color: '#333'}},
            vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div_production'));
        chart.draw(data, options);
    }

    function drawChartPower() {
        var data = google.visualization.arrayToDataTable([
            ['Year', 'Hydraulisch zum Wasser', 'Hydraulikspeicher'],
            ['2013', 900, 600],
            ['2014', 970, 660],
            ['2015', 860, 920],
            ['2016', 1180, 750]
        ]);

        var options = {
            hAxis: {title: 'Jahr', titleTextStyle: {color: '#333'}},
            vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div_power'));
        chart.draw(data, options);
    }

    function drawPieChart() {

        var data = google.visualization.arrayToDataTable([
            ['Typen', 'Werte'],
            ['Neue erneuerbare Energien',  2],
            ['Hydraulisch zum Wasser',     27],
            ['Hydraulikspeicher',      21],
        ]);

        var options = {
            title: 'Energien Produktion in Wallis'
        };

        var chart = new google.visualization.PieChart(document.getElementById('chart_div_pie'));

        chart.draw(data, options);
    }

</script>