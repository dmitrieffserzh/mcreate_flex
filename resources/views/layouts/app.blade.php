<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/components/slider.js') }}"></script>
</head>
<body>
    <header class="header">
        <div class="container">
            text
        </div>
    </header>

    <main class="main">
        {{--@yield('content')--}}
        <section class="section slider">

            <div class="single-item">
                <div>1</div>
                <div>2</div>
                <div>3</div>
                <div>4</div>
                <div>5</div>
                <div>6</div>
            </div>

        </section>

        <section class="section">
            <div class="container">
                <h2 class="section__title">То, что мы делаем</h2>
                <p class="section__subtitle">Основные услуги нашей компании</p>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <h2 class="section__title">Кто мы и как работаем</h2>
                <p class="section__subtitle">Коротко о нас и этапах сотрудничества</p>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <h2 class="section__title">Почему мы?</h2>
                <p class="section__subtitle">Наши основные преимущества</p>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <h2 class="section__title">Наши работы</h2>
                <p class="section__subtitle">Список некоторых проектов выполненных нашей компанией</p>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <h2 class="section__title">Нас рекомендуют</h2>
                <p class="section__subtitle">Несколько отзывов от наших клиентов</p>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <h2 class="section__title">Наши контакты</h2>
                <p class="section__subtitle">Получите бесплатную консультацию специалиста</p>
            </div>
        </section>

    </main>

    <foofer class="footer">

    </foofer>
    <script>
        $('.single-item').slick({
            fade: true,
            dots: true
        });
    </script>
</body>
</html>
