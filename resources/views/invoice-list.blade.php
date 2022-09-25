<!doctype html>
<html lang="en">
<!-- Mirrored from bootstrap.gallery/cliq/invoice-list.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Sep 2022 08:40:39 GMT -->
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
                    <li class="sidebar-dropdown active"><a href="#"><i
                                class="icon-model_training gradient-pink"></i><span class="menu-text">Pages</span></a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="calendar.html">Calendar</a></li>
                                <li><a href="create-invoice.html">Create Invoice</a></li>
                                <li><a href="invoice-list.html" class="current-page">Invoice List</a></li>
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
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item breadcrumb-active" aria-current="page">Invoice List</li>
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
                                <div class="card-title">Invoice List</div>
                                <a href="create-invoice.html" class="btn btn-dark">Create Invoice</a></div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered invoice-table">
                                        <thead>
                                        <tr>
                                            <td>Customer</td>
                                            <td>Last seen</td>
                                            <td>Contact</td>
                                            <td>Amount</td>
                                            <td>Due Date</td>
                                            <td>Status</td>
                                            <td>Request</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="customer"><img src="img/user2.png" class="user-avatar"
                                                                           alt="Avatar"/>
                                                    <div class="name">Felicia Quinn</div>
                                                </div>
                                            </td>
                                            <td>2 Hours Ago</td>
                                            <td>
                                                <div class="details"><h5>feliycia-quinnn@cliq.com</h5><h6>(128)
                                                        898-0326</h6></div>
                                            </td>
                                            <td>$250.00</td>
                                            <td>9/10/2021</td>
                                            <td><span class="badge gradient-green">Paid</span></td>
                                            <td>
                                                <button class="btn btn-dark">Request</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="customer"><img src="img/user3.png" class="user-avatar"
                                                                           alt="Avatar"/>
                                                    <div class="name">Carly French</div>
                                                </div>
                                            </td>
                                            <td>2 Hours Ago</td>
                                            <td>
                                                <div class="details"><h5>caiorly-french@cliq.com</h5><h6>(902)
                                                        786-2891</h6></div>
                                            </td>
                                            <td>$320.00</td>
                                            <td>10/10/2021</td>
                                            <td><span class="badge gradient-yellow">Pending</span></td>
                                            <td>
                                                <button class="btn btn-dark">Request</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="customer"><img src="img/user4.png" class="user-avatar"
                                                                           alt="Avatar"/>
                                                    <div class="name">Dana Moore</div>
                                                </div>
                                            </td>
                                            <td>5 Hours Ago</td>
                                            <td>
                                                <div class="details"><h5>dana-mooreydt@cliq.com</h5><h6>(989)
                                                        878-9980</h6></div>
                                            </td>
                                            <td>$170.00</td>
                                            <td>15/10/2021</td>
                                            <td><span class="badge gradient-red">Overdue</span></td>
                                            <td>
                                                <button class="btn btn-dark">Request</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="customer"><img src="img/user5.png" class="user-avatar"
                                                                           alt="Avatar"/>
                                                    <div class="name">Willa Henry</div>
                                                </div>
                                            </td>
                                            <td>1 Day Ago</td>
                                            <td>
                                                <div class="details"><h5>willa-heenry@cliq.com</h5><h6>(902)
                                                        324-8890</h6></div>
                                            </td>
                                            <td>$410.00</td>
                                            <td>18/10/2021</td>
                                            <td><span class="badge gradient-green">Paid</span></td>
                                            <td>
                                                <button class="btn btn-dark">Request</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="customer"><img src="img/user.png" class="user-avatar"
                                                                           alt="Avatar"/>
                                                    <div class="name">Oriel Row</div>
                                                </div>
                                            </td>
                                            <td>2 Days Ago</td>
                                            <td>
                                                <div class="details"><h5>oriel-row@cliq.com</h5><h6>(453) 264-4453</h6>
                                                </div>
                                            </td>
                                            <td>$280.00</td>
                                            <td>21/10/2021</td>
                                            <td><span class="badge gradient-yellow">Pending</span></td>
                                            <td>
                                                <button class="btn btn-dark">Request</button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <nav aria-label="Page Navigation">
                                        <ul class="pagination justify-content-end">
                                            <li class="page-item"><a class="page-link" href="#"
                                                                     aria-label="Previous"><span aria-hidden="true"><i
                                                            class="icon-arrow_back_ios"></i></span></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span
                                                        aria-hidden="true"><i class="icon-arrow_forward_ios"></i></span></a>
                                            </li>
                                        </ul>
                                    </nav>
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
<!-- Mirrored from bootstrap.gallery/cliq/invoice-list.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Sep 2022 08:40:39 GMT -->
</html>
