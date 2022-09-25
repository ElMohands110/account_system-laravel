<!doctype html>
<html lang="en">
<!-- Mirrored from bootstrap.gallery/cliq/forms.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Sep 2022 08:40:44 GMT -->
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
                                <li><a href="forms.html" class="current-page">Controls</a></li>
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
                    <li class="breadcrumb-item breadcrumb-active" aria-current="page">Forms</li>
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
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="card gradient-teal">
                            <div class="card-header">
                                <div class="card-title">Input Fields</div>
                            </div>
                            <div class="card-body">
                                <div class="mb-3 control-light"><label class="form-label">Input Field</label><input
                                        type="text" class="form-control" placeholder="Enter text"></div>
                                <div class="mb-3 control-light"><label class="form-label">Disabled Input
                                        Field</label><input type="text" class="form-control" value="Disabled Field"
                                                            disabled></div>
                                <div class="mb-3 control-light"><label class="form-label">Readonly Input
                                        Field</label><input type="text" class="form-control" value="Readonly Field"
                                                            readonly></div>
                                <div class="mb-3 control-light"><label class="form-label">Password Input
                                        Field</label><input type="password" class="form-control" value="12345"></div>
                                <div class="m-0 control-light"><label class="form-label">Textarea</label><textarea
                                        class="form-control" rows="2"></textarea></div>
                            </div>
                        </div>
                        <div class="card gradient-peach">
                            <div class="card-header">
                                <div class="card-title">Input Group</div>
                            </div>
                            <div class="card-body">
                                <div class="input-group mb-3 control-light">
                                    <span class="input-group-text">@</span>
                                    <input type="text" class="form-control" placeholder="Username">
                                </div>
                                <div class="input-group mb-3 control-light"><input type="text" class="form-control"
                                                                                   placeholder="Name"><span
                                        class="input-group-text">@cliq.com</span></div>
                                <div class="input-group mb-3 control-light"><span
                                        class="input-group-text">$</span><input type="text" class="form-control"><span
                                        class="input-group-text">.00</span></div>
                                <div class="input-group mb-3 control-light"><input type="text" class="form-control"
                                                                                   placeholder="Username"><span
                                        class="input-group-text">@</span><input type="text" class="form-control"
                                                                                placeholder="Server"></div>
                                <div class="input-group mb-3 control-light"><span
                                        class="input-group-text">Textarea</span><textarea class="form-control"
                                                                                          aria-label="With textarea"></textarea>
                                </div>
                                <div class="input-group mb-3 control-light"><span class="input-group-text">$</span><span
                                        class="input-group-text">0.00</span><input type="text" class="form-control">
                                </div>
                                <div class="input-group m-0 control-light"><input type="text" class="form-control"><span
                                        class="input-group-text">$</span><span class="input-group-text">0.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="card gradient-brick">
                            <div class="card-header">
                                <div class="card-title">Check Boxes</div>
                            </div>
                            <div class="card-body">
                                <div class="form-check control-light"><input class="form-check-input" type="checkbox"
                                                                             value=""><label class="form-check-label">Default
                                        checkbox</label></div>
                                <div class="form-check control-light"><input class="form-check-input" type="checkbox"
                                                                             value="" checked><label
                                        class="form-check-label">Checked checkbox</label></div>
                                <div class="form-check control-light"><input class="form-check-input" type="checkbox"
                                                                             value="" disabled><label
                                        class="form-check-label">Disabled checkbox</label></div>
                                <div class="form-check control-light"><input class="form-check-input" type="checkbox"
                                                                             value="" checked disabled><label
                                        class="form-check-label">Disabled checked checkbox</label></div>
                                <hr>
                                <div class="form-check form-check-inline control-light"><input class="form-check-input"
                                                                                               type="checkbox"><label
                                        class="form-check-label">1</label></div>
                                <div class="form-check form-check-inline control-light"><input class="form-check-input"
                                                                                               type="checkbox"
                                                                                               checked><label
                                        class="form-check-label">2</label></div>
                                <div class="form-check form-check-inline control-light"><input class="form-check-input"
                                                                                               type="checkbox" disabled><label
                                        class="form-check-label">3 (Disabled)</label></div>
                            </div>
                        </div>
                        <div class="card gradient-green">
                            <div class="card-header">
                                <div class="card-title">Radio Buttons</div>
                            </div>
                            <div class="card-body">
                                <div class="form-check control-light"><input class="form-check-input" type="radio"
                                                                             name="flexRadioDefaultLight"
                                                                             id="flexRadioDefaultLight1"><label
                                        class="form-check-label" for="flexRadioDefaultLight1">Default radio</label>
                                </div>
                                <div class="form-check control-light"><input class="form-check-input" type="radio"
                                                                             name="flexRadioDefaultLight"
                                                                             id="flexRadioDefaultLight2" checked><label
                                        class="form-check-label" for="flexRadioDefaultLight2">Default checked
                                        radio</label></div>
                                <div class="form-check control-light"><input class="form-check-input" type="radio"
                                                                             name="flexRadioDisabledLight"
                                                                             id="flexRadioDisabledLight" disabled><label
                                        class="form-check-label" for="flexRadioDisabledLight">Disabled radio</label>
                                </div>
                                <div class="form-check control-light"><input class="form-check-input" type="radio"
                                                                             name="flexRadioDisabledLight"
                                                                             id="flexRadioCheckedDisabledLight" checked
                                                                             disabled><label class="form-check-label"
                                                                                             for="flexRadioCheckedDisabledLight">Disabled
                                        checked radio</label></div>
                                <hr>
                                <div class="form-check form-check-inline control-light"><input class="form-check-input"
                                                                                               type="radio"
                                                                                               name="inlineRadioOptionsLight"
                                                                                               value="option1"><label
                                        class="form-check-label">1</label></div>
                                <div class="form-check form-check-inline control-light"><input class="form-check-input"
                                                                                               type="radio"
                                                                                               name="inlineRadioOptionsLight"
                                                                                               value="option2"
                                                                                               checked><label
                                        class="form-check-label">2</label></div>
                                <div class="form-check form-check-inline control-light"><input class="form-check-input"
                                                                                               type="radio"
                                                                                               name="inlineRadioOptionsLightDisabled"
                                                                                               value="option3" checked
                                                                                               disabled><label
                                        class="form-check-label">3 (disabled)</label></div>
                            </div>
                        </div>
                        <div class="card gradient-violet">
                            <div class="card-header">
                                <div class="card-title">Switches</div>
                            </div>
                            <div class="card-body">
                                <div class="control-light">
                                    <div class="form-check form-switch"><input class="form-check-input" type="checkbox"
                                                                               id="flexSwitchCheckDefault"><label
                                            class="form-check-label" for="flexSwitchCheckDefault">Default Switch</label>
                                    </div>
                                </div>
                                <div class="control-light">
                                    <div class="form-check form-switch"><input class="form-check-input" type="checkbox"
                                                                               id="flexSwitchCheckChecked"
                                                                               checked><label class="form-check-label"
                                                                                              for="flexSwitchCheckChecked">Checked
                                            Switch</label></div>
                                </div>
                                <div class="control-light">
                                    <div class="form-check form-switch"><input class="form-check-input" type="checkbox"
                                                                               id="flexSwitchCheckDisabled"
                                                                               disabled><label class="form-check-label"
                                                                                               for="flexSwitchCheckDisabled">Disabled
                                            Switch</label></div>
                                </div>
                                <div class="control-light">
                                    <div class="form-check form-switch"><input class="form-check-input" type="checkbox"
                                                                               id="flexSwitchCheckCheckedDisabled"
                                                                               checked disabled><label
                                            class="form-check-label" for="flexSwitchCheckCheckedDisabled">Disabled
                                            Checked Switch</label></div>
                                </div>
                            </div>
                        </div>
                        <div class="card gradient-yellow">
                            <div class="card-header">
                                <div class="card-title">Custom File Input</div>
                            </div>
                            <div class="card-body">
                                <div class="input-group mb-3 control-light"><label
                                        class="input-group-text">Upload</label><input type="file" class="form-control">
                                </div>
                                <div class="input-group m-0 control-light"><input type="file"
                                                                                  class="form-control"><label
                                        class="input-group-text">Upload</label></div>
                            </div>
                        </div>
                        <div class="card gradient-peach">
                            <div class="card-header">
                                <div class="card-title">Select Fields</div>
                            </div>
                            <div class="card-body">
                                <div class="mb-3 control-light"><label class="form-label">Selcet Field</label><select
                                        class="form-select" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select></div>
                                <div class="m-0 control-light"><label class="form-label">Disabled Selcet</label><select
                                        class="form-select" aria-label="Default select example" disabled>
                                        <option>Open this select menu</option>
                                        <option selected value="1">Disabled</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class="card gradient-green">
                            <div class="card-header">
                                <div class="card-title">Button Addons</div>
                            </div>
                            <div class="card-body">
                                <div class="input-group mb-3 control-light">
                                    <button class="btn btn-success" type="button">Button</button>
                                    <input type="text" class="form-control" placeholder=""></div>
                                <div class="input-group m-0 control-light"><input type="text" class="form-control"
                                                                                  placeholder="">
                                    <button class="btn btn-warning" type="button">Button</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="card gradient-pearl">
                            <div class="card-header">
                                <div class="card-title dark">Input Fields Light Color</div>
                            </div>
                            <div class="card-body">
                                <div class="mb-3"><label class="form-label">Input Field</label><input type="text"
                                                                                                      class="form-control"
                                                                                                      placeholder="Enter text">
                                </div>
                                <div class="mb-3"><label class="form-label">Disabled Input Field</label><input
                                        type="text" class="form-control" value="Disabled Field" disabled></div>
                                <div class="mb-3"><label class="form-label">Readonly Input Field</label><input
                                        type="text" class="form-control" value="Readonly Field" readonly></div>
                                <div class="mb-3"><label class="form-label">Password Input Field</label><input
                                        type="password" class="form-control" value="12345"></div>
                                <div class="m-0"><label class="form-label">Textarea</label><textarea
                                        class="form-control" rows="2"></textarea></div>
                            </div>
                        </div>
                        <div class="card gradient-pearl">
                            <div class="card-header">
                                <div class="card-title dark">Input Group Light</div>
                            </div>
                            <div class="card-body">
                                <div class="input-group mb-3"><span class="input-group-text">@</span><input type="text"
                                                                                                            class="form-control"
                                                                                                            placeholder="Username">
                                </div>
                                <div class="input-group mb-3"><input type="text" class="form-control"
                                                                     placeholder="Name"><span class="input-group-text">@cliq.com</span>
                                </div>
                                <div class="input-group mb-3"><span class="input-group-text">$</span><input type="text"
                                                                                                            class="form-control"><span
                                        class="input-group-text">.00</span></div>
                                <div class="input-group mb-3"><input type="text" class="form-control"
                                                                     placeholder="Username"><span
                                        class="input-group-text">@</span><input type="text" class="form-control"
                                                                                placeholder="Server"></div>
                                <div class="input-group mb-3"><span class="input-group-text">Textarea</span><textarea
                                        class="form-control" aria-label="With textarea"></textarea></div>
                                <div class="input-group mb-3"><span class="input-group-text">$</span><span
                                        class="input-group-text">0.00</span><input type="text" class="form-control">
                                </div>
                                <div class="input-group m-0"><input type="text" class="form-control"><span
                                        class="input-group-text">$</span><span class="input-group-text">0.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="card gradient-pearl">
                            <div class="card-header">
                                <div class="card-title dark">Check Boxes</div>
                            </div>
                            <div class="card-body">
                                <div class="form-check"><input class="form-check-input" type="checkbox" value=""><label
                                        class="form-check-label">Default checkbox</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" value=""
                                                               checked><label class="form-check-label">Checked
                                        checkbox</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" value=""
                                                               disabled><label class="form-check-label">Disabled
                                        checkbox</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" value="" checked
                                                               disabled><label class="form-check-label">Disabled checked
                                        checkbox</label></div>
                                <hr class="dark">
                                <div class="form-check form-check-inline"><input class="form-check-input"
                                                                                 type="checkbox"><label
                                        class="form-check-label">1</label></div>
                                <div class="form-check form-check-inline"><input class="form-check-input"
                                                                                 type="checkbox" checked><label
                                        class="form-check-label">2</label></div>
                                <div class="form-check form-check-inline"><input class="form-check-input"
                                                                                 type="checkbox" disabled><label
                                        class="form-check-label">3 (Disabled)</label></div>
                            </div>
                        </div>
                        <div class="card gradient-pearl">
                            <div class="card-header">
                                <div class="card-title dark">Radio Buttons</div>
                            </div>
                            <div class="card-body">
                                <div class="form-check"><input class="form-check-input" type="radio"
                                                               name="flexRadioDefault" id="flexRadioDefault1"><label
                                        class="form-check-label" for="flexRadioDefault1">Default radio</label></div>
                                <div class="form-check"><input class="form-check-input" type="radio"
                                                               name="flexRadioDefault" id="flexRadioDefault2"
                                                               checked><label class="form-check-label"
                                                                              for="flexRadioDefault2">Default checked
                                        radio</label></div>
                                <div class="form-check"><input class="form-check-input" type="radio"
                                                               name="flexRadioDisabled" id="flexRadioDisabled" disabled><label
                                        class="form-check-label" for="flexRadioDisabled">Disabled radio</label></div>
                                <div class="form-check"><input class="form-check-input" type="radio"
                                                               name="flexRadioDisabled" id="flexRadioCheckedDisabled"
                                                               checked disabled><label class="form-check-label"
                                                                                       for="flexRadioCheckedDisabled">Disabled
                                        checked radio</label></div>
                                <hr class="light">
                                <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                                                                 name="inlineRadioOptions"
                                                                                 value="option4"><label
                                        class="form-check-label">1</label></div>
                                <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                                                                 name="inlineRadioOptions"
                                                                                 value="option5" checked><label
                                        class="form-check-label">2</label></div>
                                <div class="form-check form-check-inline"><input class="form-check-input" type="radio"
                                                                                 name="inlineRadioOptionsDisabled"
                                                                                 value="option6" checked disabled><label
                                        class="form-check-label">3 (disabled)</label></div>
                            </div>
                        </div>
                        <div class="card gradient-pearl">
                            <div class="card-header">
                                <div class="card-title dark">Switches Light</div>
                            </div>
                            <div class="card-body">
                                <div class="form-check form-switch"><input class="form-check-input" type="checkbox"
                                                                           id="flexSwitchCheckDefault2"><label
                                        class="form-check-label" for="flexSwitchCheckDefault2">Default Switch</label>
                                </div>
                                <div class="form-check form-switch"><input class="form-check-input" type="checkbox"
                                                                           id="flexSwitchCheckChecked2" checked><label
                                        class="form-check-label" for="flexSwitchCheckChecked2">Checked Switch</label>
                                </div>
                                <div class="form-check form-switch"><input class="form-check-input" type="checkbox"
                                                                           id="flexSwitchCheckDisabled2" disabled><label
                                        class="form-check-label" for="flexSwitchCheckDisabled2">Disabled Switch</label>
                                </div>
                                <div class="form-check form-switch"><input class="form-check-input" type="checkbox"
                                                                           id="flexSwitchCheckCheckedDisabled2" checked
                                                                           disabled><label class="form-check-label"
                                                                                           for="flexSwitchCheckCheckedDisabled2">Disabled
                                        Checked Switch</label></div>
                            </div>
                        </div>
                        <div class="card gradient-pearl">
                            <div class="card-header">
                                <div class="card-title dark">Custom File Input</div>
                            </div>
                            <div class="card-body">
                                <div class="input-group mb-3"><label class="input-group-text">Upload</label><input
                                        type="file" class="form-control"></div>
                                <div class="input-group m-0"><input type="file" class="form-control"><label
                                        class="input-group-text">Upload</label></div>
                            </div>
                        </div>
                        <div class="card gradient-pearl">
                            <div class="card-header">
                                <div class="card-title dark">Select Fields</div>
                            </div>
                            <div class="card-body">
                                <div class="mb-3"><label class="form-label">Selcet Field</label><select
                                        class="form-select" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select></div>
                                <div class="m-0"><label class="form-label">Disabled Selcet</label><select
                                        class="form-select" aria-label="Default select example" disabled>
                                        <option>Open this select menu</option>
                                        <option selected value="1">Disabled</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class="card gradient-pearl">
                            <div class="card-header">
                                <div class="card-title dark">Button Addons</div>
                            </div>
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <button class="btn btn-info" type="button">Button</button>
                                    <input type="text" class="form-control" placeholder=""></div>
                                <div class="input-group m-0"><input type="text" class="form-control" placeholder="">
                                    <button class="btn btn-dark" type="button">Button</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="card gradient-dark-grey">
                            <div class="card-header">
                                <div class="card-title">Input Fields Dark Color</div>
                            </div>
                            <div class="card-body">
                                <div class="mb-3 control-dark"><label class="form-label">Input Field</label><input
                                        type="text" class="form-control" placeholder="Enter text"></div>
                                <div class="mb-3 control-dark"><label class="form-label">Disabled Input
                                        Field</label><input type="text" class="form-control" value="Disabled Field"
                                                            disabled></div>
                                <div class="mb-3 control-dark"><label class="form-label">Readonly Input
                                        Field</label><input type="text" class="form-control" value="Readonly Field"
                                                            readonly></div>
                                <div class="mb-3 control-dark"><label class="form-label">Password Input
                                        Field</label><input type="password" class="form-control" value="12345"></div>
                                <div class="m-0 control-dark"><label class="form-label">Textarea</label><textarea
                                        class="form-control" rows="2"></textarea></div>
                            </div>
                        </div>
                        <div class="card gradient-dark-grey">
                            <div class="card-header">
                                <div class="card-title">Input Group Dark</div>
                            </div>
                            <div class="card-body">
                                <div class="input-group mb-3 control-dark"><span class="input-group-text">@</span><input
                                        type="text" class="form-control" placeholder="Username"></div>
                                <div class="input-group mb-3 control-dark"><input type="text" class="form-control"
                                                                                  placeholder="Name"><span
                                        class="input-group-text">@cliq.com</span></div>
                                <div class="input-group mb-3 control-dark"><span class="input-group-text">$</span><input
                                        type="text" class="form-control"><span class="input-group-text">.00</span></div>
                                <div class="input-group mb-3 control-dark"><input type="text" class="form-control"
                                                                                  placeholder="Username"><span
                                        class="input-group-text">@</span><input type="text" class="form-control"
                                                                                placeholder="Server"></div>
                                <div class="input-group mb-3 control-dark"><span
                                        class="input-group-text">Textarea</span><textarea class="form-control"
                                                                                          aria-label="With textarea"></textarea>
                                </div>
                                <div class="input-group mb-3 control-dark"><span class="input-group-text">$</span><span
                                        class="input-group-text">0.00</span><input type="text" class="form-control">
                                </div>
                                <div class="input-group m-0 control-dark"><input type="text" class="form-control"><span
                                        class="input-group-text">$</span><span class="input-group-text">0.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="card gradient-dark-grey">
                            <div class="card-header">
                                <div class="card-title">Check Boxes</div>
                            </div>
                            <div class="card-body">
                                <div class="form-check control-dark"><input class="form-check-input" type="checkbox"
                                                                            value=""><label class="form-check-label">Default
                                        checkbox</label></div>
                                <div class="form-check control-dark"><input class="form-check-input" type="checkbox"
                                                                            value="" checked><label
                                        class="form-check-label">Checked checkbox</label></div>
                                <div class="form-check control-dark"><input class="form-check-input" type="checkbox"
                                                                            value="" disabled><label
                                        class="form-check-label">Disabled checkbox</label></div>
                                <div class="form-check control-dark"><input class="form-check-input" type="checkbox"
                                                                            value="" checked disabled><label
                                        class="form-check-label">Disabled checked checkbox</label></div>
                                <hr class="dark">
                                <div class="form-check form-check-inline control-dark"><input class="form-check-input"
                                                                                              type="checkbox"><label
                                        class="form-check-label">1</label></div>
                                <div class="form-check form-check-inline control-dark"><input class="form-check-input"
                                                                                              type="checkbox"
                                                                                              checked><label
                                        class="form-check-label">2</label></div>
                                <div class="form-check form-check-inline control-dark"><input class="form-check-input"
                                                                                              type="checkbox"
                                                                                              disabled><label
                                        class="form-check-label">3 (Disabled)</label></div>
                            </div>
                        </div>
                        <div class="card gradient-dark-grey">
                            <div class="card-header">
                                <div class="card-title">Radio Buttons</div>
                            </div>
                            <div class="card-body">
                                <div class="form-check control-dark"><input class="form-check-input" type="radio"
                                                                            name="flexRadioDefaultDark"
                                                                            id="flexRadioDefaultDark1"><label
                                        class="form-check-label" for="flexRadioDefaultDark1">Default radio</label></div>
                                <div class="form-check control-dark"><input class="form-check-input" type="radio"
                                                                            name="flexRadioDefaultDark"
                                                                            id="flexRadioDefaultDark2" checked><label
                                        class="form-check-label" for="flexRadioDefaultDark2">Default checked
                                        radio</label></div>
                                <div class="form-check control-dark"><input class="form-check-input" type="radio"
                                                                            name="flexRadioDisabledDark"
                                                                            id="flexRadioDisabledDark" disabled><label
                                        class="form-check-label" for="flexRadioDisabledDark">Disabled radio</label>
                                </div>
                                <div class="form-check control-dark"><input class="form-check-input" type="radio"
                                                                            name="flexRadioDisabledDark"
                                                                            id="flexRadioCheckedDisabledDark" checked
                                                                            disabled><label class="form-check-label"
                                                                                            for="flexRadioCheckedDisabledDark">Disabled
                                        checked radio</label></div>
                                <hr class="dark">
                                <div class="form-check form-check-inline control-dark"><input class="form-check-input"
                                                                                              type="radio"
                                                                                              name="inlineRadioOptionsDark"
                                                                                              value="option7"><label
                                        class="form-check-label">1</label></div>
                                <div class="form-check form-check-inline control-dark"><input class="form-check-input"
                                                                                              type="radio"
                                                                                              name="inlineRadioOptionsDark"
                                                                                              value="option8"
                                                                                              checked><label
                                        class="form-check-label">2</label></div>
                                <div class="form-check form-check-inline control-dark"><input class="form-check-input"
                                                                                              type="radio"
                                                                                              name="inlineRadioOptionsDarkDisabled"
                                                                                              value="option9" checked
                                                                                              disabled><label
                                        class="form-check-label">3 (disabled)</label></div>
                            </div>
                        </div>
                        <div class="card gradient-dark-grey">
                            <div class="card-header">
                                <div class="card-title">Switches Dark</div>
                            </div>
                            <div class="card-body">
                                <div class="control-light">
                                    <div class="form-check form-switch"><input class="form-check-input" type="checkbox"
                                                                               id="flexSwitchCheckDefault3"><label
                                            class="form-check-label" for="flexSwitchCheckDefault3">Default
                                            Switch</label></div>
                                </div>
                                <div class="control-light">
                                    <div class="form-check form-switch"><input class="form-check-input" type="checkbox"
                                                                               id="flexSwitchCheckChecked3"
                                                                               checked><label class="form-check-label"
                                                                                              for="flexSwitchCheckChecked3">Checked
                                            Switch</label></div>
                                </div>
                                <div class="control-light">
                                    <div class="form-check form-switch"><input class="form-check-input" type="checkbox"
                                                                               id="flexSwitchCheckDisabled3"
                                                                               disabled><label class="form-check-label"
                                                                                               for="flexSwitchCheckDisabled3">Disabled
                                            Switch</label></div>
                                </div>
                                <div class="control-light">
                                    <div class="form-check form-switch"><input class="form-check-input" type="checkbox"
                                                                               id="flexSwitchCheckCheckedDisabled3"
                                                                               checked disabled><label
                                            class="form-check-label" for="flexSwitchCheckCheckedDisabled3">Disabled
                                            Checked Switch</label></div>
                                </div>
                            </div>
                        </div>
                        <div class="card gradient-dark-grey">
                            <div class="card-header">
                                <div class="card-title">Custom File Input</div>
                            </div>
                            <div class="card-body">
                                <div class="input-group mb-3 control-dark"><label
                                        class="input-group-text">Upload</label><input type="file" class="form-control">
                                </div>
                                <div class="input-group m-0 control-dark"><input type="file" class="form-control"><label
                                        class="input-group-text">Upload</label></div>
                            </div>
                        </div>
                        <div class="card gradient-dark-grey">
                            <div class="card-header">
                                <div class="card-title">Select Fields</div>
                            </div>
                            <div class="card-body">
                                <div class="mb-3 control-dark"><label class="form-label">Selcet Field</label><select
                                        class="form-select" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select></div>
                                <div class="m-0 control-dark"><label class="form-label">Disabled Selcet</label><select
                                        class="form-select" aria-label="Default select example" disabled>
                                        <option>Open this select menu</option>
                                        <option selected value="1">Disabled</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select></div>
                            </div>
                        </div>
                        <div class="card gradient-dark-grey">
                            <div class="card-header">
                                <div class="card-title">Button Addons</div>
                            </div>
                            <div class="card-body">
                                <div class="input-group mb-3 control-dark">
                                    <button class="btn btn-secondary" type="button">Button</button>
                                    <input type="text" class="form-control" placeholder=""></div>
                                <div class="input-group m-0 control-dark"><input type="text" class="form-control"
                                                                                 placeholder="">
                                    <button class="btn btn-light" type="button">Button</button>
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
<!-- Mirrored from bootstrap.gallery/cliq/forms.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Sep 2022 08:40:44 GMT -->
</html>
