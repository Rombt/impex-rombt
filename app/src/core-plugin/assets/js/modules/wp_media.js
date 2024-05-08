async function wpMedia(distImg) {
  const media_frame = wp.media({
    title: 'Выберите изображение', // Переведено на русский
    multiple: false,
    library: {
      type: 'image',
    },
  });

  return new Promise((resolve, reject) => {
    media_frame.on('select', async () => {
      try {
        const attachment = await media_frame.state().get('selection').first().toJSON();
        const $img = jQuery(distImg);

        $img.attr('src', attachment.url);
        $img.attr('id', attachment.id);
        $img.show();

        resolve(attachment.id);
      } catch (error) {
        reject(error);
      }
    });

    media_frame.on('error', error => reject(error));

    media_frame.open();
  });
}

export default wpMedia;
