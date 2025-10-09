<?php // Arquivo convertido de HTML para PHP ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<title>Buy Muze Bootstrap 5 Analytics Page</title>
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

<!-- Muze Customize Sidebar -->
<!-- <div class="customize-sidebar">
  <div class="border-bottom border-gray-200 p-3 p-md-4">
    <div class="text-end">
      <a href="javascript:void(0);" class="btn btn-light btn-icon rounded-pill customize-close">
        <svg data-name="icons/tabler/close" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 16 16">
          <rect data-name="Icons/Tabler/Close background" width="16" height="16" fill="none"></rect>
          <path d="M.82.1l.058.05L6,5.272,11.122.151A.514.514,0,0,1,11.9.82l-.05.058L6.728,6l5.122,5.122a.514.514,0,0,1-.67.777l-.058-.05L6,6.728.878,11.849A.514.514,0,0,1,.1,11.18l.05-.058L5.272,6,.151.878A.514.514,0,0,1,.75.057Z" transform="translate(2 2)" fill="#1E1E1E"></path>
        </svg>
      </a>
    </div>
    <div class="px-2 px-md-4">
  <h3 class="mb-0"><img src="<?= $base;?>/assets/svg/icons/tio-tune2.svg" alt="Tio Tune"> Customize</h3>
      <p class="text-gray-700 mb-0 lh-lg">Choose your style and settings</p>
    </div>
  </div>
  <div class="customize-body" data-simplebar>
    <div class="p-4 px-lg-5 border-bottom border-gray-200">
      <h6 class="font-weight-semibold pb-3">Select Skin</h6>
      <div class="d-flex muze-skins customizer-controls">
        <div class="text-center pe-4">
          <div class="form-check-lg bg-white shadow-dark-80 p-4 rounded-circle avatar avatar-xl d-flex align-items-center justify-content-center">
            <input class="form-check-input mx-0 rounded-circle" type="radio" name="MuzeSkins" id="LightMode" value="muze-light-mode" checked="checked">
          </div>
          <label for="LightMode" class="text-gray-700 mt-2">Light mode</label>
        </div>
        <div class="text-center ps-4 dark-radio">
          <div class="form-check-lg bg-gray-800 shadow-dark-80 p-4 rounded-circle avatar avatar-xl d-flex align-items-center justify-content-center">
            <input class="form-check-input mx-0 rounded-circle" type="radio" name="MuzeSkins" id="DarkMode" value="muze-dark-mode">
          </div>
          <label for="DarkMode" class="text-gray-700 mt-2">Dark mode</label>
        </div>
      </div>
    </div>
    <div class="p-4 px-lg-5 border-bottom border-gray-200">
      <div class="d-flex align-items-center">
        <h6 class="font-weight-semibold mb-0">RTL Mode</h6>
        <div class="form-check form-switch mb-0 ms-auto">
          <input class="form-check-input me-0" type="checkbox" id="RTLMode" value="muze-rtl">
        </div>
      </div>
      <p class="text-gray-600 pt-2 mb-0">Switch layout direction</p>
    </div>
    <div class="p-4 px-lg-5 border-bottom border-gray-200">
      <div class="d-flex align-items-center">
        <h6 class="font-weight-semibold mb-0">Fluid Layout</h6>
        <div class="form-check form-switch mb-0 me-0 ms-auto">
          <input class="form-check-input me-0" type="checkbox" id="FluidLayout" value="container">
        </div>
      </div>
      <p class="text-gray-600 pt-2 mb-0">Toggle between full width and contained layouts</p>
    </div>
    <div class="p-4 px-lg-5 border-bottom border-gray-200 muze-headers customizer-controls">
      <h6 class="font-weight-semibold pb-3">Header Style</h6>
      <div class="form-check form-check-sm form-check-inline mb-0">
        <input class="form-check-input" type="radio" name="HeaderStyles" id="HeaderVertical" value="default-header" checked="checked">
        <label class="form-check-label" for="HeaderVertical">Vertical</label>
      </div>
      <div class="form-check form-check-sm form-check-inline mb-0">
        <input class="form-check-input" type="radio" name="HeaderStyles" id="HeaderTop" value="top-header">
        <label class="form-check-label" for="HeaderTop">Top</label>
      </div>
      <div class="form-check form-check-sm form-check-inline mb-0">
        <input class="form-check-input" type="radio" name="HeaderStyles" id="HeaderDouble" value="double-header">
        <label class="form-check-label" for="HeaderDouble">Double</label>
      </div>
    </div>
    <div class="p-4 px-lg-5">
      <h6 class="font-weight-semibold pb-3">Sidebar Style</h6>
      <div class="d-flex muze-sidebars customizer-controls">
        <div class="me-3 sidebar-style">
          <div class="form-check form-check-sm me-0">
            <input class="form-check-input" type="radio" name="SidebarStyles" id="SidebarDefault" value="default-sidebar" checked="checked">
            <label class="form-check-label" for="SidebarDefault"><img src="<?= $base;?>/assets/images/sidebar-default.svg" alt="Sidebar Default" class="rounded mb-2 border-gray-400 border"><span>Default</span></label>
          </div>
        </div>
        <div class="me-3 sidebar-style">
          
          <div class="form-check form-check-sm me-0">
            <input class="form-check-input" type="radio" name="SidebarStyles" id="SidebarCompact" value="sidebar-compact">
            <label class="form-check-label" for="SidebarCompact"><img src="<?= $base;?>/assets/images/sidebar-compact.svg" alt="Sidebar Compact" class="rounded mb-2 border-gray-400 border"><span>Compact</span></label>
          </div>
        </div>
        <div class="me-3 sidebar-style">
          
          <div class="form-check form-check-sm me-0">
            <input class="form-check-input" type="radio" name="SidebarStyles" id="SidebarIcons" value="sidebar-icons">
            <label class="form-check-label" for="SidebarIcons"><img src="<?= $base;?>/assets/images/sidebar-icons.svg" alt="Sidebar Icons" class="rounded mb-2 border-gray-400 border"><span>Icons</span></label>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="p-4 px-lg-5 border-top border-gray-200 bg-white">
    <div class="row">
      <div class="col-6 d-grid">
        <a href="Javascript:void(0);" class="btn btn-xl btn-outline-dark" id="ResetCustomizer">Reset</a>
      </div>
      <div class="col-6 d-grid">
        <a href="Javascript:void(0);" class="btn btn-xl btn-primary" id="CustomizerPreview">Preview</a>
      </div>
    </div>
  </div>
