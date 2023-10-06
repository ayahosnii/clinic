@extends('layouts.doctor-layout')
@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link href="https://unpkg.com/css-pro-layout@1.1.0/dist/css/css-pro-layout.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />

    <link href="{{asset('assets/css/doctordashboard.css')}}" rel="stylesheet" />

    @vite(['resources/sass/doctordashboard.scss', 'assets/css/doctordashboard.css'])

@endpush

@section('content')

    <div class="breadcrumb-bar-two"><div class="container"><div class="row align-items-center inner-banner"><div class="col-md-12 col-12 text-center"><h2 class="breadcrumb-title">Appointments</h2><nav aria-label="breadcrumb" class="page-breadcrumb"><ol class="breadcrumb"><li class="breadcrumb-item"><a href="/vuejs/template/" class="">Home</a></li><li class="breadcrumb-item" aria-current="page">Appointments</li></ol></nav></div></div></div></div>



    <div class="content"><div class="container"><div class="row">


                <div class="col-md-7 col-lg-8 col-xl-9"><div class="appointments"><div class="appointment-list"><div class="profile-info-widget"><a href="/vuejs/template/patient-profile" class="booking-doc-img"><img src="/vuejs/template/img/patient.18ac9b65.jpg" alt="User Image"></a><div class="profile-det-info"><h3><a href="/vuejs/template/patient-profile" class="">Richard Wilson</a></h3><div class="patient-details"><h5><i class="far fa-clock me-1"></i>14 Nov 2023, 10.00 AM</h5><h5><i class="fas fa-map-marker-alt"></i> New York, United States</h5><h5><i class="fas fa-envelope me-1"></i>richard@example.com</h5><h5 class="mb-0"><i class="fas fa-phone me-1"></i>+1 923 782 4575</h5></div></div></div><div class="appointment-action"><a href="javascript:void(0)" class="btn btn-sm bg-info-light" data-bs-toggle="modal" data-bs-target="#appt_details"><i class="far fa-eye"></i> View </a><a href="javascript:void(0);" class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept </a><a href="javascript:void(0);" class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i> Cancel </a></div></div><div class="appointment-list"><div class="profile-info-widget"><a href="/vuejs/template/patient-profile" class="booking-doc-img"><img src="/vuejs/template/img/patient1.57580ec7.jpg" alt="User Image"></a><div class="profile-det-info"><h3><a href="/vuejs/template/patient-profile" class="">Charlene Reed</a></h3><div class="patient-details"><h5><i class="far fa-clock me-1"></i>12 Nov 2023, 5.00 PM</h5><h5><i class="fas fa-map-marker-alt"></i> North Carolina, United States</h5><h5><i class="fas fa-envelope me-1"></i>charlenereed@example.com</h5><h5 class="mb-0"><i class="fas fa-phone me-1"></i>+1 828 632 9170</h5></div></div></div><div class="appointment-action"><a href="javascript:void(0)" class="btn btn-sm bg-info-light" data-bs-toggle="modal" data-bs-target="#appt_details"><i class="far fa-eye"></i> View </a><a href="javascript:void(0);" class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept </a><a href="javascript:void(0);" class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i> Cancel </a></div></div><div class="appointment-list"><div class="profile-info-widget"><a href="/vuejs/template/patient-profile" class="booking-doc-img"><img src="/vuejs/template/img/patient2.256b0df4.jpg" alt="User Image"></a><div class="profile-det-info"><h3><a href="/vuejs/template/patient-profile" class="">Travis Trimble</a></h3><div class="patient-details"><h5><i class="far fa-clock me-1"></i>11 Nov 2023, 8.00 PM</h5><h5><i class="fas fa-map-marker-alt"></i> Maine, United States</h5><h5><i class="fas fa-envelope me-1"></i>travistrimble@example.com</h5><h5 class="mb-0"><i class="fas fa-phone me-1"></i>+1 207 729 9974</h5></div></div></div><div class="appointment-action"><a href="javascript:void(0)" class="btn btn-sm bg-info-light" data-bs-toggle="modal" data-bs-target="#appt_details"><i class="far fa-eye"></i> View </a><a href="javascript:void(0);" class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept </a><a href="javascript:void(0);" class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i> Cancel </a></div></div><div class="appointment-list"><div class="profile-info-widget"><a href="/vuejs/template/patient-profile" class="booking-doc-img"><img src="/vuejs/template/img/patient3.961398fe.jpg" alt="User Image"></a><div class="profile-det-info"><h3><a href="/vuejs/template/patient-profile" class="">Carl Kelly</a></h3><div class="patient-details"><h5><i class="far fa-clock me-1"></i>9 Nov 2023, 9.00 AM</h5><h5><i class="fas fa-map-marker-alt"></i> New York, United States</h5><h5><i class="fas fa-envelope me-1"></i>carlkelly@example.com</h5><h5 class="mb-0"><i class="fas fa-phone me-1"></i>+1 260 724 7769</h5></div></div></div><div class="appointment-action"><a href="javascript:void(0)" class="btn btn-sm bg-info-light" data-bs-toggle="modal" data-bs-target="#appt_details"><i class="far fa-eye"></i> View </a><a href="javascript:void(0);" class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept </a><a href="javascript:void(0);" class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i> Cancel </a></div></div><div class="appointment-list"><div class="profile-info-widget"><a href="/vuejs/template/patient-profile" class="booking-doc-img"><img src="/vuejs/template/img/patient4.996dc4ba.jpg" alt="User Image"></a><div class="profile-det-info"><h3><a href="/vuejs/template/patient-profile" class="">Michelle Fairfax</a></h3><div class="patient-details"><h5><i class="far fa-clock me-1"></i>9 Nov 2023, 1.00 PM</h5><h5><i class="fas fa-map-marker-alt"></i> Indiana, United States</h5><h5><i class="fas fa-envelope me-1"></i>michellefairfax@example.com</h5><h5 class="mb-0"><i class="fas fa-phone me-1"></i>+1 504 368 6874</h5></div></div></div><div class="appointment-action"><a href="javascript:void(0)" class="btn btn-sm bg-info-light" data-bs-toggle="modal" data-bs-target="#appt_details"><i class="far fa-eye"></i> View </a><a href="javascript:void(0);" class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept </a><a href="javascript:void(0);" class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i> Cancel </a></div></div><div class="appointment-list"><div class="profile-info-widget"><a href="/vuejs/template/patient-profile" class="booking-doc-img"><img src="/vuejs/template/img/patient5.5dd71813.jpg" alt="User Image"></a><div class="profile-det-info"><h3><a href="/vuejs/template/patient-profile" class="">Gina Moore</a></h3><div class="patient-details"><h5><i class="far fa-clock me-1"></i>8 Nov 2023, 3.00 PM</h5><h5><i class="fas fa-map-marker-alt"></i> Florida, United States</h5><h5><i class="fas fa-envelope me-1"></i>ginamoore@example.com</h5><h5 class="mb-0"><i class="fas fa-phone me-1"></i>+1 954 820 7887</h5></div></div></div><div class="appointment-action"><a href="javascript:void(0)" class="btn btn-sm bg-info-light" data-bs-toggle="modal" data-bs-target="#appt_details"><i class="far fa-eye"></i> View </a><a href="javascript:void(0);" class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept </a><a href="javascript:void(0);" class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i> Cancel </a></div></div><div class="appointment-list"><div class="profile-info-widget"><a href="/vuejs/template/patient-profile" class="booking-doc-img"><img src="/vuejs/template/img/patient6.470ffb7c.jpg" alt="User Image"></a><div class="profile-det-info"><h3><a href="/vuejs/template/patient-profile" class="">Elsie Gilley</a></h3><div class="patient-details"><h5><i class="far fa-clock me-1"></i>6 Nov 2023, 9.00 AM</h5><h5><i class="fas fa-map-marker-alt"></i> Kentucky, United States</h5><h5><i class="fas fa-envelope me-1"></i>elsiegilley@example.com</h5><h5 class="mb-0"><i class="fas fa-phone me-1"></i>+1 315 384 4562</h5></div></div></div><div class="appointment-action"><a href="javascript:void(0)" class="btn btn-sm bg-info-light" data-bs-toggle="modal" data-bs-target="#appt_details"><i class="far fa-eye"></i> View </a><a href="javascript:void(0);" class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept </a><a href="javascript:void(0);" class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i> Cancel </a></div></div><div class="appointment-list"><div class="profile-info-widget"><a href="/vuejs/template/patient-profile" class="booking-doc-img"><img src="/vuejs/template/img/patient7.f14899cc.jpg" alt="User Image"></a><div class="profile-det-info"><h3><a href="/vuejs/template/patient-profile" class="">Joan Gardner</a></h3><div class="patient-details"><h5><i class="far fa-clock me-1"></i>5 Nov 2023, 12.00 PM</h5><h5><i class="fas fa-map-marker-alt"></i> California, United States</h5><h5><i class="fas fa-envelope me-1"></i>joangardner@example.com</h5><h5 class="mb-0"><i class="fas fa-phone me-1"></i>+1 707 2202 603</h5></div></div></div><div class="appointment-action"><a href="javascript:void(0)" class="btn btn-sm bg-info-light" data-bs-toggle="modal" data-bs-target="#appt_details"><i class="far fa-eye"></i> View </a><a href="javascript:void(0);" class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept </a><a href="javascript:void(0);" class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i> Cancel </a></div></div><div class="appointment-list"><div class="profile-info-widget"><a href="/vuejs/template/patient-profile" class="booking-doc-img"><img src="/vuejs/template/img/patient8.9e8e61f5.jpg" alt="User Image"></a><div class="profile-det-info"><h3><a href="/vuejs/template/patient-profile" class="">Daniel Griffing</a></h3><div class="patient-details"><h5><i class="far fa-clock me-1"></i>5 Nov 2023, 7.00 PM</h5><h5><i class="fas fa-map-marker-alt"></i> New Jersey, United States</h5><h5><i class="fas fa-envelope me-1"></i>danielgriffing@example.com</h5><h5 class="mb-0"><i class="fas fa-phone me-1"></i>+1 973 773 9497</h5></div></div></div><div class="appointment-action"><a href="javascript:void(0)" class="btn btn-sm bg-info-light" data-bs-toggle="modal" data-bs-target="#appt_details"><i class="far fa-eye"></i> View </a><a href="javascript:void(0);" class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept </a><a href="javascript:void(0);" class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i> Cancel </a></div></div><div class="appointment-list"><div class="profile-info-widget"><a href="/vuejs/template/patient-profile" class="booking-doc-img"><img src="/vuejs/template/img/patient9.ef96a760.jpg" alt="User Image"></a><div class="profile-det-info"><h3><a href="/vuejs/template/patient-profile" class="">Walter Roberson</a></h3><div class="patient-details"><h5><i class="far fa-clock me-1"></i>4 Nov 2023, 10.00 AM</h5><h5><i class="fas fa-map-marker-alt"></i> Florida, United States</h5><h5><i class="fas fa-envelope me-1"></i>walterroberson@example.com</h5><h5 class="mb-0"><i class="fas fa-phone me-1"></i>+1 850 358 4445</h5></div></div></div><div class="appointment-action"><a href="javascript:void(0)" class="btn btn-sm bg-info-light" data-bs-toggle="modal" data-bs-target="#appt_details"><i class="far fa-eye"></i> View </a><a href="javascript:void(0);" class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept </a><a href="javascript:void(0);" class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i> Cancel </a></div></div><div class="appointment-list"><div class="profile-info-widget"><a href="/vuejs/template/patient-profile" class="booking-doc-img"><img src="/vuejs/template/img/patient10.244042cb.jpg" alt="User Image"></a><div class="profile-det-info"><h3><a href="/vuejs/template/patient-profile" class="">Robert Rhodes</a></h3><div class="patient-details"><h5><i class="far fa-clock me-1"></i>4 Nov 2023, 11.00 AM</h5><h5><i class="fas fa-map-marker-alt"></i> California, United States</h5><h5><i class="fas fa-envelope me-1"></i>robertrhodes@example.com</h5><h5 class="mb-0"><i class="fas fa-phone me-1"></i>+1 858 259 5285</h5></div></div></div><div class="appointment-action"><a href="javascript:void(0)" class="btn btn-sm bg-info-light" data-bs-toggle="modal" data-bs-target="#appt_details"><i class="far fa-eye"></i> View </a><a href="javascript:void(0);" class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept </a><a href="javascript:void(0);" class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i> Cancel </a></div></div><div class="appointment-list"><div class="profile-info-widget"><a href="/vuejs/template/patient-profile" class="booking-doc-img"><img src="/vuejs/template/img/patient11.4997aeb7.jpg" alt="User Image"></a><div class="profile-det-info"><h3><a href="/vuejs/template/patient-profile" class="">Harry Williams</a></h3><div class="patient-details"><h5><i class="far fa-clock me-1"></i>3 Nov 2023, 6.00 PM</h5><h5><i class="fas fa-map-marker-alt"></i> Colorado, United States</h5><h5><i class="fas fa-envelope me-1"></i>harrywilliams@example.com</h5><h5 class="mb-0"><i class="fas fa-phone me-1"></i>+1 303 607 7075</h5></div></div></div><div class="appointment-action"><a href="javascript:void(0)" class="btn btn-sm bg-info-light" data-bs-toggle="modal" data-bs-target="#appt_details"><i class="far fa-eye"></i> View </a><a href="javascript:void(0);" class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Accept </a><a href="javascript:void(0);" class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i> Cancel </a></div></div></div></div></div></div></div>
    <div>
        <a id="btn-toggle" href="#" class="sidebar-toggler break-point-sm">
            <i class="ri-menu-line ri-xl"></i>
        </a>
        <h1 style="margin-bottom: 0"></h1>
        <span style="display: inline-block">
            </span>
        <br />
        <span>

            </span>

    </div>
    <div>

    </div>
    <div>

    </div>
    <footer class="">
        <small style="margin-bottom: 20px; display: inline-block">
        </small>
        <br />
        <div class="social-links">

        </div>
    </footer>
