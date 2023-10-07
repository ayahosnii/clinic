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


    <div class="breadcrumb-bar-two"><div class="container"><div class="row align-items-center inner-banner"><div class="col-md-12 col-12 text-center"><h2 class="breadcrumb-title">Schedule Timings</h2><nav aria-label="breadcrumb" class="page-breadcrumb"><ol class="breadcrumb"><li class="breadcrumb-item"><a href="/vuejs/template/" class="">Home</a></li><li class="breadcrumb-item" aria-current="page">Schedule Timings</li></ol></nav></div></div></div></div>

    <div class="card"><div class="card-body"><h4 class="card-title">Schedule Timings</h4><div class="profile-box"><div class="row"><div class="col-lg-4"><div class="mb-3"><label class="durations">Timing Slot Duration</label><div><select class="form-control select2-hidden-accessible" id="" name="" data-select2-id="25" tabindex="-1" aria-hidden="true"><option value="-" data-select2-id="27">-</option><option value="15 mins" data-select2-id="28">15 mins</option><option value="30 mins" data-select2-id="29">30 mins</option><option value="45 mins" data-select2-id="30">45 mins</option><option value="1 Hour" data-select2-id="31">1 Hour</option></select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="26" style="width: 244.552px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2--container"><span class="select2-selection__rendered" id="select2--container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">30 mins</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div></div></div></div><div class="row"><div class="col-md-12"><div class="card schedule-widget mb-0"><div class="schedule-header"><div class="schedule-nav"><ul class="nav nav-tabs nav-justified" role="tablist"><li class="nav-item" role="presentation"><a class="nav-link" data-bs-toggle="tab" href="#slot_sunday" aria-selected="false" role="tab" tabindex="-1">Sunday</a></li><li class="nav-item" role="presentation"><a class="nav-link active" data-bs-toggle="tab" href="#slot_monday" aria-selected="true" role="tab">Monday</a></li><li class="nav-item" role="presentation"><a class="nav-link" data-bs-toggle="tab" href="#slot_tuesday" aria-selected="false" tabindex="-1" role="tab">Tuesday</a></li><li class="nav-item" role="presentation"><a class="nav-link" data-bs-toggle="tab" href="#slot_wednesday" aria-selected="false" tabindex="-1" role="tab">Wednesday</a></li><li class="nav-item" role="presentation"><a class="nav-link" data-bs-toggle="tab" href="#slot_thursday" aria-selected="false" tabindex="-1" role="tab">Thursday</a></li><li class="nav-item" role="presentation"><a class="nav-link" data-bs-toggle="tab" href="#slot_friday" aria-selected="false" tabindex="-1" role="tab">Friday</a></li><li class="nav-item" role="presentation"><a class="nav-link" data-bs-toggle="tab" href="#slot_saturday" aria-selected="false" tabindex="-1" role="tab">Saturday</a></li></ul></div></div><div class="tab-content schedule-cont"><div id="slot_sunday" class="tab-pane fade" role="tabpanel"><h4 class="card-title d-flex justify-content-between"><span>Time Slots</span><a aria-current="page" href="/vuejs/template/schedule-timings#add_time_slot" class="active router-link-exact-active edit-link" data-bs-toggle="modal"><i class="fa fa-plus-circle"></i> Add Slot</a></h4><p class="text-muted mb-0">Not Available</p></div><div id="slot_monday" class="tab-pane fade active show" role="tabpanel"><h4 class="card-title d-flex justify-content-between"><span>Time Slots</span><a aria-current="page" href="/vuejs/template/schedule-timings#edit_time_slot" class="active router-link-exact-active edit-link" data-bs-toggle="modal"><i class="fa fa-edit me-1"></i>Edit</a></h4><div class="doc-times"><div class="doc-slot-list"> 8:00 pm - 11:30 pm <a href="javascript:void(0)" class="delete_schedule"><i class="fa fa-times"></i></a></div><div class="doc-slot-list"> 11:30 pm - 1:30 pm <a href="javascript:void(0)" class="delete_schedule"><i class="fa fa-times"></i></a></div><div class="doc-slot-list"> 3:00 pm - 5:00 pm <a href="javascript:void(0)" class="delete_schedule"><i class="fa fa-times"></i></a></div><div class="doc-slot-list"> 6:00 pm - 11:00 pm <a href="javascript:void(0)" class="delete_schedule"><i class="fa fa-times"></i></a></div></div></div><div id="slot_tuesday" class="tab-pane fade" role="tabpanel"><h4 class="card-title d-flex justify-content-between"><span>Time Slots</span><a aria-current="page" href="/vuejs/template/schedule-timings#add_time_slot" class="active router-link-exact-active edit-link" data-bs-toggle="modal"><i class="fa fa-plus-circle"></i> Add Slot</a></h4><p class="text-muted mb-0">Not Available</p></div><div id="slot_wednesday" class="tab-pane fade" role="tabpanel"><h4 class="card-title d-flex justify-content-between"><span>Time Slots</span><a aria-current="page" href="/vuejs/template/schedule-timings#add_time_slot" class="active router-link-exact-active edit-link" data-bs-toggle="modal"><i class="fa fa-plus-circle"></i> Add Slot</a></h4><p class="text-muted mb-0">Not Available</p></div><div id="slot_thursday" class="tab-pane fade" role="tabpanel"><h4 class="card-title d-flex justify-content-between"><span>Time Slots</span><a aria-current="page" href="/vuejs/template/schedule-timings#add_time_slot" class="active router-link-exact-active edit-link" data-bs-toggle="modal"><i class="fa fa-plus-circle"></i> Add Slot</a></h4><p class="text-muted mb-0">Not Available</p></div><div id="slot_friday" class="tab-pane fade" role="tabpanel"><h4 class="card-title d-flex justify-content-between"><span>Time Slots</span><a class="edit-link" data-bs-toggle="modal" href="#add_time_slot"><i class="fa fa-plus-circle"></i> Add Slot</a></h4><p class="text-muted mb-0">Not Available</p></div><div id="slot_saturday" class="tab-pane fade" role="tabpanel"><h4 class="card-title d-flex justify-content-between"><span>Time Slots</span><a aria-current="page" href="/vuejs/template/schedule-timings#add_time_slot" class="active router-link-exact-active edit-link" data-bs-toggle="modal"><i class="fa fa-plus-circle"></i> Add Slot</a></h4><p class="text-muted mb-0">Not Available</p></div></div></div></div></div></div></div></div>
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
