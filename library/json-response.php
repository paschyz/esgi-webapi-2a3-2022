<?php

function jsonResponse($statusCode, $headers, $body) {
    /**
     * Modifie le code de status HTTP d'une réponse
     * @see https://www.php.net/manual/en/function.http-response-code.php
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status
     */
    http_response_code($statusCode);

    /**
     * Ajoute ou modifie un en-tête à la réponse HTTP
     * @see https://developer.mozilla.org/fr/docs/Web/HTTP/Headers
     * @see https://www.php.net/manual/en/function.header.php
     */
    header("Content-Type: application/json");

    foreach ($headers as $key => $value) {
        header("$key: $value");
    }

    /**
     * Sérialise une structure de données PHP en chaîne de caractères au format JSON
     * et l'ajoute au body (sortie standard)
     * @see https://www.php.net/manual/en/function.json-encode.php
     * @see https://www.php.net/manual/en/function.echo.php
     */
    echo json_encode($body);
}

