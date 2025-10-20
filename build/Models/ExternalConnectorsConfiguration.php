<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalConnectorsConfiguration
 */
class ExternalConnectorsConfiguration
{
    /**
     * A collection of application IDs for registered Microsoft Entra apps that are allowed to manage the externalConnection and to index content in the externalConnection.
     */
    private ?string $authorizedAppIds;

    public function getAuthorizedAppIds(): ?string
    {
        return $this->authorizedAppIds;
    }

    public function setAuthorizedAppIds(?string $authorizedAppIds): self
    {
        $this->authorizedAppIds = $authorizedAppIds;
        return $this;
    }

}
