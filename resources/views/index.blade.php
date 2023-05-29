@include('header')

<div class="intro" img src="{{ asset('images/intro.jpg') }}">
    <div class="container">
        <div class="intro__inner">
            <h1 class="intro__suptitle">Serenity — вітчизняний виробник меблів.</h1>
            <div class="intro__title">Ми представляємо широкий асортимент меблів різних категорій, серед яких ви неодмінно підберете потрібні Вам вироби.</div>
            <a class="btn" href="/categories">Переглянути товари</a>
        </div>
    </div>
</div>

<div class="about">
    <div class="about__image"></div>
    <div class="about__text">
        <h1 class="about__suptitle">Про нас</h1>
        <div class="about__title">Раді запропонувати Вам меблі від найкращих виробників.</div>
        <div class="about__title">В 2003 році ми вперше виготовили шафу-купе. С тих пір пройшло 20 років, за цей час більше 200 000 одиниць затишної мебелі стоїть в українських оселях.</div>
        <div class="about__title">Більше третини наших співробітників — це майстри з 20-річним досвідом роботи, тому ми повністю довіряємо їм, а вони — нам. </div>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="section__header">
            <h3>Чому варто обирати нас?</h3>
        </div>

        <div class="why">
            @foreach ($items as $item)
                <div class="why__item">
                    <div class="{{ $item['svg'] }}"></div>
                    <div class="why__title">{{ $item['title'] }}</div>
                    <div class="why__text">{{ $item['text'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<div class="ending"> 
    <div class="container__2">
        <div class="ending__inner">
            <div class="ending__title">Звертайтеся до нас прямо зараз.
                Ми завжди раді Вам!</div>
            <a class="btn" href="/categories">Обрати товари</a>
        </div>
    </div>
</div>

@include('footer')

