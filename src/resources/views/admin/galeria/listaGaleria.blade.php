          <div class="card">
              <!--begin::Card Header-->
              <div class="card-header d-flex flex-wrap align-items-center gap-2">
                <div class="card-title">Galeria</div>
                  <div class="card-tools">
                    <div class="btn-group btn-group-sm"role="group"aria-label="Filter by category"id="gallery-filters">
                      <button
                        type="button"
                        class="btn btn-primary btn-color"
                        data-gallery-filter="all"
                        aria-pressed="true"
                      >
                        All</button
                      ><button
                        type="button"
                        class="btn btn-outline-primary btn-color"
                        data-gallery-filter="places"
                        aria-pressed="false"
                      >
                        Places</button
                      ><button
                        type="button"
                        class="btn btn-outline-primary btn-color"
                        data-gallery-filter="products"
                        aria-pressed="false"
                      >
                        Products</button
                      ><button
                        type="button"
                        class="btn btn-outline-primary btn-color"
                        data-gallery-filter="interiors"
                        aria-pressed="false"
                      >
                        Interiors</button
                      ><button
                        type="button"
                        class="btn btn-outline-primary btn-color"
                        data-gallery-filter="people"
                        aria-pressed="false"
                      >
                        People
                      </button>
                    </div>
                  </div>
              </div>
              <!--end::Card Header-->
              <!--begin::Card Body-->
              <div class="card-body color-fundo">
                <!--begin::Gallery Grid-->
                <div
                  class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xxl-4 g-3"
                  id="gallery-grid"
                >

                @foreach ($listarGaleria as $galeria)
                  <div class="col" data-gallery-item="interiors">

                    <figure class="card h-100 mb-0">

                      <div class="ratio ratio-4x3">
                        <img
                          src="{{ asset("barista/assets/$galeria->imagem_galeria") }}"
                          alt="{{ $galeria->nome_galeria }}"
                        />
                      </div> 

                      <figcaption class="card-body d-flex align-items-start gap-2 py-2">
                        <div class="flex-grow-1 overflow-hidden">
                          <p class="fw-semibold mb-0 text-truncatem col color-text">{{ $galeria->nome_galeria }}</p>
                          <p class="fs-7 text-secondary mb-0"></p>
                        </div>
                        <div class="dropdown flex-shrink-0">
                          <button
                            class="btn btn-tool"
                            type="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                            aria-label="Actions for Dining area, wide"
                          >
                            <i class="bi bi-three-dots-vertical" aria-hidden="true"></i>
                          </button>
                          <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                              <a class="dropdown-item" href="#">Download</a>
                            </li>
                            <li>
                              <a class="dropdown-item" href="#">Rename</a>
                            </li>
                            <li><hr class="dropdown-divider" /></li>
                            <li>
                              <a class="dropdown-item text-danger" href="#"> Delete </a>
                            </li>
                          </ul>
                        </div>
                      </figcaption>
                    </figure>
                  </div>
                @endforeach  

                </div>
                  <!--end::Gallery Grid-->
                  <!--begin::Empty State-->
                  <p class="text-secondary text-center my-5" id="gallery-empty" role="status" hidden>
                    Nothing in this category yet.
                  </p>
                  <!--end::Empty State-->
              </div>
              <!--end::Card Body-->
              <!--begin::Card Footer-->
              <div
                  class="card-footer d-flex flex-wrap justify-content-between align-items-center gap-2"
                >
                  <span class="fs-7 text-body-secondary col" id="gallery-count" aria-live="polite">
                    Total de imagens: {{ $listarGaleria->count() }}
                  </span>
                  <button type="button" class="btn btn-sm btn-primary btn-color">
                    <i class="bi bi-upload me-1" aria-hidden="true"></i> Upload
                  </button>
              </div>
              <!--end::Card Footer-->
          </div>