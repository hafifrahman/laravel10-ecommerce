<div class="modal fade quick-view-modal" id="quick-view-{{ $product->id }}">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-body">
        <div class="row gy-4">
          <div class="col-lg-6">
            <img src="{{ asset('storage/img/product/' . $product->image) }}" class="img-fluid bg-img blur-up lazyload"
              alt="product" />
          </div>
          <div class="col-lg-6">
            <div class="product-right">
              <h2 class="mb-2">{{ $product->name }}</h2>
              <h6 class="font-light mb-1">{{ $product->category->name }}</h6>
              <ul class="rating">
                <li>
                  <i class="fas fa-star theme-color"></i>
                </li>
                <li>
                  <i class="fas fa-star theme-color"></i>
                </li>
                <li>
                  <i class="fas fa-star theme-color"></i>
                </li>
                <li>
                  <i class="fas fa-star"></i>
                </li>
                <li>
                  <i class="fas fa-star"></i>
                </li>
              </ul>
              <div class="price mt-3">
                <h3>Rp.{{ $product->price }}</h3>
              </div>
              <div class="product-details">
                <h4>product details</h4>
                <ul>
                  <li>
                    <span class="font-light">Display type :</span> Chair
                  </li>
                  <li>
                    <span class="font-light">Mechanism:</span> Tilt Angle
                  </li>
                  <li>
                    <span class="font-light">Warranty:</span> 8 Months
                  </li>
                </ul>
              </div>
              <div class="product-btns">
                <button type="button" data-product-id="{{ $product->id }}"
                  class="btn btn-solid-default btn-sm addtocart-btn">
                  Tambah ke keranjang
                </button>
                <a href="/product/{{ $product->slug }}" class="btn btn-solid-default btn-sm">Lihat detail</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
