<?php //snippet('navigation_mobile') ?>

<?php //snippet('banner') ?>

<footer class="footer" id="footer">

    <div class="content row">

        <?php $array = array($site->index(), $site->social()->toStructure()) ?>

        <?php foreach($array as $section): ?>
    
        <ul class="container">

            <h4>headline</h4>

            <?php foreach($section as $item): ?>

            <li>
                <a href="<?= $item->url() ?>">
                    <?= $item->title() ?>
                </a>
            </li>
            <?php endforeach ?>
        </ul>

        <?php endforeach ?>

        <ul class="container">

            <h4>firma</h4>

            <?php foreach($site->index()->filterBy('template', 'in', ['legal', 'project', 'contact'])
                ->sortBy('template','asc') as $item): ?>

            <li>
                <a href="<?= $item->url() ?>">
                    <?= $item->title() ?>
                </a>
            </li>

            <?php endforeach ?>
            
            <li>
                <?php if(page()->parents()->count() > 0 ): ?>

                <?php $panel = site()->url() . '/panel/pages/' . page()->parent() . '+' . page()->slug() ?>

                <?php elseif(page() == 'home'): ?>

                <?php $panel = site()->url() . '/panel/site' ?>

                <?php else: ?>

                <?php $panel = site()->url() . '/panel/pages/' . page()->slug() ?>

                <?php endif ?>

                <a href="<?= $panel ?>">
                    login
                </a>

            </li>
        </ul>

    </div>

</footer>


</body>

</html>

<script>
// GUIDES
// $('div.content').addClass('guides');

// $(document).ready(function() {
//         $("div.content").children().each(function(i) {
//         $(this).addClass("wow fadeIn");
//         });
//       });

// ANIM
// $("section div.container").each(function(curListIdx, curListEntity) {
//     $(curListEntity).children().each(function(curLiIdx, curLiEntity) {
//         var idxPlus1 = curLiIdx+1;
//         $(curLiEntity).addClass("wow fadeIn faster");
//         $(curLiEntity).attr("data-wow-delay", idxPlus1 + "00ms");
//     });
// });

// $("section div.content").each(function(curListIdx, curListEntity) {
//     $(curListEntity).children().each(function(curLiIdx, curLiEntity) {
//         var idxPlus1 = curLiIdx+1;
//         $(curLiEntity).addClass("wow fadeIn faster");
//         $(curLiEntity).attr	("data-wow-delay", idxPlus1 + "00ms");
//     });
// });

// $("div.service div.container").each(function(curListIdx, curListEntity) {
//     $(curListEntity).children().each(function(curLiIdx, curLiEntity) {
//         var idxPlus1 = curLiIdx+1;
//         $(curLiEntity).addClass("wow fadeInUp faster");
//         $(curLiEntity).attr("data-wow-delay", idxPlus1 + "00ms");
//     });
// });


$("div.slider-container").each(function(curListIdx, curListEntity) {
    $(curListEntity).children().each(function(curLiIdx, curLiEntity) {
        var idxPlus1 = curLiIdx+1;
        $(curLiEntity).addClass("wow fadeIn faster");
        $(curLiEntity).attr("data-wow-delay", idxPlus1 + "00ms");
    });
});

$("ul").each(function(curListIdx, curListEntity) {
    $(curListEntity).children().each(function(curLiIdx, curLiEntity) {
        var idxPlus1 = curLiIdx+1;
        $(curLiEntity).addClass("wow fadeIn faster");
        $(curLiEntity).attr("data-wow-delay", idxPlus1 + "00ms");
    });
});


// SCROLL-TO
$(document).ready(function() {
    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        var target = this.hash,
            $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 400, 'swing', function() {
            window.location.hash = target;
        });
    });
});


// SWIPER
$(document).ready(function() {
//initialize swiper when document ready
var mySwiper = new Swiper('.swiper-container', {
    loop: false,
    autoplay: {delay: 1500,},
    lazy: {loadPrevNext: true,},
    keyboard: {
        enabled: true,
        onlyInViewport: false,
    },
    clickable: true,
    slidesPerView: 1,
    paginationType: 'fraction',
    hashnavWatchState: true,
    paginationClickable: true,
    speed: 800,
    spaceBetween: 0,
    effect: 'fade',
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        type: 'fraction',
    },            

});
});
</script>