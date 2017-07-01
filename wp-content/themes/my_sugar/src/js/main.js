$(document).ready(function () {
    $('.index-slick-slider').slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        centerMode: true,
        centerPadding: '0px'

        // variableWidth: true
    });

    $('.slick-reviews>ul').slick({
        infinite: true,
        slidesToShow: 4,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3
                }
            },{
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    centerPadding: '40px'
                }
            },{
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    centerPadding: '0px'
                }
            }
        ]
    });


    var $status = $('#sl-paginaion-product');
    var $slickElement = $('.slider-product>ul');

    $slickElement.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
        //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
        var i = (currentSlide ? currentSlide : 0) + 1;
        $status.text(i + '/' + slick.slideCount);
    });
    $slickElement.slick({
        infinite: true,
        slidesToShow: 1
    });


    var $status2 = $('#sl-paginaion-bioenergy');
    var $slickElement2 = $('.slider-bioenergy>ul');

    $slickElement2.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
        //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
        var i = (currentSlide ? currentSlide : 0) + 1;
        $status2.text(i + '/' + slick.slideCount);
    });
    $slickElement2.slick({
        infinite: true,
        slidesToShow: 1
    });


});
