$('.banners').owlCarousel({
    autoplay:true,
    autoplayTimeout:30000,
    autoplayHoverPause:true,
    loop:true,
    nav:false,
    dots:true,
    items:1
})

$('.vantagens').owlCarousel({
    autoplay:true,
    autoplayTimeout:30000,
    autoplayHoverPause:true,
    loop:true,
    nav:false,
    dots:true,
    margin: 10,
    responsive:{
        1000:{
            items:4
        }
    }
})

$('.destaque-venda').owlCarousel({
    autoplay:true,
    autoplayTimeout:30000,
    autoplayHoverPause:true,
    loop:true,
    nav:false,
    dots:true,
    margin: 20,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:5
        }
    }
})

$('.parceiros').owlCarousel({
    autoplay:true,
    autoplayTimeout:30000,
    autoplayHoverPause:true,
    loop:true,
    nav:false,
    dots:true,
    margin: 10,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:6
        }
    }
})
