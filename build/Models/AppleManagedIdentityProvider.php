<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppleManagedIdentityProvider
 */
class AppleManagedIdentityProvider
{
    /**
     * The certificate data, which is a long string of text from the certificate. Can be null.
     */
    private ?string $certificateData;

    /**
     * The Apple developer identifier. Required.
     */
    private ?string $developerId;

    /**
     * The Apple key identifier. Required.
     */
    private ?string $keyId;

    /**
     * The Apple service identifier. Required.
     */
    private ?string $serviceId;

    public function getCertificateData(): ?string
    {
        return $this->certificateData;
    }

    public function setCertificateData(?string $certificateData): self
    {
        $this->certificateData = $certificateData;
        return $this;
    }

    public function getDeveloperId(): ?string
    {
        return $this->developerId;
    }

    public function setDeveloperId(?string $developerId): self
    {
        $this->developerId = $developerId;
        return $this;
    }

    public function getKeyId(): ?string
    {
        return $this->keyId;
    }

    public function setKeyId(?string $keyId): self
    {
        $this->keyId = $keyId;
        return $this;
    }

    public function getServiceId(): ?string
    {
        return $this->serviceId;
    }

    public function setServiceId(?string $serviceId): self
    {
        $this->serviceId = $serviceId;
        return $this;
    }

}
