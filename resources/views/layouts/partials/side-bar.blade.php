<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
      <a href="https://www.creative-tim.com" class="simple-text logo-mini">
        <div class="logo-image-small">
          <img src="../assets/img/logo-small.png">
        </div>
        <!-- <p>CT</p> -->
      </a>
      <a href="https://www.creative-tim.com" class="simple-text logo-normal">
        {{ config('app.name') }}
        <!-- <div class="logo-image-big">
          <img src="../assets/img/logo-big.png">
        </div> -->
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="active ">
          <a href="{{ route('home.index') }}">
            <i class="nc-icon nc-bank"></i>
            <p>Incio</p>
          </a>
        </li>
        <li>
          <a href="{{ route('productos.index') }}">
            <i class="nc-icon nc-diamond"></i>
            <p>Productos</p>
          </a>
        </li>
        <li>
          <a href="{{ route('clientes.index') }}">
            <i class="nc-icon nc-pin-3"></i>
            <p>Clientes</p>
          </a>
        </li>
        <li>
          <a href="{{ route('ventas.index') }}">
            <i class="nc-icon nc-bell-55"></i>
            <p>Ventas</p>
          </a>
        </li>
      </ul>
    </div>
  </div>