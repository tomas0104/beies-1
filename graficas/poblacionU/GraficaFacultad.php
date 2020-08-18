<?php 

$datosAmbito = $objetoU->GraficaFacultad();
if ($datosAmbito) {
  foreach ($datosAmbito as $key ) {
    $datFacultadY[] = $key['Total'];
    $datFacultadX[] = $key['Facultad'];
  }
  $valFacultadX =  json_encode($datFacultadX);
  $valFacultadY =  json_encode($datFacultadY);
}

?>


<script type="text/javascript">
  function crearFacultad(json){
    var parsed = JSON.parse(json);
    var arr = [];
    for(var x in parsed){
      arr.push(parsed[x])
    }
    return arr;
  }
</script>


<script type="text/javascript">
  datafacultadx = crearFacultad('<?php echo $valFacultadX ?>');
  datafacultady = crearFacultad('<?php echo $valFacultadY ?>');
  
  var dataFacultad = [{
    values: datafacultady,
    labels: datafacultadx,
    type: 'pie' 
  }];

  var layoutFacultad = {
    width: 1100,
    height: 700,
    title: 'Gráfica: Participación por Facultad Academica',
    legend: {
            'orientation': 'h',
            xanchor: 'center',
            yanchor: 'top',
            y: -0.1, // play with it
            x: 0.5 // play with it
          }
  };

  Plotly.newPlot('tortaFacultad', dataFacultad, layoutFacultad);



 </script> 
