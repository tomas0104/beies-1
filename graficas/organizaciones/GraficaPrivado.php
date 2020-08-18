<?php
$datosPrivado = $ObjetoOE->GraficaPrivado();
if ($datosPrivado) {
    foreach ($datosPrivado as $key) {
        $datosPRY[] = $key['Total'];
        $datosPRX[] = $key['Privado'];
    }
    $valoresPRX = json_encode($datosPRX);
    $valoresPRY = json_encode($datosPRY);
}
?>

<script type="text/javascript">
    function crearPR(json) {
        var parsed = JSON.parse(json);
        var arr = [];
        for (var x in parsed) {
            arr.push(parsed[x])
        }
        return arr;
    }
</script>


<script type="text/javascript">
    dataPRx = crearPR('<?php echo $valoresPRX; ?>');
    dataPRy = crearPR('<?php echo $valoresPRY; ?>');

    var dataPR = [{
            values: dataPRy,
            labels: dataPRx,
            type: 'pie'
        }];

    var layoutPR = {
        width: 1100,
        height: 600,
        title: 'Gráfica: Participación Sector privado',
        legend: {
            'orientation': 'h',
            xanchor: 'center',
            yanchor: 'top',
            y: -0.1, // play with it
            x: 0.5 // play with it
        }
    };

    Plotly.newPlot('GraficaPR', dataPR, layoutPR);

</script> 