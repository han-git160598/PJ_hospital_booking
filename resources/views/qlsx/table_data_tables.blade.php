<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>InQ - A Responsive Bootstrap 3 Admin Dashboard Template</title>
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
      <!-- Data Tables -->
      <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
      <link href="css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
      <link href="css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">
      <link href="css/animate.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <link href="css/forms/kforms.css" rel="stylesheet">
   </head>
   <body>
      <div id="wrapper">
         <nav class="navbar-default navbar-static-side fixed-menu" role="navigation">
            <div class="sidebar-collapse">
               <div id="hover-menu"></div>
               <ul class="nav metismenu" id="side-menu">
                  <li>
                     <div class="logopanel" style="margin-left: 0px;">
                        <div class="profile-element">
                           <h2><a href="index.html">InQ Admin</a></h2>
                        </div>
                        <div class="logo-element">
                           InQ
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="leftpanel-profile">
                        <div class="media-left">
                           <a href="#">
                           <img src="https://placeholdit.imgix.net/~text?txtsize=22&txt=100x100&w=100&h=100" alt="" class="media-object img-circle">                                        
                           </a>
                        </div>
                        <div class="media-body profile-name" style="white-space: nowrap;">
                           <h4 class="media-heading">Rhian Santos <a data-toggle="collapse" data-target="#loguserinfo" class="pull-right"><i class="fa fa-angle-down"></i></a></h4>
                           <span>Software Engineer</span>
                        </div>
                     </div>
                     <div class="leftpanel-userinfo collapse" id="loguserinfo" style="position: absolute; background: #3b4354!important">
                        <h5 class="sidebar-title">Address</h5>
                        <address>
                           Dumaguete Negros Is.
                           Philippines 6200
                        </address>
                        <h5 class="sidebar-title">Contact</h5>
                        <ul class="list-group">
                           <li class="list-group-item">
                              <label class="pull-left">Email</label>
                              <span class="pull-right">demo@softreliance.com</span>
                           </li>
                           <li class="list-group-item">
                              <label class="pull-left">Home</label>
                              <span class="pull-right">(032) 1234 567</span>
                           </li>
                           <li class="list-group-item">
                              <label class="pull-left">Mobile</label>
                              <span class="pull-right">+63012 3456 789</span>
                           </li>
                           <li class="list-group-item">
                              <label class="pull-left">Social</label>
                              <div class="social-icons pull-right">
                                 <a href="#"><i class="fa fa-facebook-official"></i></a>
                                 <a href="#"><i class="fa fa-twitter"></i></a>
                                 <a href="#"><i class="fa fa-pinterest"></i></a>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </li>
                  <li>
                     <!-- START : Left sidebar -->
                     <div class="nano left-sidebar">
                        <div class="nano-content">
                           <ul class="nav nav-pills nav-stacked nav-inq">
                              <li>
                                 <a href="index.html"><i class="fa fa-home"></i> <span class="nav-label">Dashboards</span></a>
                              </li>
                              <li class="nav-parent">
                                 <a href="#"><i class="fa fa-smile-o"></i> <span class="nav-label">UI Elements</span></a>
                                 <ul class="children nav">
                                    <li><a href="typography.html">Typography</a></li>
                                    <li><a href="icons.html">Icons</a></li>
                                    <li><a href="modal_window.html">Modals</a></li>
                                    <li><a href="draggable_panels.html">Draggable Panels</a></li>
                                    <li><a href="buttons.html">Buttons</a></li>
                                    <li><a href="panels.html">Panels</a></li>
                                    <li><a href="tabs.html">Tabs</a></li>
                                    <li><a href="notifications.html">Notifications & Tooltips</a></li>
                                    <li><a href="badges.html">Badges, Labels, Progress</a></li>
                                 </ul>
                              </li>
                              <li class="nav-parent">
                                 <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Forms</span></a>
                                 <ul class="children nav">
                                    <li><a href="form_basic.html">Basic form</a></li>
                                    <li><a href="form_advanced.html">Advanced Plugins</a></li>
                                    <li><a href="validation.html">Validation</a></li>
                                    <li><a href="form_wizard.html">Wizard</a></li>
                                    <li><a href="form_file_upload.html">File Upload</a></li>
                                    <li><a href="form_editors.html">Text Editor</a></li>
                                    <li><a href="code_editor.html">Code Editor</a></li>
                                 </ul>
                              </li>
                              <li class="nav-parent active">
                                 <a href="#"><i class="fa fa-table"></i> <span class="nav-label">Tables</span></a>
                                 <ul class="children nav">
                                    <li><a href="table_basic.html">Static Tables</a></li>
                                    <li><a href="table_data_tables.html" class="active">Data Tables</a></li>
                                    <li><a href="table_foo_table.html">Foo Tables</a></li>
                                    <li><a href="table_x_editable.html">X-Edtiable Tables</a></li>
                                    <li><a href="jq_grid.html">jqGrid</a></li>
                                 </ul>
                              </li>
                              <li class="nav-parent">
                                 <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Graphs</span></a>
                                 <ul class="children">
                                    <li><a href="graph_flot.html">Flot Charts</a></li>
                                    <li><a href="graph_morris.html">Morris.js Charts</a></li>
                                    <li><a href="graph_rickshaw.html">Rickshaw Charts</a></li>
                                    <li><a href="graph_chartjs.html">Chart.js</a></li>
                                    <li><a href="graph_chartist.html">Chartist</a></li>
                                    <li><a href="graph_peity.html">Peity Charts</a></li>
                                    <li><a href="graph_sparkline.html">Sparkline Charts</a></li>
                                 </ul>
                              </li>
                              <li class="nav-parent">
                                 <a href="mailbox.html"><i class="fa fa-envelope"></i> <span class="nav-label">Mailbox </span></a>
                                 <ul class="children nav">
                                    <li><a href="mailbox.html">Inbox</a></li>
                                    <li><a href="mail_detail.html">Email view</a></li>
                                    <li><a href="mail_compose.html">Compose email</a></li>
                                    <li><a href="email_template.html">Email templates</a></li>
                                 </ul>
                              </li>
                              <li class="nav-parent">
                                 <a href="#"><i class="fa fa-desktop"></i> <span class="nav-label">Apps</span></a>
                                 <ul class="children nav">
                                    <li><a href="contacts.html">Contacts</a></li>
                                    <li><a href="profile.html">Profile</a></li>
                                    <li><a href="projects.html">Projects</a></li>
                                    <li><a href="project_detail.html">Project detail</a></li>
                                    <li><a href="teams_board.html">Teams board</a></li>
                                    <li><a href="social_feed.html">Social feed</a></li>
                                    <li><a href="clients.html">Clients</a></li>
                                    <li><a href="file_manager.html">File manager</a></li>
                                    <li><a href="calendar.html">Calendar</a></li>
                                 </ul>
                              </li>
                              <li class="nav-parent">
                                 <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Pages</span></a>
                                 <ul class="children">
                                    <li><a href="search_results.html">Search results</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="forgot_password.html">Forget password</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="404.html">404 Page</a></li>
                                    <li><a href="500.html">500 Page</a></li>
                                    <li><a href="empty_page.html">Empty page</a></li>
                                    <li><a target="_blank" href="landing.html">Landing Page</a></li>
                                 </ul>
                              </li>
                              <li class="nav-parent">
                                 <a href="#"><i class="fa fa-picture-o"></i> <span class="nav-label">Gallery</span></a>
                                 <ul class="children">
                                    <li><a href="basic_gallery.html">Lightbox Gallery</a></li>
                                    <li><a href="carousel.html">Bootstrap Carousel</a></li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="grid_options.html"><i class="fa fa-laptop"></i> <span class="nav-label">Grid options</span></a>
                              </li>
                              <li>
                                 <a href="css_animation.html"><i class="fa fa-magic"></i> <span class="nav-label">CSS Animations </span></a>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <!-- END : Left sidebar -->
                  </li>
               </ul>
            </div>
         </nav>
         <div id="page-wrapper" class="gray-bg">
            <div>
               <nav class="navbar navbar-fixed-top white-bg show-menu-full" id="nav" role="navigation" style="margin-bottom: 0">
                  <div class="navbar-header">
                     <a class="navbar-minimalize minimalize-styl-2 btn" href="javascript:void(0)"><i class="fa fa-bars" style="font-size:27px;"></i> </a>
                     <form role="search" class="navbar-form-custom">
                        <div class="form-group">
                           <div class="kform inq">
                              <div>
                                 <label class="field append-icon">
                                 <input type="text" name="search" id="search" class="gui-input" placeholder="Type your search here...">
                                 <label for="search" class="field-icon">
                                 <i class="fa fa-search"></i>
                                 </label>
                                 </label>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
                  <ul class="nav navbar-top-links navbar-right">
                     <li class="dropdown hidden-xs">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i>  <span class="label label-danger">4</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                           <li>
                              <div class="dropdown-messages-box">
                                 <a href="profile.html" class="pull-left animated animated-short fadeInUp">
                                 <img alt="image" class="img-circle" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=128%C3%97128&w=128&h=128">
                                 </a>
                                 <div class="animated animated-short fadeInUp">
                                    <small class="pull-right">46h ago</small>
                                    <strong>Alden Richards</strong> started following <strong>Maine Mendoza</strong>. <br>
                                    <small class="text-muted">2 days ago at 6:58 pm - 08.06.2015</small>
                                 </div>
                              </div>
                           </li>
                           <li class="divider"></li>
                           <li>
                              <div class="dropdown-messages-box">
                                 <a href="profile.html" class="pull-left animated animated-short fadeInUp">
                                 <img alt="image" class="img-circle" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=128%C3%97128&w=128&h=128">
                                 </a>
                                 <div class="animated animated-short fadeInUp">
                                    <small class="pull-right text-navy">5h ago</small>
                                    <strong>Paulo Ballesteros</strong> started following <strong>Alden Richards</strong>. <br>
                                    <small class="text-muted">Yesterday 1:21 pm - 08.06.2015</small>
                                 </div>
                              </div>
                           </li>
                           <li class="divider"></li>
                           <li>
                              <div class="dropdown-messages-box">
                                 <a href="profile.html" class="pull-left animated animated-short fadeInUp">
                                 <img alt="image" class="img-circle" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=128%C3%97128&w=128&h=128">
                                 </a>
                                 <div class="animated animated-short fadeInUp">
                                    <small class="pull-right">23h ago</small>
                                    <strong>Maine Mendoza</strong> love <strong>Alden Richards</strong>. <br>
                                    <small class="text-muted">3 days ago at 2:30 am - 11.06.2015</small>
                                 </div>
                              </div>
                           </li>
                           <li class="divider"></li>
                           <li>
                              <div class="text-center link-block">
                                 <a href="mailbox.html" class="animated animated-short fadeInUp">
                                 <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                 </a>
                              </div>
                           </li>
                        </ul>
                     </li>
                     <li class="dropdown hidden-xs">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-danger">5</span>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                           <li>
                              <a href="mailbox.html" class="animated animated-short fadeInUp">
                                 <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                 </div>
                              </a>
                           </li>
                           <li class="divider"></li>
                           <li>
                              <a href="profile.html" class="animated animated-short fadeInUp">
                                 <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                 </div>
                              </a>
                           </li>
                           <li class="divider"></li>
                           <li>
                              <a href="grid_options.html" class="animated animated-short fadeInUp">
                                 <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                 </div>
                              </a>
                           </li>
                           <li class="divider"></li>
                           <li>
                              <div class="text-center link-block">
                                 <a href="notifications.html" class="animated animated-short fadeInUp">
                                 <strong>See All Alerts</strong>
                                 <i class="fa fa-angle-right"></i>
                                 </a>
                              </div>
                           </li>
                        </ul>
                     </li>
                     <li class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                        <span class="pl15"> Rhian Santos </span>
                        <span class="caret caret-tp"></span>
                        </a>
                        <ul class="dropdown-menu animated m-t-xs">
                           <li><a href="profile.html" class="animated animated-short fadeInUp"><i class="fa fa-user"></i> Profile</a></li>
                           <li><a href="contacts.html" class="animated animated-short fadeInUp"><i class="fa fa-group"></i> Contacts</a></li>
                           <li><a href="mailbox.html" class="animated animated-short fadeInUp"><i class="fa fa-inbox"></i> Mailbox</a></li>
                           <li class="divider"></li>
                           <li><a href="login.html" class="animated animated-short fadeInUp"><i class="fa fa-sign-out"></i> Logout</a></li>
                        </ul>
                     </li>
                  </ul>
               </nav>
            </div>
            <div style="clear: both; height: 61px;"></div>
            <div class="wrapper wrapper-content animated fadeInRight">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="inqbox float-e-margins">
                        <div class="inqbox-content">
                           <h2>Data Tables</h2>
                           <ol class="breadcrumb">
                              <li>
                                 <a href="index.html">Home</a>
                              </li>
                              <li>
                                 <a>Tables</a>
                              </li>
                              <li class="active">
                                 <strong>Data Tables</strong>
                              </li>
                           </ol>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-12">
                     <div class="inqbox float-e-margins">
                        <div class="inqbox-title border-top-danger">
                           <h5>Basic Data Tables example with responsive plugin</h5>
                           <div class="inqbox-tools">
                              <a class="collapse-link">
                              <i class="fa fa-chevron-up"></i>
                              </a>
                              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                              <i class="fa fa-wrench"></i>
                              </a>
                              <ul class="dropdown-menu dropdown-user">
                                 <li><a href="#">Config option 1</a>
                                 </li>
                                 <li><a href="#">Config option 2</a>
                                 </li>
                              </ul>
                              <a class="close-link">
                              <i class="fa fa-times"></i>
                              </a>
                           </div>
                        </div>
                        <div class="inqbox-content">
                           <div class="table-responsive">
                              <table class="table table-striped table-bordered table-hover dataTables-example" >
                                 <thead>
                                    <tr>
                                       <th>Rendering engine</th>
                                       <th>Browser</th>
                                       <th>Platform(s)</th>
                                       <th>Engine version</th>
                                       <th>CSS grade</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr class="gradeX">
                                       <td>Trident</td>
                                       <td>Internet
                                          Explorer 4.0
                                       </td>
                                       <td>Win 95+</td>
                                       <td class="center">4</td>
                                       <td class="center">X</td>
                                    </tr>
                                    <tr class="gradeC">
                                       <td>Trident</td>
                                       <td>Internet
                                          Explorer 5.0
                                       </td>
                                       <td>Win 95+</td>
                                       <td class="center">5</td>
                                       <td class="center">C</td>
                                    </tr>
                                    <tr class="gradeA">
                                       <td>Trident</td>
                                       <td>Internet
                                          Explorer 5.5
                                       </td>
                                       <td>Win 95+</td>
                                       <td class="center">5.5</td>
                                       <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeA">
                                       <td>Trident</td>
                                       <td>Internet
                                          Explorer 6
                                       </td>
                                       <td>Win 98+</td>
                                       <td class="center">6</td>
                                       <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeA">
                                       <td>Trident</td>
                                       <td>Internet Explorer 7</td>
                                       <td>Win XP SP2+</td>
                                       <td class="center">7</td>
                                       <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeA">
                                       <td>Trident</td>
                                       <td>AOL browser (AOL desktop)</td>
                                       <td>Win XP</td>
                                       <td class="center">6</td>
                                       <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeA">
                                       <td>Gecko</td>
                                       <td>Firefox 1.0</td>
                                       <td>Win 98+ / OSX.2+</td>
                                       <td class="center">1.7</td>
                                       <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeA">
                                       <td>Gecko</td>
                                       <td>Firefox 1.5</td>
                                       <td>Win 98+ / OSX.2+</td>
                                       <td class="center">1.8</td>
                                       <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeA">
                                       <td>Gecko</td>
                                       <td>Firefox 2.0</td>
                                       <td>Win 98+ / OSX.2+</td>
                                       <td class="center">1.8</td>
                                       <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeA">
                                       <td>Gecko</td>
                                       <td>Firefox 3.0</td>
                                       <td>Win 2k+ / OSX.3+</td>
                                       <td class="center">1.9</td>
                                       <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeA">
                                       <td>Gecko</td>
                                       <td>Camino 1.0</td>
                                       <td>OSX.2+</td>
                                       <td class="center">1.8</td>
                                       <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeA">
                                       <td>Gecko</td>
                                       <td>Camino 1.5</td>
                                       <td>OSX.3+</td>
                                       <td class="center">1.8</td>
                                       <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeA">
                                       <td>Gecko</td>
                                       <td>Netscape 7.2</td>
                                       <td>Win 95+ / Mac OS 8.6-9.2</td>
                                       <td class="center">1.7</td>
                                       <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeA">
                                       <td>Gecko</td>
                                       <td>Netscape Browser 8</td>
                                       <td>Win 98SE+</td>
                                       <td class="center">1.7</td>
                                       <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeA">
                                       <td>Gecko</td>
                                       <td>Netscape Navigator 9</td>
                                       <td>Win 98+ / OSX.2+</td>
                                       <td class="center">1.8</td>
                                       <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeA">
                                       <td>Gecko</td>
                                       <td>Mozilla 1.0</td>
                                       <td>Win 95+ / OSX.1+</td>
                                       <td class="center">1</td>
                                       <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeA">
                                       <td>Gecko</td>
                                       <td>Mozilla 1.1</td>
                                       <td>Win 95+ / OSX.1+</td>
                                       <td class="center">1.1</td>
                                       <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeA">
                                       <td>Gecko</td>
                                       <td>Mozilla 1.2</td>
                                       <td>Win 95+ / OSX.1+</td>
                                       <td class="center">1.2</td>
                                       <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeA">
                                       <td>Gecko</td>
                                       <td>Mozilla 1.3</td>
                                       <td>Win 95+ / OSX.1+</td>
                                       <td class="center">1.3</td>
                                       <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeA">
                                       <td>Gecko</td>
                                       <td>Mozilla 1.4</td>
                                       <td>Win 95+ / OSX.1+</td>
                                       <td class="center">1.4</td>
                                       <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeA">
                                       <td>Gecko</td>
                                       <td>Mozilla 1.5</td>
                                       <td>Win 95+ / OSX.1+</td>
                                       <td class="center">1.5</td>
                                       <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeA">
                                       <td>Gecko</td>
                                       <td>Mozilla 1.6</td>
                                       <td>Win 95+ / OSX.1+</td>
                                       <td class="center">1.6</td>
                                       <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeA">
                                       <td>Gecko</td>
                                       <td>Mozilla 1.7</td>
                                       <td>Win 98+ / OSX.1+</td>
                                       <td class="center">1.7</td>
                                       <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeA">
                                       <td>Gecko</td>
                                       <td>Mozilla 1.8</td>
                                       <td>Win 98+ / OSX.1+</td>
                                       <td class="center">1.8</td>
                                       <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeA">
                                       <td>Gecko</td>
                                       <td>Seamonkey 1.1</td>
                                       <td>Win 98+ / OSX.2+</td>
                                       <td class="center">1.8</td>
                                       <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeA">
                                       <td>Gecko</td>
                                       <td>Epiphany 2.20</td>
                                       <td>Gnome</td>
                                       <td class="center">1.8</td>
                                       <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeA">
                                       <td>Webkit</td>
                                       <td>Safari 1.2</td>
                                       <td>OSX.3</td>
                                       <td class="center">125.5</td>
                                       <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeA">
                                       <td>Webkit</td>
                                       <td>Safari 1.3</td>
                                       <td>OSX.3</td>
                                       <td class="center">312.8</td>
                                       <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeA">
                                       <td>Webkit</td>
                                       <td>Safari 2.0</td>
                                       <td>OSX.4+</td>
                                       <td class="center">419.3</td>
                                       <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeA">
                                       <td>Webkit</td>
                                       <td>Safari 3.0</td>
                                       <td>OSX.4+</td>
                                       <td class="center">522.1</td>
                                       <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeA">
                                       <td>Webkit</td>
                                       <td>OmniWeb 5.5</td>
                                       <td>OSX.4+</td>
                                       <td class="center">420</td>
                                       <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeA">
                                       <td>Webkit</td>
                                       <td>iPod Touch / iPhone</td>
                                       <td>iPod</td>
                                       <td class="center">420.1</td>
                                       <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeA">
                                       <td>Webkit</td>
                                       <td>S60</td>
                                       <td>S60</td>
                                       <td class="center">413</td>
                                       <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeA">
                                       <td>Presto</td>
                                       <td>Opera 7.0</td>
                                       <td>Win 95+ / OSX.1+</td>
                                       <td class="center">-</td>
                                       <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeA">
                                       <td>Presto</td>
                                       <td>Opera 7.5</td>
                                       <td>Win 95+ / OSX.2+</td>
                                       <td class="center">-</td>
                                       <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeA">
                                       <td>Presto</td>
                                       <td>Opera 8.0</td>
                                       <td>Win 95+ / OSX.2+</td>
                                       <td class="center">-</td>
                                       <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeA">
                                       <td>Presto</td>
                                       <td>Opera 8.5</td>
                                       <td>Win 95+ / OSX.2+</td>
                                       <td class="center">-</td>
                                       <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeA">
                                       <td>Presto</td>
                                       <td>Opera 9.0</td>
                                       <td>Win 95+ / OSX.3+</td>
                                       <td class="center">-</td>
                                       <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeA">
                                       <td>Presto</td>
                                       <td>Opera 9.2</td>
                                       <td>Win 88+ / OSX.3+</td>
                                       <td class="center">-</td>
                                       <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeA">
                                       <td>Presto</td>
                                       <td>Opera 9.5</td>
                                       <td>Win 88+ / OSX.3+</td>
                                       <td class="center">-</td>
                                       <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeA">
                                       <td>Presto</td>
                                       <td>Opera for Wii</td>
                                       <td>Wii</td>
                                       <td class="center">-</td>
                                       <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeA">
                                       <td>Presto</td>
                                       <td>Nokia N800</td>
                                       <td>N800</td>
                                       <td class="center">-</td>
                                       <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeA">
                                       <td>Presto</td>
                                       <td>Nintendo DS browser</td>
                                       <td>Nintendo DS</td>
                                       <td class="center">8.5</td>
                                       <td class="center">C/A<sup>1</sup></td>
                                    </tr>
                                    <tr class="gradeC">
                                       <td>KHTML</td>
                                       <td>Konqureror 3.1</td>
                                       <td>KDE 3.1</td>
                                       <td class="center">3.1</td>
                                       <td class="center">C</td>
                                    </tr>
                                    <tr class="gradeA">
                                       <td>KHTML</td>
                                       <td>Konqureror 3.3</td>
                                       <td>KDE 3.3</td>
                                       <td class="center">3.3</td>
                                       <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeA">
                                       <td>KHTML</td>
                                       <td>Konqureror 3.5</td>
                                       <td>KDE 3.5</td>
                                       <td class="center">3.5</td>
                                       <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeX">
                                       <td>Tasman</td>
                                       <td>Internet Explorer 4.5</td>
                                       <td>Mac OS 8-9</td>
                                       <td class="center">-</td>
                                       <td class="center">X</td>
                                    </tr>
                                    <tr class="gradeC">
                                       <td>Tasman</td>
                                       <td>Internet Explorer 5.1</td>
                                       <td>Mac OS 7.6-9</td>
                                       <td class="center">1</td>
                                       <td class="center">C</td>
                                    </tr>
                                    <tr class="gradeC">
                                       <td>Tasman</td>
                                       <td>Internet Explorer 5.2</td>
                                       <td>Mac OS 8-X</td>
                                       <td class="center">1</td>
                                       <td class="center">C</td>
                                    </tr>
                                    <tr class="gradeA">
                                       <td>Misc</td>
                                       <td>NetFront 3.1</td>
                                       <td>Embedded devices</td>
                                       <td class="center">-</td>
                                       <td class="center">C</td>
                                    </tr>
                                    <tr class="gradeA">
                                       <td>Misc</td>
                                       <td>NetFront 3.4</td>
                                       <td>Embedded devices</td>
                                       <td class="center">-</td>
                                       <td class="center">A</td>
                                    </tr>
                                    <tr class="gradeX">
                                       <td>Misc</td>
                                       <td>Dillo 0.8</td>
                                       <td>Embedded devices</td>
                                       <td class="center">-</td>
                                       <td class="center">X</td>
                                    </tr>
                                    <tr class="gradeX">
                                       <td>Misc</td>
                                       <td>Links</td>
                                       <td>Text only</td>
                                       <td class="center">-</td>
                                       <td class="center">X</td>
                                    </tr>
                                    <tr class="gradeX">
                                       <td>Misc</td>
                                       <td>Lynx</td>
                                       <td>Text only</td>
                                       <td class="center">-</td>
                                       <td class="center">X</td>
                                    </tr>
                                    <tr class="gradeC">
                                       <td>Misc</td>
                                       <td>IE Mobile</td>
                                       <td>Windows Mobile 6</td>
                                       <td class="center">-</td>
                                       <td class="center">C</td>
                                    </tr>
                                    <tr class="gradeC">
                                       <td>Misc</td>
                                       <td>PSP browser</td>
                                       <td>PSP</td>
                                       <td class="center">-</td>
                                       <td class="center">C</td>
                                    </tr>
                                    <tr class="gradeU">
                                       <td>Other browsers</td>
                                       <td>All others</td>
                                       <td>-</td>
                                       <td class="center">-</td>
                                       <td class="center">U</td>
                                    </tr>
                                 </tbody>
                                 <tfoot>
                                    <tr>
                                       <th>Rendering engine</th>
                                       <th>Browser</th>
                                       <th>Platform(s)</th>
                                       <th>Engine version</th>
                                       <th>CSS grade</th>
                                    </tr>
                                 </tfoot>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-12">
                     <div class="inqbox float-e-margins">
                        <div class="inqbox-title border-top-primary">
                           <h5>Editable Table in- combination with jEditable</h5>
                           <div class="inqbox-tools">
                              <a class="collapse-link">
                              <i class="fa fa-chevron-up"></i>
                              </a>
                              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                              <i class="fa fa-wrench"></i>
                              </a>
                              <ul class="dropdown-menu dropdown-user">
                                 <li><a href="#">Config option 1</a>
                                 </li>
                                 <li><a href="#">Config option 2</a>
                                 </li>
                              </ul>
                              <a class="close-link">
                              <i class="fa fa-times"></i>
                              </a>
                           </div>
                        </div>
                        <div class="inqbox-content">
                           <div class="">
                              <a onclick="fnClickAddRow();" href="javascript:void(0);" class="btn btn-primary ">Add a new row</a>
                           </div>
                           <table class="table table-striped table-bordered table-hover " id="editable" >
                              <thead>
                                 <tr>
                                    <th>Rendering engine</th>
                                    <th>Browser</th>
                                    <th>Platform(s)</th>
                                    <th>Engine version</th>
                                    <th>CSS grade</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr class="gradeX">
                                    <td>Trident</td>
                                    <td>Internet
                                       Explorer 4.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td class="center">4</td>
                                    <td class="center">X</td>
                                 </tr>
                                 <tr class="gradeC">
                                    <td>Trident</td>
                                    <td>Internet
                                       Explorer 5.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td class="center">5</td>
                                    <td class="center">C</td>
                                 </tr>
                                 <tr class="gradeA">
                                    <td>Trident</td>
                                    <td>Internet
                                       Explorer 5.5
                                    </td>
                                    <td>Win 95+</td>
                                    <td class="center">5.5</td>
                                    <td class="center">A</td>
                                 </tr>
                                 <tr class="gradeA">
                                    <td>Trident</td>
                                    <td>Internet
                                       Explorer 6
                                    </td>
                                    <td>Win 98+</td>
                                    <td class="center">6</td>
                                    <td class="center">A</td>
                                 </tr>
                                 <tr class="gradeA">
                                    <td>Trident</td>
                                    <td>Internet Explorer 7</td>
                                    <td>Win XP SP2+</td>
                                    <td class="center">7</td>
                                    <td class="center">A</td>
                                 </tr>
                                 <tr class="gradeA">
                                    <td>Trident</td>
                                    <td>AOL browser (AOL desktop)</td>
                                    <td>Win XP</td>
                                    <td class="center">6</td>
                                    <td class="center">A</td>
                                 </tr>
                                 <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Firefox 1.0</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td class="center">1.7</td>
                                    <td class="center">A</td>
                                 </tr>
                                 <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Firefox 1.5</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td class="center">1.8</td>
                                    <td class="center">A</td>
                                 </tr>
                                 <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Firefox 2.0</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td class="center">1.8</td>
                                    <td class="center">A</td>
                                 </tr>
                                 <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Firefox 3.0</td>
                                    <td>Win 2k+ / OSX.3+</td>
                                    <td class="center">1.9</td>
                                    <td class="center">A</td>
                                 </tr>
                                 <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Camino 1.0</td>
                                    <td>OSX.2+</td>
                                    <td class="center">1.8</td>
                                    <td class="center">A</td>
                                 </tr>
                                 <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Camino 1.5</td>
                                    <td>OSX.3+</td>
                                    <td class="center">1.8</td>
                                    <td class="center">A</td>
                                 </tr>
                                 <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Netscape 7.2</td>
                                    <td>Win 95+ / Mac OS 8.6-9.2</td>
                                    <td class="center">1.7</td>
                                    <td class="center">A</td>
                                 </tr>
                                 <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Netscape Browser 8</td>
                                    <td>Win 98SE+</td>
                                    <td class="center">1.7</td>
                                    <td class="center">A</td>
                                 </tr>
                                 <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Netscape Navigator 9</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td class="center">1.8</td>
                                    <td class="center">A</td>
                                 </tr>
                                 <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Mozilla 1.0</td>
                                    <td>Win 95+ / OSX.1+</td>
                                    <td class="center">1</td>
                                    <td class="center">A</td>
                                 </tr>
                                 <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Mozilla 1.1</td>
                                    <td>Win 95+ / OSX.1+</td>
                                    <td class="center">1.1</td>
                                    <td class="center">A</td>
                                 </tr>
                                 <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Mozilla 1.2</td>
                                    <td>Win 95+ / OSX.1+</td>
                                    <td class="center">1.2</td>
                                    <td class="center">A</td>
                                 </tr>
                                 <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Mozilla 1.3</td>
                                    <td>Win 95+ / OSX.1+</td>
                                    <td class="center">1.3</td>
                                    <td class="center">A</td>
                                 </tr>
                                 <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Mozilla 1.4</td>
                                    <td>Win 95+ / OSX.1+</td>
                                    <td class="center">1.4</td>
                                    <td class="center">A</td>
                                 </tr>
                                 <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Mozilla 1.5</td>
                                    <td>Win 95+ / OSX.1+</td>
                                    <td class="center">1.5</td>
                                    <td class="center">A</td>
                                 </tr>
                                 <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Mozilla 1.6</td>
                                    <td>Win 95+ / OSX.1+</td>
                                    <td class="center">1.6</td>
                                    <td class="center">A</td>
                                 </tr>
                                 <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Mozilla 1.7</td>
                                    <td>Win 98+ / OSX.1+</td>
                                    <td class="center">1.7</td>
                                    <td class="center">A</td>
                                 </tr>
                                 <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Mozilla 1.8</td>
                                    <td>Win 98+ / OSX.1+</td>
                                    <td class="center">1.8</td>
                                    <td class="center">A</td>
                                 </tr>
                                 <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Seamonkey 1.1</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td class="center">1.8</td>
                                    <td class="center">A</td>
                                 </tr>
                                 <tr class="gradeA">
                                    <td>Gecko</td>
                                    <td>Epiphany 2.20</td>
                                    <td>Gnome</td>
                                    <td class="center">1.8</td>
                                    <td class="center">A</td>
                                 </tr>
                                 <tr class="gradeA">
                                    <td>Webkit</td>
                                    <td>Safari 1.2</td>
                                    <td>OSX.3</td>
                                    <td class="center">125.5</td>
                                    <td class="center">A</td>
                                 </tr>
                                 <tr class="gradeA">
                                    <td>Webkit</td>
                                    <td>Safari 1.3</td>
                                    <td>OSX.3</td>
                                    <td class="center">312.8</td>
                                    <td class="center">A</td>
                                 </tr>
                                 <tr class="gradeA">
                                    <td>Webkit</td>
                                    <td>Safari 2.0</td>
                                    <td>OSX.4+</td>
                                    <td class="center">419.3</td>
                                    <td class="center">A</td>
                                 </tr>
                                 <tr class="gradeA">
                                    <td>Webkit</td>
                                    <td>Safari 3.0</td>
                                    <td>OSX.4+</td>
                                    <td class="center">522.1</td>
                                    <td class="center">A</td>
                                 </tr>
                                 <tr class="gradeA">
                                    <td>Webkit</td>
                                    <td>OmniWeb 5.5</td>
                                    <td>OSX.4+</td>
                                    <td class="center">420</td>
                                    <td class="center">A</td>
                                 </tr>
                                 <tr class="gradeA">
                                    <td>Webkit</td>
                                    <td>iPod Touch / iPhone</td>
                                    <td>iPod</td>
                                    <td class="center">420.1</td>
                                    <td class="center">A</td>
                                 </tr>
                                 <tr class="gradeA">
                                    <td>Webkit</td>
                                    <td>S60</td>
                                    <td>S60</td>
                                    <td class="center">413</td>
                                    <td class="center">A</td>
                                 </tr>
                                 <tr class="gradeA">
                                    <td>Presto</td>
                                    <td>Opera 7.0</td>
                                    <td>Win 95+ / OSX.1+</td>
                                    <td class="center">-</td>
                                    <td class="center">A</td>
                                 </tr>
                                 <tr class="gradeA">
                                    <td>Presto</td>
                                    <td>Opera 7.5</td>
                                    <td>Win 95+ / OSX.2+</td>
                                    <td class="center">-</td>
                                    <td class="center">A</td>
                                 </tr>
                                 <tr class="gradeA">
                                    <td>Presto</td>
                                    <td>Opera 8.0</td>
                                    <td>Win 95+ / OSX.2+</td>
                                    <td class="center">-</td>
                                    <td class="center">A</td>
                                 </tr>
                                 <tr class="gradeA">
                                    <td>Presto</td>
                                    <td>Opera 8.5</td>
                                    <td>Win 95+ / OSX.2+</td>
                                    <td class="center">-</td>
                                    <td class="center">A</td>
                                 </tr>
                                 <tr class="gradeA">
                                    <td>Presto</td>
                                    <td>Opera 9.0</td>
                                    <td>Win 95+ / OSX.3+</td>
                                    <td class="center">-</td>
                                    <td class="center">A</td>
                                 </tr>
                                 <tr class="gradeA">
                                    <td>Presto</td>
                                    <td>Opera 9.2</td>
                                    <td>Win 88+ / OSX.3+</td>
                                    <td class="center">-</td>
                                    <td class="center">A</td>
                                 </tr>
                                 <tr class="gradeA">
                                    <td>Presto</td>
                                    <td>Opera 9.5</td>
                                    <td>Win 88+ / OSX.3+</td>
                                    <td class="center">-</td>
                                    <td class="center">A</td>
                                 </tr>
                                 <tr class="gradeA">
                                    <td>Presto</td>
                                    <td>Opera for Wii</td>
                                    <td>Wii</td>
                                    <td class="center">-</td>
                                    <td class="center">A</td>
                                 </tr>
                                 <tr class="gradeA">
                                    <td>Presto</td>
                                    <td>Nokia N800</td>
                                    <td>N800</td>
                                    <td class="center">-</td>
                                    <td class="center">A</td>
                                 </tr>
                                 <tr class="gradeA">
                                    <td>Presto</td>
                                    <td>Nintendo DS browser</td>
                                    <td>Nintendo DS</td>
                                    <td class="center">8.5</td>
                                    <td class="center">C/A<sup>1</sup></td>
                                 </tr>
                                 <tr class="gradeC">
                                    <td>KHTML</td>
                                    <td>Konqureror 3.1</td>
                                    <td>KDE 3.1</td>
                                    <td class="center">3.1</td>
                                    <td class="center">C</td>
                                 </tr>
                                 <tr class="gradeA">
                                    <td>KHTML</td>
                                    <td>Konqureror 3.3</td>
                                    <td>KDE 3.3</td>
                                    <td class="center">3.3</td>
                                    <td class="center">A</td>
                                 </tr>
                                 <tr class="gradeA">
                                    <td>KHTML</td>
                                    <td>Konqureror 3.5</td>
                                    <td>KDE 3.5</td>
                                    <td class="center">3.5</td>
                                    <td class="center">A</td>
                                 </tr>
                                 <tr class="gradeX">
                                    <td>Tasman</td>
                                    <td>Internet Explorer 4.5</td>
                                    <td>Mac OS 8-9</td>
                                    <td class="center">-</td>
                                    <td class="center">X</td>
                                 </tr>
                                 <tr class="gradeC">
                                    <td>Tasman</td>
                                    <td>Internet Explorer 5.1</td>
                                    <td>Mac OS 7.6-9</td>
                                    <td class="center">1</td>
                                    <td class="center">C</td>
                                 </tr>
                                 <tr class="gradeC">
                                    <td>Tasman</td>
                                    <td>Internet Explorer 5.2</td>
                                    <td>Mac OS 8-X</td>
                                    <td class="center">1</td>
                                    <td class="center">C</td>
                                 </tr>
                                 <tr class="gradeA">
                                    <td>Misc</td>
                                    <td>NetFront 3.1</td>
                                    <td>Embedded devices</td>
                                    <td class="center">-</td>
                                    <td class="center">C</td>
                                 </tr>
                                 <tr class="gradeA">
                                    <td>Misc</td>
                                    <td>NetFront 3.4</td>
                                    <td>Embedded devices</td>
                                    <td class="center">-</td>
                                    <td class="center">A</td>
                                 </tr>
                                 <tr class="gradeX">
                                    <td>Misc</td>
                                    <td>Dillo 0.8</td>
                                    <td>Embedded devices</td>
                                    <td class="center">-</td>
                                    <td class="center">X</td>
                                 </tr>
                                 <tr class="gradeX">
                                    <td>Misc</td>
                                    <td>Links</td>
                                    <td>Text only</td>
                                    <td class="center">-</td>
                                    <td class="center">X</td>
                                 </tr>
                                 <tr class="gradeX">
                                    <td>Misc</td>
                                    <td>Lynx</td>
                                    <td>Text only</td>
                                    <td class="center">-</td>
                                    <td class="center">X</td>
                                 </tr>
                                 <tr class="gradeC">
                                    <td>Misc</td>
                                    <td>IE Mobile</td>
                                    <td>Windows Mobile 6</td>
                                    <td class="center">-</td>
                                    <td class="center">C</td>
                                 </tr>
                                 <tr class="gradeC">
                                    <td>Misc</td>
                                    <td>PSP browser</td>
                                    <td>PSP</td>
                                    <td class="center">-</td>
                                    <td class="center">C</td>
                                 </tr>
                                 <tr class="gradeU">
                                    <td>Other browsers</td>
                                    <td>All others</td>
                                    <td>-</td>
                                    <td class="center">-</td>
                                    <td class="center">U</td>
                                 </tr>
                              </tbody>
                              <tfoot>
                                 <tr>
                                    <th>Rendering engine</th>
                                    <th>Browser</th>
                                    <th>Platform(s)</th>
                                    <th>Engine version</th>
                                    <th>CSS grade</th>
                                 </tr>
                              </tfoot>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="footer">
               <div class="pull-right">
                  10GB of <strong>250GB</strong> Free.
               </div>
               <div>
                  <strong>Copyright</strong> Your Company &copy; 2015-2016
               </div>
            </div>
         </div>
      </div>
      <!-- Mainly scripts -->
      <script src="js/jquery-2.1.1.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
      <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
      <!-- Custom and plugin javascript -->
      <script src="js/main.js"></script>
      <script src="js/plugins/pace/pace.min.js"></script>
      <script src="js/plugins/jeditable/jquery.jeditable.js"></script>
      <!-- Data Tables -->
      <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
      <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>
      <script src="js/plugins/dataTables/dataTables.responsive.js"></script>
      <script src="js/plugins/dataTables/dataTables.tableTools.min.js"></script>
      <!-- Page-Level Scripts -->
      <script type="text/javascript">
         $(document).ready(function () {
             "use strict";
             
             $('.dataTables-example').dataTable({
                 responsive: true,
                 "dom": 'T<"clear">lfrtip',
                 "tableTools": {
                     "sSwfPath": "js/plugins/dataTables/swf/copy_csv_xls_pdf.swf"
                 }
             });
         
             /* Init DataTables */
             var oTable = $('#editable').dataTable();
         
             /* Apply the jEditable handlers to the table */
             oTable.$('td').editable('example_ajax.html', {
                 "callback": function (sValue, y) {
                     var aPos = oTable.fnGetPosition(this);
                     oTable.fnUpdate(sValue, aPos[0], aPos[1]);
                 },
                 "submitdata": function (value, settings) {
                     return {
                         "row_id": this.parentNode.getAttribute('id'),
                         "column": oTable.fnGetPosition(this)[2]
                     };
                 },
                 "width": "90%",
                 "height": "100%"
             });
         
         
         });
         
         function fnClickAddRow() {
             $('#editable').dataTable().fnAddData([
                 "Custom row",
                 "New row",
                 "New row",
                 "New row",
                 "New row"]);
         
         }
      </script>
      <style>
          body.DTTT_Print {
              background: #fff;
          }
          .DTTT_Print #page-wrapper {
              margin: 0;
              background:#fff;
          }
          button.DTTT_button, div.DTTT_button, a.DTTT_button {
              border: 1px solid #e7eaec;
              background: #fff;
              color: #676a6c;
              box-shadow: none;
              padding: 6px 8px;
          }
          button.DTTT_button:hover, div.DTTT_button:hover, a.DTTT_button:hover {
              border: 1px solid #d2d2d2;
              background: #fff;
              color: #676a6c;
              box-shadow: none;
              padding: 6px 8px;
          }
          .dataTables_filter label {
              margin-right: 5px;
          }
      </style>
   </body>
</html>
