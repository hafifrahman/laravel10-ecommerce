<script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/datatables/dataTables.js') }}"></script>
<script src="{{ asset('assets/js/datatables/dataTables.bootstrap5.js') }}"></script>
<script src="{{ asset('assets/js/feather/feather.min.js') }}"></script>
<script src="{{ asset('assets/js/lazysizes.min.js') }}"></script>
<script src="{{ asset('assets/js/slick/slick.js') }}"></script>
<script src="{{ asset('assets/js/slick/slick-animation.min.js') }}"></script>
<script src="{{ asset('assets/js/slick/custom_slick.js') }}"></script>
<script src="{{ asset('assets/js/price-filter.js') }}"></script>
<script src="{{ asset('assets/js/ion.rangeSlider.min.js') }}"></script>
<script src="{{ asset('assets/js/filter.js') }}"></script>
<script src="{{ asset('assets/js/newsletter.js') }}"></script>
<script src="{{ asset('assets/js/cart_modal_resize.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap/bootstrap-notify.min.js') }}"></script>
<script src="{{ asset('assets/js/theme-setting.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
<script src="{{ asset('assets/js/product.js') }}"></script>
<script src="{{ asset('assets/js/cart.js') }}"></script>
<script>
  $(function() {
    $('[data-bs-toggle="tooltip"]').tooltip()
  });
</script>

@stack('scripts')
