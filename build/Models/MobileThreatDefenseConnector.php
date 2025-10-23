<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MobileThreatDefenseConnector
 */
class MobileThreatDefenseConnector
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** When TRUE, indicates the Mobile Threat Defense partner may collect metadata about installed applications from Intune for IOS devices. When FALSE, indicates the Mobile Threat Defense partner may not collect metadata about installed applications from Intune for IOS devices. Default value is FALSE. */
    public ?bool $allowPartnerToCollectIOSApplicationMetadata = null;

    /** When TRUE, indicates the Mobile Threat Defense partner may collect metadata about personally installed applications from Intune for IOS devices. When FALSE, indicates the Mobile Threat Defense partner may not collect metadata about personally installed applications from Intune for IOS devices. Default value is FALSE. */
    public ?bool $allowPartnerToCollectIOSPersonalApplicationMetadata = null;

    /** For Android, set whether Intune must receive data from the Mobile Threat Defense partner prior to marking a device compliant */
    public ?bool $androidDeviceBlockedOnMissingPartnerData = null;

    /** For Android, set whether data from the Mobile Threat Defense partner should be used during compliance evaluations */
    public ?bool $androidEnabled = null;

    /** When TRUE, inidicates that data from the Mobile Threat Defense partner can be used during Mobile Application Management (MAM) evaluations for Android devices. When FALSE, inidicates that data from the Mobile Threat Defense partner should not be used during Mobile Application Management (MAM) evaluations for Android devices. Only one partner per platform may be enabled for Mobile Application Management (MAM) evaluation. Default value is FALSE. */
    public ?bool $androidMobileApplicationManagementEnabled = null;

    /** For IOS, set whether Intune must receive data from the Mobile Threat Defense partner prior to marking a device compliant */
    public ?bool $iosDeviceBlockedOnMissingPartnerData = null;

    /** For IOS, get or set whether data from the Mobile Threat Defense partner should be used during compliance evaluations */
    public ?bool $iosEnabled = null;

    /** When TRUE, inidicates that data from the Mobile Threat Defense partner can be used during Mobile Application Management (MAM) evaluations for IOS devices. When FALSE, inidicates that data from the Mobile Threat Defense partner should not be used during Mobile Application Management (MAM) evaluations for IOS devices. Only one partner per platform may be enabled for Mobile Application Management (MAM) evaluation. Default value is FALSE. */
    public ?bool $iosMobileApplicationManagementEnabled = null;

    /** DateTime of last Heartbeat recieved from the Mobile Threat Defense partner */
    public ?\DateTimeInterface $lastHeartbeatDateTime = null;

    /** When TRUE, inidicates that configuration profile management via Microsoft Defender for Endpoint is enabled. When FALSE, inidicates that configuration profile management via Microsoft Defender for Endpoint is disabled. Default value is FALSE. */
    public ?bool $microsoftDefenderForEndpointAttachEnabled = null;

    /**  */
    public ?MobileThreatPartnerTenantState $partnerState = null;

    /** Get or Set days the per tenant tolerance to unresponsiveness for this partner integration */
    public ?float $partnerUnresponsivenessThresholdInDays = null;

    /** Get or set whether to block devices on the enabled platforms that do not meet the minimum version requirements of the Mobile Threat Defense partner */
    public ?bool $partnerUnsupportedOsVersionBlocked = null;

    /** When TRUE, inidicates that Intune must receive data from the Mobile Threat Defense partner prior to marking a device compliant for Windows. When FALSE, inidicates that Intune may make a device compliant without receiving data from the Mobile Threat Defense partner for Windows. Default value is FALSE. */
    public ?bool $windowsDeviceBlockedOnMissingPartnerData = null;

    /** When TRUE, inidicates that data from the Mobile Threat Defense partner can be used during compliance evaluations for Windows. When FALSE, inidicates that data from the Mobile Threat Defense partner should not be used during compliance evaluations for Windows. Default value is FALSE. */
    public ?bool $windowsEnabled = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['allowPartnerToCollectIOSApplicationMetadata'])) {
            $this->allowPartnerToCollectIOSApplicationMetadata = $data['allowPartnerToCollectIOSApplicationMetadata'];
        }
        if (isset($data['allowPartnerToCollectIOSPersonalApplicationMetadata'])) {
            $this->allowPartnerToCollectIOSPersonalApplicationMetadata = $data['allowPartnerToCollectIOSPersonalApplicationMetadata'];
        }
        if (isset($data['androidDeviceBlockedOnMissingPartnerData'])) {
            $this->androidDeviceBlockedOnMissingPartnerData = $data['androidDeviceBlockedOnMissingPartnerData'];
        }
        if (isset($data['androidEnabled'])) {
            $this->androidEnabled = $data['androidEnabled'];
        }
        if (isset($data['androidMobileApplicationManagementEnabled'])) {
            $this->androidMobileApplicationManagementEnabled = $data['androidMobileApplicationManagementEnabled'];
        }
        if (isset($data['iosDeviceBlockedOnMissingPartnerData'])) {
            $this->iosDeviceBlockedOnMissingPartnerData = $data['iosDeviceBlockedOnMissingPartnerData'];
        }
        if (isset($data['iosEnabled'])) {
            $this->iosEnabled = $data['iosEnabled'];
        }
        if (isset($data['iosMobileApplicationManagementEnabled'])) {
            $this->iosMobileApplicationManagementEnabled = $data['iosMobileApplicationManagementEnabled'];
        }
        if (isset($data['lastHeartbeatDateTime'])) {
            $this->lastHeartbeatDateTime = is_string($data['lastHeartbeatDateTime']) ? new \DateTimeImmutable($data['lastHeartbeatDateTime']) : $data['lastHeartbeatDateTime'];
        }
        if (isset($data['microsoftDefenderForEndpointAttachEnabled'])) {
            $this->microsoftDefenderForEndpointAttachEnabled = $data['microsoftDefenderForEndpointAttachEnabled'];
        }
        if (isset($data['partnerState'])) {
            $this->partnerState = $data['partnerState'];
        }
        if (isset($data['partnerUnresponsivenessThresholdInDays'])) {
            $this->partnerUnresponsivenessThresholdInDays = $data['partnerUnresponsivenessThresholdInDays'];
        }
        if (isset($data['partnerUnsupportedOsVersionBlocked'])) {
            $this->partnerUnsupportedOsVersionBlocked = $data['partnerUnsupportedOsVersionBlocked'];
        }
        if (isset($data['windowsDeviceBlockedOnMissingPartnerData'])) {
            $this->windowsDeviceBlockedOnMissingPartnerData = $data['windowsDeviceBlockedOnMissingPartnerData'];
        }
        if (isset($data['windowsEnabled'])) {
            $this->windowsEnabled = $data['windowsEnabled'];
        }
    }
}
