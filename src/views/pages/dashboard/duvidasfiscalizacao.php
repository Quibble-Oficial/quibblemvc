<?php // Arquivo convertido de HTML para PHP ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<title>Buy Muze Bootstrap 5 Simple Chat Page</title>
<meta charset="UTF-8">
<meta name="description" content="Presenting Muze, All-in-one Bootstrap 5 Chat Admin Dashboard, 30+ Premium HTML Pages, 500+ components, dark mode, RTL. Starts @ Only $35">
<meta name="title" content="Muze Bootstrap 5 Chat Templates, Themes, & Dashboard">
<meta name="keywords" content="simple bootstrap chat template, bootstrap 5 chat template, chat template bootstrap 5, chat library">
<meta name="author" content="Muze Dashboard">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- Muze Favicon -->
<link href="/favicon.ico" rel="shortcut icon" type="image/x-icon">
<!-- Muze Plugins CSS -->
<link href="<?= $base;?>/assets/vendor/simplebar/dist/simplebar.min.css" rel="stylesheet" type="text/css" media="all">
<!-- Muze Theme CSS -->
<link href="<?= $base;?>/assets/css/theme.min.css" rel="stylesheet" type="text/css" media="all">
</head>
<body class="bg-gray-100 chat-template">

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
      <h3 class="mb-0"><img src="/assets/svg/icons/tio-tune2.svg" alt="Tio Tune"> Customize</h3>
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
            <label class="form-check-label" for="SidebarDefault"><img src="/assets/img/sidebar-default.svg" alt="Sidebar Default" class="rounded mb-2 border-gray-400 border"><span>Default</span></label>
          </div>
        </div>
        <div class="me-3 sidebar-style">
          
          <div class="form-check form-check-sm me-0">
            <input class="form-check-input" type="radio" name="SidebarStyles" id="SidebarCompact" value="sidebar-compact">
            <label class="form-check-label" for="SidebarCompact"><img src="/assets/img/sidebar-compact.svg" alt="Sidebar Compact" class="rounded mb-2 border-gray-400 border"><span>Compact</span></label>
          </div>
        </div>
        <div class="me-3 sidebar-style">
          
          <div class="form-check form-check-sm me-0">
            <input class="form-check-input" type="radio" name="SidebarStyles" id="SidebarIcons" value="sidebar-icons">
            <label class="form-check-label" for="SidebarIcons"><img src="/assets/img/sidebar-icons.svg" alt="Sidebar Icons" class="rounded mb-2 border-gray-400 border"><span>Icons</span></label>
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
  <a class="navbar-brand mx-auto d-none d-lg-block my-0 my-lg-4" href="#0">
    <img src="/assets/svg/brand/logo.svg" alt="Muze">
    <img src="/assets/svg/brand/logo-white.svg" alt="Muze" class="white-logo2">
    <img src="/assets/svg/brand/muze-icon.svg" class="muze-icon" alt="Muze">
    <img src="/assets/svg/brand/muze-icon-white.svg" class="muze-icon-white" alt="Muze">
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
              <a href="file-manager.html" class="nav-link">File manager</a>
            </li>
            <li class="nav-item">
              <a href="chat.html" class="nav-link active">Chat</a>
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
        <a class="nav-link" href="/documentation/index.html" target="_blank">
          <svg data-name="Icons/Tabler/Paperclip" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
            <rect data-name="Icons/Tabler/Paperclip background" width="16" height="16" fill="none"/>
            <path d="M6.766,1.178A4.018,4.018,0,0,1,12.591,6.71l-.147.155-5.1,5.11A2.352,2.352,0,0,1,3.9,8.77l.114-.123,5.1-5.11a.685.685,0,0,1,1.035.893l-.066.077-5.1,5.11a.981.981,0,0,0,1.3,1.465l.086-.076,5.1-5.11A2.648,2.648,0,0,0,7.861,2.028l-.127.119-5.1,5.11a4.315,4.315,0,0,0,5.941,6.255l.156-.149,5.1-5.11a.685.685,0,0,1,1.035.893l-.066.077-5.1,5.11A5.685,5.685,0,0,1,1.5,6.457l.162-.169Z" transform="translate(1)" fill="#1e1e1e"/>
          </svg> &nbsp;<span class="ms-2">Docs</span> <span class="docs-version">v1.0</span>
        </a>
      </li>
    </ul>
    <div class="mt-3 mt-md-auto mb-3 signout d-grid">
      <a href="javascript:void(0);" class="btn btn-dark btn-lg customize-btn"><img src="/assets/svg/icons/dark-mode@24.svg" alt="Customize"><span class="ps-2">Customize</span></a>
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
          <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"><img src="/assets/svg/icons/united-states.svg" alt="United States" class="avatar avatar-xss avatar-circle"></a>
          <ul class="dropdown-menu dropdown-menu-end" id="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li class="dropdown-sub-title">
              <span>Language</span>
            </li>
            <li>
              <a class="dropdown-item" href="#">
                <img class="avatar avatar-xss avatar-circle me-2" src="/assets/svg/icons/united-states.svg" alt="Flag">
                <span class="text-truncate" title="English">English</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="#">
                <img class="avatar avatar-xss avatar-circle me-2" src="/assets/svg/icons/dutch.svg" alt="Flag">
                <span class="text-truncate" title="English">Dutch</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="#">
                <img class="avatar avatar-xss avatar-circle me-2" src="/assets/svg/icons/latin.svg" alt="Flag">
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
  
  <div class="container-fluid bg-white px-0 muze-chats">
    <div class="row g-0">
      <div class="has-xxl-4">
        <div class="p-3 p-md-3 px-xxl-4 py-xl-4 border-bottom border-gray-200 border-end">
          <ul class="nav nav-segment nav-pills px-xxl-3 py-1" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-bs-toggle="pill" href="#Inprogress" role="tab" aria-selected="true">All</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="pill" href="#Incoming" role="tab" aria-selected="false">Unread</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="pill" href="#Completed" role="tab" aria-selected="false">Archived</a>
            </li>
          </ul>
        </div>
        <div class="border-end border-gray-200 mb-0 chat-list" data-simplebar>
          <a href="#0">
            <div class="media">
              <span class="avatar rounded-circle me-md-2 me-xl-3">
                <img src="<?= $base;?>/assets/images/avatar58.png" alt="Avatar">
                <span class="avatar-status avatar-success bottom-0 end-0">&nbsp;</span>
              </span>
              <div class="media-body">
                <div class="d-flex align-items-center">
                  <h6>John Wick</h6>
                  <span class="font-weight-semibold small text-muted ms-auto text-nowrap">10:03 PM</span>
                </div>
                <p>Hi Bruce, what do you think of the logo I…</p>
              </div>
            </div>
          </a>
          <a href="#0">
            <div class="media">
              <span class="avatar rounded-circle me-md-2 me-xl-3">
                <img src="<?= $base;?>/assets/images/avatar59.png" alt="Avatar">
                <span class="avatar-status avatar-success bottom-0 end-0">&nbsp;</span>
              </span>
              <div class="media-body">
                <div class="d-flex align-items-center">
                  <h6>Prescott MacCaffery</h6>
                  <span class="font-weight-semibold small text-muted ms-auto text-nowrap">10:03 PM</span>
                </div>
                <p>Hi Bruce, what do you think of the logo I…</p>
              </div>
            </div>
          </a>
          <a href="#0" class="active">
            <div class="media">
              <span class="avatar rounded-circle me-md-2 me-xl-3">
                <img src="<?= $base;?>/assets/images/avatar60.png" alt="Avatar">
                <span class="avatar-status avatar-danger bottom-0 end-0">&nbsp;</span>
              </span>
              <div class="media-body">
                <div class="d-flex align-items-center">
                  <h6>Sashi Hendriks</h6>
                  <span class="font-weight-semibold small text-muted ms-auto text-nowrap">10:03 PM</span>
                </div>
                <p>Hi Bruce, what do you think of the logo I…</p>
              </div>
            </div>
          </a>
          <a href="#0">
            <div class="media">
              <span class="avatar rounded-circle me-md-2 me-xl-3">
                <img src="<?= $base;?>/assets/images/avatar61.png" alt="Avatar">
                <span class="avatar-status avatar-success bottom-0 end-0">&nbsp;</span>
              </span>
              <div class="media-body">
                <div class="d-flex align-items-center">
                  <h6>Ekene Obasey</h6>
                  <span class="font-weight-semibold small text-muted ms-auto text-nowrap">10:03 PM</span>
                </div>
                <p>Hi Bruce, what do you think of the logo I…</p>
              </div>
            </div>
          </a>
          <a href="#0" class="unread">
            <div class="media">
              <span class="avatar rounded-circle me-md-2 me-xl-3">
                <img src="<?= $base;?>/assets/images/avatar62.png" alt="Avatar">
                <span class="avatar-status avatar-success bottom-0 end-0">&nbsp;</span>
              </span>
              <div class="media-body">
                <div class="d-flex align-items-center">
                  <h6>Lucas Pacheco</h6>
                  <span class="font-weight-semibold small text-muted ms-auto text-nowrap">10:03 PM</span>
                </div>
                <p>Hi Bruce, what do you think of the logo I…</p>
                <span class="avatar-status avatar-primary avatar-sm-status unread-status">&nbsp;</span>
              </div>
            </div>
          </a>
          <a href="#0">
            <div class="media">
              <span class="avatar rounded-circle me-md-2 me-xl-3">
                <img src="<?= $base;?>/assets/images/avatar63.png" alt="Avatar">
                <span class="avatar-status avatar-success bottom-0 end-0">&nbsp;</span>
              </span>
              <div class="media-body">
                <div class="d-flex align-items-center">
                  <h6>Mónica Ribeiro</h6>
                  <span class="font-weight-semibold small text-muted ms-auto text-nowrap">10:03 PM</span>
                </div>
                <p>Hi Bruce, what do you think of the logo I…</p>
              </div>
            </div>
          </a>
          <a href="#0">
            <div class="media">
              <span class="avatar rounded-circle me-md-2 me-xl-3">
                <img src="<?= $base;?>/assets/images/avatar64.png" alt="Avatar">
                <span class="avatar-status avatar-success bottom-0 end-0">&nbsp;</span>
              </span>
              <div class="media-body">
                <div class="d-flex align-items-center">
                  <h6>Chigusa Kisa</h6>
                  <span class="font-weight-semibold small text-muted ms-auto text-nowrap">10:03 PM</span>
                </div>
                <p>Hi Bruce, what do you think of the logo I…</p>
              </div>
            </div>
          </a>
          <a href="#0" class="unread">
            <div class="media">
              <span class="avatar rounded-circle me-md-2 me-xl-3">
                <img src="<?= $base;?>/assets/images/avatar65.png" alt="Avatar">
                <span class="avatar-status avatar-success bottom-0 end-0">&nbsp;</span>
              </span>
              <div class="media-body">
                <div class="d-flex align-items-center">
                  <h6>Clarke Gillebert</h6>
                  <span class="font-weight-semibold small text-muted ms-auto text-nowrap">10:03 PM</span>
                </div>
                <p>Hi Bruce, what do you think of the logo I…</p>
                <span class="avatar-status avatar-primary avatar-sm-status unread-status">&nbsp;</span>
              </div>
            </div>
          </a>
          <a href="#0">
            <div class="media">
              <span class="avatar rounded-circle me-md-2 me-xl-3">
                <img src="<?= $base;?>/assets/images/avatar66.png" alt="Avatar">
                <span class="avatar-status avatar-success bottom-0 end-0">&nbsp;</span>
              </span>
              <div class="media-body">
                <div class="d-flex align-items-center">
                  <h6>Naseema Al Morad</h6>
                  <span class="font-weight-semibold small text-muted ms-auto text-nowrap">10:03 PM</span>
                </div>
                <p>Hi Bruce, what do you think of the logo I…</p>
              </div>
            </div>
          </a>
          <a href="#0" class="unread">
            <div class="media">
              <span class="avatar rounded-circle me-md-2 me-xl-3">
                <img src="<?= $base;?>/assets/images/avatar67.png" alt="Avatar">
                <span class="avatar-status avatar-success bottom-0 end-0">&nbsp;</span>
              </span>
              <div class="media-body">
                <div class="d-flex align-items-center">
                  <h6>Tamaki Ryushi</h6>
                  <span class="font-weight-semibold small text-muted ms-auto text-nowrap">10:03 PM</span>
                </div>
                <p>Hi Bruce, what do you think of the logo I…</p>
                <span class="avatar-status avatar-primary avatar-sm-status unread-status">&nbsp;</span>
              </div>
            </div>
          </a>
          <a href="#0">
            <div class="media">
              <span class="avatar rounded-circle me-md-2 me-xl-3">
                <img src="<?= $base;?>/assets/images/avatar68.png" alt="Avatar">
                <span class="avatar-status avatar-success bottom-0 end-0">&nbsp;</span>
              </span>
              <div class="media-body">
                <div class="d-flex align-items-center">
                  <h6>Sunstra Maneerattana</h6>
                  <span class="font-weight-semibold small text-muted ms-auto text-nowrap">10:03 PM</span>
                </div>
                <p>Hi Bruce, what do you think of the logo I…</p>
              </div>
            </div>
          </a>
          <a href="#0">
            <div class="media">
              <span class="avatar rounded-circle me-md-2 me-xl-3">
                <img src="<?= $base;?>/assets/images/avatar69.png" alt="Avatar">
                <span class="avatar-status avatar-success bottom-0 end-0">&nbsp;</span>
              </span>
              <div class="media-body">
                <div class="d-flex align-items-center">
                  <h6>William Diwedi</h6>
                  <span class="font-weight-semibold small text-muted ms-auto text-nowrap">10:03 PM</span>
                </div>
                <p>Hi Bruce, what do you think of the logo I…</p>
              </div>
            </div>
          </a>
          <a href="#0">
            <div class="media">
              <span class="avatar rounded-circle me-md-2 me-xl-3">
                <img src="<?= $base;?>/assets/images/avatar70.png" alt="Avatar">
                <span class="avatar-status avatar-success bottom-0 end-0">&nbsp;</span>
              </span>
              <div class="media-body">
                <div class="d-flex align-items-center">
                  <h6>Ashish Asharaful</h6>
                  <span class="font-weight-semibold small text-muted ms-auto text-nowrap">10:03 PM</span>
                </div>
                <p>Hi Bruce, what do you think of the logo I…</p>
              </div>
            </div>
          </a>
          <a href="#0">
            <div class="media">
              <span class="avatar rounded-circle me-md-2 me-xl-3">
                <img src="<?= $base;?>/assets/images/avatar71.png" alt="Avatar">
                <span class="avatar-status avatar-success bottom-0 end-0">&nbsp;</span>
              </span>
              <div class="media-body">
                <div class="d-flex align-items-center">
                  <h6>Kimmy McIlmorie</h6>
                  <span class="font-weight-semibold small text-muted ms-auto text-nowrap">10:03 PM</span>
                </div>
                <p>Hi Bruce, what do you think of the logo I…</p>
              </div>
            </div>
          </a>
          <a href="#0">
            <div class="media">
              <span class="avatar rounded-circle me-md-2 me-xl-3">
                <img src="<?= $base;?>/assets/images/avatar71.png" alt="Avatar">
                <span class="avatar-status avatar-success bottom-0 end-0">&nbsp;</span>
              </span>
              <div class="media-body">
                <div class="d-flex align-items-center">
                  <h6>Kimmy McIlmorie</h6>
                  <span class="font-weight-semibold small text-muted ms-auto text-nowrap">10:03 PM</span>
                </div>
                <p>Hi Bruce, what do you think of the logo I…</p>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="has-xxl-8">
        <div class="py-2 py-md-1 py-xl-3 px-3 px-xxl-5 border-bottom border-gray-200 chat-header">
          <div class="row align-items-center">
            <div class="col-6 col-sm-8">
              <h4 class="mb-0 mt-1 text-truncate">Sashi Hendriks</h4>
              <span class="small text-gray-600 d-block mb-1 text-truncate">sashi@hendriksfabrx.co</span>
            </div>
            <div class="col-6 col-sm-4">
              <div class="d-flex align-items-center justify-content-end">
                <a href="#0" class="circle circle-lg">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20.001" height="20" viewBox="0 0 20.001 20">
                    <rect data-name="Icons/Tabler/Call background" width="20" height="20" fill="none"/>
                    <path d="M16.982,20h0A18.076,18.076,0,0,1,5.272,14.723,18.172,18.172,0,0,1,0,2.973,2.966,2.966,0,0,1,2.844,0l.129,0H7.3a.81.81,0,0,1,.719.435L8.05.51l2.162,5.406a.811.811,0,0,1-.27.953l-.065.044L7.837,8.136l.018.033A11.113,11.113,0,0,0,11.6,12.006l.264.159,1.225-2.041a.811.811,0,0,1,.922-.361l.074.026,5.406,2.162a.8.8,0,0,1,.505.67l0,.082v4.325a2.935,2.935,0,0,1-.876,2.1A3.025,3.025,0,0,1,16.982,20ZM2.973,1.622a1.349,1.349,0,0,0-1.353,1.3A16.481,16.481,0,0,0,17.028,18.38a1.354,1.354,0,0,0,1.349-1.259l0-.093V13.253l-4.254-1.7-1.267,2.111a.81.81,0,0,1-.978.343l-.076-.033A12.768,12.768,0,0,1,6.03,8.2.809.809,0,0,1,6.271,7.19l.07-.047L8.451,5.876l-1.7-4.254Z" transform="translate(0 0)" fill="#495057"/>
                  </svg>
                </a>
                <a href="#0" class="circle circle-lg ms-2 ms-xxl-4">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <rect data-name="Icons/Tabler/Video background" width="20" height="20" fill="none"/>
                    <path d="M2.82,13.847A2.824,2.824,0,0,1,0,11.026V2.82A2.824,2.824,0,0,1,2.82,0h8.206a2.824,2.824,0,0,1,2.82,2.82v.807L17.4,1.85A1.8,1.8,0,0,1,20,3.455v6.938a1.795,1.795,0,0,1-1.794,1.793A1.805,1.805,0,0,1,17.4,12l-3.556-1.778v.807a2.824,2.824,0,0,1-2.82,2.82ZM1.539,2.82v8.206A1.283,1.283,0,0,0,2.82,12.308h8.206a1.283,1.283,0,0,0,1.281-1.281V2.82a1.283,1.283,0,0,0-1.281-1.281H2.82A1.283,1.283,0,0,0,1.539,2.82Zm16.551,7.8a.271.271,0,0,0,.115.026.257.257,0,0,0,.088-.015l.047-.023a.259.259,0,0,0,.122-.217V3.455a.253.253,0,0,0-.122-.217A.249.249,0,0,0,18.2,3.2a.258.258,0,0,0-.115.028L13.847,5.347V8.5Z" transform="translate(0 2.5)" fill="#495057"/>
                  </svg>                
                </a>
                <div class="dropdown">
                  <a href="#" class="circle circle-lg ms-2 ms-xxl-4" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <svg data-name="icons/tabler/dots" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16 16">
                      <rect data-name="Icons/Tabler/Dots background" width="16" height="16" fill="none"/>
                      <path d="M0,12.4A1.6,1.6,0,1,1,1.6,14,1.6,1.6,0,0,1,0,12.4Zm1.372,0a.229.229,0,1,0,.229-.229A.229.229,0,0,0,1.372,12.4ZM0,7A1.6,1.6,0,1,1,1.6,8.6,1.6,1.6,0,0,1,0,7ZM1.372,7A.229.229,0,1,0,1.6,6.772.229.229,0,0,0,1.372,7ZM0,1.6A1.6,1.6,0,1,1,1.6,3.2,1.6,1.6,0,0,1,0,1.6Zm1.372,0A.229.229,0,1,0,1.6,1.372.229.229,0,0,0,1.372,1.6Z" transform="translate(6 1)" fill="#495057"/>
                    </svg>
                  </a>
                  <div class="dropdown-menu">
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
          </div>
        </div>
        <div class="py-md-4 p-3 px-xxl-5 chat-items" data-simplebar>
          <div class="text-center py-2 pt-md-3 pb-md-4">
            <a href="#0" class="btn btn-lg btn-link"><svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="16.027" height="16" viewBox="0 0 16.027 16">
              <g data-name="Icons/Tabler/Refresh" transform="translate(0 0)">
                <rect data-name="Icons/Tabler/Refresh background" width="16" height="16" fill="none"/>
                <path d="M7,15.933A8.105,8.105,0,0,1,.006,9.011a.687.687,0,0,1,1.361-.19A6.731,6.731,0,0,0,13.76,11.435H11.677a.687.687,0,0,1-.684-.621l0-.066a.687.687,0,0,1,.621-.684l.066,0H15.34a.687.687,0,0,1,.684.621l0,.067v3.663a.686.686,0,0,1-1.37.066l0-.066V12.573A8.1,8.1,0,0,1,7,15.933Zm7.662-8.754A6.731,6.731,0,0,0,2.267,4.565H4.351a.687.687,0,0,1,.683.621l0,.066a.687.687,0,0,1-.621.684l-.066,0H.687A.686.686,0,0,1,0,5.319l0-.067V1.589a.687.687,0,0,1,1.371-.067l0,.067V3.426A8.105,8.105,0,0,1,16.02,6.989a.687.687,0,1,1-1.361.189Z" fill="#0d6efd"/>
              </g>
            </svg><span>Load earlier messages</span></a>
          </div>
          <div class="position-relative my-4">
            <hr class="bg-gray-200 opacity-1">
            <span class="text-gray-600 small position-absolute top-0 start-50 translate-middle bg-white px-4">Today</span>
          </div>
          <div class="chat-item">
            <div class="chat-item-inner">
              <div class="avatar rounded-circle mb-4">
                <img src="<?= $base;?>/assets/images/avatar@68.png" alt="Avatar">
                <span class="avatar-status avatar-success bottom-0 end-0">&nbsp;</span>
              </div>
              <div class="chat-message">
                <div class="message-box">
                  <p>Hi Sashi, hope all is well, I was wondering if you can help me out with a task I’m working on. Nancy told me you have a copy of the the 2021 document as well as the images used. Would really help if you could share. 🙏</p>
                </div>
                <div class="px-3 py-2 d-flex align-items-center small text-gray-600 justify-content-end">
                  <span>10:03 AM</span>
                  <span class="ms-3"><svg class="me-1" data-name="icons/tabler/check-heavy" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 16 16">
                    <rect data-name="Icons/Tabler/Check Heavy background" width="16" height="16" fill="none"/>
                    <path d="M5.434,11.7.234,6.5a.8.8,0,0,1,0-1.131L1.366,4.234a.8.8,0,0,1,1.131,0L6,7.737l7.5-7.5a.8.8,0,0,1,1.131,0l1.131,1.131a.8.8,0,0,1,0,1.131l-9.2,9.2a.8.8,0,0,1-1.131,0Z" transform="translate(0 2.003)" fill="#0D6EFD"/>
                  </svg>Seen</span>
                </div>
              </div>
            </div>
          </div>
          <div class="chat-item message-sender">
            <div class="chat-item-inner">
              <div class="avatar rounded-circle mb-4">
                <img src="<?= $base;?>/assets/images/avatar60.png" alt="Avatar">
                <span class="avatar-status avatar-danger bottom-0 end-0">&nbsp;</span>
              </div>
              <div class="chat-message">
                <div class="message-box">
                  <p>Hey Bruce, sure thing! Here is the Roadmap document.</p>
                </div>
                <div class="px-3 py-2 d-flex align-items-center small text-gray-600 justify-content-end">
                  <span>7:03 AM</span>
                </div>
              </div>
            </div>
            <div class="message-files">
              <a href="#0" class="rounded-pill attachment"><svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                <g id="Icon" transform="translate(0)">
                  <rect id="Icons_Tabler_Link_background" data-name="Icons/Tabler/Link background" width="16" height="16" fill="none"/>
                  <path id="Color" d="M1.143,14.857a3.9,3.9,0,0,1-.1-5.421l.1-.1L4.781,5.7a3.87,3.87,0,0,1,5.528,0,.683.683,0,1,1-.976.956,2.5,2.5,0,0,0-3.491-.083l-.091.088L2.109,10.3a2.537,2.537,0,0,0,3.5,3.672l.089-.085.455-.455a.683.683,0,0,1,1.015.91l-.049.056-.455.455a3.9,3.9,0,0,1-5.519,0ZM5.691,10.3a.683.683,0,1,1,.976-.956,2.5,2.5,0,0,0,3.491.084l.092-.088L13.892,5.7a2.537,2.537,0,0,0-3.5-3.672l-.089.085-.455.455a.683.683,0,0,1-1.015-.911l.05-.055.455-.455a3.9,3.9,0,0,1,5.614,5.42l-.1.1L11.219,10.3a3.869,3.869,0,0,1-5.529,0Z" fill="#495057"/>
                </g>
              </svg> Roadmap.doc</a>
            </div>
          </div>
          <div class="chat-item message-sender">
            <div class="chat-item-inner">
              <div class="avatar rounded-circle mb-4">
                <img src="<?= $base;?>/assets/images/avatar60.png" alt="Avatar">
                <span class="avatar-status avatar-danger bottom-0 end-0">&nbsp;</span>
              </div>
              <div class="chat-message">
                <div class="message-box">
                  <p>And ther images too ⚡️</p>
                </div>
                <div class="px-3 py-2 d-flex align-items-center small text-gray-600 justify-content-end">
                  <span>7:04 AM</span>
                </div>
              </div>
            </div>
            <div class="message-files">
              <ul>
                <li>
                  <a href="#0"><img src="<?= $base;?>/assets/images/placeholder29.jpg" alt="Placeholder" class="rounded-12"></a>
                </li>
                <li>
                  <a href="#0"><img src="<?= $base;?>/assets/images/placeholder30.jpg" alt="Placeholder" class="rounded-12"></a>
                </li>
                <li>
                  <a href="#0"><img src="<?= $base;?>/assets/images/placeholder31.jpg" alt="Placeholder" class="rounded-12"></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="chat-item">
            <div class="chat-item-inner">
              <div class="avatar rounded-circle mb-4">
                <img src="<?= $base;?>/assets/images/avatar60.png" alt="Avatar">
                <span class="avatar-status avatar-success bottom-0 end-0">&nbsp;</span>
              </div>
              <div class="chat-message">
                <div class="message-box">
                  <p>Thank you!, that helps a lot.</p>
                </div>
                <div class="px-3 py-2 d-flex align-items-center small text-gray-600 justify-content-end">
                  <span>7:12 AM</span>
                </div>
              </div>
            </div>
          </div>
          <div class="chat-item message-sender">
            <div class="chat-item-inner">
              <div class="avatar rounded-circle mb-4">
                <img src="<?= $base;?>/assets/images/avatar60.png" alt="Avatar">
                <span class="avatar-status avatar-danger bottom-0 end-0">&nbsp;</span>
              </div>
              <div class="chat-message">
                <div class="message-box">
                  <p>Anytime, see you Thursday 🙏</p>
                </div>
                <div class="px-3 py-2 d-flex align-items-center small text-gray-600 justify-content-end">
                  <span>7:32 AM</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="message-footer border-top border-gray-200">
          <div class="pt-2 pt-xxl-4 px-3 px-xxl-5">
            <textarea rows="2" class="form-control" placeholder="Reply to this conversation.."></textarea>
          </div>
          <div class="py-2 px-3 px-xxl-5 border-top border-gray-200">
            <div class="row align-items-center">
              <div class="col">
                <div class="d-flex">
                  <a href="#0">
                    <svg data-name="Icons/Tabler/Emoji" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                      <rect data-name="Icons/Tabler/Emoji background" width="24" height="24" fill="none"/>
                      <path data-name="Combined Shape" d="M0,12A12,12,0,1,1,12,24,12.014,12.014,0,0,1,0,12Zm1.847,0A10.153,10.153,0,1,0,12,1.847,10.165,10.165,0,0,0,1.847,12Zm6.417,4.338a.923.923,0,0,1,1.319-1.292,3.384,3.384,0,0,0,4.836,0,.923.923,0,0,1,1.318,1.292,5.23,5.23,0,0,1-7.472,0Zm6.506-6.8A.923.923,0,0,1,15.6,8.62l.1,0a.923.923,0,0,1,.089,1.841l-.1,0A.923.923,0,0,1,14.769,9.539Zm-7.385,0a.923.923,0,0,1,.834-.919l.1,0a.923.923,0,0,1,.089,1.841l-.1,0A.923.923,0,0,1,7.385,9.539Z" fill="#495057"/>
                    </svg>
                  </a>
                  <a href="#0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 16 16">
                      <g transform="translate(0)">
                        <rect data-name="Icons/Tabler/Link background" width="16" height="16" fill="none"/>
                        <path d="M1.143,14.857a3.9,3.9,0,0,1-.1-5.421l.1-.1L4.781,5.7a3.87,3.87,0,0,1,5.528,0,.683.683,0,1,1-.976.956,2.5,2.5,0,0,0-3.491-.083l-.091.088L2.109,10.3a2.537,2.537,0,0,0,3.5,3.672l.089-.085.455-.455a.683.683,0,0,1,1.015.91l-.049.056-.455.455a3.9,3.9,0,0,1-5.519,0ZM5.691,10.3a.683.683,0,1,1,.976-.956,2.5,2.5,0,0,0,3.491.084l.092-.088L13.892,5.7a2.537,2.537,0,0,0-3.5-3.672l-.089.085-.455.455a.683.683,0,0,1-1.015-.911l.05-.055.455-.455a3.9,3.9,0,0,1,5.614,5.42l-.1.1L11.219,10.3a3.869,3.869,0,0,1-5.529,0Z" fill="#495057"/>
                      </g>
                    </svg>                    
                  </a>
                  <a href="#0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                      <g data-name="Icons/Tabler/Photo" transform="translate(0)">
                        <rect data-name="Icons/Tabler/Photo background" width="24" height="24" fill="none"/>
                        <path data-name="Combined Shape" d="M5.144,24A5.149,5.149,0,0,1,0,18.857v-2.73c0-.008,0-.016,0-.024V5.144A5.149,5.149,0,0,1,5.144,0H18.857A5.149,5.149,0,0,1,24,5.144V18.857A5.149,5.149,0,0,1,18.857,24ZM2.057,18.857a3.09,3.09,0,0,0,3.086,3.086H18.857a3.09,3.09,0,0,0,3.086-3.086V16.54l-2.427-2.427A1.722,1.722,0,0,0,16.949,14l-.108.1-.644.643,2.016,2.016a1.029,1.029,0,0,1-1.372,1.53l-.082-.076L14.016,15.47l-4.1-4.1a1.724,1.724,0,0,0-2.566-.113l-.108.1L2.057,16.54Zm18.757-6.344.142.131.987.987V5.144a3.09,3.09,0,0,0-3.086-3.086H5.144A3.09,3.09,0,0,0,2.057,5.144v8.487L5.8,9.887a3.774,3.774,0,0,1,5.414-.117l.142.131,3.387,3.387.658-.658a3.773,3.773,0,0,1,5.414-.117Zm-5.728-6a1.028,1.028,0,0,1,.929-1.023l.113-.005a1.029,1.029,0,0,1,.1,2.053l-.112,0A1.028,1.028,0,0,1,15.086,6.514Z" transform="translate(0)" fill="#495057"/>
                      </g>
                    </svg>                                        
                  </a>
                </div>
              </div>
              <div class="col-auto">
                <button type="button" class="btn btn-xl btn-primary fs-16 px-md-4"><svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="14.001" height="14.001" viewBox="0 0 14.001 14.001">
                  <g transform="translate(0 0)">
                    <rect data-name="Icons/Tabler/Send background" width="14" height="14" fill="none"/>
                    <path d="M7.728,13.537,5.306,8.694.535,6.309A.919.919,0,0,1,0,5.541l0-.067a.918.918,0,0,1,.476-.8l.06-.03.041-.017L13.291.031l.026-.009.012,0,.032-.008L13.4.005H13.4l.03,0h.076l.03,0h.008l.009,0a.531.531,0,0,1,.089.022h0l0,0a.528.528,0,0,1,.316.316h0a.53.53,0,0,1,.025.1v0h0A.534.534,0,0,1,14,.529c0,.01,0,.019,0,.029v0q0,.02,0,.039v0c0,.017-.006.035-.01.053v0a.53.53,0,0,1-.017.055L9.378,13.424l-.017.041a.919.919,0,0,1-1.633.072Zm.776-.814L12.165,2.585,6.345,8.4ZM1.278,5.5,5.6,7.655l5.819-5.82Z" transform="translate(0 0)" fill="#fff"/>
                  </g>
                </svg><span>Reply</span></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Muze Javascript Plugins -->
<script src="<?= $base;?>/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= $base;?>/assets/vendor/lodash/lodash.min.js"></script>
<script src="<?= $base;?>/assets/vendor/simplebar/dist/simplebar.min.js"></script>
<script src="<?= $base;?>/assets/js/theme-custom.js"></script>
</body>
</html>