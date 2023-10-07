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


    <div class="content"><div class="container"><div class="row">



                    <div class="breadcrumb-bar-two"><div class="container"><div class="row align-items-center inner-banner"><div class="col-md-12 col-12 text-center"><h2 class="breadcrumb-title">My Patients</h2><nav aria-label="breadcrumb" class="page-breadcrumb"><ol class="breadcrumb"><li class="breadcrumb-item"><a href="/vuejs/template/" class="">Home</a></li><li class="breadcrumb-item" aria-current="page">My Patients</li></ol></nav></div></div></div></div>

                    <div class="row row-grid"><div class="col-md-6 col-lg-4 col-xl-3"><div class="card widget-profile pat-widget-profile"><div class="card-body"><div class="pro-widget-content"><div class="profile-info-widget"><a href="/vuejs/template/patient-profile" class="booking-doc-img"><img src="/vuejs/template/img/patient.18ac9b65.jpg" alt="User Image"></a><div class="profile-det-info"><h3><a href="/vuejs/template/patient-profile" class="">Richard Wilson</a></h3><div class="patient-details"><h5><b>Patient ID : </b>P0016</h5><h5 class="mb-0"><i class="fas fa-map-marker-alt me-1"></i>Alabama, USA</h5></div></div></div></div><div class="patient-info"><ul><li> Phone<span>+1 952 001 8563</span></li><li> Age<span>38 Years, Male</span></li><li> Blood Group<span>AB+</span></li></ul></div></div></div></div><div class="col-md-6 col-lg-4 col-xl-3"><div class="card widget-profile pat-widget-profile"><div class="card-body"><div class="pro-widget-content"><div class="profile-info-widget"><a href="/vuejs/template/patient-profile" class="booking-doc-img"><img src="/vuejs/template/img/patient1.57580ec7.jpg" alt="User Image"></a><div class="profile-det-info"><h3><a href="/vuejs/template/patient-profile" class="">Charlene Reed</a></h3><div class="patient-details"><h5><b>Patient ID : </b>P0001</h5><h5 class="mb-0"><i class="fas fa-map-marker-alt me-1"></i>North Carolina, USA</h5></div></div></div></div><div class="patient-info"><ul><li> Phone<span>+1 828 632 9170</span></li><li> Age<span>29 Years, Female</span></li><li> Blood Group<span>O+</span></li></ul></div></div></div></div><div class="col-md-6 col-lg-4 col-xl-3"><div class="card widget-profile pat-widget-profile"><div class="card-body"><div class="pro-widget-content"><div class="profile-info-widget"><a href="/vuejs/template/patient-profile" class="booking-doc-img"><img src="/vuejs/template/img/patient2.256b0df4.jpg" alt="User Image"></a><div class="profile-det-info"><h3><a href="/vuejs/template/patient-profile" class="">Travis Trimble</a></h3><div class="patient-details"><h5><b>Patient ID : </b>PT0002</h5><h5 class="mb-0"><i class="fas fa-map-marker-alt me-1"></i>Maine, USA</h5></div></div></div></div><div class="patient-info"><ul><li> Phone<span>+1 207 729 9974</span></li><li> Age<span>23 Years, Male</span></li><li> Blood Group<span>B+</span></li></ul></div></div></div></div><div class="col-md-6 col-lg-4 col-xl-3"><div class="card widget-profile pat-widget-profile"><div class="card-body"><div class="pro-widget-content"><div class="profile-info-widget"><a href="/vuejs/template/patient-profile" class="booking-doc-img"><img src="/vuejs/template/img/patient3.961398fe.jpg" alt="User Image"></a><div class="profile-det-info"><h3><a href="/vuejs/template/patient-profile" class="">Carl Kelly</a></h3><div class="patient-details"><h5><b>Patient ID : </b>PT0003</h5><h5 class="mb-0"><i class="fas fa-map-marker-alt me-1"></i>Indiana, USA</h5></div></div></div></div><div class="patient-info"><ul><li> Phone<span>+1 260 724 7769</span></li><li> Age<span>32 Years, Male</span></li><li> Blood Group<span>A+</span></li></ul></div></div></div></div><div class="col-md-6 col-lg-4 col-xl-3"><div class="card widget-profile pat-widget-profile"><div class="card-body"><div class="pro-widget-content"><div class="profile-info-widget"><a href="/vuejs/template/patient-profile" class="booking-doc-img"><img src="/vuejs/template/img/patient4.996dc4ba.jpg" alt="User Image"></a><div class="profile-det-info"><h3><a href="/vuejs/template/patient-profile" class="">Michelle Fairfax</a></h3><div class="patient-details"><h5><b>Patient ID : </b>PT0004</h5><h5 class="mb-0"><i class="fas fa-map-marker-alt me-1"></i>Indiana, USA</h5></div></div></div></div><div class="patient-info"><ul><li> Phone<span>+1 504 368 6874</span></li><li> Age<span>25 Years, Female</span></li><li> Blood Group<span>B+</span></li></ul></div></div></div></div><div class="col-md-6 col-lg-4 col-xl-3"><div class="card widget-profile pat-widget-profile"><div class="card-body"><div class="pro-widget-content"><div class="profile-info-widget"><a href="/vuejs/template/patient-profile" class="booking-doc-img"><img src="/vuejs/template/img/patient5.5dd71813.jpg" alt="User Image"></a><div class="profile-det-info"><h3><a href="/vuejs/template/patient-profile" class="">Gina Moore</a></h3><div class="patient-details"><h5><b>Patient ID : </b>PT0005</h5><h5 class="mb-0"><i class="fas fa-map-marker-alt me-1"></i>Florida, USA</h5></div></div></div></div><div class="patient-info"><ul><li> Phone<span>+1 954 820 7887</span></li><li> Age<span>25 Years, Female</span></li><li> Blood Group<span>AB-</span></li></ul></div></div></div></div><div class="col-md-6 col-lg-4 col-xl-3"><div class="card widget-profile pat-widget-profile"><div class="card-body"><div class="pro-widget-content"><div class="profile-info-widget"><a href="/vuejs/template/patient-profile" class="booking-doc-img"><img src="/vuejs/template/img/patient6.470ffb7c.jpg" alt="User Image"></a><div class="profile-det-info"><h3><a href="/vuejs/template/patient-profile" class="">Elsie Gilley</a></h3><div class="patient-details"><h5><b>Patient ID : </b>PT0006</h5><h5 class="mb-0"><i class="fas fa-map-marker-alt me-1"></i>Kentucky, USA</h5></div></div></div></div><div class="patient-info"><ul><li> Phone<span>+1 315 384 4562</span></li><li> Age<span>14 Years, Female</span></li><li> Blood Group<span>O-</span></li></ul></div></div></div></div><div class="col-md-6 col-lg-4 col-xl-3"><div class="card widget-profile pat-widget-profile"><div class="card-body"><div class="pro-widget-content"><div class="profile-info-widget"><a href="/vuejs/template/patient-profile" class="booking-doc-img"><img src="/vuejs/template/img/patient7.f14899cc.jpg" alt="User Image"></a><div class="profile-det-info"><h3><a href="/vuejs/template/patient-profile" class="">Joan Gardner</a></h3><div class="patient-details"><h5><b>Patient ID : </b>PT0007</h5><h5 class="mb-0"><i class="fas fa-map-marker-alt me-1"></i>California, USA</h5></div></div></div></div><div class="patient-info"><ul><li> Phone<span>+1 707 2202 603</span></li><li> Age<span>25 Years, Female</span></li><li> Blood Group<span>A-</span></li></ul></div></div></div></div><div class="col-md-6 col-lg-4 col-xl-3"><div class="card widget-profile pat-widget-profile"><div class="card-body"><div class="pro-widget-content"><div class="profile-info-widget"><a href="/vuejs/template/patient-profile" class="booking-doc-img"><img src="/vuejs/template/img/patient8.9e8e61f5.jpg" alt="User Image"></a><div class="profile-det-info"><h3><a href="/vuejs/template/patient-profile" class="">Daniel Griffing</a></h3><div class="patient-details"><h5><b>Patient ID : </b>PT0008</h5><h5 class="mb-0"><i class="fas fa-map-marker-alt me-1"></i>New Jersey, USA</h5></div></div></div></div><div class="patient-info"><ul><li> Phone<span>+1 973 773 9497</span></li><li> Age<span>28 Years, Male</span></li><li> Blood Group<span>O+</span></li></ul></div></div></div></div><div class="col-md-6 col-lg-4 col-xl-3"><div class="card widget-profile pat-widget-profile"><div class="card-body"><div class="pro-widget-content"><div class="profile-info-widget"><a href="/vuejs/template/patient-profile" class="booking-doc-img"><img src="/vuejs/template/img/patient9.ef96a760.jpg" alt="User Image"></a><div class="profile-det-info"><h3><a href="/vuejs/template/patient-profile" class="">Walter Roberson</a></h3><div class="patient-details"><h5><b>Patient ID : </b>PT0009</h5><h5 class="mb-0"><i class="fas fa-map-marker-alt me-1"></i>Florida, USA</h5></div></div></div></div><div class="patient-info"><ul><li> Phone<span>+1 850 358 4445</span></li><li> Age<span>28 Years, Male</span></li><li> Blood Group<span>A+</span></li></ul></div></div></div></div><div class="col-md-6 col-lg-4 col-xl-3"><div class="card widget-profile pat-widget-profile"><div class="card-body"><div class="pro-widget-content"><div class="profile-info-widget"><a href="/vuejs/template/patient-profile" class="booking-doc-img"><img src="/vuejs/template/img/patient10.244042cb.jpg" alt="User Image"></a><div class="profile-det-info"><h3><a href="/vuejs/template/patient-profile" class="">Robert Rhodes</a></h3><div class="patient-details"><h5><b>Patient ID : </b>PT0010</h5><h5 class="mb-0"><i class="fas fa-map-marker-alt me-1"></i>California, USA</h5></div></div></div></div><div class="patient-info"><ul><li> Phone<span>+1 858 259 5285</span></li><li> Age<span>19 Years, Male</span></li><li> Blood Group<span>B+</span></li></ul></div></div></div></div><div class="col-md-6 col-lg-4 col-xl-3"><div class="card widget-profile pat-widget-profile"><div class="card-body"><div class="pro-widget-content"><div class="profile-info-widget"><a href="/vuejs/template/patient-profile" class="booking-doc-img"><img src="/vuejs/template/img/patient11.4997aeb7.jpg" alt="User Image"></a><div class="profile-det-info"><h3><a href="/vuejs/template/patient-profile" class="">Harry Williams</a></h3><div class="patient-details"><h5><b>Patient ID : </b>PT0011</h5><h5 class="mb-0"><i class="fas fa-map-marker-alt me-1"></i>Colorado, USA</h5></div></div></div></div><div class="patient-info"><ul><li> Phone<span>+1 303 607 7075</span></li><li> Age<span>9 Years, Male</span></li><li> Blood Group<span>A-</span></li></ul></div></div></div></div></div></div></div></div>
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
