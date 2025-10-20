<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosVppApp
 */
class IosVppApp
{
    /**
     * The applicable iOS Device Type.
     */
    private ?string $applicableDeviceType;

    /**
     * The store URL.
     */
    private ?string $appStoreUrl;

    /**
     * The Identity Name.
     */
    private ?string $bundleId;

    /**
     * The supported License Type.
     */
    private ?string $licensingType;

    /**
     * The VPP application release date and time.
     */
    private ?\DateTimeInterface $releaseDateTime;

    /**
     * The total number of VPP licenses.
     */
    private ?float $totalLicenseCount;

    /**
     * The number of VPP licenses in use.
     */
    private ?float $usedLicenseCount;

    /**
     */
    private ?string $vppTokenAccountType;

    /**
     * The Apple Id associated with the given Apple Volume Purchase Program Token.
     */
    private ?string $vppTokenAppleId;

    /**
     * Contains properties and inherited properties for iOS Volume-Purchased Program (VPP) Apps.
     */
    private ?string $vppTokenOrganizationName;

    public function getApplicableDeviceType(): ?string
    {
        return $this->applicableDeviceType;
    }

    public function setApplicableDeviceType(?string $applicableDeviceType): self
    {
        $this->applicableDeviceType = $applicableDeviceType;
        return $this;
    }

    public function getAppStoreUrl(): ?string
    {
        return $this->appStoreUrl;
    }

    public function setAppStoreUrl(?string $appStoreUrl): self
    {
        $this->appStoreUrl = $appStoreUrl;
        return $this;
    }

    public function getBundleId(): ?string
    {
        return $this->bundleId;
    }

    public function setBundleId(?string $bundleId): self
    {
        $this->bundleId = $bundleId;
        return $this;
    }

    public function getLicensingType(): ?string
    {
        return $this->licensingType;
    }

    public function setLicensingType(?string $licensingType): self
    {
        $this->licensingType = $licensingType;
        return $this;
    }

    public function getReleaseDateTime(): ?\DateTimeInterface
    {
        return $this->releaseDateTime;
    }

    public function setReleaseDateTime(?\DateTimeInterface $releaseDateTime): self
    {
        $this->releaseDateTime = $releaseDateTime;
        return $this;
    }

    public function getTotalLicenseCount(): ?float
    {
        return $this->totalLicenseCount;
    }

    public function setTotalLicenseCount(?float $totalLicenseCount): self
    {
        $this->totalLicenseCount = $totalLicenseCount;
        return $this;
    }

    public function getUsedLicenseCount(): ?float
    {
        return $this->usedLicenseCount;
    }

    public function setUsedLicenseCount(?float $usedLicenseCount): self
    {
        $this->usedLicenseCount = $usedLicenseCount;
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

    public function getVppTokenAppleId(): ?string
    {
        return $this->vppTokenAppleId;
    }

    public function setVppTokenAppleId(?string $vppTokenAppleId): self
    {
        $this->vppTokenAppleId = $vppTokenAppleId;
        return $this;
    }

    public function getVppTokenOrganizationName(): ?string
    {
        return $this->vppTokenOrganizationName;
    }

    public function setVppTokenOrganizationName(?string $vppTokenOrganizationName): self
    {
        $this->vppTokenOrganizationName = $vppTokenOrganizationName;
        return $this;
    }

}
