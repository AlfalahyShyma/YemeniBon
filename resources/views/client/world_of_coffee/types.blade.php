@include('client/header')


<div class="timeline-container" id="timeline-1">
    <div class="timeline-header">
        <h2 class="timeline-header__title">Types of coffee</h2>
        <h3 class="timeline-header__subtitle">WORLD OF COFFEE</h3>
    </div>
    <div class="timeline">
        <div class="timeline-item" data-text="Arabica">
            <div class="timeline__content"><img class="timeline__img" src="{{asset('asset/img/arab.jpg')}}" />
                <h2 class="timeline__content-title">01</h2>
                <p class="timeline__content-desc">Arabica is the most popular type of coffee, hands down. Depending on who you ask, many coffee enthusiasts prefer using Arabica beans due to its taste. Typically used for black coffee,
                    Arabica beans have a sweeter, more complex flavor that you can drink straight.</p>
            </div>
        </div>
        <div class="timeline-item" data-text="Robusta">
            <div class="timeline__content"><img class="timeline__img" src="{{asset('asset/img/robusta.jpeg')}}" />
                <h2 class="timeline__content-title">02</h2>
                <p class="timeline__content-desc">Robusta is cheaper and stronger. Because of its bitter flavor, you’ll typically see Robusta used for
                    espresso drinks and in instant coffee mixes. If your Monday morning is lagging, reach for a cup of coffee that uses Robusta beans.
                    Their high caffeine content will wake you right up!</p>
            </div>
        </div>
        <div class="timeline-item" data-text="Excelsa Coffee Beans">
            <div class="timeline__content"><img class="timeline__img" src="{{asset('asset/img/excelsa.jpg')}}" />
                <h2 class="timeline__content-title">03</h2>
                <p class="timeline__content-desc">Excelsa coffee beans are considered as unique because they are not used quite widely. In fact, they only contribute 7% to the consumption of coffee worldwide.
                    They are usually grown in Southeast Asia. The flavor that they produce is more fruity and tart. These coffee beans are usually used in blends so as to give the coffee a boost of complexity and flavor.
                    As such, it is best sampled at the back and middle palate.</p>
            </div>
        </div>
        <div class="timeline-item" data-text="Liberica Coffee">
            <div class="timeline__content"><img class="timeline__img" src="http://cdn.yemek.com/uploads/2014/11/ataturk-10-kasim.jpg" />
                <h2 class="timeline__content-title">04</h2>
                <p class="timeline__content-desc">Liberica Coffee is one that is specific to the Philippines. They have a fruity and floral aroma, producing coffee with a smoky, woody flavor with a full body. 
                The reason why Liberica beans were imported from the Philippines to the U.S. was the lack of Arabica beans back in 1890. Eventually, the U.S. stopped the trade until the Philippines claimed their independence. 
                It is quite challenging to secure Liberica coffee these days, but it did play a huge role in the history of the coffee world. In terms of appearance, Liberica coffee beans are bigger than others, usually asymmetrical in shape. </p>
            </div>
        </div>
        <div class="timeline-item" data-text="FATHER OF THE TURKS">
            <div class="timeline__content"><img class="timeline__img" src="http://ataturk.istanbul.gov.tr/GalleryLibrary/12.jpg" />
                <h2 class="timeline__content-title">05</h2>
                <p class="timeline__content-desc">In 1915, when Dardanelles campaign was launched, Colonel Mustafa Kemal became anational hero by winning successive victories and finally repelling the invaders.</p>
            </div>
        </div>      
       
    </div>
</div>

@include('client/footer')