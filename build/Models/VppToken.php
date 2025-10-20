<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VppToken
 */
class VppToken
{
    /**
     * The Apple ID associated with the given Apple Volume Purchase Program Token.
     */
    private ?string $appleId;

    /**
     * Whether or not apps for the VPP token will be automatically updated.
     */
    private ?bool $automaticallyUpdateApps;

    /**
     * The country or region associated with the Apple Volume Purchase Program Token.
     */
    private ?string $countryOrRegion;

    /**
     * The expiration date time of the Apple Volume Purchase Program Token.
     */
    private ?\DateTimeInterface $expirationDateTime;

    /**
     * Last modification date time associated with the Apple Volume Purchase Program Token.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * The last time when an application sync was done with the Apple volume purchase program service using the the Apple Volume Purchase Program Token.
     */
    private ?\DateTimeInterface $lastSyncDateTime;

    /**
     */
    private ?string $lastSyncStatus;

    /**
     * The organization associated with the Apple Volume Purchase Program Token
     */
    private ?string $organizationName;

    /**
     */
    private ?string $state;

    /**
     * The Apple Volume Purchase Program Token string downloaded from the Apple Volume Purchase Program.
     */
    private ?string $token;

    /**
     * You purchase multiple licenses for iOS apps through the Apple Volume Purchase Program for Business or Education. This involves setting up an Apple VPP account from the Apple website and uploading the Apple VPP Business or Education token to Intune. You can then synchronize your volume purchase information with Intune and track your volume-purchased app use. You can upload multiple Apple VPP Business or Education tokens.
     */
    private ?string $vppTokenAccountType;

    public function getAppleId(): ?string
    {
        return $this->appleId;
    }

    public function setAppleId(?string $appleId): self
    {
        $this->appleId = $appleId;
        return $this;
    }

    public function getAutomaticallyUpdateApps(): ?bool
    {
        return $this->automaticallyUpdateApps;
    }

    public function setAutomaticallyUpdateApps(?bool $automaticallyUpdateApps): self
    {
        $this->automaticallyUpdateApps = $automaticallyUpdateApps;
        return $this;
    }

    public function getCountryOrRegion(): ?string
    {
        return $this->countryOrRegion;
    }

    public function setCountryOrRegion(?string $countryOrRegion): self
    {
        $this->countryOrRegion = $countryOrRegion;
        return $this;
    }

    public function getExpirationDateTime(): ?\DateTimeInterface
    {
        return $this->expirationDateTime;
    }

    public function setExpirationDateTime(?\DateTimeInterface $expirationDateTime): self
    {
        $this->expirationDateTime = $expirationDateTime;
        return $this;
    }

    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function setLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): self
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        return $this;
    }

    public function getLastSyncDateTime(): ?\DateTimeInterface
    {
        return $this->lastSyncDateTime;
    }

    public function setLastSyncDateTime(?\DateTimeInterface $lastSyncDateTime): self
    {
        $this->lastSyncDateTime = $lastSyncDateTime;
        return $this;
    }

    public function getLastSyncStatus(): ?string
    {
        return $this->lastSyncStatus;
    }

    public function setLastSyncStatus(?string $lastSyncStatus): self
    {
        $this->lastSyncStatus = $lastSyncStatus;
        return $this;
    }

    public function getOrganizationName(): ?string
    {
        return $this->organizationName;
    }

    public function setOrganizationName(?string $organizationName): self
    {
        $this->organizationName = $organizationName;
        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): self
    {
        $this->state = $state;
        return $this;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken(?string $token): self
    {
        $this->token = $token;
        return $this;
    }

    public function getVppTokenAccountType(): ?string
    {
        return $this->vppTokenAccountType;
    }

    public function setVppTokenAccountType(?string $vppTokenAccountType): self
    {
        $this->vppTokenAccountType = $vppTokenAccountType;
        return $this;
    }

}
