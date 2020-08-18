<?php 

$datosVinculoExp = $objetoU->GraficaVinculoExp();
if ($datosVinculoExp) {
	foreach ($datosVinculoExp as $key ) {
		$datosVinculoY[] = $key['TotalVinculo'];
		$datosVinculoX[] = $key['Vinculo'];
	}
	$valoresVinculoX =  json_encode($datosVinculoX);
	$valoresVinculoY =  json_encode($datosVinculoY);
}

?>


<script type="text/javascript">
	function crearVinculo(json){
		var parsed = JSON.parse(json);
		var arr = [];
		for(var x in parsed){
			arr.push(parsed[x])
		}
		return arr;
	}
</script>


<script type="text/javascript">
	dataVinculox = crearVinculo('<?php echo $valoresVinculoX ?>');
	dataVinculoy = crearVinculo('<?php echo $valoresVinculoY ?>');
	



var traceVinculo = {
  x: dataVinculox,
  y: dataVinculoy,
  type: 'bar',
  text: dataVinculoy.map(String),
  textposition: 'auto',
  hoverinfo: 'none',
  marker: {
    color: 'rgb(0, 255, 153)',
    opacity: 0.6,
    line: {
      color: 'rgb(0, 255, 153)',
      width: 1.5
    }
  }
};

var data = [traceVinculo];

var layoutVinculo = {
  title: 'Gráfica: Vinculo con Experiencia',
  barmode: 'stack',
  yaxis: {
    title: 'Total Vinculo'
  }
};


	Plotly.newPlot('GráficaVinculoEXP', data, layoutVinculo);
</script>