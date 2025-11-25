<?php // Arquivo convertido de HTML para PHP ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<title>Mapa de Problemas</title>
<meta charset="UTF-8">
<meta name="description" content="Presenting Muze, All-in-one Bootstrap 5 Analytics Admin Dashboard, 30+ premium HTML pages, 500+ components, dark mode, RTL. Starts @ Only $35">
<meta name="title" content="Muze Bootstrap 5 Analytics Templates, Pages & Dashboard, analytics chart, chart design, chart template">
<meta name="keywords" content="bootstrap analytics dashboard page, bootstrap analytics dashboard template">
<meta name="author" content="Muze Dashboard">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- Muze Favicon -->
<link href="<?= $base;?>/assets/favicon.ico" rel="shortcut icon" type="image/x-icon">
<!-- Muze Plugins CSS -->
<link href="<?= $base;?>/assets/vendor/simplebar/dist/simplebar.min.css" rel="stylesheet" type="text/css" media="all">
<!-- Muze Theme CSS -->
<link href="<?= $base;?>/assets/css/theme.min.css" rel="stylesheet" type="text/css" media="all">
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
          <h1 class="h2 mb-0">Mapa</h1>
        </div>
        <div class="col-auto d-flex align-items-center my-2 my-sm-0">
          
          <div class="dropdown export-dropdown">
            <a href="#" role="button" id="Exportbtn" data-bs-toggle="dropdown" aria-expanded="false" class="btn btn-lg btn-warning ms-1 px-3"><span class="ps-1">Gerar Relatório</span> <svg class="ms-4" xmlns="http://www.w3.org/2000/svg" width="14" height="7.875" viewBox="0 0 14 7.875">
              <path d="M.231.228A.8.8,0,0,1,1.256.152l.088.075,6.3,6.222a.771.771,0,0,1,.076,1.013l-.076.087-6.3,6.222a.794.794,0,0,1-1.114,0,.771.771,0,0,1-.076-1.013l.076-.087L5.973,7,.231,1.328A.771.771,0,0,1,.154.315Z" transform="translate(14) rotate(90)" fill="#1e1e1e"/>
            </svg>
            </a>
            <ul class="dropdown-menu" aria-labelledby="Exportbtn">
              <li class="dropdown-sub-title">
                <span>EXPORT AS</span>
              </li>
              <li><a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                <g data-name="Icons/Tabler/Share" transform="translate(0)">
                  <rect data-name="Icons/Tabler/Code background" width="16" height="16" fill="none"/>
                  <path d="M6.21,13.982a.6.6,0,0,1-.463-.647l.014-.08L9.044.455A.617.617,0,0,1,9.79.018a.6.6,0,0,1,.463.647l-.014.08-3.282,12.8a.612.612,0,0,1-.6.455A.629.629,0,0,1,6.21,13.982Zm5.458-3.357a.588.588,0,0,1-.059-.781l.059-.067L14.514,7,11.668,4.225a.588.588,0,0,1-.059-.781l.059-.068a.627.627,0,0,1,.8-.059l.069.059,3.282,3.2a.59.59,0,0,1,.059.781l-.059.068-3.282,3.2a.627.627,0,0,1-.87,0Zm-8.136.058-.069-.058L.18,7.424a.589.589,0,0,1-.059-.781L.18,6.575l3.282-3.2a.627.627,0,0,1,.87,0,.588.588,0,0,1,.059.781l-.059.068L1.486,7,4.333,9.776a.588.588,0,0,1,.059.781l-.059.068a.627.627,0,0,1-.8.058Z" transform="translate(0 1)" fill="#495057"/>
                </g>
              </svg><span class="ms-2">HTML</span></a></li>
              <li><a class="dropdown-item" href="#"><svg data-name="Icons/Tabler/Share" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                <rect data-name="Icons/Tabler/File background" width="16" height="16" fill="none"/>
                <path data-name="Combined Shape" d="M2.256,16A2.259,2.259,0,0,1,0,13.744V2.256A2.259,2.259,0,0,1,2.256,0H8a.613.613,0,0,1,.4.148l0,0L8.41.157l0,0,.005.005L8.425.17l0,0L8.435.18l4.1,4.1a.614.614,0,0,1,.185.44v9.026A2.259,2.259,0,0,1,10.462,16ZM1.231,2.256V13.744a1.026,1.026,0,0,0,1.025,1.025h8.205a1.027,1.027,0,0,0,1.026-1.025V5.333H8.821A1.436,1.436,0,0,1,7.387,3.979l0-.082V1.231H2.256A1.026,1.026,0,0,0,1.231,2.256ZM8.616,3.9a.206.206,0,0,0,.168.2l.037,0h1.8l-2-2ZM3.9,12.718a.615.615,0,0,1-.059-1.228l.059,0H8.821a.615.615,0,0,1,.059,1.228l-.059,0Zm0-3.282a.615.615,0,0,1-.059-1.228l.059,0H8.821a.615.615,0,0,1,.059,1.228l-.059,0Zm0-3.281a.616.616,0,0,1-.059-1.228l.059,0h.821a.615.615,0,0,1,.059,1.228l-.059,0Z" transform="translate(2)" fill="#495057"/>
              </svg><span class="ms-2">XML</span></a></li>
              <li><a class="dropdown-item" href="#"><svg data-name="Icons/Tabler/Share" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                <rect data-name="Icons/Tabler/Code02 background" width="16" height="16" fill="none"/>
                <path data-name="Combined Shape" d="M2.256,16A2.259,2.259,0,0,1,0,13.744V2.256A2.259,2.259,0,0,1,2.256,0H8a.613.613,0,0,1,.4.148l0,0L8.41.157l0,0,.005.005L8.425.17l0,0L8.435.18l4.1,4.1a.614.614,0,0,1,.185.44v9.026A2.259,2.259,0,0,1,10.462,16ZM1.231,2.256V13.744a1.026,1.026,0,0,0,1.025,1.025h8.205a1.027,1.027,0,0,0,1.026-1.025V5.333H8.821A1.436,1.436,0,0,1,7.387,3.979l0-.082V1.231H2.256A1.026,1.026,0,0,0,1.231,2.256ZM8.616,3.9a.206.206,0,0,0,.168.2l.037,0h1.8l-2-2Zm-.891,8.756a.615.615,0,0,1-.3-.768l.025-.058.683-1.366L7.449,9.1A.616.616,0,0,1,7.67,8.3l.055-.031a.615.615,0,0,1,.795.22l.031.055.821,1.641a.617.617,0,0,1,.029.484l-.029.067L8.55,12.378a.614.614,0,0,1-.825.275ZM4.2,12.433l-.031-.055-.821-1.641a.617.617,0,0,1-.029-.484l.029-.067.821-1.641a.615.615,0,0,1,1.126.492L5.269,9.1l-.684,1.366.684,1.366a.615.615,0,0,1-.22.794l-.055.031a.615.615,0,0,1-.795-.22Z" transform="translate(2)" fill="#495057"/>
              </svg><span class="ms-2">JSON</span></a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#"><svg data-name="Icons/Tabler/Share" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                <rect data-name="Icons/Tabler/Share background" width="16" height="16" fill="none"/>
                <path d="M9.846,12.923a3.07,3.07,0,0,1,.1-.768L5.516,9.874a3.077,3.077,0,1,1,0-3.748L9.943,3.845a3.084,3.084,0,1,1,.541,1.106L6.057,7.232a3.087,3.087,0,0,1,0,1.537l4.427,2.281a3.075,3.075,0,1,1-.638,1.874Zm1.231,0a1.846,1.846,0,1,0,.2-.84q-.011.028-.025.055l-.014.025A1.836,1.836,0,0,0,11.077,12.923ZM1.231,8a1.846,1.846,0,0,0,3.487.845.623.623,0,0,1,.027-.061l.017-.031a1.845,1.845,0,0,0,0-1.508l-.017-.031a.622.622,0,0,1-.027-.061A1.846,1.846,0,0,0,1.231,8ZM12.923,4.923a1.846,1.846,0,1,0-1.682-1.086l.013.024q.014.027.025.056A1.848,1.848,0,0,0,12.923,4.923Z" fill="#495057"/>
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
                  <span class="caption text-gray-600 d-block mb-1">Total de Reclamações</span>
                  <span class="h3 mb-0"><?= number_format($statsResumo['total_reclamacoes'] ?? 0, 0, ',', '.'); ?></span>
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
                <div class="col-5 col-xxl-6">
                  <span class="caption text-gray-600 d-block mb-1">Pendentes</span>
                  <span class="h3 mb-0"><?= $statsResumo['total_pendentes'] ?? 0; ?></span>
                </div>
                <div class="col-7 col-xxl-6 pe-xxl-0">
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
                <div class="col-5 col-xxl-6">
                  <span class="caption text-gray-600 d-block mb-1">Em Andamento</span>
                  <span class="h3 mb-0"><?= $statsResumo['total_em_andamento'] ?? 0; ?></span>
                </div>
                <div class="col-7 col-xxl-6 pe-xxl-0">
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
                <div class="col-5 col-xxl-6">
                  <span class="caption text-gray-600 d-block mb-1">Comunidade mais Crítica</span>
                  <span class="h3 mb-0" >Nilópolis</span>
                </div>
               <div class="col-7 col-xxl-5 pe-xxl-0">
                  <div id="MuzeColumnsChartTwo"></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        
        <div class="row">
          
          <di v class="ps-3 header-search">
               <form>
                 <div class="input-group bg-white border border-gray-300 rounded py-1 px-5">
                   <img src="<?= $base;?>/assets/svg/icons/search@14.svg" alt="Search">
                   <input type="search" class="form-control border-0" placeholder="Search...">
                 </div>
               </form>
               <span class="muze-search d-lg-none ms-3">
                 <svg id="icons_tabler_close" data-name="icons/tabler/close" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16 16">
                   <rect data-name="Icons/Tabler/Close background" width="16" height="16" fill="none"/>
                   <path d="M.82.1l.058.05L6,5.272,11.122.151A.514.514,0,0,1,11.9.82l-.05.058L6.728,6l5.122,5.122a.514.514,0,0,1-.67.777l-.058-.05L6,6.728.878,11.849A.514.514,0,0,1,.1,11.18l.05-.058L5.272,6,.151.878A.514.514,0,0,1,.75.057Z" transform="translate(2 2)" fill="#1e1e1e"/>
                 </svg>
               </span>
       
               
              <div class="row mapa" style="background: linear-gradient(135deg, #f8f9fa 0%, #e3eafc 100%); border-radius: 16px; box-shadow: 0 2px 16px rgba(0,0,0,0.08); padding: 24px;">
                <div id="heatmap" style="height: 500px; width: 100%; border-radius: 12px; box-shadow: 0 1px 8px rgba(52,133,253,0.08);"></div>
                <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
                <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
                <script src="https://unpkg.com/leaflet.heat/dist/leaflet-heat.js"></script>
                <script>
                  // Inicializa o mapa
                  var map = L.map('heatmap').setView([-22.877, -43.415], 11);

                  // Camada azulada moderna
                  L.tileLayer('https://tiles.stadiamaps.com/tiles/alidade_smooth/{z}/{x}/{y}{r}.png', {
                    attribution: '© OpenStreetMap contributors, Stadia Maps',
                    minZoom: 10,
                    maxZoom: 17
                  }).addTo(map);

                  // Exemplo de chamada para API fictícia que retorna pontos de calor
                  fetch('https://api.quibble.com/heatmap')
                    .then(response => response.json())
                    .then(data => {
                      // Espera-se que data seja um array de [lat, lng, intensidade]
                      var heatData = data.map(function(item) {
                        return [item.lat, item.lng, item.intensity];
                      });
                      L.heatLayer(heatData, {radius: 25, blur: 15, maxZoom: 17}).addTo(map);
                    })
                    .catch(() => {
                      // fallback para dados de exemplo
                      var heatData = [
                        [-22.877, -43.415, 0.8],
                        [-22.800, -43.400, 0.5],
                        [-22.900, -43.420, 0.7],
                        [-22.850, -43.410, 0.9],
                        [-22.870, -43.430, 0.6],
                        [-22.880, -43.440, 0.4]
                      ];
                      L.heatLayer(heatData, {radius: 25, blur: 15, maxZoom: 17}).addTo(map);
                    });
                </script>
              </div>
      
                  
         
          </script>
          </div>
    </div>
      
              
              
    <footer class="pt-xxl-5 mt-lg-2">
      <div class="container-fluid px-0 border-top border-gray-200 pt-2 pt-lg-3">
        <div class="row align-items-center">
          <div class="col-md-6">
            <p class="fs-16 text-gray-600 my-2">2025 © Quibble - Todos os direitos reservados.</p>
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
<script src="<?= $base;?>/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= $base;?>/assets/vendor/lodash/lodash.min.js"></script>
<script src="<?= $base;?>/assets/vendor/highcharts/highmaps.js"></script>
<script src="<?= $base;?>/assets/vendor/apexcharts/dist/apexcharts.min.js"></script>
<script src="<?= $base;?>/assets/vendor/simplebar/dist/simplebar.min.js"></script>
<script src="<?= $base;?>/assets/js/theme-custom.js"></script>
<script>
//Muze Double Line Chart JavaScript
var options = {
  series: [{
    name: '2024',
    data: [31, 40, 28, 51, 42, 109, 100]
  }, {
    name: '2025',
    data: [11, 32, 80, 45, 75, 80, 41]
  }],
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
  series: [{
    name: '2021',
    data: [31, 50, 38, 51, 60, 109, 100]
  }],
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
  colors: ['#008FFB'],
  curve: 'straight'
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
  x: {
    show: false
  },
},
yaxis: {
  show: false,
},
xaxis: {
  categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
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

//Muze Simple Donut Chart JavaScript
var options = {
  series: [50, 50],
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
legend: {
  show: false,
},
states: {
  hover: {
    filter: {
      type: 'none',
    }
  },
},
plotOptions: {
  donut: {
    size: '65%',
    background: 'transparent',
  },
  pie: {
    offsetX: 25
  }
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
  enabled: false,
},
yaxis: {
  show: false,
}
};

var chart = new ApexCharts(document.querySelector("#MuzeSimpleDonut"), options);
chart.render();

// Muze Simple Donut Chart JavaScript: Segundo gráfico Chart


var options = {
  series: [50, 50],
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
legend: {
  show: false,
},
states: {
  hover: {
    filter: {
      type: 'none',
    }
  },
},
plotOptions: {
  donut: {
    size: '65%',
    background: 'transparent',
  },
  pie: {
    offsetX: 25
  }
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
  enabled: false,
},
yaxis: {
  show: false,
}
};

var chart = new ApexCharts(document.querySelector("#MuzeSimpleDonut2"), options);
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
    name: '2024',
    data: [20, 40, 28, 51, 42, 70, 75, 28, 51, 42, 70, 75]
  }, {
    name: '2025',
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
    fillColors: ['#0D6EFD','#A8CBFE'],
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
    data: [
      {name: 'Saúde', y: 20, color: '#127d1b',},
      {name: 'Mobilidade', y: 15, color: '#81B4FE',},
      {name: 'Infrestrutura', y: 36, color: '#3485FD',}],
    }
  ],
});
</script>
</body>
</html>