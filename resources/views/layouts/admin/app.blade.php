@extends('layouts.admin.index')

@section('main')
    <!--begin::Header-->
    @include('layouts.admin.header.index')
    <!--end::Header-->
    <!--begin::Wrapper-->
    <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
        <!--begin::Aside-->
        @include('layouts.admin.aside')
        <!--end::Aside-->
    </div>
    <!--end::Wrapper-->
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content-->
        @yield('content')
        <!--end::Content-->
        <!--begin::Footer-->
        <div id="kt_app_footer" class="app-footer">
            <!--begin::Footer container-->
            <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
                <!--begin::Copyright-->
                <div class="text-dark order-2 order-md-1">
                    <span class="text-muted fw-semibold me-1">2023&copy;</span>
                </div>
                <!--end::Copyright-->
            </div>
            <!--end::Footer container-->
        </div>
        <!--end::Footer-->
    </div>
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
    <script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    {{--    <script src="{{asset('assets/js/custom/apps/user-management/users/list/table.js')}}"></script>--}}
    {{--    <script src="{{asset('assets/js/custom/apps/user-management/users/list/export-users.js')}}"></script>--}}
    <script src="{{asset('assets/js/widgets.bundle.js')}}"></script>
    <script src="{{asset('assets/js/custom/apps/chat/chat.js')}}"></script>
    <script src="{{asset('assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
    <script src="{{asset('assets/js/custom/utilities/modals/create-campaign.js')}}"></script>
    <script src="{{asset('assets/js/custom/utilities/modals/resources-search.js')}}"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
    @stack('scripts')
@endsection