<?php
require_once '../models/ModelPoblacionExterna.php';
$ObjetoPE = new PoblacionExterna;

$datosFomento = $ObjetoPE->GraficaFomento();
if ($datosFomento) {
    foreach ($datosFomento as $key) {
        $datosFomentoY[] = $key['Total'];
        $datosFomentoX[] = $key['Fomento'];
    }
    $valFomentoX = json_encode($datosFomentoX);
    $valFomentoY = json_encode($datosFomentoY);
}
?>

<script type="text/javascript">
    function crearFomento(json) {
        var parsed = JSON.parse(json);
        var arr = [];
        for (var x in parsed) {
            arr.push(parsed[x])
        }
        return arr;
    }
</script>


<script type="text/javascript">
    datosFomentox = crearFomento('<?php echo $valFomentoX ?>');
    datosFomentoy = crearFomento('<?php echo $valFomentoY ?>');

    var traceFomento = {
        x: datosFomentox,
        y: datosFomentoy,
        type: 'bar',
        text: datosFomentoy.map(String),
        textposition: 'auto',
        marker: {
            color: 'rgb(40, 250, 194)',
            opacity: 0.6,
            line: {
                color: 'rgb(40, 250, 194)',
                width: 1.5
            }
        }
    };

    var dataFom = [traceFomento];

    var layoutFom = {
        title: 'Gráfica Vinculo con Experiencia Institucional',
        barmode: 'stack',
        yaxis: {
            title: 'Total Población'
        },
        height: 500,

    };


    Plotly.newPlot('GraficaFomento', dataFom, layoutFom);
</script>