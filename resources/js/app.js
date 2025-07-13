import './bootstrap';

import 'bootstrap';
import 'datatables.net';
import 'datatables.net-responsive';
import 'datatables.net-responsive-bs5';
import 'lazysizes';
import 'slick-carousel';
import 'slick-animation';
import 'ion-rangeslider';
import 'bootstrap-notify';
import './slick';
import './script';

// newsletter
let firstTime = localStorage.getItem('first_time');

if (!firstTime) {
  $(window).on('load', function () {
    setTimeout(function () {
      $('#newsletter').modal('show');
    }, 500);
  });
  localStorage.setItem('first_time', '1');
}

// cart modal resize
$('#addtocart').on('shown.bs.modal', function () {
  $(window).trigger('resize');
});
