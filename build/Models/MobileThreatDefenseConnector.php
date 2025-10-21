<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MobileThreatDefenseConnector
 */
class MobileThreatDefenseConnector
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** When TRUE, indicates the Mobile Threat Defense partner may collect metadata about installed applications from Intune for IOS devices. When FALSE, indicates the Mobile Threat Defense partner may not collect metadata about installed applications from Intune for IOS devices. Default value is FALSE. */
        public ?bool $allowPartnerToCollectIOSApplicationMetadata = null,
        /** When TRUE, indicates the Mobile Threat Defense partner may collect metadata about personally installed applications from Intune for IOS devices. When FALSE, indicates the Mobile Threat Defense partner may not collect metadata about personally installed applications from Intune for IOS devices. Default value is FALSE. */
        public ?bool $allowPartnerToCollectIOSPersonalApplicationMetadata = null,
        /** For Android, set whether Intune must receive data from the Mobile Threat Defense partner prior to marking a device compliant */
        public ?bool $androidDeviceBlockedOnMissingPartnerData = null,
        /** For Android, set whether data from the Mobile Threat Defense partner should be used during compliance evaluations */
        public ?bool $androidEnabled = null,
        /** When TRUE, inidicates that data from the Mobile Threat Defense partner can be used during Mobile Application Management (MAM) evaluations for Android devices. When FALSE, inidicates that data from the Mobile Threat Defense partner should not be used during Mobile Application Management (MAM) evaluations for Android devices. Only one partner per platform may be enabled for Mobile Application Management (MAM) evaluation. Default value is FALSE. */
        public ?bool $androidMobileApplicationManagementEnabled = null,
        /** For IOS, set whether Intune must receive data from the Mobile Threat Defense partner prior to marking a device compliant */
        public ?bool $iosDeviceBlockedOnMissingPartnerData = null,
        /** For IOS, get or set whether data from the Mobile Threat Defense partner should be used during compliance evaluations */
        public ?bool $iosEnabled = null,
        /** When TRUE, inidicates that data from the Mobile Threat Defense partner can be used during Mobile Application Management (MAM) evaluations for IOS devices. When FALSE, inidicates that data from the Mobile Threat Defense partner should not be used during Mobile Application Management (MAM) evaluations for IOS devices. Only one partner per platform may be enabled for Mobile Application Management (MAM) evaluation. Default value is FALSE. */
        public ?bool $iosMobileApplicationManagementEnabled = null,
        /** DateTime of last Heartbeat recieved from the Mobile Threat Defense partner */
        public ?\DateTimeInterface $lastHeartbeatDateTime = null,
        /** When TRUE, inidicates that configuration profile management via Microsoft Defender for Endpoint is enabled. When FALSE, inidicates that configuration profile management via Microsoft Defender for Endpoint is disabled. Default value is FALSE. */
        public ?bool $microsoftDefenderForEndpointAttachEnabled = null,
        /**  */
        public ?string $partnerState = null,
        /** Get or Set days the per tenant tolerance to unresponsiveness for this partner integration */
        public ?float $partnerUnresponsivenessThresholdInDays = null,
        /** Get or set whether to block devices on the enabled platforms that do not meet the minimum version requirements of the Mobile Threat Defense partner */
        public ?bool $partnerUnsupportedOsVersionBlocked = null,
        /** When TRUE, inidicates that Intune must receive data from the Mobile Threat Defense partner prior to marking a device compliant for Windows. When FALSE, inidicates that Intune may make a device compliant without receiving data from the Mobile Threat Defense partner for Windows. Default value is FALSE. */
        public ?bool $windowsDeviceBlockedOnMissingPartnerData = null,
        /** Entity which represents a connection to Mobile Threat Defense partner. */
        public ?string $windowsEnabled = null
    ) {}
}
