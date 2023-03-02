<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>IP man
    </title>
    <link rel="canonical" href="Https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon"
        href="https://w7.pngwing.com/pngs/463/207/png-transparent-wing-chun-shifu-self-defense-ip-man-wing-chun-leaf-text-silhouette.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="{{ asset('assets/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />


    <link href="{{ asset('assets/custom.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dataTables.bootstrap4.min.css') }}" rel="stylesheet">


</head>
<style>
    .badge {
        border-radius: 24px;
    }
</style>

<body id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed"
    style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
    <div class="d-flex flex-column flex-root">
        <div class="page d-flex flex-row flex-column-fluid">
            {{-- <div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true"
                data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}"
                data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}"
                data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
                <div class="aside-logo flex-column-auto" id="kt_aside_logo">
                    <a href="https://multiversepos.com/home">
                        <img alt="Logo"
                            src="https://occ.a.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABa_hQikDefNRexdWI7FAjdloYhPnNwA1eQS6vj8LYndbp9_Recw1YxpV-10hpVcQs7aVJvrELUwr1osUdYkUqMMa2GC79cEo2xJrONUabp40.png?r=529"
                            class="h-30px logo" />
                    </a>
                    <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle"
                        data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
                        data-kt-toggle-name="aside-minimize">

                    </div>
                </div>
                <div class="aside-menu flex-column-fluid">
                    <div class="hover-scroll-overlay-y my-2 py-5 py-lg-8" id="kt_aside_menu_wrapper"
                        data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                        data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
                        data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
                        <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
                            id="#kt_aside_menu" data-kt-menu="true">
                            <div class="menu-item">
                                <a class=" menu-link active" href="https://multiversepos.com/home">
                                    <span class="menu-icon">
                                        <i class="bi bi-house fs-3"></i>
                                    </span>
                                    <span class="menu-title">Dashboard</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <div id="kt_header" style="" class="header align-items-stretch">
                    <div class="container-fluid d-flex align-items-stretch justify-content-between">
                        <div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
                            <div class="btn btn-icon btn-active-color-white" id="kt_aside_mobile_toggle">
                                <i class="bi bi-list fs-1"></i>
                            </div>
                        </div>
                        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                            <a href="index.html" class="d-lg-none">
                                <img alt="Logo" src="https://multiversepos.com/settings/logo_img.png"
                                    class="h-30px" />
                            </a>
                        </div>
                        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
                            <div class="d-flex align-items-stretch" id="kt_header_nav">
                                <div class="header-menu align-items-stretch" data-kt-drawer="true"
                                    data-kt-drawer-name="header-menu"
                                    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                                    data-kt-drawer-width="{default:'200px', '300px': '250px'}"
                                    data-kt-drawer-direction="end"
                                    data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-place="true"
                                    data-kt-place-mode="prepend"
                                    data-kt-place-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
                                    <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch"
                                        id="#kt_header_menu" data-kt-menu="true">
                                        <div class="menu-item me-lg-1">
                                            <a class="menu-link active py-3" href="#">
                                                <span class="menu-title">Dashboard</span>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="d-flex align-items-stretch flex-shrink-0">
                                <div class="topbar d-flex align-items-stretch flex-shrink-0">
                                    <div class="d-flex align-items-stretch" id="kt_header_user_menu_toggle">
                                        <div class="topbar-item cursor-pointer symbol px-3 px-lg-5 me-n3 me-lg-n5 symbol-30px symbol-md-35px"
                                            data-kt-menu-trigger="click" data-kt-menu-attach="parent"
                                            data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
                                            <img src="{{ asset('assets/admin.png') }}" alt="metronic" />
                                        </div>
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold py-4 fs-6 w-275px"
                                            data-kt-menu="true">
                                            <div class="menu-item px-3">
                                                <div class="menu-content d-flex align-items-center px-3">
                                                    <div class="symbol symbol-50px me-5">
                                                        <img alt="Logo" src="{{ asset('assets/admin.png') }}" />
                                                    </div>
                                                    <div class="profile_link d-flex flex-column">
                                                        <div class="fw-bolder d-flex align-items-center fs-5">
                                                            Superadmin
                                                            <span
                                                                class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">admin</span>
                                                        </div>
                                                        <a href="#"
                                                            class="fw-bold text-muted text-hover-primary fs-7">admin@ipman.com</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="separator my-2"></div>

                                            <div class="menu-item px-5">
                                                <form action="https://multiversepos.com/logout" method="post">
                                                    <input type="hidden" name="_token"
                                                        value="FU898jYR0fcSkgeNYICB1XB3KvCOrE0QBlE05GVQ"> <button
                                                        type="submit" class="menu-link px-5 btn_as_a">
                                                        Sign Out </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-stretch d-lg-none px-3 me-n3"
                                        title="Show header menu">
                                        <div class="topbar-item" id="kt_header_menu_mobile_toggle">
                                            <i class="bi bi-text-left fs-1"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-column flex-column-fluid" id="kt_content">
                    <div class="post d-flex flex-column-fluid" id="kt_post">
                        <div id="kt_content_container" class="container-fluid bg-white">
                            <div class="row gy-5 g-xl-8">
                                <div class="col-md-12">
                                    <div class="mb-13 text-center mt-13">
                                        <h1 class="mb-3">Dashboard</h1>
                                        @isset($start_ip)
                                            <h5 class="mb-3">({{ $start_ip }}) - ({{ $end_ip }})</h5>
                                        @endisset
                                    </div>
                                </div>
                            </div>
                            <a class="btn btn-sm btn-flex btn-success fw-bolder " data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                <i class="fas fa-plus fa-2x common_icon"></i>
                                Add Address</a>

                            @if (isset($start_ip))
                                <a class="btn btn-sm btn-flex btn-danger fw-bolder" href="{{ route('address') }}">
                                    <i class="fas fa-ban fa-2x common_icon"></i>
                                    Clear Filter</a>
                            @else
                                <a class="btn btn-sm btn-flex btn-primary fw-bolder " data-bs-toggle="modal"
                                    data-bs-target="#filterModal">
                                    <i class="fas fa-filter fa-2x common_icon"></i>
                                    Filter Address</a>
                            @endif

                            <a href="javascript:void(0);" class="btn btn-sm btn-danger delete-all"
                                style="display: none" data-url="{{ route('ip_bulk_delete') }}">
                                <i class="fa fa-trash"></i>
                                Delete Selected (<span id="lengthcek" style="font-weight: bolder;">0 </span> )
                            </a>

                            <a class="btn btn-secondary all_select">
                                Mark all
                                <input type="checkbox" name="check_data"
                                    class=" select_all  delete-all-checkBox  form-check-input "
                                    style="height: 25px; width:25px; margin-left:5px; cursor:pointer"
                                    id="select-all" />
                            </a>



                            <table id="kt_profile_overview_table "
                                class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bolder Product_table">
                                <thead class="fs-7 text-gray-400 text-uppercase">
                                    <tr>
                                        <th class="min-w-10px">ID</th>
                                        <th class="min-w-50px">IP address</th>
                                        <th class="min-w-250px">Description</th>
                                        <th class="min-w-250px">Location</th>
                                        <th class="min-w-250px">Previous</th>
                                        <th class="min-w-150px">Created Date</th>
                                        <th class="min-w-50px text-end">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="fs-6">
                                </tbody>

                            </table>
                        </div>
                    </div>


                    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add new Address</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form method="post" enctype="multipart/form-data" id="save_file">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="mb-10">
                                            <label class="form-label">IP Address</label>
                                            <input type="text" class="form-control" name="ip_address"
                                                placeholder="192.168.100.100" required>
                                        </div>
                                        <div class="mb-10">
                                            <label class="form-label">Description</label>
                                            <textarea class="form-control" id="form-label" name="description" rows="3" placeholder="description"
                                                required></textarea>
                                        </div>
                                        <div class="mb-10">
                                            <label class="form-label">Location</label>
                                            <input type="text" class="form-control" name="location"
                                                placeholder="location" required>
                                        </div>
                                        <div class="mb-10">
                                            <label class="form-label">Previous</label>
                                            <input type="text" class="form-control" name="previous"
                                                placeholder="Previous" required>
                                        </div>
                                        <div class="mb-10">
                                            <label class="form-label">Type</label>
                                            <select class="form-control" name="type" id="form-label" required>
                                                <option>server</option>
                                                <option>open IP</option>
                                                <option>Switch/Router</option>
                                                <option>Printers</option>
                                                <option>DHCP</option>
                                                <option>Special Devices</option>
                                                <option>PCs</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary btn-save">
                                            <span class="btn-text">Save Changes</span>
                                            <span
                                                class="spinner-border spinner-border-sm align-middle ms-2 btnLoader"></span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Address</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form method="post" enctype="multipart/form-data" id="update_form">
                                    @csrf
                                    <div class="show_edit">loading ...</div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary btn-save">
                                            <span class="btn-text">Save Changes</span>
                                            <span
                                                class="spinner-border spinner-border-sm align-middle ms-2 btnLoader"></span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="pingmodal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title pingtitle" id="exampleModalLabel"></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="pingdata">Loading <i class="fa fa-spinner fa-spin"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="filterModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Filter Address Range</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form method="POST" enctype="multipart/form-data" id=""
                                    action="{{ route('address') }}">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="mb-10">
                                            <label class="form-label">Start IP Address</label>
                                            <input type="text" class="form-control" name="start_ip"
                                                placeholder="192.168.100.100" required>
                                        </div>
                                        <div class="mb-10">
                                            <label class="form-label">End IP Address</label>
                                            <input type="text" class="form-control" name="end_ip"
                                                placeholder="192.168.100.110" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary btn-save">
                                            <span class="btn-text">Save Changes</span>
                                            <span
                                                class="spinner-border spinner-border-sm align-middle ms-2 btnLoader"></span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>





                    <div class="modal fade" id="kt_modal_product_detail" tabindex="-1" aria-hidden="true">

                        <div class="modal-dialog modal-dialog-centered mw-650px">

                            <div class="modal-content">

                                <div class="modal-header" id="kt_modal_add_user_header">

                                    <h2 class="fw-bolder">Product Detail</h2>


                                    <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                        data-kt-users-modal-action="cancel">

                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)"
                                                    fill="#000000">
                                                    <rect fill="#000000" x="0" y="7"
                                                        width="16" height="2" rx="1" />
                                                    <rect fill="#000000" opacity="0.5"
                                                        transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)"
                                                        x="0" y="7" width="16" height="2"
                                                        rx="1" />
                                                </g>
                                            </svg>
                                        </span>

                                    </div>

                                </div>
                                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                    <form id="kt_modal_add_user_form" class="form">

                                        <div class="d-flex flex-column scroll-y me-n7 pe-7 productDetail"
                                            id="kt_modal_add_user_scroll" data-kt-scroll="true"
                                            data-kt-scroll-activate="{default: false, lg: true}"
                                            data-kt-scroll-max-height="auto"
                                            data-kt-scroll-dependencies="#kt_modal_add_user_header"
                                            data-kt-scroll-wrappers="#kt_modal_add_user_scroll"
                                            data-kt-scroll-offset="300px">

                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <!--begin::Footer-->
                <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                    <!--begin::Container-->
                    <div
                        class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted fw-bold me-1">2023©</span>
                            <a href="#" class="text-gray-800 text-hover-primary">IP man</a>
                        </div>
                        <!--end::Copyright-->
                        <!--begin::Menu-->

                        <!--end::Menu-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Footer-->
            </div>
        </div>
    </div>

    <input type="hidden" value="{{ $start_ip }}" id="start_ip">
    <input type="hidden" value="{{ $end_ip }}" id="end_ip">


    <input type="hidden" value="Are you sure you want to delete?" id="del_msg">
    <input type="hidden" value="Yes Delete" id="confirmation">
    <input type="hidden" value="No cancel it!" id="cancel_it">
    <input type="hidden" value=" Product_Status_Changed" id="product_Status">


    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <script src="https://multiversepos.com/assets/plugins/global/plugins.bundle.js"></script>
    <script src="https://multiversepos.com/assets/js/scripts.bundle.js"></script>

    <script src="https://multiversepos.com/assets/js/custom/widgets.js"></script>
    <script src="https://multiversepos.com/assets/js/custom/apps/chat/chat.js"></script>
    <script src="https://multiversepos.com/assets/js/custom/modals/create-app.js"></script>
    <script src="https://multiversepos.com/assets/js/custom/modals/upgrade-plan.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.5/dist/sweetalert2.all.min.js" charset="UTF-8"></script>
    <script>
        // sweetalert2
        var testing = "viewproduct";



        function myalert(icon = "success", title = "null", timer = "3000") {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: timer,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: icon,
                title: title
            })
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="{{ asset('assets/checked.js') }}"></script>
    <script type="text/javascript">
        $(function() {
            var start_ip = $('#start_ip').val();
            var end_ip = $('#end_ip').val();
            console.log('start_ip: ', start_ip);
            if (start_ip != '' && end_ip != '') {
                console.log("if");
                url = "{{ route('getdata') }}?start_ip=" + start_ip + "&end_ip=" + end_ip;
            } else {
                url = "{{ route('getdata') }}"
            }
            Otable =
                $('.Product_table').DataTable({
                    "language": {
                        "search": "",
                        "searchPlaceholder": "Search",
                        "sLengthMenu": "Show _MENU_ entries",
                        "info": "Showing _START_ to _END_ of _TOTAL_ entries",
                        "paginate": {
                            "previous": 'Previous',
                            "next": 'Next'
                        }
                    },
                    processing: true,
                    serverSide: true,
                    ajax: url,
                    columns: [

                        {
                            data: 'id',
                            name: 'id',
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'ip_address',
                            name: 'ip_address',
                            orderable: true,
                            searchable: true
                        },
                        {
                            data: 'description',
                            name: 'description'
                        },
                        {
                            data: 'location',
                            name: 'location'
                        },
                        {
                            data: 'previous',
                            name: 'previous'
                        },
                        {
                            data: 'date_added',
                            name: 'date_added'
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: true,
                            searchable: true
                        },
                    ],
                    order: [
                        [0, 'desc']
                    ],
                    drawCallback: function(setting) {
                        checkedContent();
                        DeleteAll();
                        uncheckedContent();
                    }
                });
            console.log("i m func");
        });

        function showEditForm(id) {
            console.log('id: ', id);
            var url = '{{ route('edit_address', ':id') }}';
            url = url.replace(':id', id);
            $.get(url, function(data, status) {
                $('.show_edit').html(data)
            });

        }

        function pingme(id, type) {
            console.log('type: ', type);
            $('.pingtitle').html(type)
            $('.pingdata').html('<div class="pingdata">loading <i class="fa fa-spinner fa-spin"></i></div>')
            var url = '{{ route('ping_address', [':id', ':type']) }}';
            url = url.replace(':id', id);
            url = url.replace(':type', type);
            $.get(url, function(data, status) {
                $('.pingdata').html(data)
            });
        }

        $('#save_file').on('submit', function(e) {
            e.preventDefault();

            var formData = new FormData(this);
            console.log(formData);
            $('.btnLoader').css('display', 'inline-block');
            $('.btn-save').attr('disabled', 'disabled');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "{{ route('address_save') }}",
                data: formData,
                success: function(responce) {
                    console.log('responce: ', responce);
                    myalert("success", responce, 5000);
                    $('#exampleModal').modal('hide')
                    var frm = $('#save_file')[0];
                    frm.reset();
                    Otable.draw();
                    $('.btnLoader').hide();
                    $('.btn-save').attr('disabled', false);
                    return false;
                },
                error: function(xhr, status, error) {
                    console.log('error: ', error);
                    myalert("error", xhr.responseJSON.message, 10000);
                    $('.btnLoader').hide();
                    $('.btn-save').attr('disabled', false);
                },
                cache: false,
                contentType: false,
                processData: false
            });

        });
        $('#update_form').on('submit', function(e) {
            e.preventDefault();

            var formData = new FormData(this);
            console.log(formData);
            $('.btnLoader').css('display', 'inline-block');
            $('.btn-save').attr('disabled', 'disabled');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "{{ route('address_update') }}",
                data: formData,
                success: function(responce) {
                    console.log('responce: ', responce);
                    myalert("success", responce, 5000);
                    $('#editModal').modal('hide')
                    var frm = $('#update_form')[0];
                    frm.reset();
                    Otable.draw();
                    $('.btnLoader').hide();
                    $('.btn-save').attr('disabled', false);
                    return false;
                },
                error: function(xhr, status, error) {
                    console.log('error: ', error);
                    myalert("error", xhr.responseJSON.message, 10000);
                    $('.btnLoader').hide();
                    $('.btn-save').attr('disabled', false);
                },
                cache: false,
                contentType: false,
                processData: false
            });

        });

        // delete alert
        var delmessage = "Are you sure you want to delete?";

        function ConfirmDelete(id) {
            let singleDeleteDraw = {
                ...Otable
            };
            var url = '{{ route('delete_address', ':id') }}';
            url = url.replace(':id', id);
            event.preventDefault();
            swal({
                title: 'Are you sure you want to delete?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#07be6e',
                cancelButtonColor: '#d57171',
                cancelButtonText: 'No cancel it!',
                confirmButtonText: 'Yes Delete!'
            }, function() {
                $.ajax({
                    type: 'GET',
                    url,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                        myalert("success", 'Address Delete Successfully', 1000);
                        singleDeleteDraw.draw();
                    },
                });
            });


        }


        function syncbtn() {
            Otable.draw();
        }


        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })


        let flag = false;
        let checkBox_array = document.getElementsByClassName('checkboks')
        $(".delete-all-checkBox").change(function() {
            console.log("yaba daba doooo")
            if (this.checked) {
                let idsArray = [];
                let flag = false;
                checkBox_array.forEach(element => {
                    // idsArray.push(element.value)
                    element.checked = true;
                    checkBoxChange(element.value)

                });
                DeleteAll()

            } else {
                checkBox_array.forEach(element => {
                    element.checked = false;
                });
                uncheckedContent();
                emptyArray();

            }



        });

        function handDelete() {
            let checkBox = document.getElementsByClassName('delete-all-checkBox')[0];
            if (checkBox_array.length && checkBox.checked) {
                checkBox.checked = false;
            }
        }

        function ShowProduct(id) {

            event.preventDefault();
            let url = `product/getProductDetails/${id}`;

            $.ajax({
                type: 'GET',
                url,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    console.log('data: ', data);
                    $('.productDetail').html(data);
                },
            });
        }
    </script>

</body>

</html>
