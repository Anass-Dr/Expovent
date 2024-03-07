<x-app-layout>

    <!-- Event popup area start -->
    <section class="validate-event__popup-area">
        <div class="popup__wrapper">
            <div class="popup__title-wrapper">
                <h3 class="popup__title">Validate Event</h3>
            </div>
            <div class="popup__input-wrapper">
                <form action="/admin/event" method="post">
                    @csrf
                    <input type="hidden" name="event_id">
                    <div class="singel__input-field mb-15">
                        <label class="input__field-text">Event Title</label>
                        <input name="title" type="text" readonly/>
                    </div>
                    <div class="singel__input-field mb-15">
                        <label class="input__field-text">Status</label>
                        <select name="status" required>
                            <option value="approved">Approved</option>
                            <option value="pending">Pending</option>
                            <option value="rejected">Rejected</option>
                        </select>
                    </div>
                    <button class="input__btn w-100" type="submit">
                        <i class="fa-regular fa-plus"></i>Submit
                    </button>
                </form>
            </div>
        </div>
    </section>
    <!-- Event popup area end -->

    <!-- Offcanvas area start -->
    <div class="fix">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="dashboard.html">
                                <img src="{{ asset('assets/img/logo/logo-black.svg') }}" alt="logo not found" />
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button>
                                <i class="fal fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="offcanvas__search mb-25">
                        <form action="#">
                            <input type="text" placeholder="What are you searching for?" />
                            <button type="submit"><i class="far fa-search"></i></button>
                        </form>
                    </div>
                    <div class="mobile-menu fix mb-40"></div>
                    <div class="offcanvas__contact mt-30 mb-20">
                        <h4>Contact Info</h4>
                        <ul>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank"
                                       href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">12/A,
                                        Mirnada City Tower, NYC</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="far fa-phone"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="tel:+088889797697">+088889797697</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="tel:+012-345-6789"><span
                                            class="mailto:support@mail.com">support@mail.com</span></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="offcanvas__social">
                        <ul>
                            <li>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>
    <div class="offcanvas__overlay-white"></div>
    <!-- Offcanvas area start -->

    <!-- App side area start -->
    <div class="app__slide-wrapper">
        <div class="breadcrumb__area">
            <div class="breadcrumb__wrapper mb-35">
                <div class="breadcrumb__main">
                    <div class="breadcrumb__inner">
                        <div class="breadcrumb__icon">
                            <i class="flaticon-home"></i>
                        </div>
                        <div class="breadcrumb__menu">
                            <nav>
                                <ul>
                                    <li><span><a href="/admin">Home</a></span></li>
                                    <li class="active"><span>Upcoming Event List</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="event__list-area pb-20">
            <div class="event__content-inner">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="day-tab-1-pane" role="tabpanel"
                         aria-labelledby="day-tab-1" tabindex="0">
                        <div class="body__card-wrapper">
                            <h4 class="event__information-title mb-25">Event Information</h4>
                            <div class="attendant__wrapper mb-35">
                                <table>
                                    <thead>
                                    <tr>
                                        <th>Event Title</th>
                                        <th>Starting Date</th>
                                        <th>Address</th>
                                        <th>Places Number</th>
                                        <th>Category</th>
                                        <th>Validation Type</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($events as $event)
                                        <tr>
                                            <input type="hidden" name="event_id" value="{{ $event->id }}">
                                            <td id="title">
                                                <div class="attendant__seminer">
                                                    <span>{{ $event->title }}</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="attendant__date">
                                                    <span>{{ $event->starting_at }}</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="attendant__location">
                                                    <span>{{ $event->address }}</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="attendant__seminer">
                                                    <span>{{ $event->places }}</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="attendant__seminer">
                                                    <span>{{ $event->category->name }}</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="attendant__seminer">
                                                    <span>{{ $event->validation_type }}</span>
                                                </div>
                                            </td>
                                            <td id="status">
                                                <div class="attendant__status">
                                                    @php
                                                        $color = '';
                                                        if ($event->status == 'approved') $color = 'bg-green';
                                                        if ($event->status == 'rejected') $color = 'bg-warn';
                                                        if ($event->status == 'pending') $color = 'warning-bg';
                                                    @endphp
                                                    <span class="status__tag {{ $color }}">{{ $event->status }}</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="attendant__action">
                                                    <div class="card__header-dropdown">
                                                        <div class="dropdown">
                                                            <button>
                                                                <svg class="attendant__dot" width="14"
                                                                     height="4" viewBox="0 0 14 4" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M2 0.75C2.69036 0.75 3.25 1.30964 3.25 2C3.25 2.69036 2.69036 3.25 2 3.25C1.30964 3.25 0.75 2.69036 0.75 2C0.75 1.30964 1.30964 0.75 2 0.75Z"
                                                                        fill="white"></path>
                                                                    <path
                                                                        d="M7 0.75C7.69036 0.75 8.25 1.30964 8.25 2C8.25 2.69036 7.69036 3.25 7 3.25C6.30964 3.25 5.75 2.69036 5.75 2C5.75 1.30964 6.30964 0.75 7 0.75Z"
                                                                        fill="white"></path>
                                                                    <path
                                                                        d="M13.25 2C13.25 1.30964 12.6904 0.75 12 0.75C11.3096 0.75 10.75 1.30964 10.75 2C10.75 2.69036 11.3096 3.25 12 3.25C12.6904 3.25 13.25 2.69036 13.25 2Z"
                                                                        fill="white"></path>
                                                                </svg>
                                                            </button>
                                                            <div class="dropdown-list">
                                                                <a class="dropdown__item validate-event__popup-active"
                                                                   href="#">Edit</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="day-tab-2-pane" role="tabpanel" aria-labelledby="day-tab-2"
                         tabindex="0">
                        <div class="body__card-wrapper">
                            <h4 class="event__information-title mb-25">Event Information</h4>
                            <div class="attendant__wrapper mb-35">
                                <table>
                                    <thead>
                                    <tr>
                                        <th>ID No</th>
                                        <th>Event Name</th>
                                        <th>Speakers</th>
                                        <th>Time</th>
                                        <th>Date</th>
                                        <th>Location</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="attendant__serial">
                                                <span>#3265</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__seminer">
                                                    <span><a href="event-details.html">Digital Product Design
                                                            Seminar - 2023</a></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__speakers">
                                                <div class="attendant__speakers-thumb">
                                                    <img src="{{ asset('assets/img/meta/01.png') }}"
                                                         alt="image not found">
                                                    <img src="{{ asset('assets/img/meta/02.png') }}"
                                                         alt="image not found">
                                                    <img src="{{ asset('assets/img/meta/03.png') }}"
                                                         alt="image not found">
                                                    <img src="{{ asset('assets/img/meta/04.png') }}"
                                                         alt="image not found">
                                                    <div class="attendant__count-inner">
                                                        <span class="attendant__meta-count">02+</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__time">
                                                <span>9:00am- 5:00 p m</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__date">
                                                <span>25 Jun 2023</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__location">
                                                    <span>California(CA),
                                                        92677</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__action">
                                                <div class="card__header-dropdown">
                                                    <div class="dropdown">
                                                        <button>
                                                            <svg class="attendant__dot" width="14"
                                                                 height="4" viewBox="0 0 14 4" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M2 0.75C2.69036 0.75 3.25 1.30964 3.25 2C3.25 2.69036 2.69036 3.25 2 3.25C1.30964 3.25 0.75 2.69036 0.75 2C0.75 1.30964 1.30964 0.75 2 0.75Z"
                                                                    fill="white"></path>
                                                                <path
                                                                    d="M7 0.75C7.69036 0.75 8.25 1.30964 8.25 2C8.25 2.69036 7.69036 3.25 7 3.25C6.30964 3.25 5.75 2.69036 5.75 2C5.75 1.30964 6.30964 0.75 7 0.75Z"
                                                                    fill="white"></path>
                                                                <path
                                                                    d="M13.25 2C13.25 1.30964 12.6904 0.75 12 0.75C11.3096 0.75 10.75 1.30964 10.75 2C10.75 2.69036 11.3096 3.25 12 3.25C12.6904 3.25 13.25 2.69036 13.25 2Z"
                                                                    fill="white"></path>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-list">
                                                            <a class="dropdown__item"
                                                               href="javascript:void(0)">Edit</a>
                                                            <a class="dropdown__item"
                                                               href="javascript:void(0)">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="attendant__serial">
                                                <span>#6259</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__seminer">
                                                    <span><a href="event-details.html">Graphic Design
                                                            Innovation Seminar- 2023</a></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__speakers">
                                                <div class="attendant__speakers-thumb">
                                                    <img src="{{ asset('assets/img/meta/01.png') }}"
                                                         alt="image not found">
                                                    <img src="{{ asset('assets/img/meta/02.png') }}"
                                                         alt="image not found">
                                                    <img src="{{ asset('assets/img/meta/03.png') }}"
                                                         alt="image not found">
                                                    <img src="{{ asset('assets/img/meta/04.png') }}"
                                                         alt="image not found">
                                                    <div class="fvkix">
                                                        <span class="attendant__meta-count">02+</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__time">
                                                <span>9:00am- 5:00 p m</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__date">
                                                <span>28 Jun 2023</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__location">
                                                    <span>California(CA),
                                                        92677</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__action">
                                                <div class="card__header-dropdown">
                                                    <div class="dropdown">
                                                        <button>
                                                            <svg class="attendant__dot" width="14"
                                                                 height="4" viewBox="0 0 14 4" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M2 0.75C2.69036 0.75 3.25 1.30964 3.25 2C3.25 2.69036 2.69036 3.25 2 3.25C1.30964 3.25 0.75 2.69036 0.75 2C0.75 1.30964 1.30964 0.75 2 0.75Z"
                                                                    fill="white"></path>
                                                                <path
                                                                    d="M7 0.75C7.69036 0.75 8.25 1.30964 8.25 2C8.25 2.69036 7.69036 3.25 7 3.25C6.30964 3.25 5.75 2.69036 5.75 2C5.75 1.30964 6.30964 0.75 7 0.75Z"
                                                                    fill="white"></path>
                                                                <path
                                                                    d="M13.25 2C13.25 1.30964 12.6904 0.75 12 0.75C11.3096 0.75 10.75 1.30964 10.75 2C10.75 2.69036 11.3096 3.25 12 3.25C12.6904 3.25 13.25 2.69036 13.25 2Z"
                                                                    fill="white"></path>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-list">
                                                            <a class="dropdown__item"
                                                               href="javascript:void(0)">Edit</a>
                                                            <a class="dropdown__item"
                                                               href="javascript:void(0)">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="attendant__serial">
                                                <span>#0326</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__seminer">
                                                    <span><a href="event-details.html">Digital Product Design
                                                            Seminar - 2023</a></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__speakers">
                                                <div class="attendant__speakers-thumb">
                                                    <img src="{{ asset('assets/img/meta/01.png') }}"
                                                         alt="image not found">
                                                    <img src="{{ asset('assets/img/meta/02.png') }}"
                                                         alt="image not found">
                                                    <img src="{{ asset('assets/img/meta/03.png') }}"
                                                         alt="image not found">
                                                    <img src="{{ asset('assets/img/meta/04.png') }}"
                                                         alt="image not found">
                                                    <div class="fvkix">
                                                        <span class="attendant__meta-count">02+</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__time">
                                                <span>9:00am- 5:00 p m</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__date">
                                                <span>30 Jun 2023</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__location">
                                                    <span>California(CA),
                                                        92677</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__action">
                                                <div class="card__header-dropdown">
                                                    <div class="dropdown">
                                                        <button>
                                                            <svg class="attendant__dot" width="14"
                                                                 height="4" viewBox="0 0 14 4" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M2 0.75C2.69036 0.75 3.25 1.30964 3.25 2C3.25 2.69036 2.69036 3.25 2 3.25C1.30964 3.25 0.75 2.69036 0.75 2C0.75 1.30964 1.30964 0.75 2 0.75Z"
                                                                    fill="white"></path>
                                                                <path
                                                                    d="M7 0.75C7.69036 0.75 8.25 1.30964 8.25 2C8.25 2.69036 7.69036 3.25 7 3.25C6.30964 3.25 5.75 2.69036 5.75 2C5.75 1.30964 6.30964 0.75 7 0.75Z"
                                                                    fill="white"></path>
                                                                <path
                                                                    d="M13.25 2C13.25 1.30964 12.6904 0.75 12 0.75C11.3096 0.75 10.75 1.30964 10.75 2C10.75 2.69036 11.3096 3.25 12 3.25C12.6904 3.25 13.25 2.69036 13.25 2Z"
                                                                    fill="white"></path>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-list">
                                                            <a class="dropdown__item"
                                                               href="javascript:void(0)">Edit</a>
                                                            <a class="dropdown__item"
                                                               href="javascript:void(0)">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="attendant__serial">
                                                <span>#9236</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__seminer">
                                                    <span><a href="event-details.html">Digital Product Design
                                                            Seminar - 2023</a></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__speakers">
                                                <div class="attendant__speakers-thumb">
                                                    <img src="{{ asset('assets/img/meta/01.png') }}"
                                                         alt="image not found">
                                                    <img src="{{ asset('assets/img/meta/02.png') }}"
                                                         alt="image not found">
                                                    <img src="{{ asset('assets/img/meta/03.png') }}"
                                                         alt="image not found">
                                                    <img src="{{ asset('assets/img/meta/04.png') }}"
                                                         alt="image not found">
                                                    <div class="fvkix">
                                                        <span class="attendant__meta-count">02+</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__time">
                                                <span>9:00am- 5:00 p m</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__date">
                                                <span>02 Feb 2023</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__location">
                                                    <span>California(CA),
                                                        92677</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__action">
                                                <div class="card__header-dropdown">
                                                    <div class="dropdown">
                                                        <button>
                                                            <svg class="attendant__dot" width="14"
                                                                 height="4" viewBox="0 0 14 4" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M2 0.75C2.69036 0.75 3.25 1.30964 3.25 2C3.25 2.69036 2.69036 3.25 2 3.25C1.30964 3.25 0.75 2.69036 0.75 2C0.75 1.30964 1.30964 0.75 2 0.75Z"
                                                                    fill="white"></path>
                                                                <path
                                                                    d="M7 0.75C7.69036 0.75 8.25 1.30964 8.25 2C8.25 2.69036 7.69036 3.25 7 3.25C6.30964 3.25 5.75 2.69036 5.75 2C5.75 1.30964 6.30964 0.75 7 0.75Z"
                                                                    fill="white"></path>
                                                                <path
                                                                    d="M13.25 2C13.25 1.30964 12.6904 0.75 12 0.75C11.3096 0.75 10.75 1.30964 10.75 2C10.75 2.69036 11.3096 3.25 12 3.25C12.6904 3.25 13.25 2.69036 13.25 2Z"
                                                                    fill="white"></path>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-list">
                                                            <a class="dropdown__item"
                                                               href="javascript:void(0)">Edit</a>
                                                            <a class="dropdown__item"
                                                               href="javascript:void(0)">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="attendant__serial">
                                                <span>#0032</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__seminer">
                                                    <span><a href="event-details.html">Digital Product Design
                                                            Seminar - 2023</a></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__speakers">
                                                <div class="attendant__speakers-thumb">
                                                    <img src="{{ asset('assets/img/meta/01.png') }}"
                                                         alt="image not found">
                                                    <img src="{{ asset('assets/img/meta/02.png') }}"
                                                         alt="image not found">
                                                    <img src="{{ asset('assets/img/meta/03.png') }}"
                                                         alt="image not found">
                                                    <img src="{{ asset('assets/img/meta/04.png') }}"
                                                         alt="image not found">
                                                    <div class="fvkix">
                                                        <span class="attendant__meta-count">02+</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__time">
                                                <span>9:00am- 5:00 p m</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__date">
                                                <span>05 Feb 2023</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__location">
                                                    <span>California(CA),
                                                        92677</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__action">
                                                <div class="card__header-dropdown">
                                                    <div class="dropdown">
                                                        <button>
                                                            <svg class="attendant__dot" width="14"
                                                                 height="4" viewBox="0 0 14 4" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M2 0.75C2.69036 0.75 3.25 1.30964 3.25 2C3.25 2.69036 2.69036 3.25 2 3.25C1.30964 3.25 0.75 2.69036 0.75 2C0.75 1.30964 1.30964 0.75 2 0.75Z"
                                                                    fill="white"></path>
                                                                <path
                                                                    d="M7 0.75C7.69036 0.75 8.25 1.30964 8.25 2C8.25 2.69036 7.69036 3.25 7 3.25C6.30964 3.25 5.75 2.69036 5.75 2C5.75 1.30964 6.30964 0.75 7 0.75Z"
                                                                    fill="white"></path>
                                                                <path
                                                                    d="M13.25 2C13.25 1.30964 12.6904 0.75 12 0.75C11.3096 0.75 10.75 1.30964 10.75 2C10.75 2.69036 11.3096 3.25 12 3.25C12.6904 3.25 13.25 2.69036 13.25 2Z"
                                                                    fill="white"></path>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-list">
                                                            <a class="dropdown__item"
                                                               href="javascript:void(0)">Edit</a>
                                                            <a class="dropdown__item"
                                                               href="javascript:void(0)">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="attendant__serial">
                                                <span>#0003</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__seminer">
                                                    <span><a href="event-details.html">Product & Interaction
                                                            Seminar - 2023</a></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__speakers">
                                                <div class="attendant__speakers-thumb">
                                                    <img src="{{ asset('assets/img/meta/01.png') }}"
                                                         alt="image not found">
                                                    <img src="{{ asset('assets/img/meta/02.png') }}"
                                                         alt="image not found">
                                                    <img src="{{ asset('assets/img/meta/03.png') }}"
                                                         alt="image not found">
                                                    <img src="{{ asset('assets/img/meta/04.png') }}"
                                                         alt="image not found">
                                                    <div class="fvkix">
                                                        <span class="attendant__meta-count">02+</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__time">
                                                <span>9:00am- 5:00 p m</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__date">
                                                <span>15 Mar 2023</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__location">
                                                    <span>California(CA),
                                                        92677</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__action">
                                                <div class="card__header-dropdown">
                                                    <div class="dropdown">
                                                        <button>
                                                            <svg class="attendant__dot" width="14"
                                                                 height="4" viewBox="0 0 14 4" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M2 0.75C2.69036 0.75 3.25 1.30964 3.25 2C3.25 2.69036 2.69036 3.25 2 3.25C1.30964 3.25 0.75 2.69036 0.75 2C0.75 1.30964 1.30964 0.75 2 0.75Z"
                                                                    fill="white"></path>
                                                                <path
                                                                    d="M7 0.75C7.69036 0.75 8.25 1.30964 8.25 2C8.25 2.69036 7.69036 3.25 7 3.25C6.30964 3.25 5.75 2.69036 5.75 2C5.75 1.30964 6.30964 0.75 7 0.75Z"
                                                                    fill="white"></path>
                                                                <path
                                                                    d="M13.25 2C13.25 1.30964 12.6904 0.75 12 0.75C11.3096 0.75 10.75 1.30964 10.75 2C10.75 2.69036 11.3096 3.25 12 3.25C12.6904 3.25 13.25 2.69036 13.25 2Z"
                                                                    fill="white"></path>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-list">
                                                            <a class="dropdown__item"
                                                               href="javascript:void(0)">Edit</a>
                                                            <a class="dropdown__item"
                                                               href="javascript:void(0)">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="attendant__serial">
                                                <span>#1985</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__seminer">
                                                    <span><a href="event-details.html">Digital Product Design
                                                            Seminar - 2023</a></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__speakers">
                                                <div class="attendant__speakers-thumb">
                                                    <img src="{{ asset('assets/img/meta/01.png') }}"
                                                         alt="image not found">
                                                    <img src="{{ asset('assets/img/meta/02.png') }}"
                                                         alt="image not found">
                                                    <img src="{{ asset('assets/img/meta/03.png') }}"
                                                         alt="image not found">
                                                    <img src="{{ asset('assets/img/meta/04.png') }}"
                                                         alt="image not found">
                                                    <div class="fvkix">
                                                        <span class="attendant__meta-count">02+</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__time">
                                                <span>9:00am- 5:00 p m</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__date">
                                                <span>25 Mar 2023</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__location">
                                                    <span>California(CA),
                                                        92677</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__action">
                                                <div class="card__header-dropdown">
                                                    <div class="dropdown">
                                                        <button>
                                                            <svg class="attendant__dot" width="14"
                                                                 height="4" viewBox="0 0 14 4" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M2 0.75C2.69036 0.75 3.25 1.30964 3.25 2C3.25 2.69036 2.69036 3.25 2 3.25C1.30964 3.25 0.75 2.69036 0.75 2C0.75 1.30964 1.30964 0.75 2 0.75Z"
                                                                    fill="white"></path>
                                                                <path
                                                                    d="M7 0.75C7.69036 0.75 8.25 1.30964 8.25 2C8.25 2.69036 7.69036 3.25 7 3.25C6.30964 3.25 5.75 2.69036 5.75 2C5.75 1.30964 6.30964 0.75 7 0.75Z"
                                                                    fill="white"></path>
                                                                <path
                                                                    d="M13.25 2C13.25 1.30964 12.6904 0.75 12 0.75C11.3096 0.75 10.75 1.30964 10.75 2C10.75 2.69036 11.3096 3.25 12 3.25C12.6904 3.25 13.25 2.69036 13.25 2Z"
                                                                    fill="white"></path>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-list">
                                                            <a class="dropdown__item"
                                                               href="javascript:void(0)">Edit</a>
                                                            <a class="dropdown__item"
                                                               href="javascript:void(0)">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="basic__pagination d-flex align-items-center justify-content-end">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="#">1</a>
                                        </li>
                                        <li>
                                            <span class="current">2</span>
                                        </li>
                                        <li>
                                            <a href="#">3</a>
                                        </li>
                                        <li>
                                            <a href="#">4</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa-regular fa-arrow-right-long"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="day-tab-3-pane" role="tabpanel" aria-labelledby="day-tab-3"
                         tabindex="0">
                        <div class="body__card-wrapper">
                            <h4 class="event__information-title mb-25">Event Information</h4>
                            <div class="attendant__wrapper mb-35">
                                <table>
                                    <thead>
                                    <tr>
                                        <th>ID No</th>
                                        <th>Event Name</th>
                                        <th>Speakers</th>
                                        <th>Time</th>
                                        <th>Date</th>
                                        <th>Location</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="attendant__serial">
                                                <span>#3265</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__seminer">
                                                    <span><a href="event-details.html">Digital Product Design
                                                            Seminar - 2023</a></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__speakers">
                                                <div class="attendant__speakers-thumb">
                                                    <img src="{{ asset('assets/img/meta/01.png') }}"
                                                         alt="image not found">
                                                    <img src="{{ asset('assets/img/meta/02.png') }}"
                                                         alt="image not found">
                                                    <img src="{{ asset('assets/img/meta/03.png') }}"
                                                         alt="image not found">
                                                    <img src="{{ asset('assets/img/meta/04.png') }}"
                                                         alt="image not found">
                                                    <div class="attendant__count-inner">
                                                        <span class="attendant__meta-count">02+</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__time">
                                                <span>9:00am- 5:00 p m</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__date">
                                                <span>25 Jun 2023</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__location">
                                                    <span>California(CA),
                                                        92677</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__action">
                                                <div class="card__header-dropdown">
                                                    <div class="dropdown">
                                                        <button>
                                                            <svg class="attendant__dot" width="14"
                                                                 height="4" viewBox="0 0 14 4" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M2 0.75C2.69036 0.75 3.25 1.30964 3.25 2C3.25 2.69036 2.69036 3.25 2 3.25C1.30964 3.25 0.75 2.69036 0.75 2C0.75 1.30964 1.30964 0.75 2 0.75Z"
                                                                    fill="white"></path>
                                                                <path
                                                                    d="M7 0.75C7.69036 0.75 8.25 1.30964 8.25 2C8.25 2.69036 7.69036 3.25 7 3.25C6.30964 3.25 5.75 2.69036 5.75 2C5.75 1.30964 6.30964 0.75 7 0.75Z"
                                                                    fill="white"></path>
                                                                <path
                                                                    d="M13.25 2C13.25 1.30964 12.6904 0.75 12 0.75C11.3096 0.75 10.75 1.30964 10.75 2C10.75 2.69036 11.3096 3.25 12 3.25C12.6904 3.25 13.25 2.69036 13.25 2Z"
                                                                    fill="white"></path>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-list">
                                                            <a class="dropdown__item"
                                                               href="javascript:void(0)">Edit</a>
                                                            <a class="dropdown__item"
                                                               href="javascript:void(0)">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="attendant__serial">
                                                <span>#6259</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__seminer">
                                                    <span><a href="event-details.html">Graphic Design
                                                            Innovation Seminar- 2023</a></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__speakers">
                                                <div class="attendant__speakers-thumb">
                                                    <img src="{{ asset('assets/img/meta/01.png') }}"
                                                         alt="image not found">
                                                    <img src="{{ asset('assets/img/meta/02.png') }}"
                                                         alt="image not found">
                                                    <img src="{{ asset('assets/img/meta/03.png') }}"
                                                         alt="image not found">
                                                    <img src="{{ asset('assets/img/meta/04.png') }}"
                                                         alt="image not found">
                                                    <div class="fvkix">
                                                        <span class="attendant__meta-count">02+</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__time">
                                                <span>9:00am- 5:00 p m</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__date">
                                                <span>28 Jun 2023</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__location">
                                                    <span>California(CA),
                                                        92677</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__action">
                                                <div class="card__header-dropdown">
                                                    <div class="dropdown">
                                                        <button>
                                                            <svg class="attendant__dot" width="14"
                                                                 height="4" viewBox="0 0 14 4" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M2 0.75C2.69036 0.75 3.25 1.30964 3.25 2C3.25 2.69036 2.69036 3.25 2 3.25C1.30964 3.25 0.75 2.69036 0.75 2C0.75 1.30964 1.30964 0.75 2 0.75Z"
                                                                    fill="white"></path>
                                                                <path
                                                                    d="M7 0.75C7.69036 0.75 8.25 1.30964 8.25 2C8.25 2.69036 7.69036 3.25 7 3.25C6.30964 3.25 5.75 2.69036 5.75 2C5.75 1.30964 6.30964 0.75 7 0.75Z"
                                                                    fill="white"></path>
                                                                <path
                                                                    d="M13.25 2C13.25 1.30964 12.6904 0.75 12 0.75C11.3096 0.75 10.75 1.30964 10.75 2C10.75 2.69036 11.3096 3.25 12 3.25C12.6904 3.25 13.25 2.69036 13.25 2Z"
                                                                    fill="white"></path>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-list">
                                                            <a class="dropdown__item"
                                                               href="javascript:void(0)">Edit</a>
                                                            <a class="dropdown__item"
                                                               href="javascript:void(0)">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="attendant__serial">
                                                <span>#0326</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__seminer">
                                                    <span><a href="event-details.html">Digital Product Design
                                                            Seminar - 2023</a></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__speakers">
                                                <div class="attendant__speakers-thumb">
                                                    <img src="{{ asset('assets/img/meta/01.png') }}"
                                                         alt="image not found">
                                                    <img src="{{ asset('assets/img/meta/02.png') }}"
                                                         alt="image not found">
                                                    <img src="{{ asset('assets/img/meta/03.png') }}"
                                                         alt="image not found">
                                                    <img src="{{ asset('assets/img/meta/04.png') }}"
                                                         alt="image not found">
                                                    <div class="fvkix">
                                                        <span class="attendant__meta-count">02+</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__time">
                                                <span>9:00am- 5:00 p m</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__date">
                                                <span>30 Jun 2023</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__location">
                                                    <span>California(CA),
                                                        92677</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__action">
                                                <div class="card__header-dropdown">
                                                    <div class="dropdown">
                                                        <button>
                                                            <svg class="attendant__dot" width="14"
                                                                 height="4" viewBox="0 0 14 4" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M2 0.75C2.69036 0.75 3.25 1.30964 3.25 2C3.25 2.69036 2.69036 3.25 2 3.25C1.30964 3.25 0.75 2.69036 0.75 2C0.75 1.30964 1.30964 0.75 2 0.75Z"
                                                                    fill="white"></path>
                                                                <path
                                                                    d="M7 0.75C7.69036 0.75 8.25 1.30964 8.25 2C8.25 2.69036 7.69036 3.25 7 3.25C6.30964 3.25 5.75 2.69036 5.75 2C5.75 1.30964 6.30964 0.75 7 0.75Z"
                                                                    fill="white"></path>
                                                                <path
                                                                    d="M13.25 2C13.25 1.30964 12.6904 0.75 12 0.75C11.3096 0.75 10.75 1.30964 10.75 2C10.75 2.69036 11.3096 3.25 12 3.25C12.6904 3.25 13.25 2.69036 13.25 2Z"
                                                                    fill="white"></path>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-list">
                                                            <a class="dropdown__item"
                                                               href="javascript:void(0)">Edit</a>
                                                            <a class="dropdown__item"
                                                               href="javascript:void(0)">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="attendant__serial">
                                                <span>#9236</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__seminer">
                                                    <span><a href="event-details.html">Digital Product Design
                                                            Seminar - 2023</a></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__speakers">
                                                <div class="attendant__speakers-thumb">
                                                    <img src="{{ asset('assets/img/meta/01.png') }}"
                                                         alt="image not found">
                                                    <img src="{{ asset('assets/img/meta/02.png') }}"
                                                         alt="image not found">
                                                    <img src="{{ asset('assets/img/meta/03.png') }}"
                                                         alt="image not found">
                                                    <img src="{{ asset('assets/img/meta/04.png') }}"
                                                         alt="image not found">
                                                    <div class="fvkix">
                                                        <span class="attendant__meta-count">02+</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__time">
                                                <span>9:00am- 5:00 p m</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__date">
                                                <span>02 Feb 2023</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__location">
                                                    <span>California(CA),
                                                        92677</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__action">
                                                <div class="card__header-dropdown">
                                                    <div class="dropdown">
                                                        <button>
                                                            <svg class="attendant__dot" width="14"
                                                                 height="4" viewBox="0 0 14 4" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M2 0.75C2.69036 0.75 3.25 1.30964 3.25 2C3.25 2.69036 2.69036 3.25 2 3.25C1.30964 3.25 0.75 2.69036 0.75 2C0.75 1.30964 1.30964 0.75 2 0.75Z"
                                                                    fill="white"></path>
                                                                <path
                                                                    d="M7 0.75C7.69036 0.75 8.25 1.30964 8.25 2C8.25 2.69036 7.69036 3.25 7 3.25C6.30964 3.25 5.75 2.69036 5.75 2C5.75 1.30964 6.30964 0.75 7 0.75Z"
                                                                    fill="white"></path>
                                                                <path
                                                                    d="M13.25 2C13.25 1.30964 12.6904 0.75 12 0.75C11.3096 0.75 10.75 1.30964 10.75 2C10.75 2.69036 11.3096 3.25 12 3.25C12.6904 3.25 13.25 2.69036 13.25 2Z"
                                                                    fill="white"></path>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-list">
                                                            <a class="dropdown__item"
                                                               href="javascript:void(0)">Edit</a>
                                                            <a class="dropdown__item"
                                                               href="javascript:void(0)">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="attendant__serial">
                                                <span>#0032</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__seminer">
                                                    <span><a href="event-details.html">Digital Product Design
                                                            Seminar - 2023</a></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__speakers">
                                                <div class="attendant__speakers-thumb">
                                                    <img src="{{ asset('assets/img/meta/01.png') }}"
                                                         alt="image not found">
                                                    <img src="{{ asset('assets/img/meta/02.png') }}"
                                                         alt="image not found">
                                                    <img src="{{ asset('assets/img/meta/03.png') }}"
                                                         alt="image not found">
                                                    <img src="{{ asset('assets/img/meta/04.png') }}"
                                                         alt="image not found">
                                                    <div class="fvkix">
                                                        <span class="attendant__meta-count">02+</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__time">
                                                <span>9:00am- 5:00 p m</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__date">
                                                <span>05 Feb 2023</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__location">
                                                    <span>California(CA),
                                                        92677</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__action">
                                                <div class="card__header-dropdown">
                                                    <div class="dropdown">
                                                        <button>
                                                            <svg class="attendant__dot" width="14"
                                                                 height="4" viewBox="0 0 14 4" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M2 0.75C2.69036 0.75 3.25 1.30964 3.25 2C3.25 2.69036 2.69036 3.25 2 3.25C1.30964 3.25 0.75 2.69036 0.75 2C0.75 1.30964 1.30964 0.75 2 0.75Z"
                                                                    fill="white"></path>
                                                                <path
                                                                    d="M7 0.75C7.69036 0.75 8.25 1.30964 8.25 2C8.25 2.69036 7.69036 3.25 7 3.25C6.30964 3.25 5.75 2.69036 5.75 2C5.75 1.30964 6.30964 0.75 7 0.75Z"
                                                                    fill="white"></path>
                                                                <path
                                                                    d="M13.25 2C13.25 1.30964 12.6904 0.75 12 0.75C11.3096 0.75 10.75 1.30964 10.75 2C10.75 2.69036 11.3096 3.25 12 3.25C12.6904 3.25 13.25 2.69036 13.25 2Z"
                                                                    fill="white"></path>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-list">
                                                            <a class="dropdown__item"
                                                               href="javascript:void(0)">Edit</a>
                                                            <a class="dropdown__item"
                                                               href="javascript:void(0)">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="attendant__serial">
                                                <span>#0003</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__seminer">
                                                    <span><a href="event-details.html">Product & Interaction
                                                            Seminar - 2023</a></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__speakers">
                                                <div class="attendant__speakers-thumb">
                                                    <img src="{{ asset('assets/img/meta/01.png') }}"
                                                         alt="image not found">
                                                    <img src="{{ asset('assets/img/meta/02.png') }}"
                                                         alt="image not found">
                                                    <img src="{{ asset('assets/img/meta/03.png') }}"
                                                         alt="image not found">
                                                    <img src="{{ asset('assets/img/meta/04.png') }}"
                                                         alt="image not found">
                                                    <div class="fvkix">
                                                        <span class="attendant__meta-count">02+</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__time">
                                                <span>9:00am- 5:00 p m</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__date">
                                                <span>15 Mar 2023</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__location">
                                                    <span>California(CA),
                                                        92677</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__action">
                                                <div class="card__header-dropdown">
                                                    <div class="dropdown">
                                                        <button>
                                                            <svg class="attendant__dot" width="14"
                                                                 height="4" viewBox="0 0 14 4" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M2 0.75C2.69036 0.75 3.25 1.30964 3.25 2C3.25 2.69036 2.69036 3.25 2 3.25C1.30964 3.25 0.75 2.69036 0.75 2C0.75 1.30964 1.30964 0.75 2 0.75Z"
                                                                    fill="white"></path>
                                                                <path
                                                                    d="M7 0.75C7.69036 0.75 8.25 1.30964 8.25 2C8.25 2.69036 7.69036 3.25 7 3.25C6.30964 3.25 5.75 2.69036 5.75 2C5.75 1.30964 6.30964 0.75 7 0.75Z"
                                                                    fill="white"></path>
                                                                <path
                                                                    d="M13.25 2C13.25 1.30964 12.6904 0.75 12 0.75C11.3096 0.75 10.75 1.30964 10.75 2C10.75 2.69036 11.3096 3.25 12 3.25C12.6904 3.25 13.25 2.69036 13.25 2Z"
                                                                    fill="white"></path>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-list">
                                                            <a class="dropdown__item"
                                                               href="javascript:void(0)">Edit</a>
                                                            <a class="dropdown__item"
                                                               href="javascript:void(0)">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="attendant__serial">
                                                <span>#1985</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__seminer">
                                                    <span><a href="event-details.html">Digital Product Design
                                                            Seminar - 2023</a></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__speakers">
                                                <div class="attendant__speakers-thumb">
                                                    <img src="{{ asset('assets/img/meta/01.png') }}"
                                                         alt="image not found">
                                                    <img src="{{ asset('assets/img/meta/02.png') }}"
                                                         alt="image not found">
                                                    <img src="{{ asset('assets/img/meta/03.png') }}"
                                                         alt="image not found">
                                                    <img src="{{ asset('assets/img/meta/04.png') }}"
                                                         alt="image not found">
                                                    <div class="fvkix">
                                                        <span class="attendant__meta-count">02+</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__time">
                                                <span>9:00am- 5:00 p m</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__date">
                                                <span>25 Mar 2023</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__location">
                                                    <span>California(CA),
                                                        92677</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="attendant__action">
                                                <div class="card__header-dropdown">
                                                    <div class="dropdown">
                                                        <button>
                                                            <svg class="attendant__dot" width="14"
                                                                 height="4" viewBox="0 0 14 4" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M2 0.75C2.69036 0.75 3.25 1.30964 3.25 2C3.25 2.69036 2.69036 3.25 2 3.25C1.30964 3.25 0.75 2.69036 0.75 2C0.75 1.30964 1.30964 0.75 2 0.75Z"
                                                                    fill="white"></path>
                                                                <path
                                                                    d="M7 0.75C7.69036 0.75 8.25 1.30964 8.25 2C8.25 2.69036 7.69036 3.25 7 3.25C6.30964 3.25 5.75 2.69036 5.75 2C5.75 1.30964 6.30964 0.75 7 0.75Z"
                                                                    fill="white"></path>
                                                                <path
                                                                    d="M13.25 2C13.25 1.30964 12.6904 0.75 12 0.75C11.3096 0.75 10.75 1.30964 10.75 2C10.75 2.69036 11.3096 3.25 12 3.25C12.6904 3.25 13.25 2.69036 13.25 2Z"
                                                                    fill="white"></path>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-list">
                                                            <a class="dropdown__item"
                                                               href="javascript:void(0)">Edit</a>
                                                            <a class="dropdown__item"
                                                               href="javascript:void(0)">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="basic__pagination d-flex align-items-center justify-content-end">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="#">1</a>
                                        </li>
                                        <li>
                                            <span class="current">2</span>
                                        </li>
                                        <li>
                                            <a href="#">3</a>
                                        </li>
                                        <li>
                                            <a href="#">4</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa-regular fa-arrow-right-long"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- App side area start -->

</x-app-layout>
