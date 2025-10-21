<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CustomExtensionOverwriteConfiguration
 */
class CustomExtensionOverwriteConfiguration
{
    /**
     */
    private ?string $behaviorOnError;

    /**
     * Configuration regarding properties of the custom extension which can be overwritten per event listener. If no values are provided, the properties on the custom extension are used.
     */
    private ?string $clientConfiguration;


    public function getBehaviorOnError(): ?string
    {
        return $this->behaviorOnError;
    }

    public function setBehaviorOnError(?string $behaviorOnError): self
    {
        $this->behaviorOnError = $behaviorOnError;
        return $this;
    }

    public function getClientConfiguration(): ?string
    {
        return $this->clientConfiguration;
    }

    public function setClientConfiguration(?string $clientConfiguration): self
    {
        $this->clientConfiguration = $clientConfiguration;
        return $this;
    }

}
