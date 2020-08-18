<?php 

$datosVinculoUni = $objetoU->GraficaVinculoUni();
if ($datosVinculoUni) {
	foreach ($datosVinculoUni as $key ) {
		$datosVinculoUniY[] = $key['TotalVinculoExp'];
		$datosVinculoUniX[] = $key['VinculoUniversidad'];
	}
	$valoresVinculoUniX =  json_encode($datosVinculoUniX);
	$valoresVinculoUniY =  json_encode($datosVinculoUniY);
}

?>


<script type="text/javascript">
	function crearVinculoUni(json){
		var parsed = JSON.parse(json);
		var arr = [];
		for(var x in parsed){
			arr.push(parsed[x])
		}
		return arr;
	}
</script>


<script type="text/javascript">
	dataVinculoUnix = crearVinculoUni('<?php echo $valoresVinculoUniX ?>');
	dataVinculoUniy = crearVinculoUni('<?php echo $valoresVinculoUniY ?>');
	

var dataUni = [{
    values: dataVinculoUniy,
    labels: dataVinculoUnix,
    type: 'pie' 
  }];

  var layoutUni = {
    width: 1100,
    height: 700,
    title: 'Gráfica: Vinculo con la Universidad',
    legend: {
            'orientation': 'h',
            xanchor: 'center',
            yanchor: 'top',
            y: -0.1, // play with it
            x: 0.5 // play with it
          }
  };

  Plotly.newPlot('GraficaVinculoUni', dataUni, layoutUni);
</script>