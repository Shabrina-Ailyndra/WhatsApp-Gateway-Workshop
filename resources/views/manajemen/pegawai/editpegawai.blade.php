@extends('layout.master')
@section('style')
    <link rel="stylesheet" href="/assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css" />

    <link rel="stylesheet" href="/assets/compiled/css/table-datatable-jquery.css" />
@endsection
@section('sidebar')
    @include('layout.sidebar-manajemen')
@endsection
@section('konten')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataTable - Mazer Admin Dashboard</title>
    
    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="stylesheet" href="assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png">
    
<link rel="stylesheet" href="assets/extensions/simple-datatables/style.css">
<link rel="stylesheet" href="assets/css/pages/simple-datatables.css">

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header position-relative">
        <div class="d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href="index.html"><img src="assets/images/logo/logo.svg" alt="Logo" srcset=""></a>
            </div>
            <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2" opacity=".3"></path><g transform="translate(-210 -1)"><path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path><circle cx="220.5" cy="11.5" r="4"></circle><path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path></g></g></svg>
                <div class="form-check form-switch fs-6">
                    <input class="form-check-input  me-0" type="checkbox" id="toggle-dark" >
                    <label class="form-check-label" ></label>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z"></path></svg>
            </div>
            <div class="sidebar-toggler  x">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>
            
            <li
                class="sidebar-item  ">
                <a href="index.html" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            
            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-stack"></i>
                    <span>Components</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="component-alert.html">Alert</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="component-badge.html">Badge</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="component-breadcrumb.html">Breadcrumb</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="component-button.html">Button</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="component-card.html">Card</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="component-carousel.html">Carousel</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="component-collapse.html">Collapse</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="component-dropdown.html">Dropdown</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="component-list-group.html">List Group</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="component-modal.html">Modal</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="component-navs.html">Navs</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="component-pagination.html">Pagination</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="component-progress.html">Progress</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="component-spinner.html">Spinner</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="component-tooltip.html">Tooltip</a>
                    </li>
                </ul>
            </li>
            
            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-collection-fill"></i>
                    <span>Extra Components</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="extra-component-avatar.html">Avatar</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="extra-component-sweetalert.html">Sweet Alert</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="extra-component-toastify.html">Toastify</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="extra-component-rating.html">Rating</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="extra-component-divider.html">Divider</a>
                    </li>
                </ul>
            </li>
            
            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-grid-1x2-fill"></i>
                    <span>Layouts</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="layout-default.html">Default Layout</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="layout-vertical-1-column.html">1 Column</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="layout-vertical-navbar.html">Vertical Navbar</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="layout-rtl.html">RTL Layout</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="layout-horizontal.html">Horizontal Menu</a>
                    </li>
                </ul>
            </li>
            
            <li class="sidebar-title">Forms &amp; Tables</li>
            
            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-hexagon-fill"></i>
                    <span>Form Elements</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="form-element-input.html">Input</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="form-element-input-group.html">Input Group</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="form-element-select.html">Select</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="form-element-radio.html">Radio</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="form-element-checkbox.html">Checkbox</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="form-element-textarea.html">Textarea</a>
                    </li>
                </ul>
            </li>
            
            <li
                class="sidebar-item  ">
                <a href="form-layout.html" class='sidebar-link'>
                    <i class="bi bi-file-earmark-medical-fill"></i>
                    <span>Form Layout</span>
                </a>
            </li>
            
            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-journal-check"></i>
                    <span>input pegawai</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="form-validation-parsley.html">input pegawai</a>
                    </li>
                </ul>
            </li>
            
            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-pen-fill"></i>
                    <span>Form Editor</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="form-editor-quill.html">Quill</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="form-editor-ckeditor.html">CKEditor</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="form-editor-summernote.html">Summernote</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="form-editor-tinymce.html">TinyMCE</a>
                    </li>
                </ul>
            </li>
            
            <li
                class="sidebar-item  ">
                <a href="table.html" class='sidebar-link'>
                    <i class="bi bi-grid-1x2-fill"></i>
                    <span>Table</span>
                </a>
            </li>
            
            <li
                class="sidebar-item active has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                    <span>Edit data pegawai</span>
                </a>
                <ul class="submenu active">
                    <li class="submenu-item active">
                        <a href="table-datatable.html">edit data pegawai</a>
                    </li>
                    <!-- <li class="submenu-item ">
                        <a href="table-datatable-jquery.html">Datatable (jQuery)</a>
                    </li> -->
                </ul>
            </li>
            
            <li class="sidebar-title">Extra UI</li>
            
            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-pentagon-fill"></i>
                    <span>Widgets</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="ui-widgets-chatbox.html">Chatbox</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="ui-widgets-pricing.html">Pricing</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="ui-widgets-todolist.html">To-do List</a>
                    </li>
                </ul>
            </li>
            
            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-egg-fill"></i>
                    <span>Icons</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="ui-icons-bootstrap-icons.html">Bootstrap Icons </a>
                    </li>
                    <li class="submenu-item ">
                        <a href="ui-icons-fontawesome.html">Fontawesome</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="ui-icons-dripicons.html">Dripicons</a>
                    </li>
                </ul>
            </li>
            
            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-bar-chart-fill"></i>
                    <span>Charts</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="ui-chart-chartjs.html">ChartJS</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="ui-chart-apexcharts.html">Apexcharts</a>
                    </li>
                </ul>
            </li>
            
            <li
                class="sidebar-item  ">
                <a href="ui-file-uploader.html" class='sidebar-link'>
                    <i class="bi bi-cloud-arrow-up-fill"></i>
                    <span>File Uploader</span>
                </a>
            </li>
            
            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-map-fill"></i>
                    <span>Maps</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="ui-map-google-map.html">Google Map</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="ui-map-jsvectormap.html">JS Vector Map</a>
                    </li>
                </ul>
            </li>
            
            <li class="sidebar-title">Pages</li>
            
            <li
                class="sidebar-item  ">
                <a href="application-email.html" class='sidebar-link'>
                    <i class="bi bi-envelope-fill"></i>
                    <span>Email Application</span>
                </a>
            </li>
            
            <li
                class="sidebar-item  ">
                <a href="application-chat.html" class='sidebar-link'>
                    <i class="bi bi-chat-dots-fill"></i>
                    <span>Chat Application</span>
                </a>
            </li>
            
            <li
                class="sidebar-item  ">
                <a href="application-gallery.html" class='sidebar-link'>
                    <i class="bi bi-image-fill"></i>
                    <span>Photo Gallery</span>
                </a>
            </li>
            
            <li
                class="sidebar-item  ">
                <a href="application-checkout.html" class='sidebar-link'>
                    <i class="bi bi-basket-fill"></i>
                    <span>Checkout Page</span>
                </a>
            </li>
            
            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-person-badge-fill"></i>
                    <span>Authentication</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="auth-login.html">Login</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="auth-register.html">Register</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="auth-forgot-password.html">Forgot Password</a>
                    </li>
                </ul>
            </li>
            
            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-x-octagon-fill"></i>
                    <span>Errors</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="error-403.html">403</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="error-404.html">404</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="error-500.html">500</a>
                    </li>
                </ul>
            </li>
            
            <li class="sidebar-title">Raise Support</li>
            
            <li
                class="sidebar-item  ">
                <a href="https://zuramai.github.io/mazer/docs" class='sidebar-link'>
                    <i class="bi bi-life-preserver"></i>
                    <span>Documentation</span>
                </a>
            </li>
            
            <li
                class="sidebar-item  ">
                <a href="https://github.com/zuramai/mazer/blob/main/CONTRIBUTING.md" class='sidebar-link'>
                    <i class="bi bi-puzzle"></i>
                    <span>Contribute</span>
                </a>
            </li>
            
            <li
                class="sidebar-item  ">
                <a href="https://github.com/zuramai/mazer#donation" class='sidebar-link'>
                    <i class="bi bi-cash"></i>
                    <span>Donate</span>
                </a>
            </li>
            
        </ul>
    </div>