@endsection

@push('script')
    <script src="https://unpkg.com/@popperjs/core@2"></script>

    <script>
        const ANIMATION_DURATION = 300;

        const SIDEBAR_EL = document.getElementById("sidebar");

        const SUB_MENU_ELS = document.querySelectorAll(
            ".menu > ul > .menu-item.sub-menu"
        );

        const FIRST_SUB_MENUS_BTN = document.querySelectorAll(
            ".menu > ul > .menu-item.sub-menu > a"
        );

        const INNER_SUB_MENUS_BTN = document.querySelectorAll(
            ".menu > ul > .menu-item.sub-menu .menu-item.sub-menu > a"
        );

        class PopperObject {
            instance = null;
            reference = null;
            popperTarget = null;

            constructor(reference, popperTarget) {
                this.init(reference, popperTarget);
            }

            init(reference, popperTarget) {
                this.reference = reference;
                this.popperTarget = popperTarget;
                this.instance = Popper.createPopper(this.reference, this.popperTarget, {
                    placement: "right",
                    strategy: "fixed",
                    resize: true,
                    modifiers: [
                        {
                            name: "computeStyles",
                            options: {
                                adaptive: false
                            }
                        },
                        {
                            name: "flip",
                            options: {
                                fallbackPlacements: ["left", "right"]
                            }
                        }
                    ]
                });

                document.addEventListener(
                    "click",
                    (e) => this.clicker(e, this.popperTarget, this.reference),
                    false
                );

                const ro = new ResizeObserver(() => {
                    this.instance.update();
                });

                ro.observe(this.popperTarget);
                ro.observe(this.reference);
            }

            clicker(event, popperTarget, reference) {
                if (
                    SIDEBAR_EL.classList.contains("collapsed") &&
                    !popperTarget.contains(event.target) &&
                    !reference.contains(event.target)
                ) {
                    this.hide();
                }
            }

            hide() {
                this.instance.state.elements.popper.style.visibility = "hidden";
            }
        }

        class Poppers {
            subMenuPoppers = [];

            constructor() {
                this.init();
            }

            init() {
                SUB_MENU_ELS.forEach((element) => {
                    this.subMenuPoppers.push(
                        new PopperObject(element, element.lastElementChild)
                    );
                    this.closePoppers();
                });
            }

            togglePopper(target) {
                if (window.getComputedStyle(target).visibility === "hidden")
                    target.style.visibility = "visible";
                else target.style.visibility = "hidden";
            }

            updatePoppers() {
                this.subMenuPoppers.forEach((element) => {
                    element.instance.state.elements.popper.style.display = "none";
                    element.instance.update();
                });
            }

            closePoppers() {
                this.subMenuPoppers.forEach((element) => {
                    element.hide();
                });
            }
        }

        const slideUp = (target, duration = ANIMATION_DURATION) => {
            const { parentElement } = target;
            parentElement.classList.remove("open");
            target.style.transitionProperty = "height, margin, padding";
            target.style.transitionDuration = `${duration}ms`;
            target.style.boxSizing = "border-box";
            target.style.height = `${target.offsetHeight}px`;
            target.offsetHeight;
            target.style.overflow = "hidden";
            target.style.height = 0;
            target.style.paddingTop = 0;
            target.style.paddingBottom = 0;
            target.style.marginTop = 0;
            target.style.marginBottom = 0;
            window.setTimeout(() => {
                target.style.display = "none";
                target.style.removeProperty("height");
                target.style.removeProperty("padding-top");
                target.style.removeProperty("padding-bottom");
                target.style.removeProperty("margin-top");
                target.style.removeProperty("margin-bottom");
                target.style.removeProperty("overflow");
                target.style.removeProperty("transition-duration");
                target.style.removeProperty("transition-property");
            }, duration);
        };
        const slideDown = (target, duration = ANIMATION_DURATION) => {
            const { parentElement } = target;
            parentElement.classList.add("open");
            target.style.removeProperty("display");
            let { display } = window.getComputedStyle(target);
            if (display === "none") display = "block";
            target.style.display = display;
            const height = target.offsetHeight;
            target.style.overflow = "hidden";
            target.style.height = 0;
            target.style.paddingTop = 0;
            target.style.paddingBottom = 0;
            target.style.marginTop = 0;
            target.style.marginBottom = 0;
            target.offsetHeight;
            target.style.boxSizing = "border-box";
            target.style.transitionProperty = "height, margin, padding";
            target.style.transitionDuration = `${duration}ms`;
            target.style.height = `${height}px`;
            target.style.removeProperty("padding-top");
            target.style.removeProperty("padding-bottom");
            target.style.removeProperty("margin-top");
            target.style.removeProperty("margin-bottom");
            window.setTimeout(() => {
                target.style.removeProperty("height");
                target.style.removeProperty("overflow");
                target.style.removeProperty("transition-duration");
                target.style.removeProperty("transition-property");
            }, duration);
        };

        const slideToggle = (target, duration = ANIMATION_DURATION) => {
            if (window.getComputedStyle(target).display === "none")
                return slideDown(target, duration);
            return slideUp(target, duration);
        };

        const PoppersInstance = new Poppers();

        /**
         * wait for the current animation to finish and update poppers position
         */
        const updatePoppersTimeout = () => {
            setTimeout(() => {
                PoppersInstance.updatePoppers();
            }, ANIMATION_DURATION);
        };

        /**
         * sidebar collapse handler
         */
        document.getElementById("btn-collapse").addEventListener("click", () => {
            SIDEBAR_EL.classList.toggle("collapsed");
            PoppersInstance.closePoppers();
            if (SIDEBAR_EL.classList.contains("collapsed"))
                FIRST_SUB_MENUS_BTN.forEach((element) => {
                    element.parentElement.classList.remove("open");
                });

            updatePoppersTimeout();
        });

        /**
         * sidebar toggle handler (on break point )
         */
        document.getElementById("btn-toggle").addEventListener("click", () => {
            SIDEBAR_EL.classList.toggle("toggled");

            updatePoppersTimeout();
        });

        /**
         * toggle sidebar on overlay click
         */
        document.getElementById("overlay").addEventListener("click", () => {
            SIDEBAR_EL.classList.toggle("toggled");
        });

        const defaultOpenMenus = document.querySelectorAll(".menu-item.sub-menu.open");

        defaultOpenMenus.forEach((element) => {
            element.lastElementChild.style.display = "block";
        });

        /**
         * handle top level submenu click
         */
        FIRST_SUB_MENUS_BTN.forEach((element) => {
            element.addEventListener("click", () => {
                if (SIDEBAR_EL.classList.contains("collapsed"))
                    PoppersInstance.togglePopper(element.nextElementSibling);
                else {
                    const parentMenu = element.closest(".menu.open-current-submenu");
                    if (parentMenu)
                        parentMenu
                            .querySelectorAll(":scope > ul > .menu-item.sub-menu > a")
                            .forEach(
                                (el) =>
                                    window.getComputedStyle(el.nextElementSibling).display !==
                                    "none" && slideUp(el.nextElementSibling)
                            );
                    slideToggle(element.nextElementSibling);
                }
            });
        });

        /**
         * handle inner submenu click
         */
        INNER_SUB_MENUS_BTN.forEach((element) => {
            element.addEventListener("click", () => {
                slideToggle(element.nextElementSibling);
            });
        });

    </script>
@endpush
