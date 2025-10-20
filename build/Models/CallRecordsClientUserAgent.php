<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsClientUserAgent
 */
class CallRecordsClientUserAgent
{
    /**
     * The unique identifier of the Microsoft Entra application used by this endpoint.
     */
    private ?string $azureADAppId;

    /**
     * Immutable resource identifier of the Azure Communication Service associated with this endpoint based on Communication Services APIs.
     */
    private ?string $communicationServiceId;

    /**
     */
    private ?string $platform;

    /**
     */
    private ?string $productFamily;

    public function getAzureADAppId(): ?string
    {
        return $this->azureADAppId;
    }

    public function setAzureADAppId(?string $azureADAppId): self
    {
        $this->azureADAppId = $azureADAppId;
        return $this;
    }

    public function getCommunicationServiceId(): ?string
    {
        return $this->communicationServiceId;
    }

    public function setCommunicationServiceId(?string $communicationServiceId): self
    {
        $this->communicationServiceId = $communicationServiceId;
        return $this;
    }

    public function getPlatform(): ?string
    {
        return $this->platform;
    }

    public function setPlatform(?string $platform): self
    {
        $this->platform = $platform;
        return $this;
    }

    public function getProductFamily(): ?string
    {
        return $this->productFamily;
    }

    public function setProductFamily(?string $productFamily): self
    {
        $this->productFamily = $productFamily;
        return $this;
    }

}
