<!DOCTYPE html>
<!-- saved from url=(0014)about:internet -->
<html style="min-height: 558px;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


        <title>Student</title>

        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">



        <link rel="stylesheet" href="{{asset('')}}Student_files/pace.css">

        <script type="text/javascript" src="{{asset('')}}Student_files/jquery.min.js.download"></script>
        <!-- <script type="text/javascript" src="http://students.standardtechbd.com/assets/slimScroll/jquery.slimscroll.min.js"></script> -->

        <script type="text/javascript" src="{{asset('')}}Student_files/toastr.min.js.download"></script>


        <link href="{{asset('')}}Student_files/bootstrap.min.css" rel="stylesheet">

        <link href="{{asset('')}}Student_files/font-awesome.css" rel="stylesheet">

        <link href="{{asset('')}}Student_files/icomoon.css" rel="stylesheet">

        <link href="{{asset('')}}Student_files/ini-icon.css" rel="stylesheet">
        <link href="{{asset('')}}Student_files/all.min.css" rel="stylesheet">

        <link href="{{asset('')}}Student_files/dataTables.bootstrap.css" rel="stylesheet">

        <link id="headStyleCSSLink" href="{{asset('')}}Student_files/style.css" rel="stylesheet">

        <link href="{{asset('')}}Student_files/hidetable.css" rel="stylesheet">

        <link id="headInilabsCSSLink" href="{{asset('')}}Student_files/inilabs.css" rel="stylesheet">

        <link href="{{asset('')}}Student_files/responsive.css" rel="stylesheet">

        <link href="{{asset('')}}Student_files/toastr.min.css" rel="stylesheet">

        <link href="{{asset('')}}Student_files/mailandmedia.css" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('')}}Student_files/buttons.dataTables.min.css">

        <link rel="stylesheet" href="{{asset('')}}Student_files/combined.css">
        <link rel="stylesheet" href="{{asset('')}}Student_files/ajaxloder.css">

        <link rel="stylesheet" href="{{asset('')}}Student_files/select2.css">
        <link rel="stylesheet" href="{{asset('')}}Student_files/select2-bootstrap.css">
        <script type="text/javascript" src="{{asset('')}}Student_files/select2.js.download"></script>

        <script type="text/javascript">
