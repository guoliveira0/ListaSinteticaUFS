<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unidades federativas do Brasil</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/256/206/206597.png">
</head>

<body>
    <header>
        <h1>Lista Sintética das Unidades Federativas do Brasil</h1>
    </header>
    <main>
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
                        'pibPercapita' => 16953.46,
                        'idh' => 0.663,
                        'alfabetizacao' => 86.9,
                        'mortalidadeinfantil' => 98,
                        'expectativavida' => 73.9 . 'anos'

                    ),
                    'AL' => array(
                        'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/4/4c/Bandeira_do_Acre.svg" alt="Bandeira do Acre">',
                        'unidadeFederativa' => 'Alagoas',
                        'abreviacao' => 'AL',
                        'sedeGoverno' => 'Maceió',
                        'area' => number_format(27767.7, 1, ',', '.'),
                        'populacao' => number_format(3327551, 0, ' ', '.'),
                        'densidade' => number_format(108.61, 2, ','),
                        'pib' => number_format(46364000, 0, ' ', '.'),
                        'total' => number_format(0.8, 1, ','),
                        'pibPercapita' => number_format(13877.53, 2, ',', '.'),
                        'idh' => number_format(0.631, 3, ','),
                        'alfabetizacao' => number_format(80.6, 1, ',') . '%',
                        'mortalidadeinfantil' => number_format(19.5, 1, ',') . '&#8240;',
                        'expectativavida' => number_format(71.6, 1, ',') . 'anos'
                    ),
                    'AP' => array(
                        'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/0/0c/Bandeira_do_Amap%C3%A1.svg" alt="Bandeira do Amapá">',
                        'unidadeFederativa' => 'Amapá',
                        'abreviacao' => 'AP',
                        'sedeGoverno' => 'Macapá',
                        'area' => number_format(142814.6, 1, ',', '.'),
                        'populacao' => number_format(756500, 0, ' ', '.'),
                        'densidade' => number_format(4.16, 2, ','),
                        'pib' => number_format(13861000, 0, ' ', '.'),
                        'total' => number_format(0.2, 1, ','),
                        'pibPercapita' => number_format(18079.54, 2, ',', '.'),
                        'idh' => number_format(0.708, 3, ','),
                        'alfabetizacao' => number_format(95, 1, ',') . '%',
                        'mortalidadeinfantil' => number_format(23.2, 1, ',') . '&#8240;',
                        'expectativavida' => number_format(73.9, 1, ',') . 'anos'
                    ),
                    'AM' => array(
                        'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/6/6b/Bandeira_do_Amazonas.svg" alt="Bandeira do Amazonas">',
                        'unidadeFederativa' => 'Amazonas',
                        'abreviacao' => 'AM',
                        'sedeGoverno' => 'Manaus',
                        'area' => number_format(1570745.7, 1, ',', '.'),
                        'populacao' => number_format(3893763, 0, ' ', '.'),
                        'densidade' => number_format(2.05, 2, ','),
                        'pib' => number_format(86560000, 0, ' ', '.'),
                        'total' => number_format(1.4, 1, ','),
                        'pibPercapita' => number_format(21978.95, 2, ',', '.'),
                        'idh' => number_format(0.674, 3, ','),
                        'alfabetizacao' => number_format(93.1, 1, ',') . '%',
                        'mortalidadeinfantil' => number_format(18.2, 1, ',') . '&#8240;',
                        'expectativavida' => number_format(71.9, 1, ',') . 'anos'
                    ),
                    'BA' => array(
                        'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/2/28/Bandeira_da_Bahia.svg" alt="Bandeira da Bahia">',
                        'unidadeFederativa' => 'Bahia',
                        'abreviacao' => 'BA',
                        'sedeGoverno' => 'Salvador',
                        'area' => number_format(564692.7, 1, ',', '.'),
                        'populacao' => number_format(15150143, 0, ' ', '.'),
                        'densidade' => number_format(24.46, 2, ','),
                        'pib' => number_format(245025000, 0, ' ', '.'),
                        'total' => number_format(4.1, 1, ','),
                        'pibPercapita' => number_format(16115.89, 2, ',', '.'),
                        'idh' => number_format(0.660, 3, ','),
                        'alfabetizacao' => number_format(87, 1, ',') . '%',
                        'mortalidadeinfantil' => number_format(17.3, 1, ',') . '&#8240;',
                        'expectativavida' => number_format(73.5, 1, ',') . 'anos'
                    ),
                    'CE' => array(
                        'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/2/2e/Bandeira_do_Cear%C3%A1.svg" alt="Bandeira do Ceará">',
                        'unidadeFederativa' => 'Ceará',
                        'abreviacao' => 'CE',
                        'sedeGoverno' => 'Fortaleza',
                        'area' => number_format(148825.6, 1, ',', '.'),
                        'populacao' => number_format(8867448, 0, ' ', '.'),
                        'densidade' => number_format(54.40, 2, ','),
                        'pib' => number_format(130621000, 0, ' ', '.'),
                        'total' => number_format(2.2, 1, ','),
                        'pibPercapita' => number_format(14669.14, 2, ',', '.'),
                        'idh' => number_format(0.682, 3, ','),
                        'alfabetizacao' => number_format(84.8, 1, ',') . '%',
                        'mortalidadeinfantil' => number_format(14.4, 1, ',') . '&#8240;',
                        'expectativavida' => number_format(73.8, 1, ',') . 'anos'
                    ),
                    'DF' => array(
                        'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Bandeira_do_Distrito_Federal_%28Brasil%29.svg" alt="Bandeira do Distrito Federal">',
                        'unidadeFederativa' => 'Distrito Federal',
                        'abreviacao' => 'DF',
                        'sedeGoverno' => 'Brasília',
                        'area' => number_format(5822.1, 1, ',', '.'),
                        'populacao' => number_format(2867869, 0, ' ', '.'),
                        'densidade' => number_format(400.73, 2, ','),
                        'pib' => number_format(215613000, 0, ' ', '.'),
                        'total' => number_format(3.6, 1, ','),
                        'pibPercapita' => number_format(73971.05, 2, ',', '.'),
                        'idh' => number_format(0.824, 3, ','),
                        'alfabetizacao' => number_format(97.4, 1, ',') . '%',
                        'mortalidadeinfantil' => number_format(10.5, 1, ',') . '&#8240;',
                        'expectativavida' => number_format(78.1, 1, ',') . 'anos'
                    ),
                    'ES' => array(
                        'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/4/43/Bandeira_do_Esp%C3%ADrito_Santo.svg" alt="Bandeira do Espírito Santos">',
                        'unidadeFederativa' => 'Espírito Santos',
                        'abreviacao' => 'ES',
                        'sedeGoverno' => 'Vitória',
                        'area' => number_format(46077.5, 1, ',', '.'),
                        'populacao' => number_format(3894899, 0, ' ', '.'),
                        'densidade' => number_format(73.97, 2, ','),
                        'pib' => number_format(120363000, 0, ' ', '.'),
                        'total' => number_format(2, 1, ','),
                        'pibPercapita' => number_format(30627.45, 2, ',', '.'),
                        'idh' => number_format(0.740, 3, ','),
                        'alfabetizacao' => number_format(93.8, 1, ',') . '%',
                        'mortalidadeinfantil' => number_format(8.8, 1, ',') . '&#8240;',
                        'expectativavida' => number_format(78.2, 1, ',') . 'anos'
                    ),
                    'GO' => array(
                        'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/b/be/Flag_of_Goi%C3%A1s.svg" alt="Bandeira do Goiás">',
                        'unidadeFederativa' => 'Goiás',
                        'abreviacao' => 'GO',
                        'sedeGoverno' => 'Goiânia',
                        'area' => number_format(340086.7, 1, ',', '.'),
                        'populacao' => number_format(6551322, 0, ' ', '.'),
                        'densidade' => number_format(16.52, 2, ','),
                        'pib' => number_format(173632000, 0, ' ', '.'),
                        'total' => number_format(2.9, 1, ','),
                        'pibPercapita' => number_format(26265.32, 2, ',', '.'),
                        'idh' => number_format(0.735, 3, ','),
                        'alfabetizacao' => number_format(93.5, 1, ',') . '%',
                        'mortalidadeinfantil' => number_format(14.9, 1, ',') . '&#8240;',
                        'expectativavida' => number_format(74.2, 1, ',') . 'anos'
                    ),
                    'MA' => array(
                        'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/4/45/Bandeira_do_Maranh%C3%A3o.svg" alt="Bandeira do Maranhão">',
                        'unidadeFederativa' => 'Maranhão',
                        'abreviacao' => 'MA',
                        'sedeGoverno' => 'São Luís',
                        'area' => number_format(331983.3, 1, ',', '.'),
                        'populacao' => number_format(6861924, 0, ' ', '.'),
                        'densidade' => number_format(18.38, 2, ','),
                        'pib' => number_format(78475000, 0, ' ', '.'),
                        'total' => number_format(1.3, 1, ','),
                        'pibPercapita' => number_format(11366.23, 2, ',', '.'),
                        'idh' => number_format(0.639, 3, ','),
                        'alfabetizacao' => number_format(83.3, 1, ',') . '%',
                        'mortalidadeinfantil' => number_format(21.3, 1, ',') . '&#8240;',
                        'expectativavida' => number_format(70.6, 1, ',') . 'anos'
                    ),
                    'MT' => array(
                        'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/0/0b/Bandeira_de_Mato_Grosso.svg" alt="Bandeira do Mato Grosso">',
                        'unidadeFederativa' => 'Mato Grosso',
                        'abreviacao' => 'MT',
                        'sedeGoverno' => 'Cuiabá',
                        'area' => number_format(903357.9, 1, ',', '.'),
                        'populacao' => number_format(3236578, 0, ' ', '.'),
                        'densidade' => number_format(3.10, 2, ','),
                        'pib' => number_format(107418000, 0, ' ', '.'),
                        'total' => number_format(1.8, 1, ','),
                        'pibPercapita' => number_format(32894.96, 2, ',', '.'),
                        'idh' => number_format(0.725, 3, ','),
                        'alfabetizacao' => number_format(93.5, 1, ',') . '%',
                        'mortalidadeinfantil' => number_format(16.9, 1, ',') . '&#8240;',
                        'expectativavida' => number_format(74.2, 1, ',') . 'anos'
                    ),
                    'MS' => array(
                        'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/6/64/Bandeira_de_Mato_Grosso_do_Sul.svg" alt="Bandeira do Mato Grosso do Sul">',
                        'unidadeFederativa' => 'Mato Grosso do Sul',
                        'abreviacao' => 'MS',
                        'sedeGoverno' => 'Campo Grande',
                        'area' => number_format(357125.0, 1, ',', '.'),
                        'populacao' => number_format(2630098, 0, ' ', '.'),
                        'densidade' => number_format(6.34, 2, ','),
                        'pib' => number_format(83082000, 0, ' ', '.'),
                        'total' => number_format(1.4, 1, ','),
                        'pibPercapita' => number_format(31337.22, 2, ',', '.'),
                        'idh' => number_format(0.729, 3, ','),
                        'alfabetizacao' => number_format(93.7, 1, ',') . '%',
                        'mortalidadeinfantil' => number_format(14.0, 1, ',') . '&#8240;',
                        'expectativavida' => number_format(75.5, 1, ',') . 'anos'
                    ),
                    'MG' => array(
                        'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/f/f4/Bandeira_de_Minas_Gerais.svg" alt="Bandeira de Minas Gerais">',
                        'unidadeFederativa' => 'Minas Gerais',
                        'abreviacao' => 'MG',
                        'sedeGoverno' => 'Belo Horizonte',
                        'area' => number_format(586528.3, 1, ',', '.'),
                        'populacao' => number_format(20777672, 0, ' ', '.'),
                        'densidade' => number_format(32.79, 2, ','),
                        'pib' => number_format(519326000, 0, ' ', '.'),
                        'total' => number_format(8.7, 1, ','),
                        'pibPercapita' => number_format(24884.94, 2, ',', '.'),
                        'idh' => number_format(0.731, 3, ','),
                        'alfabetizacao' => number_format(93.8, 1, ',') . '%',
                        'mortalidadeinfantil' => number_format(10.9, 1, ',') . '&#8240;',
                        'expectativavida' => number_format(77.2, 1, ',') . 'anos'
                    ),
                    'PA' => array(
                        'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/0/02/Bandeira_do_Par%C3%A1.svg" alt="Bandeira do Pará">',
                        'unidadeFederativa' => 'Pará',
                        'abreviacao' => 'PA',
                        'sedeGoverno' => 'Belém',
                        'area' => number_format(1247689.5, 1, ',', '.'),
                        'populacao' => number_format(8101180, 0, ' ', '.'),
                        'densidade' => number_format(5.58, 2, ','),
                        'pib' => number_format(130883000, 0, ' ', '.'),
                        'total' => number_format(2.2, 1, ','),
                        'pibPercapita' => number_format(16009.98, 2, ',', '.'),
                        'idh' => number_format(0.646, 3, ','),
                        'alfabetizacao' => number_format(90.7, 1, ',') . '%',
                        'mortalidadeinfantil' => number_format(16.6, 1, ',') . '&#8240;',
                        'expectativavida' => number_format(72.1, 1, ',') . 'anos'
                    ),
                    'PB' => array(
                        'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/b/bb/Bandeira_da_Para%C3%ADba.svg" alt="Bandeira da Paraíba">',
                        'unidadeFederativa' => 'Paraíba',
                        'abreviacao' => 'PB',
                        'sedeGoverno' => 'João Pessoa',
                        'area' => number_format(56439.8, 1, ',', '.'),
                        'populacao' => number_format(3950359, 0, ' ', '.'),
                        'densidade' => number_format(63.71, 2, ','),
                        'pib' => number_format(56140000, 0, ' ', '.'),
                        'total' => number_format(0.9, 1, ','),
                        'pibPercapita' => number_format(14133.32, 2, ',', '.'),
                        'idh' => number_format(0.658, 3, ','),
                        'alfabetizacao' => number_format(83.7, 1, ',') . '%',
                        'mortalidadeinfantil' => number_format(16.1, 1, ',') . '&#8240;',
                        'expectativavida' => number_format(73.2, 1, ',') . 'anos'
                    ),
                    'PR' => array(
                        'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/9/93/Bandeira_do_Paran%C3%A1.svg" alt="Bandeira do Paraná">',
                        'unidadeFederativa' => 'Paraná',
                        'abreviacao' => 'PR',
                        'sedeGoverno' => 'Curitiba',
                        'area' => number_format(199314.9, 1, ',', '.'),
                        'populacao' => number_format(11112062, 0, ' ', '.'),
                        'densidade' => number_format(51.48, 2, ','),
                        'pib' => number_format(376960000, 0, ' ', '.'),
                        'total' => number_format(6.3, 1, ','),
                        'pibPercapita' => number_format(33768.62, 2, ',', '.'),
                        'idh' => number_format(0.749, 3, ','),
                        'alfabetizacao' => number_format(95.5, 1, ',') . '%',
                        'mortalidadeinfantil' => number_format(9.3, 1, ',') . '&#8240;',
                        'expectativavida' => number_format(77.1, 1, ',') . 'anos'
                    ),
                    'PE' => array(
                        'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/5/59/Bandeira_de_Pernambuco.svg" alt="Bandeira de Pernambuco">',
                        'unidadeFederativa' => 'Pernambuco',
                        'abreviacao' => 'PE',
                        'sedeGoverno' => 'Recife',
                        'area' => number_format(98311.6, 1, ',', '.'),
                        'populacao' => number_format(9297861, 0, ' ', '.'),
                        'densidade' => number_format(85.58, 2, ','),
                        'pib' => number_format(156955000, 0, ' ', '.'),
                        'total' => number_format(2.6, 1, ','),
                        'pibPercapita' => number_format(16795.34, 2, ',', '.'),
                        'idh' => number_format(0.673, 3, ','),
                        'alfabetizacao' => number_format(87.2, 1, ',') . '%',
                        'mortalidadeinfantil' => number_format(12.7, 1, ',') . '&#8240;',
                        'expectativavida' => number_format(73.9, 1, ',') . 'anos'
                    ),
                    'PI' => array(
                        'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/3/33/Bandeira_do_Piau%C3%AD.svg" alt="Bandeira do Piauí">',
                        'unidadeFederativa' => 'Piauí',
                        'abreviacao' => 'PI',
                        'sedeGoverno' => 'Teserina',
                        'area' => number_format(251529.2, 1, ',', '.'),
                        'populacao' => number_format(3198185, 0, ' ', '.'),
                        'densidade' => number_format(11.95, 2, ','),
                        'pib' => number_format(39148000, 0, ' ', '.'),
                        'total' => number_format(0.7, 1, ','),
                        'pibPercapita' => number_format(12218.51, 2, ',', '.'),
                        'idh' => number_format(0.646, 3, ','),
                        'alfabetizacao' => number_format(82.8, 1, ',') . '%',
                        'mortalidadeinfantil' => number_format(19.1, 1, ',') . '&#8240;',
                        'expectativavida' => number_format(71.1, 1, ',') . 'anos'
                    ),
                    'RJ' => array(
                        'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/7/73/Bandeira_do_estado_do_Rio_de_Janeiro.svg" alt="Bandeira do Rio de Janeiro">',
                        'unidadeFederativa' => 'Rio de Janeiro',
                        'abreviacao' => 'RJ',
                        'sedeGoverno' => 'Rio de Janeiro',
                        'area' => number_format(43696.1, 1, ',', '.'),
                        'populacao' => number_format(16497395, 0, ' ', '.'),
                        'densidade' => number_format(352.05, 2, ','),
                        'pib' => number_format(659137000, 0, ' ', '.'),
                        'total' => number_format(11, 1, ','),
                        'pibPercapita' => number_format(39826.95, 2, ',', '.'),
                        'idh' => number_format(0.761, 3, ','),
                        'alfabetizacao' => number_format(97.3, 1, ',') . '%',
                        'mortalidadeinfantil' => number_format(11.5, 1, ',') . '&#8240;',
                        'expectativavida' => number_format(76.2, 1, ',') . 'anos'
                    ),
                    'RN' => array(
                        'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/3/30/Bandeira_do_Rio_Grande_do_Norte.svg" alt="Bandeira do Rio Grande do Norte">',
                        'unidadeFederativa' => 'Rio Grande do Norte',
                        'abreviacao' => 'RN',
                        'sedeGoverno' => 'Natal',
                        'area' => number_format(52796.8, 1, ',', '.'),
                        'populacao' => number_format(3419550, 0, ' ', '.'),
                        'densidade' => number_format(56.88, 2, ','),
                        'pib' => number_format(57250000, 0, ' ', '.'),
                        'total' => number_format(1, 1, ','),
                        'pibPercapita' => number_format(16631.86, 2, ',', '.'),
                        'idh' => number_format(0.684, 3, ','),
                        'alfabetizacao' => number_format(85.3, 1, ',') . '%',
                        'mortalidadeinfantil' => number_format(14.7, 1, ',') . '&#8240;',
                        'expectativavida' => number_format(75.7, 1, ',') . 'anos'
                    ),
                    'RS' => array(
                        'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/6/63/Bandeira_do_Rio_Grande_do_Sul.svg" alt="Bandeira do Rio Grande do Sul">',
                        'unidadeFederativa' => 'Rio Grande do Sul',
                        'abreviacao' => 'RS',
                        'sedeGoverno' => 'Porto Alegre',
                        'area' => number_format(281748.5, 1, ',', '.'),
                        'populacao' => number_format(11228091, 0, ' ', '.'),
                        'densidade' => number_format(38.49, 2, ','),
                        'pib' => number_format(381985000, 0, ' ', '.'),
                        'total' => number_format(6.4, 1, ','),
                        'pibPercapita' => number_format(33960.36, 2, ',', '.'),
                        'idh' => number_format(0.746, 3, ','),
                        'alfabetizacao' => number_format(96.8, 1, ',') . '%',
                        'mortalidadeinfantil' => number_format(9.6, 1, ',') . '&#8240;',
                        'expectativavida' => number_format(77.8, 1, ',') . 'anos'
                    ),
                    'RO' => array(
                        'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Bandeira_de_Rond%C3%B4nia.svg" alt="Bandeira de Rondônia">',
                        'unidadeFederativa' => 'Rondônia',
                        'abreviacao' => 'RO',
                        'sedeGoverno' => 'Porto Velho',
                        'area' => number_format(237576.2, 1, ',', '.'),
                        'populacao' => number_format(1755015, 0, ' ', '.'),
                        'densidade' => number_format(6.46, 2, ','),
                        'pib' => number_format(36563000, 0, ' ', '.'),
                        'total' => number_format(0.6, 1, ','),
                        'pibPercapita' => number_format(20677.95, 2, ',', '.'),
                        'idh' => number_format(0.690, 3, ','),
                        'alfabetizacao' => number_format(93.3, 1, ',') . '%',
                        'mortalidadeinfantil' => number_format(20.0, 1, ',') . '&#8240;',
                        'expectativavida' => number_format(71.3, 1, ',') . 'anos'
                    ),
                    'RR' => array(
                        'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/9/98/Bandeira_de_Roraima.svg" alt="Bandeira de Roraima">',
                        'unidadeFederativa' => 'Roraima',
                        'abreviacao' => 'RR',
                        'sedeGoverno' => 'Boa Vista',
                        'area' => number_format(224299.0, 1, ',', '.'),
                        'populacao' => number_format(500826, 0, ' ', '.'),
                        'densidade' => number_format(1.74, 2, ','),
                        'pib' => number_format(10354000, 0, ' ', '.'),
                        'total' => number_format(0.2, 1, ','),
                        'pibPercapita' => number_format(20476.71, 2, ',', '.'),
                        'idh' => number_format(0.707, 3, ','),
                        'alfabetizacao' => number_format(93.4, 1, ',') . '%',
                        'mortalidadeinfantil' => number_format(17.2, 1, ',') . '&#8240;',
                        'expectativavida' => number_format(71.5, 1, ',') . 'anos'
                    ),
                    'SC' => array(
                        'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/1/1a/Bandeira_de_Santa_Catarina.svg" alt="Bandeira de Santa Catarina">',
                        'unidadeFederativa' => 'Santa Catarina',
                        'abreviacao' => 'SC',
                        'sedeGoverno' => 'Florianópolis',
                        'area' => number_format(95346.2, 1, ',', '.'),
                        'populacao' => number_format(6734568, 0, ' ', '.'),
                        'densidade' => number_format(61.53, 2, ','),
                        'pib' => number_format(249073000, 0, ' ', '.'),
                        'total' => number_format(4.2, 1, ','),
                        'pibPercapita' => number_format(36525.28, 2, ',', '.'),
                        'idh' => number_format(0.774, 3, ','),
                        'alfabetizacao' => number_format(97.2, 1, ',') . '%',
                        'mortalidadeinfantil' => number_format(9.2, 1, ',') . '&#8240;',
                        'expectativavida' => number_format(79.1, 1, ',') . 'anos'
                    ),
                    'SP' => array(
                        'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/2/2b/Bandeira_do_estado_de_S%C3%A3o_Paulo.svg" alt="Bandeira de São Paulo">',
                        'unidadeFederativa' => 'São Paulo',
                        'abreviacao' => 'SP',
                        'sedeGoverno' => 'São Paulo',
                        'area' => number_format(248209.4, 1, ',', '.'),
                        'populacao' => number_format(44169350, 0, ' ', '.'),
                        'densidade' => number_format(162.93, 2, ','),
                        'pib' => number_format(1939890000, 0, ' ', '.'),
                        'total' => number_format(32.4, 1, ','),
                        'pibPercapita' => number_format(43694.68, 2, ',', '.'),
                        'idh' => number_format(0.783, 3, ','),
                        'alfabetizacao' => number_format(97.2, 1, ',') . '%',
                        'mortalidadeinfantil' => number_format(9.9, 1, ',') . '&#8240;',
                        'expectativavida' => number_format(78.1, 1, ',') . 'anos'
                    ),
                    'SE' => array(
                        'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/b/be/Bandeira_de_Sergipe.svg" alt="Bandeira de Sergipe">',
                        'unidadeFederativa' => 'Sergipe',
                        'abreviacao' => 'SE',
                        'sedeGoverno' => 'Aracaju',
                        'area' => number_format(21910.3, 1, ',', '.'),
                        'populacao' => number_format(2227294, 0, ' ', '.'),
                        'densidade' => number_format(89.81, 2, ','),
                        'pib' => number_format(38554000, 0, ' ', '.'),
                        'total' => number_format(0.6, 1, ','),
                        'pibPercapita' => number_format(17189.28, 2, ',', '.'),
                        'idh' => number_format(0.665, 3, ','),
                        'alfabetizacao' => number_format(85.3, 1, ',') . '%',
                        'mortalidadeinfantil' => number_format(16.2, 1, ',') . '&#8240;',
                        'expectativavida' => number_format(72.7, 1, ',') . 'anos'
                    ),
                    'TO' => array(
                        'bandeira' => '<img width="50" src="https://upload.wikimedia.org/wikipedia/commons/f/ff/Bandeira_do_Tocantins.svg" alt="Bandeira do Tocantins">',
                        'unidadeFederativa' => 'Tocantins',
                        'abreviacao' => 'TO',
                        'sedeGoverno' => 'Palmas',
                        'area' => number_format(277620.9, 1, ',', '.'),
                        'populacao' => number_format(1502759, 0, ' ', '.'),
                        'densidade' => number_format(4.70, 2, ','),
                        'pib' => number_format(28930000, 0, ' ', '.'),
                        'total' => number_format(0.5, 1, ','),
                        'pibPercapita' => number_format(19094.16, 2, ',', '.'),
                        'idh' => number_format(0.699, 3, ','),
                        'alfabetizacao' => number_format(89.6, 1, ',') . '%',
                        'mortalidadeinfantil' => number_format(15.8, 1, ',') . '&#8240;',
                        'expectativavida' => number_format(73.4, 1, ',') . 'anos'
                    )
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

    </main>
    </table>

</body>

</html>