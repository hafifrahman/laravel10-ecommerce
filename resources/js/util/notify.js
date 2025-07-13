const notify = (status, message) => {
  const validateStatus = ['success', 'error', 'warning'];
  if (!validateStatus.includes(status)) {
    status = 'warning';
    console.warn(`Invalid status "${status}" provided. Defaulting to "warning".`);
  }

  const icons = {
    success: 'fa fa-check',
    error: 'fa fa-times',
    warning: 'fa fa-exclamation-triangle',
  };

  const titles = {
    success: 'Berhasil!',
    error: 'Gagal!',
    warning: 'Peringatan!',
  };

  $.notify(
    {
      icon: icons[status],
      title: titles[status],
      message: message,
    },
    {
      element: 'body',
      position: null,
      type: status,
      allow_dismiss: true,
      newest_on_top: false,
      showProgressbar: true,
      placement: {
        from: 'top',
        align: 'right',
      },
      offset: 20,
      spacing: 10,
      z_index: 1031,
      delay: 5000,
      animate: {
        enter: 'animated fadeInDown',
        exit: 'animated fadeOutUp',
      },
      icon_type: 'class',
      template:
        '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
        '<button type="button" aria-hidden="true" class="btn-close" data-notify="dismiss"></button>' +
        '<span data-notify="icon"></span> ' +
        '<span data-notify="title">{1}</span> ' +
        '<span data-notify="message">{2}</span>' +
        '<div class="progress" data-notify="progressbar">' +
        '<div class="progress-bar progress-bar-info progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
        '</div>' +
        '<a href="{3}" target="{4}" data-notify="url"></a>' +
        '</div>',
    }
  );
};

export default notify;
