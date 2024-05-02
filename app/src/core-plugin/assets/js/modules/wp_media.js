function wpMedia(distImg) {
  var media_frame = wp.media({
    title: 'Select image',
    multiple: false,
    library: {
      type: 'image',
    },
  });

  media_frame.on('select', function () {
    var attachment = media_frame.state().get('selection').first().toJSON();
    var $_imgGroup = jQuery(distImg);
    $_imgGroup.attr('src', attachment.url);
    $_imgGroup.attr('id', attachment.id);
    $_imgGroup.show();
  });

  media_frame.open();
}

export default wpMedia;
