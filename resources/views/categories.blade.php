@include('header')

<section class="section__1">
    <div class="container">
        <div class="section__header_1">
            <h3>Категорії товарів</h3>
        </div>

        <div class="category">
            @foreach ($categories as $category)
                <a class="category__item" href="/chairs">
                    <div class="category__title">{{ $category['title'] }}</div>
                    <div class="{{ $category['svg'] }}"></div>
                </a>
            @endforeach
        </div>
    </div>
</section>

@include('footer')