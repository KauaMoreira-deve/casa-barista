<main class="app-main">
  <!--begin::App Content Header-->
  <div class="app-content-header">
    <!--begin::Container-->
    <div class="container-fluid">
      <!--begin::Row-->
      <div class="row">
        <div class="col-sm-6">
          <h1 class="mb-0 fs-3">Banners</h1>
        </div>
        <div class="col-sm-6">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb float-sm-end">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Banners</li>
            </ol>
          </nav>
        </div>
      </div>
      <!--end::Row-->
    </div>
    <!--end::Container-->
  </div>
  <!--end::App Content Header-->
  <!--begin::App Content-->
  <div class="app-content">
    <!--begin::Container-->
    <div class="container-fluid">
      <!--begin::Row-->
      <div class="row">
        <div class="col-12">
          <!--begin::Card-->
          <div class="card mb-4">
            <!--begin::Card Header-->
            <div class="card-header">
              <div class="row g-2 align-items-center">
                <div class="col-12 col-md-4">
                  <h3 class="card-title">Banners cadastrados</h3>
                </div>
                <div class="col-12 col-md-8">
                  <div class="d-flex flex-wrap justify-content-md-end gap-2">
                    <div class="input-group input-group-sm w-auto">
                      <span class="input-group-text">
                        <i class="bi bi-search" aria-hidden="true"></i>
                      </span>
                      <input type="search" id="user-search" class="form-control" placeholder="Pesquisar banners"
                        aria-label="Search users" style="width: 180px" />
                    </div>
                    <select id="user-role-filter" class="form-select form-select-sm w-auto" aria-label="Filter by role">
                      <option value="all" selected>Todos</option>
                      <option value="administrator">Administrator</option>
                      <option value="editor">Editor</option>
                      <option value="author">Author</option>
                      <option value="subscriber">Subscriber</option>
                    </select>
                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                      data-bs-target="#modal-add-user">
                      <i class="bi bi-person-plus-fill me-1" aria-hidden="true"> </i>
                      Novo banner
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <!--end::Card Header-->
            <!--begin::Card Body-->
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table table-hover align-middle m-0">
                  <thead>
                    <tr>
                      <th class="col">Codigo</th>
                      <th class="col">Imagem</th>
                      <th class="col">Titulo</th>
                      <th class="col">Status</th>

                    </tr>
                  </thead>
                  <tbody class="list">
                    @foreach ($listarBanner as $banner)


                      <tr class="cont-linha">
                        <td>
                          <div class="d-flex align-items-center">


                            <span class="fw-medium">{{ $banner->id_banner }}</span>
                          </div>
                        </td>

                        <!--TITULO BANNER -->
                        <td class="col"> <img src="{{ asset("barista/assets/$banner->imagem_banner") }}"
                            alt="{{ $banner->titulo_banner}}" class="img-fluid"
                            style="max-width: 50px; max-height: 100px;"></td>
                        <td>
                          <span class="badge text-bg-danger">{{ $banner->titulo_banner }}</span>
                        </td>
                        <td>


                          @if ($banner->status_banner === 'ATIVO')
                            <span class="badge text-bg-success">ATIVO</span>
                          @else
                            <span class="badge text-bg-danger inativo">INATIVO</span>
                          @endif



                        </td>

                        <td class="text-end">
                          <div class="btn-group btn-group-sm">


                            <button type="button" class="btn btn-outline-secondary" aria-label="Edit Alexander Pierce">
                              <i class="bi bi-pencil" aria-hidden="true"> </i>
                            </button>

                            <form action="{{ route('admin.banner.status', $banner->id_banner) }}" method="post"
                              class="d-inline">
                              @csrf
                              @method('patch')

                              @if ($banner->status_banner === 'ATIVO')

                                <button type="submit" class="btn btn-outline-danger" data-bs-toggle="modal"
                                  data-bs-target="#modal-status-banner" title="desativar banner"
                                  data-url="{{ route('admin.banner.status', $banner->id_banner) }}"
                                  data-titulo="{{ $banner->titulo_banner }}" data-status="ATIVO"
                                  aria-label="Delete Alexander Pierce">

                                  <i class="bi bi-eye-fill" aria-hidden="true"> </i>
                                </button>

                              @else

                                <button type="submit" class="btn btn-outline-success" data-bs-toggle="modal"
                                  data-bs-target="#modal-status-banner" title="desativar banner"
                                  data-url="{{ route('admin.banner.status', $banner->id_banner) }}"
                                  data-titulo="{{ $banner->titulo_banner }}" data-status="INATIVO"
                                  aria-label="Delete Alexander Pierce">

                                  <i class="bi bi-eye-slash" aria-hidden="true"> </i>
                                </button>




                              @endif




                            </form>

                            <!-- INICIO EDITAR -->

                            <!-- FIM EDITAR -->


                          </div>
                        </td>
                      </tr>

                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!--end::Card Body-->
            <!--begin::Card Footer-->
            <div class="card-footer clearfix">
              <div class="float-start pt-1 fs-7 text-body-secondary col">
                Total de banners: {{ $listarBanner->count() }}
              </div>
              <ul class="pagination pagination-sm m-0 float-end">
                <li class="page-item disabled">
                  <a class="page-link" href="#" aria-label="Previous"> &laquo; </a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">4</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">5</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next"> &raquo; </a>
                </li>
              </ul>
            </div>
            <!--end::Card Footer-->
          </div>
          <!--end::Card-->
        </div>
        <!-- /.col -->
      </div>
      <!--end::Row-->

      <!--begin::Add User Modal-->
      <div class="modal fade" id="modal-add-user" tabindex="-1" aria-labelledby="modal-add-user-label"
        aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content ">
            <form action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data" @csrf>

              <div class="modal-header">
                <h5 class="modal-title" id="modal-add-user-label">Adicionar novo banner</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <div class="modal-body">
                <div class="mb-3">
                  <label for="new-user-name" class="form-label"> Nome do banner </label>
                  <input type="text" class="form-control" name="titulo_banner" id="new-user-name"
                    placeholder="Ex: Banner dia dos pais" required />
                </div>


                <div class="mb-3">
                  <label for="new-user-role" class="form-label"> Status </label>
                  <select id="new-user-role" class="form-select" name="status_banner"
                    aria-placeholder="Status do banner">
                    <option value="ATIVO">ATIVO</option>
                    <option value="INATIVO">INATIVO</option>
                  </select>
                </div>

                <label for="foto" class="arquivo">
                  Escolher foto

                  <input type="file" id="foto" name="imagem_banner" accept="image/*" hidden>

                  <div id="img-banner" class="banner-upload">
                    <img id="ver-banner" alt="Prévia da imagem">
                  </div>
                </label>

                <script>
                  const inputFoto = document.getElementById("foto");
                  const imagem = document.getElementById("ver-banner");

                  inputFoto.addEventListener("change", function () {

                    const arquivo = inputFoto.files[0];

                    console.log("Arquivo:", arquivo);

                    if (arquivo) {
                      const url = URL.createObjectURL(arquivo);

                      console.log("URL:", url);

                      imagem.src = url;
                    }
                  });
                </script>

              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                  Cancelar
                </button>
                <button type="submit" class="btn btn-primary">Criar banner</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!--end::Add User Modal-->

      <!--begin::Delete User Modal-->
      <div class="modal fade" id="modal-status-banner" tabindex="-1" aria-labelledby="modal-delete-user-label"
        aria-hidden="true">
        <div class="modal-dialog">


          <div class="modal-content">

            <form id="form-status-banner" method="post"></form>
            @csrf
            @method('patch')

              <div class="modal-header">

                <h5 class="modal-title" id="modal-status-banner-titulo">Alterar status do banner</h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

              </div>

              <div class="modal-body">
                <p class="mb-0" id="modal-status-banner-txt">
                  
                </p>
              </div>


              <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                  Cancelar
                </button>

                <button type="button" id="btn-status-banner" class="btn btn-danger" data-bs-dismiss="modal">
                  Confirmar
                </button>

              </div>

            </form>
          </div>
        </div>

      </div>

      <!--end::Delete User Modal-->
    </div>

    <!--end::Container-->
  </div>

  <!--end::App Content-->
