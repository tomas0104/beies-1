<?php 
require_once '../models/ModelExperiencia.php';

$objetoG = new experiencia;

$datos = $objetoG->GraficaInicial();
if ($datos) {
  foreach ($datos as $key ) {
    $datosY[] = $key['Total'];
    $datosX[] = $key['sede'];
  }
  $valoresX =  json_encode($datosX);
  $valoresY =  json_encode($datosY);
}

?>


<script type="text/javascript">
  function crearCadena(json){
    var parsed = JSON.parse(json);
    var arr = [];
    for(var x in parsed){
      arr.push(parsed[x])
    }
    return arr;
  }
</script>


<script type="text/javascript">
  datosx = crearCadena('<?php echo $valoresX ?>');
  datosy = crearCadena('<?php echo $valoresY ?>');
  



var trace1 = {
  x: datosx,
  y: datosy,
  type: 'bar',
  text: datosy.map(String),
  textposition: 'auto',
  hoverinfo: 'none',
  marker: {
    color: 'rgb(43, 234, 176)',
    opacity: 0.6,
    line: {
      color: 'rgb(43, 234, 176)',
      width: 1.5
    }
  }
};

var data = [trace1];

var layout = {
  title: 'Gráfica Total Experiencia x Sede',
  barmode: 'stack',
  yaxis: {
    title: 'Total Experiencia'
  }
};


  Plotly.newPlot('myDiv', data, layout);
</script>