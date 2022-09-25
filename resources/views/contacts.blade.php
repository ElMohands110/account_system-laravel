<!doctype html>
<html lang="en">
<!-- Mirrored from bootstrap.gallery/cliq/contacts.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Sep 2022 08:40:43 GMT -->
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
    <link rel="stylesheet" href="vendor/dropzone/dropzone.min.css"/>
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
                        class="icon-settings_input_svideo gradient-teal"></i><span class="menu-text">Product</span></a>
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
                                <li><a href="view-invoice.html">View Invoice</a></li>
                                <li><a href="invoice-list.html">Invoice List</a></li>
                                <li><a href="subscribers.html">Subscribers</a></li>
                                <li><a href="contacts.html" class="current-page">Contacts</a></li>
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
                    <li class="breadcrumb-item breadcrumb-active" aria-current="page">Contacts</li>
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
                                class="icon-edit_road"></i>Settings</a><a href="login.html" class="gradient-red"><i
                                class="icon-power_settings_new"></i>Logout</a></div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="content-wrapper-scroll">
            <div class="content-wrapper">
                <div class="row gutters">
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="card gradient-teal">
                            <div class="contact-card"><a href="#" class="edit-contact-card" data-bs-toggle="modal"
                                                         data-bs-target="#editContact"><i
                                class="icon-create"></i></a><img src="img/user2.png" alt="Cliq Admin"
                                                                 class="contact-avatar"><h5>Maia Parkinson</h5>
                                <ul class="list-group">
                                    <li class="list-group-item"><span>Email: </span>maia-parkinson@cliq.com</li>
                                    <li class="list-group-item"><span>Phone: </span>+2 300-223-4567</li>
                                    <li class="list-group-item"><span>Location: </span>Georgia</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="card gradient-grey2">
                            <div class="contact-card"><a href="#" class="edit-contact-card" data-bs-toggle="modal"
                                                         data-bs-target="#editContact"><i
                                class="icon-create"></i></a><img src="img/user5.png" alt="Cliq Admin"
                                                                 class="contact-avatar"><h5>Tiffany Rogers</h5>
                                <ul class="list-group">
                                    <li class="list-group-item"><span>Email: </span>tiffany-rogers@cliq.com</li>
                                    <li class="list-group-item"><span>Phone: </span>+2 300-223-4567</li>
                                    <li class="list-group-item"><span>Location: </span>Barcelona</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="card gradient-peach">
                            <div class="contact-card"><a href="#" class="edit-contact-card" data-bs-toggle="modal"
                                                         data-bs-target="#editContact"><i
                                class="icon-create"></i></a><img src="img/user3.png" alt="Cliq Admin"
                                                                 class="contact-avatar"><h5>Eugenia Obrien</h5>
                                <ul class="list-group">
                                    <li class="list-group-item"><span>Email: </span>eugenia-obrien@cliq.com</li>
                                    <li class="list-group-item"><span>Phone: </span>+2 300-223-4567</li>
                                    <li class="list-group-item"><span>Location: </span>Alabama</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="card gradient-mist">
                            <div class="contact-card"><a href="#" class="edit-contact-card" data-bs-toggle="modal"
                                                         data-bs-target="#editContact"><i
                                class="icon-create"></i></a><img src="img/user4.png" alt="Cliq Admin"
                                                                 class="contact-avatar"><h5>Ursula Anderson</h5>
                                <ul class="list-group">
                                    <li class="list-group-item"><span>Email: </span>ursula-anderson@cliq.com</li>
                                    <li class="list-group-item"><span>Phone: </span>+2 300-223-4567</li>
                                    <li class="list-group-item"><span>Location: </span>Oblong</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="card gradient-pink">
                            <div class="contact-card"><a href="#" class="edit-contact-card" data-bs-toggle="modal"
                                                         data-bs-target="#editContact"><i
                                class="icon-create"></i></a><img src="img/user6.png" alt="Cliq Admin"
                                                                 class="contact-avatar"><h5>Priscilla Hawkins</h5>
                                <ul class="list-group">
                                    <li class="list-group-item"><span>Email: </span>p-hawkins@cliq.com</li>
                                    <li class="list-group-item"><span>Phone: </span>+2 300-223-4567</li>
                                    <li class="list-group-item"><span>Location: </span>Michigan</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="card gradient-brick">
                            <div class="contact-card"><a href="#" class="edit-contact-card" data-bs-toggle="modal"
                                                         data-bs-target="#editContact"><i
                                class="icon-create"></i></a><img src="img/user3.png" alt="Cliq Admin"
                                                                 class="contact-avatar"><h5>Sybil Marshman</h5>
                                <ul class="list-group">
                                    <li class="list-group-item"><span>Email: </span>sybil-marshman@cliq.com</li>
                                    <li class="list-group-item"><span>Phone: </span>+2 300-223-4567</li>
                                    <li class="list-group-item"><span>Location: </span>Oklahoma</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="card gradient-green">
                            <div class="contact-card"><a href="#" class="edit-contact-card" data-bs-toggle="modal"
                                                         data-bs-target="#editContact"><i
                                class="icon-create"></i></a><img src="img/user2.png" alt="Cliq Admin"
                                                                 class="contact-avatar"><h5>Amanda Santos</h5>
                                <ul class="list-group">
                                    <li class="list-group-item"><span>Email: </span>amanda-santos@cliq.com</li>
                                    <li class="list-group-item"><span>Phone: </span>+2 300-223-4567</li>
                                    <li class="list-group-item"><span>Location: </span>Florida</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="card gradient-brick">
                            <div class="contact-card"><a href="#" class="edit-contact-card" data-bs-toggle="modal"
                                                         data-bs-target="#editContact"><i
                                class="icon-create"></i></a><img src="img/user5.png" alt="Cliq Admin"
                                                                 class="contact-avatar"><h5>Maia Parkinson</h5>
                                <ul class="list-group">
                                    <li class="list-group-item"><span>Email: </span>maia-parkinson@cliq.com</li>
                                    <li class="list-group-item"><span>Phone: </span>+2 300-223-4567</li>
                                    <li class="list-group-item"><span>Location: </span>Colorado</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="card gradient-yellow">
                            <div class="contact-card"><a href="#" class="edit-contact-card" data-bs-toggle="modal"
                                                         data-bs-target="#editContact"><i
                                class="icon-create"></i></a><img src="img/user4.png" alt="Cliq Admin"
                                                                 class="contact-avatar"><h5>Andrea Dixon</h5>
                                <ul class="list-group">
                                    <li class="list-group-item"><span>Email: </span>andrea-dixon@cliq.com</li>
                                    <li class="list-group-item"><span>Phone: </span>+2 300-223-4567</li>
                                    <li class="list-group-item"><span>Location: </span>Mexico</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="card gradient-teal">
                            <div class="contact-card"><a href="#" class="edit-contact-card" data-bs-toggle="modal"
                                                         data-bs-target="#editContact"><i
                                class="icon-create"></i></a><img src="img/user6.png" alt="Cliq Admin"
                                                                 class="contact-avatar"><h5>Dale Ramsey</h5>
                                <ul class="list-group">
                                    <li class="list-group-item"><span>Email: </span>dale-ramsey@cliq.com</li>
                                    <li class="list-group-item"><span>Phone: </span>+2 300-223-4567</li>
                                    <li class="list-group-item"><span>Location: </span>Alaska</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="card gradient-violet">
                            <div class="contact-card"><a href="#" class="edit-contact-card" data-bs-toggle="modal"
                                                         data-bs-target="#editContact"><i
                                class="icon-create"></i></a><img src="img/user5.png" alt="Cliq Admin"
                                                                 class="contact-avatar"><h5>Jaylee Foster</h5>
                                <ul class="list-group">
                                    <li class="list-group-item"><span>Email: </span>jaylee-foster@cliq.com</li>
                                    <li class="list-group-item"><span>Phone: </span>+2 300-223-4567</li>
                                    <li class="list-group-item"><span>Location: </span>Virginia</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="card gradient-red">
                            <div class="contact-card"><a href="#" class="edit-contact-card" data-bs-toggle="modal"
                                                         data-bs-target="#editContact"><i
                                class="icon-create"></i></a><img src="img/user3.png" alt="Cliq Admin"
                                                                 class="contact-avatar"><h5>Angela Ball</h5>
                                <ul class="list-group">
                                    <li class="list-group-item"><span>Email: </span>angela-ball@cliq.com</li>
                                    <li class="list-group-item"><span>Phone: </span>+2 300-223-4567</li>
                                    <li class="list-group-item"><span>Location: </span>Texas</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="editContact" data-bs-backdrop="static" data-bs-keyboard="false"
                     tabindex="-1" aria-labelledby="editContactLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header"><h5 class="modal-title" id="editContactLabel">Edit Contact</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true"></span></button>
                            </div>
                            <div class="modal-body">
                                <div class="row gutters">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                        <div id="dropzone-sm1" class="mb-3">
                                            <form action="https://bootstrap.gallery/upload"
                                                  class="dropzone needsclick dz-clickable" id="demo-upload1">
                                                <div class="dz-message needsclick">
                                                    <button type="button" class="dz-button">Update Image.</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12">
                                        <div class="row gutters">
                                            <div class="col-6">
                                                <div class="mb-3"><label for="fullName" class="form-label">Full
                                                    Name</label><input type="text" class="form-control" id="fullName"
                                                                       placeholder="Full Name"></div>
                                                <div class="mb-3"><label for="contactNumber"
                                                                         class="form-label">Contact</label><input
                                                    type="text" class="form-control" id="contactNumber"
                                                    placeholder="Contact"></div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-3"><label for="emailId"
                                                                         class="form-label">Email</label><input
                                                    type="email" class="form-control" id="emailId"
                                                    placeholder="Email ID"></div>
                                                <div class="mb-3"><label for="birthDay"
                                                                         class="form-label">Birthday</label>
                                                    <div class="input-group "><input type="text"
                                                                                     class="form-control datepicker-opens-left"
                                                                                     id="birthDay"
                                                                                     placeholder="DD/MM/YYYY"><span
                                                        class="input-group-text"><i class="icon-date_range"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3"><label class="form-label">Message</label><textarea
                                                    class="form-control" rows="2"></textarea></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-info" data-bs-dismiss="modal">Save Contact</button>
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
<script src="vendor/dropzone/dropzone.min.js"></script>
<script src="js/main.js"></script>
</body>
<!-- Mirrored from bootstrap.gallery/cliq/contacts.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Sep 2022 08:40:43 GMT -->
</html>
