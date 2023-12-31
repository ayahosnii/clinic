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

    <div class="breadcrumb-bar-two"><div class="container"><div class="row align-items-center inner-banner"><div class="col-md-12 col-12 text-center"><h2 class="breadcrumb-title">Invoices</h2><nav aria-label="breadcrumb" class="page-breadcrumb"><ol class="breadcrumb"><li class="breadcrumb-item"><a href="/vuejs/template/" class="">Home</a></li><li class="breadcrumb-item" aria-current="page">Invoices</li></ol></nav></div></div></div></div>
    <div class="card card-table"><div class="card-body"><div class="table-responsive"><table class="table table-hover table-center mb-0"><thead><tr><th>Invoice No</th><th>Patient</th><th>Amount</th><th>Paid On</th><th>Actions</th></tr></thead><tbody><tr><td><a href="/vuejs/template/invoice-view" class="">#INV-0010</a></td><td><h2 class="table-avatar"><a href="/vuejs/template/patient-profile" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="/vuejs/template/img/patient.18ac9b65.jpg" alt="User Image"></a><a href="/vuejs/template/patient-profile" class="">Richard Wilson <span>#PT0016</span></a></h2></td><td>$450</td><td>14 Mar 2023</td><td><div class="table-action"><a href="/vuejs/template/invoice-view" class="btn btn-sm bg-info-light me-2"><i class="far fa-eye"></i> View </a><a href="javascript:void(0);" class="btn btn-sm bg-primary-light"><i class="fas fa-print"></i> Print </a></div></td></tr><tr><td><a href="/vuejs/template/invoice-view" class="">#INV-0009</a></td><td><h2 class="table-avatar"><a href="/vuejs/template/patient-profile" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="/vuejs/template/img/patient1.57580ec7.jpg" alt="User Image"></a><a href="/vuejs/template/patient-profile" class="">Charlene Reed <span>#PT0001</span></a></h2></td><td>$200</td><td>13 Mar 2023</td><td><div class="table-action"><a href="/vuejs/template/invoice-view" class="btn btn-sm bg-info-light me-2"><i class="far fa-eye"></i> View </a><a href="javascript:void(0);" class="btn btn-sm bg-primary-light"><i class="fas fa-print"></i> Print </a></div></td></tr><tr><td><a href="/vuejs/template/invoice-view" class="">#INV-0008</a></td><td><h2 class="table-avatar"><a href="/vuejs/template/patient-profile" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="/vuejs/template/img/patient2.256b0df4.jpg" alt="User Image"></a><a href="/vuejs/template/patient-profile" class="">Travis Trimble <span>#PT0002</span></a></h2></td><td>$100</td><td>12 Mar 2023</td><td><div class="table-action"><a href="/vuejs/template/invoice-view" class="btn btn-sm bg-info-light me-2"><i class="far fa-eye"></i> View </a><a href="javascript:void(0);" class="btn btn-sm bg-primary-light"><i class="fas fa-print"></i> Print </a></div></td></tr><tr><td><a href="/vuejs/template/invoice-view" class="">#INV-0007</a></td><td><h2 class="table-avatar"><a href="/vuejs/template/patient-profile" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="/vuejs/template/img/patient3.961398fe.jpg" alt="User Image"></a><a href="/vuejs/template/patient-profile" class="">Carl Kelly <span>#PT0003</span></a></h2></td><td>$350</td><td>11 Mar 2023</td><td><div class="table-action"><a href="/vuejs/template/invoice-view" class="btn btn-sm bg-info-light me-2"><i class="far fa-eye"></i> View </a><a href="javascript:void(0);" class="btn btn-sm bg-primary-light"><i class="fas fa-print"></i> Print </a></div></td></tr><tr><td><a href="/vuejs/template/invoice-view" class="">#INV-0006</a></td><td><h2 class="table-avatar"><a href="/vuejs/template/patient-profile" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="/vuejs/template/img/patient4.996dc4ba.jpg" alt="User Image"></a><a href="/vuejs/template/patient-profile" class="">Michelle Fairfax <span>#PT0004</span></a></h2></td><td>$275</td><td>10 Mar 2023</td><td><div class="table-action"><a href="/vuejs/template/invoice-view" class="btn btn-sm bg-info-light me-2"><i class="far fa-eye"></i> View </a><a href="javascript:void(0);" class="btn btn-sm bg-primary-light"><i class="fas fa-print"></i> Print </a></div></td></tr><tr><td><a href="/vuejs/template/invoice-view" class="">#INV-0005</a></td><td><h2 class="table-avatar"><a href="/vuejs/template/patient-profile" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="/vuejs/template/img/patient5.5dd71813.jpg" alt="User Image"></a><a href="/vuejs/template/patient-profile" class="">Gina Moore <span>#PT0005</span></a></h2></td><td>$600</td><td>9 Mar 2023</td><td><div class="table-action"><a href="/vuejs/template/invoice-view" class="btn btn-sm bg-info-light me-2"><i class="far fa-eye"></i> View </a><a href="javascript:void(0);" class="btn btn-sm bg-primary-light"><i class="fas fa-print"></i> Print </a></div></td></tr><tr><td><a href="/vuejs/template/invoice-view" class="">#INV-0004</a></td><td><h2 class="table-avatar"><a href="/vuejs/template/patient-profile" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="/vuejs/template/img/patient6.470ffb7c.jpg" alt="User Image"></a><a href="/vuejs/template/patient-profile" class="">Elsie Gilley <span>#PT0006</span></a></h2></td><td>$50</td><td>8 Mar 2023</td><td><div class="table-action"><a href="/vuejs/template/invoice-view" class="btn btn-sm bg-info-light me-2"><i class="far fa-eye"></i> View </a><a href="javascript:void(0);" class="btn btn-sm bg-primary-light"><i class="fas fa-print"></i> Print </a></div></td></tr><tr><td><a href="/vuejs/template/invoice-view" class="">#INV-0003</a></td><td><h2 class="table-avatar"><a href="/vuejs/template/patient-profile" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="/vuejs/template/img/patient7.f14899cc.jpg" alt="User Image"></a><a href="/vuejs/template/patient-profile" class="">Joan Gardner <span>#PT0007</span></a></h2></td><td>$400</td><td>7 Mar 2023</td><td><div class="table-action"><a href="/vuejs/template/invoice-view" class="btn btn-sm bg-info-light me-2"><i class="far fa-eye"></i> View </a><a href="javascript:void(0);" class="btn btn-sm bg-primary-light"><i class="fas fa-print"></i> Print </a></div></td></tr><tr><td><a href="/vuejs/template/invoice-view" class="">#INV-0002</a></td><td><h2 class="table-avatar"><a href="/vuejs/template/patient-profile" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="/vuejs/template/img/patient8.9e8e61f5.jpg" alt="User Image"></a><a href="/vuejs/template/patient-profile" class="">Daniel Griffing <span>#PT0008</span></a></h2></td><td>$550</td><td>6 Mar 2023</td><td><div class="table-action"><a href="/vuejs/template/invoice-view" class="btn btn-sm bg-info-light me-2"><i class="far fa-eye"></i> View </a><a href="javascript:void(0);" class="btn btn-sm bg-primary-light"><i class="fas fa-print"></i> Print </a></div></td></tr><tr><td><a href="/vuejs/template/invoice-view" class="">#INV-0001</a></td><td><h2 class="table-avatar"><a href="/vuejs/template/patient-profile" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="/vuejs/template/img/patient9.ef96a760.jpg" alt="User Image"></a><a href="/vuejs/template/patient-profile" class="">Walter Roberson <span>#PT0009</span></a></h2></td><td>$100</td><td>5 Mar 2023</td><td><div class="table-action"><a href="/vuejs/template/invoice-view" class="btn btn-sm bg-info-light me-2"><i class="far fa-eye"></i> View </a><a href="javascript:void(0);" class="btn btn-sm bg-primary-light"><i class="fas fa-print"></i> Print </a></div></td></tr></tbody></table></div></div></div>
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
