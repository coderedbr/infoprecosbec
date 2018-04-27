<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <!-- bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/locales/bootstrap-datepicker.pt-BR.min.js"></script>

  <!-- google maps -->
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type = "text/javascript">
     google.charts.load('current', {packages: ['corechart','line']});  
  </script>

  <style>
    .table-wrapper-2 {
        display: block;
        max-height: 400px;
        overflow-y: auto;
        -ms-overflow-style: -ms-autohiding-scrollbar;
    }
  </style>

</head>
<body>
  
<div class="container">

<div class="row justify-content-center">
  <h1>BEC Preços</h1>
</div>

<div class="container-fluid">
    <form>
        <div class="form-group">
            <label for="inputProduto">Produto</label>
            <input type="input" class="form-control" id="inputProduto" placeholder="Digite aqui o produto desejado" />
        </div>

        <div class="form-group">
            <label for="inputUC">UC/UGE</label>
            <input type="input" class="form-control" id="inputUC" placeholder="Digite o nome ou código da UC/UGE que será usado como referência" />
        </div>
        
        <div class="form-row">

            <div class="form-group col-md-4">
                <label for="inputDataInicial">Data Inicial</label>
                <input type="input" class="form-control" id="inputDataInicial" placeholder="Data mais recente"> 
            </div>

            <div class="form-group col-md-4">
                <label for="inputDataFinal">Data Final</label>
                <input type="input" class="form-control" id="inputDataFinal" placeholder="Data mais antiga"> 
            </div>

            <div class="form-group col-md-2">
                <label for="selectRaio">Raio da Busca</label>
                <select class="form-control" id="selectRaio">
                    <option>Livre</option>
                    <option>25km</option>
                    <option>50km</option>
                    <option>100km</option>
                </select>
            </div>
            
            <div class="form-group col-md-2" style="margin-top: 35px;">
                <button type="submit" class="btn btn-primary btn-sm">🔍 Buscar Referências</button>
            </div>

        </div>
    </form>
</div>

<hr />
<div class="row mt-4">

    <div class="col-lg-6">
      <div id="googleMap" style="width:97%;height:400px;"></div>  
    </div>

    <div class="col-lg-6 table-wrapper-2 table-responsive">

<table class="table table-hover"">
  <thead class="thead-dark table-sm" style="font-size:14px;">
    <tr>
      <th scope="col">COD UC - Órgão</th>
      <th scope="col">Qtd. OC</th>
      <th scope="col">Qtd. Unit.</th>
      <th scope="col">Valor Max. Unit.</th>
      <th scope="col">Valor Min. Unit.</th>
      <th scope="col">Média</th>
      <th scope="col">Ata</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-warning">
      <td>Todos</td>
      <td>30</td>
      <td>50000</td>
      <td>10,18</td>
      <td>4,56</td>
      <td>6,84</td>
      <td>-</td>
    </tr>
    <tr>
      <td>13375 - Av. Mariana Ubaldina do Espírito Santo</td>
      <td>3</td>
      <td>1500</td>
      <td>9,95</td>
      <td>5,38</td>
      <td>6,62</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>13375 - PREF A</td>
      <td>3</td>
      <td>1500</td>
      <td>9,95</td>
      <td>5,38</td>
      <td>6,62</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>13375 - PREF B</td>
      <td>3</td>
      <td>1500</td>
      <td>9,95</td>
      <td>5,38</td>
      <td>6,62</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>13375 - PREF C</td>
      <td>3</td>
      <td>1500</td>
      <td>9,95</td>
      <td>5,38</td>
      <td>6,62</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>13375 - PREF D</td>
      <td>3</td>
      <td>1500</td>
      <td>9,95</td>
      <td>5,38</td>
      <td>6,62</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>13375 - PREF E</td>
      <td>3</td>
      <td>1500</td>
      <td>9,95</td>
      <td>5,38</td>
      <td>6,62</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>13375 - PREF F</td>
      <td>3</td>
      <td>1500</td>
      <td>9,95</td>
      <td>5,38</td>
      <td>6,62</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>13375 - PREF G</td>
      <td>3</td>
      <td>1500</td>
      <td>9,95</td>
      <td>5,38</td>
      <td>6,62</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>13375 - PREF H</td>
      <td>3</td>
      <td>1500</td>
      <td>9,95</td>
      <td>5,38</td>
      <td>6,62</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>13375 - PREF I</td>
      <td>3</td>
      <td>1500</td>
      <td>9,95</td>
      <td>5,38</td>
      <td>6,62</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>13375 - PREF J</td>
      <td>3</td>
      <td>1500</td>
      <td>9,95</td>
      <td>5,38</td>
      <td>6,62</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>

    </div>

