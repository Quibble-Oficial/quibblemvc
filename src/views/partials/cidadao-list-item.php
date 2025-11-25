<?php 
$badge = getStatusBadgeClasses($reclamacao['status']);
$dataCriacao = date('d/m/Y', strtotime($reclamacao['criado_em']));
?>

<tr>
    <td><?= htmlspecialchars($reclamacao['cidadao_nome'] ?? 'Cidadão Desconhecido'); ?></td>
    
    <td>
        <span class="badge <?= $badge['bg']; ?> <?= $badge['text']; ?>">
            <?= $badge['label']; ?>
        </span>
    </td>
    
    <td><?= htmlspecialchars($reclamacao['categoria_nome'] ?? 'Sem Categoria'); ?></td>

    <td><?= $dataCriacao; ?></td>

    <td>Rua Estela 433</td>
    
    <td>
        <div class="dropdown text-end">
            <a href="#" class="btn btn-dark-100 btn-icon btn-sm rounded-circle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <svg data-name="Icons/Tabler/Notification" xmlns="http://www.w3.org/2000/svg" width="13.419" height="13.419" viewBox="0 0 13.419 13.419">
                    <rect data-name="Icons/Tabler/Dots background" width="13.419" height="13.419" fill="none" />
                    <path d="M0,10.4a1.342,1.342,0,1,1,1.342,1.342A1.344,1.344,0,0,1,0,10.4Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,10.4ZM0,5.871A1.342,1.342,0,1,1,1.342,7.213,1.344,1.344,0,0,1,0,5.871Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,5.871ZM0,1.342A1.342,1.342,0,1,1,1.342,2.684,1.344,1.344,0,0,1,0,1.342Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,1.342Z" transform="translate(5.368 0.839)" fill="#6c757d" />
                </svg>
            </a>
            <div class="dropdown-menu dropdown-menu-end shadow-sm">
                <a href="<?= $base; ?>/reclamacao/<?= $reclamacao['reclamacao_id']; ?>" class="dropdown-item">Visualizar Detalhes</a>
                <?php if ($reclamacao['status'] !== 'resolvido'): ?>
                <button class="dropdown-item btn-resolver" data-id="<?= $reclamacao['reclamacao_id']; ?>">Marcar como Resolvida ✅</button>
                <?php endif; ?>
                <a href="#!" class="dropdown-item">Atribuir Gestor</a>
            </div>
        </div>
    </td>
</tr>