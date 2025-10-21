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
     * @var string[]
     */
    private array $allowedResourceTypes = [];

    /**
     * @var string[]
     */
    private array $allowedServices = [];

    /**
     */
    private ?\DateTimeInterface $expiryDateTime;

    /**
     * @var string[]
     */
    private array $permissions = [];

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

    /**
     * @return string[]
     */
    public function getAllowedResourceTypes(): array
    {
        return $this->allowedResourceTypes;
    }

    /**
     * @param string[] $allowedResourceTypes
     */
    public function setAllowedResourceTypes(array $allowedResourceTypes): self
    {
        $this->allowedResourceTypes = $allowedResourceTypes;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getAllowedServices(): array
    {
        return $this->allowedServices;
    }

    /**
     * @param string[] $allowedServices
     */
    public function setAllowedServices(array $allowedServices): self
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

    /**
     * @return string[]
     */
    public function getPermissions(): array
    {
        return $this->permissions;
    }

    /**
     * @param string[] $permissions
     */
    public function setPermissions(array $permissions): self
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
