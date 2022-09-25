<!doctype html>
<html lang="en">
<!-- Mirrored from bootstrap.gallery/cliq/tables.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Sep 2022 08:40:59 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Bootstrap 5 Dashboard Template">
    <meta name="author" content="ParkerThemes">
    <link rel="shortcut icon" href="img/fav.png">
    <title>Cliq Admin Template - Admin Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="fonts/icomoon/icomoon.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="vendor/overlay-scroll/OverlayScrollbars.min.css">
</head>
<body>
<div class="page-wrapper">
    <nav class="sidebar-wrapper">
        <div class="sidebar-brand"><a href="index.html" class="logo"><img src="img/logo.svg"
                                                                          alt="Cliq Admin Dashboard"/></a></div>
        <div class="sidebarMenuScroll">
            <div class="sidebar-menu">
                <ul>
                    <li class="sidebar-dropdown"><a href="#"><i class="icon-house_siding gradient-orange"></i><span
                                class="menu-text">Dashboards</span></a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="index.html">Dashboard</a></li>
                                <li><a href="dashboard2.html">Dashboard 2</a></li>
                                <li><a href="dashboard3.html">Dashboard 3</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown"><a href="#"><i
                                class="icon-settings_input_svideo gradient-teal"></i><span
                                class="menu-text">Product</span></a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="orders.html">Orders</a></li>
                                <li><a href="products.html">Products</a></li>
                                <li><a href="view-cart.html">Shopping Cart</a></li>
                                <li><a href="checkout.html">Billing Details</a></li>
                                <li><a href="customers.html">Customers</a></li>
                                <li><a href="add-product.html">Add Product</a></li>
                                <li><a href="reviews.html">Reviews</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="ui-elements.html"><i class="icon-photo_filter gradient-green"></i><span
                                class="menu-text">UI Elements</span></a></li>
                    <li class="sidebar-dropdown"><a href="#"><i class="icon-model_training gradient-pink"></i><span
                                class="menu-text">Pages</span></a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="calendar.html">Calendar</a></li>
                                <li><a href="create-invoice.html">Create Invoice</a></li>
                                <li><a href="view-invoice.html">View Invoice</a></li>
                                <li><a href="invoice-list.html">Invoice List</a></li>
                                <li><a href="subscribers.html">Subscribers</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="account-settings.html">Account Settings</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown active"><a href="#"><i class="icon-edit_road gradient-yellow"></i><span
                                class="menu-text">Forms</span></a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="forms.html">Controls</a></li>
                                <li><a href="bs-select.html">Bootstrap Select</a></li>
                                <li><a href="date-time-pickers.html">Date Time Pickers</a></li>
                                <li><a href="input-mask.html">Input Masks</a></li>
                                <li><a href="summernote.html">Summernote</a></li>
                                <li><a href="tables.html">Tables</a></li>
                                <li><a href="tables.html" class="current-page">Tables</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown"><a href="#"><i class="icon-pie_chart_outlined gradient-blue"></i><span
                                class="menu-text">Graphs</span></a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="apex.html">Apex</a></li>
                                <li><a href="morris.html">Morris</a></li>
                                <li><a href="maps.html">Maps</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown"><a href="#"><i class="icon-lock_outline gradient-violet"></i><span
                                class="menu-text">Authentication</span></a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="signup.html">Signup</a></li>
                                <li><a href="error.html">Error</a></li>
                                <li><a href="maintenance.html">Maintenance</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="main-container">
        <div class="page-header">
            <div class="breadcrumb-container">
                <div class="toggle-sidebar" id="toggle-sidebar"><i class="icon-menu"></i></div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><i class="icon-house_siding"></i><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Forms</li>
                    <li class="breadcrumb-item breadcrumb-active" aria-current="page">Tables</li>
                </ol>
            </div>
            <div class="header-actions-container">
                <div class="search-container">
                    <div class="input-group"><input type="text" class="form-control" placeholder="Search...">
                        <button class="btn" type="button"><i class="icon-search"></i></button>
                    </div>
                </div>
                <ul class="header-actions">
                    <li class="dropdown d-none d-md-block"><a href="#" id="countries" data-toggle="dropdown"
                                                              aria-haspopup="true"><img src="img/flags/1x1/gb.svg"
                                                                                        class="flag-img"
                                                                                        alt="Great Britain"></a>
                        <div class="dropdown-menu dropdown-menu-end mini" aria-labelledby="countries">
                            <div class="country-container"><a href="index.html"><img src="img/flags/1x1/us.svg"
                                                                                     alt="USA"></a><a href="index.html"><img
                                        src="img/flags/1x1/in.svg" alt="India"></a><a href="index.html"><img
                                        src="img/flags/1x1/br.svg" alt="Brazil"></a><a href="index.html"><img
                                        src="img/flags/1x1/tr.svg" alt="Turkey"></a><a href="index.html"><img
                                        src="img/flags/1x1/id.svg" alt="Indonesia"></a></div>
                        </div>
                    </li>
                    <li class="dropdown d-none d-md-block"><a href="#" id="bookmarks" data-toggle="dropdown"
                                                              aria-haspopup="true"><i class="icon-star_outline"></i></a>
                        <div class="dropdown-menu dropdown-menu-end lrg" aria-labelledby="bookmarks">
                            <div class="bookmarks-container"><a href="#" class="bookmark-block"><img
                                        src="img/social/dribbble.svg" alt="Dribbble"><h5>Dribbble</h5></a><a href="#"
                                                                                                             class="bookmark-block"><img
                                        src="img/social/behance.svg" alt="Behance"><h5>Behance</h5></a><a href="#"
                                                                                                          class="bookmark-block"><img
                                        src="img/social/evernote.svg" alt="Evernote"><h5>Evernote</h5></a><a href="#"
                                                                                                             class="bookmark-block"><img
                                        src="img/social/dropbox.svg" alt="Dropbox"><h5>Dropbox</h5></a><a href="#"
                                                                                                          class="bookmark-block"><img
                                        src="img/social/amazon.svg" alt="Amazon"><h5>Amazon</h5></a><a href="#"
                                                                                                       class="bookmark-block"><img
                                        src="img/social/youtube.svg" alt="Youtube"><h5>Youtube</h5></a></div>
                        </div>
                    </li>
                    <li class="dropdown d-none d-md-block"><a href="#" id="notifications" data-toggle="dropdown"
                                                              aria-haspopup="true"><i
                                class="icon-notifications_none animate__animated animate__swing animate__infinite infinite"></i><span
                                class="count-label gradient-red animate__animated animate__heartBeat animate__infinite infinite">7</span></a>
                        <div class="dropdown-menu dropdown-menu-end lrg" aria-labelledby="notifications">
                            <div class="scroll240">
                                <ul class="header-notifications">
                                    <li class="gradient-grey"><a href="#">
                                            <div class="user-img"><img src="img/user.png" alt="User"></div>
                                            <div class="details">
                                                <div class="user-title">Larkyn</div>
                                                <div class="noti-details">Check out every table in detail.</div>
                                                <div class="noti-date">Aug 25, 03:00 pm</div>
                                            </div>
                                        </a></li>
                                    <li class="gradient-grey"><a href="#">
                                            <div class="user-img"><img src="img/user2.png" alt="User"></div>
                                            <div class="details">
                                                <div class="user-title">Braxten</div>
                                                <div class="noti-details">Approved new design.</div>
                                                <div class="noti-date">Aug 21, 12:00 am</div>
                                            </div>
                                        </a></li>
                                    <li class="gradient-grey"><a href="#">
                                            <div class="user-img"><img src="img/user3.png" alt="User"></div>
                                            <div class="details">
                                                <div class="user-title">Maria</div>
                                                <div class="noti-details">Membership has been ended.</div>
                                                <div class="noti-date">Aug 18, 09:30 am</div>
                                            </div>
                                        </a></li>
                                    <li class="gradient-grey"><a href="#">
                                            <div class="user-img"><img src="img/user5.png" alt="User"></div>
                                            <div class="details">
                                                <div class="user-title">Alex</div>
                                                <div class="noti-details">Design Review.</div>
                                                <div class="noti-date">Aug 15, 09:30 am</div>
                                            </div>
                                        </a></li>
                                    <li class="gradient-green"><a href="#">
                                            <div class="user-img"><img src="img/user6.png" alt="User"></div>
                                            <div class="details">
                                                <div class="user-title">Sunny</div>
                                                <div class="noti-details">UI Discussion</div>
                                                <div class="noti-date">Aug 10, 09:30 am</div>
                                            </div>
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown"><a href="#" id="userSettings" class="user-settings" data-toggle="dropdown"
                                            aria-haspopup="true"><span
                                class="user-name d-none d-md-block">Ella Lindsey</span><span class="avatar"><img
                                    src="img/user.png" alt="User Avatar"><span class="status online"></span></span></a>
                        <div class="dropdown-menu dropdown-menu-end md" aria-labelledby="userSettings">
                            <div class="header-profile-avatar"><img src="img/user.png" alt="Avatar"></div>
                            <div class="header-profile-block"><h5>Ella Lindsey</h5>
                                <p>Admin</p></div>
                            <div class="header-profile-actions"><a href="profile.html" class="gradient-blue"><i
                                        class="icon-person_outline"></i>Profile</a><a href="account-settings.html"
                                                                                      class="gradient-green"><i
                                        class="icon-edit_road"></i>Settings</a><a href="login.html"
                                                                                  class="gradient-red"><i
                                        class="icon-power_settings_new"></i>Logout</a></div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="content-wrapper-scroll">
            <div class="content-wrapper">
                <div class="row gutters">
                    <div class="colxxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card gradient-dark-grey">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table m-0">
                                        <thead>
                                        <tr>
                                            <th>Customer ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Items Bought</th>
                                            <th>Money Spent</th>
                                            <th>Last Login</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>#00001</td>
                                            <td>Alia</td>
                                            <td>Willams</td>
                                            <td>+143-148-60985</td>
                                            <td>aliawilllams@unipro.com</td>
                                            <td>250</td>
                                            <td>$4500</td>
                                            <td>10/10/2019 4:30pm</td>
                                        </tr>
                                        <tr>
                                            <td>#00002</td>
                                            <td>Nathan</td>
                                            <td>James</td>
                                            <td>+278-119-88790</td>
                                            <td>nathanjames@unipro.com</td>
                                            <td>390</td>
                                            <td>$3500</td>
                                            <td>12/10/2019 2:37am</td>
                                        </tr>
                                        <tr>
                                            <td>#00003</td>
                                            <td>Kelly</td>
                                            <td>Thomas</td>
                                            <td>+125-117-88763</td>
                                            <td>thomas-gm@unipro.com</td>
                                            <td>135</td>
                                            <td>$2400</td>
                                            <td>14/10/2019 7:50pm</td>
                                        </tr>
                                        <tr>
                                            <td>#00004</td>
                                            <td>Steve</td>
                                            <td>Smitth</td>
                                            <td>+334-676-66530</td>
                                            <td>smith-st@unipro.com</td>
                                            <td>765</td>
                                            <td>$7890</td>
                                            <td>18/10/2019 9:30pm</td>
                                        </tr>
                                        <tr>
                                            <td>#00005</td>
                                            <td>Kevin</td>
                                            <td>Oliver</td>
                                            <td>+435-667-99808</td>
                                            <td>kevin-oliver@unipro.com</td>
                                            <td>763</td>
                                            <td>$5690</td>
                                            <td>21/10/2019 3:20pm</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters">
                    <div class="colxxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card gradient-dark-grey">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered m-0">
                                        <thead>
                                        <tr>
                                            <th>Country</th>
                                            <th>Languages</th>
                                            <th>Population</th>
                                            <th>Median Age</th>
                                            <th>Area (Km²)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><img src="img/flags/1x1/hk.svg" class="flag-img" alt="Hong Kong">Hong
                                                Kong
                                            </td>
                                            <td>Chinese (official), English</td>
                                            <td>7,39,000</td>
                                            <td>31.3</td>
                                            <td>1106</td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/flags/1x1/au.svg" class="flag-img" alt="Australia">Australia
                                            </td>
                                            <td>English 79%, native and other languages</td>
                                            <td>23,630,169</td>
                                            <td>37.3</td>
                                            <td>7,739,983</td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/flags/1x1/tz.svg" class="flag-img" alt="Tanzania">Tanzania
                                            </td>
                                            <td>Swahili (national), English, Arabic, Chaga, Makonde</td>
                                            <td>57,353,670</td>
                                            <td>39.1</td>
                                            <td>945,086</td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/flags/1x1/ru.svg" class="flag-img" alt="Russia">Russia
                                            </td>
                                            <td>Russian, others</td>
                                            <td>142,467,651</td>
                                            <td>38.4</td>
                                            <td>17,076,310</td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/flags/1x1/de.svg" class="flag-img" alt="Germany">Germany
                                            </td>
                                            <td>German, Danish, Low Rhenish, Romani</td>
                                            <td>82,081,261</td>
                                            <td>41.1</td>
                                            <td>357,386</td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <td colspan="5" class="text-center">Data retrieved from <a href="#"
                                                                                                       class="link">Cliq
                                                    admin.</a>.
                                            </td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters">
                    <div class="colxxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card gradient-dark-grey">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table m-0">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Module</th>
                                            <th>Reporter</th>
                                            <th>Status</th>
                                            <th>Owner</th>
                                            <th>Severity</th>
                                            <th class="text-right">Created</th>
                                            <th class="text-right">Updated</th>
                                            <th class="text-right">Due</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>App crashes</td>
                                            <td>Main App</td>
                                            <td>Lewis</td>
                                            <td><span class="badge gradient-peach3">Open</span></td>
                                            <td>Micheal</td>
                                            <td class="text-green">High</td>
                                            <td class="text-right">Aug-10, 2019</td>
                                            <td class="text-right">Sep-14, 2019</td>
                                            <td class="text-right">Oct-20, 2019</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Saving file</td>
                                            <td>Form Screen</td>
                                            <td>James</td>
                                            <td><span class="badge gradient-green">In Progress</span></td>
                                            <td>Donald</td>
                                            <td class="text-red">Low</td>
                                            <td class="text-right">Aug-10, 2019</td>
                                            <td class="text-right">Sep-14, 2019</td>
                                            <td class="text-right">Oct-20, 2019</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Login fail</td>
                                            <td>Main App</td>
                                            <td>Powell</td>
                                            <td><span class="badge gradient-peach3">Open</span></td>
                                            <td>Glory</td>
                                            <td class="text-green">High</td>
                                            <td class="text-right">Aug-10, 2019</td>
                                            <td class="text-right">Sep-14, 2019</td>
                                            <td class="text-right">Oct-20, 2019</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Saving file</td>
                                            <td>Form Screen</td>
                                            <td>James</td>
                                            <td><span class="badge gradient-green">In Progress</span></td>
                                            <td>Donald</td>
                                            <td class="text-red">Low</td>
                                            <td class="text-right">Aug-10, 2019</td>
                                            <td class="text-right">Sep-14, 2019</td>
                                            <td class="text-right">Oct-20, 2019</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Login fail</td>
                                            <td>Main App</td>
                                            <td>Powell</td>
                                            <td><span class="badge gradient-green">In Progress</span></td>
                                            <td>Glory</td>
                                            <td class="text-green">High</td>
                                            <td class="text-right">Aug-10, 2019</td>
                                            <td class="text-right">Sep-14, 2019</td>
                                            <td class="text-right">Oct-20, 2019</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gutters">
                    <div class="colxxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card gradient-dark-grey">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped m-0">
                                        <thead>
                                        <tr>
                                            <th>Country</th>
                                            <th>Languages</th>
                                            <th>Population</th>
                                            <th>Median Age</th>
                                            <th>Area (Km²)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><img src="img/flags/1x1/hk.svg" class="flag-img" alt="Hong Kong">Hong
                                                Kong
                                            </td>
                                            <td>Chinese (official), English</td>
                                            <td>7,39,000</td>
                                            <td>31.3</td>
                                            <td>1106</td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/flags/1x1/au.svg" class="flag-img" alt="Australia">Australia
                                            </td>
                                            <td>English 79%, native and other languages</td>
                                            <td>23,630,169</td>
                                            <td>37.3</td>
                                            <td>7,739,983</td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/flags/1x1/tz.svg" class="flag-img" alt="Tanzania">Tanzania
                                            </td>
                                            <td>Swahili (national), English, Arabic, Chaga, Makonde</td>
                                            <td>57,353,670</td>
                                            <td>39.1</td>
                                            <td>945,086</td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/flags/1x1/ru.svg" class="flag-img" alt="Russia">Russia
                                            </td>
                                            <td>Russian, others</td>
                                            <td>142,467,651</td>
                                            <td>38.4</td>
                                            <td>17,076,310</td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/flags/1x1/de.svg" class="flag-img" alt="Germany">Germany
                                            </td>
                                            <td>German, Danish, Low Rhenish, Romani</td>
                                            <td>82,081,261</td>
                                            <td>41.1</td>
                                            <td>357,386</td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <td colspan="5" class="text-center">Data retrieved from <a href="#"
                                                                                                       class="link">Cliq
                                                    admin.</a>.
                                            </td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-footer"><span>© CLIQ admin 2021</span></div>
        </div>
    </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/moment.js"></script>
<script src="vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
<script src="vendor/overlay-scroll/custom-scrollbar.js"></script>
<script src="js/main.js"></script>
</body>
<!-- Mirrored from bootstrap.gallery/cliq/tables.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Sep 2022 08:41:05 GMT -->
</html>
