<?php
// PHP Code: Redireciona usuários com base na preferência de idioma e cria um shortcode para o seletor de idioma
function set_default_language_to_english() {
    if ( is_admin() ) return;

    // Verifica se o cookie de idioma está definido
    if ( isset( $_COOKIE['language'] ) && $_COOKIE['language'] == 'pt' ) {
        // O usuário prefere português, garante que a URL não tenha /en/
        if ( strpos( $_SERVER['REQUEST_URI'], '/en/' ) !== false ) {
            // Remove /en/ da URL
            $new_url = str_replace( '/en/', '/', $_SERVER['REQUEST_URI'] );
            wp_redirect( site_url( $new_url ) );
            exit;
        }
    } else {
        // O usuário prefere inglês ou não tem preferência
        // Garante que a URL tenha /en/
        if ( strpos( $_SERVER['REQUEST_URI'], '/en/' ) === false ) {
            // Adiciona /en/ à URL
            $new_url = '/en' . $_SERVER['REQUEST_URI'];
            wp_redirect( site_url( $new_url ) );
            exit;
        }
    }
}
add_action( 'template_redirect', 'set_default_language_to_english' );

function custom_language_switcher_shortcode() {
    ob_start();
    ?>
    <style>
    .custom-language-switcher {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 9999;
    }
    .custom-language-switcher a {
        background-color: #0073aa;
        color: #fff;
        padding: 10px 15px;
        margin: 5px;
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
    }
    .custom-language-switcher a:hover {
        background-color: #005177;
    }
    </style>
    <div class="custom-language-switcher">
        <a href="#" id="switch-to-pt">PT</a>
        <a href="#" id="switch-to-en">EN</a>
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('switch-to-pt').addEventListener('click', function(e) {
            e.preventDefault();
            document.cookie = "language=pt; max-age=31536000; path=/";
            var url = window.location.href.replace('/en/', '/');
            window.location.href = url;
        });
        document.getElementById('switch-to-en').addEventListener('click', function(e) {
            e.preventDefault();
            document.cookie = "language=en; max-age=31536000; path=/";
            if (!window.location.href.includes('/en/')) {
                var url = window.location.origin + '/en' + window.location.pathname + window.location.search;
                window.location.href = url;
            }
        });
    });
    </script>
    <?php
    return ob_get_clean();
}
add_shortcode('custom_language_switcher', 'custom_language_switcher_shortcode');
