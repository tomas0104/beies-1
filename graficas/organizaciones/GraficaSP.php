<?php 
require_once '../models/ModelOrganizacionExterna.php';

$ObjetoOE = new ModelOrganizacion;

$datosSectorPublico = $ObjetoOE->GraficaSectorPublico();
if ($datosSectorPublico) {
	foreach ($datosSectorPublico as $key ) {
		$datosSPY[] = $key['TotalPublico'];
		$datosSPX[] = $key['SectorPublico'];
	}
	$valoresspX =  json_encode($datosSPX);
	$valoresspY =  json_encode($datosSPY);
}

?>

<script type="text/javascript">
	function crearSP(json){
		var parsed = JSON.parse(json);
		var arr = [];
		for(var x in parsed){
			arr.push(parsed[x])
		}
		return arr;
	}
</script>


<script type="text/javascript">
    dataSSx = crearSP('<?php echo $valoresspX; ?>');
    dataSSy = crearSP('<?php echo $valoresspY; ?>');

    var dataSS = [{
            values: dataSSy,
            labels: dataSSx,
            type: 'pie'
        }];

    var layoutSS = {
        width: 1100,
        height: 600,
        title: 'Gráfica: Participación Sector Público',
        legend: {
            'orientation': 'h',
            xanchor: 'center',
            yanchor: 'top',
            y: -0.1, // play with it
            x: 0.5 // play with it
        }
    };

    Plotly.newPlot('GraficaSP', dataSS, layoutSS);

</script> 