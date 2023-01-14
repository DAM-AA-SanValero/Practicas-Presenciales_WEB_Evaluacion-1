<div id="container">
    <?php
    include "view/header.php";

    $correctUser = "PracticasSIO";
    $correctPassword = "12345";
    ?>
    <section>
        <div id="tabla">
            <div class="titulo">
                <h2>Inicia sesión para acceder a tu perfil</h2>
            </div>
            <div id="formulario">
                <form method="post" action="../controller/login.php">
                    <label for="user">Nombre de usuario:</label><br>
                    <input type="text" name="user" id="name"><br>
                    <label for="password">Contraseña</label><br>
                    <input type="password" name="password" id="password"><br>
                    <input type="submit" id="btn-enviar" value="Iniciar sesión">
                </form>
            </div>
        </div>
    </section>

    <?php
    include "view/footer.php";
    ?>
</div>
