<?php
$datosSectorEducativo = $ObjetoOE->GraficaSectorEducativo();
if ($datosSectorEducativo) {
    foreach ($datosSectorEducativo as $key) {
        $datosSEY[] = $key['Total'];
        $datosSEX[] = $key['Educativo'];
    }
    $valoreSEpX = json_encode($datosSEX);
    $valoreSEpY = json_encode($datosSEY);
}
?>

<script type="text/javascript">
    function crearSE(json) {
        var parsed = JSON.parse(json);
        var arr = [];
        for (var x in parsed) {
            arr.push(parsed[x])
        }
        return arr;
    }
</script>


<script type="text/javascript">
    dataSEx = crearSE('<?php echo $valoreSEpX; ?>');
    dataSEy = crearSE('<?php echo $valoreSEpY; ?>');

    var dataSE = [{
            values: dataSEy,
            labels: dataSEx,
            type: 'pie'
        }];

    var layoutSE = {
        width: 1100,
        height: 600,
        title: 'Gráfica: Participación Sector Educativo',
        legend: {
            'orientation': 'h',
            xanchor: 'center',
            yanchor: 'top',
            y: -0.1, // play with it
            x: 0.5 // play with it
        }
    };

    Plotly.newPlot('GraficaSE', dataSE, layoutSE);

</script> 