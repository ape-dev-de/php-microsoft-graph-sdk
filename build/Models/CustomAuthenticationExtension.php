<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CustomAuthenticationExtension
 */
class CustomAuthenticationExtension
{
    /**
     * The behaviour on error for the custom authentication extension.
     */
    private ?string $behaviorOnError;


    public function getBehaviorOnError(): ?string
    {
        return $this->behaviorOnError;
    }

    public function setBehaviorOnError(?string $behaviorOnError): self
    {
        $this->behaviorOnError = $behaviorOnError;
        return $this;
    }

}
