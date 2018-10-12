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

        @if(url('/'))
            <div class="header__logo" onclick="location.reload();">
                @include('layouts.logo')
            </div>
        @else
            <a href="{{ url('/') }}" class="header__logo">
                @include('layouts.logo')
            </a>
        @endif

        <button type="button" id="button-menu" class="button-menu">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>


        <nav>
            <ul>
                <li><a href="#">Услуги</a></li>
                <li><a href="#">Портфолио</a></li>
                <li><a href="#">Блог</a></li>
                <li><a href="#">О компании</a></li>
                <li><a href="#">Контакты</a></li>
            </ul>
        </nav>
    </div>
</header>

<main class="main">
    {{--@yield('content')--}}
    <section class="section section-main ">
        <div class="section-main__wrapper">
            <div class="single-item  slider">
                <div>
                <div class="container">
                    <h1 class="section-main__title">
                        РАЗРАБОТАЕМ САЙТ И НАСТРОИМ РЕКЛАМУ В ЯНДЕКС И GOOGLE
                    </h1>
                    <p class="section-main__subtitle">
                        МЫ НЕ ОГРАНИЧИВАЕМСЯ РАЗРАБОТКОЙ САЙТА, А СОЗДАЕМ КОМПЛЕКСНУЮ ПЛАТФОРМУ ДЛЯ СТАРТА И
                        РАЗВИТИЯ ВАШЕГО БИЗНЕСА В ИНТЕРНЕТЕ.
                    </p>
                </div>
                </div>
                <div>
                <div class="container">
                    <h1 class="section-main__title">
                        НАСТРОИМ РЕКЛАМУ В ЯНДЕКС И GOOGLE
                    </h1>
                    <p class="section-main__subtitle">
                        МЫ НЕ ОГРАНИЧИВАЕМСЯ РАЗРАБОТКОЙ САЙТА ВАШЕГО БИЗНЕСА В ИНТЕРНЕТЕ.
                    </p>
                </div>
            </div>
                <div>
                <div class="container">
                    <h1 class="section-main__title">
                        РАЗРАБОТАЕМ ЯНДЕКС И GOOGLE
                    </h1>
                    <p class="section-main__subtitle">
                        МЫ НЕ ОГРАНИЧИВАЕМСЯ РАЗРАБОТКОЙ САЙТА, А СОЗДАЕМ.
                    </p>
                </div>
        </div>
            </div>
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

            <br>
            <br>
            <br>
            <br>
            <p>
                С другой стороны, постоянный количественный рост и сфера нашей активности говорит о возможностях
                кластеризации усилий. Также как сплоченность команды профессионалов требует определения и уточнения
                своевременного выполнения сверхзадачи. Базовый вектор развития влечет за собой процесс внедрения и
                модернизации направлений прогрессивного развития. В частности, сплоченность команды профессионалов
                требует определения и уточнения модели развития. Есть над чем задуматься: независимые государства
                призваны к ответу.
            </p>
            <p>
                Как уже неоднократно упомянуто, ключевые особенности структуры проекта заблокированы в рамках своих
                собственных рациональных ограничений. Господа, сплоченность команды профессионалов создает необходимость
                включения в производственный план целого ряда внеочередных мероприятий с учетом комплекса позиций,
                занимаемых участниками в отношении поставленных задач. Кстати, тщательные исследования конкурентов
                своевременно верифицированы. Повышение уровня гражданского сознания предоставляет широкие возможности
                для направлений прогрессивного развития.
            </p>
            <p> В своем стремлении улучшить пользовательский опыт мы упускаем, что реплицированные с зарубежных
                источников, современные исследования, инициированные исключительно синтетически, ограничены
                исключительно образом мышления. В частности, начало повседневной работы по формированию позиции
                предполагает независимые способы реализации дальнейших направлений развития. Но сделанные на базе
                интернет-аналитики выводы являются только методом политического участия и обнародованы. Внезапно,
                непосредственные участники технического прогресса могут быть смешаны с неуникальными данными до степени
                совершенной неузнаваемости, из-за чего возрастает их статус бесполезности. Также как граница обучения
                кадров предполагает независимые способы реализации инновационных методов управления процессами.
            </p></div>
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
