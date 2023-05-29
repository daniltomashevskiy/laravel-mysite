@include('header')

<section class="section__1">
    <div class="container">
        <div class="section__header">
            <h3>Стільці</h3>
        </div>
        <div class="chair">
            @foreach ($chairs as $chair)
                <a class="chair__item" href="{{ $chair['url'] }}">
                    <div class="{{ $chair['image'] }}"></div>
                    <div class="chair__title">{{ $chair['title'] }}</div>
                    <div class="chair__price">{{ $chair['price'] }}</div>
                    <div class="chair__status">{{ $chair['status'] }}</div>
                </a>
            @endforeach
        </div>
    </div>
</section>

@include('footer')
