//Carousell scripts


if ($(".carousel-inner")[0]) {
    document.getElementsByClassName('carousel-item')[0].classList.add("active");
    var carouselWidth = $(".carousel-inner")[0].scrollWidth
    let items = document.querySelectorAll('.carousel .carousel-item')
    const minPerSlide = 4
    if(minPerSlide < items){
        minPerSlide = items;
    }
    items.forEach((el) => {
        var width = carouselWidth/minPerSlide
        let next = el.nextElementSibling
        for (var i = 1; i < minPerSlide; i++) {
            if (!next) {
                // wrap carousel by using first child
                next = items[0]
            }
            next.children[0].style.width = width;
            let cloneChild = next.cloneNode(true)
            cloneChild.style.width = width;
            el.appendChild(cloneChild.children[0])
            next = next.nextElementSibling
        }
    })
}