</main>

<!-- ATIVAR E desativar banner -->

<script>
  const modalStatusBanner = document.getElementById('modal-status-banner');
  const formStatusBanner = document.getElementById('form-status-banner');
  const tituloStatusBanner = document.getElementById('modal-status-banner-titulo');
  const txtStatusbanner = document.getElementById('modal-status-banner-txt');
  const btnStatusBanner = document.getElementById('btn-status-banner');

  modalStatusBanner.addEventListener('show.bs.modal', (event) => {

    const botao = event.relatedTarget;

    const url = botao.getAttribute('data-url')
    const titulo = botao.getAttribute('data-titulo')
    const status = botao.getAttribute('data-status')

    formStatusBanner.action = url

    if(status === 'ATIVO'){
      
      tituloStatusBanner.textContent = 'Desativar dados banner';
      txtStatusbanner.textContent = 'Tem certeza de que deseja alterar o status do banner?'
      btnStatusBanner.textContent = 'Desativar'

      btnStatusBanner.className = 'btn btn-danger'

    }else{
      
      tituloStatusBanner.textContent = 'Ativar dados banner';
      txtStatusbanner.textContent = 'Tem certeza de que deseja ativar o status do banner?'
      btnStatusBanner.textContent = 'Ativar'

      btnStatusBanner.className = 'btn btn-success'
    }

  });
</script>

<script>

  setTimeout(() => {

    const alert = document.querySelectorAll('.alert')

    alert.array.forEach((alerta) => {

        const instancia = bootstrap.Alert.getOrCreateInstance(alerta)
        
        instancia.close();
    });

  }, 5000);

</script>