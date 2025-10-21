<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AzureCommunicationServicesUserConversationMember
 */
class AzureCommunicationServicesUserConversationMember
{
    /**
     * Azure Communication Services ID of the user.
     */
    private ?string $azureCommunicationServicesId;


    public function getAzureCommunicationServicesId(): ?string
    {
        return $this->azureCommunicationServicesId;
    }

    public function setAzureCommunicationServicesId(?string $azureCommunicationServicesId): self
    {
        $this->azureCommunicationServicesId = $azureCommunicationServicesId;
        return $this;
    }

}