</div>

<!-- Muze Default Sidebar, Muze Navbar, Muze Navbar Vertical, Muze Navbar Expand Lg, Muze Navbar Light 
<nav class="navbar navbar-vertical navbar-expand-lg navbar-light">
  <a class="navbar-brand mx-auto d-none d-lg-block my-0 my-lg-4" href="#">
  <img src="/assets/svg/brand/logo.svg" alt="Muze">
  <img src="/assets/svg/brand/logo-white.svg" alt="Muze" class="white-logo2">
  <img src="/assets/svg/brand/muze-icon.svg" class="muze-icon" alt="Muze">
  <img src="/assets/svg/brand/muze-icon-white.svg" class="muze-icon-white" alt="Muze">
  </a>
  <div class="navbar-collapse">
    <ul class="navbar-nav mb-2" id="accordionExample" data-simplebar>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarDashboards">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
            <g data-name="icons/tabler/chart" transform="translate(0)">
              <rect data-name="Icons/Tabler/Chart background" width="16" height="16" fill="none"/>
              <path d="M.686,13.257a.686.686,0,0,1-.093-1.365l.093-.006H15.314a.686.686,0,0,1,.093,1.365l-.093.006ZM.394,9.535l-.089-.05a.688.688,0,0,1-.24-.863l.05-.088L3.773,3.048a.684.684,0,0,1,.782-.272l.095.039L7.811,4.4,11.121.257a.687.687,0,0,1,.945-.122L12.142.2,15.8,3.858a.686.686,0,0,1-.893,1.036l-.077-.067L11.713,1.712,8.536,5.685a.684.684,0,0,1-.743.225l-.1-.04L4.578,4.313,1.256,9.294a.684.684,0,0,1-.862.24Z" transform="translate(0 1)" fill="#1e1e1e"/>
            </g>
          </svg> &nbsp;<span class="ms-2">Dashboards</span>
        </a>
        <div class="collapse collapse-box show" id="sidebarDashboards" data-bs-parent="#accordionExample">
          <ul class="nav nav-sm flex-column">
            <li class="nav-item">
              <a href="analytics.html" class="nav-link active">Analytics</a>
            </li>
            <li class="nav-item">
              <a href="project-management.html" class="nav-link">Project management</a>
            </li>
            <li class="nav-item">
              <a href="festive.html" class="nav-link">Festive</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item nav-subtitle">
        <small>Pages</small>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#sidebarPages" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
          <svg data-name="Icons/Tabler/Bolt" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
            <rect data-name="Icons/Tabler/Page background" width="16" height="16" fill="none"/>
            <path d="M1.975,14A1.977,1.977,0,0,1,0,12.026V1.975A1.977,1.977,0,0,1,1.975,0h5.04a.535.535,0,0,1,.249.069l.007,0h0a.534.534,0,0,1,.109.084l3.574,3.575a.536.536,0,0,1,.163.289h0l0,.013h0l0,.013v0l0,.011v.053s0,.009,0,.014v7.9A1.977,1.977,0,0,1,9.154,14Zm-.9-12.026V12.026a.9.9,0,0,0,.9.9H9.154a.9.9,0,0,0,.9-.9V4.667H7.718a1.255,1.255,0,0,1-1.248-1.12L6.461,3.41V1.077H1.975A.9.9,0,0,0,1.077,1.975ZM7.538,3.41a.179.179,0,0,0,.122.17l.057.01H9.29L7.538,1.838Z" transform="translate(2 1)" fill="#1e1e1e"/>
          </svg> &nbsp;<span class="ms-2">Pages</span>
        </a>
        <div class="collapse collapse-box" id="sidebarPages" data-bs-parent="#accordionExample">
          <ul class="nav nav-sm flex-column" id="submenu">
            <li class="nav-item">
              <a class="nav-link collapsed" href="#AccountPage" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="AccountPage">Account</a>
              <div class="collapse collapse-box" id="AccountPage" data-bs-parent="#submenu">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="settings.html" class="nav-link">Settings</a>
                  </li>
                  <li class="nav-item">
                    <a href="billing.html" class="nav-link">Billing</a>
                  </li>
                  <li class="nav-item">
                    <a href="invoice.html" class="nav-link">Invoice</a>
                  </li>
                  <li class="nav-item">
                    <a href="api-keys.html" class="nav-link">API keys</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link collapsed" href="#UserProfile" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="UserProfile">User Profile</a>
              <div class="collapse collapse-box" id="UserProfile" data-bs-parent="#submenu">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="user-profile-general.html" class="nav-link">General</a>
                  </li>
                  <li class="nav-item">
                    <a href="user-profile-activity.html" class="nav-link">Activity</a>
                  </li>
                  <li class="nav-item">
                    <a href="user-profile-friends.html" class="nav-link">Friends</a>
                  </li>
                  <li class="nav-item">
                    <a href="user-profile-groups.html" class="nav-link">Groups</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link collapsed" href="#Projectspage" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="Projectspage">Projects</a>
              <div class="collapse collapse-box" id="Projectspage" data-bs-parent="#submenu">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="all-projects.html" class="nav-link">All projects</a>
                  </li>
                  <li class="nav-item">
                    <a href="new-project.html" class="nav-link">New project</a>
                  </li>
                  <li class="nav-item">
                    <a href="project-details.html" class="nav-link">Project detail</a>
                  </li>
                  <li class="nav-item">
                    <a href="teams.html" class="nav-link">Teams</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a href="pricing.html" class="nav-link">Pricing</a>
            </li>
            <li class="nav-item">
              <a href="help-center.html" class="nav-link">Help page</a>
            </li>
            <li class="nav-item">
              <a href="empty-state.html" class="nav-link">Empty State</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#sidebarAuthentication" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuthentication">
          <svg data-name="Icons/Tabler/Paperclip" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
            <rect data-name="Icons/Tabler/Plug background" width="16" height="16" fill="none"/>
            <path d="M6.7,16a2.378,2.378,0,0,1-2.373-2.234l0-.145V12.541H3.244A3.241,3.241,0,0,1,0,9.47L0,9.3V4.109a.649.649,0,0,1,.561-.643L.649,3.46H1.73V.649A.649.649,0,0,1,3.021.561l.005.088V3.46H6.919V.649A.649.649,0,0,1,8.211.561l.005.088V3.46H9.3a.649.649,0,0,1,.643.561l.006.088V9.3a3.241,3.241,0,0,1-3.071,3.239l-.173,0H5.621v1.081A1.081,1.081,0,0,0,6.593,14.7l.11.005H9.3a.649.649,0,0,1,.088,1.292L9.3,16Zm0-4.757A1.951,1.951,0,0,0,8.644,9.431l0-.134V4.757H1.3V9.3A1.951,1.951,0,0,0,3.11,11.239l.133,0H6.7Z" transform="translate(3)" fill="#1e1e1e"/>
          </svg> &nbsp;<span class="ms-2">Authentication</span>
        </a>
        <div class="collapse collapse-box" id="sidebarAuthentication" data-bs-parent="#accordionExample">
          <ul class="nav nav-sm flex-column" id="submenu2">
            <li class="nav-item">
              <a class="nav-link collapsed" href="#Signinpage" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="Signinpage">Sign in</a>
              <div class="collapse collapse-box" id="Signinpage" data-bs-parent="#submenu2">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="signin-simple.html" class="nav-link">Simple</a>
                  </li>
                  <li class="nav-item">
                    <a href="signin-cover.html" class="nav-link">Cover</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link collapsed" href="#Signuppage" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="Signuppage">Sign up</a>
              <div class="collapse collapse-box" id="Signuppage" data-bs-parent="#submenu2">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="signup-simple.html" class="nav-link">Simple</a>
                  </li>
                  <li class="nav-item">
                    <a href="signup-cover.html" class="nav-link">Cover</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link collapsed" href="#Resetpassword" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="Resetpassword">Reset password</a>
              <div class="collapse collapse-box" id="Resetpassword" data-bs-parent="#submenu2">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="reset-password-simple.html" class="nav-link">Simple</a>
                  </li>
                  <li class="nav-item">
                    <a href="reset-password-cover.html" class="nav-link">Cover</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link collapsed" href="#Emailverification" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="Emailverification">Email verification</a>
              <div class="collapse collapse-box" id="Emailverification" data-bs-parent="#submenu2">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="verify-email-simple.html" class="nav-link">Simple</a>
                  </li>
                  <li class="nav-item">
                    <a href="verify-email-cover.html" class="nav-link">Cover</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a href="404-error.html" class="nav-link">Error 404</a>
            </li>
            <li class="nav-item">
              <a href="500-error.html" class="nav-link">Error 500</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#sidebarApps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
            <g data-name="Icons/Tabler/Paperclip" transform="translate(0 0)">
              <rect data-name="Icons/Tabler/apps background" width="16" height="16" fill="none"/>
              <path d="M10.743,16a1.6,1.6,0,0,1-1.6-1.6V10.743a1.6,1.6,0,0,1,1.6-1.6H14.4a1.6,1.6,0,0,1,1.6,1.6V14.4A1.6,1.6,0,0,1,14.4,16Zm-.229-5.257V14.4a.229.229,0,0,0,.229.229H14.4a.229.229,0,0,0,.229-.229V10.743a.229.229,0,0,0-.229-.229H10.743A.229.229,0,0,0,10.515,10.743ZM1.6,16A1.6,1.6,0,0,1,0,14.4V10.743a1.6,1.6,0,0,1,1.6-1.6H5.257a1.6,1.6,0,0,1,1.6,1.6V14.4a1.6,1.6,0,0,1-1.6,1.6Zm-.229-5.257V14.4a.229.229,0,0,0,.229.229H5.257a.229.229,0,0,0,.229-.229V10.743a.229.229,0,0,0-.229-.229H1.6A.229.229,0,0,0,1.372,10.743Zm9.372-3.886a1.6,1.6,0,0,1-1.6-1.6V1.6a1.6,1.6,0,0,1,1.6-1.6H14.4A1.6,1.6,0,0,1,16,1.6V5.257a1.6,1.6,0,0,1-1.6,1.6ZM10.515,1.6V5.257a.229.229,0,0,0,.229.229H14.4a.229.229,0,0,0,.229-.229V1.6a.229.229,0,0,0-.229-.229H10.743A.229.229,0,0,0,10.515,1.6ZM1.6,6.857A1.6,1.6,0,0,1,0,5.257V1.6A1.6,1.6,0,0,1,1.6,0H5.257a1.6,1.6,0,0,1,1.6,1.6V5.257a1.6,1.6,0,0,1-1.6,1.6ZM1.372,1.6V5.257a.229.229,0,0,0,.229.229H5.257a.229.229,0,0,0,.229-.229V1.6a.229.229,0,0,0-.229-.229H1.6A.229.229,0,0,0,1.372,1.6Z" transform="translate(0 0)" fill="#1e1e1e"/>
            </g>
          </svg> &nbsp;<span class="ms-2 position-relative">Apps <sup class="status bg-warning ms-2 position-absolute">&nbsp;</sup></span>
        </a>
        <div class="collapse collapse-box" id="sidebarApps" data-bs-parent="#accordionExample">
          <ul class="nav nav-sm flex-column">
            <li class="nav-item">
              <a href="file-manager.html" class="nav-link">File manager</a>
            </li>
            <li class="nav-item">
              <a href="chat.html" class="nav-link">Chat</a>
            </li>
            <li class="nav-item">
              <a href="calendar.html" class="nav-link">Calendar</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <hr class="my-0 bg-gray-50 opacity-100">
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../documentation/index.html" target="_blank">
          <svg data-name="Icons/Tabler/Paperclip" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
            <rect data-name="Icons/Tabler/Paperclip background" width="16" height="16" fill="none"/>
            <path d="M6.766,1.178A4.018,4.018,0,0,1,12.591,6.71l-.147.155-5.1,5.11A2.352,2.352,0,0,1,3.9,8.77l.114-.123,5.1-5.11a.685.685,0,0,1,1.035.893l-.066.077-5.1,5.11a.981.981,0,0,0,1.3,1.465l.086-.076,5.1-5.11A2.648,2.648,0,0,0,7.861,2.028l-.127.119-5.1,5.11a4.315,4.315,0,0,0,5.941,6.255l.156-.149,5.1-5.11a.685.685,0,0,1,1.035.893l-.066.077-5.1,5.11A5.685,5.685,0,0,1,1.5,6.457l.162-.169Z" transform="translate(1)" fill="#1e1e1e"/>
          </svg> &nbsp;<span class="ms-2">Docs</span> <span class="docs-version">v1.0</span>
        </a>
      </li>
    </ul>
    <div class="mt-3 mt-md-auto mb-3 signout d-grid">
      <a href="javascript:void(0);" class="btn btn-dark btn-lg customize-btn"><img src="../assets/svg/icons/dark-mode@24.svg" alt="Customize"><span class="ps-2">Customize</span></a>
    </div>
    <div class="navbar-vertical-footer border-top border-gray-50">
      <ul class="navbar-vertical-footer-list">
        <li>
          <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="18.047" height="18.047" viewBox="0 0 18.047 18.047">
            <g data-name="Icons/Tabler/Paperclip Copy" transform="translate(0.047 0.047)">
              <rect data-name="Icons/Tabler/Adjustments background" width="18" height="18" fill="none"/>
              <path d="M14.4,17.3l0-.074V6.579a2.829,2.829,0,0,1,0-5.443V.772A.772.772,0,0,1,15.94.7l0,.074v.364a2.829,2.829,0,0,1,0,5.443v10.65A.771.771,0,0,1,14.4,17.3ZM13.885,3.858a1.285,1.285,0,1,0,1.286-1.286A1.287,1.287,0,0,0,13.885,3.858ZM8.232,17.3l0-.074V15.836a2.829,2.829,0,0,1,0-5.443V.772A.771.771,0,0,1,9.768.7l0,.074v9.621a2.829,2.829,0,0,1,0,5.443v1.393a.772.772,0,0,1-1.54.074Zm-.517-4.188A1.285,1.285,0,1,0,9,11.829,1.287,1.287,0,0,0,7.714,13.115ZM2.06,17.3l0-.074V9.664a2.829,2.829,0,0,1,0-5.443V.772A.771.771,0,0,1,3.6.7l0,.074V4.221a2.829,2.829,0,0,1,0,5.443v7.565a.772.772,0,0,1-1.54.074ZM1.543,6.943A1.285,1.285,0,1,0,2.829,5.657,1.287,1.287,0,0,0,1.543,6.943Z" transform="translate(-0.047 -0.047)" fill="#6c757d"/>
            </g>
          </svg></a>
        </li>
        <li>
          <a href="javascript:void(0);"><svg data-name="Icons/Tabler/Paperclip Copy 2" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
            <rect data-name="Icons/Tabler/Bolt background" width="18" height="18" fill="none"/>
            <path d="M6.377,18a.7.7,0,0,1-.709-.6l-.006-.1V11.537H.709A.7.7,0,0,1,.1,11.193a.673.673,0,0,1-.014-.672l.054-.083L7.693.274,7.755.2,7.828.141,7.913.087,7.981.055l.087-.03L8.16.006,8.256,0h.037l.059.005.04.007.052.011.045.014.043.016.052.023.089.055.016.011A.765.765,0,0,1,8.756.2L8.82.273l.055.083.033.067.03.085L8.957.6l.007.094V6.461h4.952a.7.7,0,0,1,.613.345.672.672,0,0,1,.013.672l-.053.082L6.942,17.714A.691.691,0,0,1,6.377,18ZM7.548,2.821,2.1,10.153H6.369a.7.7,0,0,1,.7.6l.006.093v4.331l5.449-7.331H8.256a.7.7,0,0,1-.7-.6l-.007-.094Z" transform="translate(2.25 0)" fill="#6c757d"/>
          </svg></a>
        </li>
        <li class="dropup">
          <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/svg/icons/united-states.svg" alt="United States" class="avatar avatar-xss avatar-circle"></a>
          <ul class="dropdown-menu dropdown-menu-end" id="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li class="dropdown-sub-title">
              <span>Language</span>
            </li>
            <li>
              <a class="dropdown-item" href="#">
                <img class="avatar avatar-xss avatar-circle me-2" src="../assets/svg/icons/united-states.svg" alt="Flag">
                <span class="text-truncate" title="English">English</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="#">
                <img class="avatar avatar-xss avatar-circle me-2" src="../assets/svg/icons/dutch.svg" alt="Flag">
                <span class="text-truncate" title="English">Dutch</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="#">
                <img class="avatar avatar-xss avatar-circle me-2" src="../assets/svg/icons/latin.svg" alt="Flag">
                <span class="text-truncate" title="Latin">Latin</span>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  
