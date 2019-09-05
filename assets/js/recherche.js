$(function() {
    $('a[href*=#]').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
    });
});

$('input').focus(function(){
    $(this).removeAttr('placeholder');
});

var swiper = new Swiper(".swiper-container", {
    slidesPerView: 3,
    //slidesPerView: 'auto',
    spaceBetween: 30,
    freeMode: true,
    //grabCursor: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true
    },
    scrollbar: {
        el: ".swiper-scrollbar"
    }
});

$('#more').click(function(){
    $('#descendant').append("<div class=\"row\">\n" +
        "<div class=\"col-md-3 mx-md-5\">\n" +
        "    <div class=\"swiper-slide mb-5\">\n" +
        "        <div class=\"card\">\n" +
        "            <div class=\"placementnom\">\n" +
        "                <img class=\"card-img-top\" src=\"img/bg-f.png\" alt=\"Card image cap\">\n" +
        "                <h4 class=\"mt-5\">Fabio Cirillo</h4>\n" +
        "            </div>\n" +
        "            <small>1943</small>\n" +
        "            <div class=\"card-block px-3\">\n" +
        "                <h5 class=\"card-text\">Naissance</h5>\n" +
        "                <p>Céline</p>\n" +
        "\n" +
        "                <h5 class=\"card-text mt-3\">Décès</h5>\n" +
        "                <p>Céline</p>\n" +
        "\n" +
        "                <h5 class=\"card-text mt-3\">Conjoint</h5>\n" +
        "                <p>Céline</p>\n" +
        "            </div>\n" +
        "            <div class=\"card-footer\">\n" +
        "                <button type=\"button\" class=\"btn btn-danger mt-2\">En savoir plus…</button><br>\n" +
        "            </div>\n" +
        "        </div>\n" +
        "    </div>\n" +
        "</div>\n" +
        "\n" +
        "<div class=\"col-md-3 mx-md-5\">\n" +
        "    <div class=\"swiper-slide mb-5\">\n" +
        "        <div class=\"card\">\n" +
        "            <div class=\"placementnom\">\n" +
        "                <img class=\"card-img-top\" src=\"img/bg-m.png\" alt=\"Card image cap\">\n" +
        "                <h4 class=\"mt-5\">Fabio Cirillo</h4>\n" +
        "            </div>\n" +
        "            <small>1943</small>\n" +
        "            <div class=\"card-block px-3\">\n" +
        "                <h5 class=\"card-text\">Naissance</h5>\n" +
        "                <p>Céline</p>\n" +
        "\n" +
        "                <h5 class=\"card-text mt-3\">Décès</h5>\n" +
        "                <p>Céline</p>\n" +
        "\n" +
        "                <h5 class=\"card-text mt-3\">Conjoint</h5>\n" +
        "                <p>Céline</p>\n" +
        "            </div>\n" +
        "            <div class=\"card-footer\">\n" +
        "                <button type=\"button\" class=\"btn btn-danger mt-2\">En savoir plus…</button><br>\n" +
        "            </div>\n" +
        "        </div>\n" +
        "    </div>\n" +
        "</div>\n" +
        "\n" +
        "<div class=\"col-md-3 mx-md-4\">\n" +
        "    <div class=\"swiper-slide mb-5\">\n" +
        "        <div class=\"card\">\n" +
        "            <div class=\"placementnom\">\n" +
        "                <img class=\"card-img-top\" src=\"img/bg-f.png\" alt=\"Card image cap\">\n" +
        "                <h4 class=\"mt-5\">Fabio Cirillo</h4>\n" +
        "            </div>\n" +
        "            <small>1943</small>\n" +
        "            <div class=\"card-block px-3\">\n" +
        "                <h5 class=\"card-text\">Naissance</h5>\n" +
        "                <p>Céline</p>\n" +
        "\n" +
        "                <h5 class=\"card-text mt-3\">Décès</h5>\n" +
        "                <p>Céline</p>\n" +
        "\n" +
        "                <h5 class=\"card-text mt-3\">Conjoint</h5>\n" +
        "                <p>Céline</p>\n" +
        "            </div>\n" +
        "            <div class=\"card-footer\">\n" +
        "                <button type=\"button\" class=\"btn btn-danger mt-2\">En savoir plus…</button><br>\n" +
        "            </div>\n" +
        "        </div>\n" +
        "    </div>\n" +
        "</div>\n" +
        "</div>");
});
