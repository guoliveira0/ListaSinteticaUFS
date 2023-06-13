<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unidades federativas do Brasil</title>
</head>

<body>
    <h1>Lista Sintética das Unidades Federativas do Brasil</h1>
    <table>
        <thead>
            <tr>
                <th>Bandeira</th>
                <th>Unidade Federativa</th>
                <th>Abreviação</th>
                <th>Sede de Governo</th>
                <th>Área(km²)</th>
                <th>População(2014)</th>
                <th>Densidade(2005)</th>
                <th>PIB(2015)</th>
                <th>(&#37;Total)(2015)</th>
                <th>PIB per capita(R&#36;)(2015)</th>
                <th>IDH(2010)</th>
                <th>Alfabetização(2016)</th>
                <th>Mortalidade Infantil(2016)</th>
                <th>Expectativa de Vida(2016)</th>
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
                    'mortalidadeinfantil' => 98,
                    'expectativavida' => 73.9 . 'anos' 

                ),
                'AL' => array(
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
                    'mortalidadeinfantil' => 98,
                    'expectativavida' => 73.9 . 'anos' 
                ),



            );


            foreach ($UFS as $chaves => $valor) {

                echo "<tr><td>{$UFS[$chaves]['bandeira']}</td>";
                echo "<td>{$UFS[$chaves]['unidadeFederativa']}</td>";
                echo "<td>{$UFS[$chaves]['abreviacao']}</td>";
                echo "<td>{$UFS[$chaves]['sedeGoverno']}</td>";
                echo "<td>{$UFS[$chaves]['area']}</td>";
                echo "<td>{$UFS[$chaves]['populacao']}</td>";
                echo "<td>{$UFS[$chaves]['densidade']}</td>";
                echo "<td>{$UFS[$chaves]['pib']}</td>";
                echo "<td>{$UFS[$chaves]['total']}</td>";
                echo "<td>{$UFS[$chaves]['pibPercapita']}</td>";
                echo "<td>{$UFS[$chaves]['idh']}</td>";
                echo "<td>{$UFS[$chaves]['alfabetizacao']}</td>";
                echo "<td>{$UFS[$chaves]['mortalidadeinfantil']}</td>";
                echo "<td>{$UFS[$chaves]['expectativavida']}</td></tr>";
            }


            ?>
        </tbody>


    </table>

</body>

</html>