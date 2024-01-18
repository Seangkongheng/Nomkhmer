@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
  .menu{
  display: grid;
  gap: 1.2rem;
  grid-template-columns: auto auto auto auto;
  }
  .grid-item {
    padding: 20px;
    text-align: center;
    position: relative;
  background-color: rgba(255, 255, 255, 0.8);
  width: 280px;
  height: 260px;
  text-align: center;
  box-shadow: rgba(0, 0, 0, 0.15) 2.4px 2.4px 3.2px;
}
.image img{
  width: 150px;
}
.image img:hover{
  transform: scale(1.1);
  transition:0.2s;
</style>
    <div class="card">
        <div class="card-body">
            <div class="content">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                      <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon">
                          <div class="card-icon">
                            <i class="material-icons">content_copy</i>
                          </div>
                          <p class="card-category">Product</p>
                          <h3 class="card-title">{{ $product }}
                          
                          </h3>
                        </div>
                        <div class="card-footer">
                          <div class="stats">
                            <a href="/product">view detail</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                      <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon">
                          <div class="card-icon">
                            <i class="material-icons">store</i>
                          </div>
                          <p class="card-category">Catagory</p>
                          <h3 class="card-title">{{ $catagory }}</h3>
                        </div>
                        <div class="card-footer">
                          <div class="stats">
                              <a href="/catagory">view Detail</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                      <div class="card card-stats">
                        <div class="card-header card-header-danger card-header-icon">
                          <div class="card-icon">
                            <i class="fa-solid fa-user"></i>
                          </div>
                          <p class="card-category">Customer</p>
                          <h3 class="card-title">{{  $customer }}</h3>
                        </div>
                        <div class="card-footer">
                          <div class="stats">
                            <a href="">View Detail</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                      <div class="card card-stats">
                        <div class="card-header card-header-info card-header-icon">
                          <div class="card-icon">
                            <i class="fa-solid fa-user"></i>
                          </div>
                          <p class="card-category">Admin</p>
                          <h3 class="card-title">{{ $admin }}</h3>
                        </div>
                        <div class="card-footer">
                          <div class="stats">
                            <a href="">View Detail</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  {{-- <div class="row">
                    <div class="col-md-4">
                      <div class="card card-chart">
                        <div class="card-header card-header-success">
                          <div class="ct-chart" id="dailySalesChart"></div>
                        </div>
                        <div class="card-body">
                          <h4 class="card-title">Daily Sales</h4>
                          <p class="card-category">
                            <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
                        </div>
                        <div class="card-footer">
                          <div class="stats">
                            <i class="material-icons">access_time</i> updated 4 minutes ago
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card card-chart">
                        <div class="card-header card-header-warning">
                          <div class="ct-chart" id="websiteViewsChart"></div>
                        </div>
                        <div class="card-body">
                          <h4 class="card-title">Email Subscriptions</h4>
                          <p class="card-category">Last Campaign Performance</p>
                        </div>
                        <div class="card-footer">
                          <div class="stats">
                            <i class="material-icons">access_time</i> campaign sent 2 days ago
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="card card-chart">
                        <div class="card-header card-header-danger">
                          <div class="ct-chart" id="completedTasksChart"></div>
                        </div>
                        <div class="card-body">
                          <h4 class="card-title">Completed Tasks</h4>
                          <p class="card-category">Last Campaign Performance</p>
                        </div>
                        <div class="card-footer">
                          <div class="stats">
                            <i class="material-icons">access_time</i> campaign sent 2 days ago
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> --}}
                  {{-- <div class="row">
                    <div class="col-lg-6 col-md-12">
                      <div class="card">
                        <div class="card-header card-header-tabs card-header-primary">
                          <div class="nav-tabs-navigation">
                            <div class="nav-tabs-wrapper">
                              <span class="nav-tabs-title">Tasks:</span>
                              <ul class="nav nav-tabs" data-tabs="tabs">
                                <li class="nav-item">
                                  <a class="nav-link active" href="#profile" data-toggle="tab">
                                    <i class="material-icons">bug_report</i> Bugs
                                    <div class="ripple-container"></div>
                                  </a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#messages" data-toggle="tab">
                                    <i class="material-icons">code</i> Website
                                    <div class="ripple-container"></div>
                                  </a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#settings" data-toggle="tab">
                                    <i class="material-icons">cloud</i> Server
                                    <div class="ripple-container"></div>
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="card-body">
                          <div class="tab-content">
                            <div class="tab-pane active" id="profile">
                              <table class="table">
                                <tbody>
                                  <tr>
                                    <td>
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input class="form-check-input" type="checkbox" value="" checked>
                                          <span class="form-check-sign">
                                            <span class="check"></span>
                                          </span>
                                        </label>
                                      </div>
                                    </td>
                                    <td>Sign contract for "What are conference organizers afraid of?"</td>
                                    <td class="td-actions text-right">
                                      <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                        <i class="material-icons">edit</i>
                                      </button>
                                      <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                        <i class="material-icons">close</i>
                                      </button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input class="form-check-input" type="checkbox" value="">
                                          <span class="form-check-sign">
                                            <span class="check"></span>
                                          </span>
                                        </label>
                                      </div>
                                    </td>
                                    <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                    <td class="td-actions text-right">
                                      <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                        <i class="material-icons">edit</i>
                                      </button>
                                      <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                        <i class="material-icons">close</i>
                                      </button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input class="form-check-input" type="checkbox" value="">
                                          <span class="form-check-sign">
                                            <span class="check"></span>
                                          </span>
                                        </label>
                                      </div>
                                    </td>
                                    <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                    </td>
                                    <td class="td-actions text-right">
                                      <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                        <i class="material-icons">edit</i>
                                      </button>
                                      <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                        <i class="material-icons">close</i>
                                      </button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input class="form-check-input" type="checkbox" value="" checked>
                                          <span class="form-check-sign">
                                            <span class="check"></span>
                                          </span>
                                        </label>
                                      </div>
                                    </td>
                                    <td>Create 4 Invisible User Experiences you Never Knew About</td>
                                    <td class="td-actions text-right">
                                      <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                        <i class="material-icons">edit</i>
                                      </button>
                                      <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                        <i class="material-icons">close</i>
                                      </button>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            <div class="tab-pane" id="messages">
                              <table class="table">
                                <tbody>
                                  <tr>
                                    <td>
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input class="form-check-input" type="checkbox" value="" checked>
                                          <span class="form-check-sign">
                                            <span class="check"></span>
                                          </span>
                                        </label>
                                      </div>
                                    </td>
                                    <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                    </td>
                                    <td class="td-actions text-right">
                                      <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                        <i class="material-icons">edit</i>
                                      </button>
                                      <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                        <i class="material-icons">close</i>
                                      </button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input class="form-check-input" type="checkbox" value="">
                                          <span class="form-check-sign">
                                            <span class="check"></span>
                                          </span>
                                        </label>
                                      </div>
                                    </td>
                                    <td>Sign contract for "What are conference organizers afraid of?"</td>
                                    <td class="td-actions text-right">
                                      <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                        <i class="material-icons">edit</i>
                                      </button>
                                      <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                        <i class="material-icons">close</i>
                                      </button>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            <div class="tab-pane" id="settings">
                              <table class="table">
                                <tbody>
                                  <tr>
                                    <td>
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input class="form-check-input" type="checkbox" value="">
                                          <span class="form-check-sign">
                                            <span class="check"></span>
                                          </span>
                                        </label>
                                      </div>
                                    </td>
                                    <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                    <td class="td-actions text-right">
                                      <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                        <i class="material-icons">edit</i>
                                      </button>
                                      <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                        <i class="material-icons">close</i>
                                      </button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input class="form-check-input" type="checkbox" value="" checked>
                                          <span class="form-check-sign">
                                            <span class="check"></span>
                                          </span>
                                        </label>
                                      </div>
                                    </td>
                                    <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                    </td>
                                    <td class="td-actions text-right">
                                      <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                        <i class="material-icons">edit</i>
                                      </button>
                                      <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                        <i class="material-icons">close</i>
                                      </button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input class="form-check-input" type="checkbox" value="" checked>
                                          <span class="form-check-sign">
                                            <span class="check"></span>
                                          </span>
                                        </label>
                                      </div>
                                    </td>
                                    <td>Sign contract for "What are conference organizers afraid of?"</td>
                                    <td class="td-actions text-right">
                                      <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                        <i class="material-icons">edit</i>
                                      </button>
                                      <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                        <i class="material-icons">close</i>
                                      </button>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                      <div class="card">
                        <div class="card-header card-header-warning">
                          <h4 class="card-title">Employees Stats</h4>
                          <p class="card-category">New employees on 15th September, 2016</p>
                        </div>
                        <div class="card-body table-responsive">
                        
                        </div>
                      </div>
                    </div>
                  </div> --}}
                </div>
              </div>
              
              <div class="all-box">
                  <div class="menu">
                 
                      <div class="grid-item">
                        <a href="/">
                          <div class="image">
                             <img src="/image/dashboard.png" alt="">
                          </div>
                        </a>
                        <p class="mt-4">dashboad</p>
                      </div>
                      <div class="grid-item">
                        <a href="/product">
                          <div class="image">
                             <img src="/image/product.png" alt="">
                          </div>
                        </a>
                        <p class="mt-4">product</p>
                      </a>
                      </div>
                      <div class="grid-item">
                        <a href="catagory">
                          <div class="image">
                             <img src="/image/category.png" alt="">
                          </div>
                        </a>
                        <p class="mt-4">Catagory</p>
                      </a>
                      </div>  
                      <div class="grid-item">
                        <a href="/customer">
                          <div class="image">
                             <img src="/image/review.png" alt="">
                          </div>
                        </a>
                        <p class="mt-4"><a href="">customer</a></p>
                      </div>
                      <div class="grid-item">
                        <a href="">
                          <div class="image">
                             <img src="/image/profile.png" alt="">
                          </div>
                        </a>
                        <p class="mt-4"><a href="/admin">admin</a></p>
                      </div>
                      <div class="grid-item">
                        <a href="/report">
                          <div class="image">
                             <img src="/image/report.png" alt="">
                          </div>
                        </a>
                        <p class="mt-4">  <a href="/report">Report</a></p>
                      </div>
                      <div class="grid-item">
                        <a href="/order">
                          <div class="image">
                            <img src="/image/heng.png" alt="">
                          </div>
                        </a>
                        <p class="mt-4">Order</p>
                      </div>
                      <div class="grid-item">
                        <a href="">
                          <div class="image">
                             <img src="/image/setting.png" alt="">
                          </div>
                        </a>
                        <p class="mt-4">Setting</p>
                      </div>
                    
                  </div>
              </div>


        </div>
    </div>
    <div class="fixed-plugin">
        <div class="dropdown show-dropdown">
          <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
          </a>
          <ul class="dropdown-menu">
            <li class="header-title"> Sidebar Filters</li>
            <li class="adjustments-line">
              <a href="javascript:void(0)" class="switch-trigger active-color">
                <div class="badge-colors ml-auto mr-auto">
                  <span class="badge filter badge-purple" data-color="purple"></span>
                  <span class="badge filter badge-azure" data-color="azure"></span>
                  <span class="badge filter badge-green" data-color="green"></span>
                  <span class="badge filter badge-warning" data-color="orange"></span>
                  <span class="badge filter badge-danger" data-color="danger"></span>
                  <span class="badge filter badge-rose active" data-color="rose"></span>
                </div>
                <div class="clearfix"></div>
              </a>
            </li>
            <li class="header-title">Images</li>
            <li class="active">
              <a class="img-holder switch-trigger" href="javascript:void(0)">
                <img src="/image/sidebar-1.jpg" alt="">
              </a>
            </li>
            <li>
              <a class="img-holder switch-trigger" href="javascript:void(0)">
                <img src="/image/sidebar-2.jpg" alt="">
              </a>
            </li>
            <li>
              <a class="img-holder switch-trigger" href="javascript:void(0)">
                <img src="/image/sidebar-3.jpg" alt="">
              </a>
            </li>
            <li>
              <a class="img-holder switch-trigger" href="javascript:void(0)">
                <img src="/image/sidebar-4.jpg" alt="">
              </a>
            </li>
            <li class="button-container">
              <a href="https://www.creative-tim.com/product/material-dashboard" target="_blank" class="btn btn-primary btn-block">Free Download</a>
            </li>
            <!-- <li class="header-title">Want more components?</li>
                <li class="button-container">
                    <a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-warning btn-block">
                      Get the pro version
                    </a>
                </li> -->
            <li class="button-container">
              <a href="https://demos.creative-tim.com/material-dashboard/docs/2.1/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block">
                View Documentation
              </a>
            </li>
            <li class="button-container github-star">
              <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
            </li>
            <li class="header-title">Thank you for 95 shares!</li>
            <li class="button-container text-center">
              <button id="twitter" class="btn btn-round btn-twitter"><i class="fa fa-twitter"></i> &middot; 45</button>
              <button id="facebook" class="btn btn-round btn-facebook"><i class="fa fa-facebook-f"></i> &middot; 50</button>
              <br>
              <br>
            </li>
          </ul>
        </div>
      </ div>


      <script>
        $(document).ready(function() {
          $().ready(function() {
            $sidebar = $('.sidebar');
    
            $sidebar_img_container = $sidebar.find('.sidebar-background');
    
            $full_page = $('.full-page');
    
            $sidebar_responsive = $('body > .navbar-collapse');
    
            window_width = $(window).width();
    
            fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();
    
            if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
              if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                $('.fixed-plugin .dropdown').addClass('open');
              }
    
            }
    
            $('.fixed-plugin a').click(function(event) {
              // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
              if ($(this).hasClass('switch-trigger')) {
                if (event.stopPropagation) {
                  event.stopPropagation();
                } else if (window.event) {
                  window.event.cancelBubble = true;
                }
              }
            });
    
            $('.fixed-plugin .active-color span').click(function() {
              $full_page_background = $('.full-page-background');
    
              $(this).siblings().removeClass('active');
              $(this).addClass('active');
    
              var new_color = $(this).data('color');
    
              if ($sidebar.length != 0) {
                $sidebar.attr('data-color', new_color);
              }
    
              if ($full_page.length != 0) {
                $full_page.attr('filter-color', new_color);
              }
    
              if ($sidebar_responsive.length != 0) {
                $sidebar_responsive.attr('data-color', new_color);
              }
            });
    
            $('.fixed-plugin .background-color .badge').click(function() {
              $(this).siblings().removeClass('active');
              $(this).addClass('active');
    
              var new_color = $(this).data('background-color');
    
              if ($sidebar.length != 0) {
                $sidebar.attr('data-background-color', new_color);
              }
            });
    
            $('.fixed-plugin .img-holder').click(function() {
              $full_page_background = $('.full-page-background');
    
              $(this).parent('li').siblings().removeClass('active');
              $(this).parent('li').addClass('active');
    
    
              var new_image = $(this).find("img").attr('src');
    
              if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                $sidebar_img_container.fadeOut('fast', function() {
                  $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                  $sidebar_img_container.fadeIn('fast');
                });
              }
    
              if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');
    
                $full_page_background.fadeOut('fast', function() {
                  $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                  $full_page_background.fadeIn('fast');
                });
              }
    
              if ($('.switch-sidebar-image input:checked').length == 0) {
                var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');
    
                $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              }
    
              if ($sidebar_responsive.length != 0) {
                $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
              }
            });
    
            $('.switch-sidebar-image input').change(function() {
              $full_page_background = $('.full-page-background');
    
              $input = $(this);
    
              if ($input.is(':checked')) {
                if ($sidebar_img_container.length != 0) {
                  $sidebar_img_container.fadeIn('fast');
                  $sidebar.attr('data-image', '#');
                }
    
                if ($full_page_background.length != 0) {
                  $full_page_background.fadeIn('fast');
                  $full_page.attr('data-image', '#');
                }
    
                background_image = true;
              } else {
                if ($sidebar_img_container.length != 0) {
                  $sidebar.removeAttr('data-image');
                  $sidebar_img_container.fadeOut('fast');
                }
    
                if ($full_page_background.length != 0) {
                  $full_page.removeAttr('data-image', '#');
                  $full_page_background.fadeOut('fast');
                }
    
                background_image = false;
              }
            });
    
            $('.switch-sidebar-mini input').change(function() {
              $body = $('body');
    
              $input = $(this);
    
              if (md.misc.sidebar_mini_active == true) {
                $('body').removeClass('sidebar-mini');
                md.misc.sidebar_mini_active = false;
    
                $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();
    
              } else {
    
                $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');
    
                setTimeout(function() {
                  $('body').addClass('sidebar-mini');
    
                  md.misc.sidebar_mini_active = true;
                }, 300);
              }
    
              // we simulate the window Resize so the charts will get updated in realtime.
              var simulateWindowResize = setInterval(function() {
                window.dispatchEvent(new Event('resize'));
              }, 180);
    
              // we stop the simulation of Window Resize after the animations are completed
              setTimeout(function() {
                clearInterval(simulateWindowResize);
              }, 1000);
    
            });
          });
        });
      </script>



        <script>
            $(document).ready(function() {
              // Javascript method's body can be found in assets/js/demos.js
              md.initDashboardPageCharts();
        
            });
          </script>
@endsection