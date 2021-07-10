<?php
class Criptografar {
    private function gerar_salt() {
        // Uma forma de gerar um salt aleatório baseado no ramdom_bytes
        // e cortando em 22 caracteres
        $salt = base64_encode(random_bytes(22));
        $salt = substr($salt, 0, 22);
        return strtr($salt, '+', '.');
    }

    public function encriptar_senha($password) {
        // Encripta uma senha com base no algoritimo bycripty
        $cost = '09';
        $salt = $this->gerar_salt();
        $hash = crypt($password, '$2a$'.$cost.'$'.$salt.'$');
        return $hash;
    }

    public function verificar_senha($password, $hash) {
        return (crypt($password, $hash) === $hash);
    }
}

$password = 'Minha Senha Ramdomica';
$password_errado = 'Senha Errada';

echo 'Senha 1 => '.$password.'<br>';
echo 'Senha 2 => '.$password.'<br>';
echo 'Senha 3 => '.$password_errado.'<br><br>';

$bcrypt = new Criptografar;
$hash1 = $bcrypt->encriptar_senha($password);
$hash2 = $bcrypt->encriptar_senha($password);
$hash3 = $bcrypt->encriptar_senha($password);


echo 'Hash 1 => '.$hash1.'<br>';
echo 'Hash 2 => '.$hash2.'<br>';
echo 'Hash 3 => '.$hash3.'<br><br>';

if ($bcrypt->verificar_senha($password, $hash1)) {
    echo 'Password 1 Válidado<br>';
}

if ($bcrypt->verificar_senha($password_errado, $hash1)) {
    echo 'Password 1 Válidado incorretamente<br>';
} else {
    echo 'Password 1 INVALIDADO Corretamente<br>';
}