<nav class="navbar">
    <div class="navbar-brand">
        <a class="navbar-item" href="<?PHP echo APP_URL; ?>dashboard/">
            <img src="<?PHP echo APP_URL; ?>app/views/img/logo.png" alt="RIXLER BEBIDAS" width="200" height="50">
        </a>
        <div class="navbar-burger" data-target="navbarExampleTransparentExample">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <div id="navbarExampleTransparentExample" class="navbar-menu">

        <div class="navbar-start">
            <a class="navbar-item" href="<?PHP echo APP_URL; ?>dashboard/">
                Dashboard
            </a>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link" href="#">
                    Usuarios
                </a>
                <div class="navbar-dropdown is-boxed">

                    <a class="navbar-item" href="<?PHP echo APP_URL; ?>userNew/">
                        Nuevo
                    </a>
                    <a class="navbar-item" href="<?PHP echo APP_URL; ?>userList/">
                        Lista
                    </a>
                    <a class="navbar-item" href="<?PHP echo APP_URL; ?>userSearch/">
                        Buscar
                    </a>

                </div>
            </div>
        </div>

        <div class="navbar-end">
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    ** User Name **
                </a>
                <div class="navbar-dropdown is-boxed">

                    <a class="navbar-item" href="<?PHP echo APP_URL; ?>userUpdate/">
                        Mi cuenta
                    </a>
                    <a class="navbar-item" href="<?PHP echo APP_URL; ?>userPhoto/">
                        Mi foto
                    </a>
                    <hr class="navbar-divider">
                    <a class="navbar-item" href="<?PHP echo APP_URL; ?>logoOut/" id="btn_exit">
                        Salir
                    </a>

                </div>
            </div>
        </div>

    </div>
</nav>