<footer>
    <div class="footerImg">
        <img src="assets/images/logoSenaMainFooterSvg.svg" alt="">
    </div>

    <div class="footerInformation">
        <h3>Information</h3>
        <ul>
            <li><a href="https://github.com/EsMilios/SemilleroAdsoPage" target="_blank">Github</a></li>
        </ul>
    </div>
</footer>

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

    footer {
        margin-top: 15px;
        width: 100%;
        padding: 15px;
        display: flex;
        justify-content: space-between;
        background-color: var(--azul);
        position: relative;
        /* Cambia de absolute a relative o fixed según tu necesidad */
        left: 0;
        bottom: 0;
        box-sizing: border-box;
        /* Asegura que el padding no afecte el ancho total */
    }

    footer div {
        padding: 10px;
    }

    .footerImg {
        display: flex;
        justify-content: center;
        align-items: center;
        color: wheat;
    }

    .footerImg img {
        width: 75px;
        height: 75px;
    }

    .footerInformation {
        display: flex;
        text-align: end;
        flex-direction: column;
        color: var(--frost);
    }

    .footerInformation ul {
        display: flex;
        list-style: none;
        margin-top: 20px;
        gap: 15px;
        flex-direction: column;
    }

    .footerInformation a {
        position: relative;
        /* Necesario para posicionar la línea */
        text-decoration: none;
        color: var(--frost);
        padding: 10px;
        transition: color 0.3s ease-in-out;
        /* Transición suave solo para el color */
    }

    .footerInformation a::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 0;
        height: 2px;
        /* Grosor de la línea */
        background-color: var(--frost);
        /* Color de la línea */
        transition: width 0.3s ease-in-out;
        /* Transición suave para la línea */
    }

    .footerInformation a:hover::after {
        width: 100%;
        /* La línea se expande completamente al hacer hover */
    }
</style>