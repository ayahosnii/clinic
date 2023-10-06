@extends('layouts.front-layout')
@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link href="https://unpkg.com/css-pro-layout@1.1.0/dist/css/css-pro-layout.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />

    <link href="{{asset('assets/css/doctordashboard.css')}}" rel="stylesheet" />

    @vite(['resources/sass/doctordashboard.scss', 'assets/css/doctordashboard.css'])

@endpush

@section('content')

    <div class="layout has-sidebar fixed-sidebar fixed-header" style="margin: 500">
        <aside id="sidebar" class="sidebar break-point-lg has-bg-image">
            <a id="btn-collapse" class="sidebar-collapser"><i class="ri-arrow-left-s-line"></i></a>
            <div class="image-wrapper" style="">
                <img src="{{asset('assets/img/sidebar-bg.jpg')}}" alt="sidebar background">
            </div>
            <div class="sidebar-layout">
                <div class="sidebar-header">
                    <div class="pro-sidebar-logo">
                        <div>P</div>
                        <h5>Pro Sidebar</h5>
                    </div>
                </div>
                <div class="sidebar-content">
                    <nav class="menu open-current-submenu">
                        <ul>
                            <li class="menu-header"><span> GENERAL </span></li>
                            <li class="menu-item sub-menu">
                                <a href="https://azouaoui-med.github.io/pro-sidebar-template/#">
                    <span class="menu-icon">
                      <i class="ri-vip-diamond-fill"></i>
                    </span>
                                    <span class="menu-title">Components</span>
                                    <span class="menu-suffix">
                      <span class="badge primary">Hot</span>
                    </span>
                                </a>
                                <div class="sub-menu-list" data-popper-placement="right" data-popper-escaped="" style="position: fixed; left: 0px; top: 0px; margin: 0px; visibility: hidden; transform: translate(244px, 173px); display: none;">
                                    <ul>
                                        <li class="menu-item">
                                            <a href="https://azouaoui-med.github.io/pro-sidebar-template/#">
                                                <span class="menu-title">Grid</span>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="https://azouaoui-med.github.io/pro-sidebar-template/#">
                                                <span class="menu-title">Layout</span>
                                            </a>
                                        </li>
                                        <li class="menu-item sub-menu">
                                            <a href="https://azouaoui-med.github.io/pro-sidebar-template/#">
                                                <span class="menu-title">Forms</span>
                                            </a>
                                            <div class="sub-menu-list">
                                                <ul>
                                                    <li class="menu-item">
                                                        <a href="https://azouaoui-med.github.io/pro-sidebar-template/#">
                                                            <span class="menu-title">Input</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="https://azouaoui-med.github.io/pro-sidebar-template/#">
                                                            <span class="menu-title">Select</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item sub-menu">
                                                        <a href="https://azouaoui-med.github.io/pro-sidebar-template/#">
                                                            <span class="menu-title">More</span>
                                                        </a>
                                                        <div class="sub-menu-list">
                                                            <ul>
                                                                <li class="menu-item">
                                                                    <a href="https://azouaoui-med.github.io/pro-sidebar-template/#">
                                                                        <span class="menu-title">CheckBox</span>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="https://azouaoui-med.github.io/pro-sidebar-template/#">
                                                                        <span class="menu-title">Radio</span>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item sub-menu">
                                                                    <a href="https://azouaoui-med.github.io/pro-sidebar-template/#">
                                                                        <span class="menu-title">Want more ?</span>
                                                                        <span class="menu-suffix">🤔</span>
                                                                    </a>
                                                                    <div class="sub-menu-list">
                                                                        <ul>
                                                                            <li class="menu-item">
                                                                                <a href="https://azouaoui-med.github.io/pro-sidebar-template/#">
                                                                                    <span class="menu-prefix">🎉</span>
                                                                                    <span class="menu-title">You made it </span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item sub-menu">
                                <a href="https://azouaoui-med.github.io/pro-sidebar-template/#">
                    <span class="menu-icon">
                      <i class="ri-bar-chart-2-fill"></i>
                    </span>
                                    <span class="menu-title">Charts</span>
                                </a>
                                <div class="sub-menu-list" data-popper-placement="right" data-popper-escaped="" style="position: fixed; left: 0px; top: 0px; margin: 0px; visibility: hidden; transform: translate(244px, 223px); display: none;">
                                    <ul>
                                        <li class="menu-item">
                                            <a href="https://azouaoui-med.github.io/pro-sidebar-template/#">
                                                <span class="menu-title">Pie chart</span>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="https://azouaoui-med.github.io/pro-sidebar-template/#">
                                                <span class="menu-title">Line chart</span>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="https://azouaoui-med.github.io/pro-sidebar-template/#">
                                                <span class="menu-title">Bar chart</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item sub-menu">
                                <a href="https://azouaoui-med.github.io/pro-sidebar-template/#">
                    <span class="menu-icon">
                      <i class="ri-shopping-cart-fill"></i>
                    </span>
                                    <span class="menu-title">E-commerce</span>
                                </a>
                                <div class="sub-menu-list" data-popper-placement="right" data-popper-escaped="" style="position: fixed; left: 0px; top: 0px; margin: 0px; visibility: hidden; transform: translate(244px, 273px); display: none;">
                                    <ul>
                                        <li class="menu-item">
                                            <a href="https://azouaoui-med.github.io/pro-sidebar-template/#">
                                                <span class="menu-title">Products</span>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="https://azouaoui-med.github.io/pro-sidebar-template/#">
                                                <span class="menu-title">Orders</span>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="https://azouaoui-med.github.io/pro-sidebar-template/#">
                                                <span class="menu-title">credit card</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item sub-menu">
                                <a href="https://azouaoui-med.github.io/pro-sidebar-template/#">
                    <span class="menu-icon">
                      <i class="ri-global-fill"></i>
                    </span>
                                    <span class="menu-title">Maps</span>
                                </a>
                                <div class="sub-menu-list" data-popper-placement="right" data-popper-escaped="" style="position: fixed; left: 0px; top: 0px; margin: 0px; visibility: hidden; transform: translate(244px, 323px); display: none;">
                                    <ul>
                                        <li class="menu-item">
                                            <a href="https://azouaoui-med.github.io/pro-sidebar-template/#">
                                                <span class="menu-title">Google maps</span>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="https://azouaoui-med.github.io/pro-sidebar-template/#">
                                                <span class="menu-title">Open street map</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item sub-menu">
                                <a href="https://azouaoui-med.github.io/pro-sidebar-template/#">
                    <span class="menu-icon">
                      <i class="ri-ink-bottle-fill"></i>
                    </span>
                                    <span class="menu-title">Theme</span>
                                </a>
                                <div class="sub-menu-list" data-popper-placement="right" data-popper-escaped="" style="position: fixed; left: 0px; top: 0px; margin: 0px; visibility: hidden; transform: translate(244px, 373px); display: none;">
                                    <ul>
                                        <li class="menu-item">
                                            <a href="https://azouaoui-med.github.io/pro-sidebar-template/#">
                                                <span class="menu-title">Dark</span>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="https://azouaoui-med.github.io/pro-sidebar-template/#">
                                                <span class="menu-title">Light</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-header" style="padding-top: 20px"><span> EXTRA </span></li>
                            <li class="menu-item">
                                <a href="https://azouaoui-med.github.io/pro-sidebar-template/#">
                    <span class="menu-icon">
                      <i class="ri-book-2-fill"></i>
                    </span>
                                    <span class="menu-title">Documentation</span>
                                    <span class="menu-suffix">
                      <span class="badge secondary">Beta</span>
                    </span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="https://azouaoui-med.github.io/pro-sidebar-template/#">
                    <span class="menu-icon">
                      <i class="ri-calendar-fill"></i>
                    </span>
                                    <span class="menu-title">Calendar</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="https://azouaoui-med.github.io/pro-sidebar-template/#">
                    <span class="menu-icon">
                      <i class="ri-service-fill"></i>
                    </span>
                                    <span class="menu-title">Examples</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="sidebar-footer">
                    <div class="footer-box">
                        <div>
                            <img class="react-logo" src="./Pro Sidebar_files/213938106-ca8f0485-3f30-4861-9188-2920ed7ab284.png" alt="react">
                        </div>
                        <div style="padding: 0 10px">
                <span style="display: block; margin-bottom: 10px">Pro sidebar is also available as a react package
                </span>
                            <div style="margin-bottom: 15px">
                                <img alt="preview badge" src="./Pro Sidebar_files/react-pro-sidebar">
                            </div>
                            <div>
                                <a href="https://github.com/azouaoui-med/react-pro-sidebar" target="_blank">Check it out!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <div id="overlay" class="overlay"></div>
        <div class="layout">
            <main class="content">
                <div class="breadcrumb-bar-two"><div class="container"><div class="row align-items-center inner-banner"><div class="col-md-12 col-12 text-center"><h2 class="breadcrumb-title">Invoices</h2><nav aria-label="breadcrumb" class="page-breadcrumb"><ol class="breadcrumb"><li class="breadcrumb-item"><a href="/vuejs/template/" class="">Home</a></li><li class="breadcrumb-item" aria-current="page">Invoices</li></ol></nav></div></div></div></div>

                <div class="card card-table">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-center mb-0">
                                <thead>
                                <tr>
                                    <th>Invoice No</th>
                                    <th>Patient</th>
                                    <th>Amount</th>
                                    <th>Paid On</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><a href="/vuejs/template/invoice-view" class="">#INV-0010</a></td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="/vuejs/template/patient-profile" class="avatar avatar-sm me-2">
                                                <img class="avatar-img rounded-circle" src="/vuejs/template/img/patient.18ac9b65.jpg" alt="User Image">
                                            </a>
                                            <a href="/vuejs/template/patient-profile" class="">Richard Wilson <span>#PT0016</span></a>
                                        </h2>
                                    </td>
                                    <td>$450</td>
                                    <td>14 Mar 2023</td>
                                    <td>
                                        <div class="table-action">
                                            <a href="/vuejs/template/invoice-view" class="btn btn-sm bg-info-light me-2"><i class="far fa-eye"></i> View </a>
                                            <a href="javascript:void(0);" class="btn btn-sm bg-primary-light"><i class="fas fa-print"></i> Print </a>
                                        </div>
                                    </td>
                                </tr>
                                <!-- More invoice rows go here -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <footer class="footer">
                    <small style="margin-bottom: 20px; display: inline-block">
                        © 2023 made with
                        <span style="color: red; font-size: 18px">❤</span> by -
                        <a target="_blank" href="https://azouaoui.netlify.com/"> Mohamed Azouaoui </a>
                    </small>
                    <br>
                    <div class="social-links">
                        <a href="https://github.com/azouaoui-med" target="_blank">
                            <i class="ri-github-fill ri-xl"></i>
                        </a>
                        <a href="https://twitter.com/azouaoui_med" target="_blank">
                            <i class="ri-twitter-fill ri-xl"></i>
                        </a>
                        <a href="https://codepen.io/azouaoui-med" target="_blank">
                            <i class="ri-codepen-fill ri-xl"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/mohamed-azouaoui/" target="_blank">
                            <i class="ri-linkedin-box-fill ri-xl"></i>
                        </a>
                    </div>
                </footer>
            </main>
            <div class="overlay"></div>
        </div>
    </div>

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
