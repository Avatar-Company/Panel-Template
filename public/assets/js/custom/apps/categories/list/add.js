"use strict";

// Class definition
const KTCategoriesAddCategory = function () {
    // Shared variables
    const element = document.getElementById('kt_modal_add_category');
    const form = element.querySelector('#kt_modal_add_category_form');
    const modal = new bootstrap.Modal(element);

    // Init add schedule modal
    const initAddCategory = () => {

        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        const validator = FormValidation.formValidation(
            form,
            {
                fields: {
                    'name': {
                        validators: {
                            notEmpty: {
                                message: 'الاسم مطلوب'
                            }
                        }
                    },
                    'category_id': {
                        validators: {
                            notEmpty: {
                                message: 'التصنيف مطلوب'
                            }
                        }
                    },
                    'number_seats': {
                        validators: {
                            notEmpty: {
                                message: 'عدد المقاعد مطلوب'
                            }
                        }
                    },
                    'price': {
                        validators: {
                            notEmpty: {
                                message: 'السعر مطلوب'
                            }
                        }
                    },
                },

                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row',
                        eleInvalidClass: '',
                        eleValidClass: ''
                    })
                }
            }
        );

        // Submit button handler
        const submitButton = element.querySelector('[data-kt-categories-modal-action="submit"]');
        submitButton.addEventListener('click', e => {
            e.preventDefault();

            // Validate form before submit
            if (validator) {
                validator.validate().then(function (status) {
                    console.log('validated!');

                    if (status === 'Valid') {
                        // Show loading indication
                        submitButton.setAttribute('data-kt-indicator', 'on');

                        // Disable button to avoid multiple click
                        submitButton.disabled = true;

                        // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                        setTimeout(function () {
                            // Remove loading indication
                            submitButton.removeAttribute('data-kt-indicator');

                            // Enable button
                            submitButton.disabled = false;

                            // Show popup confirmation
                            Swal.fire({
                                text: "تم تقديم النموذج بنجاح!",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "حسنًا ، اذهب!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            }).then(function (result) {
                                if (result.isConfirmed) {
                                    modal.hide();
                                }
                            });

                            form.submit(); // Submit form
                        }, 2000);
                    } else {
                        // Show popup warning. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                        Swal.fire({
                            text: "معذرة ، يبدو أنه تم اكتشاف بعض الأخطاء ، يرجى المحاولة مرة أخرى.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "حسنًا ، اذهب!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });
                    }
                });
            }
        });

        // Cancel button handler
        const cancelButton = element.querySelector('[data-kt-categories-modal-action="cancel"]');
        cancelButton.addEventListener('click', e => {
            e.preventDefault();

            Swal.fire({
                text: "هل أنت متأكد أنك تريد الإلغاء؟",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "نعم ، قم بإلغائها!",
                cancelButtonText: "لا، ارجع",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light"
                }
            }).then(function (result) {
                if (result.value) {
                    form.reset(); // Reset form
                    modal.hide();
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text: "لم يتم إلغاء النموذج الخاص بك !.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "حسنًا ، اذهب!",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        }
                    });
                }
            });
        });

        // Close button handler
        const closeButton = element.querySelector('[data-kt-categories-modal-action="close"]');
        closeButton.addEventListener('click', e => {
            e.preventDefault();

            Swal.fire({
                text: "هل أنت متأكد أنك تريد الإلغاء؟",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "نعم ، قم بإلغائها!",
                cancelButtonText: "لا، ارجع",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light"
                }
            }).then(function (result) {
                if (result.value) {
                    form.reset(); // Reset form
                    modal.hide();
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text: "لم يتم إلغاء النموذج الخاص بك !.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "حسنًا ، اذهب!",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        }
                    });
                }
            });
        });
    };

    return {
        // Public functions
        init: function () {
            initAddCategory();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTCategoriesAddCategory.init();
});