$(window).load(function () {
    $(".se-pre-con").fadeOut("slow");
    ;
});
        </script>
    </head>
    <body class="skin-blue fuelux  pace-done" style="min-height: 558px;"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
                <div class="pace-progress-inner"></div>
            </div>
            <div class="pace-activity"></div></div>
        <div class="se-pre-con" style="display: none;"></div>
        <div id="loading">
            <img src="./Student_files/loader.gif" width="150" height="150">
        </div>
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="http://students.standardtechbd.com/dashboard/index" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Satkhira Med..            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="http://students.standardtechbd.com/student#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>


                <div class="navbar-right">
                    <ul class="nav navbar-nav">





                        <!-- Site Start -->
                        <li class="dropdown notifications-menu">
                            <a target="_blank" href="http://students.standardtechbd.com/frontend/page" class="dropdown-toggle" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Visit Site">
                                <i class="fa fa-globe"></i>
                            </a>
                        </li>
                        <!-- Site Close -->


                        <!-- School Year: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu"><a href="http://students.standardtechbd.com/student#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-calendar-plus-o"></i><span class="label label-success"><lable class="alert-image">1</lable></span></a><ul class="dropdown-menu"><li class="header">You have 1 year</li><li><div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 200px;"><ul class="menu" style="overflow: hidden; width: 100%; height: 200px;"><li><a href="http://students.standardtechbd.com/schoolyear/toggleschoolyear/1"><h4>2018-2019 - (Default) <i class="glyphicon glyphicon-ok"></i></h4></a></li></ul><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 3px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 0px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 0px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div></li></ul></li>

                        <li class="dropdown messages-menu">
                            <a href="http://students.standardtechbd.com/student#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                            </a>
                        </li>


                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="http://students.standardtechbd.com/student#" class="dropdown-toggle" data-toggle="dropdown">
                                <img class="language-img" src="./Student_files/english.png"> 
                                <span class="label label-warning">15</span>
                            </a>
                            <ul class="dropdown-menu" style="height:105px;">
                                <li class="header"> Language</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 200px;"><ul class="menu" style="overflow: hidden; width: 100%; height: 200px;">


                                            <li class="language" id="bengali">
                                                <a href="http://students.standardtechbd.com/language/index/bengali">
                                                    <div class="pull-left">
                                                        <img src="./Student_files/bengali.png">
                                                    </div>
                                                    <h4>
                                                        Bengali
                                                    </h4>
                                                </a>
                                            </li>



                                            <li class="language" id="english">
                                                <a href="http://students.standardtechbd.com/language/index/english">
                                                    <div class="pull-left">
                                                        <img src="./Student_files/english.png">
                                                    </div>
                                                    <h4>
                                                        English
                                                        <i class="glyphicon glyphicon-ok"></i>                                                </h4>
                                                </a>
                                            </li>
                                            <!--
                                            <li class="language" id="french">
                                                <a href="http://students.standardtechbd.com/language/index/french">
                                                    <div class="pull-left">
                                                        <img src="http://students.standardtechbd.com/uploads/language_image/french.png"/>
                                                    </div>
                                                    <h4>
                                                        French
                                                                                                        </h4>
                                                </a>
                                            </li>
    
                                            <li class="language" id="german">
                                                <a href="http://students.standardtechbd.com/language/index/german">
                                                    <div class="pull-left">
                                                        <img src="http://students.standardtechbd.com/uploads/language_image/german.png"/>
                                                    </div>
                                                    <h4>
                                                        German
                                                                                                        </h4>
                                                </a>
                                            </li>
    
                                            <li class="language" id="hindi">
                                                <a href="http://students.standardtechbd.com/language/index/hindi">
                                                    <div class="pull-left">
                                                        <img src="http://students.standardtechbd.com/uploads/language_image/hindi.png"/>
                                                    </div>
                                                    <h4>
                                                        Hindi
                                                                                                        </h4>
                                                </a>
                                            </li>
    
                                            <li class="language" id="indonesian">
                                                <a href="http://students.standardtechbd.com/language/index/indonesian">
                                                    <div class="pull-left">
                                                        <img src="http://students.standardtechbd.com/uploads/language_image/indonesian.png"/>
                                                    </div>
                                                    <h4>
                                                        Indonesian
                                                                                                        </h4>
                                                </a>
                                            </li>
    
                                            <li class="language" id="italian">
                                                <a href="http://students.standardtechbd.com/language/index/italian">
                                                    <div class="pull-left">
                                                        <img src="http://students.standardtechbd.com/uploads/language_image/italian.png"/>
                                                    </div>
                                                    <h4>
                                                        Italian
                                                                                                        </h4>
                                                </a>
                                            </li>
    
                                            <li class="language" id="portuguese">
                                                <a href="http://students.standardtechbd.com/language/index/portuguese">
                                                    <div class="pull-left">
                                                        <img src="http://students.standardtechbd.com/uploads/language_image/portuguese.png"/>
                                                    </div>
                                                    <h4>
                                                        Portuguese
                                                                                                        </h4>
                                                </a>
                                            </li>
    
                                            <li class="language" id="romanian">
                                                <a href="http://students.standardtechbd.com/language/index/romanian">
                                                    <div class="pull-left">
                                                        <img src="http://students.standardtechbd.com/uploads/language_image/romanian.png"/>
                                                    </div>
                                                    <h4>
                                                        Romanian
                                                                                                        </h4>
                                                </a>
                                            </li>
    
                                            <li class="language" id="russian">
                                                <a href="http://students.standardtechbd.com/language/index/russian">
                                                    <div class="pull-left">
                                                        <img src="http://students.standardtechbd.com/uploads/language_image/russian.png"/>
                                                    </div>
                                                    <h4>
                                                        Russian
                                                                                                        </h4>
                                                </a>
                                            </li>
    
                                            <li class="language" id="spanish">
                                                <a href="http://students.standardtechbd.com/language/index/spanish">
                                                    <div class="pull-left">
                                                        <img src="http://students.standardtechbd.com/uploads/language_image/spanish.png"/>
                                                    </div>
                                                    <h4>
                                                        Spanish
                                                                                                        </h4>
                                                </a>
                                            </li>
    
                                            <li class="language" id="thai">
                                                <a href="http://students.standardtechbd.com/language/index/thai">
                                                    <div class="pull-left">
                                                        <img src="http://students.standardtechbd.com/uploads/language_image/thai.png"/>
                                                    </div>
                                                    <h4>
                                                        Thai
                                                                                                        </h4>
                                                </a>
                                            </li>
    
                                            <li class="language" id="turkish">
                                                <a href="http://students.standardtechbd.com/language/index/turkish">
                                                    <div class="pull-left">
                                                        <img src="http://students.standardtechbd.com/uploads/language_image/turkish.png"/>
                                                    </div>
                                                    <h4>
                                                        Turkish
                                                                                                        </h4>
                                                </a>
                                            </li>
                                            -->

                                        </ul><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 3px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 0px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 0px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                                </li>
                                <li class="footer"></li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->

                        <li class="dropdown user user-menu">
                            <a href="http://students.standardtechbd.com/student#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="./Student_files/default.png" class="user-logo" alt="">

                                <span>
                                    admin                                    <i class="caret"></i>
                                </span>   
                            </a>

                            <ul class="dropdown-menu">

                                <!-- Menu Body -->

                                <li class="user-body">
                                    <div class="col-xs-6 text-center">
                                        <a href="http://students.standardtechbd.com/profile/index">
                                            <div><i class="fa fa-briefcase"></i></div>
                                            Profile 
                                        </a>

                                    </div>
                                    <div class="col-xs-6 text-center">
                                        <a href="http://students.standardtechbd.com/signin/cpassword">
                                            <div><i class="fa fa-lock"></i></div>
                                            Password 
                                        </a>
                                    </div>
                                </li>

                                <!-- Menu Footer-->
                                <li class="user-footer">

                                    <div class="text-center">
                                        <a href="http://students.standardtechbd.com/signin/signout">
                                            <div><i class="fa fa-power-off"></i></div>
                                            Log out 
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>   <div class="wrapper row-offcanvas row-offcanvas-left" style="min-height: 558px;">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas" style="min-height: 558px;">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img style="display:block" src="./Student_files/default.png" class="img-circle" alt="">
                        </div>

                        <div class="pull-left info">
                            <p>admin</p>                            <a href="http://students.standardtechbd.com/profile/index">
                                <i class="fa fa-hand-o-right color-green"></i>
                                Admin                            </a>
                        </div>
                    </div>

                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="">
                            <a href="{{URL::to('/admin')}}">
                                <i class="fa fa-laptop"></i><span>Dashboard</span> </a>
                        </li>
                    </ul>

                </section>
                <!-- /.sidebar -->
            </aside>
            <aside class="right-side">
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">

                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title"><i class="fa icon-student"></i> Student</h3>


                                    <ol class="breadcrumb">
                                        <li><a href="{{URL::to('/admin')}}"><i class="fa fa-laptop"></i> Dashboard</a></li>
                                        <li class="active">Student</li>
                                    </ol>
                                </div><!-- /.box-header -->


                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="nav-tabs-custom">
                                                <div class="tab-content">
                                                    <div id="all" class="tab-pane active">
                                                        <div id="hide-table">
                                                            <div id="example1_wrapper" class="dataTables_wrapper form-inline no-footer">
                                                       
                                                                    
                                                                    <div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" 
                                                                      placeholder="" aria-controls="example1"></label>
                                                                    </div>
                                                                <table id="example1" class="table table-striped table-bordered table-hover dataTable no-footer" 
                                                                       role="grid" aria-describedby="example1_info">
                                                                    <thead>
                                                                        <tr role="row">
                                                                            <th class="col-sm-2 sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 100px;">#</th>
                                                                            <th class="col-sm-2 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Photo: activate to sort column ascending" style="width: 99px;">Photo</th>
                                                                            <th class="col-sm-2 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 100px;">Name</th>
                                                                            <th class="col-sm-2 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Roll: activate to sort column ascending" style="width: 100px;">Roll</th>
                                                                            <th class="col-sm-2 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 99px;">Email</th>
                                                                            <th class="col-sm-2 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 100px;">Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr class="odd">
                                                                                      <td valign="top" colspan="6" class="dataTables_empty">No data available in table</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                
                                                                
                                                                
                                                        </div>

                                                    </div>
                                                </div>
                                            </div> <!-- nav-tabs-custom -->

                                        </div> <!-- col-sm-12 -->

                                    </div><!-- row -->
                                </div><!-- Body -->
                            </div><!-- /.box -->


                        </div>
                    </div>
                </section>
            </aside>

            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>v</b> 4.0          	</div>
                <strong>Copyright © Satkhira Medical College</strong>
            </footer>
        </div><!-- ./wrapper -->




 
        <script type="text/javascript" src="{{asset('')}}Student_files/all.min.js."></script>

        <!-- Jquery gritter -->
        <!-- datatable with buttons -->
        <script>
                            $(document).ready(function () {
                                $(document).ajaxStart(function () {
                                    $("#loading").show();
                                }).ajaxStop(function () {
                                    $("#loading").hide();
                                });
                            });
        </script>




        <script>
            $(document).ready(function () {
                $('#example3, #example1, #example2').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        'copyHtml5',
                        'excelHtml5',
                        'csvHtml5',
                        'pdfHtml5'
                    ],
                    search: false
                });
            });
        </script>
        <!-- dataTable with buttons end -->

        <script type="text/javascript">
            $(function () {
                $("#withoutBtn").dataTable();
            });


        </script>



        <script type="text/javascript">
            $("ul.sidebar-menu li").each(function (index, value) {

                if ($(this).attr('class') == 'active') {
                    $(this).parents('li').addClass('active');
                }

            });
        </script>




    </body></html>