</div>

<hr />
<div class="row justify-content-center mt-4">
    <h3>Infográfico</h3>
</div>

<div class="row mt-2">
    <div class="col-lg-4 align-self-center">
        <p><h4 class="text-center">O valor de compra unitário mais baixo deste produto foi registrado em <b>Jan/2018</b> pelo valor de <span class="text-danger">R$ 4,56</span></h4></p>
    </div>
    <div class="col-lg-8">
        <div id="graph_comparativo_preco_medio_qtde_oc" style="width: 700px; height: 300px; margin: 0 auto"></div>
    </div>
</div>

<div class="row">
    <div class="col-lg-7">
        <div id="graph_unidade_compradora_regiao" style="width: 700px; height: 400px; margin: 0 auto"></div>
    </div>

    <div class="col-lg-3 align-self-center">
        <p><h4 class="text-center">A localiade que mais comprou esse produto foi a região intermediária de <span class="text-success">São Paulo</span>, seguido pelas regiões de <span class="text-warning">Campinas</span> e <span class="text-danger">Marília</span></h4></p>
    </div>

</div>

<div class="row">
    <div class="col-lg-4 align-self-center">
        <p><h4 class="text-center">Os órgãos do município de <span class="text-success">São Paulo</span> investiram juntos um montante de <span class="text-danger">R$10.000.000,00</span> no produto pesquisado.</h4>
        </p>
        <p><h4 class="text-center">Seu maior comprador é o Órgão <b>Prefeitura Municipal de São Paulo</b></h4></p>
    </div>
    <div class="col-lg-8">
        <div id="graph_comparativo_preco_medio" style="width: 700px; height: 400px; margin: 0 auto"></div>
    </div>
</div>

<hr />

<div class="row justify-content-center mt-4">
    <h3>Fornecedores</h3>
</div>

<div class="row">
<p>No período pesquisado foram executados <b>32</b> OC (Ordens de Compra) para este produto no portal BEC. Participaram <b>53</b> diferentes fornecedores sendo <b>18</b> diferentes vencedores. </p>

<ul>
    <li>33 EPP/ME (62%)</li>
    <li>20 Outros (38%)</li>
</ul>
</div>

</div>

<script language = "JavaScript">

$(document).ready(function() {
    // date picker
    var datepicker_options = { language: "pt-BR", format: "dd/mm/yyyy"};
    $('#inputDataInicial').datepicker(datepicker_options);
    $('#inputDataFinal').datepicker(datepicker_options);

    // autocomplete
    $('#inputUC').autocomplete({
        source: "/becprecos/auto-prefeituras",
        minLength: 2
    });
});

</script>

<script language = "JavaScript">

function drawChart() {
    chart1();
    chart2();
    chart3();
}

function chart3() {
    // Define the chart to be drawn.
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Browser');
    data.addColumn('number', 'Percentage');
    data.addRows([
       ['São Paulo', 45.0],
       ['Sorocaba', 26.8],
       ['Bauru', 12.8],
       ['Marília', 8.5],
       ['Presidente Prudente', 6.2],
       ['Araçatuba', 0.7],
       ['São José do Rio Preto', 0.7],
       ['Ribeirão Preto', 0.7],
       ['Araraquara', 0.7],
       ['Campinas', 0.7],
       ['São José dos Campos', 0.7],
    ]);
       
    // Set chart options
    var options = {
       'title':'Unidades Compradas por Região Geográfica',
       'width':700,
       'height':400,
       is3D:true
    };

    // Instantiate and draw the chart.
    var chart = new google.visualization.PieChart(document.getElementById('graph_unidade_compradora_regiao'));
    chart.draw(data, options);
}

