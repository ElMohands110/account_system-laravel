<!doctype html>
<html lang="en">
<!-- Mirrored from bootstrap.gallery/cliq/customers.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Sep 2022 08:40:19 GMT -->
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
                                <li><a href="layout.html">Layout</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown active"><a href="#"><i
                                class="icon-settings_input_svideo gradient-teal"></i><span
                                class="menu-text">Product</span></a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="orders.html">Orders</a></li>
                                <li><a href="products.html">Products</a></li>
                                <li><a href="view-cart.html">Shopping Cart</a></li>
                                <li><a href="checkout.html">Billing Details</a></li>
                                <li><a href="customers.html" class="current-page">Customers</a></li>
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
                                <li><a href="invoice-list.html">Invoice List</a></li>
                                <li><a href="subscribers.html">Subscribers</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="account-settings.html">Account Settings</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown"><a href="#"><i class="icon-edit_road gradient-yellow"></i><span
                                class="menu-text">Forms</span></a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="forms.html">Controls</a></li>
                                <li><a href="bs-select.html">Bootstrap Select</a></li>
                                <li><a href="date-time-pickers.html">Date Time Pickers</a></li>
                                <li><a href="input-mask.html">Input Masks</a></li>
                                <li><a href="summernote.html">Summernote</a></li>
                                <li><a href="tables.html">Tables</a></li>
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
                    <li class="breadcrumb-item">Product</li>
                    <li class="breadcrumb-item breadcrumb-active" aria-current="page">Customers</li>
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
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card gradient-dark-grey">
                            <div class="card-header">
                                <div class="card-title">Customers</div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table v-middle m-0">
                                        <thead>
                                        <tr>
                                            <th>Country</th>
                                            <th>Customer</th>
                                            <th>Contact</th>
                                            <th>Status</th>
                                            <th>Orders</th>
                                            <th>Last Order</th>
                                            <th>Amount</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><img src="img/flags/4x3/ca.svg" class="flag-img-lg" alt="Canada">Canada
                                            </td>
                                            <td>
                                                <div class="media-box"><img src="img/user2-sm.png" class="media-avatar"
                                                                            alt="Customer">
                                                    <div class="media-box-body">
                                                        <div class="text-truncate">Garrett Winters</div>
                                                        <p>ID: #FLM00763</p></div>
                                                </div>
                                            </td>
                                            <td>067-676-98320</td>
                                            <td><span class="badge gradient-green min-70">Active</span></td>
                                            <td>87</td>
                                            <td>2021/10/25</td>
                                            <td>$32800</td>
                                            <td>
                                                <div class="actions"><a href="#" class="viewRow" data-bs-toggle="modal"
                                                                        data-bs-target="#viewRow"><i
                                                            class="icon-notes text-muted"></i></a><a href="#"
                                                                                                     class="deleteRow"><i
                                                            class="icon-delete_outline text-red"></i></a></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/flags/1x1/jp.svg" class="flag-img-lg" alt="Japan">Japan
                                            </td>
                                            <td>
                                                <div class="media-box"><img src="img/user5-sm.png" class="media-avatar"
                                                                            alt="Customer">
                                                    <div class="media-box-body">
                                                        <div class="text-truncate">Cedric Kelly</div>
                                                        <p>ID: #FLM00582</p></div>
                                                </div>
                                            </td>
                                            <td>009-543-77650</td>
                                            <td><span class="badge gradient-green min-70">Active</span></td>
                                            <td>34</td>
                                            <td>2021/10/22</td>
                                            <td>$65890</td>
                                            <td>
                                                <div class="actions"><a href="#" class="viewRow" data-bs-toggle="modal"
                                                                        data-bs-target="#viewRow"><i
                                                            class="icon-notes text-muted"></i></a><a href="#"
                                                                                                     class="deleteRow"><i
                                                            class="icon-delete_outline text-red"></i></a></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/flags/1x1/us.svg" class="flag-img-lg" alt="United States">United
                                                States
                                            </td>
                                            <td>
                                                <div class="media-box"><img src="img/user-sm.png" class="media-avatar"
                                                                            alt="Customer">
                                                    <div class="media-box-body">
                                                        <div class="text-truncate">Rhona Davidson</div>
                                                        <p>ID: #FLM00554</p></div>
                                                </div>
                                            </td>
                                            <td>067-676-98320</td>
                                            <td><span class="badge gradient-green min-70">Active</span></td>
                                            <td>21</td>
                                            <td>2021/10/10</td>
                                            <td>$25678</td>
                                            <td>
                                                <div class="actions"><a href="#" class="viewRow" data-bs-toggle="modal"
                                                                        data-bs-target="#viewRow"><i
                                                            class="icon-notes text-muted"></i></a><a href="#"
                                                                                                     class="deleteRow"><i
                                                            class="icon-delete_outline text-red"></i></a></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/flags/1x1/tr.svg" class="flag-img-lg" alt="Turkey">Turkey
                                            </td>
                                            <td>
                                                <div class="media-box"><img src="img/user4-sm.png" class="media-avatar"
                                                                            alt="Customer">
                                                    <div class="media-box-body">
                                                        <div class="text-truncate">Quinn Flynn</div>
                                                        <p>ID: #FLM00831</p></div>
                                                </div>
                                            </td>
                                            <td>002-434-66659</td>
                                            <td><span class="badge gradient-green min-70">Active</span></td>
                                            <td>55</td>
                                            <td>2021/10/21</td>
                                            <td>$24571</td>
                                            <td>
                                                <div class="actions"><a href="#" class="viewRow" data-bs-toggle="modal"
                                                                        data-bs-target="#viewRow"><i
                                                            class="icon-notes text-muted"></i></a><a href="#"
                                                                                                     class="deleteRow"><i
                                                            class="icon-delete_outline text-red"></i></a></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img src="img/flags/1x1/br.svg" class="flag-img-lg" alt="Brazil">Brazil
                                            </td>
                                            <td>
                                                <div class="media-box"><img src="img/user6-sm.png" class="media-avatar"
                                                                            alt="Customer">
                                                    <div class="media-box-body">
                                                        <div class="text-truncate">Tiya Nixon</div>
                                                        <p>ID: #FLM00987</p></div>
                                                </div>
                                            </td>
                                            <td>030-998-03437</td>
                                            <td><span class="badge gradient-red min-70">Blocked</span></td>
                                            <td>61</td>
                                            <td>2021/09/18</td>
                                            <td>$12309</td>
                                            <td>
                                                <div class="actions"><a href="#" class="viewRow" data-bs-toggle="modal"
                                                                        data-bs-target="#viewRow"><i
                                                            class="icon-notes text-muted"></i></a><a href="#"
                                                                                                     class="deleteRow"><i
                                                            class="icon-delete_outline text-red"></i></a></div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal modal-dark fade" id="viewRow" tabindex="-1" aria-labelledby="viewRowLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header"><h5 class="modal-title" id="viewRowLabel">View Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row gutters">
                                    <div class="col-xxl-4">
                                        <div class="customer-card"><h6>Customer Name</h6><h5>Garrett Winters</h5></div>
                                    </div>
                                    <div class="col-xxl-4">
                                        <div class="customer-card"><h6>Customer ID</h6><h5>#FLM00763</h5></div>
                                    </div>
                                    <div class="col-xxl-4">
                                        <div class="customer-card"><h6>Contact</h6><h5>067-676-98320</h5></div>
                                    </div>
                                    <div class="col-xxl-4">
                                        <div class="customer-card"><h6>Amount Spent</h6><h5>$2570.00</h5></div>
                                    </div>
                                    <div class="col-xxl-4">
                                        <div class="customer-card"><h6>Last Login</h6><h5>21/11/2021</h5></div>
                                    </div>
                                    <div class="col-xxl-4">
                                        <div class="customer-card"><h6>Coupons Used</h6><h5>7</h5></div>
                                    </div>
                                    <div class="col-xxl-4">
                                        <div class="customer-card"><h6>Total Orders</h6><h5>95</h5></div>
                                    </div>
                                    <div class="col-xxl-4">
                                        <div class="customer-card"><h6>Cancelled Orders</h6><h5>2</h5></div>
                                    </div>
                                    <div class="col-xxl-4">
                                        <div class="customer-card"><h6>Reviews</h6><h5>21</h5></div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
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
<script src="js/product.js"></script>
</body>
<!-- Mirrored from bootstrap.gallery/cliq/customers.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Sep 2022 08:40:22 GMT -->
</html>
