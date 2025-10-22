<?php
if (!function_exists('getStatusBadgeClasses')) {
    function getStatusBadgeClasses($status) {
        return match ($status) {
            'pendente' => ['bg' => 'bg-teal-50', 'text' => 'text-teal-500', 'label' => 'Pendente'],
            'em_andamento' => ['bg' => 'bg-orange-50', 'text' => 'text-orange-500', 'label' => 'Em Andamento'],
            'resolvido' => ['bg' => 'bg-green-50', 'text' => 'text-green-500', 'label' => 'Resolvida'],
            'cancelado' => ['bg' => 'bg-red-50', 'text' => 'text-red-500', 'label' => 'Cancelada'],
            default => ['bg' => 'bg-gray-50', 'text' => 'text-gray-500', 'label' => 'Desconhecido'],
        };
    }
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="pt-br">

<head>
  <title>Reclamações</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <!-- Muze Favicon -->
  <link href="<?= $base; ?>/assets/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link rel="shortcut icon" href="<?= $base; ?>/assets/images/logo_padrao.svg" type="image/x-icon">
  <!-- Muze Plugins CSS -->
  <link href="<?= $base; ?>/assets/vendor/simplebar/dist/simplebar.min.css" rel="stylesheet" type="text/css" media="all">
  <!-- Muze Theme CSS -->
  <link href="<?= $base; ?>/assets/css/theme.min.css" rel="stylesheet" type="text/css" media="all">
</head>

<body class="bg-gray-100 analytics-template">

  <?php $render("aside-dashboard-dark", ['usuario' => $loggedUser]); ?>

  <!-- Muze Main Content -->
  <div class="main-content">

    <?php $render("header-dashboard", ['usuario' => $loggedUser]); ?>

    <div class="px-3 px-xxl-5 py-3 py-lg-4 border-bottom border-gray-200 after-header">
      <div class="container-fluid px-0">
        <div class="row align-items-center">
          <div class="col">
            <h1 class="h2 mb-0">Reclamações</h1>
          </div>
          <div class="col-auto d-flex align-items-center my-2 my-sm-0">
            <a href="#" class="btn btn-lg btn-outline-dark px-3 me-2 me-md-3"><span class="ps-1">Adicionar</span> <svg class="ms-4" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
                <rect data-name="Icons/Tabler/Add background" width="14" height="14" fill="none" />
                <path d="M6.329,13.414l-.006-.091V7.677H.677A.677.677,0,0,1,.585,6.329l.092-.006H6.323V.677A.677.677,0,0,1,7.671.585l.006.092V6.323h5.646a.677.677,0,0,1,.091,1.348l-.091.006H7.677v5.646a.677.677,0,0,1-1.348.091Z" fill="#1e1e1e" />
              </svg>
            </a>
            <div class="dropdown export-dropdown">
              <a href="#" role="button" id="Exportbtn" data-bs-toggle="dropdown" aria-expanded="false" class="btn btn-lg btn-warning ms-1 px-3"><span class="ps-1">Exportar</span> <svg class="ms-4" xmlns="http://www.w3.org/2000/svg" width="14" height="7.875" viewBox="0 0 14 7.875">
                  <path d="M.231.228A.8.8,0,0,1,1.256.152l.088.075,6.3,6.222a.771.771,0,0,1,.076,1.013l-.076.087-6.3,6.222a.794.794,0,0,1-1.114,0,.771.771,0,0,1-.076-1.013l.076-.087L5.973,7,.231,1.328A.771.771,0,0,1,.154.315Z" transform="translate(14) rotate(90)" fill="#1e1e1e" />
                </svg>
              </a>
              <ul class="dropdown-menu" aria-labelledby="Exportbtn">
                <li class="dropdown-sub-title">
                  <span>EXPORT AS</span>
                </li>
                <li><a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                      <g data-name="Icons/Tabler/Share" transform="translate(0)">
                        <rect data-name="Icons/Tabler/Code background" width="16" height="16" fill="none" />
                        <path d="M6.21,13.982a.6.6,0,0,1-.463-.647l.014-.08L9.044.455A.617.617,0,0,1,9.79.018a.6.6,0,0,1,.463.647l-.014.08-3.282,12.8a.612.612,0,0,1-.6.455A.629.629,0,0,1,6.21,13.982Zm5.458-3.357a.588.588,0,0,1-.059-.781l.059-.067L14.514,7,11.668,4.225a.588.588,0,0,1-.059-.781l.059-.068a.627.627,0,0,1,.8-.059l.069.059,3.282,3.2a.59.59,0,0,1,.059.781l-.059.068-3.282,3.2a.627.627,0,0,1-.87,0Zm-8.136.058-.069-.058L.18,7.424a.589.589,0,0,1-.059-.781L.18,6.575l3.282-3.2a.627.627,0,0,1,.87,0,.588.588,0,0,1,.059.781l-.059.068L1.486,7,4.333,9.776a.588.588,0,0,1,.059.781l-.059.068a.627.627,0,0,1-.8.058Z" transform="translate(0 1)" fill="#495057" />
                      </g>
                    </svg><span class="ms-2">HTML</span></a></li>
                <li><a class="dropdown-item" href="#"><svg data-name="Icons/Tabler/Share" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                      <rect data-name="Icons/Tabler/File background" width="16" height="16" fill="none" />
                      <path data-name="Combined Shape" d="M2.256,16A2.259,2.259,0,0,1,0,13.744V2.256A2.259,2.259,0,0,1,2.256,0H8a.613.613,0,0,1,.4.148l0,0L8.41.157l0,0,.005.005L8.425.17l0,0L8.435.18l4.1,4.1a.614.614,0,0,1,.185.44v9.026A2.259,2.259,0,0,1,10.462,16ZM1.231,2.256V13.744a1.026,1.026,0,0,0,1.025,1.025h8.205a1.027,1.027,0,0,0,1.026-1.025V5.333H8.821A1.436,1.436,0,0,1,7.387,3.979l0-.082V1.231H2.256A1.026,1.026,0,0,0,1.231,2.256ZM8.616,3.9a.206.206,0,0,0,.168.2l.037,0h1.8l-2-2ZM3.9,12.718a.615.615,0,0,1-.059-1.228l.059,0H8.821a.615.615,0,0,1,.059,1.228l-.059,0Zm0-3.282a.615.615,0,0,1-.059-1.228l.059,0H8.821a.615.615,0,0,1,.059,1.228l-.059,0Zm0-3.281a.616.616,0,0,1-.059-1.228l.059,0h.821a.615.615,0,0,1,.059,1.228l-.059,0Z" transform="translate(2)" fill="#495057" />
                    </svg><span class="ms-2">XML</span></a></li>
                <li><a class="dropdown-item" href="#"><svg data-name="Icons/Tabler/Share" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                      <rect data-name="Icons/Tabler/Code02 background" width="16" height="16" fill="none" />
                      <path data-name="Combined Shape" d="M2.256,16A2.259,2.259,0,0,1,0,13.744V2.256A2.259,2.259,0,0,1,2.256,0H8a.613.613,0,0,1,.4.148l0,0L8.41.157l0,0,.005.005L8.425.17l0,0L8.435.18l4.1,4.1a.614.614,0,0,1,.185.44v9.026A2.259,2.259,0,0,1,10.462,16ZM1.231,2.256V13.744a1.026,1.026,0,0,0,1.025,1.025h8.205a1.027,1.027,0,0,0,1.026-1.025V5.333H8.821A1.436,1.436,0,0,1,7.387,3.979l0-.082V1.231H2.256A1.026,1.026,0,0,0,1.231,2.256ZM8.616,3.9a.206.206,0,0,0,.168.2l.037,0h1.8l-2-2Zm-.891,8.756a.615.615,0,0,1-.3-.768l.025-.058.683-1.366L7.449,9.1A.616.616,0,0,1,7.67,8.3l.055-.031a.615.615,0,0,1,.795.22l.031.055.821,1.641a.617.617,0,0,1,.029.484l-.029.067L8.55,12.378a.614.614,0,0,1-.825.275ZM4.2,12.433l-.031-.055-.821-1.641a.617.617,0,0,1-.029-.484l.029-.067.821-1.641a.615.615,0,0,1,1.126.492L5.269,9.1l-.684,1.366.684,1.366a.615.615,0,0,1-.22.794l-.055.031a.615.615,0,0,1-.795-.22Z" transform="translate(2)" fill="#495057" />
                    </svg><span class="ms-2">JSON</span></a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#"><svg data-name="Icons/Tabler/Share" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                      <rect data-name="Icons/Tabler/Share background" width="16" height="16" fill="none" />
                      <path d="M9.846,12.923a3.07,3.07,0,0,1,.1-.768L5.516,9.874a3.077,3.077,0,1,1,0-3.748L9.943,3.845a3.084,3.084,0,1,1,.541,1.106L6.057,7.232a3.087,3.087,0,0,1,0,1.537l4.427,2.281a3.075,3.075,0,1,1-.638,1.874Zm1.231,0a1.846,1.846,0,1,0,.2-.84q-.011.028-.025.055l-.014.025A1.836,1.836,0,0,0,11.077,12.923ZM1.231,8a1.846,1.846,0,0,0,3.487.845.623.623,0,0,1,.027-.061l.017-.031a1.845,1.845,0,0,0,0-1.508l-.017-.031a.622.622,0,0,1-.027-.061A1.846,1.846,0,0,0,1.231,8ZM12.923,4.923a1.846,1.846,0,1,0-1.682-1.086l.013.024q.014.027.025.056A1.848,1.848,0,0,0,12.923,4.923Z" fill="#495057" />
                    </svg><span class="ms-2">Share</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="p-3 p-xxl-5">
      <div class="container-fluid px-0">
        <div class="row">
          <div class="col-md-6 col-lg-12 col-xl-6 col-xxl-3">
            <div class="card mb-4 rounded-12 shadow">
              <div class="card-body p-3 p-xl-3 p-xxl-4">
                <div class="row align-items-center">
                  <div class="col-5 col-xxl-6">
                    <span class="caption text-gray-600 d-block mb-1">Reclamações Totais</span>
                    <span class="h3 mb-0"><?= $statsResumo['total_reclamacoes'] ?? 0; ?></span>
                    <span class="d-block fs-11 mt-2 font-weight-semibold"><svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 16 16">
                        <g data-name="icons/tabler/trend-up" transform="translate(0)">
                          <rect data-name="Icons/Tabler/Trend background" width="16" height="16" fill="none" />
                          <path d="M.249,9.315.18,9.256a.616.616,0,0,1-.059-.8L.18,8.385,5.1,3.462A.616.616,0,0,1,5.9,3.4l.068.059L8.821,6.309,13.9,1.231H9.641A.616.616,0,0,1,9.031.7L9.025.616a.617.617,0,0,1,.532-.61L9.641,0h5.728a.614.614,0,0,1,.569.346h0l0,.008,0,.008h0a.613.613,0,0,1,.048.168V.541A.621.621,0,0,1,16,.61V6.359a.616.616,0,0,1-1.226.083l-.005-.083V2.1L9.256,7.615a.616.616,0,0,1-.8.059l-.069-.059L5.539,4.768,1.05,9.256a.615.615,0,0,1-.8.059Z" transform="translate(0 3)" fill="#20C997" />
                        </g>
                      </svg> 12.54</span>
                  </div>
                  <div class="col-7 col-xxl-6 px-xxl-0">
                    <div id="MuzeDoubleLine"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-12 col-xl-6 col-xxl-3">
            <div class="card mb-4 rounded-12 shadow">
              <div class="card-body p-3 p-xl-3 p-xxl-4">
                <div class="row align-items-center">
                  <div class="col-5 col-xxl-7">
                    <span class="caption text-gray-600 d-block mb-1">Reclamações Resolvidas</span>
                    <span class="h3 mb-0"><?= $statsResumo['total_resolvidas'] ?? 0; ?></span>
                    <span class="d-block fs-11 mt-2 font-weight-semibold"><svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
                        <g data-name="Icons/Tabler/Trend down" transform="translate(0)">
                          <rect data-name="Icons/Tabler/Trend down background" width="14" height="14" fill="none" />
                          <path d="M.218.106.158.158a.539.539,0,0,0-.052.7L.158.919,4.465,5.227a.539.539,0,0,0,.7.052l.06-.052L7.718,2.736l4.443,4.443H8.436a.539.539,0,0,0-.533.465L7.9,7.718a.54.54,0,0,0,.465.534l.073,0h5.012a.537.537,0,0,0,.5-.3h0l0-.007,0-.007h0A.537.537,0,0,0,14,7.791V7.783a.544.544,0,0,0,0-.06V2.692a.539.539,0,0,0-1.073-.072l0,.072V6.418L8.1,1.593a.539.539,0,0,0-.7-.052l-.061.052L4.846,4.084.919.158a.538.538,0,0,0-.7-.052Z" transform="translate(0 2.625)" fill="#e25563" />
                        </g>
                      </svg> -10.45</span>
                  </div>
                  <div class="col-7 col-xxl-5 pe-xxl-0">
                    <div id="MuzeSingleLine"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-12 col-xl-6 col-xxl-3">
            <div class="card mb-4 rounded-12 shadow">
              <div class="card-body p-3 p-xl-3 p-xxl-4">
                <div class="row align-items-center">
                  <div class="col-5 col-xxl-8">
                    <span class="caption text-gray-600 d-block mb-1">Reclamações em Andamento</span>
                    <span class="h3 mb-0"><?= $statsResumo['pct_em_andamento_vs_pendente'] ?? 0; ?>%</span>
                    <span class="d-block fs-11 mt-2 font-weight-semibold"><svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 16 16">
                        <g data-name="icons/tabler/trend-up" transform="translate(0)">
                          <rect data-name="Icons/Tabler/Trend background" width="16" height="16" fill="none" />
                          <path d="M.249,9.315.18,9.256a.616.616,0,0,1-.059-.8L.18,8.385,5.1,3.462A.616.616,0,0,1,5.9,3.4l.068.059L8.821,6.309,13.9,1.231H9.641A.616.616,0,0,1,9.031.7L9.025.616a.617.617,0,0,1,.532-.61L9.641,0h5.728a.614.614,0,0,1,.569.346h0l0,.008,0,.008h0a.613.613,0,0,1,.048.168V.541A.621.621,0,0,1,16,.61V6.359a.616.616,0,0,1-1.226.083l-.005-.083V2.1L9.256,7.615a.616.616,0,0,1-.8.059l-.069-.059L5.539,4.768,1.05,9.256a.615.615,0,0,1-.8.059Z" transform="translate(0 3)" fill="#20C997" />
                        </g>
                      </svg> 2.7%</span>
                  </div>
                  <div class="col-7 col-xxl-4 pe-xxl-0">
                    <div id="MuzeSimpleDonut"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-12 col-xl-6 col-xxl-3">
            <div class="card mb-4 rounded-12 shadow">
              <div class="card-body p-3 p-xl-3 p-xxl-4">
                <div class="row align-items-center">
                  <div class="col-5 col-xxl-7">
                    <span class="caption text-gray-600 d-block mb-1">Reclamações Pendentes</span>
                    <span class="h3 mb-0"><?= $statsResumo['total_pendentes'] ?? 0; ?></span>
                    <span class="d-block fs-11 mt-2 font-weight-semibold"><svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
                        <g data-name="Icons/Tabler/Trend down" transform="translate(0)">
                          <rect data-name="Icons/Tabler/Trend down background" width="14" height="14" fill="none" />
                          <path d="M.218.106.158.158a.539.539,0,0,0-.052.7L.158.919,4.465,5.227a.539.539,0,0,0,.7.052l.06-.052L7.718,2.736l4.443,4.443H8.436a.539.539,0,0,0-.533.465L7.9,7.718a.54.54,0,0,0,.465.534l.073,0h5.012a.537.537,0,0,0,.5-.3h0l0-.007,0-.007h0A.537.537,0,0,0,14,7.791V7.783a.544.544,0,0,0,0-.06V2.692a.539.539,0,0,0-1.073-.072l0,.072V6.418L8.1,1.593a.539.539,0,0,0-.7-.052l-.061.052L4.846,4.084.919.158a.538.538,0,0,0-.7-.052Z" transform="translate(0 2.625)" fill="#FD7E14" />
                        </g>
                      </svg> -0.04%</span>
                  </div>
                  <div class="col-7 col-xxl-5 pe-xxl-0">
                    <div id="MuzeColumnsChartTwo"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 mb-4">
            <div class="card rounded-12 shadow-dark-80">
              <div class="d-flex align-items-center px-3 px-md-4 py-3">
                <h5 class="card-header-title mb-0 ps-md-2 font-weight-semibold">Principais Reclamações</h5>
                <div class="dropdown export-dropdown ms-auto pe-md-2">
                  <a href="#" role="button" id="Sources" data-bs-toggle="dropdown" aria-expanded="false" class="btn btn-outline-dark border-gray-700 text-gray-700 px-3"><span>Hoje </span> <svg class="ms-2" xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13">
                      <rect data-name="Icons/Tabler/Chevron Down background" width="13" height="13" fill="none" />
                      <path d="M.214.212a.738.738,0,0,1,.952-.07l.082.07L7.1,5.989a.716.716,0,0,1,.071.94L7.1,7.011l-5.85,5.778a.738.738,0,0,1-1.034,0,.716.716,0,0,1-.071-.94l.071-.081L5.547,6.5.214,1.233A.716.716,0,0,1,.143.293Z" transform="translate(13 3.25) rotate(90)" fill="#495057" />
                    </svg>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="Sources">
                    <li><a class="dropdown-item" href="#"><span>Hoje</span></a></li>
                    <li><a class="dropdown-item" href="#"><span>Ontem</span></a></li>
                    <li><a class="dropdown-item" href="#"><span>Há 7 dias</span></a></li>
                    <li><a class="dropdown-item" href="#"><span>Há 1 mês</span></a></li>
                    <li><a class="dropdown-item" href="#"><span>Último mês</span></a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#"><svg data-name="icons/tabler/calendar" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                          <rect data-name="Icons/Tabler/Calendar background" width="16" height="16" fill="none" />
                          <path d="M2.256,16A2.259,2.259,0,0,1,0,13.743V3.9A2.259,2.259,0,0,1,2.256,1.641H3.282V.616A.615.615,0,0,1,4.507.532l.005.084V1.641H9.846V.616A.615.615,0,0,1,11.071.532l.006.084V1.641H12.1A2.259,2.259,0,0,1,14.359,3.9v9.846A2.259,2.259,0,0,1,12.1,16ZM1.231,13.743a1.027,1.027,0,0,0,1.025,1.026H12.1a1.027,1.027,0,0,0,1.026-1.026V7.795H1.231Zm11.9-7.179V3.9A1.027,1.027,0,0,0,12.1,2.872H11.077V3.9a.616.616,0,0,1-1.226.084L9.846,3.9V2.872H4.513V3.9a.615.615,0,0,1-1.225.084L3.282,3.9V2.872H2.256A1.026,1.026,0,0,0,1.231,3.9V6.564Z" transform="translate(1)" fill="#495057" />
                        </svg><span class="ms-2">Custom</span></a></li>
                  </ul>
                </div>
              </div>
              <div class="table-responsive mb-0">
                <table class="table card-table table-nowrap overflow-hidden">
                  <thead>
                    <tr>
                      <th>CIDADÃO</th>
                      <th>STATUS</th>
                      <th>CATEGORIA</th>
                      <th>DATA</th>
                      <th>LOCAL</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody class="list">
                    <?php if (!empty($listaReclamacoes)): ?>
                      <?php foreach ($listaReclamacoes as $reclamacao): ?>

                        <?php $render('cidadao-list-item', [
                          'reclamacao' => $reclamacao
                        ]); ?>

                      <?php endforeach; ?>
                    <?php else: ?>
                      <tr>
                        <td colspan="6" class="text-center">Nenhuma reclamação encontrada.</td>
                      </tr>
                    <?php endif; ?>
                  </tbody>
                </table>
              </div>
              <div class="d-flex align-items-center p-3 p-md-4 border-top border-gray-200">
                <a href="#" class="my-1 tiny font-weight-semibold mx-auto btn btn-link link-dark">Ver Mais<svg class="ms-1" data-name="icons/tabler/chevron right" xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 16 16">
                    <rect data-name="Icons/Tabler/Chevron Right background" width="16" height="16" fill="none"></rect>
                    <path d="M.26.26A.889.889,0,0,1,1.418.174l.1.086L8.629,7.371a.889.889,0,0,1,.086,1.157l-.086.1L1.517,15.74A.889.889,0,0,1,.174,14.582l.086-.1L6.743,8,.26,1.517A.889.889,0,0,1,.174.36Z" transform="translate(4)" fill="#1e1e1e"></path>
                  </svg></a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-xl-8 col-xxl-9 mb-4">
            <div class="card rounded-12 shadow-dark-80 border border-gray-50">
              <div class="card-body px-0">
                <div class="d-flex align-items-center border-bottom border-gray-200 pb-3 mb-2 px-3 px-md-4">
                  <h5 class="card-header-title mb-0 font-weight-semibold ps-md-2">Fluxo de Reclamações</h5>
                  <div class="ms-auto pe-md-2">
                    <div class="dropdown export-dropdown">
                      <a href="#" role="button" id="UserOverview" data-bs-toggle="dropdown" aria-expanded="false" class="btn btn-outline-dark text-gray-700 border-gray-700 px-3"><span>Hoje </span> <svg class="ms-2" xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13">
                          <rect data-name="Icons/Tabler/Chevron Down background" width="13" height="13" fill="none" />
                          <path d="M.214.212a.738.738,0,0,1,.952-.07l.082.07L7.1,5.989a.716.716,0,0,1,.071.94L7.1,7.011l-5.85,5.778a.738.738,0,0,1-1.034,0,.716.716,0,0,1-.071-.94l.071-.081L5.547,6.5.214,1.233A.716.716,0,0,1,.143.293Z" transform="translate(13 3.25) rotate(90)" fill="#495057" />
                        </svg>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="UserOverview">
                        <li><a class="dropdown-item" href="#"><span>Hoje</span></a></li>
                        <li><a class="dropdown-item" href="#"><span>Ontem</span></a></li>
                        <li><a class="dropdown-item" href="#"><span>Há 7 dias</span></a></li>
                        <li><a class="dropdown-item" href="#"><span>Há 1 mês</span></a></li>
                        <li><a class="dropdown-item" href="#"><span>Último mês</span></a></li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#"><svg data-name="icons/tabler/calendar" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                              <rect data-name="Icons/Tabler/Calendar background" width="16" height="16" fill="none" />
                              <path d="M2.256,16A2.259,2.259,0,0,1,0,13.743V3.9A2.259,2.259,0,0,1,2.256,1.641H3.282V.616A.615.615,0,0,1,4.507.532l.005.084V1.641H9.846V.616A.615.615,0,0,1,11.071.532l.006.084V1.641H12.1A2.259,2.259,0,0,1,14.359,3.9v9.846A2.259,2.259,0,0,1,12.1,16ZM1.231,13.743a1.027,1.027,0,0,0,1.025,1.026H12.1a1.027,1.027,0,0,0,1.026-1.026V7.795H1.231Zm11.9-7.179V3.9A1.027,1.027,0,0,0,12.1,2.872H11.077V3.9a.616.616,0,0,1-1.226.084L9.846,3.9V2.872H4.513V3.9a.615.615,0,0,1-1.225.084L3.282,3.9V2.872H2.256A1.026,1.026,0,0,0,1.231,3.9V6.564Z" transform="translate(1)" fill="#495057" />
                            </svg><span class="ms-2">Custom</span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body-inner px-3 px-md-4">
                  <div id="MuzeMultipleColumnsChartOne" class="px-md-2"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-xxl-3 mb-4">
            <div class="card rounded-12 shadow-dark-80">
              <div class="card-body px-0 pb-0">
                <div class="d-flex align-items-center border-bottom border-gray-200 pb-3 px-3 px-md-4">
                  <h5 class="card-header-title mb-0 font-weight-semibold ps-md-2">Bairros mais prejudicados</h5>
                  <div class="ms-auto pe-md-2 dropdown">
                    <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" class="btn btn-dark-100 btn-icon btn-sm rounded-circle">
                      <svg data-name="Icons/Tabler/Notification" xmlns="http://www.w3.org/2000/svg" width="13.419" height="13.419" viewBox="0 0 13.419 13.419">
                        <rect data-name="Icons/Tabler/Dots background" width="13.419" height="13.419" fill="none" />
                        <path d="M0,10.4a1.342,1.342,0,1,1,1.342,1.342A1.344,1.344,0,0,1,0,10.4Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,10.4ZM0,5.871A1.342,1.342,0,1,1,1.342,7.213,1.344,1.344,0,0,1,0,5.871Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,5.871ZM0,1.342A1.342,1.342,0,1,1,1.342,2.684,1.344,1.344,0,0,1,0,1.342Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,1.342Z" transform="translate(5.368 0.839)" fill="#6c757d" />
                      </svg>
                    </a>
                    <ul class="dropdown-menu">
                      <li class="dropdown-sub-title">
                        <span>Exportar como</span>
                      </li>
                      <li><a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                            <g data-name="Icons/Tabler/Share" transform="translate(0)">
                              <rect data-name="Icons/Tabler/Code background" width="16" height="16" fill="none"></rect>
                              <path d="M6.21,13.982a.6.6,0,0,1-.463-.647l.014-.08L9.044.455A.617.617,0,0,1,9.79.018a.6.6,0,0,1,.463.647l-.014.08-3.282,12.8a.612.612,0,0,1-.6.455A.629.629,0,0,1,6.21,13.982Zm5.458-3.357a.588.588,0,0,1-.059-.781l.059-.067L14.514,7,11.668,4.225a.588.588,0,0,1-.059-.781l.059-.068a.627.627,0,0,1,.8-.059l.069.059,3.282,3.2a.59.59,0,0,1,.059.781l-.059.068-3.282,3.2a.627.627,0,0,1-.87,0Zm-8.136.058-.069-.058L.18,7.424a.589.589,0,0,1-.059-.781L.18,6.575l3.282-3.2a.627.627,0,0,1,.87,0,.588.588,0,0,1,.059.781l-.059.068L1.486,7,4.333,9.776a.588.588,0,0,1,.059.781l-.059.068a.627.627,0,0,1-.8.058Z" transform="translate(0 1)" fill="#495057"></path>
                            </g>
                          </svg><span class="ms-2">HTML</span></a></li>
                      <li><a class="dropdown-item" href="#"><svg data-name="Icons/Tabler/Share" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                            <rect data-name="Icons/Tabler/File background" width="16" height="16" fill="none"></rect>
                            <path data-name="Combined Shape" d="M2.256,16A2.259,2.259,0,0,1,0,13.744V2.256A2.259,2.259,0,0,1,2.256,0H8a.613.613,0,0,1,.4.148l0,0L8.41.157l0,0,.005.005L8.425.17l0,0L8.435.18l4.1,4.1a.614.614,0,0,1,.185.44v9.026A2.259,2.259,0,0,1,10.462,16ZM1.231,2.256V13.744a1.026,1.026,0,0,0,1.025,1.025h8.205a1.027,1.027,0,0,0,1.026-1.025V5.333H8.821A1.436,1.436,0,0,1,7.387,3.979l0-.082V1.231H2.256A1.026,1.026,0,0,0,1.231,2.256ZM8.616,3.9a.206.206,0,0,0,.168.2l.037,0h1.8l-2-2ZM3.9,12.718a.615.615,0,0,1-.059-1.228l.059,0H8.821a.615.615,0,0,1,.059,1.228l-.059,0Zm0-3.282a.615.615,0,0,1-.059-1.228l.059,0H8.821a.615.615,0,0,1,.059,1.228l-.059,0Zm0-3.281a.616.616,0,0,1-.059-1.228l.059,0h.821a.615.615,0,0,1,.059,1.228l-.059,0Z" transform="translate(2)" fill="#495057"></path>
                          </svg><span class="ms-2">XML</span></a></li>
                      <li><a class="dropdown-item" href="#"><svg data-name="Icons/Tabler/Share" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                            <rect data-name="Icons/Tabler/Code02 background" width="16" height="16" fill="none"></rect>
                            <path data-name="Combined Shape" d="M2.256,16A2.259,2.259,0,0,1,0,13.744V2.256A2.259,2.259,0,0,1,2.256,0H8a.613.613,0,0,1,.4.148l0,0L8.41.157l0,0,.005.005L8.425.17l0,0L8.435.18l4.1,4.1a.614.614,0,0,1,.185.44v9.026A2.259,2.259,0,0,1,10.462,16ZM1.231,2.256V13.744a1.026,1.026,0,0,0,1.025,1.025h8.205a1.027,1.027,0,0,0,1.026-1.025V5.333H8.821A1.436,1.436,0,0,1,7.387,3.979l0-.082V1.231H2.256A1.026,1.026,0,0,0,1.231,2.256ZM8.616,3.9a.206.206,0,0,0,.168.2l.037,0h1.8l-2-2Zm-.891,8.756a.615.615,0,0,1-.3-.768l.025-.058.683-1.366L7.449,9.1A.616.616,0,0,1,7.67,8.3l.055-.031a.615.615,0,0,1,.795.22l.031.055.821,1.641a.617.617,0,0,1,.029.484l-.029.067L8.55,12.378a.614.614,0,0,1-.825.275ZM4.2,12.433l-.031-.055-.821-1.641a.617.617,0,0,1-.029-.484l.029-.067.821-1.641a.615.615,0,0,1,1.126.492L5.269,9.1l-.684,1.366.684,1.366a.615.615,0,0,1-.22.794l-.055.031a.615.615,0,0,1-.795-.22Z" transform="translate(2)" fill="#495057"></path>
                          </svg><span class="ms-2">JSON</span></a></li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li><a class="dropdown-item" href="#"><svg data-name="Icons/Tabler/Share" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                            <rect data-name="Icons/Tabler/Share background" width="16" height="16" fill="none"></rect>
                            <path d="M9.846,12.923a3.07,3.07,0,0,1,.1-.768L5.516,9.874a3.077,3.077,0,1,1,0-3.748L9.943,3.845a3.084,3.084,0,1,1,.541,1.106L6.057,7.232a3.087,3.087,0,0,1,0,1.537l4.427,2.281a3.075,3.075,0,1,1-.638,1.874Zm1.231,0a1.846,1.846,0,1,0,.2-.84q-.011.028-.025.055l-.014.025A1.836,1.836,0,0,0,11.077,12.923ZM1.231,8a1.846,1.846,0,0,0,3.487.845.623.623,0,0,1,.027-.061l.017-.031a1.845,1.845,0,0,0,0-1.508l-.017-.031a.622.622,0,0,1-.027-.061A1.846,1.846,0,0,0,1.231,8ZM12.923,4.923a1.846,1.846,0,1,0-1.682-1.086l.013.024q.014.027.025.056A1.848,1.848,0,0,0,12.923,4.923Z" fill="#495057"></path>
                          </svg><span class="ms-2">Compartilhar</span></a></li>
                    </ul>
                  </div>
                </div>
                <div class="list-group">
                  <div class="px-3 px-md-4 py-3 border-bottom border-gray-200">
                    <div class="row px-md-2">
                      <div class="col">
                        <!-- <img src="<?= $base; ?>/assets/svg/icons/germany@26.svg" class="avatar avatar-xs avatar-circle me-1" alt="Flag"> -->
                        <span class="ps-ms-2 font-weight-semibold text-gray-700 fs-16 me-1">1°</span>
                        <span class="ps-ms-2 font-weight-semibold text-gray-700 fs-16">Anchieta</span>
                      </div>
                      <div class="col-auto">
                        <span class="text-gray-700 fs-16">67.43%</span>
                      </div>
                    </div>
                  </div>
                  <div class="px-3 px-md-4 py-3 border-bottom border-gray-200">
                    <div class="row px-md-2">
                      <div class="col">
                        <!-- <img src="<?= $base; ?>/assets/svg/icons/united-kingdom@26.svg" class="avatar avatar-xs avatar-circle me-1" alt="Flag"> -->
                        <span class="ps-ms-2 font-weight-semibold text-gray-700 fs-16">2°</span>
                        <span class="ps-ms-2 font-weight-semibold text-gray-700 fs-16">Bangu</span>
                      </div>
                      <div class="col-auto">
                        <span class="text-gray-700 fs-16">20.11%</span>
                      </div>
                    </div>
                  </div>
                  <div class="px-3 px-md-4 py-3 border-bottom border-gray-200">
                    <div class="row px-md-2">
                      <div class="col ">
                        <!-- <img src="<?= $base; ?>/assets/svg/icons/brazil@26.svg" class="avatar avatar-xs avatar-circle me-1" alt="Flag"> -->
                        <span class="ps-ms-2 font-weight-semibold text-gray-700 fs-16">3°</span>
                        <span class="ps-ms-2 font-weight-semibold text-gray-700 fs-16">Campo Grande</span>
                      </div>
                      <div class="col-auto">
                        <span class="text-gray-700 fs-16">6.92%</span>
                      </div>
                    </div>
                  </div>
                  <div class="px-3 px-md-4 py-3 border-bottom border-gray-200">
                    <div class="row px-md-2">
                      <div class="col">
                        <!-- <img src="<?= $base; ?>/assets/svg/icons/united-states@26.svg" class="avatar avatar-xs avatar-circle me-1" alt="Flag"> -->
                        <span class="ps-ms-2 font-weight-semibold text-gray-700 fs-16 mr-4">4°</span>
                        <span class="ps-ms-2 font-weight-semibold text-gray-700 fs-16">Realengo</span>
                      </div>
                      <div class="col-auto">
                        <span class="text-gray-700 fs-16">3.56%</span>
                      </div>
                    </div>
                  </div>
                  <div class="px-3 px-md-4 py-3">
                    <div class="row px-md-2">
                      <div class="col">
                        <!-- <img src="<?= $base; ?>/assets/svg/icons/argentina@26.svg" class="avatar avatar-xs avatar-circle me-1" alt="Flag"> -->
                        <span class="ps-ms-2 font-weight-semibold text-gray-700 fs-16">5°</span>
                        <span class="ps-ms-2 font-weight-semibold text-gray-700 fs-16">Marechal Hermes </span>
                      </div>
                      <div class="col-auto">
                        <span class="text-gray-700 fs-16">1.07%</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="d-flex align-items-center p-3 p-md-4 border-top border-gray-200">
                  <a href="#" class="my-1 tiny font-weight-semibold mx-auto btn btn-link link-dark">Ver mais<svg class="ms-1" data-name="icons/tabler/chevron right" xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 16 16">
                      <rect data-name="Icons/Tabler/Chevron Right background" width="16" height="16" fill="none"></rect>
                      <path d="M.26.26A.889.889,0,0,1,1.418.174l.1.086L8.629,7.371a.889.889,0,0,1,.086,1.157l-.086.1L1.517,15.74A.889.889,0,0,1,.174,14.582l.086-.1L6.743,8,.26,1.517A.889.889,0,0,1,.174.36Z" transform="translate(4)" fill="#1e1e1e"></path>
                    </svg></a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <footer class="pt-xxl-5 mt-lg-2">
          <div class="container-fluid px-0 border-top border-gray-200 pt-2 pt-lg-3">
            <div class="row align-items-center">
              <div class="col-md-6">
                <p class="fs-16 text-gray-600 my-2">2025 &copy; Quibble - Todos os direitos reservados.</p>
              </div>
              <div class="col-md-6">
                <ul class="nav navbar">
                  <li><a href="#0">Sobre</a></li>
                  <li><a href="#0">Suporte</a></li>
                  <li><a href="#0">Contato</a></li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>

    <!-- Muze Javascript Plugins -->
    <script src="<?= $base; ?>/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= $base; ?>/assets/vendor/lodash/lodash.min.js"></script>
    <script src="<?= $base; ?>/assets/vendor/highcharts/highmaps.js"></script>
    <script src="<?= $base; ?>/assets/vendor/apexcharts/dist/apexcharts.min.js"></script>
    <script src="<?= $base; ?>/assets/vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="<?= $base; ?>/assets/js/theme-custom.js"></script>
    <script>
      // Gráfico Fluxo de reclamações 
      Highcharts.chart('MuzeMultipleColumnsChartOne', {
        chart: {
          type: 'column',
          backgroundColor: null,
          height: 350,
        },
        title: {
          text: '',
        },
        credits: {
          enabled: false,
        },
        xAxis: {
          lineWidth: 0,
          categories: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
          labels: {
            style: {
              color: '#6C757D',
              fontSize: '12px',
              fontFamily: "'Open Sans', sans-serif",
            },
          },
        },
        yAxis: {
          gridLineColor: '#E9ECEF',
          title: {
            text: '',
          },
          lineWidth: 0,
          lineColor: '#EAEAEA',
          labels: {
            style: {
              color: '#6C757D',
              fontSize: '13px',
              fontFamily: "'Open Sans', sans-serif",
            },
          },
        },
        legend: {
          align: 'left',
          verticalAlign: 'top',
          itemStyle: {
            color: '#6C757D',
            fontSize: '13px',
            fontWeight: 'normal',
            fontFamily: "'Open Sans', sans-serif",
          },
          margin: 50,
          padding: 0,
          symbolWidth: 12,
          symbolHeight: 12,
          itemDistance: 30,
          symbolPadding: 8,
        },
        plotOptions: {
          series: {
            lineWidth: 1,
          },
          column: {
            pointWidth: 12,
            borderWidth: 0
          },
        },
        series: <?= json_encode($seriesTotalAnual); ?>
      });



      //Muze Double Line Chart JavaScript
      var options = {
        series: <?= json_encode($seriesAnual); ?>,
        chart: {
          type: 'line',
          height: 90,
          zoom: {
            enabled: false
          },
          toolbar: {
            show: false,
          }
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          width: 3,
          colors: ['#008FFB', '#A8CBFE'],
          curve: 'smooth'
        },
        legend: {
          show: false,
        },
        grid: {
          show: false,
          xaxis: {
            lines: {
              show: false
            }
          },
          row: {
            colors: undefined,
            opacity: 0
          },
        },
        tooltip: {
          enabled: true,
          marker: {
            fillColors: ['#008FFB', '#A8CBFE'],
          },
          x: {
            show: false
          },
        },
        markers: {
          colors: ['#008FFB', '#A8CBFE'],
        },
        yaxis: {
          show: false,
        },
        xaxis: {
          labels: {
            show: false,
          },
          axisTicks: {
            show: false,
          },
          axisBorder: {
            show: false,
          },
          stroke: {
            width: 0,
          },
          tooltip: {
            enabled: false,
          }
        }
      };

      var chart = new ApexCharts(document.querySelector("#MuzeDoubleLine"), options);
      chart.render();

      //Muze Single Line Chart JavaScript
      var options = {
        series: <?= json_encode($seriesResolvidas); ?>,
        chart: {
          type: 'line',
          height: 90,
          zoom: {
            enabled: false
          },
          toolbar: {
            show: false,
          }
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          width: 3,
          colors: ['#008FFB', '#A8CBFE'],
          curve: 'smooth'
        },
        legend: {
          show: false,
        },
        grid: {
          show: false,
          xaxis: {
            lines: {
              show: false
            }
          },
          row: {
            colors: undefined,
            opacity: 0
          },
        },
        tooltip: {
          enabled: true,
          marker: {
            // GARANTIR QUE AS CORES SÃO AS MESMAS DO STROKE!
            fillColors: ['#008FFB', '#A8CBFE'],
          },
          x: {
            show: false
          },
        },
        yaxis: {
          show: false,
        },
        xaxis: {
          categories: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
          labels: {
            show: false,
          },
          stroke: {
            width: 0,
          },
          axisTicks: {
            show: false,
          },
          axisBorder: {
            show: false,
          },
          tooltip: {
            enabled: false,
          }
        }
      };

      var chart = new ApexCharts(document.querySelector("#MuzeSingleLine"), options);
      chart.render();

      const dadosDonutStatus = <?= json_encode($dadosDonut); ?>;

      //Muze Simple Donut Chart JavaScript
      var options = {
        series: dadosDonutStatus.series,

        chart: {
          type: 'donut',
          height: 125,
        },
        dataLabels: {
          enabled: false,
        },
        colors: ['#a8cbfe', '#008ffb'],
        stroke: {
          width: 0
        },
        legend: false,
        states: {
          hover: {
            filter: {
              type: 'none',
            }
          },
        },
        plotOptions: {
          donut: {
            size: '60%',
            background: 'transparent',
          },
          pie: {
            offsetX: 0
          }
        },
        tooltip: {
          enabled: true, // Habilite o tooltip para ver a contagem e label ao passar o mouse
          formatter: function(val, opts) {
            // Acessa o rótulo (Pendentes ou Em Andamento) através do índice global da série
            const label = opts.w.config.labels[opts.seriesIndex];

            // Retorna o rótulo (nome) e o valor (contagem)
            return label + ": " + val; // Ex: "Pendentes: 10"
          }
        },
        yaxis: {
          show: false,
        },
        labels: dadosDonutStatus.labels
      };

      var chart = new ApexCharts(document.querySelector("#MuzeSimpleDonut"), options);
      chart.render();

      //Muze Columns Chart JavaScript
      var options = {
        series: [{
          name: 'Net Profit',
          data: [40, 40, 40, 40, 40]
        }, {
          name: 'Free Cash Flow',
          data: [70, 70, 70, 70, 70]
        }],
        chart: {
          type: 'bar',
          height: 90,
          zoom: {
            enabled: false
          },
          toolbar: {
            show: false,
          }
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '50%',
            endingShape: 'rounded'
          },
        },
        dataLabels: {
          enabled: false
        },
        legend: {
          show: false,
        },
        grid: {
          show: false,
          xaxis: {
            lines: {
              show: false
            }
          },
        },
        colors: ['#008FFB', '#A8CBFE'],
        stroke: {
          show: false,
        },
        xaxis: {
          labels: {
            show: false,
          },
          axisTicks: {
            show: false,
          },
          axisBorder: {
            show: false,
          },
          stroke: {
            width: 0,
          },
          tooltip: {
            enabled: false,
          }
        },
        states: {
          hover: {
            filter: {
              type: 'none',
            }
          },
        },
        yaxis: {
          labels: {
            show: false,
          },
        },
        fill: {
          opacity: 1
        },
        tooltip: {
          enabled: false,
        }
      };

      var chart = new ApexCharts(document.querySelector("#MuzeColumnsChartTwo"), options);
      chart.render();

      //Muze Single Line Chart JavaScript
      var options = {
        series: [{
          name: '2020',
          data: [20, 40, 28, 51, 42, 70, 75, 28, 51, 42, 70, 75]
        }, {
          name: '2021',
          data: [0, 20, 36, 22, 24, 42, 35, 22, 24, 42, 35, 50]
        }],
        chart: {
          type: 'line',
          height: 380,
          zoom: {
            enabled: false
          },
          toolbar: {
            show: false,
          }
        },
        dataLabels: {
          enabled: false,
        },
        stroke: {
          width: 3,
          colors: ['#008FFB', '#A8CBFE'],
          curve: 'smooth'
        },
        legend: {
          show: true,
          position: 'top',
          horizontalAlign: 'left',
          fontSize: '13px',
          fontFamily: 'Open Sans,sans-serif',
          fontWeight: 400,
          labels: {
            colors: '#6C757D',
          },
          markers: {
            width: 12,
            height: 12,
            strokeWidth: 0,
            strokeColor: '#fff',
            fillColors: ['#0D6EFD', '#A8CBFE'],
            radius: 12,
          },
        },
        grid: {
          show: true,
          borderColor: '#E9ECEF',
          xaxis: {
            lines: {
              show: false
            }
          },
          row: {
            colors: undefined,
            opacity: 0
          },
        },
        tooltip: {
          enabled: true,
          marker: {
            fillColors: ['#008FFB', '#A8CBFE'],
          },
          x: {
            show: false
          },
        },
        markers: {
          colors: ['#008FFB', '#A8CBFE'],
        },
        yaxis: {
          show: true,
          labels: {
            style: {
              colors: '#6C757D',
              fontSize: '13px',
              fontFamily: 'Open Sans,sans-serif',
              fontWeight: 400,
            }
          },
        },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
          labels: {
            show: true,
            style: {
              colors: '#6C757D',
              fontSize: '13px',
              fontFamily: 'Open Sans,sans-serif',
              fontWeight: 400,
            }
          },
          axisTicks: {
            show: false,
          },
          axisBorder: {
            show: false,
          },
          stroke: {
            width: 0,
          },
          tooltip: {
            enabled: false,
          }
        }
      };

      var chart = new ApexCharts(document.querySelector("#MuzeDoubleLineTwo"), options);
      chart.render();

      //Muze Pie Chart JavaScript
      Highcharts.chart('MuzePieChartOne', {
        chart: {
          type: 'pie',
          backgroundColor: null,
        },
        title: {
          text: '',
        },
        credits: {
          enabled: false,
        },
        xAxis: {
          lineColor: 'transparent',
          tickLength: 0,
          labels: {
            enabled: false,
          },
        },
        yAxis: {
          gridLineColor: 'transparent',
          title: {
            text: '',
          },
          labels: {
            enabled: false,
          },
        },
        legend: {
          itemStyle: {
            color: '#6C757D',
            fontSize: '12px',
            fontWeight: '500',
            fontFamily: "'Open Sans', sans-serif",
          },
          margin: 30,
          padding: 0,
          symbolWidth: 11,
          symbolHeight: 11,
          itemDistance: 30,
          symbolPadding: 10,
        },
        plotOptions: {
          pie: {
            size: 230,
            borderWidth: 0,
            allowPointSelect: true,
          },
          series: {
            lineWidth: 0,
          },
          column: {
            pointPadding: 0,
            borderWidth: 0,
            pointWidth: 1,
          },
        },
        accessibility: {
          announceNewData: {
            enabled: true,
          },
          point: {
            valueSuffix: '%',
          }
        },
        tooltip: {
          headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
          pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
        },
        series: [{
          innerSize: '86%',
          dataLabels: [{
            enabled: false,
          }],
          name: 'Browsers',
          showInLegend: true,
          data: [{
              name: 'Email',
              y: 20,
              color: '#E6F0FF',
            },
            {
              name: 'Refferal',
              y: 15,
              color: '#81B4FE',
            },
            {
              name: 'Social',
              y: 36,
              color: '#3485FD',
            }
          ],
        }],
      });
    </script>

</html>
</body>