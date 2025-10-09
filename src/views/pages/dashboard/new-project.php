<?php // Arquivo convertido de HTML para PHP ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<title>Buy Muze Bootstrap 5 Add New Project Page</title>
<meta charset="UTF-8">
<meta name="description" content="Presenting Muze, All-in-one Bootstrap 5 Add New Project Admin Dashboard, 30+ Premium HTML Pages, 500+ components, dark mode, RTL. Starts @ Only $35">
<meta name="title" content="Muze Bootstrap 5 Add New Project Templates, Themes, & Dashboard">
<meta name="keywords" content="bootstrap new project page, bootstrap add project page, projects design template, project management system">
<meta name="author" content="Muze Dashboard">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- Muze Favicon -->
<link href="../favicon.ico" rel="shortcut icon" type="image/x-icon">
<!-- Muze Plugins CSS -->
<link href="<?= $base;?>/assets/vendor/simplebar/dist/simplebar.min.css" rel="stylesheet" type="text/css" media="all">
<link href="<?= $base;?>/assets/vendor/quill/dist/quill.snow.css" rel="stylesheet" type="text/css" media="all">
<!-- Muze Theme CSS -->
<link href="<?= $base;?>/assets/css/theme.min.css" rel="stylesheet" type="text/css" media="all">
</head>
<body class="bg-gray-100 new-projects-template">

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
        <a class="nav-link collapsed" href="#sidebarPages" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarPages">
          <svg data-name="Icons/Tabler/Bolt" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
            <rect data-name="Icons/Tabler/Page background" width="16" height="16" fill="none"/>
            <path d="M1.975,14A1.977,1.977,0,0,1,0,12.026V1.975A1.977,1.977,0,0,1,1.975,0h5.04a.535.535,0,0,1,.249.069l.007,0h0a.534.534,0,0,1,.109.084l3.574,3.575a.536.536,0,0,1,.163.289h0l0,.013h0l0,.013v0l0,.011v.053s0,.009,0,.014v7.9A1.977,1.977,0,0,1,9.154,14Zm-.9-12.026V12.026a.9.9,0,0,0,.9.9H9.154a.9.9,0,0,0,.9-.9V4.667H7.718a1.255,1.255,0,0,1-1.248-1.12L6.461,3.41V1.077H1.975A.9.9,0,0,0,1.077,1.975ZM7.538,3.41a.179.179,0,0,0,.122.17l.057.01H9.29L7.538,1.838Z" transform="translate(2 1)" fill="#1e1e1e"/>
          </svg> &nbsp;<span class="ms-2">Pages</span>
        </a>
        <div class="collapse collapse-box show" id="sidebarPages" data-bs-parent="#accordionExample">
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
              <a class="nav-link collapsed" href="#Projectspage" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="Projectspage">Projects</a>
              <div class="collapse collapse-box show" id="Projectspage" data-bs-parent="#submenu">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="all-projects.html" class="nav-link">All projects</a>
                  </li>
                  <li class="nav-item">
                    <a href="new-project.html" class="nav-link active">New project</a>
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

  <div class="px-3 px-xxl-5 py-3 py-lg-4 border-bottom border-gray-200 after-header">
    <div class="container-fluid px-0">
      <div class="row align-items-center">
        <div class="col">
          <span class="text-uppercase tiny text-gray-600 Montserrat-font font-weight-semibold">Projects</span>
          <h1 class="h2 mb-0 lh-sm">New Project</h1>
        </div>
        <div class="col-auto d-flex align-items-center my-2 my-sm-0">
          <a href="#" class="btn btn-lg btn-warning"><svg class="me-2" data-name="Icons/Tabler/Paperclip Copy 2" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 18 18">
            <rect data-name="Icons/Tabler/Bolt background" width="18" height="18" fill="none"/>
            <path d="M6.377,18a.7.7,0,0,1-.709-.6l-.006-.1V11.537H.709A.7.7,0,0,1,.1,11.193a.673.673,0,0,1-.014-.672l.054-.083L7.693.274,7.755.2,7.828.141,7.913.087,7.981.055l.087-.03L8.16.006,8.256,0h.037l.059.005.04.007.052.011.045.014.043.016.052.023.089.055.016.011A.765.765,0,0,1,8.756.2L8.82.273l.055.083.033.067.03.085L8.957.6l.007.094V6.461h4.952a.7.7,0,0,1,.613.345.672.672,0,0,1,.013.672l-.053.082L6.942,17.714A.691.691,0,0,1,6.377,18ZM7.548,2.821,2.1,10.153H6.369a.7.7,0,0,1,.7.6l.006.093v4.331l5.449-7.331H8.256a.7.7,0,0,1-.7-.6l-.007-.094Z" transform="translate(2.25 0)" fill="#1E1E1E"/>
          </svg><span>All projects</span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="p-3 p-xxl-5">
    <div class="container-fluid px-0">
      <div class="mb-2 mb-md-3 mb-xl-4 pb-2">
        <ul class="nav nav-tabs nav-tabs-md nav-tabs-line position-relative zIndex-0">
          <li class="nav-item">
            <a class="nav-link" href="all-projects.html">All projects (7)</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="new-project.html">New project</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="project-details.html">Project detail</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="teams.html">Teams</a>
          </li>
        </ul>
      </div>
      <div class="text-center py-3 py-md-5">
        <h2 class="h1">Add a new project</h2>
        <p class="big text-black-600">Create a project and add your teammates</p>
      </div>
      <ul class="step-list mb-4 mb-md-5">
        <li class="active">
          <span class="circle circle-lg bg-primary">
            <svg data-name="icons/tabler/check" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16 16">
              <rect data-name="Icons/Tabler/Check background" width="16" height="16" fill="none"/>
              <path d="M14.758.213a.727.727,0,0,1,1.1.947l-.07.082-9.7,9.7a.727.727,0,0,1-.947.07l-.082-.07L.213,6.09a.727.727,0,0,1,.947-1.1l.082.07L5.576,9.4Z" transform="translate(0 2)" fill="#fff"/>
            </svg>
          </span>
          <h5 class="mb-0 mt-3 font-weight-semibold">Project type</h5>
        </li>
        <li class="active">
          <span class="circle circle-lg bg-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
              <rect data-name="Icons/Tabler/Circle background" width="20" height="20" fill="none"/>
              <path d="M7.5,15A7.5,7.5,0,1,1,15,7.5,7.508,7.508,0,0,1,7.5,15ZM7.5,1.73A5.77,5.77,0,1,0,13.269,7.5,5.777,5.777,0,0,0,7.5,1.73Z" transform="translate(2.5 2.5)" fill="#fff"/>
            </svg>            
          </span>
          <h5 class="mb-0 mt-3 font-weight-semibold">Basic info</h5>
        </li>
        <li>
          <span class="circle circle-lg bg-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
              <rect data-name="Icons/Tabler/Circle background" width="20" height="20" fill="none"/>
              <path d="M7.5,15A7.5,7.5,0,1,1,15,7.5,7.508,7.508,0,0,1,7.5,15ZM7.5,1.73A5.77,5.77,0,1,0,13.269,7.5,5.777,5.777,0,0,0,7.5,1.73Z" transform="translate(2.5 2.5)" fill="#ADB5BD"/>
            </svg> 
          </span>
          <h5 class="mb-0 mt-3 font-weight-semibold">Publish project</h5>
        </li>
      </ul>
      <div class="row group-cards pt-2">
        <div class="col-xxl-12 mb-4">
          <div class="card rounded-12 shadow-dark-80 border border-gray-200 h-100">
            <div class="card-body pb-0 px-3 pt-3">
              <div class="pb-3 p-xl-5">
                <form>
                  <div class="mb-4 mb-xl-5">
                    <label class="form-label form-label-lg mb-3 mb-md-4">Project logo</label>
                    <div class="d-flex align-items-center">
                      <a href="#0" class="circle circle-xl border border-gray-300">
                        <img src="<?= $base;?>/assets/images/project-logo.svg" alt="Project Logo">
                      </a>
                      <div class="ps-2 ps-md-3">
                        <label class="text-primary font-weight-semibold d-block mb-1 mb-md-2">Upload logo</label>
                        <a href="#0" class="text-gray-700 font-weight-semibold"><svg class="me-1" data-name="Icons/Tabler/Edit" xmlns="http://www.w3.org/2000/svg" width="12.003" height="12" viewBox="0 0 12.003 12">
                          <rect data-name="Icons/Tabler/Edit background" width="12" height="12" fill="none"/>
                          <path d="M.535,12A.532.532,0,0,1,0,11.517l0-.052V8.613A.538.538,0,0,1,.116,8.28l.041-.045L7.644.747a2.552,2.552,0,0,1,3.678,3.536l-.069.072-.713.713L3.765,11.844A.538.538,0,0,1,3.447,12l-.06,0ZM1.07,8.834v2.1h2.1L9.405,4.691l-2.1-2.1Zm9.092-4.9L10.5,3.6a1.482,1.482,0,0,0,.058-2.035L10.5,1.5a1.483,1.483,0,0,0-2.035-.058L8.4,1.5l-.335.335Z" fill="#495057"/>
                        </svg> Edit</a>
                      </div>
                    </div>
                  </div>
                  <div class="mb-4 mb-xl-5">
                    <label class="form-label form-label-lg" for="ProjectName">Project name</label>
                    <input type="text" placeholder="My project..." id="ProjectName" class="form-control form-control-xl">
                  </div>
                  <div class="mb-4 mb-xl-5">
                    <label class="form-label form-label-lg">Description</label>
                    <div id="editor"></div>
                  </div>
                  <div class="mb-4 mb-xl-5">
                    <label class="form-label form-label-lg" for="AddTeammates">Add teammates</label>
                    <input type="text" placeholder="@username" id="AddTeammates" class="form-control form-control-xl">
                  </div>
                  <div class="pt-xl-2 text-end">
                    <span class="text-muted font-weight-semibold me-md-4 pe-sm-3 d-block d-sm-inline-block pb-2 pb-sm-0">STEP 2 OF 3</span>
                    <a href="#0" class="btn btn-xl btn-outline-dark text-gray-700 border-gray-700 me-2 me-md-4">Cancel</a>
                    <button type="button" class="btn btn-xl btn-primary">Next</button>
                  </div>
                </form>
              </div>
            </div>
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
</script>
</body>
</html>