<section id="prices" class="py-5">
    <div class="container-flex">
        <h3>Стоимость обтяжки руля</h3>
        <div class="prices-container">
            @foreach($steeringWheelPrices as $priceItem)
                <div class="price-item">
                    <div class="price-item-title">
                        {{ $priceItem->title }}
                        <span class="price-item-price">
                            @if($priceItem->price == 0)
                                Бесплатно
                            @else
                                от {{ number_format($priceItem->price, 0, '', '') }} руб
                            @endif
                        </span>
                    </div>
                    <div class="price-item-description">{{ $priceItem->description }}</div>
                </div>
            @endforeach
        </div>

        <h3 class="mt-5">Дополнительные услуги</h3>
        <div class="prices-container">
            @foreach($additionalServicesPrices as $priceItem)
                <div class="price-item">
                    <div class="price-item-title">
                        {{ $priceItem->title }}
                        <span class="price-item-price">
                            @if($priceItem->price == 0)
                                Бесплатно
                            @else
                                от {{ number_format($priceItem->price, 0, '', '') }} руб
                            @endif
                        </span>
                    </div>
                    <div class="price-item-description">{{ $priceItem->description }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>
