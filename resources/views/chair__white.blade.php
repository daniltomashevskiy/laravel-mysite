@include('header')

<section class="section__1">
    <div class="container">
        <div class="section__header">
            <h3>Стілець Білий</h3>
        </div>
        <div class="chair__white">
            <div class="chair__white__images">
                @foreach ($chairImages as $image)
                    <div class="{{ $image }}"></div>
                @endforeach
            </div>

            <div class="chair__white__main"></div>

            <div class="chair__white__text">
                <div class="price">1488₴</div>
                <div class="status">В наявності</div>
                <div class="btn">КУПИТИ</div>
            </div>
        </div>
    </div>
</section>

<div class="characteristics">
    <div class="container">
        <div class="title__char">ХАРАКТЕРИСТИКИ</div>
        <div class="main__char">
            <div class="list__char">
                @foreach ($characteristics as $title => $desc)
                    <div class="list__text">{{ $title }}:</div>
                @endforeach
            </div>
            <div class="desc">
                @foreach ($characteristics as $title => $desc)
                    <div class="text__desc">{{ $desc }}</div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="description">
    <div class="container">
        <div class="desc__title">ОПИС</div>
        <div class="desc__section">Міцна тканинна оббивка білого кольору зі стовідсоткової бавовни. Наповнення сидіння та спинки з піноматеріалу. Ніжки з масиву дуба, скріплені металевими дротинами.</div>
    </div>
</div>

@include('footer')