function chart2() {
   // Define the chart to be drawn.
    var data = google.visualization.arrayToDataTable([
       ['', 'Qtd. OC', 'Preço mais baixo licitado', 'Preço médio licitado'],
       ['jan',  20, 6, 6],
       ['fev',  30, 6, 6.50],
       ['mar',  40,  6, 8],
       ['abr',  50, 11.3, 8.4],
       ['mai',  30, 17.0, 13.5],
       ['jun',  20, 22.0, 17.0],
       ['jul',  35, 24.8, 18.6],
       ['ago',  45, 24.1, 17.9],
       ['set',  55, 20.1, 14.3],
       ['out',  60, 14.1, 9.0],
       ['nov',  48,  8.6, 3.9],
       ['dez',  30,  2.5,  1.0]
    ]);
      
    // Set chart options
    var options = {
       title : 'Compartivo de preços médios praticados relacionado a quantidade de OCs',
       vAxis: {title: 'Valores em Reais'},
       hAxis: {title: '2018'},
       seriesType: 'bars',
       series: {1: {type:'line'}, 2: {type: 'line'}},
       width:700,
       height:300,
       pointsVisible: true
    };

    // Instantiate and draw the chart.
    var chart = new google.visualization.ComboChart(document.getElementById('graph_comparativo_preco_medio_qtde_oc'));
    chart.draw(data, options);
}

function chart1() {
    // Define the chart to be drawn.
    var data = google.visualization.arrayToDataTable([
        ['Cidade', 'Valores', { role: 'style' }],
        ['São Paulo', 10000000, '#7030A0'],
        ['Osasco', 7500000, '#0F2D69'],
        ['Campinas', 5500000, '#89BC01'],
        ['Jundiaí', 4000000, '#00B0F0'],
        ['Guarulhos', 1500000, '#00B050'],
        ['Ribeirão Preto', 1000000, '#92D050'],
        ['São Bernardo do Campo', 800000, '#FFFF00'],
        ['Bauru', 500000, '#FFC000'],
        ['Sorocaba', 200000, '#FF0000'],
        ['Americana', 100000, '#C74444']
    ]);
       
    // Set chart options
    var options = {'title' : 'Top 10 Municípios que mais compraram',
       hAxis: {
          title: 'Valores'
       },
       vAxis: {
          title: 'Municípios'
       },   
       'width':700,
       'height':400,
       'legend': {position: 'none'},
       pointsVisible: true
    };

    // Instantiate and draw the chart.
    var chart = new google.visualization.BarChart(document.getElementById('graph_comparativo_preco_medio'));
    chart.draw(data, options);
}
    google.charts.setOnLoadCallback(drawChart);
</script>

<script>
function myMap() {
    var points = [
        [-23.37132835,-46.50763057, "PREF A"],
        [-23.38068342,-46.51933063, "PREF B"],
        [-23.50887798,-46.49556224, "PREF C"],
        [-23.39671372,-46.56571462, "PREF D"],
        [-23.4004857,-46.48551614, "PREF E"],
        [-23.49869399,-46.46341492, "PREF F"],
        [-23.42659273,-46.50713995, "PREF G"],
        [-23.40505111,-46.57076647, "PREF H"],
        [-23.48297368,-46.60150233, "PREF I"],
        [-23.45003868,-46.52589159, "PREF J"]
    ];

    var myCenter = new google.maps.LatLng(-23.45646630689063, -46.5166256);
    var mapProp = {
        center:myCenter,
        zoom:11,
        disableDefaultUI: true
    };

    var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
    var infowindow = new google.maps.InfoWindow({
        content: 'Av. Mariana Ubaldina do Espírito Santo'
    })

    var marker = new google.maps.Marker({position: myCenter, map: map});
    marker.addListener('click', function() {
          infowindow.open(map, marker);
    });

    infowindow.open(map, marker);

    var markers = geraMarks(points, map);
    var markerCluster = new MarkerClusterer(map, markers,
            {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});

    function geraMarks(points, map)
    {
        var markers = [];
        points.forEach(p => {
            var pi = new google.maps.LatLng(p[0], p[1]);
            var m = new google.maps.Marker({position: pi });

            m.addListener('click', function() {
                var infowindow = new google.maps.InfoWindow({
                    content: p[2]
                })
                infowindow.open(map, m);
            });

            markers.push(m);
        }) 
    
        return markers;
    }

}
</script>

<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>

<script async defer 
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhtS5U20lVTSdHMti3O0iol7Vqzd2QMaI&callback=myMap"></script>

</body>
</html>