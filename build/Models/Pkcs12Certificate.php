<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Pkcs12Certificate
 */
class Pkcs12Certificate
{
    /**
     * The password for the pfx file. Required. If no password is used, you must still provide a value of ''''.
     */
    private ?string $password;

    /**
     * Represents the pfx content that is sent. The value should be a base-64 encoded version of the actual certificate content. Required.
     */
    private ?string $pkcs12Value;


    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): self
    {
        $this->password = $password;
        return $this;
    }

    public function getPkcs12Value(): ?string
    {
        return $this->pkcs12Value;
    }

    public function setPkcs12Value(?string $pkcs12Value): self
    {
        $this->pkcs12Value = $pkcs12Value;
        return $this;
    }

}
