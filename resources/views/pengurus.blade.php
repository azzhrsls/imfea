@extends('layouts.front')

@section('content')

<section class="testimonial section container">
    <div class="testimonial grid">
        <div class="swiper testimonial-swipper">
        <div class="swiper-wrapper">
            <div class="testimonial-card swiper-slide" style="text-align: center;">
            <div class="testimonial-quote">
                <i class="bx bxs-quote-alt-left"></i>
            </div>
            <p class="testimonial-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. In,
                labore reiciendis laboriosam quos at eum, sed sequi tempore
                perspiciatis magnam iste quas sit minima provident!
            </p>
            <h3 class="testimonial-date">March 27, 2021</h3>

            <div class="testimonial-profile" style="justify-content: center;flex-direction: column;row-gap: 1.4rem;">
                <img
                src="{{ asset('frontend/assets/images/testimonial1.jpg') }}"
                alt=""
                class="testimonial-profile-img"/>

                <div class="testimonial-profile-data">
                <span class="testimonial-profile-name">John Doe</span>
                <span class="testimonial-profile-detail">Director of a Company</span>
                </div>
            </div>
            </div>
            <div class="testimonial-card swiper-slide" style="text-align: center;">
            <div class="testimonial-quote">
                <i class="bx bxs-quote-alt-left"></i>
            </div>
            <p class="testimonial-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. In,
                labore reiciendis laboriosam quos at eum, sed sequi tempore
                perspiciatis magnam iste quas sit minima provident!
            </p>
            <h3 class="testimonial-date">March 27, 2021</h3>

            <div class="testimonial-profile" style="justify-content: center;flex-direction: column;row-gap: 1.4rem;">
                <img
                src="{{ asset('frontend/assets/images/testimonial1.jpg') }}"
                alt=""
                class="testimonial-profile-img"/>

                <div class="testimonial-profile-data">
                <span class="testimonial-profile-name">John Doe</span>
                <span class="testimonial-profile-detail"
                    >Director of a Company</span>
                </div>
            </div>
            </div>
            <div class="testimonial-card swiper-slide" style="text-align: center;">
            <div class="testimonial-quote">
                <i class="bx bxs-quote-alt-left"></i>
            </div>
            <p class="testimonial-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. In,
                labore reiciendis laboriosam quos at eum, sed sequi tempore
                perspiciatis magnam iste quas sit minima provident!
            </p>
            <h3 class="testimonial-date">March 27, 2021</h3>

            <div class="testimonial-profile" style="justify-content: center;flex-direction: column;row-gap: 1.4rem;">
                <img
                src="{{ asset('frontend/assets/images/testimonial1.jpg') }}"
                alt=""
                class="testimonial-profile-img"/>

                <div class="testimonial-profile-data">
                <span class="testimonial-profile-name">John Doe</span>
                <span class="testimonial-profile-detail"
                    >Director of a Company</span>
                </div>
            </div>
            </div>
        </div>

        <div class="swiper-button-next" style="right: 30%;left: initial;top:initial;bottom: 3rem;">
            <i class="bx bx-right-arrow-alt"></i>
        </div>
        <div class="swiper-button-prev" style="right: initial;left: 30%;top:initial;bottom: 3rem;">
            <i class="bx bx-left-arrow-alt"></i>
        </div>
        </div>
    </section>
@endsection