</nav> -->

<?php $render("aside-dashboard-dark", ['usuario' => $loggedUser]); ?>

<!-- Muze Main Content -->
<div class="main-content">
  
  <?php $render("header-dashboard", ['usuario' => $loggedUser]); ?>

  <div class="p-3 p-xxl-5">
    <div class="container-fluid px-0">
      <div class="row">
        <div class="col-md-6 col-lg-12 col-xl-6 col-xxl-3">
          <div class="card mb-4 rounded-12 shadow">
            <div class="card-body p-3 p-xl-3 p-xxl-4">
              <div class="row align-items-center">
                <div class="col-5 col-xxl-6">
                  <span class="caption text-gray-600 d-block mb-1">Orçamento Utilizado</span>
                  <span class="h3 mb-0">79%</span>
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
                  <span class="caption text-gray-600 d-block mb-1">Obras Entregues</span>
                  <span class="h3 mb-0">443</span>
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
                <div class="col-5 col-xxl-6">
                  <span class="caption text-gray-600 d-block mb-1">Tempo Médio de Execução</span>
                  <span class="h3 mb-0">14 dias</span>
                  <span class="d-block fs-11 mt-2 font-weight-semibold"><svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 16 16">
                    <g data-name="icons/tabler/trend-up" transform="translate(0)">
                      <rect data-name="Icons/Tabler/Trend background" width="16" height="16" fill="none"/>
                      <path d="M.249,9.315.18,9.256a.616.616,0,0,1-.059-.8L.18,8.385,5.1,3.462A.616.616,0,0,1,5.9,3.4l.068.059L8.821,6.309,13.9,1.231H9.641A.616.616,0,0,1,9.031.7L9.025.616a.617.617,0,0,1,.532-.61L9.641,0h5.728a.614.614,0,0,1,.569.346h0l0,.008,0,.008h0a.613.613,0,0,1,.048.168V.541A.621.621,0,0,1,16,.61V6.359a.616.616,0,0,1-1.226.083l-.005-.083V2.1L9.256,7.615a.616.616,0,0,1-.8.059l-.069-.059L5.539,4.768,1.05,9.256a.615.615,0,0,1-.8.059Z" transform="translate(0 3)" fill="#20C997"/>
                    </g>
                  </svg> 2.7%</span>
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
                <div class="col-5 col-xxl-7">
                  <span class="caption text-gray-600 d-block mb-1">Comunidade Mais Beneficiada</span>
                  <span class="h3 mb-0" >Nilópolis</span>
                  <span class="d-block fs-11 mt-2 font-weight-semibold"><svg class="me-1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 16 16">
                    <g data-name="icons/tabler/trend-up" transform="translate(0)">
                      <rect data-name="Icons/Tabler/Trend background" width="16" height="16" fill="none"/>
                      <path d="M.249,9.315.18,9.256a.616.616,0,0,1-.059-.8L.18,8.385,5.1,3.462A.616.616,0,0,1,5.9,3.4l.068.059L8.821,6.309,13.9,1.231H9.641A.616.616,0,0,1,9.031.7L9.025.616a.617.617,0,0,1,.532-.61L9.641,0h5.728a.614.614,0,0,1,.569.346h0l0,.008,0,.008h0a.613.613,0,0,1,.048.168V.541A.621.621,0,0,1,16,.61V6.359a.616.616,0,0,1-1.226.083l-.005-.083V2.1L9.256,7.615a.616.616,0,0,1-.8.059l-.069-.059L5.539,4.768,1.05,9.256a.615.615,0,0,1-.8.059Z" transform="translate(0 3)" fill="#20C997"/>
                    </g>
                  </svg> </span>
                </div>
                <div class="col-7 col-xxl-5 pe-xxl-0">
                  <div id="MuzeSimpleDonut2"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      
    
        
  <div class="categorias">
  <a href="/quibblemvc/public/gastosdetalhados" class="<?= ($active ?? '') === 'gastos' ? 'active' : '' ?>">Gastos Detalhados</a>
  <a href="/quibblemvc/public/festive" class="<?= ($active ?? '') === 'festive' ? 'active' : '' ?>">Obras em Andamento</a>
  <a href="dashboard/relatoriosdown" class="<?= ($active ?? '') === 'relatorios' ? 'active' : '' ?>">Relatórios para Download</a>
  <a href="dashboard/duvidasfiscalizacao" class="<?= ($active ?? '') === 'duvidas' ? 'active' : '' ?>">Canal de Dúvidas e Fiscalização</a>
