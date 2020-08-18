<?php 

$datosAmbito = $objetoU->GraficaPrograma();
if ($datosAmbito) {
  foreach ($datosAmbito as $key ) {
    $datAmbitoY[] = $key['Total'];
    $datAmbitoX[] = $key['Nombre'];
  }
  $valAmbitoX =  json_encode($datAmbitoX);
  $valAmbitoY =  json_encode($datAmbitoY);
}

?>


<script type="text/javascript">
  function crearAmbito(json){
    var parsed = JSON.parse(json);
    var arr = [];
    for(var x in parsed){
      arr.push(parsed[x])
    }
    return arr;
  }
</script>


<script type="text/javascript">
  dataAmbitox = crearAmbito('<?php echo $valAmbitoX ?>');
  dataAmbitoy = crearAmbito('<?php echo $valAmbitoY ?>');
  
  var dataAmbito = [{
    values: dataAmbitoy,
    labels: dataAmbitox,
    type: 'pie' 
  }];

  var layoutAmbito = {
    width: 1100,
    height: 700,
    title: 'Gráfica: Participación por Programa Ácademico',
    legend: {
            'orientation': 'h',
            xanchor: 'center',
            yanchor: 'top',
            y: -0.1, // play with it
            x: 0.5 // play with it
          }
  };

  Plotly.newPlot('torta2', dataAmbito, layoutAmbito);



 </script> 