</div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Edit data pegawai</h3>
                <p class="text-subtitle text-muted">A sortable, searchable, paginated table without dependencies thanks to simple-datatables</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                Simple Datatable
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nama</th>
                            <th>Role</th>
                            <th>No Telp</th>
                            <th>Status</th>
                            <th>edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>00001</td>
                            <td>Nathanael</td>
                            <td>admin</td>
                            <td>085653148521</td>
                            
                            <td>
                                <span class="badge bg-success">aktif</span>
                            </td>
                            <td>
                                <a href="form-validation-parsley.html">
                                    <button id="editButton">Edit</button></td> 
                                </a>
                                
                            
                        </tr>
                        <tr>
                            <td>00002</td>
                            <td>Giska</td>
                            <td>admin</td>
                            <td>085646854320</td>
                            
                            <td>
                                <span class="badge bg-success">aktif</span>
                            </td>
                            <td>
                                <a href="form-validation-parsley.html">
                                    <button id="editButton">Edit</button></td> 
                                </a>
                        </tr>
                        <tr>
                            <td>00003</td>
                            <td>Raniah</td>
                            <td>admin</td>
                            <td>085463214101</td>
                             
                            <td>
                                <span class="badge bg-success">aktif</span>
                            </td>
                            <td>
                                <a href="form-validation-parsley.html">
                                    <button id="editButton">Edit</button></td> 
                                </a>
                        </tr>
                        <tr>
                            <td>00004</td>
                            <td>Bima</td>
                            <td>admin</td>
                            <td>085478962545</td>
                             
                            <td>
                                <span class="badge bg-success">aktif</span>
                            </td>
                            <td>
                                <a href="form-validation-parsley.html">
                                    <button id="editButton">Edit</button></td> 
                                </a>
                        </tr>
                        <tr>
                            <td>00005</td>
                            <td>Mina</td>
                            <td>admin</td>
                            <td>085479685021</td> 
                            <td>
                                <span class="badge bg-success">aktif</span>
                            </td>
                            <td>
                                <a href="form-validation-parsley.html">
                                    <button id="editButton">Edit</button></td> 
                                </a>
                        </tr>
                        <tr>
                            <td>00006</td>
                            <td>Nasya</td>
                            <td>admin</td>
                            <td>085475210013</td>
                            <td>
                                <span class="badge bg-success">aktif</span>
                            </td>
                            <td>
                                <a href="form-validation-parsley.html">
                                    <button id="editButton">Edit</button></td> 
                                </a>
                        </tr>
                        <tr>
                            <td>00007</td>
                            <td>Yuni</td>
                            <td>admin</td>
                            <td>085459875012</td> 
                            <td>
                                <span class="badge bg-success">aktif</span>
                            </td>
                            <td>
                                <a href="form-validation-parsley.html">
                                    <button id="editButton">Edit</button></td> 
                                </a>
                        </tr>
                        <tr>
                            <td>00008</td>
                            <td>Arin</td>
                            <td>admin</td>
                            <td>085469825014</td> 
                            <td>
                                <span class="badge bg-success">aktif</span>
                            </td>
                            <td>
                                <a href="form-validation-parsley.html">
                                    <button id="editButton">Edit</button></td> 
                                </a>
                        </tr>
                        <tr>
                            <td>00009</td>
                            <td>Byann</td>
                            <td>admin</td>
                            <td>085647845488</td> 
                            <td>
                                <span class="badge bg-danger">tidak aktif</span>
                            </td>
                            <td>
                                <a href="form-validation-parsley.html">
                                    <button id="editButton">Edit</button></td> 
                                </a>
                        </tr>
                        <tr>
                            <td>00010</td>
                            <td>Biin</td>
                            <td>admin</td>
                            <td>085469825015</td> 
                            <td>
                                <span class="badge bg-success">aktif</span>
                            </td>
                            <td>
                                <a href="form-validation-parsley.html">
                                    <button id="editButton">Edit</button></td> 
                                </a>
                        </tr>
                        <!-- <tr>
                            <td>Channing</td>
                            <td>tempor.bibendum.Donec@ornarelectusante.ca</td>
                            <td>0845 46 49</td>
                            <td>Warrnambool</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Aladdin</td>
                            <td>sem.ut@pellentesqueafacilisis.ca</td>
                            <td>0800 1111</td>
                            <td>Bothey</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Cruz</td>
                            <td>non@quisturpisvitae.ca</td>
                            <td>07624 944915</td>
                            <td>Shikarpur</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Keegan</td>
                            <td>molestie.dapibus@condimentumDonecat.edu</td>
                            <td>0800 200103</td>
                            <td>Assen</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Ray</td>
                            <td>placerat.eget@sagittislobortis.edu</td>
                            <td>(0112) 896 6829</td>
                            <td>Hofors</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Maxwell</td>
                            <td>diam@dapibus.org</td>
                            <td>0334 836 4028</td>
                            <td>Thane</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Carter</td>
                            <td>urna.justo.faucibus@orci.com</td>
                            <td>07079 826350</td>
                            <td>Biez</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Stone</td>
                            <td>velit.Aliquam.nisl@sitametrisus.com</td>
                            <td>0800 1111</td>
                            <td>Olivar</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Berk</td>
                            <td>fringilla.porttitor.vulputate@taciti.edu</td>
                            <td>(0101) 043 2822</td>
                            <td>Sanquhar</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Philip</td>
                            <td>turpis@euenimEtiam.org</td>
                            <td>0500 571108</td>
                            <td>Okara</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Kibo</td>
                            <td>feugiat@urnajustofaucibus.co.uk</td>
                            <td>07624 682306</td>
                            <td>La Cisterna</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Bruno</td>
                            <td>elit.Etiam.laoreet@luctuslobortisClass.edu</td>
                            <td>07624 869434</td>
                            <td>Rocca d"Arce</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Leonard</td>
                            <td>blandit.enim.consequat@mollislectuspede.net</td>
                            <td>0800 1111</td>
                            <td>Lobbes</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Hamilton</td>
                            <td>mauris@diam.org</td>
                            <td>0800 256 8788</td>
                            <td>Sanzeno</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Harding</td>
                            <td>Lorem.ipsum.dolor@etnetuset.com</td>
                            <td>0800 1111</td>
                            <td>Obaix</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                        </tr>
                        <tr>
                            <td>Emmanuel</td>
                            <td>eget.lacus.Mauris@feugiatSednec.org</td>
                            <td>(016977) 8208</td>
                            <td>Saint-Remy-Geest</td> -->
                            <!-- <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="https://saugi.me">Saugi</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>
    
@endsection
@section('script')
    <script src="/assets/extensions/jquery/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
    <script src="/assets/static/js/pages/datatables.js"></script>
@endsection
