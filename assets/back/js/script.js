"use strict";

const checkFullPageBackgroundImage = () => {
    const page = $('.full-page');
    const image_src = page.data("image");

    if (image_src !== undefined) {
      const image_container = '<div class="full-page-background" style="background-image: url(' + image_src + ') "/>';
      page.append(image_container);
    }
};

const showNotification = (msg, type) => {
    $.notify(
        {
            icon: "nc-icon nc-bell-55",
            message: msg,
        },
        {
            type: type,
            timer: 1500,
            placement: {
                from: 'top',
                align: 'center',
            },
        }
    );
  }

$(document).ready(function () {
    if($('.full-page').length > 0) checkFullPageBackgroundImage();
    if($('input[name=error_msg]').val() !== '') showNotification($('input[name=error_msg]').val(), 'danger');
    if($('input[name=success_msg]').val() !== '') showNotification($('input[name=success_msg]').val(), 'success');
});