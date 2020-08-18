<?php
$datosSociedad = $ObjetoOE->GraficaSociedadCivil();
if ($datosSociedad) {
    foreach ($datosSociedad as $key) {
        $datosSCY[] = $key['Total'];
        $datosSCX[] = $key['Sociedad'];
    }
    $valoresSCX = json_encode($datosSCX);
    $valoresSCY = json_encode($datosSCY);
}
?>

<script type="text/javascript">
    function crearSC(json) {
        var parsed = JSON.parse(json);
        var arr = [];
        for (var x in parsed) {
            arr.push(parsed[x])
        }
        return arr;
    }
</script>


<script type="text/javascript">
    dataSCx = crearSC('<?php echo $valoresSCX; ?>');
    dataSCy = crearSC('<?php echo $valoresSCY; ?>');

    var dataSC = [{
            values: dataSCy,
            labels: dataSCx,
            type: 'pie'
        }];

    var layoutSC = {
        width: 1100,
        height: 600,
        title: 'Gráfica: Participación  Organización de la sociedad civil',
        legend: {
            'orientation': 'h',
            xanchor: 'center',
            yanchor: 'top',
            y: -0.1, // play with it
            x: 0.5 // play with it
        }
    };

    Plotly.newPlot('GraficaSC', dataSC, layoutSC);

</script> 