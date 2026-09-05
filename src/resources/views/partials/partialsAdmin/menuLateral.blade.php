<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="./index.html" class="brand-link">
            <!--begin::Brand Image-->
            <img
              src="{{ asset('barista/assets/logo-casa-do-barista.svg') }}"
              alt="Casa do barista logo"
              class="brand-image "
            />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
           
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Search-->
        <div class="sidebar-search" role="search">
          <label for="sidebar-search-input" class="visually-hidden">Filter menu</label>
          <input
            type="search"
            id="sidebar-search-input"
            class="form-control form-control-sm"
            placeholder="Filter menu…"
            autocomplete="off"
            data-lte-toggle="sidebar-search"
            data-lte-target="#navigation"
          />
          <p class="fs-7 text-secondary mt-2 mb-0" data-lte-search-empty role="status" hidden>
            No matching pages.
          </p>
        </div>
        <!--end::Sidebar Search-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2" aria-label="Main navigation">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              data-accordion="false"
              id="navigation"
            >
              <li class="nav-item menu-open">
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('admin') }}" class="nav-link active">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Dashboard</p>
                    </a>
                  </li>
                </ul>
              </li>


              
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-box-seam-fill"></i>
                  <p>
                    Produtos
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('admin.produtos.index') }}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Produtos</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('admin.categoria.index') }}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Categorias</p>
                    </a>
                  </li>
               
                </ul>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-tree-fill"></i>
                  <p>
                    Vendas
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="./UI/general.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Vendas</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('admin.cliente.index') }}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Clientes</p>
                    </a>
                  </li>

                   <li class="nav-item">
                    <a href="{{ route('admin.usuarios.index') }}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Usuários</p>
                    </a>
                  </li>

                </ul>
              </li>
              

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-pencil-square"></i>
                  <p>
                    Site
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('admin.banner.index') }}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Banner</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('admin.galeria.index') }}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Galeria</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('admin.depoimentos.index') }}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Depoimentos</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('admin.linhaTempo.index') }}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Linha do tempo</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('admin.news.index') }}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Newslatter</p>
                    </a>
                  </li>
                 
                  <li class="nav-item">
                    <a href="{{ route('admin.horarios.index') }}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Horários</p>
                    </a>
                  </li>

                </ul>
              </li>
              
            <!--end::Sidebar Menu-->

            <!-- Docs CTA (bottom of sidebar) -->
            <div class="p-3 mt-3 border-top border-secondary border-opacity-25">
              <a
                href="./docs/introduction.html"
                class="btn btn-sm btn-outline-light w-100 d-flex align-items-center justify-content-center gap-2"
              >
                <i class="bi bi-book" aria-hidden="true"></i>
                View documentation
              </a>
            </div>
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
</aside>