<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" >
  <!-- begin::Head -->
  <head>
    <meta charset="utf-8" />
    <title>
      Metronic | Dashboard
    </title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
    </script>
    <!--end::Web font -->
        <!--begin::Base Styles -->  
        <!--begin::Page Vendors -->
    <link href="<?php echo base_url('assets/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css') ?>" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors -->
    <link href="<?php echo base_url('assets/assets/vendors/base/vendors.bundle.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/assets/demo/default/base/style.bundle.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/asd/css/datatables.min.css') ?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <!--end::Base Styles -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/assets/demo/default/media/img/logo/favicon.ico') ?>" />
  </head>
  <!-- end::Head -->
    <!-- end::Body -->
  <body  class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
    <!-- begin:: Page -->
    <div class="m-grid m-grid--hor m-grid--root m-page">
      <!-- BEGIN: Header -->
      <header id="m_header" class="m-grid__item    m-header "  m-minimize-offset="200" m-minimize-mobile-offset="200" >
        <div class="m-container m-container--fluid m-container--full-height">
          <div class="m-stack m-stack--ver m-stack--desktop">
            <!-- BEGIN: Brand -->
            <div class="m-stack__item m-brand  m-brand--skin-dark ">
              <div class="m-stack m-stack--ver m-stack--general">
                <div class="m-stack__item m-stack__item--middle m-brand__logo">
                  <a href="index.html" class="m-brand__logo-wrapper">
                    <img alt="" src="<?php echo base_url('assets/assets/demo/default/media/img/logo/logo_default_dark.png') ?>"/>
                  </a>
                </div>
                <div class="m-stack__item m-stack__item--middle m-brand__tools">
                  <!-- BEGIN: Left Aside Minimize Toggle -->
                  <a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block 
           ">
                    <span></span>
                  </a>
                  <!-- END -->
              <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                  <a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                    <span></span>
                  </a>
                  <!-- END -->
              <!-- BEGIN: Responsive Header Menu Toggler -->
                  <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                    <span></span>
                  </a>
                  <!-- END -->
      <!-- BEGIN: Topbar Toggler -->
                  <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                    <i class="flaticon-more"></i>
                  </a>
                  <!-- BEGIN: Topbar Toggler -->
                </div>
              </div>
            </div>
            <!-- END: Brand -->
            <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
              <!-- BEGIN: Horizontal Menu -->
              <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark " id="m_aside_header_menu_mobile_close_btn">
                <i class="la la-close"></i>
              </button>
              <div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark "  >
              </div>
              <!-- END: Horizontal Menu -->               <!-- BEGIN: Topbar -->
              <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
                <div class="m-stack__item m-topbar__nav-wrapper">
                  <ul class="m-topbar__nav m-nav m-nav--inline">
                    <li class="
  m-nav__item m-dropdown m-dropdown--large m-dropdown--arrow m-dropdown--align-center m-dropdown--mobile-full-width m-dropdown--skin-light  m-list-search m-list-search--skin-light" 
  m-dropdown-toggle="click" id="m_quicksearch" m-quicksearch-mode="dropdown" m-dropdown-persistent="1">
                      <a href="#" class="m-nav__link m-dropdown__toggle">
                        <span class="m-nav__link-icon">
                          <i class="flaticon-search-1"></i>
                        </span>
                      </a>
                      <div class="m-dropdown__wrapper">
                        <span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
                        <div class="m-dropdown__inner ">
                          <div class="m-dropdown__header">
                            <form  class="m-list-search__form">
                              <div class="m-list-search__form-wrapper">
                                <span class="m-list-search__form-input-wrapper">
                                  <input id="m_quicksearch_input" autocomplete="off" type="text" name="q" class="m-list-search__form-input" value="" placeholder="Search...">
                                </span>
                                <span class="m-list-search__form-icon-close" id="m_quicksearch_close">
                                  <i class="la la-remove"></i>
                                </span>
                              </div>
                            </form>
                          </div>
                          <div class="m-dropdown__body">
                            <div class="m-dropdown__scrollable m-scrollable" data-scrollable="true" data-max-height="300" data-mobile-max-height="200">
                              <div class="m-dropdown__content"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="m-nav__item m-topbar__notifications m-topbar__notifications--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-center  m-dropdown--mobile-full-width" m-dropdown-toggle="click" m-dropdown-persistent="1">
                      <a href="#" class="m-nav__link m-dropdown__toggle" id="m_topbar_notification_icon">
                        <span class="m-nav__link-badge m-badge m-badge--dot m-badge--dot-small m-badge--danger"></span>
                        <span class="m-nav__link-icon">
                          <i class="flaticon-music-2"></i>
                        </span>
                      </a>
                      <div class="m-dropdown__wrapper">
                        <span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
                        <div class="m-dropdown__inner">
                          <div class="m-dropdown__header m--align-center" style="background: url(assets/app/media/img/misc/notification_bg.jpg); background-size: cover;">
                            <span class="m-dropdown__header-title">
                              9 New
                            </span>
                            <span class="m-dropdown__header-subtitle">
                              User Notifications
                            </span>
                          </div>
                          <div class="m-dropdown__body">
                            <div class="m-dropdown__content">
                              <ul class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
                                <li class="nav-item m-tabs__item">
                                  <a class="nav-link m-tabs__link active" data-toggle="tab" href="#topbar_notifications_notifications" role="tab">
                                    Alerts
                                  </a>
                                </li>
                                <li class="nav-item m-tabs__item">
                                  <a class="nav-link m-tabs__link" data-toggle="tab" href="#topbar_notifications_events" role="tab">
                                    Events
                                  </a>
                                </li>
                                <li class="nav-item m-tabs__item">
                                  <a class="nav-link m-tabs__link" data-toggle="tab" href="#topbar_notifications_logs" role="tab">
                                    Logs
                                  </a>
                                </li>
                              </ul>
                              <div class="tab-content">
                                <div class="tab-pane active" id="topbar_notifications_notifications" role="tabpanel">
                                  <div class="m-scrollable" data-scrollable="true" data-max-height="250" data-mobile-max-height="200">
                                    <div class="m-list-timeline m-list-timeline--skin-light">
                                      <div class="m-list-timeline__items">
                                        <div class="m-list-timeline__item">
                                          <span class="m-list-timeline__badge -m-list-timeline__badge--state-success"></span>
                                          <span class="m-list-timeline__text">
                                            12 new users registered
                                          </span>
                                          <span class="m-list-timeline__time">
                                            Just now
                                          </span>
                                        </div>
                                        <div class="m-list-timeline__item">
                                          <span class="m-list-timeline__badge"></span>
                                          <span class="m-list-timeline__text">
                                            System shutdown
                                            <span class="m-badge m-badge--success m-badge--wide">
                                              pending
                                            </span>
                                          </span>
                                          <span class="m-list-timeline__time">
                                            14 mins
                                          </span>
                                        </div>
                                        <div class="m-list-timeline__item">
                                          <span class="m-list-timeline__badge"></span>
                                          <span class="m-list-timeline__text">
                                            New invoice received
                                          </span>
                                          <span class="m-list-timeline__time">
                                            20 mins
                                          </span>
                                        </div>
                                        <div class="m-list-timeline__item">
                                          <span class="m-list-timeline__badge"></span>
                                          <span class="m-list-timeline__text">
                                            DB overloaded 80%
                                            <span class="m-badge m-badge--info m-badge--wide">
                                              settled
                                            </span>
                                          </span>
                                          <span class="m-list-timeline__time">
                                            1 hr
                                          </span>
                                        </div>
                                        <div class="m-list-timeline__item">
                                          <span class="m-list-timeline__badge"></span>
                                          <span class="m-list-timeline__text">
                                            System error -
                                            <a href="#" class="m-link">
                                              Check
                                            </a>
                                          </span>
                                          <span class="m-list-timeline__time">
                                            2 hrs
                                          </span>
                                        </div>
                                        <div class="m-list-timeline__item m-list-timeline__item--read">
                                          <span class="m-list-timeline__badge"></span>
                                          <span href="" class="m-list-timeline__text">
                                            New order received
                                            <span class="m-badge m-badge--danger m-badge--wide">
                                              urgent
                                            </span>
                                          </span>
                                          <span class="m-list-timeline__time">
                                            7 hrs
                                          </span>
                                        </div>
                                        <div class="m-list-timeline__item m-list-timeline__item--read">
                                          <span class="m-list-timeline__badge"></span>
                                          <span class="m-list-timeline__text">
                                            Production server down
                                          </span>
                                          <span class="m-list-timeline__time">
                                            3 hrs
                                          </span>
                                        </div>
                                        <div class="m-list-timeline__item">
                                          <span class="m-list-timeline__badge"></span>
                                          <span class="m-list-timeline__text">
                                            Production server up
                                          </span>
                                          <span class="m-list-timeline__time">
                                            5 hrs
                                          </span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
                                  <div class="m-scrollable" data-scrollable="true" data-max-height="250" data-mobile-max-height="200">
                                    <div class="m-list-timeline m-list-timeline--skin-light">
                                      <div class="m-list-timeline__items">
                                        <div class="m-list-timeline__item">
                                          <span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>
                                          <a href="" class="m-list-timeline__text">
                                            New order received
                                          </a>
                                          <span class="m-list-timeline__time">
                                            Just now
                                          </span>
                                        </div>
                                        <div class="m-list-timeline__item">
                                          <span class="m-list-timeline__badge m-list-timeline__badge--state1-danger"></span>
                                          <a href="" class="m-list-timeline__text">
                                            New invoice received
                                          </a>
                                          <span class="m-list-timeline__time">
                                            20 mins
                                          </span>
                                        </div>
                                        <div class="m-list-timeline__item">
                                          <span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>
                                          <a href="" class="m-list-timeline__text">
                                            Production server up
                                          </a>
                                          <span class="m-list-timeline__time">
                                            5 hrs
                                          </span>
                                        </div>
                                        <div class="m-list-timeline__item">
                                          <span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
                                          <a href="" class="m-list-timeline__text">
                                            New order received
                                          </a>
                                          <span class="m-list-timeline__time">
                                            7 hrs
                                          </span>
                                        </div>
                                        <div class="m-list-timeline__item">
                                          <span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
                                          <a href="" class="m-list-timeline__text">
                                            System shutdown
                                          </a>
                                          <span class="m-list-timeline__time">
                                            11 mins
                                          </span>
                                        </div>
                                        <div class="m-list-timeline__item">
                                          <span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
                                          <a href="" class="m-list-timeline__text">
                                            Production server down
                                          </a>
                                          <span class="m-list-timeline__time">
                                            3 hrs
                                          </span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
                                  <div class="m-stack m-stack--ver m-stack--general" style="min-height: 180px;">
                                    <div class="m-stack__item m-stack__item--center m-stack__item--middle">
                                      <span class="">
                                        All caught up!
                                        <br>
                                        No new logs.
                                      </span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="m-nav__item m-topbar__quick-actions m-topbar__quick-actions--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push m-dropdown--mobile-full-width m-dropdown--skin-light"  m-dropdown-toggle="click">
                      <a href="#" class="m-nav__link m-dropdown__toggle">
                        <span class="m-nav__link-badge m-badge m-badge--dot m-badge--info m--hide"></span>
                        <span class="m-nav__link-icon">
                          <i class="flaticon-share"></i>
                        </span>
                      </a>
                      <div class="m-dropdown__wrapper">
                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                        <div class="m-dropdown__inner">
                          <div class="m-dropdown__header m--align-center" style="background: url(assets/app/media/img/misc/quick_actions_bg.jpg); background-size: cover;">
                            <span class="m-dropdown__header-title">
                              Quick Actions
                            </span>
                            <span class="m-dropdown__header-subtitle">
                              Shortcuts
                            </span>
                          </div>
                          <div class="m-dropdown__body m-dropdown__body--paddingless">
                            <div class="m-dropdown__content">
                              <div class="data" data="false" data-max-height="380" data-mobile-max-height="200">
                                <div class="m-nav-grid m-nav-grid--skin-light">
                                  <div class="m-nav-grid__row">
                                    <a href="#" class="m-nav-grid__item">
                                      <i class="m-nav-grid__icon flaticon-file"></i>
                                      <span class="m-nav-grid__text">
                                        Generate Report
                                      </span>
                                    </a>
                                    <a href="#" class="m-nav-grid__item">
                                      <i class="m-nav-grid__icon flaticon-time"></i>
                                      <span class="m-nav-grid__text">
                                        Add New Event
                                      </span>
                                    </a>
                                  </div>
                                  <div class="m-nav-grid__row">
                                    <a href="#" class="m-nav-grid__item">
                                      <i class="m-nav-grid__icon flaticon-folder"></i>
                                      <span class="m-nav-grid__text">
                                        Create New Task
                                      </span>
                                    </a>
                                    <a href="#" class="m-nav-grid__item">
                                      <i class="m-nav-grid__icon flaticon-clipboard"></i>
                                      <span class="m-nav-grid__text">
                                        Completed Tasks
                                      </span>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
                      <a href="#" class="m-nav__link m-dropdown__toggle">
                        <span class="m-topbar__userpic">
                          <img src="<?php echo base_url('assets/assets/app/media/img/users/user4.jpg') ?>" class="m--img-rounded m--marginless m--img-centered" alt=""/>
                        </span>
                        <span class="m-topbar__username m--hide">
                          Nick
                        </span>
                      </a>
                      <div class="m-dropdown__wrapper">
                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                        <div class="m-dropdown__inner">
                          <div class="m-dropdown__header m--align-center" style="background: url(assets/app/media/img/misc/user_profile_bg.jpg); background-size: cover;">
                            <div class="m-card-user m-card-user--skin-dark">
                              <div class="m-card-user__pic">
                                <img src="<?php echo base_url('assets/assets/app/media/img/users/user4.jpg') ?>" class="m--img-rounded m--marginless" alt=""/>
                              </div>
                              <div class="m-card-user__details">
                                <span class="m-card-user__name m--font-weight-500">
                                  Mark Andre
                                </span>
                                <a href="" class="m-card-user__email m--font-weight-300 m-link">
                                  mark.andre@gmail.com
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="m-dropdown__body">
                            <div class="m-dropdown__content">
                              <ul class="m-nav m-nav--skin-light">
                                <li class="m-nav__section m--hide">
                                  <span class="m-nav__section-text">
                                    Section
                                  </span>
                                </li>
                                <li class="m-nav__item">
                                  <a href="header/profile.html" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-profile-1"></i>
                                    <span class="m-nav__link-title">
                                      <span class="m-nav__link-wrap">
                                        <span class="m-nav__link-text">
                                          My Profile
                                        </span>
                                        <span class="m-nav__link-badge">
                                          <span class="m-badge m-badge--success">
                                            2
                                          </span>
                                        </span>
                                      </span>
                                    </span>
                                  </a>
                                </li>
                                <li class="m-nav__item">
                                  <a href="header/profile.html" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-share"></i>
                                    <span class="m-nav__link-text">
                                      Activity
                                    </span>
                                  </a>
                                </li>
                                <li class="m-nav__item">
                                  <a href="header/profile.html" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-chat-1"></i>
                                    <span class="m-nav__link-text">
                                      Messages
                                    </span>
                                  </a>
                                </li>
                                <li class="m-nav__separator m-nav__separator--fit"></li>
                                <li class="m-nav__item">
                                  <a href="header/profile.html" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-info"></i>
                                    <span class="m-nav__link-text">
                                      FAQ
                                    </span>
                                  </a>
                                </li>
                                <li class="m-nav__item">
                                  <a href="header/profile.html" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                    <span class="m-nav__link-text">
                                      Support
                                    </span>
                                  </a>
                                </li>
                                <li class="m-nav__separator m-nav__separator--fit"></li>
                                <li class="m-nav__item">
                                  <a href="snippets/pages/user/login-1.html" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
                                    Logout
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li id="m_quick_sidebar_toggle" class="m-nav__item">
                      <a href="#" class="m-nav__link m-dropdown__toggle">
                        <span class="m-nav__link-icon">
                          <i class="flaticon-grid-menu"></i>
                        </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- END: Topbar -->
            </div>
          </div>
        </div>
      </header>
      <!-- END: Header -->    
    <!-- begin::Body -->
      <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
        <!-- BEGIN: Left Aside -->
        <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
          <i class="la la-close"></i>
        </button>
        <div id="m_aside_left" class="m-grid__item  m-aside-left  m-aside-left--skin-dark ">
          <!-- BEGIN: Aside Menu -->
  <div 
    id="m_ver_menu" 
    class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " 
    m-menu-vertical="1"
     m-menu-scrollable="0" m-menu-dropdown-timeout="500"  
    >
            <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
              <li class="m-menu__item  m-menu__item--active" aria-haspopup="true" >
                <a  href="index.html" class="m-menu__link ">
                  <i class="m-menu__link-icon flaticon-line-graph"></i>
                  <span class="m-menu__link-title">
                    <span class="m-menu__link-wrap">
                      <span class="m-menu__link-text">
                        Dashboard
                      </span>
                      <span class="m-menu__link-badge">
                        <span class="m-badge m-badge--danger">
                          2
                        </span>
                      </span>
                    </span>
                  </span>
                </a>
              </li>
              <li class="m-menu__section">
                <h4 class="m-menu__section-text">
                  Components
                </h4>
                <i class="m-menu__section-icon flaticon-more-v3"></i>
              </li>
              <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
                <a  href="javascript:;" class="m-menu__link m-menu__toggle">
                  <i class="m-menu__link-icon flaticon-layers"></i>
                  <span class="m-menu__link-text">
                    Menu
                  </span>
                  <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu ">
                  <span class="m-menu__arrow"></span>
                  <ul class="m-menu__subnav">
                    <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
                      <span class="m-menu__link">
                        <span class="m-menu__link-text">
                          Menu
                        </span>
                      </span>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true" >
                      <a  href="<?php echo site_url('c_main') ?>" class="m-menu__link ">
                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                          <span></span>
                        </i>
                        <span class="m-menu__link-text">
                          Menu 1
                        </span>
                      </a>
                    </li>
                    <li class="m-menu__item " aria-haspopup="true" >
                      <a  href="<?php echo site_url('c_main2') ?>" class="m-menu__link ">
                        <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                          <span></span>
                        </i>
                        <span class="m-menu__link-text">
                          Menu 2
                        </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
          <!-- END: Aside Menu -->
        </div>
        <!-- END: Left Aside -->
        <div class="m-grid__item m-grid__item--fluid m-wrapper">
          <!-- BEGIN: Subheader -->
          <div class="m-subheader ">
            <div class="d-flex align-items-center">
              <div class="mr-auto">
                <h3 class="m-subheader__title ">
                  Dashboard
                </h3>
              </div>
              <div>
                <span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
                  <span class="m-subheader__daterange-label">
                    <span class="m-subheader__daterange-title"></span>
                    <span class="m-subheader__daterange-date m--font-brand"></span>
                  </span>
                  <a href="#" class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
                    <i class="la la-angle-down"></i>
                  </a>
                </span>
              </div>
            </div>
          </div>
          <!-- END: Subheader -->
          <div class="m-content">
            <div class="row">
              <div class="col-lg-6">
                <!--begin::Portlet-->
                <div class="m-portlet">
                  <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                      <div class="m-portlet__head-title">
                        <span class="m-portlet__head-icon m--hide">
                          <i class="la la-gear"></i>
                        </span>
                        <h3 class="m-portlet__head-text">
                         Form Input
                        </h3>
                      </div>
                    </div>
                  </div>
                  <!--begin::Form-->
                  <form class="m-form">
                    <div class="m-portlet__body">
                      <div class="m-form__section m-form__section--first">
                        <div class="form-group m-form__group">
                          <label for="example_input_full_name">
                            Penjualan :
                          </label>
                          <input type="number" id="fm_vol" class="form-control m-input" placeholder="Enter full name">
                        </div>
                        <div class="form-group m-form__group">
                          <label>
                            Tanggal :
                          </label>
                          <input type="text" class="form-control" id="m_datepicker_1" readonly="" placeholder="Select date">
                       </div>
                      </div>
                    </div>
                    <div class="m-portlet__foot m-portlet__foot--fit">
                      <div class="m-form__actions m-form__actions">
                        <a id="btn_add" class="btn btn-primary">
                          Submit
                        </a>
                      </div>
                    </div>
                  </form>
                  <!--end::Form-->
                </div>
                <!--end::Portlet-->
              </div>
              <div class="col-lg-6">
                <!--begin::Portlet-->
                <div class="m-portlet m-portlet--tab">
                  <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                      <div class="m-portlet__head-title">
                        <span class="m-portlet__head-icon m--hide">
                          <i class="la la-gear"></i>
                        </span>
                        <h3 class="m-portlet__head-text">
                          Line Chart
                        </h3>
                      </div>
                    </div>
                  </div>
                  <div class="m-portlet__body">
                    <div></div>
                    <div id="lineChart" style="height:260px;"></div>
                  </div>
                </div>
                <!--end::Portlet-->
              </div>
            </div>       
          </div>
  
          <div class="m-content">
            <div class="row">
              <div class="col-lg-12">
                <!--begin::Portlet-->
                <div class="m-portlet m-portlet--tab">
                  <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                      <div class="m-portlet__head-title">
                        <span class="m-portlet__head-icon m--hide">
                          <i class="la la-gear"></i>
                        </span>
                        <h3 class="m-portlet__head-text">
                          Bar Chart
                        </h3>
                      </div>
                    </div>
                  </div>
                  <div class="m-portlet__body">
                    <div></div>
                    <div id="barChart" style="height:260px;"></div>
                  </div>
                </div>
                <!--end::Portlet-->
              </div>
            </div>
          </div> 
            
            <div class="m-portlet m-portlet--mobile">
              <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                  <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                      AJAX Datatable
                      <small>
                        data loaded from remote data source
                      </small>
                    </h3>
                  </div>
                </div>
                <div class="m-portlet__head-tools">
                  <ul class="m-portlet__nav">
                    <li class="m-portlet__nav-item">
                      <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                        <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                          <i class="la la-ellipsis-h m--font-brand"></i>
                        </a>
                        <div class="m-dropdown__wrapper">
                          <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                          <div class="m-dropdown__inner">
                            <div class="m-dropdown__body">
                              <div class="m-dropdown__content">
                                <ul class="m-nav">
                                  <li class="m-nav__section m-nav__section--first">
                                    <span class="m-nav__section-text">
                                      Quick Actions
                                    </span>
                                  </li>
                                  <li class="m-nav__item">
                                    <a href="" class="m-nav__link">
                                      <i class="m-nav__link-icon flaticon-share"></i>
                                      <span class="m-nav__link-text">
                                        Create Post
                                      </span>
                                    </a>
                                  </li>
                                  <li class="m-nav__item">
                                    <a href="" class="m-nav__link">
                                      <i class="m-nav__link-icon flaticon-chat-1"></i>
                                      <span class="m-nav__link-text">
                                        Send Messages
                                      </span>
                                    </a>
                                  </li>
                                  <li class="m-nav__item">
                                    <a href="" class="m-nav__link">
                                      <i class="m-nav__link-icon flaticon-multimedia-2"></i>
                                      <span class="m-nav__link-text">
                                        Upload File
                                      </span>
                                    </a>
                                  </li>
                                  <li class="m-nav__section">
                                    <span class="m-nav__section-text">
                                      Useful Links
                                    </span>
                                  </li>
                                  <li class="m-nav__item">
                                    <a href="" class="m-nav__link">
                                      <i class="m-nav__link-icon flaticon-info"></i>
                                      <span class="m-nav__link-text">
                                        FAQ
                                      </span>
                                    </a>
                                  </li>
                                  <li class="m-nav__item">
                                    <a href="" class="m-nav__link">
                                      <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                      <span class="m-nav__link-text">
                                        Support
                                      </span>
                                    </a>
                                  </li>
                                  <li class="m-nav__separator m-nav__separator--fit m--hide"></li>
                                  <li class="m-nav__item m--hide">
                                    <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
                                      Submit
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="m-portlet__body">
    <!--begin: Datatable -->
                <div class="m_datatable" id="ajax_data"></div>
                <table id="datatable_1" style="width: 100%;">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Tanggal</th>
                      <th>Volume</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                      </tr>
                    </tbody>
                </table>
                <!--end: Datatable -->
              </div>
              </div>
          </div>
        </div>
      </div>
                            
    <!-- begin::Quick Nav --> 
      <!--begin::Base Scripts -->
    <script src="<?php echo base_url('assets/assets/vendors/base/vendors.bundle.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/assets/demo/default/base/scripts.bundle.js') ?>" type="text/javascript"></script>
    <!--end::Base Scripts -->   
        <!--begin::Page Vendors -->
    <script src="<?php echo base_url('assets/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js') ?>" type="text/javascript"></script>
    <!--end::Page Vendors -->  
        <!--begin::Page Snippets -->
    <script src="<?php echo base_url('assets/assets/demo/default/custom/components/forms/widgets/bootstrap-datepicker.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/assets/app/js/dashboard.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/asd/js/datatables.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/amcharts.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/serial.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/dataloader.min.js') ?>" type="text/javascript"></script>
    <!-- <script src="<?php echo base_url('assets/assets/demo/default/custom/components/base/sweetalert2.js') ?>" type="text/javascript"></script> -->
    <script src="https://js.pusher.com/4.2/pusher.min.js"></script>
    <!--end::Page Snippets -->

    <script type="text/javascript">
        
      var ctx = document.getElementById("lineChart");
      var ctx2 = document.getElementById("barChart");
      var LineChart;
      var BarChart;

      Pusher.log = function(message) {
        if (window.console && window.console.log) {
          window.console.log(message);
        }
      };

      var pusher = new Pusher('6ace5daedebbde288aaf', {
        cluster: 'us2',
        encrypted: true
      });

      // var channel4 = pusher.subscribe('my-chart');

            var channel4 = pusher.subscribe('my-chart');
            channel4.bind('pusher:subscription_succeeded', function() {
              $.ajax({
                url: '<?php echo site_url('c_main/go') ?>',
                datatype: 'json',
                  success: function(response){
                  },
                  error: function(jqXhr, textStatus, thrown) {
                    console.log(jqXhr);
                    console.log(thrown);
                  }
              });
            });

            channel4.bind('my-amchart', function(data) {
              chart(data);
            });

      function ref()
      {
        $.ajax({
          url: '<?php echo site_url('c_main/go') ?>',
          datatype: 'json',
            success: function(response){
            },
            error: function(jqXhr, textStatus, thrown) {
              console.log(jqXhr);
              console.log(thrown);
            }
        });
      }

      function chart(data)
      {

      LineChart = AmCharts.makeChart(ctx, {
              "type": "serial",
              "theme": "light",
              "marginRight": 40,
              "marginLeft": 40,
              "autoMarginOffset": 20,
              "dataProvider": data,
              "mouseWheelZoomEnabled":true,
              "valueAxes": [{
                "id": "v1",
                "axisAlpha": 0,
                "position": "left",
                "ignoreAxisWidth":true
              }],
              "graphs": [{
                "id": "g1",
                "balloon":{
                  "drop":true,
                  "adjustBorderColor":false,
                  "color":"#ffffff"
                },
                "bullet": "round",
                "bulletBorderAlpha": 1,
                "bulletColor": "#FFFFFF",
                "bulletSize": 5,
                "hideBulletsCount": 50,
                "lineThickness": 2,
                "title": "red line",
                "useLineColorForBulletBorder": true,
                "valueField": "volume",
                "balloonText": "<span style='font-size:18px;'>[[value]]</span>"
              }],
              "categoryField": "tanggal",
              "categoryAxis": {
                "parseDates": true,
                "dashLength": 1,
                "minorGridEnabled": true
              }
            });

            BarChart = AmCharts.makeChart(ctx2, {
              "type": "serial",
              "theme": "light",
              "dataProvider": data,
              "valueAxes": [ {
                "gridColor": "#FFFFFF",
                "gridAlpha": 0.2,
                "dashLength": 0
              } ],
              "gridAboveGraphs": true,
              "startDuration": 1,
              "graphs": [ {
                "balloonText": "[[category]]: <b>[[value]]</b>",
                "fillAlphas": 0.8,
                "lineAlpha": 0.2,
                "type": "column",
                "valueField": "volume"
              } ],
              "chartCursor": {
                "categoryBalloonEnabled": false,
                "cursorAlpha": 0,
                "zoomable": false
              },
              "categoryField": "tanggal",
              "categoryAxis": {
                "gridPosition": "start",
                "gridAlpha": 0,
                "tickPosition": "start",
                "tickLength": 20,
                "parseDates": true,
                "dashLength": 1,
                "minorGridEnabled": true
              },
              "export": {
                "enabled": true
              }

            });

            LineChart.animateAgain();
      }
      /*function chart(data)
      {

        var channel2 = pusher.subscribe('my-chart');
          channel2.bind('pusher:subscription_succeeded', function() {
            $.ajax({
              url: '<?php echo site_url('c_main/go') ?>',
              datatype: 'json',
                success: function(response){
                },
                error: function(jqXhr, textStatus, thrown) {
                  console.log(jqXhr);
                  console.log(thrown);
                }
          });

          channel2.bind('my-amchart', function(data) {
            LineChart.dataProvider = data;
            LineChart.validateData();

            BarChart.dataProvider = data;
            BarChart.validateData();

         });

        });

      }*/
            
          var channel = pusher.subscribe('my-channel');
            channel.bind('pusher:subscription_succeeded', function() {
              // alert('subs success');
                $.ajax({
                  url: '<?php echo site_url('c_main/cari') ?>',
                  datatype: 'json',
                    success: function(response){
                    },
                    error: function(jqXhr, textStatus, thrown) {
                      console.log(jqXhr);
                      console.log(thrown);
                    }
                });

            channel.bind('my-event', function(data) {
              // alert('bind data')
              $('#datatable_1').DataTable({
                'destroy': true,
                'pageLength' : 5,
                data: data.data,
                columns: [
                  {data: 'no'},
                  {data: 'tanggal'},
                  {data: 'volume'},
                  {"defaultContent": "<button id='btn_delete'>Delete</button>"}
                ]
              });
            });

          });

          function loadData()
          {
            $.fn.dataTable.ext.errMode = 'none';
                $('#datatable_1').DataTable({
                  'destroy': true,
                  'pageLength' : 5,
                  ajax: '<?php echo site_url('c_main/cari') ?>'
                });
          }

          chart();

          $(document).ready(function() {

                $("#btn_add").click(function() {
                    $.ajax({
                      url: '<?php echo site_url('c_main/tambah') ?>',
                      method: 'post',
                      datatype: 'json',
                      data: { ajax:true, volume:$('#fm_vol').val(), tanggal:$('#m_datepicker_1').val() },
                        success: function(response){
                        ref();
                        loadData();
                        swal("Sukses!", "Anda berhasil menambah data!", "success");
                        // var data = JSON.parse(response);
                        // console.log(data);
                        // addData(myLineChart, data.tgl_penjualan, data.vol_penjualan);
                        // addData(myBarChart, data.tgl_penjualan, data.vol_penjualan);
                        },
                        error: function(jqXhr, textStatus, thrown) {
                          /* Act on the event */
                          console.log(jqXhr);
                          console.log(thrown);
                        }
                    });
                });

               $('#datatable_1 tbody').on( 'click', 'button#btn_delete', function () {
                var data = $('#datatable_1').DataTable().row( $(this).parents('tr') ).data();
                var d_id = (data['id']);
                var d_volume = data['volume'];
                var d_tanggal = data['tanggal'];
                swal({
                    title: "Anda yakin?",
                    text: "You won't be able to revert this!",
                    type: "warning",
                    showCancelButton: !0,
                    confirmButtonText: "Ya",
                    cancelButtonText: "Tidak",
                    reverseButtons: !0
                }).then(function(e) {
                    e.value
                     if (e.value === true)
                     {
                       $.ajax({
                         url: '<?php echo site_url('c_main/hapus') ?>',
                         method: 'post',
                         datatype: 'json',
                         data: {ajax:true, id:d_id},
                            success: function(response) {
                              // alert(data);
                              ref();
                              loadData();
                              swal("Deleted!", "Your data has been deleted.", "success")
                            },
                            error: function(jqXhr, textStatus, thrown) {
                              console.log(jqXhr);
                              console.log(thrown);
                            }
                         });
                     }
                     else
                     {
                        "cancel" === e.dismiss && swal("Cancelled", "Your imaginary file is safe :)", "error")
                     }
                })
              });

               $('#datatable_1 tbody').on( 'click', '#btn_edit', function () {
                var data = $('#datatable_1').DataTable().row( $(this).parents('tr') ).data();
                  // alert( data['tanggal'] +"edit "+ data['volume'] );
                  $("#m_modal_5 #id-value").val(data['id']);
                  $("#m_modal_5 #volume-value").val(data['volume']);
                  $("#m_modal_5 #m_datepicker_2").val(data['tanggal']);
                  $("#m_modal_5").modal();
              });

               $('#btn_update').click(function() {
                 $.ajax({
                      url: '<?php echo site_url('c_main/change') ?>',
                      method: 'post',
                      datatype: 'json',
                      data: { ajax:true, id:$('#id-value').val() ,volume:$('#volume-value').val(), tanggal:$('#m_datepicker_2').val() },
                        success: function(response){
                        swal("Sukses!", "Anda berhasil mengubah data!", "success");
                        // $("#m_modal_5").hide();
                        ref();
                        loadData();
                        },
                        error: function(jqXhr, textStatus, thrown) {
                          /* Act on the event */
                          console.log(jqXhr);
                          console.log(thrown);
                        }
                    });
               });

          });

      </script>
  </body>
  <div class="modal fade" id="m_modal_5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group" hidden="true">
            <label for="id-value" class="form-control-label">ID:</label>
            <input type="text" class="form-control m-input" id="id-value">
          </div>
          <div class="form-group">
            <label for="volume-value" class="form-control-label">Volume:</label>
            <input type="number" class="form-control m-input" id="volume-value">
          </div>
          <div class="form-group">
            <label for="m_datepicker_2" class="form-control-label">Tanggal:</label>
            <input type="text" class="form-control" id="m_datepicker_2" readonly="" placeholder="Select date"></input>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a class="btn btn-primary" id="btn_update" role="button">Update</a>
      </div>
    </div>
  </div>
</div>
  <!-- end::Body -->
</html>
