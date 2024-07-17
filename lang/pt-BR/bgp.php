<?php

// https://www.iana.org/assignments/bgp-parameters/bgp-parameters.xhtml#bgp-parameters-3
return [
    'error_codes' => [
        0 => 'Reservado',
        1 => 'Erro no Cabeçalho da Mensagem',
        2 => 'Erro na Mensagem OPEN',
        3 => 'Erro na Mensagem UPDATE',
        4 => 'Tempo de Espera Expirado',
        5 => 'Erro na Finite State Machine',
        6 => 'Cease',
        7 => 'Erro na Mensagem ROUTE-REFRESH',
    ],
    'error_subcodes' => [
        1 => [
            0 => 'Não Especificado',
            1 => 'Conexão Não Sincronizada',
            2 => 'Comprimento da Mensagem Incorreto',
            3 => 'Tipo de Mensagem Incorreto',
        ],
        2 => [
            0 => 'Não Especificado',
            1 => 'Número de Versão Não Suportado',
            2 => 'AS do Peer Incorreto',
            3 => 'Identificador BGP Incorreto',
            4 => 'Parâmetro Opcional Não Suportado',
            5 => '[Obsoleto]',
            6 => 'Tempo de Espera Inaceitável',
            7 => 'Incompatibilidade de Função (BGP Draft Temporário)',
        ],
        3 => [
            0 => 'Não Especificado',
            1 => 'Lista de Atributos Malformada',
            2 => 'Atributo Well-known Não Reconhecido',
            3 => 'Atributo Well-known Ausente',
            4 => 'Erro nos Flags do Atributo',
            5 => 'Erro no Comprimento do Atributo',
            6 => 'Atributo ORIGIN Inválido',
            7 => '[Obsoleto]',
            8 => 'Atributo NEXT_HOP Inválido',
            9 => 'Erro em Atributo Opcional',
            10 => 'Campo de Rede Inválido',
            11 => 'AS_PATH Malformado',
        ],
        5 => [
            0 => 'Erro Não Especificado',
            1 => 'Recebeu Mensagem Inesperada no Estado OpenSent',
            2 => 'Recebeu Mensagem Inesperada no Estado OpenConfirm',
            3 => 'Recebeu Mensagem Inesperada no Estado Established',
        ],
        6 => [
            0 => 'Reservado',
            1 => 'Número Máximo de Prefixos Alcançado',
            2 => 'Desligamento Administrativo',
            3 => 'Peer Desconfigurado',
            4 => 'Reinicialização Administrativa',
            5 => 'Conexão Rejeitada',
            6 => 'Outra Mudança de Configuração',
            7 => 'Resolução de Colisão de Conexão',
            8 => 'Sem Recursos',
            9 => 'Reinicialização Forçada',
        ],
    ],
];
