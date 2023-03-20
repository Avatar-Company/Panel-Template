<div class="d-flex align-items-stretch flex-shrink-0 mt-3">
  <!--begin::Toolbar wrapper-->
  <div class="d-flex align-items-center flex-shrink-0">

{{--    @php--}}
{{--        $notifications = auth_admin()->notifications()->latest()->limit(10)->get();--}}
{{--        $count_notifications = auth_admin()->notifications()->whereNull('read_at')->count();--}}
{{--    @endphp--}}
    <div class="symbol d-flex align-items-center h-40px">
      <!--begin::Notifications-->
      <div class="d-flex align-items-center ms-1 ms-lg-3">
        <!--begin::Menu- wrapper-->
        <div class="btn btn-icon btn-active-light-primary position-relative w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-start" data-kt-menu-flip="bottom">
          <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen007.svg-->
          <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path opacity="0.3" d="M12 22C13.6569 22 15 20.6569 15 19C15 17.3431 13.6569 16 12 16C10.3431 16 9 17.3431 9 19C9 20.6569 10.3431 22 12 22Z" fill="black"/>
            <path d="M19 15V18C19 18.6 18.6 19 18 19H6C5.4 19 5 18.6 5 18V15C6.1 15 7 14.1 7 13V10C7 7.6 8.7 5.6 11 5.1V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V5.1C15.3 5.6 17 7.6 17 10V13C17 14.1 17.9 15 19 15ZM11 10C11 9.4 11.4 9 12 9C12.6 9 13 8.6 13 8C13 7.4 12.6 7 12 7C10.3 7 9 8.3 9 10C9 10.6 9.4 11 10 11C10.6 11 11 10.6 11 10Z" fill="black"/>
            </svg></span>
            <!--end::Svg Icon-->
        </div>
        <!--begin::Menu-->
        <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-400px" data-kt-menu="true">
          <!--begin::Heading-->
          <div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('{{ asset('admin-panel/media/misc/pattern-1.jpg') }}')">
            <!--begin::Title-->
            <h3 class="text-white fw-bold px-9 mt-10 mb-6">الإشعارات
            <span class="fs-8 opacity-75 ps-3"></span></h3>
            <!--end::Title-->
            <!--begin::Tabs-->
            <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-bold px-9">
              <li class="nav-item">
                <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab" href="#kt_topbar_notifications_3"></a>
              </li>
            </ul>
            <!--end::Tabs-->
          </div>
          <!--end::Heading-->
          <!--begin::Tab content-->
          <div class="tab-content">
            <!--begin::Tab panel-->
            <div class="tab-pane fade show active" id="kt_topbar_notifications_3" role="tabpanel">
              <!--begin::Items-->
              <div class="scroll-y mh-325px my-5 px-8" id="ul_notifications">
{{--                  <div class="d-flex flex-stack py-4">--}}
{{--                    <div class="d-flex align-items-center me-2">--}}
{{--                      <span class="h-10px w-10px badge badge-circle @if (!$notification->read_at) bg-danger @else bg-secondary @endif  me-4"></span>--}}
{{--                      @switch($notification->type)--}}
{{--                          @case('App\Notifications\NewOrdertNotification')--}}
{{--                              <a href="{{ route('admin.orders.show', $notification->data['order_id']) }}" class="text-gray-800 text-hover-primary fw-bold text-capitalize">يوجد طلب جديد</a>--}}
{{--                              @break--}}
{{--                      @endswitch--}}
{{--                    </div>--}}
{{--                    <span class="badge badge-light fs-9">{{ $notification->created_at->diffForHumans() }}</span>--}}
{{--                  </div>--}}
                <div class="my-2">لا يوجد أي إشعارات</div>
              </div>
              <!--end::Items-->
              <!--begin::View more-->
              <div class="py-3 text-center border-top">
                <a href="#" class="btn btn-color-gray-600 btn-active-color-primary">جميع الإشعارات
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                <span class="svg-icon svg-icon-5">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
                    <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
                  </svg>
                </span>
                <!--end::Svg Icon--></a>
              </div>
              <!--end::View more-->
            </div>
            <!--end::Tab panel-->
          </div>
          <!--end::Tab content-->
        </div>
        <!--end::Menu-->
        <!--end::Menu wrapper-->
      </div>
      <!--end::Notifications-->
      <span id="count_notifications" class="symbol-badge badge badge-circle bg-danger start-0" style="display: none;" >1</span>
    </div>

    <!--begin::User-->
    <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
      <!--begin::Menu wrapper-->
      <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-start" data-kt-menu-flip="bottom">
        <img src="/imgs" alt="metronic" />
      </div>
      <!--begin::Menu-->
      <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
        <!--begin::Menu item-->
        <div class="menu-item px-3">
          <div class="menu-content d-flex align-items-center px-3">
            <!--begin::Avatar-->
            <div class="symbol symbol-50px me-5">
              <img alt="Logo" src="/" />
            </div>
            <!--end::Avatar-->
            <!--begin::Username-->
            <div class="d-flex flex-column">
              <div class="fw-bolder d-flex align-items-center fs-5">Name
              </div>
              <a href="#" class="fw-bold text-muted text-hover-primary fs-7" dir="ltr">email</a>
            </div>
            <!--end::Username-->
          </div>
        </div>
        <!--end::Menu item-->
        <!--begin::Menu separator-->
        <div class="separator my-2"></div>
        <!--end::Menu separator-->
        <!--begin::Menu item-->
        <div class="menu-item px-5 my-1">
          <a href="#" class="menu-link px-5">إعدادات الحساب</a>
        </div>
        <!--end::Menu item-->
        <!--begin::Menu item-->
        <div class="menu-item px-5">
          <a class="menu-link px-5" onclick="document.getElementById('logout').submit()" >
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <x-dropdown-link :href="route('logout')"
                               onclick="event.preventDefault();
                                                this.closest('form').submit();">
                {{ __('Log Out') }}
              </x-dropdown-link>
            </form>
        </a>
        </div>
        <!--end::Menu item-->
      </div>
      <!--end::Menu-->
      <!--end::Menu wrapper-->
    </div>
    <!--end::User -->

  </div>
  <!--end::Toolbar wrapper-->
</div>
