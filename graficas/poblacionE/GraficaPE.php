<?php

$datosSectorPublico = $ObjetoPE->GraficaPoblacion();
if ($datosSectorPublico) {
    foreach ($datosSectorPublico as $key) {
        $datosSPY[] = $key['TotalPoblacion'];
        $datosSPX[] = $key['Vinculo'];
    }
    $valoresspX = json_encode($datosSPX);
    $valoresspY = json_encode($datosSPY);
}
?>

<script type="text/javascript">
    function crearPE(json) {
        var parsed = JSON.parse(json);
        var arr = [];
        for (var x in parsed) {
            arr.push(parsed[x])
        }
        return arr;
    }
</script>


<script type="text/javascript">
    datosSPx = crearPE('<?php echo $valoresspX ?>');
    datosSPy = crearPE('<?php echo $valoresspY ?>');

    var traceSP = {
        x: datosSPx,
        y: datosSPy,
        type: 'bar',
        text: datosSPy.map(String),
        textposition: 'auto',
        marker: {
            color: 'rgb(52, 196, 225)',
            opacity: 0.6,
            line: {
                color: 'rgb(52, 196, 225)',
                width: 1.5
            }
        }
    };

    var data1 = [traceSP];

    var layout1 = {
        title: 'Gráfica Vinculo con Experiencia Institucional',
        barmode: 'stack',
        yaxis: {
            title: 'Total Población'
        },
        height: 500,

    };


    Plotly.newPlot('GraficaTotal', data1, layout1);
</script>