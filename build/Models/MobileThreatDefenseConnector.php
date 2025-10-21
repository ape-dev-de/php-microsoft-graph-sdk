<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MobileThreatDefenseConnector
 */
class MobileThreatDefenseConnector
{
    /**
     * When TRUE, indicates the Mobile Threat Defense partner may collect metadata about installed applications from Intune for IOS devices. When FALSE, indicates the Mobile Threat Defense partner may not collect metadata about installed applications from Intune for IOS devices. Default value is FALSE.
     */
    private ?bool $allowPartnerToCollectIOSApplicationMetadata;

    /**
     * When TRUE, indicates the Mobile Threat Defense partner may collect metadata about personally installed applications from Intune for IOS devices. When FALSE, indicates the Mobile Threat Defense partner may not collect metadata about personally installed applications from Intune for IOS devices. Default value is FALSE.
     */
    private ?bool $allowPartnerToCollectIOSPersonalApplicationMetadata;

    /**
     * For Android, set whether Intune must receive data from the Mobile Threat Defense partner prior to marking a device compliant
     */
    private ?bool $androidDeviceBlockedOnMissingPartnerData;

    /**
     * For Android, set whether data from the Mobile Threat Defense partner should be used during compliance evaluations
     */
    private ?bool $androidEnabled;

    /**
     * When TRUE, inidicates that data from the Mobile Threat Defense partner can be used during Mobile Application Management (MAM) evaluations for Android devices. When FALSE, inidicates that data from the Mobile Threat Defense partner should not be used during Mobile Application Management (MAM) evaluations for Android devices. Only one partner per platform may be enabled for Mobile Application Management (MAM) evaluation. Default value is FALSE.
     */
    private ?bool $androidMobileApplicationManagementEnabled;

    /**
     * For IOS, set whether Intune must receive data from the Mobile Threat Defense partner prior to marking a device compliant
     */
    private ?bool $iosDeviceBlockedOnMissingPartnerData;

    /**
     * For IOS, get or set whether data from the Mobile Threat Defense partner should be used during compliance evaluations
     */
    private ?bool $iosEnabled;

    /**
     * When TRUE, inidicates that data from the Mobile Threat Defense partner can be used during Mobile Application Management (MAM) evaluations for IOS devices. When FALSE, inidicates that data from the Mobile Threat Defense partner should not be used during Mobile Application Management (MAM) evaluations for IOS devices. Only one partner per platform may be enabled for Mobile Application Management (MAM) evaluation. Default value is FALSE.
     */
    private ?bool $iosMobileApplicationManagementEnabled;

    /**
     * DateTime of last Heartbeat recieved from the Mobile Threat Defense partner
     */
    private ?\DateTimeInterface $lastHeartbeatDateTime;

    /**
     * When TRUE, inidicates that configuration profile management via Microsoft Defender for Endpoint is enabled. When FALSE, inidicates that configuration profile management via Microsoft Defender for Endpoint is disabled. Default value is FALSE.
     */
    private ?bool $microsoftDefenderForEndpointAttachEnabled;

    /**
     */
    private ?string $partnerState;

    /**
     * Get or Set days the per tenant tolerance to unresponsiveness for this partner integration
     */
    private ?float $partnerUnresponsivenessThresholdInDays;

    /**
     * Get or set whether to block devices on the enabled platforms that do not meet the minimum version requirements of the Mobile Threat Defense partner
     */
    private ?bool $partnerUnsupportedOsVersionBlocked;

    /**
     * When TRUE, inidicates that Intune must receive data from the Mobile Threat Defense partner prior to marking a device compliant for Windows. When FALSE, inidicates that Intune may make a device compliant without receiving data from the Mobile Threat Defense partner for Windows. Default value is FALSE.
     */
    private ?bool $windowsDeviceBlockedOnMissingPartnerData;

    /**
     * Entity which represents a connection to Mobile Threat Defense partner.
     */
    private ?string $windowsEnabled;


    public function getAllowPartnerToCollectIOSApplicationMetadata(): ?bool
    {
        return $this->allowPartnerToCollectIOSApplicationMetadata;
    }

    public function setAllowPartnerToCollectIOSApplicationMetadata(?bool $allowPartnerToCollectIOSApplicationMetadata): self
    {
        $this->allowPartnerToCollectIOSApplicationMetadata = $allowPartnerToCollectIOSApplicationMetadata;
        return $this;
    }

    public function getAllowPartnerToCollectIOSPersonalApplicationMetadata(): ?bool
    {
        return $this->allowPartnerToCollectIOSPersonalApplicationMetadata;
    }

    public function setAllowPartnerToCollectIOSPersonalApplicationMetadata(?bool $allowPartnerToCollectIOSPersonalApplicationMetadata): self
    {
        $this->allowPartnerToCollectIOSPersonalApplicationMetadata = $allowPartnerToCollectIOSPersonalApplicationMetadata;
        return $this;
    }

