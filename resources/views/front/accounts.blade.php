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
    <div class="breadcrumb-bar-two"><div class="container"><div class="row align-items-center inner-banner"><div class="col-md-12 col-12 text-center"><h2 class="breadcrumb-title">Accounts</h2><nav aria-label="breadcrumb" class="page-breadcrumb"><ol class="breadcrumb"><li class="breadcrumb-item"><a href="/vuejs/template/" class="">Home</a></li><li class="breadcrumb-item" aria-current="page">Accounts</li></ol></nav></div></div></div></div>



                    <div class="row"><div class="col-lg-5 d-flex"><div class="card flex-fill"><div class="card-header"><div class="row"><div class="col-sm-6"><h3 class="card-title">Account</h3></div><div class="col-sm-6"><div class="text-start"><a title="Edit Profile" class="btn btn-primary btn-sm" href="#account_modal" data-bs-toggle="modal"><i class="fas fa-pencil"></i> Edit Details</a></div></div></div></div><div class="card-body"><div class="profile-view-bottom"><div class="row"><div class="col-lg-6"><div class="info-list"><div class="title">Bank Name</div><div class="text" id="bank_name">Wells Fargo &amp; Co</div></div></div><div class="col-lg-6"><div class="info-list"><div class="title">Branch Name</div><div class="text" id="branch_name">Lenexa</div></div></div><div class="col-lg-6"><div class="info-list"><div class="title">Account Number</div><div class="text" id="account_no">5396 5250 1908 3838</div></div></div><div class="col-lg-6"><div class="info-list"><div class="title">Account Name</div><div class="text" id="account_name">Dr. Darren Elder</div></div></div></div></div></div></div></div><div class="col-lg-7 d-flex"><div class="card flex-fill"><div class="card-body"><div class="row"><div class="col-lg-6"><div class="account-card bg-success-light"><span>$90.48</span> Earned</div></div><div class="col-lg-6"><div class="account-card bg-warning-light"><span>$0.00</span> Requested</div></div><div class="col-lg-6"><div class="account-card bg-purple-light"><span>$90.48</span> Balance</div></div><div class="col-md-12 text-center"><a href="#payment_request_modal" class="btn btn-primary request_btn" data-bs-toggle="modal">Payment Request</a></div></div></div></div></div></div><div class="row"><div class="col-sm-12"><div class="card"><div class="card-body pt-0"><nav class="user-tabs mb-4"><ul class="nav nav-tabs nav-tabs-bottom nav-justified"><li class="nav-item"><a class="nav-link active" href="#pat_accounts" data-bs-toggle="tab">Accounts</a></li><li class="nav-item"><a class="nav-link" href="#pat_refundrequest" data-bs-toggle="tab">Patients Refund Request</a></li></ul></nav><div class="tab-content pt-0"><div id="pat_accounts" class="tab-pane fade show active"><div class="card card-table mb-0"><div class="card-body"><div class="table-responsive"><table class="table table-hover table-center mb-0"><thead><tr><th>Date</th><th>Patient Name</th><th>Amount</th><th>Status</th><th>Action</th></tr></thead><tbody><tr><td>11 Feb 2023 <span class="d-block text-info">10.00 AM</span></td><td><h2 class="table-avatar"><a href="/vuejs/template/patient-profile" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="/vuejs/template/img/patient.18ac9b65.jpg" alt="User Image"></a><a href="/vuejs/template/patient-profile" class="">Richard Wilson <span>#PT0016</span></a></h2></td><td class="text-center">$150</td><td><span class="badge rounded-pill bg-success-light">paid</span></td><td><div class="table-action"><a href="javascript:void(0);" class="btn btn-sm bg-info-light me-1"><i class="far fa-eye"></i> View </a><a href="javascript:void(0);" class="btn btn-sm bg-success-light me-1"><i class="fas fa-check"></i> Accept </a><a href="javascript:void(0);" class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i> Cancel </a></div></td></tr><tr><td>3 Apr 2023 <span class="d-block text-info">11.00 AM</span></td><td><h2 class="table-avatar"><a href="/vuejs/template/patient-profile" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="/vuejs/template/img/patient1.57580ec7.jpg" alt="User Image"></a><a href="/vuejs/template/patient-profile" class="">Charlene Reed <span>#PT0001</span></a></h2></td><td class="text-center">$200</td><td><span class="badge rounded-pill bg-success-light">paid</span></td><td><div class="table-action"><a href="javascript:void(0);" class="btn btn-sm bg-info-light me-1"><i class="far fa-eye"></i> View </a><a href="javascript:void(0);" class="btn btn-sm bg-success-light me-1"><i class="fas fa-check"></i> Accept </a><a href="javascript:void(0);" class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i> Cancel </a></div></td></tr><tr><td>1 Jun 2023 <span class="d-block text-info">1.00 PM</span></td><td><h2 class="table-avatar"><a href="/vuejs/template/patient-profile" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="/vuejs/template/img/patient2.256b0df4.jpg" alt="User Image"></a><a href="/vuejs/template/patient-profile" class="">Travis Trimble <span>#PT0002</span></a></h2></td><td class="text-center">$75</td><td><span class="badge rounded-pill bg-success-light">paid</span></td><td><div class="table-action"><a href="javascript:void(0);" class="btn btn-sm bg-info-light me-1"><i class="far fa-eye"></i> View </a><a href="javascript:void(0);" class="btn btn-sm bg-success-light me-1"><i class="fas fa-check"></i> Accept </a><a href="javascript:void(0);" class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i> Cancel </a></div></td></tr><tr><td>30 Jan 2023 <span class="d-block text-info">9.00 AM</span></td><td><h2 class="table-avatar"><a href="/vuejs/template/patient-profile" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="/vuejs/template/img/patient3.961398fe.jpg" alt="User Image"></a><a href="/vuejs/template/patient-profile" class="">Carl Kelly <span>#PT0003</span></a></h2></td><td class="text-center">$100</td><td><span class="badge rounded-pill bg-warning-light">pending</span></td><td><div class="table-action"><a href="javascript:void(0);" class="btn btn-sm bg-info-light me-1"><i class="far fa-eye"></i> View </a><a href="javascript:void(0);" class="btn btn-sm bg-success-light me-1"><i class="fas fa-check"></i> Accept </a><a href="javascript:void(0);" class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i> Cancel </a></div></td></tr><tr><td>28 Jul 2023 <span class="d-block text-info">6.00 PM</span></td><td><h2 class="table-avatar"><a href="/vuejs/template/patient-profile" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="/vuejs/template/img/patient4.996dc4ba.jpg" alt="User Image"></a><a href="/vuejs/template/patient-profile" class="">Michelle Fairfax <span>#PT0004</span></a></h2></td><td class="text-center">$350</td><td><span class="badge rounded-pill bg-success-light">paid</span></td><td><div class="table-action"><a href="javascript:void(0);" class="btn btn-sm bg-info-light me-1"><i class="far fa-eye"></i> View </a><a href="javascript:void(0);" class="btn btn-sm bg-success-light me-1"><i class="fas fa-check"></i> Accept </a><a href="javascript:void(0);" class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i> Cancel </a></div></td></tr><tr><td>27 Mar 2023 <span class="d-block text-info">8.00 AM</span></td><td><h2 class="table-avatar"><a href="/vuejs/template/patient-profile" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="/vuejs/template/img/patient5.5dd71813.jpg" alt="User Image"></a><a href="/vuejs/template/patient-profile" class="">Gina Moore <span>#PT0005</span></a></h2></td><td class="text-center">$250</td><td><span class="badge rounded-pill bg-danger-light">refunded</span></td><td><div class="table-action"><a href="javascript:void(0);" class="btn btn-sm bg-info-light me-1"><i class="far fa-eye"></i> View </a><a href="javascript:void(0);" class="btn btn-sm bg-success-light me-1"><i class="fas fa-check"></i> Accept </a><a href="javascript:void(0);" class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i> Cancel </a></div></td></tr></tbody></table></div></div></div></div><div class="tab-pane fade" id="pat_refundrequest"><div class="card card-table mb-0"><div class="card-body"><div class="table-responsive"><table class="table table-hover table-center mb-0"><thead><tr><th>Date</th><th>Patient Name</th><th class="text-center">Amount</th><th>Status</th><th>Action</th></tr></thead><tbody><tr><td>11 Feb 2023 <span class="d-block text-info">10.00 AM</span></td><td><h2 class="table-avatar"><a href="/vuejs/template/patient-profile" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="/vuejs/template/img/patient.18ac9b65.jpg" alt="User Image"></a><a href="/vuejs/template/patient-profile" class="">Richard Wilson <span>#PT0016</span></a></h2></td><td class="text-center">$150</td><td><span class="badge rounded-pill bg-success-light">paid</span></td><td><div class="table-action"><a href="javascript:void(0);" class="btn btn-sm bg-info-light me-1"><i class="far fa-eye"></i> View </a><a href="javascript:void(0);" class="btn btn-sm bg-success-light me-1"><i class="fas fa-check"></i> Accept </a><a href="javascript:void(0);" class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i> Cancel </a></div></td></tr><tr><td>3 Apr 2023 <span class="d-block text-info">11.00 AM</span></td><td><h2 class="table-avatar"><a href="/vuejs/template/patient-profile" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="/vuejs/template/img/patient1.57580ec7.jpg" alt="User Image"></a><a href="/vuejs/template/patient-profile" class="">Charlene Reed <span>#PT0001</span></a></h2></td><td class="text-center">$200</td><td><span class="badge rounded-pill bg-success-light">paid</span></td><td><div class="table-action"><a href="javascript:void(0);" class="btn btn-sm bg-info-light me-1"><i class="far fa-eye"></i> View </a><a href="javascript:void(0);" class="btn btn-sm bg-success-light me-1"><i class="fas fa-check"></i> Accept </a><a href="javascript:void(0);" class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i> Cancel </a></div></td></tr><tr><td>1 Jun 2023 <span class="d-block text-info">1.00 PM</span></td><td><h2 class="table-avatar"><a href="/vuejs/template/patient-profile" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="/vuejs/template/img/patient2.256b0df4.jpg" alt="User Image"></a><a href="/vuejs/template/patient-profile" class="">Travis Trimble <span>#PT0002</span></a></h2></td><td class="text-center">$75</td><td><span class="badge rounded-pill bg-success-light">paid</span></td><td><div class="table-action"><a href="javascript:void(0);" class="btn btn-sm bg-info-light me-1"><i class="far fa-eye"></i> View </a><a href="javascript:void(0);" class="btn btn-sm bg-success-light me-1"><i class="fas fa-check"></i> Accept </a><a href="javascript:void(0);" class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i> Cancel </a></div></td></tr><tr><td>30 Jan 2023 <span class="d-block text-info">9.00 AM</span></td><td><h2 class="table-avatar"><a href="/vuejs/template/patient-profile" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="/vuejs/template/img/patient3.961398fe.jpg" alt="User Image"></a><a href="/vuejs/template/patient-profile" class="">Carl Kelly <span>#PT0003</span></a></h2></td><td class="text-center">$100</td><td><span class="badge rounded-pill bg-warning-light">pending</span></td><td><div class="table-action"><a href="javascript:void(0);" class="btn btn-sm bg-info-light me-1"><i class="far fa-eye"></i> View </a><a href="javascript:void(0);" class="btn btn-sm bg-success-light me-1"><i class="fas fa-check"></i> Accept </a><a href="javascript:void(0);" class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i> Cancel </a></div></td></tr><tr><td>28 Jul 2023 <span class="d-block text-info">6.00 PM</span></td><td><h2 class="table-avatar"><a href="/vuejs/template/patient-profile" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="/vuejs/template/img/patient4.996dc4ba.jpg" alt="User Image"></a><a href="/vuejs/template/patient-profile" class="">Michelle Fairfax <span>#PT0004</span></a></h2></td><td class="text-center">$350</td><td><span class="badge rounded-pill bg-success-light">paid</span></td><td><div class="table-action"><a href="javascript:void(0);" class="btn btn-sm bg-info-light me-1"><i class="far fa-eye"></i> View </a><a href="javascript:void(0);" class="btn btn-sm bg-success-light me-1"><i class="fas fa-check"></i> Accept </a><a href="javascript:void(0);" class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i> Cancel </a></div></td></tr><tr><td>27 Mar 2023 <span class="d-block text-info">8.00 AM</span></td><td><h2 class="table-avatar"><a href="/vuejs/template/patient-profile" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="/vuejs/template/img/patient5.5dd71813.jpg" alt="User Image"></a><a href="/vuejs/template/patient-profile" class="">Gina Moore <span>#PT0005</span></a></h2></td><td class="text-center">$250</td><td><span class="badge rounded-pill bg-danger-light">refunded</span></td><td><div class="table-action"><a href="javascript:void(0);" class="btn btn-sm bg-info-light me-1"><i class="far fa-eye"></i> View </a><a href="javascript:void(0);" class="btn btn-sm bg-success-light me-1"><i class="fas fa-check"></i> Accept </a><a href="javascript:void(0);" class="btn btn-sm bg-danger-light"><i class="fas fa-times"></i> Cancel </a></div></td></tr></tbody></table></div></div></div></div></div></div></div></div></div></div></div></div>
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
