@extends('layouts.app')

@section('content')
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <section class="contact-section" style="padding-top: 150px; padding-bottom: 150px;">
        <div class="container">
            <div class="row">
                <!-- Contact Details -->
                <div class="col-md-6">
                    <div class="contact-info">
                        <h2>Наши контакты</h2>
                        <p><strong>Телефонный номер:</strong> +996 707 49 00 11</p>
                        <p><strong>Адрес:</strong> Кыргызстан, Бишкек, Первомайский район</p>
                        <p><strong>Электронная почта:</strong> info@example.com</p>
                        <p><strong>Часы работы:</strong></p>
                        <p>Понедельник - Пятница: 9:00 - 18:00</p>
                        <p>Суббота: 10:00 - 16:00</p>
                        <p>Воскресенье: Закрыто</p>
                    </div>
                </div>
                <!-- Google Maps Embed -->
                <div class="col-md-6">
                    <div class="map-container">
                        <h2>Наша локация</h2>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11695.226370108623!2d74.5661300871582!3d42.87692620000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x389ec8189cf106ef%3A0xb7182e2c212e1bbd!2z0J_QvtC70LjRgtC10YXQvdC40YfQtdGB0LrQuNC5INC60L7Qu9C70LXQtNC2INCc0KPQmtCg!5e0!3m2!1sru!2skg!4v1717752586025!5m2!1sru!2skg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<style>
    .contact-section {
        background: #f8f9fa;
    }
    .contact-info {
        background: #fff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        margin-bottom: 20px;
    }
    .map-container {
        background: #fff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .contact-info h2, .map-container h2 {
        margin-bottom: 20px;
        font-size: 24px;
        color: #333;
    }
    .contact-info p {
        font-size: 18px;
        color: #555;
    }
</style>
