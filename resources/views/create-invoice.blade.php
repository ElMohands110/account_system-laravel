<!doctype html>
<html lang="en">
<!-- Mirrored from bootstrap.gallery/cliq/create-invoice.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Sep 2022 08:40:30 GMT -->
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
    <link rel="stylesheet" href="vendor/daterange/daterange.css">
    <link rel="stylesheet" href="vendor/bs-select/bs-select.css"/>
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
                                <li><a href="create-invoice.html" class="current-page">Create Invoice</a></li>
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
                    <li class="breadcrumb-item breadcrumb-active" aria-current="page">Create Invoice</li>
                </ol>
            </div>
            <div class="header-actions-container">
                <div class="search-container">
                    <div class="input-group m-0"><input type="text" class="form-control" placeholder="Search...">
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
                                <div class="card-title">Create Invoice</div>
                                <a href="view-invoice.html" class="btn btn-dark">View Invoice</a></div>
                            <div class="card-body">
                                <div class="row gutters">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                        <div class="row gutters">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="mb-3 control-dark"><label for="customerName"
                                                                                      class="form-label">Customer
                                                        Name</label><input type="text" id="customerName"
                                                                           class="form-control"></div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="mb-3 control-dark"><label for="invNumber"
                                                                                      class="form-label">Invoice
                                                        Number</label><input type="text" id="invNumber"
                                                                             class="form-control"></div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                <div class="mb-3 control-dark"><label for="dueDate" class="form-label">Due
                                                        Date</label>
                                                    <div class="input-group "><input type="text"
                                                                                     class="form-control control-dark datepicker-opens-left"
                                                                                     id="dueDate"
                                                                                     placeholder="DD/MM/YYYY"><span
                                                            class="input-group-text dark"><i
                                                                class="icon-date_range"></i></span></div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="mb-2 control-dark"><label for="msgCustomer"
                                                                                      class="form-label">Message</label><textarea
                                                        rows="3" id="msgCustomer" class="form-control"></textarea></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row gutters">
                                    <div class="col-12">
                                        <div class="table-responsive">
                                            <table class="table table-bordered invoice-table">
                                                <thead>
                                                <tr>
                                                    <th colspan="7" class="pt-3 pb-3">Items/Products</th>
                                                </tr>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Quantity</th>
                                                    <th>Unit</th>
                                                    <th>Price</th>
                                                    <th>VAT</th>
                                                    <th>Amount (Net)</th>
                                                    <th>Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td><select class="select-single js-states m-0 w-100"
                                                                data-live-search="true">
                                                            <option>Select Product</option>
                                                            <option>Mobiles</option>
                                                            <option>Books</option>
                                                            <option>Clothing</option>
                                                            <option>Electronics</option>
                                                            <option>Food</option>
                                                            <option>Games</option>
                                                            <option>Gifts</option>
                                                            <option>Laptops</option>
                                                            <option>Mobiles</option>
                                                            <option>Music</option>
                                                            <option>Office</option>
                                                            <option>Pharmacy</option>
                                                            <option>Sports</option>
                                                            <option>Toys</option>
                                                        </select></td>
                                                    <td>
                                                        <div class="m-0 control-dark"><input type="number"
                                                                                             class="form-control"
                                                                                             placeholder="Qty"></div>
                                                    </td>
                                                    <td>
                                                        <div class="m-0 control-dark"><input type="text"
                                                                                             class="form-control"></div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group m-0 control-dark"><input type="text"
                                                                                                         class="form-control"><span
                                                                class="input-group-text dark"><i
                                                                    class="icon-attach_money"></i></span></div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group m-0 control-dark"><input type="text"
                                                                                                         class="form-control"><span
                                                                class="input-group-text dark">%</span></div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group m-0 control-dark"><input type="text"
                                                                                                         class="form-control"><span
                                                                class="input-group-text dark"><i
                                                                    class="icon-attach_money"></i></span></div>
                                                    </td>
                                                    <td>
                                                        <div class="custom-icon-group">
                                                            <button class="btn btn-dark btn-icon"><i
                                                                    class="icon-delete_sweep"></i></button>
                                                            <button class="btn btn-dark btn-icon"><i
                                                                    class="icon-create m-0"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><select class="select-single js-states m-0 w-100"
                                                                data-live-search="true">
                                                            <option>Select Product</option>
                                                            <option>Mobiles</option>
                                                            <option>Books</option>
                                                            <option>Clothing</option>
                                                            <option>Electronics</option>
                                                            <option>Food</option>
                                                            <option>Games</option>
                                                            <option>Gifts</option>
                                                            <option>Laptops</option>
                                                            <option>Mobiles</option>
                                                            <option>Music</option>
                                                            <option>Office</option>
                                                            <option>Pharmacy</option>
                                                            <option>Sports</option>
                                                            <option>Toys</option>
                                                        </select></td>
                                                    <td>
                                                        <div class="m-0 control-dark"><input type="number"
                                                                                             class="form-control"
                                                                                             placeholder="Qty"></div>
                                                    </td>
                                                    <td>
                                                        <div class="m-0 control-dark"><input type="text"
                                                                                             class="form-control"></div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group m-0 control-dark"><input type="text"
                                                                                                         class="form-control"><span
                                                                class="input-group-text dark"><i
                                                                    class="icon-attach_money"></i></span></div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group m-0 control-dark"><input type="text"
                                                                                                         class="form-control"><span
                                                                class="input-group-text dark">%</span></div>
                                                    </td>
                                                    <td>
                                                        <div class="input-group m-0 control-dark"><input type="text"
                                                                                                         class="form-control"><span
                                                                class="input-group-text dark"><i
                                                                    class="icon-attach_money"></i></span></div>
                                                    </td>
                                                    <td>
                                                        <div class="custom-icon-group">
                                                            <button class="btn btn-dark btn-icon"><i
                                                                    class="icon-delete_sweep"></i></button>
                                                            <button class="btn btn-dark btn-icon"><i
                                                                    class="icon-create m-0"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <button class="btn btn-dark">Add New Row</button>
                                                    </td>
                                                    <td colspan="6">
                                                        <div class="row gutters justify-content-end">
                                                            <div class="col-auto control-dark"><label
                                                                    class="col-form-label">Discount % of Total
                                                                    Amount</label></div>
                                                            <div class="col-auto control-dark"><input type="text"
                                                                                                      class="form-control"
                                                                                                      placeholder="0%">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5">&nbsp;</td>
                                                    <td><p class="m-0">Subtotal</p>
                                                        <p class="m-0">Discount</p>
                                                        <p class="m-0">VAT</p><h5 class="mt-2 text-red">Total USD</h5>
                                                    </td>
                                                    <td><p class="m-0">$0.00</p>
                                                        <p class="m-0">$0.00</p>
                                                        <p class="m-0">$0.00</p><h5 class="mt-2 text-red">$0.00</h5>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="invoice-footer">
                                            <div class="text-end">
                                                <button class="btn btn-dark">Save as Draft</button>
                                                <a href="invoice-list.html" class="btn btn-info ms-1">Create Invoice</a>
                                            </div>
                                        </div>
                                    </div>
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
<script src="vendor/daterange/daterange.js"></script>
<script src="vendor/daterange/custom-daterange.js"></script>
<script src="vendor/bs-select/bs-select.min.js"></script>
<script src="vendor/bs-select/bs-select-custom.js"></script>
<script src="js/main.js"></script>
</body>
<!-- Mirrored from bootstrap.gallery/cliq/create-invoice.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Sep 2022 08:40:39 GMT -->
</html>
