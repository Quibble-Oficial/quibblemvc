<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Desempenho da Secretaria</title>
    
    <style>
        @page { margin: 0px; }
        body { 
            font-family: 'Helvetica', 'Arial', sans-serif; 
            margin: 40px 40px 60px 40px;
            color: #333;
            background-color: #fff;
        }

        /* --- Estilos Base (Iguais ao anterior) --- */
        .header { position: fixed; top: 0; left: 0; right: 0; height: 15px; background-color: #0D6EFD; }
        .brand-section { margin-bottom: 40px; border-bottom: 1px solid #ddd; padding-bottom: 20px; }
        .header-table { width: 100%; }
        .company-name { font-size: 24px; font-weight: bold; color: #0D6EFD; text-transform: uppercase; }
        .report-info { text-align: right; color: #777; font-size: 10px; }
        .footer { position: fixed; bottom: -30px; left: 0; right: 0; height: 30px; text-align: center; font-size: 9px; color: #999; border-top: 1px solid #eee; padding-top: 10px; }

        /* --- Estilos Específicos deste Relatório --- */
        
        /* Card Principal (Total) */
        .hero-card {
            background-color: #f8f9fa;
            border: 1px solid #e9ecef;
            border-radius: 8px;
            padding: 30px;
            text-align: center;
            margin-bottom: 40px;
        }
        .hero-title { font-size: 14px; color: #666; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 10px; }
        .hero-number { font-size: 48px; font-weight: bold; color: #0D6EFD; margin: 0; }
        .hero-sub { font-size: 11px; color: #999; margin-top: 5px; }

        /* Seção de Taxas */
        h2 { color: #333; font-size: 18px; border-bottom: 2px solid #0D6EFD; padding-bottom: 10px; margin-bottom: 25px; }

        .rate-container { margin-bottom: 30px; }
        .rate-label { font-size: 12px; font-weight: bold; color: #555; margin-bottom: 8px; display: block; }
        .rate-stats { float: right; font-size: 12px; color: #333; }
        
        /* Barras de Progresso */
        .progress-bg {
            width: 100%;
            height: 20px;
            background-color: #e9ecef;
            border-radius: 4px;
            overflow: hidden;
        }
        .progress-bar { height: 100%; line-height: 20px; text-align: right; padding-right: 5px; color: white; font-size: 10px; font-weight: bold; }
        
        /* Cores das Barras */
        .bg-success { background-color: #198754; } /* Resolvidas (Verde) */
        .bg-warning { background-color: #ffc107; color: #333; } /* Em Andamento (Amarelo) */
        .bg-danger { background-color: #dc3545; } /* Pendentes (Vermelho) */
        .bg-info { background-color: #0dcaf0; }

        .summary-table { width: 100%; margin-top: 40px; border-collapse: collapse; }
        .summary-table th { text-align: left; color: #666; border-bottom: 1px solid #ddd; padding: 10px; font-size: 11px; }
        .summary-table td { padding: 10px; border-bottom: 1px solid #eee; font-size: 12px; }
        .status-dot { display: inline-block; width: 8px; height: 8px; border-radius: 50%; margin-right: 5px; }

    </style>
</head>
<body>

    <div class="header"></div>

    <div class="brand-section">
        <table class="header-table">
            <tr>
                <td>
                    <span class="company-name">Quibble</span><br>
                    <span style="font-size: 10px; color: #999;">Gestão Pública Inteligente</span>
                </td>
                <td class="report-info">
                    <strong>INDICADORES DE DESEMPENHO</strong><br>
                    Ref: Secretaria Municipal<br>
                    Data: <?= date('d/m/Y H:i'); ?>
                </td>
            </tr>
        </table>
    </div>

    <div class="hero-card">
        <div class="hero-title">Total de Reclamações Recebidas</div>
        <div class="hero-number"><?= $totais['total_reclamacoes']; ?></div>
        <div class="hero-sub">Registros na plataforma até o momento</div>
    </div>

    <h2>Taxa de Resolução e Status</h2>

    <div class="rate-container">
        <span class="rate-label">
            <span class="status-dot bg-success"></span> RECLAMAÇÕES RESOLVIDAS
            <span class="rate-stats"><?= $totais['total_resolvidas']; ?> (<?= $porcentagens['resolvidas']; ?>%)</span>
        </span>
        <div class="progress-bg">
            <div class="progress-bar bg-success" style="width: <?= $porcentagens['resolvidas']; ?>%;"></div>
        </div>
    </div>

    <div class="rate-container">
        <span class="rate-label">
            <span class="status-dot bg-warning"></span> EM ANDAMENTO
            <span class="rate-stats"><?= $totais['total_em_andamento']; ?> (<?= $porcentagens['em_andamento']; ?>%)</span>
        </span>
        <div class="progress-bg">
            <div class="progress-bar bg-warning" style="width: <?= $porcentagens['em_andamento']; ?>%;"></div>
        </div>
    </div>

    <div class="rate-container">
        <span class="rate-label">
            <span class="status-dot bg-danger"></span> PENDENTES (Não iniciadas)
            <span class="rate-stats"><?= $totais['total_pendentes']; ?> (<?= $porcentagens['pendentes']; ?>%)</span>
        </span>
        <div class="progress-bg">
            <div class="progress-bar bg-danger" style="width: <?= $porcentagens['pendentes']; ?>%;"></div>
        </div>
    </div>

    <table class="summary-table">
        <thead>
            <tr>
                <th>Métrica</th>
                <th>Valor Absoluto</th>
                <th>Representatividade</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Total Recebido</strong></td>
                <td><strong><?= $totais['total_reclamacoes']; ?></strong></td>
                <td>100%</td>
            </tr>
            <tr>
                <td>Solicitações Concluídas</td>
                <td><?= $totais['total_resolvidas']; ?></td>
                <td><?= $porcentagens['resolvidas']; ?>%</td>
            </tr>
            <tr>
                <td>Solicitações em Análise</td>
                <td><?= $totais['total_em_andamento']; ?></td>
                <td><?= $porcentagens['em_andamento']; ?>%</td>
            </tr>
            <tr>
                <td>Solicitações em Aberto</td>
                <td><?= $totais['total_pendentes']; ?></td>
                <td><?= $porcentagens['pendentes']; ?>%</td>
            </tr>
        </tbody>
    </table>

    <div class="footer">
        Documento gerado via Sistema Quibble - TCC<br>
        A veracidade dos dados depende da atualização constante pelos gestores.
    </div>

</body>
</html>