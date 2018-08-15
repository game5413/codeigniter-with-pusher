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
                          Area Chart
                        </h3>
                      </div>
                    </div>
                  </div>
                  <div class="m-portlet__body">
                    <div></div>
                    <div id="areaChart" style="height:260px;"></div>
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
                <!--begin: Search Form -->
                <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                  <div class="row align-items-center">
                    <div class="col-xl-8 order-2 order-xl-1">
                      <div class="form-group m-form__group row align-items-center">
                        <div class="col-md-4">
                          <div class="m-input-icon m-input-icon--left">
                            <input type="text" class="form-control m-input" placeholder="Search..." id="generalSearch">
                            <span class="m-input-icon__icon m-input-icon__icon--left">
                              <span>
                                <i class="la la-search"></i>
                              </span>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--end: Search Form -->
    <!--begin: Datatable -->
                <div class="m_datatable m-datatable--on-reloaded m-datatable--on-update-perpage m-datatable--on-goto-page m-datatable--on-update-perpage m-datatable--on-layout-updated m-datatable--on-destroy" id="ajax_data"></div>
                    <!-- <table class="m-datatable__table" style="display: block; min-height: 300px; overflow-x: auto;">
                      <thead class="m-datatable__head">
                        <tr class="m-datatable__row" style="left: 0px;">
                          <th data-field="RecordID" class="m-datatable__cell--center m-datatable__cell m-datatable__cell--sort"><span style="width: 40px;">#</span></th>
                          <th data-field="tanggal" class="m-datatable__cell--center m-datatable__cell m-datatable__cell--sort"><span style="width: 40px;">#</span></th>
                          <th data-field="volume" class="m-datatable__cell--center m-datatable__cell m-datatable__cell--sort"><span style="width: 40px;">#</span></th>
                        </tr>
                      </thead>
                      <tbody class="m-datatable__body">
                        <tr data-row="1" class="m-datatable__row" style="left: 0px;"></tr>
                      <tr data-row="2" class="m-datatable__row" style="left: 0px;"></tr>
                      <tr data-row="3" class="m-datatable__row" style="left: 0px;"></tr>
                    </tbody>
                  </table> -->
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
    <!-- <script src="<?php echo base_url('assets/assets/demo/default/custom/components/datatables/base/code.min.js') ?>" type="text/javascript"></script> -->
    <!-- <script src="<?php echo base_url('assets/assets/demo/default/custom/components/datatables/base/data-ajax2.js') ?>" type="text/javascript"></script> -->
    <!-- <script src="<?php echo base_url('assets/assets/demo/default/custom/components/datatables/base/data-ajax.js') ?>" type="text/javascript"></script> -->
    <script src="<?php echo base_url('assets/assets/app/js/dashboard.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/apexcharts.min.js') ?>" type="text/javascript"></script>
    <script src="https://js.pusher.com/4.2/pusher.min.js"></script>
    <!-- <script src="<?php echo base_url('assets/asd/js/datatables.min.js') ?>" type="text/javascript"></script> -->
    <!--end::Page Snippets -->


        <script type="text/javascript">
          var ctx = document.getElementById("areaChart");
          var ctx2 = document.getElementById("barChart");
          var areaChart;
          var barChart;
          var datatable;

          function dt(data)
          {
          var options = {
            data: {
                type:"local",
                source: data.data,
                pageSize: 10,
                serverPaging: true,
                serverFiltering: true,
                serverSorting: true,
                autoColumns: true
            },
            layout: {
                theme: 'default',
                scroll: true,
                footer: false,
                  icons: {
                      sort: {
                        asc: 'la la-arrow-up',
                        desc: 'la la-arrow-down'
                      },
                      pagination: {
                      next: 'la la-angle-right',
                      prev: 'la la-angle-left',
                      first: 'la la-angle-double-left',
                      last: 'la la-angle-double-right',
                      more: 'la la-ellipsis-h'
                    }
                  }
            },
            sortable: false,
            pagination:true,
            toolbar: {
                items: {
                    pagination: {
                        type: 'default',
                        navigation: {
                          prev: true,
                          next: true,
                          first: true,
                          last: true
                        },

                      pageSizeSelect: [10, 20, 30, 50, 100]
                    }
                }
            },
            translate: {
                records: {
                  processing: 'Please wait...',
                  noRecords: 'No records found'
                },
                toolbar: {
                  pagination: {
                    items: {
                      default: {
                        first: 'First',
                        prev: 'Previous',
                        next: 'Next',
                        last: 'Last',
                        more: 'More pages',
                        input: 'Page number',
                        select: 'Select page size'
                      },
                      info: 'Displaying {{start}} - {{end}} of {{total}} records'
                    }
                  }
                }
            },
            search: {
                onEnter: true,
                input: $("#generalSearch")
            },
            columns:[
            {
              field: "no", title: "#", sortable: !1, width: 40, selector: !1, textAlign: "center"
            },
            {
              field: "tanggal", title: "Tanggal", filterable: !1, width: 150, type: "date", format: "MM/DD/YYYY"
            },
            {
              field: "volume", title: "Volume", type: "number"
            },
            {
              field:"Actions", width:110, title:"Actions", sortable:!1, overflow:"visible", template:function(options, e, a) {
                    return'\t\t\t\t\t\t<div class="dropdown '+(a.getPageSize()-e<=4?"dropup": "")+'">\t\t\t\t\t\t</div>\t\t\t\t\t\t<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details">\t\t\t\t\t\t\t<i class="la la-edit"></i>\t\t\t\t\t\t</a>\t\t\t\t\t\t<button value="' + options.id + '" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" id="btn_delete" title="Delete">\t\t\t\t\t\t\t<i class="la la-trash"></i>\t\t\t\t\t\t</button>\t\t\t\t\t'
                }
            }]
          }
          $('.m_datatable').on('click', '#btn_delete', function () {
              var data = $(this).val();
              alert(data);
                swal({
                    title: "Anda yakin?",
                    text: "You won't" + data + " be able to revert this!",
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
                         data: {ajax:true, id:data},
                            success: function(response) {
                              // alert(data);
                              refresh();
                              reload();
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
          datatable = $(".m_datatable").mDatatable(options);

        }

          Pusher.log = function(message) {
            if (window.console && window.console.log) {
              window.console.log(message);
            }
          };

          var pusher = new Pusher('6ace5daedebbde288aaf', {
            cluster: 'us2',
            encrypted: true
          });

          var channel = pusher.subscribe('my-chart');
          channel.bind('pusher:subscription_succeeded', function() {
            // alert('subscribe succeed');
            $.get('<?php echo site_url('c_main/go') ?>');
          });
          channel.bind('my-amchart', function(data) {
            // alert('getting data');
            var arr1 = [];
            var arr2 = [];
              for(var i = 0; i < data.length; i++)
              {
                arr1.push(data[i]['tanggal']);
                arr2.push(data[i]['volume']);
                // console.log(arr1);
                chart(arr1,arr2);
              }
          });

          var channel2 = pusher.subscribe('my-channel');
          channel2.bind('pusher:subscription_succeeded', function() {
              $.get('<?php echo site_url('c_main/cari') ?>');
            channel2.bind('my-event', function(data) {
              dt(data);
            });
          });

          function chart(label,data)
          {
            var optionsArea = {
              chart: {
                type: 'area'
              },
              stroke: {
                curve: 'smooth'
              },
              series: [{
                name: "Volume",
                data: data
              }],
              labels: label,
              xaxis: {
                type: 'datetime',
                trim: true,
                labels: {
                  show: false
                }
              }
            }

            var optionsBar = {
              chart: {
                type: 'bar'
              },
              series: [{
                name: 'Volume',
                data: data
              }],
              xaxis: {
                categories: label
              }
            }  

            areaChart = new ApexCharts(ctx, optionsArea);
            barChart = new ApexCharts(ctx2, optionsBar);

            areaChart.render();
            barChart.render();

          }

          function refresh()
          {
            $.get('<?php echo site_url('c_main/go') ?>');
          }

          function reload()
          {
            $.get('<?php echo site_url('c_main/cari'); ?>');
            $(".m_datatable").mDatatable("destroy");
          }
          
          $(document).ready(function() {

            $("#btn_add").click(function() {
              $.ajax({
                url: '<?php echo site_url('c_main/tambah') ?>',
                method: 'post',
                datatype: 'json',
                data: { ajax:true, volume:$('#fm_vol').val(), tanggal:$('#m_datepicker_1').val() },
                success: function(response){
                  refresh();
                  reload();
                  swal("Sukses!", "Anda berhasil menambah data!", "success");
                },
                error: function(jqXhr, textStatus, thrown) {
                  console.log(jqXhr);
                  console.log(thrown);
                }
              });
            });
          });
        </script>
</body>
  <!-- end::Body -->
</html>
