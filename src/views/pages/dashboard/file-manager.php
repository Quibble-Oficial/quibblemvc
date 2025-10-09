<?php // Arquivo convertido de HTML para PHP ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<title>Buy Muze Bootstrap 5 File Manager Page</title>
<meta charset="UTF-8">
<meta name="description" content="Presenting Muze, All-in-one Bootstrap 5 File Manager Admin Dashboard, 30+ Premium HTML Pages, 500+ components, dark mode, RTL. Starts @ Only $35">
<meta name="title" content="Muze Bootstrap 5 File Manager Templates, Themes, & Dashboard">
<meta name="keywords" content="bootstrap file manager template, files library, files management">
<meta name="author" content="Muze Dashboard">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- Muze Favicon -->
<link href="<?= $base;?>/favicon.ico" rel="shortcut icon" type="image/x-icon">
<!-- Muze Plugins CSS -->
<link href="<?= $base;?>/assets/vendor/simplebar/dist/simplebar.min.css" rel="stylesheet" type="text/css" media="all">
<!-- Muze Theme CSS -->
<link href="<?= $base;?>/assets/css/theme.min.css" rel="stylesheet" type="text/css" media="all">
</head>
<body class="bg-gray-100 file-manager-template">

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
      <h3 class="mb-0"><img src="../assets/svg/icons/tio-tune2.svg" alt="Tio Tune"> Customize</h3>
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
            <label class="form-check-label" for="SidebarDefault"><img src="../assets/img/sidebar-default.svg" alt="Sidebar Default" class="rounded mb-2 border-gray-400 border"><span>Default</span></label>
          </div>
        </div>
        <div class="me-3 sidebar-style">
          
          <div class="form-check form-check-sm me-0">
            <input class="form-check-input" type="radio" name="SidebarStyles" id="SidebarCompact" value="sidebar-compact">
            <label class="form-check-label" for="SidebarCompact"><img src="../assets/img/sidebar-compact.svg" alt="Sidebar Compact" class="rounded mb-2 border-gray-400 border"><span>Compact</span></label>
          </div>
        </div>
        <div class="me-3 sidebar-style">
          
          <div class="form-check form-check-sm me-0">
            <input class="form-check-input" type="radio" name="SidebarStyles" id="SidebarIcons" value="sidebar-icons">
            <label class="form-check-label" for="SidebarIcons"><img src="../assets/img/sidebar-icons.svg" alt="Sidebar Icons" class="rounded mb-2 border-gray-400 border"><span>Icons</span></label>
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
</div> -->

