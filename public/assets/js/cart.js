const csrfToken = $('meta[name="csrf-token"]').attr('content');

let cartCount = $('header .menu-right #cart-count');

$('.product-box .cart-wrap li .addtocart-btn').on('click', function () {
  const productId = $(this).data('product-id');
  let data = {};
  data._token = csrfToken;
  data.id = productId;
  data.quantity = 1;
  addToCart(data);
});

function addToCart(data) {
  $.ajax({
    url: '/cart',
    method: 'POST',
    data: data,
    success: function (response) {
      notify(response.status, response.message);
      cartCount.text(response.count);
    },
    error: function (xhr) {
      console.log(xhr.responseJSON.message);
      notify(false, xhr.responseJSON.message);
    },
  });
}

$('.qty-box #quantity').on('change', function () {
  const rowId = $(this).data('rowid');
  const qty = $(this).val();

  if (qty > 0) {
    return updateCart(rowId, qty);
  }
});

function updateCart(id, qty) {
  $.ajax({
    url: `/cart/${id}`,
    method: 'PATCH',
    data: {
      _token: csrfToken,
      qty,
    },
    success: function (response) {
      if (response.success) {
        console.log(response.success);
      }
    },
    error: function (xhr) {
      console.error('Error: ' + xhr.responseJSON.message);
    },
  });
}

$('.cart-section tbody tr td .deletecart-btn').on('click', function () {
  deleteCart($(this).data('rowid'));
});

function deleteCart(id) {
  $.ajax({
    url: `/cart/${id}`,
    method: 'DELETE',
    data: { _token: csrfToken },
    success: function (response) {
      if (response.status) {
        notify(response.status, response.message);
        $(`input[data-rowid="${id}"]`).closest('tr').remove();
        checkEmptyCart();
        cartCount.text(response.count);
      }
    },
    error: function (xhr) {
      console.error('Error: ' + xhr.responseJSON.message);
    },
  });
}

function notify(status, message) {
  let icon = status ? 'fa fa-check' : 'fa fa-xmark';
  let title = status ? 'Sukses!' : 'Gagal!';
  let type = status ? 'success' : 'danger';

  $.notify(
    {
      icon: icon,
      title: title,
      message: message,
    },
    {
      element: 'body',
      position: null,
      type: type,
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
}

function checkEmptyCart() {
  if ($('.cart-table tbody tr').length === 1 && $('.cart-table tbody tr').has('td[colspan]').length) {
    // Sudah ada pesan keranjang kosong
    return;
  }

  if ($('.cart-table tbody tr').length === 0) {
    // Tambahkan pesan keranjang kosong jika semua item dihapus
    $('.cart-table tbody').html(`
      <tr>
        <td colspan="6">
          <span class="text-muted fs-5">Keranjang kosong.</span>
        </td>
      </tr>
    `);
  }
}
