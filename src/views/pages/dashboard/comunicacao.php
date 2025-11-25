<?php // Arquivo convertido de HTML para PHP ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<title>Comunicações</title>
<meta charset="UTF-8">
<meta name="description" content="Presenting Muze, All-in-one Bootstrap 5 Analytics Admin Dashboard, 30+ premium HTML pages, 500+ components, dark mode, RTL. Starts @ Only $35">
<meta name="title" content="Muze Bootstrap 5 Analytics Templates, Pages & Dashboard, analytics chart, chart design, chart template">
<meta name="keywords" content="bootstrap analytics dashboard page, bootstrap analytics dashboard template">
<meta name="author" content="Muze Dashboard">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- Muze Favicon -->
<link href="<?= $base;?>/assets/favicon.ico" rel="shortcut icon" type="image/x-icon">
<link rel="shortcut icon" href="<?= $base; ?>/assets/images/logo_padrao.svg" type="image/x-icon">
<!-- Muze Plugins CSS -->
<link href="<?= $base;?>/assets/vendor/simplebar/dist/simplebar.min.css" rel="stylesheet" type="text/css" media="all">
<link href="<?= $base;?>/assets/vendor/quill/dist/quill.snow.css" rel="stylesheet" type="text/css" media="all">
<!-- Muze Theme CSS -->
<link href="<?= $base;?>/assets/css/theme.min.css" rel="stylesheet" type="text/css" media="all">
</head>
<body class="bg-gray-100 new-projects-template user-profile-template analytics-template">

<?php $render("aside-dashboard-dark", ['usuario' => $loggedUser]); ?>

<!-- Muze Main Content -->
<div class="main-content">

