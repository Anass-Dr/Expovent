<x-app-layout>
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
                                    <li class="active"><span>Create Event</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-12">
                <div class="create__event-area">
                    <div class="body__card-wrapper">
                        <div class="card__header-top">
                            <div class="card__title-inner">
                                <h4 class="event__information-title">Event Information</h4>
                            </div>
                            <div class="card__header-dropdown">
                                <div class="dropdown">
                                    <button>
                                        <svg width="14" height="4" viewBox="0 0 14 4" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2 0.75C2.69036 0.75 3.25 1.30964 3.25 2C3.25 2.69036 2.69036 3.25 2 3.25C1.30964 3.25 0.75 2.69036 0.75 2C0.75 1.30964 1.30964 0.75 2 0.75Z"
                                                fill="#7A7A7A"/>
                                            <path
                                                d="M7 0.75C7.69036 0.75 8.25 1.30964 8.25 2C8.25 2.69036 7.69036 3.25 7 3.25C6.30964 3.25 5.75 2.69036 5.75 2C5.75 1.30964 6.30964 0.75 7 0.75Z"
                                                fill="#7A7A7A"/>
                                            <path
                                                d="M13.25 2C13.25 1.30964 12.6904 0.75 12 0.75C11.3096 0.75 10.75 1.30964 10.75 2C10.75 2.69036 11.3096 3.25 12 3.25C12.6904 3.25 13.25 2.69036 13.25 2Z"
                                                fill="#7A7A7A"/>
                                        </svg>
                                    </button>
                                    <div class="dropdown-list">
                                        <a class="dropdown__item" href="javascript:void(0)">Edit</a>
                                        <a class="dropdown__item" href="javascript:void(0)">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-25">
                            <form action="{{ route('event.store') }}" method="post">
                                @csrf
                                <div class="create__input-wrapper">
                                    <div class="singel__input-field mb-15">
                                        <label class="input__field-text">Title</label>
                                        <input type="text" name="title" required/>
                                    </div>
                                    <div class="singel__input-field mb-15">
                                        <label class="input__field-text">Organization Name</label>
                                        <input type="text" name="organization" required />
                                    </div>
                                    <div class="singel__input-field mb-15">
                                        <label class="input__field-text">Event Details</label>
                                        <textarea name="description"></textarea>
                                    </div>
                                </div>
                                <div class="event__update-wrapper">
                                    <span>Add Image</span>
                                    <div class="event__update-file">
                                        <div class="event__update-thumb">
                                            <div class="box__input">
                                                <input type="file" name="files[]" id="file" class="box__file"
                                                       data-multiple-caption="{count} files selected" multiple>
                                                <label class="input__field-text" for="file"><span><i
                                                            class="fa-regular fa-plus"></i></span><span>Add Image</span></label>
                                                <button type="submit" class="box__button"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-20 mb-4">
                                    <div class="singel__input-field mb-15">
                                        <div class="singel__input-field is-color-change mb-15">
                                            <label class="input__field-text">Date</label>
                                            <input type="datetime-local" name="starting_at" required />
                                        </div>
                                    </div>
                                    <div class="singel__input-field mb-15">
                                        <div class="singel__input-field mb-15">
                                            <label class="input__field-text">Total Seat</label>
                                            <input type="number" name="places" required/>
                                        </div>
                                    </div>
                                    <div class="singel__input-field mb-15">
                                        <div class="singel__input-field mb-15">
                                            <label class="input__field-text">Venue / Address</label>
                                            <input type="text" name="address" required/>
                                        </div>
                                    </div>
                                    <div class="singel__input-field mb-15">
                                        <label class="input__field-text">Validation Type</label>
                                        <div class="contact__select">
                                            <select name="validation_type" required>
                                                <option value="automatic" selected>Automatic</option>
                                                <option value="manual">Manual</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="singel__input-field mb-15">
                                        <label class="input__field-text">Category</label>
                                        <select name="category_id" required>
                                            <option value="">Choose Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <button class="element__btn border-green" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- App side area end -->
</x-app-layout>
