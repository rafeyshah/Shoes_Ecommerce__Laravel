<div class="wrapper">
    <section class="about-us" id="sale">
        <img src="assets/build/img/content-shoe.png" class="about-us__img" alt="Presented Shoe">
        <section class="content">
            <h2 class="content__header">Nike Air Force One MID id</h2>
            <h3 class="content__desc">Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward.</h3>
            <div class="button button_right">
                <span class="button__shadow"></span>
                <a href="#" class="button__text">View Now</a>
            </div>
        </section>
    </section>
    <section class="popular" id="popular">
        <h2 class="popular__header">Popular Arrivals</h2>
        <div class="popular-items">
            @foreach($products as $product)
            <div class="popular-item">
                <div class="popular-item__pic">
                    <a href="{{url('product_page', $product->id)}}" class="popular-item__link"><span class="popular-item__link-shadow">View Details</span></a>
                </div>
                <h3 class="popular-item__title">{{$product->title}}</h3>
                <h3 class="popular-item__desc">{{$product->description}}</h3>
                <span class="popular-item__price">${{$product->price}}</span>
            </div>
            @endforeach
        </div>
    </section>
    @if(method_exists($products,'links'))
    <div class="d-flex justify-content-center">
        {!! $products->links() !!}
    </div>
    @endif
    <section class="pre-collection">
        <div class="content">
            <h2 class="content__header">Pre-Fall Collections</h2>
            <h3 class="content__desc">Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will</h3>
            <div class="button button_left">
                <span class="button__shadow"></span>
                <a href="#" class="button__text">View Details</a>
            </div>
        </div>
        <img src="assets/build/img/pre-collection.png" alt="Pre-Fall Colletion photo" class="pre-collection__img">
    </section>
</div>