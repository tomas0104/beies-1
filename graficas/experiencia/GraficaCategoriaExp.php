<?php 

$datosAmbito = $objetoG->GraficaCategoria();
if ($datosAmbito) {
	foreach ($datosAmbito as $key ) {
		$datCategoriaY[] = $key['Total'];
		$datCategoriaX[] = $key['Categoria'];
	}
	$valCategoriaX =  json_encode($datCategoriaX);
	$valCategoriaY =  json_encode($datCategoriaY);
}

?>


<script type="text/javascript">
	function crearCategoria(json){
		var parsed = JSON.parse(json);
		var arr = [];
		for(var x in parsed){
			arr.push(parsed[x])
		}
		return arr;
	}
</script>


<script type="text/javascript">
	dataCategoriax = crearCategoria('<?php echo $valCategoriaX ?>');
	dataCategoriay = crearCategoria('<?php echo $valCategoriaY ?>');
	
  var dataCategoria = [{
    values: dataCategoriay,
    labels: dataCategoriax,
    type: 'pie' 
  }];

  var layoutCategoria = {
    width: 1100,
    height: 700,
    title: 'Gráfica: Categorias x Experiencia Significativa',
    legend: {
            'orientation': 'h',
            xanchor: 'center',
            yanchor: 'top',
            y: -0.1, // play with it
            x: 0.5 // play with it
          }
  };

  Plotly.newPlot('GraficaCategoria', dataCategoria, layoutCategoria);



 </script> 