    public function getAndroidDeviceBlockedOnMissingPartnerData(): ?bool
    {
        return $this->androidDeviceBlockedOnMissingPartnerData;
    }

    public function setAndroidDeviceBlockedOnMissingPartnerData(?bool $androidDeviceBlockedOnMissingPartnerData): self
    {
        $this->androidDeviceBlockedOnMissingPartnerData = $androidDeviceBlockedOnMissingPartnerData;
        return $this;
    }

    public function getAndroidEnabled(): ?bool
    {
        return $this->androidEnabled;
    }

    public function setAndroidEnabled(?bool $androidEnabled): self
    {
        $this->androidEnabled = $androidEnabled;
        return $this;
    }

    public function getAndroidMobileApplicationManagementEnabled(): ?bool
    {
        return $this->androidMobileApplicationManagementEnabled;
    }

    public function setAndroidMobileApplicationManagementEnabled(?bool $androidMobileApplicationManagementEnabled): self
    {
        $this->androidMobileApplicationManagementEnabled = $androidMobileApplicationManagementEnabled;
        return $this;
    }

    public function getIosDeviceBlockedOnMissingPartnerData(): ?bool
    {
        return $this->iosDeviceBlockedOnMissingPartnerData;
    }

    public function setIosDeviceBlockedOnMissingPartnerData(?bool $iosDeviceBlockedOnMissingPartnerData): self
    {
        $this->iosDeviceBlockedOnMissingPartnerData = $iosDeviceBlockedOnMissingPartnerData;
        return $this;
    }

    public function getIosEnabled(): ?bool
    {
        return $this->iosEnabled;
    }

    public function setIosEnabled(?bool $iosEnabled): self
    {
        $this->iosEnabled = $iosEnabled;
        return $this;
    }

    public function getIosMobileApplicationManagementEnabled(): ?bool
    {
        return $this->iosMobileApplicationManagementEnabled;
    }

    public function setIosMobileApplicationManagementEnabled(?bool $iosMobileApplicationManagementEnabled): self
    {
        $this->iosMobileApplicationManagementEnabled = $iosMobileApplicationManagementEnabled;
        return $this;
    }

    public function getLastHeartbeatDateTime(): ?\DateTimeInterface
    {
        return $this->lastHeartbeatDateTime;
    }

    public function setLastHeartbeatDateTime(?\DateTimeInterface $lastHeartbeatDateTime): self
    {
        $this->lastHeartbeatDateTime = $lastHeartbeatDateTime;
        return $this;
    }

    public function getMicrosoftDefenderForEndpointAttachEnabled(): ?bool
    {
        return $this->microsoftDefenderForEndpointAttachEnabled;
    }

    public function setMicrosoftDefenderForEndpointAttachEnabled(?bool $microsoftDefenderForEndpointAttachEnabled): self
    {
        $this->microsoftDefenderForEndpointAttachEnabled = $microsoftDefenderForEndpointAttachEnabled;
        return $this;
    }

    public function getPartnerState(): ?string
    {
        return $this->partnerState;
    }

    public function setPartnerState(?string $partnerState): self
    {
        $this->partnerState = $partnerState;
        return $this;
    }

    public function getPartnerUnresponsivenessThresholdInDays(): ?float
    {
        return $this->partnerUnresponsivenessThresholdInDays;
    }

    public function setPartnerUnresponsivenessThresholdInDays(?float $partnerUnresponsivenessThresholdInDays): self
    {
        $this->partnerUnresponsivenessThresholdInDays = $partnerUnresponsivenessThresholdInDays;
        return $this;
    }

    public function getPartnerUnsupportedOsVersionBlocked(): ?bool
    {
        return $this->partnerUnsupportedOsVersionBlocked;
    }

    public function setPartnerUnsupportedOsVersionBlocked(?bool $partnerUnsupportedOsVersionBlocked): self
    {
        $this->partnerUnsupportedOsVersionBlocked = $partnerUnsupportedOsVersionBlocked;
        return $this;
    }

    public function getWindowsDeviceBlockedOnMissingPartnerData(): ?bool
    {
        return $this->windowsDeviceBlockedOnMissingPartnerData;
    }

    public function setWindowsDeviceBlockedOnMissingPartnerData(?bool $windowsDeviceBlockedOnMissingPartnerData): self
    {
        $this->windowsDeviceBlockedOnMissingPartnerData = $windowsDeviceBlockedOnMissingPartnerData;
        return $this;
    }

    public function getWindowsEnabled(): ?string
    {
        return $this->windowsEnabled;
    }

    public function setWindowsEnabled(?string $windowsEnabled): self
    {
        $this->windowsEnabled = $windowsEnabled;
        return $this;
    }

}
