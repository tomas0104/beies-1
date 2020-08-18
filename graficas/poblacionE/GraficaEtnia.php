<?php
$datosEtnia = $ObjetoPE->GraficaEtnia();
if ($datosEtnia) {
    foreach ($datosEtnia as $key) {
        $datosEtniaY[] = $key['Total'];
        $datosEtniaX[] = $key['Etnia'];
    }
    $valoresEtniaX = json_encode($datosEtniaX);
    $valoresEtniaY = json_encode($datosEtniaY);
}
?>

<script type="text/javascript">
	function crearEtnia(json){
		var parsed = JSON.parse(json);
		var arr = [];
		for(var x in parsed){
			arr.push(parsed[x])
		}
		return arr;
	}
</script>


<script type="text/javascript">
	dataEtniax = crearEtnia('<?php echo $valoresEtniaX ?>');
	dataEtniay = crearEtnia('<?php echo $valoresEtniaY ?>');
	
  var dataEtnia = [{
    values: dataEtniay,
    labels: dataEtniax,
    type: 'pie' 
  }];

  var layoutEtnia = {
    width: 1100,
    height: 600,
    title: 'Gráfica: Total Etnia Participante',
    legend: {
            'orientation': 'h',
            xanchor: 'center',
            yanchor: 'top',
            y: -0.1, // play with it
            x: 0.5 // play with it
          }
  };

  Plotly.newPlot('GraficaEtnia', dataEtnia, layoutEtnia);

 </script> 