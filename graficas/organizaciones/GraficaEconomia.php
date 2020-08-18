<?php
$datosEconomia = $ObjetoOE->GraficaEconomiaSolidaria();
if ($datosEconomia) {
    foreach ($datosEconomia as $key) {
        $datosECY[] = $key['Total'];
        $datosECX[] = $key['Economia'];
    }
    $valoresECX = json_encode($datosECX);
    $valoresECY = json_encode($datosECY);
}
?>

<script type="text/javascript">
    function crearEC(json) {
        var parsed = JSON.parse(json);
        var arr = [];
        for (var x in parsed) {
            arr.push(parsed[x])
        }
        return arr;
    }
</script>


<script type="text/javascript">
    dataECx = crearEC('<?php echo $valoresECX; ?>');
    dataECy = crearEC('<?php echo $valoresECY; ?>');

    var dataEC = [{
            values: dataECy,
            labels: dataECx,
            type: 'pie'
        }];

    var layoutEC = {
        width: 1100,
        height: 600,
        title: 'Gráfica: Participación  Organización de la economía social y solidaria',
        legend: {
            'orientation': 'h',
            xanchor: 'center',
            yanchor: 'top',
            y: -0.1, // play with it
            x: 0.5 // play with it
        }
    };

    Plotly.newPlot('GraficaEC', dataEC, layoutEC);

</script> 