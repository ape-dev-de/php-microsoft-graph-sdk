<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AzureCommunicationServicesUserIdentity
 */
class AzureCommunicationServicesUserIdentity
{
    /**
     * The Azure Communication Services resource ID associated with the user.
     */
    private ?string $azureCommunicationServicesResourceId;


    public function getAzureCommunicationServicesResourceId(): ?string
    {
        return $this->azureCommunicationServicesResourceId;
    }

    public function setAzureCommunicationServicesResourceId(?string $azureCommunicationServicesResourceId): self
    {
        $this->azureCommunicationServicesResourceId = $azureCommunicationServicesResourceId;
        return $this;
    }

}
