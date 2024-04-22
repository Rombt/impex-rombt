// jQuery(document).ready(function($) {
//     $('#choose-image-button').click(function(event) {
//         event.preventDefault();

//         // Открыть медиабиблиотеку WordPress
//         var media_frame = wp.media({
//             title: 'Выберите картинку',
//             multiple: false,
//             library: {
//                 type: 'image'
//             }
//         });

//         media_frame.on('select', function() {
//             var attachment = media_frame.state().get('selection').first().toJSON();
//             var imageUrl = attachment.url;

//             $('#selected-image').attr('src', imageUrl);
//             $('#selected-image').show();
//         });

//         media_frame.open();
//     });
// });




let nl_addMediaButton = document.querySelectorAll('.rmbt-add-media');
nl_addMediaButton.forEach(but => {
    but.addEventListener('click', e => {
        // e.preventDefault();
        e.stopPropagation();


        console.log("e.target", e.target);

        // Открыть медиабиблиотеку WordPress
        var media_frame = wp.media({
            title: 'Выберите картинку',
            multiple: false,
            library: {
                type: 'image'
            }
        });

        media_frame.on('select', function() {
            var attachment = media_frame.state().get('selection').first().toJSON();
            var imageUrl = attachment.url;

            $('#selected-image').attr('src', imageUrl);
            $('#selected-image').show();
        });

        media_frame.open();



    })

})