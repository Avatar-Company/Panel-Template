<div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                          transform="rotate(-45 6 17.3137)" fill="currentColor"/>
									<rect x="7.41422" y="6" width="16" height="2" rx="1"
                                          transform="rotate(45 7.41422 6)" fill="currentColor"/>
								</svg>
							</span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                <!--begin::Content-->
                <div class="text-center mb-13">
                    <h1 class="mb-3">Search Users</h1>
                    <div class="text-muted fw-semibold fs-5">Invite Collaborators To Your Project</div>
                </div>
                <!--end::Content-->
                <!--begin::Search-->
                <div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2"
                     data-kt-search-enter="enter" data-kt-search-layout="inline">
                    <!--begin::Form-->
                    <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
                        <!--begin::Hidden input(Added to disable form autocomplete)-->
                        <input type="hidden"/>
                        <!--end::Hidden input-->
                        <!--begin::Icon-->
                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                        <span class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                                              transform="rotate(45 17.0365 15.1223)" fill="currentColor"/>
										<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                              fill="currentColor"/>
									</svg>
								</span>
                        <!--end::Svg Icon-->
                        <!--end::Icon-->
                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-lg form-control-solid px-15" name="search"
                               value="" placeholder="Search by username, full name or email..."
                               data-kt-search-element="input"/>
                        <!--end::Input-->
                        <!--begin::Spinner-->
                        <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                              data-kt-search-element="spinner">
									<span class="spinner-border h-15px w-15px align-middle text-muted"></span>
								</span>
                        <!--end::Spinner-->
                        <!--begin::Reset-->
                        <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none"
                              data-kt-search-element="clear">
									<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
											<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                                  transform="rotate(-45 6 17.3137)" fill="currentColor"/>
											<rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                  transform="rotate(45 7.41422 6)" fill="currentColor"/>
										</svg>
									</span>
                            <!--end::Svg Icon-->
								</span>
                        <!--end::Reset-->
                    </form>
                    <!--end::Form-->
                    <!--begin::Wrapper-->
                    <div class="py-5">
                        <!--begin::Suggestions-->
                        <div data-kt-search-element="suggestions">
                            <!--begin::Heading-->
                            <h3 class="fw-semibold mb-5">Recently searched:</h3>
                            <!--end::Heading-->
                            <!--begin::Users-->
                            <div class="mh-375px scroll-y me-n7 pe-7">
                                <!--begin::User-->
                                <a href="#"
                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <img alt="Pic" src="assets/media/avatars/300-6.jpg"/>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold">
                                        <span class="fs-6 text-gray-800 me-2">Emma Smith</span>
                                        <span class="badge badge-light">Art Director</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::User-->
                                <!--begin::User-->
                                <a href="#"
                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold">
                                        <span class="fs-6 text-gray-800 me-2">Melody Macy</span>
                                        <span class="badge badge-light">Marketing Analytic</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::User-->
                                <!--begin::User-->
                                <a href="#"
                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <img alt="Pic" src="assets/media/avatars/300-1.jpg"/>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold">
                                        <span class="fs-6 text-gray-800 me-2">Max Smith</span>
                                        <span class="badge badge-light">Software Enginer</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::User-->
                                <!--begin::User-->
                                <a href="#"
                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <img alt="Pic" src="assets/media/avatars/300-5.jpg"/>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold">
                                        <span class="fs-6 text-gray-800 me-2">Sean Bean</span>
                                        <span class="badge badge-light">Web Developer</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::User-->
                                <!--begin::User-->
                                <a href="#"
                                   class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <img alt="Pic" src="assets/media/avatars/300-25.jpg"/>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-semibold">
                                        <span class="fs-6 text-gray-800 me-2">Brian Cox</span>
                                        <span class="badge badge-light">UI/UX Designer</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::User-->
                            </div>
                            <!--end::Users-->
                        </div>
                        <!--end::Suggestions-->
                        <!--begin::Results(add d-none to below element to hide the users list by default)-->
                        <div data-kt-search-element="results" class="d-none">
                            <!--begin::Users-->
                            <div class="mh-375px scroll-y me-n7 pe-7">
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='0']"
                                                   value="0"/>
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-6.jpg"/>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
                                                Smith</a>
                                            <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2" selected="selected">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='1']"
                                                   value="1"/>
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody
                                                Macy</a>
                                            <div class="fw-semibold text-muted">melody@altbox.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1" selected="selected">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='2']"
                                                   value="2"/>
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-1.jpg"/>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max
                                                Smith</a>
                                            <div class="fw-semibold text-muted">max@kt.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected="selected">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='3']"
                                                   value="3"/>
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-5.jpg"/>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean
                                                Bean</a>
                                            <div class="fw-semibold text-muted">sean@dellito.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2" selected="selected">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='4']"
                                                   value="4"/>
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-25.jpg"/>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian
                                                Cox</a>
                                            <div class="fw-semibold text-muted">brian@exchange.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected="selected">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='5']"
                                                   value="5"/>
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela
                                                Collins</a>
                                            <div class="fw-semibold text-muted">mik@pex.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2" selected="selected">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='6']"
                                                   value="6"/>
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-9.jpg"/>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis
                                                Mitcham</a>
                                            <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected="selected">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='7']"
                                                   value="7"/>
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia
                                                Wild</a>
                                            <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2" selected="selected">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='8']"
                                                   value="8"/>
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil
                                                Owen</a>
                                            <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1" selected="selected">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='9']"
                                                   value="9"/>
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-23.jpg"/>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan
                                                Wilson</a>
                                            <div class="fw-semibold text-muted">dam@consilting.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected="selected">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='10']"
                                                   value="10"/>
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
                                                Bold</a>
                                            <div class="fw-semibold text-muted">emma@intenso.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2" selected="selected">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='11']"
                                                   value="11"/>
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-12.jpg"/>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana
                                                Crown</a>
                                            <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1" selected="selected">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='12']"
                                                   value="12"/>
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-info text-info fw-semibold">A</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert
                                                Doe</a>
                                            <div class="fw-semibold text-muted">robert@benko.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected="selected">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='13']"
                                                   value="13"/>
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-13.jpg"/>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John
                                                Miller</a>
                                            <div class="fw-semibold text-muted">miller@mapple.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected="selected">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='14']"
                                                   value="14"/>
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-success text-success fw-semibold">L</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy
                                                Kunic</a>
                                            <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2" selected="selected">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='15']"
                                                   value="15"/>
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/300-21.jpg"/>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan
                                                Wilder</a>
                                            <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1" selected="selected">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users"
                                                   data-kt-check="true" data-kt-check-target="[data-user-id='16']"
                                                   value="16"/>
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela
                                                Collins</a>
                                            <div class="fw-semibold text-muted">mik@pex.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected="selected">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Users-->
                            <!--begin::Actions-->
                            <div class="d-flex flex-center mt-15">
                                <button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal"
                                        class="btn btn-active-light me-3">Cancel
                                </button>
                                <button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">Add
                                    Selected Users
                                </button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Results-->
                        <!--begin::Empty-->
                        <div data-kt-search-element="empty" class="text-center d-none">
                            <!--begin::Message-->
                            <div class="fw-semibold py-10">
                                <div class="text-gray-600 fs-3 mb-2">No users found</div>
                                <div class="text-muted fs-6">Try to search by username, full name or email...</div>
                            </div>
                            <!--end::Message-->
                            <!--begin::Illustration-->
                            <div class="text-center px-5">
                                <img src="assets/media/illustrations/sketchy-1/1.png" alt=""
                                     class="w-100 h-200px h-sm-325px"/>
                            </div>
                            <!--end::Illustration-->
                        </div>
                        <!--end::Empty-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Search-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>