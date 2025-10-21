<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SoftwareOathAuthenticationMethod
 */
class SoftwareOathAuthenticationMethod
{
    /**
     * The secret key of the method. Always returns null.
     */
    private ?string $secretKey;


    public function getSecretKey(): ?string
    {
        return $this->secretKey;
    }

    public function setSecretKey(?string $secretKey): self
    {
        $this->secretKey = $secretKey;
        return $this;
    }

}
