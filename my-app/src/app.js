$(document).ready(function () {
    console.log('ciao');
    $.ajax({
        url: 'server.php',
        method: 'GET',
        success: function (data) {
            var albums = data;
            var source = $('#album-template').html();              // clono il template messaggio
            var template = Handlebars.compile(source);
            function creaAlbum(image, name, band , year) {
                var datiAlbum = {
                    img: image,
                    nm: name,
                    bnd: band,
                    yr: year
                }
                var templateAlbum = template(datiAlbum);      // Popolo il template di handlebars con il contenuto del messaggio
                $('.container-cards').append(templateAlbum);

            }
            for (var i = 0; i < albums.length; i++) {
                var album = albums[i];
                console.log(album);
                var immagine = album.image;
                console.log(immagine);
                var nome = album.name;
                var gruppo = album.band;
                var anno = album.year;
                creaAlbum(immagine, nome, gruppo, anno)
            }

        },
        error: console.log('err')

    })

})
