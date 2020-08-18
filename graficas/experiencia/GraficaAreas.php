<?php 

$datosAreas = $objetoG->GraficaAreas();
if ($datosAreas) {
	foreach ($datosAreas as $key ) {
		$datAreaY[] = $key['Total'];
		$datAreaX[] = $key['Area'];
	}
	$valAreaX =  json_encode($datAreaX);
	$valAreaY =  json_encode($datAreaY);
}

?>


<script type="text/javascript">
	function crearArea(json){
		var parsed = JSON.parse(json);
		var arr = [];
		for(var x in parsed){
			arr.push(parsed[x])
		}
		return arr;
	}
</script>


<script type="text/javascript">
	dataAreax = crearArea('<?php echo $valAreaX ?>');
	dataAreay = crearArea('<?php echo $valAreaY ?>');
	
  var dataArea = [{
    values: dataAreay,
    labels: dataAreax,
    type: 'pie' 
  }];

  var layoutArea = {
    width: 1100,
    height: 700,
    title: 'Gráfica: Areas x Experiencia Significativa',
    legend: {
            'orientation': 'h',
            xanchor: 'center',
            yanchor: 'top',
            y: -0.1, // play with it
            x: 0.5 // play with it
          }
  };

  Plotly.newPlot('GraficaArea', dataArea, layoutArea);
 </script> 
