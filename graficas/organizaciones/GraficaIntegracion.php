<?php
$datosIR = $ObjetoOE->GraficaIntegracion();
if ($datosIR) {
    foreach ($datosIR as $key) {
        $datosIRY[] = $key['Total'];
        $datosIRX[] = $key['Integracion'];
    }
    $valoresIRX = json_encode($datosIRX);
    $valoresIRY = json_encode($datosIRY);
}
?>

<script type="text/javascript">
    function crearIR(json) {
        var parsed = JSON.parse(json);
        var arr = [];
        for (var x in parsed) {
            arr.push(parsed[x])
        }
        return arr;
    }
</script>


<script type="text/javascript">
    dataIRx = crearIR('<?php echo $valoresIRX; ?>');
    dataIRy = crearIR('<?php echo $valoresIRY; ?>');

    var dataIR = [{
            values: dataIRy,
            labels: dataIRx,
            type: 'pie'
        }];

    var layoutIR = {
        width: 1100,
        height: 600,
        title: 'Gráfica: Participación Organismos de Integración Redes',
        legend: {
            'orientation': 'h',
            xanchor: 'center',
            yanchor: 'top',
            y: -0.1, // play with it
            x: 0.5 // play with it
        }
    };

    Plotly.newPlot('GraficaIR', dataIR, layoutIR);

</script> 