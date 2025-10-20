<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecuritySasTokenEvidence
 */
class SecuritySasTokenEvidence
{
    /**
     */
    private ?string $allowedIpAddresses;

    /**
     */
    private ?string $allowedResourceTypes;

    /**
     */
    private ?string $allowedServices;

    /**
     */
    private ?\DateTimeInterface $expiryDateTime;

    /**
     */
    private ?string $permissions;

    /**
     */
    private ?string $protocol;

    /**
     */
    private ?string $signatureHash;

    /**
     */
    private ?string $signedWith;

    /**
     */
    private ?\DateTimeInterface $startDateTime;

    /**
     */
    private ?string $storageResource;

    public function getAllowedIpAddresses(): ?string
    {
        return $this->allowedIpAddresses;
    }

    public function setAllowedIpAddresses(?string $allowedIpAddresses): self
    {
        $this->allowedIpAddresses = $allowedIpAddresses;
        return $this;
    }

    public function getAllowedResourceTypes(): ?string
    {
        return $this->allowedResourceTypes;
    }

    public function setAllowedResourceTypes(?string $allowedResourceTypes): self
    {
        $this->allowedResourceTypes = $allowedResourceTypes;
        return $this;
    }

    public function getAllowedServices(): ?string
    {
        return $this->allowedServices;
    }

    public function setAllowedServices(?string $allowedServices): self
    {
        $this->allowedServices = $allowedServices;
        return $this;
    }

    public function getExpiryDateTime(): ?\DateTimeInterface
    {
        return $this->expiryDateTime;
    }

    public function setExpiryDateTime(?\DateTimeInterface $expiryDateTime): self
    {
        $this->expiryDateTime = $expiryDateTime;
        return $this;
    }

    public function getPermissions(): ?string
    {
        return $this->permissions;
    }

    public function setPermissions(?string $permissions): self
    {
        $this->permissions = $permissions;
        return $this;
    }

    public function getProtocol(): ?string
    {
        return $this->protocol;
    }

    public function setProtocol(?string $protocol): self
    {
        $this->protocol = $protocol;
        return $this;
    }

    public function getSignatureHash(): ?string
    {
        return $this->signatureHash;
    }

    public function setSignatureHash(?string $signatureHash): self
    {
        $this->signatureHash = $signatureHash;
        return $this;
    }

    public function getSignedWith(): ?string
    {
        return $this->signedWith;
    }

    public function setSignedWith(?string $signedWith): self
    {
        $this->signedWith = $signedWith;
        return $this;
    }

    public function getStartDateTime(): ?\DateTimeInterface
    {
        return $this->startDateTime;
    }

    public function setStartDateTime(?\DateTimeInterface $startDateTime): self
    {
        $this->startDateTime = $startDateTime;
        return $this;
    }

    public function getStorageResource(): ?string
    {
        return $this->storageResource;
    }

    public function setStorageResource(?string $storageResource): self
    {
        $this->storageResource = $storageResource;
        return $this;
    }

}
