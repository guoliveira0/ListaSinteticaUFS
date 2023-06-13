<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Titulo</h1>
    <table>
        <thead>
            <tr>
                <th>Bandeira</th>
                <th>Unidade Federativa</th>
                <th>Abreviação</th>
                <th>Sede de Governo</th>
                <th>Área(km²)</th>
                <th>População(2014)</th>
                <th>Densidade</th>
            </tr>
        </thead>
        <tbody>


            <?php

            $UFS = array(

                'AC' => array(
                    'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/4/4c/Bandeira_do_Acre.svg" alt="Bandeira do Acre">',
                    'unidadeFederativa' => 'Acre',
                    'abreviacao' => 'AC',
                    'sedeGoverno' => 'Rio Branco',
                    'area' => number_format(164122.2, 1, ',', '.'),
                    'populacao' => 795145 . '%',
                    'densidade' => 4.30,
                    'pib' => 13622000,
                    'total' => 0.2,
                    'pibPercapita' =>16953.46,
                    'idh' => 0.663,
                    'alfabetizacao' => 86.9,
                    'mortalidadeinfantil' => 98 
                ),
                'AL' => array(
                    'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/8/88/Bandeira_de_Alagoas.svg" alt="Bandeira do Alagoas">',
                    'unidadeFederativa' => 'Alagoas',
                    'abreviacao' => 'AL',
                    'sedeGoverno' => 'Maceió',
                    'area' => 16_4122.2,
                    'populacao' => 795145,
                    'Densidade' => 4.30,
                    'PIB' => 13622000
                ),


            );


            foreach ($UFS as $chaves => $valor) {

                echo "<tr><td>{$UFS[$chaves]['bandeira']}</td>";
                echo "<td>{$UFS[$chaves]['unidadeFederativa']}</td>";
                echo "<td>{$UFS[$chaves]['abreviacao']}</td>";
                echo "<td>{$UFS[$chaves]['sedeGoverno']}</td>";
                echo "<td>{$UFS[$chaves]['area']}</td></tr>";
                echo "<td>{$UFS[$chaves]['populacao']}</td></tr>";
            
            }


            ?>
        </tbody>


    </table>

</body>

</html>