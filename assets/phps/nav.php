<section class="mainNav">
    <nav>
        <div class="navLogo">
            <a href="index.php">ADSO</a>
        </div>

        <div class="navStart">
            <a href="moduleSelection.php">Start Learning!</a>
        </div>
    </nav>
</section>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap');

    * {
        margin: 0;
        padding: 0;
        font-family: "Open Sans", sans-serif;
    }

    :root {
        --timberwolf: #d1d1d1ff;
        --azul: #1a1b41ff;
        --frost: #FFFFFF
    }

    .mainNav{
        width: 100%;
        display: flex;
        justify-content: center;
    }

    nav a {
        position: relative;
        display: inline-block;
        text-decoration: none;
    }

    nav a::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: -2px;
        /* Ajusta la posición del borde si es necesario */
        width: 0;
        height: 2px;
        /* Grosor de la línea */
        background-color: black;
        transition: width 0.3s ease-in-out;
    }

    nav a:hover::after {
        width: 100%;
    }

    nav {
        width: 100%;
        margin-top: 10px;
        display: flex;
        justify-content: space-between;
    }

    .navLogo {
        width: 150px;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px;
    }


    .navStart {
        padding: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px;
    }

    .navLogo a,
    .navStart a {
        text-decoration: none;
        font-weight: bold;
        font-weight: 900;
        padding: 5px 15px;
        color: var(--azul);
    }

    .navLogo a {
        font-size: 35px;
    }

    .navStart a {
        font-size: 32px;
    }
</style>