<!-- Muze Default Sidebar, Muze Navbar, Muze Navbar Vertical, Muze Navbar Expand Lg, Muze Navbar Light -->
<!-- <nav class="navbar navbar-vertical navbar-expand-lg navbar-light">
  <a class="navbar-brand mx-auto d-none d-lg-block my-0 my-lg-4" href="#">
    <img src="../assets/svg/brand/logo.svg" alt="Muze">
    <img src="../assets/svg/brand/logo-white.svg" alt="Muze" class="white-logo2">
    <img src="../assets/svg/brand/muze-icon.svg" class="muze-icon" alt="Muze">
    <img src="../assets/svg/brand/muze-icon-white.svg" class="muze-icon-white" alt="Muze">
  </a>
  <div class="navbar-collapse">
    <ul class="navbar-nav mb-2" id="accordionExample" data-simplebar>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
            <g data-name="icons/tabler/chart" transform="translate(0)">
              <rect data-name="Icons/Tabler/Chart background" width="16" height="16" fill="none"/>
              <path d="M.686,13.257a.686.686,0,0,1-.093-1.365l.093-.006H15.314a.686.686,0,0,1,.093,1.365l-.093.006ZM.394,9.535l-.089-.05a.688.688,0,0,1-.24-.863l.05-.088L3.773,3.048a.684.684,0,0,1,.782-.272l.095.039L7.811,4.4,11.121.257a.687.687,0,0,1,.945-.122L12.142.2,15.8,3.858a.686.686,0,0,1-.893,1.036l-.077-.067L11.713,1.712,8.536,5.685a.684.684,0,0,1-.743.225l-.1-.04L4.578,4.313,1.256,9.294a.684.684,0,0,1-.862.24Z" transform="translate(0 1)" fill="#1e1e1e"/>
            </g>
          </svg> &nbsp;<span class="ms-2">Dashboards</span>
        </a>
        <div class="collapse collapse-box" id="sidebarDashboards" data-bs-parent="#accordionExample">
          <ul class="nav nav-sm flex-column">
            <li class="nav-item">
              <a href="analytics.html" class="nav-link">Analytics</a>
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
        <a class="nav-link collapsed" href="#sidebarApps" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarApps">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
            <g data-name="Icons/Tabler/Paperclip" transform="translate(0 0)">
              <rect data-name="Icons/Tabler/apps background" width="16" height="16" fill="none"/>
              <path d="M10.743,16a1.6,1.6,0,0,1-1.6-1.6V10.743a1.6,1.6,0,0,1,1.6-1.6H14.4a1.6,1.6,0,0,1,1.6,1.6V14.4A1.6,1.6,0,0,1,14.4,16Zm-.229-5.257V14.4a.229.229,0,0,0,.229.229H14.4a.229.229,0,0,0,.229-.229V10.743a.229.229,0,0,0-.229-.229H10.743A.229.229,0,0,0,10.515,10.743ZM1.6,16A1.6,1.6,0,0,1,0,14.4V10.743a1.6,1.6,0,0,1,1.6-1.6H5.257a1.6,1.6,0,0,1,1.6,1.6V14.4a1.6,1.6,0,0,1-1.6,1.6Zm-.229-5.257V14.4a.229.229,0,0,0,.229.229H5.257a.229.229,0,0,0,.229-.229V10.743a.229.229,0,0,0-.229-.229H1.6A.229.229,0,0,0,1.372,10.743Zm9.372-3.886a1.6,1.6,0,0,1-1.6-1.6V1.6a1.6,1.6,0,0,1,1.6-1.6H14.4A1.6,1.6,0,0,1,16,1.6V5.257a1.6,1.6,0,0,1-1.6,1.6ZM10.515,1.6V5.257a.229.229,0,0,0,.229.229H14.4a.229.229,0,0,0,.229-.229V1.6a.229.229,0,0,0-.229-.229H10.743A.229.229,0,0,0,10.515,1.6ZM1.6,6.857A1.6,1.6,0,0,1,0,5.257V1.6A1.6,1.6,0,0,1,1.6,0H5.257a1.6,1.6,0,0,1,1.6,1.6V5.257a1.6,1.6,0,0,1-1.6,1.6ZM1.372,1.6V5.257a.229.229,0,0,0,.229.229H5.257a.229.229,0,0,0,.229-.229V1.6a.229.229,0,0,0-.229-.229H1.6A.229.229,0,0,0,1.372,1.6Z" transform="translate(0 0)" fill="#1e1e1e"/>
            </g>
          </svg> &nbsp;<span class="ms-2 position-relative">Apps <sup class="status bg-warning ms-2 position-absolute">&nbsp;</sup></span>
        </a>
        <div class="collapse collapse-box show" id="sidebarApps" data-bs-parent="#accordionExample">
          <ul class="nav nav-sm flex-column">
            <li class="nav-item">
              <a href="file-manager.html" class="nav-link active">File manager</a>
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

  <div class="px-3 px-xxl-5 py-3 py-lg-4 border-bottom border-gray-200 after-header">
    <div class="container-fluid px-0">
      <div class="row align-items-center">
        <div class="col">
          <span class="text-uppercase tiny text-gray-600 Montserrat-font font-weight-semibold">Pages</span>
          <h1 class="h2 mb-0 lh-sm">File manager</h1>
        </div>
        <div class="col-auto d-flex align-items-center my-2 my-sm-0">
          <a href="#" class="btn btn-lg btn-warning"><svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14">
            <rect data-name="Icons/Tabler/Add background" width="14" height="14" fill="none"/>
            <path d="M6.329,13.414l-.006-.091V7.677H.677A.677.677,0,0,1,.585,6.329l.092-.006H6.323V.677A.677.677,0,0,1,7.671.585l.006.092V6.323h5.646a.677.677,0,0,1,.091,1.348l-.091.006H7.677v5.646a.677.677,0,0,1-1.348.091Z" fill="#1e1e1e"/>
          </svg><span>Settings</span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="p-3 p-xxl-5">
    <div class="container-fluid px-0 pb-1 pb-md-4">
      <div class="border-bottom border-gray-200 pb-2 pb-xl-5 mb-2 mb-xl-5">
        <h5 class="font-weight-semibold text-black-600 mb-lg-4 pb-1">Recent files</h5>
        <div class="row">
          <div class="col-6 col-md-4 col-lg-6 col-xl-4 has-xxl-5 mb-3 mb-lg-4">
            <figure class="p-2 rounded-6 shadow-dark-80 bg-white mb-0 h-100 border border-gray-200">
              <div class="dropdown mb-2 text-end">
                <a href="#" class="btn btn-dark-100 btn-icon btn-sm rounded-circle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <svg data-name="Icons/Tabler/Notification" xmlns="http://www.w3.org/2000/svg" width="10.06" height="10.06" viewBox="0 0 13.419 13.419">
                    <rect data-name="Icons/Tabler/Dots background" width="13.419" height="13.419" fill="none"></rect>
                    <path d="M0,10.4a1.342,1.342,0,1,1,1.342,1.342A1.344,1.344,0,0,1,0,10.4Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,10.4ZM0,5.871A1.342,1.342,0,1,1,1.342,7.213,1.344,1.344,0,0,1,0,5.871Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,5.871ZM0,1.342A1.342,1.342,0,1,1,1.342,2.684,1.344,1.344,0,0,1,0,1.342Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,1.342Z" transform="translate(5.368 0.839)" fill="#6c757d"></path>
                  </svg>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
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
              <figcaption class="text-center">
                <img src="<?= $base;?>/assets/images/word-software.svg" alt="Word">
                <h6 class="font-weight-semibold open-sans-font mt-3">My Resume</h6>
                <p class="text-gray-600 fs-11 lh-base">Uploaded today by You</p>
              </figcaption>
            </figure>
          </div>
          <div class="col-6 col-md-4 col-lg-6 col-xl-4 has-xxl-5 mb-3 mb-lg-4">
            <figure class="p-2 rounded-6 shadow-dark-80 bg-white mb-0 h-100 border border-gray-200">
              <div class="dropdown mb-2 text-end">
                <a href="#" class="btn btn-dark-100 btn-icon btn-sm rounded-circle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <svg data-name="Icons/Tabler/Notification" xmlns="http://www.w3.org/2000/svg" width="10.06" height="10.06" viewBox="0 0 13.419 13.419">
                    <rect data-name="Icons/Tabler/Dots background" width="13.419" height="13.419" fill="none"></rect>
                    <path d="M0,10.4a1.342,1.342,0,1,1,1.342,1.342A1.344,1.344,0,0,1,0,10.4Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,10.4ZM0,5.871A1.342,1.342,0,1,1,1.342,7.213,1.344,1.344,0,0,1,0,5.871Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,5.871ZM0,1.342A1.342,1.342,0,1,1,1.342,2.684,1.344,1.344,0,0,1,0,1.342Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,1.342Z" transform="translate(5.368 0.839)" fill="#6c757d"></path>
                  </svg>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
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
              <figcaption class="text-center">
                <img src="<?= $base;?>/assets/images/pdf.svg" alt="PDF">
                <h6 class="font-weight-semibold open-sans-font mt-3">Portfolio</h6>
                <p class="text-gray-600 fs-11 lh-base">Uploaded today by You</p>
              </figcaption>
            </figure>
          </div>
          <div class="col-6 col-md-4 col-lg-6 col-xl-4 has-xxl-5 mb-3 mb-lg-4">
            <figure class="rounded-6 shadow-dark-80 bg-white position-relative mb-0 h-100 border border-gray-200">
              <div class="dropdown mb-2 text-end position-absolute top-0 end-0">
                <a href="#" class="btn btn-dark-100 btn-icon btn-sm rounded-circle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <svg data-name="Icons/Tabler/Notification" xmlns="http://www.w3.org/2000/svg" width="10.06" height="10.06" viewBox="0 0 13.419 13.419">
                    <rect data-name="Icons/Tabler/Dots background" width="13.419" height="13.419" fill="none"></rect>
                    <path d="M0,10.4a1.342,1.342,0,1,1,1.342,1.342A1.344,1.344,0,0,1,0,10.4Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,10.4ZM0,5.871A1.342,1.342,0,1,1,1.342,7.213,1.344,1.344,0,0,1,0,5.871Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,5.871ZM0,1.342A1.342,1.342,0,1,1,1.342,2.684,1.344,1.344,0,0,1,0,1.342Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,1.342Z" transform="translate(5.368 0.839)" fill="#6c757d"></path>
                  </svg>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
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
              <img src="<?= $base;?>/assets/images/placeholder22.jpg" alt="Word" class="rounded-top-6 w-100">
              <figcaption class="text-center p-2 p-md-3">
                <h6 class="font-weight-semibold open-sans-font">street-wallpaper.jpg</h6>
                <p class="text-gray-600 fs-11 lh-base mb-0">Uploladed yesterday by you</p>
              </figcaption>
            </figure>
          </div>
          <div class="col-6 col-md-4 col-lg-6 col-xl-4 has-xxl-5 mb-3 mb-lg-4">
            <figure class="p-2 rounded-6 shadow-dark-80 bg-white mb-0 h-100 border border-gray-200">
              <div class="dropdown mb-2 text-end">
                <a href="#" class="btn btn-dark-100 btn-icon btn-sm rounded-circle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <svg data-name="Icons/Tabler/Notification" xmlns="http://www.w3.org/2000/svg" width="10.06" height="10.06" viewBox="0 0 13.419 13.419">
                    <rect data-name="Icons/Tabler/Dots background" width="13.419" height="13.419" fill="none"></rect>
                    <path d="M0,10.4a1.342,1.342,0,1,1,1.342,1.342A1.344,1.344,0,0,1,0,10.4Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,10.4ZM0,5.871A1.342,1.342,0,1,1,1.342,7.213,1.344,1.344,0,0,1,0,5.871Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,5.871ZM0,1.342A1.342,1.342,0,1,1,1.342,2.684,1.344,1.344,0,0,1,0,1.342Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,1.342Z" transform="translate(5.368 0.839)" fill="#6c757d"></path>
                  </svg>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
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
              <figcaption class="text-center">
                <img src="<?= $base;?>/assets/images/excel-software.svg" alt="Word">
                <h6 class="font-weight-semibold open-sans-font mt-3">Finance 2021</h6>
                <p class="text-gray-600 fs-11 lh-base">Uploladed Jun 9 by you</p>
              </figcaption>
            </figure>
          </div>
          <div class="col-6 col-md-4 col-lg-6 col-xl-4 has-xxl-5 mb-3 mb-lg-4">
            <figure class="rounded-6 shadow-dark-80 bg-white position-relative mb-0 h-100 border border-gray-200">
              <div class="dropdown mb-2 text-end position-absolute top-0 end-0">
                <a href="#" class="btn btn-dark-100 btn-icon btn-sm rounded-circle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <svg data-name="Icons/Tabler/Notification" xmlns="http://www.w3.org/2000/svg" width="10.06" height="10.06" viewBox="0 0 13.419 13.419">
                    <rect data-name="Icons/Tabler/Dots background" width="13.419" height="13.419" fill="none"></rect>
                    <path d="M0,10.4a1.342,1.342,0,1,1,1.342,1.342A1.344,1.344,0,0,1,0,10.4Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,10.4ZM0,5.871A1.342,1.342,0,1,1,1.342,7.213,1.344,1.344,0,0,1,0,5.871Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,5.871ZM0,1.342A1.342,1.342,0,1,1,1.342,2.684,1.344,1.344,0,0,1,0,1.342Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,1.342Z" transform="translate(5.368 0.839)" fill="#6c757d"></path>
                  </svg>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
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
              <img src="<?= $base;?>/assets/images/placeholder23.jpg" alt="Word" class="rounded-top-6 w-100">
              <figcaption class="text-center p-2 p-md-3">
                <h6 class="font-weight-semibold open-sans-font">IMG_332156.jpg</h6>
                <p class="text-gray-600 fs-11 lh-base mb-0">Uploladed Jun 2 by you</p>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
      <div class="border-bottom border-gray-200 pb-2 pb-xl-5 mb-2 mb-xl-5 pt-3">
        <h5 class="font-weight-semibold text-black-600 mb-lg-4 pb-1">Folders</h5>
        <div class="row">
          <div class="col-6 col-md-4 col-lg-6 col-xl-4 has-xxl-5 mb-3 mb-lg-4">
            <figure class="p-2 rounded-6 shadow-dark-80 bg-white mb-0 h-100 border border-gray-200">
              <div class="mb-2 d-flex align-items-center">
                <span class="badge badge-sm badge-soft-primary">5 files</span>
                <div class="d-flex align-items-center ms-auto">
                  <a href="#0" class="me-1">
                    <svg data-name="icons/tabler/users" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 16 16">
                      <rect data-name="Icons/Tabler/Users background" width="16" height="16" fill="none"/>
                      <path d="M14.774,15.468l-.005-.084V13.748a2.666,2.666,0,0,0-2-2.567.615.615,0,1,1,.308-1.192,3.9,3.9,0,0,1,2.918,3.572l.005.183v1.641a.616.616,0,0,1-1.226.084Zm-4.923,0-.005-.084V13.744a2.667,2.667,0,0,0-2.516-2.663l-.151,0H3.9a2.667,2.667,0,0,0-2.662,2.516l0,.151v1.641a.616.616,0,0,1-1.226.084L0,15.385V13.744A3.9,3.9,0,0,1,3.719,9.851l.178,0H7.179a3.9,3.9,0,0,1,3.893,3.719l0,.179v1.641a.616.616,0,0,1-1.226.084ZM1.641,3.9a3.9,3.9,0,1,1,3.9,3.9A3.9,3.9,0,0,1,1.641,3.9Zm1.231,0A2.666,2.666,0,1,0,5.538,1.231,2.669,2.669,0,0,0,2.872,3.9Zm7.814,3.336a.616.616,0,0,1,.444-.749,2.666,2.666,0,0,0,0-5.166A.615.615,0,0,1,11.435.126a3.9,3.9,0,0,1,0,7.551.614.614,0,0,1-.749-.444Z" fill="#1e1e1e"/>
                    </svg>                    
                  </a>
                  <div class="dropdown ms-2">
                    <a href="#" class="btn btn-dark-100 btn-icon btn-sm rounded-circle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <svg data-name="Icons/Tabler/Notification" xmlns="http://www.w3.org/2000/svg" width="13.419" height="13.419" viewBox="0 0 13.419 13.419">
                        <rect data-name="Icons/Tabler/Dots background" width="13.419" height="13.419" fill="none"></rect>
                        <path d="M0,10.4a1.342,1.342,0,1,1,1.342,1.342A1.344,1.344,0,0,1,0,10.4Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,10.4ZM0,5.871A1.342,1.342,0,1,1,1.342,7.213,1.344,1.344,0,0,1,0,5.871Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,5.871ZM0,1.342A1.342,1.342,0,1,1,1.342,2.684,1.344,1.344,0,0,1,0,1.342Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,1.342Z" transform="translate(5.368 0.839)" fill="#6c757d"></path>
                      </svg>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
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
                </div>
              </div>
              <figcaption class="text-center">
                <img src="<?= $base;?>/assets/images/folder.svg" alt="Folder" class="arrow-icon">
                <h6 class="font-weight-semibold open-sans-font mt-3">Digital Assets</h6>
                <p class="text-gray-600 fs-11 lh-base">Uploaded today by You</p>
              </figcaption>
            </figure>
          </div>
          <div class="col-6 col-md-4 col-lg-6 col-xl-4 has-xxl-5 mb-3 mb-lg-4">
            <figure class="p-2 rounded-6 shadow-dark-80 bg-white mb-0 h-100 border border-gray-200">
              <div class="mb-2 d-flex align-items-center">
                <span class="badge badge-sm badge-soft-primary">16 files</span>
                <div class="d-flex align-items-center ms-auto">
                  <div class="dropdown ms-2">
                    <a href="#" class="btn btn-dark-100 btn-icon btn-sm rounded-circle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <svg data-name="Icons/Tabler/Notification" xmlns="http://www.w3.org/2000/svg" width="10.06" height="10.06" viewBox="0 0 13.419 13.419">
                        <rect data-name="Icons/Tabler/Dots background" width="13.419" height="13.419" fill="none"></rect>
                        <path d="M0,10.4a1.342,1.342,0,1,1,1.342,1.342A1.344,1.344,0,0,1,0,10.4Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,10.4ZM0,5.871A1.342,1.342,0,1,1,1.342,7.213,1.344,1.344,0,0,1,0,5.871Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,5.871ZM0,1.342A1.342,1.342,0,1,1,1.342,2.684,1.344,1.344,0,0,1,0,1.342Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,1.342Z" transform="translate(5.368 0.839)" fill="#6c757d"></path>
                      </svg>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
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
                </div>
              </div>
              <figcaption class="text-center">
                <img src="<?= $base;?>/images/folder.svg" alt="Folder" class="arrow-icon">
                <h6 class="font-weight-semibold open-sans-font mt-3">Logos</h6>
                <p class="text-gray-600 fs-11 lh-base">updated yesterday by You</p>
              </figcaption>
            </figure>
          </div>
          <div class="col-6 col-md-4 col-lg-6 col-xl-4 has-xxl-5 mb-3 mb-lg-4">
            <figure class="p-2 rounded-6 shadow-dark-80 bg-white mb-0 h-100 border border-gray-200">
              <div class="mb-2 d-flex align-items-center">
                <span class="badge badge-sm badge-soft-primary">3 files</span>
                <div class="d-flex align-items-center ms-auto">
                  <div class="dropdown ms-2">
                    <a href="#" class="btn btn-dark-100 btn-icon btn-sm rounded-circle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <svg data-name="Icons/Tabler/Notification" xmlns="http://www.w3.org/2000/svg" width="10.06" height="10.06" viewBox="0 0 13.419 13.419">
                        <rect data-name="Icons/Tabler/Dots background" width="13.419" height="13.419" fill="none"></rect>
                        <path d="M0,10.4a1.342,1.342,0,1,1,1.342,1.342A1.344,1.344,0,0,1,0,10.4Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,10.4ZM0,5.871A1.342,1.342,0,1,1,1.342,7.213,1.344,1.344,0,0,1,0,5.871Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,5.871ZM0,1.342A1.342,1.342,0,1,1,1.342,2.684,1.344,1.344,0,0,1,0,1.342Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,1.342Z" transform="translate(5.368 0.839)" fill="#6c757d"></path>
                      </svg>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
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
                </div>
              </div>
              <figcaption class="text-center">
                <img src="<?= $base;?>/assets/images/folder.svg" alt="Folder" class="arrow-icon">
                <h6 class="font-weight-semibold open-sans-font mt-3">Personal stuff</h6>
                <p class="text-gray-600 fs-11 lh-base">updated Aug 21 by Janna</p>
              </figcaption>
            </figure>
          </div>
          <div class="col-6 col-md-4 col-lg-6 col-xl-4 has-xxl-5 mb-3 mb-lg-4">
            <figure class="p-2 rounded-6 shadow-dark-80 bg-white mb-0 h-100 border border-gray-200">
              <div class="mb-2 d-flex align-items-center">
                <span class="badge badge-sm badge-soft-primary">113 files</span>
                <div class="d-flex align-items-center ms-auto">
                  <a href="#0" class="me-1">
                    <svg data-name="icons/tabler/users" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 16 16">
                      <rect data-name="Icons/Tabler/Users background" width="16" height="16" fill="none"/>
                      <path d="M14.774,15.468l-.005-.084V13.748a2.666,2.666,0,0,0-2-2.567.615.615,0,1,1,.308-1.192,3.9,3.9,0,0,1,2.918,3.572l.005.183v1.641a.616.616,0,0,1-1.226.084Zm-4.923,0-.005-.084V13.744a2.667,2.667,0,0,0-2.516-2.663l-.151,0H3.9a2.667,2.667,0,0,0-2.662,2.516l0,.151v1.641a.616.616,0,0,1-1.226.084L0,15.385V13.744A3.9,3.9,0,0,1,3.719,9.851l.178,0H7.179a3.9,3.9,0,0,1,3.893,3.719l0,.179v1.641a.616.616,0,0,1-1.226.084ZM1.641,3.9a3.9,3.9,0,1,1,3.9,3.9A3.9,3.9,0,0,1,1.641,3.9Zm1.231,0A2.666,2.666,0,1,0,5.538,1.231,2.669,2.669,0,0,0,2.872,3.9Zm7.814,3.336a.616.616,0,0,1,.444-.749,2.666,2.666,0,0,0,0-5.166A.615.615,0,0,1,11.435.126a3.9,3.9,0,0,1,0,7.551.614.614,0,0,1-.749-.444Z" fill="#1e1e1e"/>
                    </svg>                    
                  </a>
                  <div class="dropdown ms-2">
                    <a href="#" class="btn btn-dark-100 btn-icon btn-sm rounded-circle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <svg data-name="Icons/Tabler/Notification" xmlns="http://www.w3.org/2000/svg" width="10.06" height="10.06" viewBox="0 0 13.419 13.419">
                        <rect data-name="Icons/Tabler/Dots background" width="13.419" height="13.419" fill="none"></rect>
                        <path d="M0,10.4a1.342,1.342,0,1,1,1.342,1.342A1.344,1.344,0,0,1,0,10.4Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,10.4ZM0,5.871A1.342,1.342,0,1,1,1.342,7.213,1.344,1.344,0,0,1,0,5.871Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,5.871ZM0,1.342A1.342,1.342,0,1,1,1.342,2.684,1.344,1.344,0,0,1,0,1.342Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,1.342Z" transform="translate(5.368 0.839)" fill="#6c757d"></path>
                      </svg>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
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
                </div>
              </div>
              <figcaption class="text-center">
                <img src="<?= $base;?>/assets/images/folder.svg" alt="Folder" class="arrow-icon">
                <h6 class="font-weight-semibold open-sans-font mt-3">Typography</h6>
                <p class="text-gray-600 fs-11 lh-base">updated Aug 2 by you</p>
              </figcaption>
            </figure>
          </div>
          <div class="col-6 col-md-4 col-lg-6 col-xl-4 has-xxl-5 mb-3 mb-lg-4">
            <figure class="p-2 rounded-6 shadow-dark-80 bg-white mb-0 h-100 border border-gray-200">
              <div class="mb-2 d-flex align-items-center">
                <span class="badge badge-sm badge-soft-primary">5 files</span>
                <div class="d-flex align-items-center ms-auto">
                  <a href="#0" class="me-1">
                    <svg data-name="icons/tabler/users" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 16 16">
                      <rect data-name="Icons/Tabler/Users background" width="16" height="16" fill="none"/>
                      <path d="M14.774,15.468l-.005-.084V13.748a2.666,2.666,0,0,0-2-2.567.615.615,0,1,1,.308-1.192,3.9,3.9,0,0,1,2.918,3.572l.005.183v1.641a.616.616,0,0,1-1.226.084Zm-4.923,0-.005-.084V13.744a2.667,2.667,0,0,0-2.516-2.663l-.151,0H3.9a2.667,2.667,0,0,0-2.662,2.516l0,.151v1.641a.616.616,0,0,1-1.226.084L0,15.385V13.744A3.9,3.9,0,0,1,3.719,9.851l.178,0H7.179a3.9,3.9,0,0,1,3.893,3.719l0,.179v1.641a.616.616,0,0,1-1.226.084ZM1.641,3.9a3.9,3.9,0,1,1,3.9,3.9A3.9,3.9,0,0,1,1.641,3.9Zm1.231,0A2.666,2.666,0,1,0,5.538,1.231,2.669,2.669,0,0,0,2.872,3.9Zm7.814,3.336a.616.616,0,0,1,.444-.749,2.666,2.666,0,0,0,0-5.166A.615.615,0,0,1,11.435.126a3.9,3.9,0,0,1,0,7.551.614.614,0,0,1-.749-.444Z" fill="#1e1e1e"/>
                    </svg>                    
                  </a>
                  <div class="dropdown ms-2">
                    <a href="#" class="btn btn-dark-100 btn-icon btn-sm rounded-circle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <svg data-name="Icons/Tabler/Notification" xmlns="http://www.w3.org/2000/svg" width="10.06" height="10.06" viewBox="0 0 13.419 13.419">
                        <rect data-name="Icons/Tabler/Dots background" width="13.419" height="13.419" fill="none"></rect>
                        <path d="M0,10.4a1.342,1.342,0,1,1,1.342,1.342A1.344,1.344,0,0,1,0,10.4Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,10.4ZM0,5.871A1.342,1.342,0,1,1,1.342,7.213,1.344,1.344,0,0,1,0,5.871Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,5.871ZM0,1.342A1.342,1.342,0,1,1,1.342,2.684,1.344,1.344,0,0,1,0,1.342Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,1.342Z" transform="translate(5.368 0.839)" fill="#6c757d"></path>
                      </svg>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
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
                </div>
              </div>
              <figcaption class="text-center">
                <img src="<?= $base;?>/assets/images/folder.svg" alt="Folder" class="arrow-icon">
                <h6 class="font-weight-semibold open-sans-font mt-3">Digital Assets</h6>
                <p class="text-gray-600 fs-11 lh-base">updated Jul 9 by Janna</p>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
      <div class="border-bottom border-gray-200 pb-2 pb-xl-5 mb-2 mb-xl-5 pt-3">
        <div class="bg-blue-50 p-4 p-md-5 position-relative overflow-hidden rounded-12 mb-md-4 alert alert-dismissible zIndex-0" role="alert">
          <div class="row mb-0 mb-sm-5 mb-md-0 ps-xl-3">
            <div class="col-lg-12 col-xl-8 col-xxl-4 pb-md-2">
              <a href="#" class="btn btn-light btn-icon rounded-pill position-absolute top-16 end-16" data-bs-dismiss="alert" aria-label="Close">
                <svg data-name="icons/tabler/close" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 16 16">
                  <rect data-name="Icons/Tabler/Close background" width="16" height="16" fill="none"></rect>
                  <path d="M.82.1l.058.05L6,5.272,11.122.151A.514.514,0,0,1,11.9.82l-.05.058L6.728,6l5.122,5.122a.514.514,0,0,1-.67.777l-.058-.05L6,6.728.878,11.849A.514.514,0,0,1,.1,11.18l.05-.058L5.272,6,.151.878A.514.514,0,0,1,.75.057Z" transform="translate(2 2)" fill="#1E1E1E"></path>
                </svg>
              </a>
              <span class="badge badge-lg badge-warning text-uppercase py-2">Become a Pro</span>
              <h2 class="my-2">Get instant live results for only $12.99 monthly <img src="<?= $base;?>/assets/svg/icons/right-arrow.svg" class="ms-2 arrow-icon" alt="img"></h2>
            </div>
            <div class="col-lg-8">
              <div class="get-started-img">
                <img src="<?= $base;?>/assets/images/get-started.png" class="img-fluid" alt="img">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="border-bottom border-gray-200 pb-2 pb-xl-5 mb-2 mb-xl-5 pt-3">
        <h5 class="font-weight-semibold text-black-600 mb-lg-4 pb-1">Browse files by people</h5>
        <div class="row">
          <div class="col-6 col-md-4 col-lg-6 col-xl-4 has-xxl-5 mb-3 mb-lg-4">
            <figure class="p-2 rounded-6 shadow-dark-80 bg-white mb-0 h-100 border border-gray-200">
              <div class="mb-2 d-flex align-items-center">
                <span class="badge badge-sm badge-soft-primary">18 files</span>
                <div class="dropdown ms-auto">
                  <a href="#" class="btn btn-dark-100 btn-icon btn-sm rounded-circle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg data-name="Icons/Tabler/Notification" xmlns="http://www.w3.org/2000/svg" width="10.06" height="10.06" viewBox="0 0 13.419 13.419">
                      <rect data-name="Icons/Tabler/Dots background" width="13.419" height="13.419" fill="none"></rect>
                      <path d="M0,10.4a1.342,1.342,0,1,1,1.342,1.342A1.344,1.344,0,0,1,0,10.4Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,10.4ZM0,5.871A1.342,1.342,0,1,1,1.342,7.213,1.344,1.344,0,0,1,0,5.871Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,5.871ZM0,1.342A1.342,1.342,0,1,1,1.342,2.684,1.344,1.344,0,0,1,0,1.342Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,1.342Z" transform="translate(5.368 0.839)" fill="#6c757d"></path>
                    </svg>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end">
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
              </div>
              <figcaption class="text-center">
                <div class="circle circle-xl mx-auto">
                  <img src="<?= $base;?>/assets/images/avatar1@60.png" alt="Avatar">
                </div>
                <h6 class="font-weight-semibold open-sans-font mt-3">Sakane Miiko</h6>
                <p class="text-gray-600 fs-11 lh-base">updated horns.php - 13 jan 2021</p>
              </figcaption>
            </figure>
          </div>
          <div class="col-6 col-md-4 col-lg-6 col-xl-4 has-xxl-5 mb-3 mb-lg-4">
            <figure class="p-2 rounded-6 shadow-dark-80 bg-white mb-0 h-100 border border-gray-200">
              <div class="mb-2 d-flex align-items-center">
                <span class="badge badge-sm badge-soft-primary">18 files</span>
                <div class="dropdown ms-auto">
                  <a href="#" class="btn btn-dark-100 btn-icon btn-sm rounded-circle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg data-name="Icons/Tabler/Notification" xmlns="http://www.w3.org/2000/svg" width="10.06" height="10.06" viewBox="0 0 13.419 13.419">
                      <rect data-name="Icons/Tabler/Dots background" width="13.419" height="13.419" fill="none"></rect>
                      <path d="M0,10.4a1.342,1.342,0,1,1,1.342,1.342A1.344,1.344,0,0,1,0,10.4Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,10.4ZM0,5.871A1.342,1.342,0,1,1,1.342,7.213,1.344,1.344,0,0,1,0,5.871Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,5.871ZM0,1.342A1.342,1.342,0,1,1,1.342,2.684,1.344,1.344,0,0,1,0,1.342Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,1.342Z" transform="translate(5.368 0.839)" fill="#6c757d"></path>
                    </svg>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end">
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
              </div>
              <figcaption class="text-center">
                <div class="circle circle-xl mx-auto">
                  <img src="<?= $base;?>/assets/images/avatar2@60.png" alt="Avatar">
                </div>
                <h6 class="font-weight-semibold open-sans-font mt-3">Sakane Miiko</h6>
                <p class="text-gray-600 fs-11 lh-base">updated horns.php - 13 jan 2021</p>
              </figcaption>
            </figure>
          </div>
          <div class="col-6 col-md-4 col-lg-6 col-xl-4 has-xxl-5 mb-3 mb-lg-4">
            <figure class="p-2 rounded-6 shadow-dark-80 bg-white mb-0 h-100 border border-gray-200">
              <div class="mb-2 d-flex align-items-center">
                <span class="badge badge-sm badge-soft-primary">18 files</span>
                <div class="dropdown ms-auto">
                  <a href="#" class="btn btn-dark-100 btn-icon btn-sm rounded-circle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg data-name="Icons/Tabler/Notification" xmlns="http://www.w3.org/2000/svg" width="10.06" height="10.06" viewBox="0 0 13.419 13.419">
                      <rect data-name="Icons/Tabler/Dots background" width="13.419" height="13.419" fill="none"></rect>
                      <path d="M0,10.4a1.342,1.342,0,1,1,1.342,1.342A1.344,1.344,0,0,1,0,10.4Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,10.4ZM0,5.871A1.342,1.342,0,1,1,1.342,7.213,1.344,1.344,0,0,1,0,5.871Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,5.871ZM0,1.342A1.342,1.342,0,1,1,1.342,2.684,1.344,1.344,0,0,1,0,1.342Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,1.342Z" transform="translate(5.368 0.839)" fill="#6c757d"></path>
                    </svg>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end">
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
              </div>
              <figcaption class="text-center">
                <div class="circle circle-xl mx-auto">
                  <img src="<?= $base;?>/assets/images/avatar3@60.png" alt="Avatar">
                </div>
                <h6 class="font-weight-semibold open-sans-font mt-3">Sakane Miiko</h6>
                <p class="text-gray-600 fs-11 lh-base">Tiles background.jpg</p>
              </figcaption>
            </figure>
          </div>
          <div class="col-6 col-md-4 col-lg-6 col-xl-4 has-xxl-5 mb-3 mb-lg-4">
            <figure class="p-2 rounded-6 shadow-dark-80 bg-white mb-0 h-100 border border-gray-200">
              <div class="mb-2 d-flex align-items-center">
                <span class="badge badge-sm badge-soft-primary">18 files</span>
                <div class="dropdown ms-auto">
                  <a href="#" class="btn btn-dark-100 btn-icon btn-sm rounded-circle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg data-name="Icons/Tabler/Notification" xmlns="http://www.w3.org/2000/svg" width="10.06" height="10.06" viewBox="0 0 13.419 13.419">
                      <rect data-name="Icons/Tabler/Dots background" width="13.419" height="13.419" fill="none"></rect>
                      <path d="M0,10.4a1.342,1.342,0,1,1,1.342,1.342A1.344,1.344,0,0,1,0,10.4Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,10.4ZM0,5.871A1.342,1.342,0,1,1,1.342,7.213,1.344,1.344,0,0,1,0,5.871Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,5.871ZM0,1.342A1.342,1.342,0,1,1,1.342,2.684,1.344,1.344,0,0,1,0,1.342Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,1.342Z" transform="translate(5.368 0.839)" fill="#6c757d"></path>
                    </svg>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end">
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
              </div>
              <figcaption class="text-center">
                <div class="circle circle-xl mx-auto">
                  <img src="<?= $base;?>/assets/images/avatar4@60.png" alt="Avatar">
                </div>
                <h6 class="font-weight-semibold open-sans-font mt-3">Sakane Miiko</h6>
                <p class="text-gray-600 fs-11 lh-base">updated horns.php - 13 jan 2021</p>
              </figcaption>
            </figure>
          </div>
          <div class="col-6 col-md-4 col-lg-6 col-xl-4 has-xxl-5 mb-3 mb-lg-4">
            <figure class="p-2 rounded-6 shadow-dark-80 bg-white mb-0 h-100 border border-gray-200">
              <div class="mb-2 d-flex align-items-center">
                <span class="badge badge-sm badge-soft-primary">18 files</span>
                <div class="dropdown ms-auto">
                  <a href="#" class="btn btn-dark-100 btn-icon btn-sm rounded-circle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg data-name="Icons/Tabler/Notification" xmlns="http://www.w3.org/2000/svg" width="10.06" height="10.06" viewBox="0 0 13.419 13.419">
                      <rect data-name="Icons/Tabler/Dots background" width="13.419" height="13.419" fill="none"></rect>
                      <path d="M0,10.4a1.342,1.342,0,1,1,1.342,1.342A1.344,1.344,0,0,1,0,10.4Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,10.4ZM0,5.871A1.342,1.342,0,1,1,1.342,7.213,1.344,1.344,0,0,1,0,5.871Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,5.871ZM0,1.342A1.342,1.342,0,1,1,1.342,2.684,1.344,1.344,0,0,1,0,1.342Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,1.342Z" transform="translate(5.368 0.839)" fill="#6c757d"></path>
                    </svg>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end">
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
              </div>
              <figcaption class="text-center">
                <div class="circle circle-xl mx-auto">
                  <img src="<?= $base;?>/assets/images/avatar5@60.png" alt="Avatar">
                </div>
                <h6 class="font-weight-semibold open-sans-font mt-3">Sakane Miiko</h6>
                <p class="text-gray-600 fs-11 lh-base">updated horns.php - 13 jan 2021</p>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
      <div class="pt-3">
        <h5 class="font-weight-semibold text-black-600 mb-lg-4 pb-1">Files</h5>
        <div class="row">
          <div class="col-6 col-md-4 col-lg-6 col-xl-4 has-xxl-5 mb-3 mb-lg-4">
            <figure class="p-2 rounded-6 shadow-dark-80 bg-white mb-0 h-100 border border-gray-200">
              <div class="dropdown mb-2 text-end">
                <a href="#" class="btn btn-dark-100 btn-icon btn-sm rounded-circle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <svg data-name="Icons/Tabler/Notification" xmlns="http://www.w3.org/2000/svg" width="10.06" height="10.06" viewBox="0 0 13.419 13.419">
                    <rect data-name="Icons/Tabler/Dots background" width="13.419" height="13.419" fill="none"></rect>
                    <path d="M0,10.4a1.342,1.342,0,1,1,1.342,1.342A1.344,1.344,0,0,1,0,10.4Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,10.4ZM0,5.871A1.342,1.342,0,1,1,1.342,7.213,1.344,1.344,0,0,1,0,5.871Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,5.871ZM0,1.342A1.342,1.342,0,1,1,1.342,2.684,1.344,1.344,0,0,1,0,1.342Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,1.342Z" transform="translate(5.368 0.839)" fill="#6c757d"></path>
                  </svg>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
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
              <figcaption class="text-center">
                <img src="<?= $base;?>/assets/images/zip.svg" alt="Zip" class="arrow-icon">
                <h6 class="font-weight-semibold open-sans-font mt-3">2020 Results</h6>
                <p class="text-gray-600 fs-11 lh-base">Uploaded Sep 23 by You</p>
              </figcaption>
            </figure>
          </div>
          <div class="col-6 col-md-4 col-lg-6 col-xl-4 has-xxl-5 mb-3 mb-lg-4">
            <figure class="rounded-6 shadow-dark-80 bg-white position-relative mb-0 h-100 border border-gray-200">
              <div class="dropdown mb-2 text-end position-absolute top-0 end-0">
                <a href="#" class="btn btn-dark-100 btn-icon btn-sm rounded-circle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <svg data-name="Icons/Tabler/Notification" xmlns="http://www.w3.org/2000/svg" width="10.06" height="10.06" viewBox="0 0 13.419 13.419">
                    <rect data-name="Icons/Tabler/Dots background" width="13.419" height="13.419" fill="none"></rect>
                    <path d="M0,10.4a1.342,1.342,0,1,1,1.342,1.342A1.344,1.344,0,0,1,0,10.4Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,10.4ZM0,5.871A1.342,1.342,0,1,1,1.342,7.213,1.344,1.344,0,0,1,0,5.871Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,5.871ZM0,1.342A1.342,1.342,0,1,1,1.342,2.684,1.344,1.344,0,0,1,0,1.342Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,1.342Z" transform="translate(5.368 0.839)" fill="#6c757d"></path>
                  </svg>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
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
              <img src="<?= $base;?>/assets/images/placeholder24.jpg" alt="Word" class="rounded-top-6 w-100">
              <figcaption class="text-center p-2 p-md-3">
                <h6 class="font-weight-semibold open-sans-font">ps5-retouched.png</h6>
                <p class="text-gray-600 fs-11 lh-base mb-0">Uploaded Sep 14 by You</p>
              </figcaption>
            </figure>
          </div>
          <div class="col-6 col-md-4 col-lg-6 col-xl-4 has-xxl-5 mb-3 mb-lg-4">
            <figure class="rounded-6 shadow-dark-80 bg-white position-relative mb-0 h-100 border border-gray-200">
              <div class="dropdown mb-2 text-end position-absolute top-0 end-0">
                <a href="#" class="btn btn-dark-100 btn-icon btn-sm rounded-circle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <svg data-name="Icons/Tabler/Notification" xmlns="http://www.w3.org/2000/svg" width="10.06" height="10.06" viewBox="0 0 13.419 13.419">
                    <rect data-name="Icons/Tabler/Dots background" width="13.419" height="13.419" fill="none"></rect>
                    <path d="M0,10.4a1.342,1.342,0,1,1,1.342,1.342A1.344,1.344,0,0,1,0,10.4Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,10.4ZM0,5.871A1.342,1.342,0,1,1,1.342,7.213,1.344,1.344,0,0,1,0,5.871Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,5.871ZM0,1.342A1.342,1.342,0,1,1,1.342,2.684,1.344,1.344,0,0,1,0,1.342Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,1.342Z" transform="translate(5.368 0.839)" fill="#6c757d"></path>
                  </svg>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
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
              <img src="<?= $base;?>/assets/images/placeholder25.jpg" alt="Word" class="rounded-top-6 w-100">
              <figcaption class="text-center p-2 p-md-3">
                <h6 class="font-weight-semibold open-sans-font">Tiles background.jpg</h6>
                <p class="text-gray-600 fs-11 lh-base mb-0">Uploaded Sep 2 by You</p>
              </figcaption>
            </figure>
          </div>
          <div class="col-6 col-md-4 col-lg-6 col-xl-4 has-xxl-5 mb-3 mb-lg-4">
            <figure class="p-2 rounded-6 shadow-dark-80 bg-white mb-0 h-100 border border-gray-200">
              <div class="dropdown mb-2 text-end">
                <a href="#" class="btn btn-dark-100 btn-icon btn-sm rounded-circle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <svg data-name="Icons/Tabler/Notification" xmlns="http://www.w3.org/2000/svg" width="10.06" height="10.06" viewBox="0 0 13.419 13.419">
                    <rect data-name="Icons/Tabler/Dots background" width="13.419" height="13.419" fill="none"></rect>
                    <path d="M0,10.4a1.342,1.342,0,1,1,1.342,1.342A1.344,1.344,0,0,1,0,10.4Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,10.4ZM0,5.871A1.342,1.342,0,1,1,1.342,7.213,1.344,1.344,0,0,1,0,5.871Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,5.871ZM0,1.342A1.342,1.342,0,1,1,1.342,2.684,1.344,1.344,0,0,1,0,1.342Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,1.342Z" transform="translate(5.368 0.839)" fill="#6c757d"></path>
                  </svg>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
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
              <figcaption class="text-center">
                <img src="<?= $base;?>/assets/images/excel-software.svg" alt="Word">
                <h6 class="font-weight-semibold open-sans-font mt-3">Roadmap 2021</h6>
                <p class="text-gray-600 fs-11 lh-base">Uploaded Sep 1 by You</p>
              </figcaption>
            </figure>
          </div>
          <div class="col-6 col-md-4 col-lg-6 col-xl-4 has-xxl-5 mb-3 mb-lg-4">
            <figure class="rounded-6 shadow-dark-80 bg-white position-relative mb-0 h-100 border border-gray-200">
              <div class="dropdown mb-2 text-end position-absolute top-0 end-0">
                <a href="#" class="btn btn-dark-100 btn-icon btn-sm rounded-circle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <svg data-name="Icons/Tabler/Notification" xmlns="http://www.w3.org/2000/svg" width="10.06" height="10.06" viewBox="0 0 13.419 13.419">
                    <rect data-name="Icons/Tabler/Dots background" width="13.419" height="13.419" fill="none"></rect>
                    <path d="M0,10.4a1.342,1.342,0,1,1,1.342,1.342A1.344,1.344,0,0,1,0,10.4Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,10.4ZM0,5.871A1.342,1.342,0,1,1,1.342,7.213,1.344,1.344,0,0,1,0,5.871Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,5.871ZM0,1.342A1.342,1.342,0,1,1,1.342,2.684,1.344,1.344,0,0,1,0,1.342Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,1.342Z" transform="translate(5.368 0.839)" fill="#6c757d"></path>
                  </svg>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
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
              <img src="<?= $base;?>/assets/images/placeholder26.jpg" alt="Word" class="rounded-top-6 w-100">
              <figcaption class="text-center p-2 p-md-3">
                <h6 class="font-weight-semibold open-sans-font">street-view.jpg</h6>
                <p class="text-gray-600 fs-11 lh-base mb-0">Uploaded Aug 31 by You</p>
              </figcaption>
            </figure>
          </div>
          <div class="col-6 col-md-4 col-lg-6 col-xl-4 has-xxl-5 mb-3 mb-lg-4">
            <figure class="p-2 rounded-6 shadow-dark-80 bg-white mb-0 h-100 border border-gray-200">
              <div class="dropdown mb-2 text-end">
                <a href="#" class="btn btn-dark-100 btn-icon btn-sm rounded-circle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <svg data-name="Icons/Tabler/Notification" xmlns="http://www.w3.org/2000/svg" width="10.06" height="10.06" viewBox="0 0 13.419 13.419">
                    <rect data-name="Icons/Tabler/Dots background" width="13.419" height="13.419" fill="none"></rect>
                    <path d="M0,10.4a1.342,1.342,0,1,1,1.342,1.342A1.344,1.344,0,0,1,0,10.4Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,10.4ZM0,5.871A1.342,1.342,0,1,1,1.342,7.213,1.344,1.344,0,0,1,0,5.871Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,5.871ZM0,1.342A1.342,1.342,0,1,1,1.342,2.684,1.344,1.344,0,0,1,0,1.342Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,1.342Z" transform="translate(5.368 0.839)" fill="#6c757d"></path>
                  </svg>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
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
              <figcaption class="text-center">
                <img src="<?= $base;?>/assets/images/word-software.svg" alt="Word">
                <h6 class="font-weight-semibold open-sans-font mt-3">Content Ideas</h6>
                <p class="text-gray-600 fs-11 lh-base">Uploaded Aug 29 by You</p>
              </figcaption>
            </figure>
          </div>
          <div class="col-6 col-md-4 col-lg-6 col-xl-4 has-xxl-5 mb-3 mb-lg-4">
            <figure class="p-2 rounded-6 shadow-dark-80 bg-white mb-0 h-100 border border-gray-200">
              <div class="dropdown mb-2 text-end">
                <a href="#" class="btn btn-dark-100 btn-icon btn-sm rounded-circle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <svg data-name="Icons/Tabler/Notification" xmlns="http://www.w3.org/2000/svg" width="10.06" height="10.06" viewBox="0 0 13.419 13.419">
                    <rect data-name="Icons/Tabler/Dots background" width="13.419" height="13.419" fill="none"></rect>
                    <path d="M0,10.4a1.342,1.342,0,1,1,1.342,1.342A1.344,1.344,0,0,1,0,10.4Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,10.4ZM0,5.871A1.342,1.342,0,1,1,1.342,7.213,1.344,1.344,0,0,1,0,5.871Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,5.871ZM0,1.342A1.342,1.342,0,1,1,1.342,2.684,1.344,1.344,0,0,1,0,1.342Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,1.342Z" transform="translate(5.368 0.839)" fill="#6c757d"></path>
                  </svg>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
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
              <figcaption class="text-center">
                <img src="<?= $base;?>/assets/images/pdf.svg" alt="PDF">
                <h6 class="font-weight-semibold open-sans-font mt-3">BMW Logos</h6>
                <p class="text-gray-600 fs-11 lh-base">Uploaded Aug 14 by You</p>
              </figcaption>
            </figure>
          </div>
          <div class="col-6 col-md-4 col-lg-6 col-xl-4 has-xxl-5 mb-3 mb-lg-4">
            <figure class="rounded-6 shadow-dark-80 bg-white position-relative mb-0 h-100 border border-gray-200">
              <div class="dropdown mb-2 text-end position-absolute top-0 end-0">
                <a href="#" class="btn btn-dark-100 btn-icon btn-sm rounded-circle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <svg data-name="Icons/Tabler/Notification" xmlns="http://www.w3.org/2000/svg" width="10.06" height="10.06" viewBox="0 0 13.419 13.419">
                    <rect data-name="Icons/Tabler/Dots background" width="13.419" height="13.419" fill="none"></rect>
                    <path d="M0,10.4a1.342,1.342,0,1,1,1.342,1.342A1.344,1.344,0,0,1,0,10.4Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,10.4ZM0,5.871A1.342,1.342,0,1,1,1.342,7.213,1.344,1.344,0,0,1,0,5.871Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,5.871ZM0,1.342A1.342,1.342,0,1,1,1.342,2.684,1.344,1.344,0,0,1,0,1.342Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,1.342Z" transform="translate(5.368 0.839)" fill="#6c757d"></path>
                  </svg>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
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
              <img src="<?= $base;?>/assets/images/placeholder27.jpg" alt="Word" class="rounded-top-6 w-100">
              <figcaption class="text-center p-2 p-md-3">
                <h6 class="font-weight-semibold open-sans-font">app-homepage.jpg</h6>
                <p class="text-gray-600 fs-11 lh-base mb-0">Uploaded Aug 9 by You</p>
              </figcaption>
            </figure>
          </div>
          <div class="col-6 col-md-4 col-lg-6 col-xl-4 has-xxl-5 mb-3 mb-lg-4">
            <figure class="rounded-6 shadow-dark-80 bg-white position-relative mb-0 h-100 border border-gray-200">
              <div class="dropdown mb-2 text-end position-absolute top-0 end-0">
                <a href="#" class="btn btn-dark-100 btn-icon btn-sm rounded-circle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <svg data-name="Icons/Tabler/Notification" xmlns="http://www.w3.org/2000/svg" width="10.06" height="10.06" viewBox="0 0 13.419 13.419">
                    <rect data-name="Icons/Tabler/Dots background" width="13.419" height="13.419" fill="none"></rect>
                    <path d="M0,10.4a1.342,1.342,0,1,1,1.342,1.342A1.344,1.344,0,0,1,0,10.4Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,10.4ZM0,5.871A1.342,1.342,0,1,1,1.342,7.213,1.344,1.344,0,0,1,0,5.871Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,5.871ZM0,1.342A1.342,1.342,0,1,1,1.342,2.684,1.344,1.344,0,0,1,0,1.342Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,1.342Z" transform="translate(5.368 0.839)" fill="#6c757d"></path>
                  </svg>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
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
              <img src="<?= $base;?>/assets/images/placeholder28.jpg" alt="Word" class="rounded-top-6 w-100">
              <figcaption class="text-center p-2 p-md-3">
                <h6 class="font-weight-semibold open-sans-font">IMG_33243.jpg</h6>
                <p class="text-gray-600 fs-11 lh-base mb-0">Uploaded Aug 1 by You</p>
              </figcaption>
            </figure>
          </div>
          <div class="col-6 col-md-4 col-lg-6 col-xl-4 has-xxl-5 mb-3 mb-lg-4">
            <figure class="p-2 rounded-6 shadow-dark-80 bg-white mb-0 h-100 border border-gray-200">
              <div class="dropdown mb-2 text-end">
                <a href="#" class="btn btn-dark-100 btn-icon btn-sm rounded-circle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <svg data-name="Icons/Tabler/Notification" xmlns="http://www.w3.org/2000/svg" width="10.06" height="10.06" viewBox="0 0 13.419 13.419">
                    <rect data-name="Icons/Tabler/Dots background" width="13.419" height="13.419" fill="none"></rect>
                    <path d="M0,10.4a1.342,1.342,0,1,1,1.342,1.342A1.344,1.344,0,0,1,0,10.4Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,10.4ZM0,5.871A1.342,1.342,0,1,1,1.342,7.213,1.344,1.344,0,0,1,0,5.871Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,5.871ZM0,1.342A1.342,1.342,0,1,1,1.342,2.684,1.344,1.344,0,0,1,0,1.342Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,1.342Z" transform="translate(5.368 0.839)" fill="#6c757d"></path>
                  </svg>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
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
              <figcaption class="text-center">
                <img src="<?= $base;?>/assets/images/word-software.svg" alt="Word">
                <h6 class="font-weight-semibold open-sans-font mt-3">Digital Assets</h6>
                <p class="text-gray-600 fs-11 lh-base">Uploaded Jul 5 by You</p>
              </figcaption>
            </figure>
          </div>
          <div class="col-6 col-md-4 col-lg-6 col-xl-4 has-xxl-5 mb-3 mb-lg-4">
            <figure class="p-2 rounded-6 shadow-dark-80 bg-white mb-0 h-100 border border-gray-200">
              <div class="dropdown mb-2 text-end">
                <a href="#" class="btn btn-dark-100 btn-icon btn-sm rounded-circle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <svg data-name="Icons/Tabler/Notification" xmlns="http://www.w3.org/2000/svg" width="10.06" height="10.06" viewBox="0 0 13.419 13.419">
                    <rect data-name="Icons/Tabler/Dots background" width="13.419" height="13.419" fill="none"></rect>
                    <path d="M0,10.4a1.342,1.342,0,1,1,1.342,1.342A1.344,1.344,0,0,1,0,10.4Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,10.4ZM0,5.871A1.342,1.342,0,1,1,1.342,7.213,1.344,1.344,0,0,1,0,5.871Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,5.871ZM0,1.342A1.342,1.342,0,1,1,1.342,2.684,1.344,1.344,0,0,1,0,1.342Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,1.342Z" transform="translate(5.368 0.839)" fill="#6c757d"></path>
                  </svg>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
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
              <figcaption class="text-center">
                <img src="<?= $base;?>/assets/images/code2.svg" alt="Code" class="arrow-icon">
                <h6 class="font-weight-semibold open-sans-font mt-3">HTML Files</h6>
                <p class="text-gray-600 fs-11 lh-base">Uploaded Jul 2 by You</p>
              </figcaption>
            </figure>
          </div>
          <div class="col-6 col-md-4 col-lg-6 col-xl-4 has-xxl-5 mb-3 mb-lg-4">
            <figure class="p-2 rounded-6 shadow-dark-80 bg-white mb-0 h-100 border border-gray-200">
              <div class="dropdown mb-2 text-end">
                <a href="#" class="btn btn-dark-100 btn-icon btn-sm rounded-circle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <svg data-name="Icons/Tabler/Notification" xmlns="http://www.w3.org/2000/svg" width="10.06" height="10.06" viewBox="0 0 13.419 13.419">
                    <rect data-name="Icons/Tabler/Dots background" width="13.419" height="13.419" fill="none"></rect>
                    <path d="M0,10.4a1.342,1.342,0,1,1,1.342,1.342A1.344,1.344,0,0,1,0,10.4Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,10.4ZM0,5.871A1.342,1.342,0,1,1,1.342,7.213,1.344,1.344,0,0,1,0,5.871Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,5.871ZM0,1.342A1.342,1.342,0,1,1,1.342,2.684,1.344,1.344,0,0,1,0,1.342Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,1.342Z" transform="translate(5.368 0.839)" fill="#6c757d"></path>
                  </svg>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
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
              <figcaption class="text-center">
                <img src="<?= $base;?>/assets/images/zip.svg" alt="Zip" class="arrow-icon">
                <h6 class="font-weight-semibold open-sans-font mt-3">Photos</h6>
                <p class="text-gray-600 fs-11 lh-base">Uploaded Jul 1 by You</p>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </div>
    <footer class="pt-xl-5 mt-lg-2">
      <div class="container-fluid px-0 border-top border-gray-200 pt-2 pt-lg-3">
        <div class="row align-items-center">
          <div class="col-md-6">
            <p class="fs-16 text-gray-600 my-2">2020 &copy; Fabrx Design - All rights reserved.</p>
          </div>
          <div class="col-md-6">
            <ul class="nav navbar">
              <li><a href="#0">About</a></li>
              <li><a href="#0">Support</a></li>
              <li><a href="#0">Contact</a></li>
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
<script src="<?= $base;?>/assets/vendor/simplebar/dist/simplebar.min.js"></script>
<script src="<?= $base;?>/assets/js/theme-custom.js"></script>
</body>
</html>