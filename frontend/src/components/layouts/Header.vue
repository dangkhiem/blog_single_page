<template>
  <div>
    <nav class="navbar navbar-light bg-light d-flex flex-row">
      <img id="vue-logo" alt="Vue logo" src="../../assets/logo.png" />
      <ul class="navbar-nav d-flex flex-row">
        <li class="nav-item active">
          <a class="nav-link" href="#"
            >Home <span class="sr-only">(current)</span></a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            href="#"
            id="navbarDropdown"
            role="button"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
    </nav>
  </div>
</template>

<script>
</script>

<style>
#vue-logo {
  height: 40px;
  width: 40px;
  margin-left: 20px;
}
</style>