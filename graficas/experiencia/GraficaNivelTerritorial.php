<?php 

$datosx = $objetoG->NivelTerritorial();
if ($datosx) {
	foreach ($datosx as $key ) {
		$datY[] = $key['Total'];
		$datX[] = $key['Nivel'];
	}
	$valX =  json_encode($datX);
	$valY =  json_encode($datY);
}

?>


<script type="text/javascript">
	function crearNivel(json){
		var parsed = JSON.parse(json);
		var arr = [];
		for(var x in parsed){
			arr.push(parsed[x])
		}
		return arr;
	}
</script>


<script type="text/javascript">
	datax = crearNivel('<?php echo $valX ?>');
	datay = crearNivel('<?php echo $valY ?>');
	
  var data1 = [{
    values: datay,
    labels: datax,
    type: 'pie' 
  }];

  var layout2 = {
    width: 1100,
    height: 700,
    title: 'Grafica Nivel Territorial x Experiencia Significativa',
    legend: {
            'orientation': 'h',
            xanchor: 'center',
            yanchor: 'top',
            y: -0.1, // play with it
            x: 0.5 // play with it
          }
  };

  Plotly.newPlot('torta1', data1, layout2);



 </script> 
