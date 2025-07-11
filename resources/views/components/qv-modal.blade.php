<div class="modal fade quick-view-modal" id="quick-view-{{ $product->id }}">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-body">
        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="quick-view-image">
              <div class="quick-view-slider ratio_medium">
                <div>
                  <img src="{{ asset('storage/images/barang/' . $product->image) }}"
                    class="img-fluid bg-img blur-up lazyload" alt="product" />
                </div>
              </div>
            </div>
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
                <h3>Rp.{{ $product->regular_price }}</h3>
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
                <bbtton onclick="document.getElementById('addtocart').submit()" class="btn btn-solid-default btn-sm">
                  Tambah ke keranjang
                </bbtton>
                <button class="btn btn-solid-default btn-sm">Lihat detail</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
