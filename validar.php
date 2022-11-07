<?php
    /**
     * Metodo que valida si un texto no esta vacio
     * @param {string} - Texto a validar
     * @return {bool}
     */
    function validar_requerido(string $texto): bool{
        return (trim($texto) == '');
    }
    /**
     * Metodo de valida si el texto tiene formato de email.
     * @param {string} - Email
     * @return {bool}
     */
    function validar_mail(string $email): bool{
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    /**
     * Metodo que valida la contraseña y confirma que sean iguales
     * @param {string} - Contraseña a conparar
     * @param {string} - Confirmacion de la contraseña
     * @return {bool}
     */
    function validar_contrasena(string $contrasena, string $confirmar_contrasena): bool{
        return $contrasena == $confirmar_contrasena;
    }
?>