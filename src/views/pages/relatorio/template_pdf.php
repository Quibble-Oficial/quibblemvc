<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Relatório Gerencial Quibble</title>
    
    <style>
        /* Configurações Gerais */
        @page { margin: 0px; } /* Remove margens padrão para cabeçalho colorido encostar na borda */
        body { 
            font-family: 'Helvetica', 'Arial', sans-serif; 
            margin: 40px 40px 80px 40px; /* Margens internas do conteúdo */
            color: #333;
            background-color: #fff;
            font-size: 12px;
        }

        /* Cabeçalho do Documento */
        .header {
            position: fixed;
            top: 0; left: 0; right: 0;
            height: 15px;
            background-color: #0D6EFD; /* Azul Quibble */
        }
        
        .brand-section {
            margin-bottom: 40px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 20px;
        }
        
        /* Tabela usada para layout do cabeçalho (Dompdf não gosta de Flexbox) */
        .header-layout { width: 100%; }
        .header-layout td { vertical-align: middle; }
        .company-name { font-size: 24px; font-weight: bold; color: #0D6EFD; text-transform: uppercase; letter-spacing: 1px; }
        .report-info { text-align: right; color: #777; font-size: 10px; }

        /* Títulos de Seção */
        h2 {
            color: #0D6EFD;
            font-size: 16px;
            border-left: 5px solid #0D6EFD;
            padding-left: 10px;
            margin-top: 30px;
            margin-bottom: 10px;
            text-transform: uppercase;
        }
        
        p.description { color: #666; font-style: italic; margin-bottom: 15px; font-size: 11px; }

        /* Tabelas Estilizadas */
        .styled-table {
            width: 100%;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 12px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
        }
        .styled-table thead tr {
            background-color: #0D6EFD;
            color: #ffffff;
            text-align: left;
        }
        .styled-table th, .styled-table td { padding: 12px 15px; }
        .styled-table tbody tr { border-bottom: 1px solid #dddddd; }
        .styled-table tbody tr:nth-of-type(even) { background-color: #f3f3f3; } /* Efeito Zebra */
        .styled-table tbody tr:last-of-type { border-bottom: 2px solid #0D6EFD; }

        /* Barras de Gráfico */
        .bar-container {
            width: 100%;
            background-color: #e0e0e0;
            border-radius: 10px;
            overflow: hidden;
            height: 10px;
        }
        .bar-fill {
            height: 100%;
            background-color: #0D6EFD;
            border-radius: 10px;
        }

        /* Cards de Evolução (Simulando tabela) */
        .evolucao-wrapper { width: 100%; text-align: center; margin-top: 20px; }
        .evolucao-box {
            display: inline-block;
            width: 14%; /* Para caber 6 meses */
            background: #f8f9fa;
            border: 1px solid #e9ecef;
            border-radius: 8px;
            padding: 10px 2px;
            margin: 0 2px;
            text-align: center;
        }
        .evolucao-mes { font-size: 10px; color: #666; font-weight: bold; display: block; margin-bottom: 5px; }
        .evolucao-valor { font-size: 16px; color: #0D6EFD; font-weight: bold; display: block; }

        /* Rodapé */
        .footer {
            position: fixed;
            bottom: -30px; left: 0; right: 0;
            height: 30px;
            text-align: center;
            font-size: 9px;
            color: #999;
            border-top: 1px solid #eee;
            padding-top: 10px;
        }
        
        /* Badge de Posição */
        .badge-pos {
            background-color: #333; color: #fff; 
            padding: 3px 8px; border-radius: 50%; font-size: 10px; font-weight: bold;
        }
        .badge-top-1 { background-color: #FFC107; color: #000; } /* Dourado para 1º lugar */
    </style>
</head>
<body>

    <div class="header"></div>

    <div class="brand-section">
        <table class="header-layout">
            <tr>
                <td>
                    <span class="company-name">Quibble</span><br>
                    <span style="font-size: 10px; color: #999;">Gestão Pública Inteligente</span>
                </td>
                <td class="report-info">
                    <strong>RELATÓRIO DE DESEMPENHO</strong><br>
                    Gerado em: <?= date('d/m/Y'); ?> às <?= date('H:i'); ?><br>
                    Solicitado por: <?= htmlspecialchars($loggedUser->nome ?? 'Sistema'); ?>
                </td>
            </tr>
        </table>
    </div>

    <h2>1. Reclamações por Categoria</h2>
    <p class="description">Ranking das áreas com maior volume de solicitações registradas.</p>

    <?php if (!empty($rankingCategorias['data']) && array_sum($rankingCategorias['data']) > 0): ?>
        <table class="styled-table">
            <thead>
                <tr>
                    <th width="10%" style="text-align: center;">Pos.</th>
                    <th width="35%">Categoria</th>
                    <th width="15%" style="text-align: center;">Qtd.</th>
                    <th>Índice de Volume</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $ranking = $rankingCategorias;
                $total_max = $ranking['max_reclamacoes'] ?? 1; 
                if ($total_max == 0) $total_max = 1;

                foreach ($ranking['labels'] as $index => $label): 
                    $count = $ranking['data'][$index] ?? 0;
                    $percent = ($count / $total_max) * 100;
                    $pos = $index + 1;
                    $badgeClass = ($pos === 1) ? 'badge-top-1' : '';
                ?>
                <tr>
                    <td style="text-align: center;">
                        <span class="badge-pos <?= $badgeClass; ?>"><?= $pos; ?></span>
                    </td>
                    <td><strong><?= htmlspecialchars($label); ?></strong></td>
                    <td style="text-align: center;"><?= $count; ?></td>
                    <td style="vertical-align: middle;">
                        <div class="bar-container">
                            <div class="bar-fill" style="width: <?= $percent; ?>%;"></div>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <div style="padding: 20px; text-align: center; background: #f9f9f9; border: 1px dashed #ccc;">
            Nenhum dado disponível para o período.
        </div>
    <?php endif; ?>

    <h2>2. Evolução Temporal</h2>
    <p class="description">Acompanhamento mensal do volume de entradas no sistema (Últimos 6 meses).</p>
    
    <?php if (!empty($evolucaoMensal['labels'])): ?>
        <div class="evolucao-wrapper">
            <table style="width: 100%; border-spacing: 5px; border-collapse: separate;">
                <tr>
                    <?php foreach ($evolucaoMensal['labels'] as $index => $mes): 
                        $count = $evolucaoMensal['data'][$index];
                    ?>
                    <td class="evolucao-box">
                        <span class="evolucao-mes"><?= htmlspecialchars($mes); ?></span>
                        <span class="evolucao-valor"><?= $count; ?></span>
                        <div style="font-size: 8px; color: #ccc; margin-top: 5px;">REGISTROS</div>
                    </td>
                    <?php endforeach; ?>
                </tr>
            </table>
        </div>
    <?php else: ?>
        <p>Dados indisponíveis.</p>
    <?php endif; ?>

    <div class="footer">
        Quibble &copy; <?= date('Y'); ?> - Todos os direitos reservados.<br>
        Documento confidencial para uso de gestão municipal.
    </div>

</body>
</html>