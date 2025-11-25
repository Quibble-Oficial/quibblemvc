<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Relatório de Reclamações Quibble - Detalhado</title>
    
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; font-size: 10pt; }
        h1, h2 { color: #0D6EFD; border-bottom: 2px solid #eee; padding-bottom: 5px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; vertical-align: middle; }
        th { background-color: #f8f8f8; }
        
        /* Estilo para a barra de ranking */
        .bar-container { width: 100%; background-color: #eee; border-radius: 4px; overflow: hidden; height: 15px; }
        .bar-fill { height: 100%; background-color: #0D6EFD; }

        /* Estilo para o gráfico de evolução temporal (simulação de tabela) */
        .evolucao-table th { width: 16%; text-align: center; }
        .evolucao-table td { text-align: center; }
        .data-point { background-color: #0D6EFD; color: white; padding: 3px 5px; border-radius: 3px; font-weight: bold; }
        
    </style>
</head>
<body>

    <h1>Relatório de Desempenho do Quibble</h1>
    <p>Período de Análise: Últimos 6 meses (Exemplo)</p>
    <p>Data de Geração: <?= date('d/m/Y H:i:s'); ?></p>

    <h2>1. Reclamações Recebidas por Categoria (Ranking)</h2>
    <p>Visualização das categorias mais acionadas pela população, indicando as áreas prioritárias.</p>

    <table>
        <thead>
            <tr>
                <th>Ranking</th>
                <th>Categoria</th>
                <th>Contagem</th>
                <th style="width: 50%;">Representação Gráfica</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $ranking = $rankingCategorias;
            $total_max = $ranking['max_reclamacoes'] ?? max($ranking['data']); // Usa o valor máximo para a barra
            
            foreach ($ranking['labels'] as $index => $label): 
                $count = $ranking['data'][$index];
                $percent = ($count / $total_max) * 100;
            ?>
            <tr>
                <td><?= $index + 1; ?>º</td>
                <td><?= htmlspecialchars($label); ?></td>
                <td><?= $count; ?></td>
                <td>
                    <div class="bar-container">
                        <div class="bar-fill" style="width: <?= $percent; ?>%;"></div>
                    </div>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <br>

    <h2>2. Evolução Temporal</h2>
    <p>Análise da variação no volume de reclamações recebidas ao longo do tempo.</p>
    
    <table class="evolucao-table">
        <thead>
            <tr>
                <?php foreach ($evolucaoMensal['labels'] as $mes): ?>
                    <th><?= htmlspecialchars($mes); ?></th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php foreach ($evolucaoMensal['data'] as $count): ?>
                    <td><span class="data-point"><?= $count; ?></span></td>
                <?php endforeach; ?>
            </tr>
        </tbody>
    </table>

    <p style="margin-top: 40px; font-size: 8pt; text-align: center;">Este relatório foi gerado automaticamente pelo sistema Quibble.</p>

</body>
</html>