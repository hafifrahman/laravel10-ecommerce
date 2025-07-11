$('.cart-section tbody tr td .deleteproduct-btn').on('click', function () {
  const productId = $(this).data('product-id');

  $.ajax({
    url: `/admin/product/${productId}`,
    method: 'DELETE',
    data: { _token: csrfToken },
    success: (response) => {
      notify(response.status, response.message);
      $(this).closest('tr').remove();
    },
    error: (xhr) => {
      notify(false, xhr.responseJSON.message);
    },
  });
});
