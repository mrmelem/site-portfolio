$(() => {

    animeScroll()
    $(document).scroll(function () { animeScroll() });
    function animeScroll() {
        let documentWidth = window.innerWidth
        var documentTop = $(document).scrollTop();
        if (documentTop > 200) {
            $('header').addClass('stikly')
        } else {
            $('header').removeClass('stikly')
        }
    }
})

