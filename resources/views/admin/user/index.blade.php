<x-app-layout>

    <!-- Event popup area start -->
    <section class="event__popup-area">
        <div class="popup__wrapper">
            <div class="popup__title-wrapper">
                <h3 class="popup__title">Add User</h3>
            </div>
            <div class="popup__input-wrapper">
                <form action="{{ route('user.store') }}" method="post">
                    @csrf
                    <div class="singel__input-field mb-15">
                        <label class="input__field-text">Full Name</label>
                        <input name="full_name" type="text" required/>
                    </div>
                    <div class="singel__input-field mb-15">
                        <label class="input__field-text">Email</label>
                        <input name="email" type="email" required/>
                    </div>
                    <div class="singel__input-field mb-15">
                        <label class="input__field-text">Password</label>
                        <input name="password" type="password" required/>
                    </div>
                    <div class="singel__input-field mb-15">
                        <label class="input__field-text">Role</label>
                        <select name="role" required>
                            <option value="admin">Admin</option>
                            <option value="organizer">Organizer</option>
                            <option value="participate" selected>Participate</option>
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

    <!-- Event popup area start -->
    <section class="category__popup-area">
        <div class="popup__wrapper">
            <div class="popup__title-wrapper">
                <h3 class="popup__title">Edit User</h3>
            </div>
            <div class="popup__input-wrapper">
                <form action="{{ route('user.update', 1) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="singel__input-field mb-15">
                        <label class="input__field-text">Full Name</label>
                        <input name="full_name" id="full_name" type="text" required/>
                    </div>
                    <div class="singel__input-field mb-15">
                        <label class="input__field-text">Email</label>
                        <input name="email" id="email" type="email" required/>
                    </div>
                    <div class="singel__input-field mb-15">
                        <label class="input__field-text">Role</label>
                        <select name="role" required>
                            <option value="admin">Admin</option>
                            <option value="organizer">Organizer</option>
                            <option value="participate">Participate</option>
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
                                <img src="{{ asset('assets/img/logo/logo-black.svg') }}" alt="logo not found"/>
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
                            <input type="text" placeholder="What are you searching for?"/>
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
                                    <li class="active"><span>Users List</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="breadcrum__button">
                        <a class="breadcrum__btn event__popup-active" href="#">Add New User<i
                                class="fa-regular fa-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="attendant__list-area pb-20">
            <div class="attendan__content">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="day-tab-1-pane" role="tabpanel"
                         aria-labelledby="day-tab-1" tabindex="0">
                        <div class="body__card-wrapper">
                            <div class="attendant__wrapper mb-35">
                                <table>
                                    <thead>
                                    <tr>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                                            <td>
                                                <div class="attendant__serial">
                                                    <span>{{ $user->full_name }}</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="attendant__serial">
                                                    <span>{{ $user->email }}</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="attendant__serial">
                                                    <span>{{ $user->role }}</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="attendant__action">
                                                    <div class="card__header-dropdown">
                                                        <div class="dropdown">
                                                            <button>
                                                                <svg class="attendant__dot" width="14" height="4"
                                                                     viewBox="0 0 14 4" fill="none"
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
                                                                <a class="dropdown__item category__popup-active"
                                                                   href="#">Edit</a>
                                                                <form action="{{ route('user.destroy', $user->id) }}" method="post">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="dropdown__item"
                                                                    >Delete</button>
                                                                </form>
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
                </div>
            </div>
        </div>
    </div>

    <script>
        const editBtns = document.querySelectorAll('.category__popup-active');
        editBtns.forEach(btn => btn.addEventListener('click', (e) => {
            const tr = e.target.closest('tr');
            const modal = document.querySelector('.category__popup-area');
            const userId = tr.querySelector('input[type="hidden"]').value;
            const fullName = tr.querySelector('td:first-of-type span').textContent;
            const email = tr.querySelector('td:nth-of-type(2) span').textContent;
            const role = tr.querySelector('td:nth-of-type(3) span').textContent;
            modal.querySelector('form').action = modal.querySelector('form').action.replace('1', userId);
            modal.querySelector('#full_name').value = fullName;
            modal.querySelector('#email').value = email;
            modal.querySelectorAll('select option').forEach(option => option.selected = option.value === role);
        }));
    </script>
</x-app-layout>