<?php $render("header-dashboard", ['usuario' => $loggedUser]); ?>

  <div class="px-3 px-xxl-5 py-3 py-lg-4 border-bottom border-gray-200 after-header">
    <div class="container-fluid px-0">
      <div class="row align-items-center">
        <div class="col">
          <h1 class="h2 mb-0">Comunicação - Obras e Infraestrutura</h1>
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
                  <span class="caption text-gray-600 d-block mb-1">Resposta aos Cidadãos</span>
                  <span class="h3 mb-0">13%</span>
                  <span class="d-block fs-11 mt-2 font-weight-semibold"><svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 16 16">
                    <g data-name="icons/tabler/trend-up" transform="translate(0)">
                      <rect data-name="Icons/Tabler/Trend background" width="16" height="16" fill="none"/>
                      <path d="M.249,9.315.18,9.256a.616.616,0,0,1-.059-.8L.18,8.385,5.1,3.462A.616.616,0,0,1,5.9,3.4l.068.059L8.821,6.309,13.9,1.231H9.641A.616.616,0,0,1,9.031.7L9.025.616a.617.617,0,0,1,.532-.61L9.641,0h5.728a.614.614,0,0,1,.569.346h0l0,.008,0,.008h0a.613.613,0,0,1,.048.168V.541A.621.621,0,0,1,16,.61V6.359a.616.616,0,0,1-1.226.083l-.005-.083V2.1L9.256,7.615a.616.616,0,0,1-.8.059l-.069-.059L5.539,4.768,1.05,9.256a.615.615,0,0,1-.8.059Z" transform="translate(0 3)" fill="#20C997"/>
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
                <div class="col-5 col-xxl-6">
                  <span class="caption text-gray-600 d-block mb-1">Tempo Médio de Envio</span>
                  <span class="h3 mb-0">6,443</span>
                  <span class="d-block fs-11 mt-2 font-weight-semibold"><svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
                    <g data-name="Icons/Tabler/Trend down" transform="translate(0)">
                      <rect data-name="Icons/Tabler/Trend down background" width="14" height="14" fill="none"/>
                      <path d="M.218.106.158.158a.539.539,0,0,0-.052.7L.158.919,4.465,5.227a.539.539,0,0,0,.7.052l.06-.052L7.718,2.736l4.443,4.443H8.436a.539.539,0,0,0-.533.465L7.9,7.718a.54.54,0,0,0,.465.534l.073,0h5.012a.537.537,0,0,0,.5-.3h0l0-.007,0-.007h0A.537.537,0,0,0,14,7.791V7.783a.544.544,0,0,0,0-.06V2.692a.539.539,0,0,0-1.073-.072l0,.072V6.418L8.1,1.593a.539.539,0,0,0-.7-.052l-.061.052L4.846,4.084.919.158a.538.538,0,0,0-.7-.052Z" transform="translate(0 2.625)" fill="#e25563"/>
                    </g>
                  </svg> -10.45</span>
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
                <div class="col-5 col-xxl-12">
                  <span class="caption text-gray-600 d-block mb-1">Comunidade mais Ativa em Interações</span>
                  <span class="h3 mb-0">Anchieta</span>
                  <span class="d-block fs-11 mt-2 font-weight-semibold"><svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 16 16">
                    <g data-name="icons/tabler/trend-up" transform="translate(0)">
                      <rect data-name="Icons/Tabler/Trend background" width="16" height="16" fill="none"/>
                      <path d="M.249,9.315.18,9.256a.616.616,0,0,1-.059-.8L.18,8.385,5.1,3.462A.616.616,0,0,1,5.9,3.4l.068.059L8.821,6.309,13.9,1.231H9.641A.616.616,0,0,1,9.031.7L9.025.616a.617.617,0,0,1,.532-.61L9.641,0h5.728a.614.614,0,0,1,.569.346h0l0,.008,0,.008h0a.613.613,0,0,1,.048.168V.541A.621.621,0,0,1,16,.61V6.359a.616.616,0,0,1-1.226.083l-.005-.083V2.1L9.256,7.615a.616.616,0,0,1-.8.059l-.069-.059L5.539,4.768,1.05,9.256a.615.615,0,0,1-.8.059Z" transform="translate(0 3)" fill="#20C997"/>
                    </g>
                  </svg> 2.7%</span>
                </div>
               
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-12 col-xl-6 col-xxl-3">
          <div class="card mb-4 rounded-12 shadow">
            <div class="card-body p-3 p-xl-3 p-xxl-4">
              <div class="row align-items-center">
                <div class="col-5 col-xxl-10">
                  <span class="caption text-gray-600 d-block mb-1">Comunicações Pendentes</span>
                  <span class="h3 mb-0" >42 mensagens</span>
                  <span class="d-block fs-11 mt-2 font-weight-semibold"><svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 16 16">
                    <g data-name="icons/tabler/trend-up" transform="translate(0)">
                      <rect data-name="Icons/Tabler/Trend background" width="16" height="16" fill="none"/>
                      <path d="M.249,9.315.18,9.256a.616.616,0,0,1-.059-.8L.18,8.385,5.1,3.462A.616.616,0,0,1,5.9,3.4l.068.059L8.821,6.309,13.9,1.231H9.641A.616.616,0,0,1,9.031.7L9.025.616a.617.617,0,0,1,.532-.61L9.641,0h5.728a.614.614,0,0,1,.569.346h0l0,.008,0,.008h0a.613.613,0,0,1,.048.168V.541A.621.621,0,0,1,16,.61V6.359a.616.616,0,0,1-1.226.083l-.005-.083V2.1L9.256,7.615a.616.616,0,0,1-.8.059l-.069-.059L5.539,4.768,1.05,9.256a.615.615,0,0,1-.8.059Z" transform="translate(0 3)" fill="#20C997"/>
                    </g>
                  </svg> -14%</span>
                </div>
                </div>

              </div>
            </div>
          </div>
        </div>

         <div class="container-fluid px-0">
      <div class="mb-2 mb-md-3 mb-xl-4 pb-3">
        <ul class="nav nav-tabs nav-tabs-md nav-tabs-line position-relative zIndex-0">
          <li class="nav-item">
            <a class="nav-link active" href="<?= $base;?>/comunicacao">Comunicados Oficiais</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= $base;?>/responder-cidadao">Responder Cidadão</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= $base;?>/canal-direto">Canal Direto</a>
          </li>
        </ul>
      </div>
      

     <!--! area editavel  -->
      <div>

      <div class="row group-cards pt-2">
        <div class="col-xxl-12 mb-4">
          <div class="card rounded-12 shadow-dark-80 border border-gray-200 h-100">
            <div class="card-body pb-0 px-3 pt-3">
              <div class="pb-3 p-xl-5">
                <form>
                  <div class="mb-4 mb-xl-5">
                    <label class="form-label form-label-lg" for="ProjectName">Título</label>
                    <input type="text" placeholder="Escreva aqui..." id="ProjectName" class="form-control form-control-xl">
                  </div>
                  <div class="mb-4 mb-xl-5">
                    <label class="form-label form-label-lg">Descrição</label>
                    <div id="editor" class="form-control"></div>
                  </div>
                  <div class="pt-xl-2 text-end">
                    <a href="#0" class="btn btn-xl btn-outline-dark text-gray-700 border-gray-700 me-2 me-md-4">Limpar</a>
                    <button type="button" class="btn btn-xl btn-primary">Enviar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--!  area editavel 2 -->


              <div class="col-xl-7 col-xxl-12">

        <!-- Footer -->

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

