<div class="row">
    <div class="col s12">
        <h4>Neue erneuerbaren Energien</h4>
    </div>
</div>

<div class="row">
    <div class="col s10">
        <nav>
            <div class="nav-wrapper">
                <div class="col s12 en-breadcrumb">
                    <a href="/Energy" class="breadcrumb">Home</a>
                    <span class="breadcrumb en-breadcrumb-active">NER</span>
                </div>
            </div>
        </nav>
    </div>
    <div class="col s2">
        <a href="" class="en-link">
            <span class="en-add-link">Meine Installation hinzufügen</span>
            <i class="medium material-icons" id="en-add-box">add_box</i>
        </a>
    </div>
</div>

<div class="row">
    <div class="col s2">
        <fieldset class="en-fieldset">
            <legend>Detail neue EE</legend>
            <div class="col s6">
                <a href="/Energy/energies/pv">
                    <img src="/Energy/assets/img/pv.png"/>
                    PV
                </a>
            </div>
            <div class="col s6">
                <a href="/Energy/energies/minihydraulic">
                    <img src="/Energy/assets/img/mini-hydraulic.png"/>
                    mini-hydr
                </a>
            </div>
            <div class="col s6">
                <a href="/Energy/energies/windturbine">
                    <img src="/Energy/assets/img/windturbine.png"/>
                    Windmachine
                </a>
            </div>
            <div class="col s6">
                <a href="/Energy/energies/biogas">
                    <img src="/Energy/assets/img/bio-gas.png"/>
                    Bio-gas
                </a>
            </div>
        </fieldset>
        <div id="chart_div_column" style="width: 100%; height: 250px;"></div>
    </div>
    <div class="col s10">
        <div id="en-map"></div>
    </div>
</div>
<script>
    function initializeMap() {
        var latLngCenter = {lat: 46.25802, lng: 6.95904};
        var latLngPV = {lat: 46.2582, lng: 6.9592};
        var latLngHydr = {lat: 46.2578, lng: 6.9615};
        var latLngWind = {lat: 46.2574, lng: 6.9584};
        var latLngGas = {lat: 46.2570, lng: 6.957};

        var mapOptions = {
            zoom: 17,
            mapTypeId: google.maps.MapTypeId.HYBRID,
            center: latLngCenter
        };

        var map = new google.maps.Map(document.getElementById("en-map"), mapOptions);

        new google.maps.Marker({
            position: latLngPV,
            map: map,
            title: 'PV',
            icon: '/Energy/assets/img/pv-thumb.png'
        });

        new google.maps.Marker({
            position: latLngHydr,
            map: map,
            title: 'Départ',
            icon: '/Energy/assets/img/mini-hydraulic-thumb.png'
        });

        new google.maps.Marker({
            position: latLngWind,
            map: map,
            title: 'Départ',
            icon: '/Energy/assets/img/windturbine-thumb.png'
        });

        new google.maps.Marker({
            position: latLngGas,
            map: map,
            title: 'Départ',
            icon: '/Energy/assets/img/bio-gas-thumb.png'
        });

    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdztNG0nuYkiApLcpL-nnKLzV7W_s2G6Q&callback=initializeMap"></script>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['', 'Power', 'Production'],
            ['PV', 600, 900],
            ['mini-hydr', 1000, 700]
        ]);

        var options = {
            legend: {position: 'none'}
        };

        var chart = new google.charts.Bar(document.getElementById('chart_div_column'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
    }
</script>