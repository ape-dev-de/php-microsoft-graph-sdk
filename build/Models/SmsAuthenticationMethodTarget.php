<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SmsAuthenticationMethodTarget
 */
class SmsAuthenticationMethodTarget
{
    /**
     * Determines if users can use this authentication method to sign in to Microsoft Entra ID. true if users can use this method for primary authentication, otherwise false.
     */
    private ?string $isUsableForSignIn;


    public function getIsUsableForSignIn(): ?string
    {
        return $this->isUsableForSignIn;
    }

    public function setIsUsableForSignIn(?string $isUsableForSignIn): self
    {
        $this->isUsableForSignIn = $isUsableForSignIn;
        return $this;
    }

}
