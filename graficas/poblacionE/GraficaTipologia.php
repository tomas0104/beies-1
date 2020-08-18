<?php
$datosTipologia = $ObjetoPE->GraficaTipologia();
if ($datosTipologia) {
    foreach ($datosTipologia as $key) {
        $datosActvidadY[] = $key['Total'];
        $datosActvidadX[] = $key['Actividad'];
    }
    $valoresActividadX = json_encode($datosActvidadX);
    $valoresActividadY = json_encode($datosActvidadY);
}
?>

<script type="text/javascript">
	function crearTipologia(json){
		var parsed = JSON.parse(json);
		var arr = [];
		for(var x in parsed){
			arr.push(parsed[x])
		}
		return arr;
	}
</script>


<script type="text/javascript">
	dataTIPOx = crearTipologia('<?php echo $valoresActividadX ?>');
	dataTIPOy = crearTipologia('<?php echo $valoresActividadY ?>');
	
  var dataTipologia = [{
    values: dataTIPOy,
    labels: dataTIPOx,
    type: 'pie' 
  }];

  var layoutTipologia = {
    width: 1100,
    height: 900,
    title: 'Gráfica: Total Tipologia de actividades',
    legend: {
            'orientation': 'h',
            xanchor: 'center',
            yanchor: 'top',
            y: -0.0, // play with it
            x: 0.0 // play with it
          }
  };

  Plotly.newPlot('GraficaTipologia', dataTipologia, layoutTipologia);

 </script> 