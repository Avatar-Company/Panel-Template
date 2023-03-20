<div class="modal fade" id="kt_modal_create_campaign" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-fullscreen p-9">
        <!--begin::Modal content-->
        <div class="modal-content modal-rounded">
            <!--begin::Modal header-->
            <div class="modal-header py-7 d-flex justify-content-between">
                <!--begin::Modal title-->
                <h2>Create Campaign</h2>
                <!--end::Modal title-->
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
            <div class="modal-body scroll-y m-5">
                <!--begin::Stepper-->
                <div class="stepper stepper-links d-flex flex-column" id="kt_modal_create_campaign_stepper">
                    <!--begin::Nav-->
                    <div class="stepper-nav justify-content-center py-2">
                        <!--begin::Step 1-->
                        <div class="stepper-item me-5 me-md-15 current" data-kt-stepper-element="nav">
                            <h3 class="stepper-title">Campaign Details</h3>
                        </div>
                        <!--end::Step 1-->
                        <!--begin::Step 2-->
                        <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                            <h3 class="stepper-title">Creative Uploads</h3>
                        </div>
                        <!--end::Step 2-->
                        <!--begin::Step 3-->
                        <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                            <h3 class="stepper-title">Audiences</h3>
                        </div>
                        <!--end::Step 3-->
                        <!--begin::Step 4-->
                        <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                            <h3 class="stepper-title">Budget Estimates</h3>
                        </div>
                        <!--end::Step 4-->
                        <!--begin::Step 5-->
                        <div class="stepper-item" data-kt-stepper-element="nav">
                            <h3 class="stepper-title">Completed</h3>
                        </div>
                        <!--end::Step 5-->
                    </div>
                    <!--end::Nav-->
                    <!--begin::Form-->
                    <form class="mx-auto w-100 mw-600px pt-15 pb-10" novalidate="novalidate"
                          id="kt_modal_create_campaign_stepper_form">
                        <!--begin::Step 1-->
                        <div class="current" data-kt-stepper-element="content">
                            <!--begin::Wrapper-->
                            <div class="w-100">
                                <!--begin::Heading-->
                                <div class="pb-10 pb-lg-15">
                                    <!--begin::Title-->
                                    <h2 class="fw-bold d-flex align-items-center text-dark">Setup Campaign Details
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                           title="Campaign name will be used as reference within your campaign reports"></i>
                                    </h2>
                                    <!--end::Title-->
                                    <!--begin::Notice-->
                                    <div class="text-muted fw-semibold fs-6">If you need more info, please check out
                                        <a href="#" class="link-primary fw-bold">Help Page</a>.
                                    </div>
                                    <!--end::Notice-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="required form-label mb-3">Campaign Name</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-lg form-control-solid"
                                           name="campaign_name" placeholder="" value=""/>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="d-block fw-semibold fs-6 mb-5">
                                        <span class="required">Company Logo</span>
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                           title="E.g. Select a logo to represent the company that's running the campaign."></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Image input placeholder-->
                                    <style>.image-input-placeholder {
                                            background-image: url('assets/media/svg/files/blank-image.svg');
                                        }

                                        [data-bs-theme="dark"] .image-input-placeholder {
                                            background-image: url('assets/media/svg/files/blank-image-dark.svg');
                                        }</style>
                                    <!--end::Image input placeholder-->
                                    <!--begin::Image input-->
                                    <div class="image-input image-input-empty image-input-outline image-input-placeholder"
                                         data-kt-image-input="true">
                                        <!--begin::Preview existing avatar-->
                                        <div class="image-input-wrapper w-125px h-125px"></div>
                                        <!--end::Preview existing avatar-->
                                        <!--begin::Label-->
                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                               data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                               title="Change avatar">
                                            <i class="bi bi-pencil-fill fs-7"></i>
                                            <!--begin::Inputs-->
                                            <input type="file" name="avatar" accept=".png, .jpg, .jpeg"/>
                                            <input type="hidden" name="avatar_remove"/>
                                            <!--end::Inputs-->
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Cancel-->
                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                              data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                              title="Cancel avatar">
													<i class="bi bi-x fs-2"></i>
												</span>
                                        <!--end::Cancel-->
                                        <!--begin::Remove-->
                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                              data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                              title="Remove avatar">
													<i class="bi bi-x fs-2"></i>
												</span>
                                        <!--end::Remove-->
                                    </div>
                                    <!--end::Image input-->
                                    <!--begin::Hint-->
                                    <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                    <!--end::Hint-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="required fw-semibold fs-6 mb-5">Campaign Goal</label>
                                    <!--end::Label-->
                                    <!--begin::Roles-->
                                    <!--begin::Input row-->
                                    <div class="d-flex fv-row">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input me-3" name="user_role" type="radio" value="0"
                                                   id="kt_modal_update_role_option_0" checked='checked'/>
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <label class="form-check-label" for="kt_modal_update_role_option_0">
                                                <div class="fw-bold text-gray-800">Get more visitors</div>
                                                <div class="text-gray-600">Increase impression traffic onto the
                                                    platform
                                                </div>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Radio-->
                                    </div>
                                    <!--end::Input row-->
                                    <div class='separator separator-dashed my-5'></div>
                                    <!--begin::Input row-->
                                    <div class="d-flex fv-row">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input me-3" name="user_role" type="radio" value="1"
                                                   id="kt_modal_update_role_option_1"/>
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <label class="form-check-label" for="kt_modal_update_role_option_1">
                                                <div class="fw-bold text-gray-800">Get more messages on chat</div>
                                                <div class="text-gray-600">Increase community interaction and
                                                    communication
                                                </div>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Radio-->
                                    </div>
                                    <!--end::Input row-->
                                    <div class='separator separator-dashed my-5'></div>
                                    <!--begin::Input row-->
                                    <div class="d-flex fv-row">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input me-3" name="user_role" type="radio" value="2"
                                                   id="kt_modal_update_role_option_2"/>
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <label class="form-check-label" for="kt_modal_update_role_option_2">
                                                <div class="fw-bold text-gray-800">Get more calls</div>
                                                <div class="text-gray-600">Boost telecommunication feedback to provide
                                                    precise and accurate information
                                                </div>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Radio-->
                                    </div>
                                    <!--end::Input row-->
                                    <div class='separator separator-dashed my-5'></div>
                                    <!--begin::Input row-->
                                    <div class="d-flex fv-row">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input me-3" name="user_role" type="radio" value="3"
                                                   id="kt_modal_update_role_option_3"/>
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <label class="form-check-label" for="kt_modal_update_role_option_3">
                                                <div class="fw-bold text-gray-800">Get more likes</div>
                                                <div class="text-gray-600">Increase positive interactivity on social
                                                    media platforms
                                                </div>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Radio-->
                                    </div>
                                    <!--end::Input row-->
                                    <div class='separator separator-dashed my-5'></div>
                                    <!--begin::Input row-->
                                    <div class="d-flex fv-row">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input me-3" name="user_role" type="radio" value="4"
                                                   id="kt_modal_update_role_option_4"/>
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <label class="form-check-label" for="kt_modal_update_role_option_4">
                                                <div class="fw-bold text-gray-800">Lead generation</div>
                                                <div class="text-gray-600">Collect contact information for potential
                                                    customers
                                                </div>
                                            </label>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Radio-->
                                    </div>
                                    <!--end::Input row-->
                                    <!--end::Roles-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Step 1-->
                        <!--begin::Step 2-->
                        <div data-kt-stepper-element="content">
                            <!--begin::Wrapper-->
                            <div class="w-100">
                                <!--begin::Heading-->
                                <div class="pb-10 pb-lg-12">
                                    <!--begin::Title-->
                                    <h1 class="fw-bold text-dark">Upload Files</h1>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="text-muted fw-semibold fs-4">If you need more info, please check
                                        <a href="#" class="link-primary">Campaign Guidelines</a></div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Dropzone-->
                                    <div class="dropzone" id="kt_modal_create_campaign_files_upload">
                                        <!--begin::Message-->
                                        <div class="dz-message needsclick">
                                            <!--begin::Icon-->
                                            <!--begin::Svg Icon | path: icons/duotune/files/fil010.svg-->
                                            <span class="svg-icon svg-icon-3hx svg-icon-primary">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3"
                                                                  d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM14.5 12L12.7 9.3C12.3 8.9 11.7 8.9 11.3 9.3L10 12H11.5V17C11.5 17.6 11.4 18 12 18C12.6 18 12.5 17.6 12.5 17V12H14.5Z"
                                                                  fill="currentColor"/>
															<path d="M13 11.5V17.9355C13 18.2742 12.6 19 12 19C11.4 19 11 18.2742 11 17.9355V11.5H13Z"
                                                                  fill="currentColor"/>
															<path d="M8.2575 11.4411C7.82942 11.8015 8.08434 12.5 8.64398 12.5H15.356C15.9157 12.5 16.1706 11.8015 15.7425 11.4411L12.4375 8.65789C12.1875 8.44737 11.8125 8.44737 11.5625 8.65789L8.2575 11.4411Z"
                                                                  fill="currentColor"/>
															<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z"
                                                                  fill="currentColor"/>
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                            <!--end::Icon-->
                                            <!--begin::Info-->
                                            <div class="ms-4">
                                                <h3 class="dfs-3 fw-bold text-gray-900 mb-1">Drop campaign files here or
                                                    click to upload.</h3>
                                                <span class="fw-semibold fs-4 text-muted">Upload up to 10 files</span>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                    </div>
                                    <!--end::Dropzone-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold mb-2">Uploaded File</label>
                                    <!--End::Label-->
                                    <!--begin::Files-->
                                    <div class="mh-300px scroll-y me-n7 pe-7">
                                        <!--begin::File-->
                                        <div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px">
                                                    <img src="assets/media/svg/files/pdf.svg" alt="icon"/>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <a href="#"
                                                       class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Product
                                                        Specifications</a>
                                                    <div class="fw-semibold text-muted">230kb</div>
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--begin::Menu-->
                                            <div class="min-w-100px">
                                                <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true"
                                                        data-placeholder="Edit">
                                                    <option></option>
                                                    <option value="1">Remove</option>
                                                    <option value="2">Modify</option>
                                                    <option value="3">Select</option>
                                                </select>
                                            </div>
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::File-->
                                        <!--begin::File-->
                                        <div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px">
                                                    <img src="assets/media/svg/files/tif.svg" alt="icon"/>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <a href="#"
                                                       class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Campaign
                                                        Creative Poster</a>
                                                    <div class="fw-semibold text-muted">2.4mb</div>
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--begin::Menu-->
                                            <div class="min-w-100px">
                                                <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true"
                                                        data-placeholder="Edit">
                                                    <option></option>
                                                    <option value="1">Remove</option>
                                                    <option value="2">Modify</option>
                                                    <option value="3">Select</option>
                                                </select>
                                            </div>
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::File-->
                                        <!--begin::File-->
                                        <div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px">
                                                    <img src="assets/media/svg/files/folder-document.svg" alt="icon"/>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <a href="#"
                                                       class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Campaign
                                                        Landing Page Source</a>
                                                    <div class="fw-semibold text-muted">1.12mb</div>
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--begin::Menu-->
                                            <div class="min-w-100px">
                                                <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true"
                                                        data-placeholder="Edit">
                                                    <option></option>
                                                    <option value="1">Remove</option>
                                                    <option value="2">Modify</option>
                                                    <option value="3">Select</option>
                                                </select>
                                            </div>
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::File-->
                                        <!--begin::File-->
                                        <div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px">
                                                    <img src="assets/media/svg/files/css.svg" alt="icon"/>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <a href="#"
                                                       class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Landing
                                                        Page Styling</a>
                                                    <div class="fw-semibold text-muted">85kb</div>
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--begin::Menu-->
                                            <div class="min-w-100px">
                                                <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true"
                                                        data-placeholder="Edit">
                                                    <option></option>
                                                    <option value="1">Remove</option>
                                                    <option value="2">Modify</option>
                                                    <option value="3">Select</option>
                                                </select>
                                            </div>
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::File-->
                                        <!--begin::File-->
                                        <div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px">
                                                    <img src="assets/media/svg/files/ai.svg" alt="icon"/>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <a href="#"
                                                       class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Design
                                                        Source Files</a>
                                                    <div class="fw-semibold text-muted">48mb</div>
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--begin::Menu-->
                                            <div class="min-w-100px">
                                                <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true"
                                                        data-placeholder="Edit">
                                                    <option></option>
                                                    <option value="1">Remove</option>
                                                    <option value="2">Modify</option>
                                                    <option value="3">Select</option>
                                                </select>
                                            </div>
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::File-->
                                        <!--begin::File-->
                                        <div class="d-flex flex-stack py-4">
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px">
                                                    <img src="assets/media/svg/files/doc.svg" alt="icon"/>
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-6">
                                                    <a href="#"
                                                       class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Campaign
                                                        Plan Document</a>
                                                    <div class="fw-semibold text-muted">27kb</div>
                                                </div>
                                                <!--end::Details-->
                                            </div>
                                            <!--begin::Menu-->
                                            <div class="min-w-100px">
                                                <select class="form-select form-select-solid form-select-sm"
                                                        data-control="select2" data-hide-search="true"
                                                        data-placeholder="Edit">
                                                    <option></option>
                                                    <option value="1">Remove</option>
                                                    <option value="2">Modify</option>
                                                    <option value="3">Select</option>
                                                </select>
                                            </div>
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::File-->
                                    </div>
                                    <!--end::Files-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Step 2-->
                        <!--begin::Step 3-->
                        <div data-kt-stepper-element="content">
                            <!--begin::Wrapper-->
                            <div class="w-100">
                                <!--begin::Heading-->
                                <div class="pb-10 pb-lg-12">
                                    <!--begin::Title-->
                                    <h1 class="fw-bold text-dark">Configure Audiences</h1>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="text-muted fw-semibold fs-4">If you need more info, please check
                                        <a href="#" class="link-primary">Campaign Guidelines</a></div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold mb-2">Gender
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                           title="Show your ads to either men or women, or select 'All' for both"></i></label>
                                    <!--End::Label-->
                                    <!--begin::Row-->
                                    <div class="row g-9" data-kt-buttons="true"
                                         data-kt-buttons-target="[data-kt-button='true']">
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Option-->
                                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6"
                                                   data-kt-button="true">
                                                <!--begin::Radio-->
                                                <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
															<input class="form-check-input" type="radio"
                                                                   name="campaign_gender" value="1" checked="checked"/>
														</span>
                                                <!--end::Radio-->
                                                <!--begin::Info-->
                                                <span class="ms-5">
															<span class="fs-4 fw-bold text-gray-800 d-block">All</span>
														</span>
                                                <!--end::Info-->
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Option-->
                                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6"
                                                   data-kt-button="true">
                                                <!--begin::Radio-->
                                                <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
															<input class="form-check-input" type="radio"
                                                                   name="campaign_gender" value="2"/>
														</span>
                                                <!--end::Radio-->
                                                <!--begin::Info-->
                                                <span class="ms-5">
															<span class="fs-4 fw-bold text-gray-800 d-block">Male</span>
														</span>
                                                <!--end::Info-->
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Option-->
                                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6"
                                                   data-kt-button="true">
                                                <!--begin::Radio-->
                                                <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
															<input class="form-check-input" type="radio"
                                                                   name="campaign_gender" value="3"/>
														</span>
                                                <!--end::Radio-->
                                                <!--begin::Info-->
                                                <span class="ms-5">
															<span class="fs-4 fw-bold text-gray-800 d-block">Female</span>
														</span>
                                                <!--end::Info-->
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold mb-2">Age
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                           title="Select the minimum and maximum age of the people who will find your ad relevant."></i></label>
                                    <!--End::Label-->
                                    <!--begin::Slider-->
                                    <div class="d-flex flex-stack">
                                        <div id="kt_modal_create_campaign_age_min"
                                             class="fs-7 fw-semibold text-muted"></div>
                                        <div id="kt_modal_create_campaign_age_slider"
                                             class="noUi-sm w-100 ms-5 me-8"></div>
                                        <div id="kt_modal_create_campaign_age_max"
                                             class="fs-7 fw-semibold text-muted"></div>
                                    </div>
                                    <!--end::Slider-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold mb-2">Location
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                           title="Enter one or more location points for more specific targeting."></i></label>
                                    <!--End::Label-->
                                    <!--begin::Tagify-->
                                    <input class="form-control d-flex align-items-center" value=""
                                           id="kt_modal_create_campaign_location"
                                           data-kt-flags-path="assets/media/flags/"/>
                                    <!--end::Tagify-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Step 3-->
                        <!--begin::Step 4-->
                        <div data-kt-stepper-element="content">
                            <!--begin::Wrapper-->
                            <div class="w-100">
                                <!--begin::Heading-->
                                <div class="pb-10 pb-lg-12">
                                    <!--begin::Title-->
                                    <h1 class="fw-bold text-dark">Budget Estimates</h1>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="text-muted fw-semibold fs-4">If you need more info, please check
                                        <a href="#" class="link-primary">Campaign Guidelines</a></div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold mb-2">Campaign Duration
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                           title="Choose how long you want your ad to run for"></i></label>
                                    <!--end::Label-->
                                    <!--begin::Duration option-->
                                    <div class="d-flex gap-9 mb-7">
                                        <!--begin::Button-->
                                        <button type="button"
                                                class="btn btn-outline btn-outline-dashed btn-active-light-primary active"
                                                id="kt_modal_create_campaign_duration_all">Continuous duration
                                            <br/>
                                            <span class="fs-7">Your ad will run continuously for a daily budget.</span>
                                        </button>
                                        <!--end::Button-->
                                        <!--begin::Button-->
                                        <button type="button"
                                                class="btn btn-outline btn-outline-dashed btn-active-light-primary btn-outline-default"
                                                id="kt_modal_create_campaign_duration_fixed">Fixed duration
                                            <br/>
                                            <span class="fs-7">Your ad will run on the specified dates only.</span>
                                        </button>
                                        <!--end::Button-->
                                    </div>
                                    <!--end::Duration option-->
                                    <!--begin::Datepicker-->
                                    <input class="form-control form-control-solid d-none" placeholder="Pick date & time"
                                           id="kt_modal_create_campaign_datepicker"/>
                                    <!--end::Datepicker-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold mb-2">Daily Budget
                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                           title="Choose the budget allocated for each day. Higher budget will generate better results"></i></label>
                                    <!--end::Label-->
                                    <!--begin::Slider-->
                                    <div class="d-flex flex-column text-center">
                                        <div class="d-flex align-items-start justify-content-center mb-7">
                                            <span class="fw-bold fs-4 mt-1 me-2">$</span>
                                            <span class="fw-bold fs-3x"
                                                  id="kt_modal_create_campaign_budget_label"></span>
                                            <span class="fw-bold fs-3x">.00</span>
                                        </div>
                                        <div id="kt_modal_create_campaign_budget_slider" class="noUi-sm"></div>
                                    </div>
                                    <!--end::Slider-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Step 4-->
                        <!--begin::Step 5-->
                        <div data-kt-stepper-element="content">
                            <!--begin::Wrapper-->
                            <div class="w-100">
                                <!--begin::Heading-->
                                <div class="pb-12 text-center">
                                    <!--begin::Title-->
                                    <h1 class="fw-bold text-dark">Campaign Created!</h1>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="fw-semibold text-muted fs-4">You will receive an email with with the
                                        summary of your newly created campaign!
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-center pb-20">
                                    <button id="kt_modal_create_campaign_create_new" type="button"
                                            class="btn btn-lg btn-light me-3" data-kt-element="complete-start">Create
                                        New Campaign
                                    </button>
                                    <a href="" class="btn btn-lg btn-primary" data-bs-toggle="tooltip"
                                       title="Coming Soon">View Campaign</a>
                                </div>
                                <!--end::Actions-->
                                <!--begin::Illustration-->
                                <div class="text-center px-4">
                                    <img src="assets/media/illustrations/sketchy-1/9.png" alt=""
                                         class="mww-100 mh-350px"/>
                                </div>
                                <!--end::Illustration-->
                            </div>
                        </div>
                        <!--end::Step 5-->
                        <!--begin::Actions-->
                        <div class="d-flex flex-stack pt-10">
                            <!--begin::Wrapper-->
                            <div class="me-2">
                                <button type="button" class="btn btn-lg btn-light-primary me-3"
                                        data-kt-stepper-action="previous">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
                                    <span class="svg-icon svg-icon-3 me-1">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
												<rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1"
                                                      fill="currentColor"/>
												<path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z"
                                                      fill="currentColor"/>
											</svg>
										</span>
                                    <!--end::Svg Icon-->Back
                                </button>
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Wrapper-->
                            <div>
                                <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
											<span class="indicator-label">Submit
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
											<span class="svg-icon svg-icon-3 ms-2 me-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
                                                          transform="rotate(-180 18 13)" fill="currentColor"/>
													<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                          fill="currentColor"/>
												</svg>
											</span>
                                                <!--end::Svg Icon--></span>
                                    <span class="indicator-progress">Please wait...
											<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">
                                    Continue
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                    <span class="svg-icon svg-icon-3 ms-1 me-0">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
												<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
                                                      transform="rotate(-180 18 13)" fill="currentColor"/>
												<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                      fill="currentColor"/>
											</svg>
										</span>
                                    <!--end::Svg Icon--></button>
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Stepper-->
            </div>
            <!--begin::Modal body-->
        </div>
    </div>
</div>