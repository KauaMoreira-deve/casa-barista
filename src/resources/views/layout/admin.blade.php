<!doctype html>
<html lang="en">

    @include('partials.partialsAdmin.headAdmin')
    
  <!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">


      <!--begin::Header-->
      @include('partials.partialsAdmin.topoAdmin')
      <!--end::Header-->

      

      <!--begin::Sidebar-->
      @include('partials.partialsAdmin.menuLateral')
      <!--end::Sidebar-->

      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6">
                <h1 class="mb-0 fs-3">Dashboard</h1>
              </div>
              <div class="col-sm-6">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
            @include('admin.dashboard.cards')
            <!--end::Row-->
            <!--DASHBOARD-->
              <main>
                @yield('content')
              </main>
            <!-- FIM DASHBOARD-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->

      <!--begin::Footer-->
      @include('partials.partialsAdmin.rodapeAdmin')
      <!--end::Footer-->

    </div>
    @include('partials.partialsAdmin.script')
  </body>
</html>