<style>

   .filtro-container {
            background: #fff;
            color: #222;
            border-radius: 20px;
            margin: 40px auto 0 auto;
            max-width: 95vw;
            box-shadow: 0 4px 24px rgba(0,0,0,0.10);
            padding: 32px 32px 24px 32px;
        }
        .filtro-container h2 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 24px;
            color: #222;
        }
        .filtro-form {
            width: 100%;
        }
        .filtro-group {
            display: flex;
            gap: 32px;
            flex-wrap: wrap;
            align-items: flex-end;
        }
        .filtro-item {
            display: flex;
            align-items: center;
            background: transparent;
            border: 2px solid #bdbdbd;
            border-radius: 12px;
            padding: 8px 24px;
            min-width: 220px;
            height: 56px;
            position: relative;
        }
        .filtro-item .icon {
            margin-right: 10px;
            display: flex;
            align-items: center;
        }
        .filtro-item select, .filtro-item input {
            background: transparent;
            border: none;
            color: #222;
            font-size: 1.1rem;
            outline: none;
            width: 100%;
        }
        .filtro-item select {
            appearance: none;
            padding-right: 24px;
        }
        .filtro-item input[type="text"] {
            padding-right: 24px;
        }
        .filtrar {
            background: #f6ecd3;
            color: #2976f6;
            border: none;
            border-radius: 12px;
            font-size: 1.1rem;
            font-weight: 600;
            padding: 8px 40px;
            margin-left: 16px;
            cursor: pointer;
            height: 56px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
            transition: background 0.2s;
        }
        .filtrar:hover {
            background: #fbeec1;
        }
        .limpar {
            background: transparent;
            color: #222;
            border: 2px solid #bdbdbd;
            border-radius: 12px;
            font-size: 1.1rem;
            font-weight: 600;
            padding: 8px 40px;
            margin-left: 16px;
            cursor: pointer;
            height: 56px;
            transition: background 0.2s, color 0.2s;
        }
        .limpar:hover {
            background: #bdbdbd;
            color: #222;
        }
        body {
            background: #fff;
            color: #222;
            font-family: 'Montserrat', Arial, sans-serif;
        }
        .menu {
            background: #fff;
            padding: 0 0 0 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.03);
        }
        .menu ul {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
        }
        .menu li {
            padding: 16px 20px 8px 0;
            color: #555;
            font-size: 18px;
            cursor: pointer;
            position: relative;
            transition: color 0.2s;
        }
        .menu li.active {
            color: #222;
            font-weight: 600;
        }
        .menu li.active::after {
            content: '';
            display: block;
            height: 3px;
            width: 80%;
            background: #2976f6;
            position: absolute;
            left: 0;
            bottom: -2px;
            border-radius: 2px;
        }
</style>

<!-- Muze Javascript Plugins -->
<script src="<?= $base;?>/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= $base;?>/assets/vendor/lodash/lodash.min.js"></script>
<script src="<?= $base;?>/assets/vendor/highcharts/highmaps.js"></script>
<script src="<?= $base;?>/assets/vendor/apexcharts/dist/apexcharts.min.js"></script>
<script src="<?= $base;?>/assets/vendor/simplebar/dist/simplebar.min.js"></script>
<script src="<?= $base;?>/assets/vendor/quill/dist/quill.min.js"></script>
<script src="<?= $base;?>/assets/js/theme-custom.js"></script>
<script>



var toolbarOptions = [
['bold', 'italic', 'link', { 'list': 'ordered'}, { 'list': 'bullet' }, 'image', 'blockquote'],
];
  var quill = new Quill('#editor', {
    theme: 'snow',
    placeholder: 'Start typing...',
    modules: {
      toolbar: toolbarOptions
    },
  });

  
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