</div>


<hr class="separador">

<style>
  .categorias {
    display: flex;
    justify-content: space-around;
    margin-top: 20px;
    margin-bottom: 10px;
  }

  .categorias a {
  text-decoration: none;
  color: black;
  transition: all 0.3s ease;
  position: relative; /* necessário pro efeito da borda */
  font-family: 'Montserrat', sans-serif;
  font-size: 20px ;
}

.categorias a::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: -2px; /* distância da borda em relação ao texto */
  width: 0;
  height: 2px;
  background-color: black;
  transition: width 0.3s ease;
}

.categorias a:hover {
  
  transform: scale(1.1);
}

.categorias a:hover::after {
  width: 100%; /* a borda cresce suavemente */
}


  .separador {
    width: 100%;
    border: 2px solid #000;
    height: 5px;
    background-color: #000;
    
  }
</style>

<div class="px-3 px-xxl-5 py-3 py-lg-4 border-bottom border-gray-200 after-header">
        <div class="container-fluid px-0">
        <div class="row align-items-center"> <!-- mantém os dois elementos na mesma linha -->
          
          <!-- Input de pesquisa -->
          <div class="col-3">
            <form>
              <div class="input-group input-group-xl bg-white border border-gray-300 rounded px-3 me-2 me-xl-4">
                <button type="button" class="border-0 bg-transparent p-1">
                  <img src="<?= $base;?>/assets/svg/icons/search@14.svg" alt="Search">
                </button>
                <input type="search" class="form-control border-0 bg-transparent" placeholder="Procurar">
              </div>
            </form>
          </div>
        
          <!-- Botão Exportar -->
          <div class="col-auto d-flex align-items-center">
            <div class="dropdown export-dropdown">
              <a href="#" role="button" id="Exportbtn" data-bs-toggle="dropdown" aria-expanded="false" class="btn btn-lg btn-warning ms-1 px-3">
                <span class="ps-1">Exportar</span> 
                <svg class="ms-4" xmlns="http://www.w3.org/2000/svg" width="14" height="7.875" viewBox="0 0 14 7.875">
                  <path d="M.231.228A.8.8,0,0,1,1.256.152l.088.075,6.3,6.222a.771.771,0,0,1,.076,1.013l-.076.087-6.3,6.222a.794.794,0,0,1-1.114,0,.771.771,0,0,1-.076-1.013l.076-.087L5.973,7,.231,1.328A.771.771,0,0,1,.154.315Z" transform="translate(14) rotate(90)" fill="#1e1e1e"/>
                </svg>
              </a>
              <ul class="dropdown-menu" aria-labelledby="Exportbtn">
                
                <!-- seus itens do dropdown -->
              </ul>
            </div>
          </div>
        
        </div>
        </div>
        </div>

       <div class="row">
        <div class="col-12 mb-4">
          <div class="card rounded-12 shadow-dark-80">
            <div class="d-flex align-items-center px-3 px-md-4 py-3">
              <h5 class="card-header-title mb-0 ps-md-2 font-weight-semibold">Obras</h5>
              <div class="dropdown export-dropdown ms-auto pe-md-2">
                
                  <path d="M.214.212a.738.738,0,0,1,.952-.07l.082.07L7.1,5.989a.716.716,0,0,1,.071.94L7.1,7.011l-5.85,5.778a.738.738,0,0,1-1.034,0,.716.716,0,0,1-.071-.94l.071-.081L5.547,6.5.214,1.233A.716.716,0,0,1,.143.293Z" transform="translate(13 3.25) rotate(90)" fill="#495057"/>
                </svg>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="Sources">
                  <li><a class="dropdown-item" href="#"><span>Today</span></a></li>
                  <li><a class="dropdown-item" href="#"><span>Yesterday</span></a></li>
                  <li><a class="dropdown-item" href="#"><span>Last 7 days</span></a></li>
                  <li><a class="dropdown-item" href="#"><span>This month</span></a></li>
                  <li><a class="dropdown-item" href="#"><span>Last month</span></a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#"><svg data-name="icons/tabler/calendar" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                    <rect data-name="Icons/Tabler/Calendar background" width="16" height="16" fill="none"/>
                    <path d="M2.256,16A2.259,2.259,0,0,1,0,13.743V3.9A2.259,2.259,0,0,1,2.256,1.641H3.282V.616A.615.615,0,0,1,4.507.532l.005.084V1.641H9.846V.616A.615.615,0,0,1,11.071.532l.006.084V1.641H12.1A2.259,2.259,0,0,1,14.359,3.9v9.846A2.259,2.259,0,0,1,12.1,16ZM1.231,13.743a1.027,1.027,0,0,0,1.025,1.026H12.1a1.027,1.027,0,0,0,1.026-1.026V7.795H1.231Zm11.9-7.179V3.9A1.027,1.027,0,0,0,12.1,2.872H11.077V3.9a.616.616,0,0,1-1.226.084L9.846,3.9V2.872H4.513V3.9a.615.615,0,0,1-1.225.084L3.282,3.9V2.872H2.256A1.026,1.026,0,0,0,1.231,3.9V6.564Z" transform="translate(1)" fill="#495057"/>
                  </svg><span class="ms-2">Custom</span></a></li>
                </ul>
              </div>
            </div>
            <div class="table-responsive mb-0">
              <table class="table card-table table-nowrap overflow-hidden">
                <thead>
                  <tr>
                    
                    <th>Equipe</th>
                    <th>STATUS</th> 
                    <th>CATEGORIA</th>
                    <th>Prazo</th>
                    <th>Comunidade</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody class="list">
                  <tr>
                    <td>
                      <div class="d-flex align-items-center">
                        <span class="ps-2 font-weight-semibold text-gray-700">João Silva</span>
                      </div>
                    </td>
                    <td>Pendente</td>
                    <td><span class="badge bg-teal-50 text-teal-500">Infraestrutura</span></td>
                    <td>02/09/2025</td>
                    <td>Anchieta</td>
                    <td>
                      <div class="dropdown text-end">
                        <a href="#" class="btn btn-dark-100 btn-icon btn-sm rounded-circle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <svg data-name="Icons/Tabler/Notification" xmlns="http://www.w3.org/2000/svg" width="13.419" height="13.419" viewBox="0 0 13.419 13.419">
                            <rect data-name="Icons/Tabler/Dots background" width="13.419" height="13.419" fill="none"/>
                            <path d="M0,10.4a1.342,1.342,0,1,1,1.342,1.342A1.344,1.344,0,0,1,0,10.4Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,10.4ZM0,5.871A1.342,1.342,0,1,1,1.342,7.213,1.344,1.344,0,0,1,0,5.871Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,5.871ZM0,1.342A1.342,1.342,0,1,1,1.342,2.684,1.344,1.344,0,0,1,0,1.342Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,1.342Z" transform="translate(5.368 0.839)" fill="#6c757d"/>
                          </svg>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end shadow-sm">
                          <a href="#!" class="dropdown-item">
                            Action
                          </a>
                          <a href="#!" class="dropdown-item">
                            Another action
                          </a>
                          <a href="#!" class="dropdown-item">
                            Something else here
                          </a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center">
                        
                        <span class="ps-2 font-weight-semibold text-gray-700">Bernardo Cota</span>
                      </div>
                    </td>
                    <td>Em Andamento</td>
                    <td><span class="badge bg-teal-50 text-teal-500">Infraestrutura</span></td>
                    <td>17/10/2025</td>
                    <td>Realengo</td>
                    <td>
                      <div class="dropdown text-end">
                        <a href="#" class="btn btn-dark-100 btn-icon btn-sm rounded-circle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <svg data-name="Icons/Tabler/Notification" xmlns="http://www.w3.org/2000/svg" width="13.419" height="13.419" viewBox="0 0 13.419 13.419">
                            <rect data-name="Icons/Tabler/Dots background" width="13.419" height="13.419" fill="none"/>
                            <path d="M0,10.4a1.342,1.342,0,1,1,1.342,1.342A1.344,1.344,0,0,1,0,10.4Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,10.4ZM0,5.871A1.342,1.342,0,1,1,1.342,7.213,1.344,1.344,0,0,1,0,5.871Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,5.871ZM0,1.342A1.342,1.342,0,1,1,1.342,2.684,1.344,1.344,0,0,1,0,1.342Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,1.342Z" transform="translate(5.368 0.839)" fill="#6c757d"/>
                          </svg>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end shadow-sm">
                          <a href="#!" class="dropdown-item">
                            Action
                          </a>
                          <a href="#!" class="dropdown-item">
                            Another action
                          </a>
                          <a href="#!" class="dropdown-item">
                            Something else here
                          </a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center">
                        
                        <span class="ps-2 font-weight-semibold text-gray-700">Gabriel Sousa</span>
                      </div>
                    </td>
                    <td>Concluido</td>
                    <td><span class="badge bg-red-50 text-dnd">Mobilidade</span></td>
                    <td>01/05/2025</td>
                    <td>Nova Iguaçu</td>
                    <td>
                      <div class="dropdown text-end">
                        <a href="#" class="btn btn-dark-100 btn-icon btn-sm rounded-circle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <svg data-name="Icons/Tabler/Notification" xmlns="http://www.w3.org/2000/svg" width="13.419" height="13.419" viewBox="0 0 13.419 13.419">
                            <rect data-name="Icons/Tabler/Dots background" width="13.419" height="13.419" fill="none"/>
                            <path d="M0,10.4a1.342,1.342,0,1,1,1.342,1.342A1.344,1.344,0,0,1,0,10.4Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,10.4ZM0,5.871A1.342,1.342,0,1,1,1.342,7.213,1.344,1.344,0,0,1,0,5.871Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,5.871ZM0,1.342A1.342,1.342,0,1,1,1.342,2.684,1.344,1.344,0,0,1,0,1.342Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,1.342Z" transform="translate(5.368 0.839)" fill="#6c757d"/>
                          </svg>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end shadow-sm">
                          <a href="#!" class="dropdown-item">
                            Action
                          </a>
                          <a href="#!" class="dropdown-item">
                            Another action
                          </a>
                          <a href="#!" class="dropdown-item">
                            Something else here
                          </a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center">
                     
                        <span class="ps-2 font-weight-semibold text-gray-700">Fernanda Leal</span>
                      </div>
                    </td>
                    <td>Concluido</td>
                    <td><span class="badge bg-teal-50 text-teal-500">Infraestrutura</span></td>
                    <td>20/04/2025</td>
                    <td>Nilópolis</td>
                    <td>
                      <div class="dropdown text-end">
                        <a href="#" class="btn btn-dark-100 btn-icon btn-sm rounded-circle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <svg data-name="Icons/Tabler/Notification" xmlns="http://www.w3.org/2000/svg" width="13.419" height="13.419" viewBox="0 0 13.419 13.419">
                            <rect data-name="Icons/Tabler/Dots background" width="13.419" height="13.419" fill="none"/>
                            <path d="M0,10.4a1.342,1.342,0,1,1,1.342,1.342A1.344,1.344,0,0,1,0,10.4Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,10.4ZM0,5.871A1.342,1.342,0,1,1,1.342,7.213,1.344,1.344,0,0,1,0,5.871Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,5.871ZM0,1.342A1.342,1.342,0,1,1,1.342,2.684,1.344,1.344,0,0,1,0,1.342Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,1.342Z" transform="translate(5.368 0.839)" fill="#6c757d"/>
                          </svg>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end shadow-sm">
                          <a href="#!" class="dropdown-item">
                            Action
                          </a>
                          <a href="#!" class="dropdown-item">
                            Another action
                          </a>
                          <a href="#!" class="dropdown-item">
                            Something else here
                          </a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center">
                        
                        <span class="ps-2 font-weight-semibold text-gray-700">Gabriel Figueiredo</span>
                      </div>
                    </td>
                    <td>Pendente</td>
                    <td><span class="badge bg-red-50 text-dnd">Infraestrutura</span></td>
                    <td><a href="<?= $base;?>/assets/images/avatar-sm2.png"></a>15/06/2025</td>
                    <td>Marechal Hermes</td>
                    <td>
                      <div class="dropdown text-end">
                        <a href="#" class="btn btn-dark-100 btn-icon btn-sm rounded-circle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <svg data-name="Icons/Tabler/Notification" xmlns="http://www.w3.org/2000/svg" width="13.419" height="13.419" viewBox="0 0 13.419 13.419">
                            <rect data-name="Icons/Tabler/Dots background" width="13.419" height="13.419" fill="none"/>
                            <path d="M0,10.4a1.342,1.342,0,1,1,1.342,1.342A1.344,1.344,0,0,1,0,10.4Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,10.4ZM0,5.871A1.342,1.342,0,1,1,1.342,7.213,1.344,1.344,0,0,1,0,5.871Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,5.871ZM0,1.342A1.342,1.342,0,1,1,1.342,2.684,1.344,1.344,0,0,1,0,1.342Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,1.342Z" transform="translate(5.368 0.839)" fill="#6c757d"/>
                          </svg>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end shadow-sm">
                          <a href="#!" class="dropdown-item">
                            Action
                          </a>
                          <a href="#!" class="dropdown-item">
                            Another action
                          </a>
                          <a href="#!" class="dropdown-item">
                            Something else here
                          </a>
                        </div>
                      </div>
                    </td>
                  </tr>
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