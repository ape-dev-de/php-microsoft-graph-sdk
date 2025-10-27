<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TargetedManagedAppProtection
 */
class TargetedManagedAppProtection
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The date and time the policy was created. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The policy's description. */
    public ?string $description = null;

    /** Policy display name. */
    public ?string $displayName = null;

    /** Last time the policy was modified. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** Version of the entity. */
    public ?string $version = null;

    /** 
     * Data storage locations where a user may store managed data.
     * @var ManagedAppDataStorageLocation[]
     */
    public array $allowedDataStorageLocations = [];

    /**  */
    public ?ManagedAppDataTransferLevel $allowedInboundDataTransferSources = null;

    /**  */
    public ?ManagedAppClipboardSharingLevel $allowedOutboundClipboardSharingLevel = null;

    /**  */
    public ?ManagedAppDataTransferLevel $allowedOutboundDataTransferDestinations = null;

    /** Indicates whether contacts can be synced to the user's device. */
    public ?bool $contactSyncBlocked = null;

    /** Indicates whether the backup of a managed app's data is blocked. */
    public ?bool $dataBackupBlocked = null;

    /** Indicates whether device compliance is required. */
    public ?bool $deviceComplianceRequired = null;

    /** Indicates whether use of the app pin is required if the device pin is set. */
    public ?bool $disableAppPinIfDevicePinIsSet = null;

    /** Indicates whether use of the fingerprint reader is allowed in place of a pin if PinRequired is set to True. */
    public ?bool $fingerprintBlocked = null;

    /**  */
    public ?ManagedBrowserType $managedBrowser = null;

    /** Indicates whether internet links should be opened in the managed browser app, or any custom browser specified by CustomBrowserProtocol (for iOS) or CustomBrowserPackageId/CustomBrowserDisplayName (for Android) */
    public ?bool $managedBrowserToOpenLinksRequired = null;

    /** Maximum number of incorrect pin retry attempts before the managed app is either blocked or wiped. */
    public ?float $maximumPinRetries = null;

    /** Minimum pin length required for an app-level pin if PinRequired is set to True */
    public ?float $minimumPinLength = null;

    /** Versions less than the specified version will block the managed app from accessing company data. */
    public ?string $minimumRequiredAppVersion = null;

    /** Versions less than the specified version will block the managed app from accessing company data. */
    public ?string $minimumRequiredOsVersion = null;

    /** Versions less than the specified version will result in warning message on the managed app. */
    public ?string $minimumWarningAppVersion = null;

    /** Versions less than the specified version will result in warning message on the managed app from accessing company data. */
    public ?string $minimumWarningOsVersion = null;

    /** Indicates whether organizational credentials are required for app use. */
    public ?bool $organizationalCredentialsRequired = null;

    /** TimePeriod before the all-level pin must be reset if PinRequired is set to True. */
    public ?string $periodBeforePinReset = null;

    /** The period after which access is checked when the device is not connected to the internet. */
    public ?string $periodOfflineBeforeAccessCheck = null;

    /** The amount of time an app is allowed to remain disconnected from the internet before all managed data it is wiped. */
    public ?string $periodOfflineBeforeWipeIsEnforced = null;

    /** The period after which access is checked when the device is connected to the internet. */
    public ?string $periodOnlineBeforeAccessCheck = null;

    /**  */
    public ?ManagedAppPinCharacterSet $pinCharacterSet = null;

    /** Indicates whether an app-level pin is required. */
    public ?bool $pinRequired = null;

    /** Indicates whether printing is allowed from managed apps. */
    public ?bool $printBlocked = null;

    /** Indicates whether users may use the 'Save As' menu item to save a copy of protected files. */
    public ?bool $saveAsBlocked = null;

    /** Indicates whether simplePin is blocked. */
    public ?bool $simplePinBlocked = null;

    /** Indicates if the policy is deployed to any inclusion groups or not. */
    public ?bool $isAssigned = null;

    /** 
     * Navigation property to list of inclusion and exclusion groups to which the policy is deployed.
     * @var TargetedManagedAppPolicyAssignment[]
     */
    public array $assignments = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['version'])) {
            $this->version = $data['version'];
        }
        if (isset($data['allowedDataStorageLocations'])) {
            $this->allowedDataStorageLocations = $data['allowedDataStorageLocations'];
        }
        if (isset($data['allowedInboundDataTransferSources'])) {
            $this->allowedInboundDataTransferSources = is_array($data['allowedInboundDataTransferSources']) ? new ManagedAppDataTransferLevel($data['allowedInboundDataTransferSources']) : $data['allowedInboundDataTransferSources'];
        }
        if (isset($data['allowedOutboundClipboardSharingLevel'])) {
            $this->allowedOutboundClipboardSharingLevel = is_array($data['allowedOutboundClipboardSharingLevel']) ? new ManagedAppClipboardSharingLevel($data['allowedOutboundClipboardSharingLevel']) : $data['allowedOutboundClipboardSharingLevel'];
        }
        if (isset($data['allowedOutboundDataTransferDestinations'])) {
            $this->allowedOutboundDataTransferDestinations = is_array($data['allowedOutboundDataTransferDestinations']) ? new ManagedAppDataTransferLevel($data['allowedOutboundDataTransferDestinations']) : $data['allowedOutboundDataTransferDestinations'];
        }
        if (isset($data['contactSyncBlocked'])) {
            $this->contactSyncBlocked = $data['contactSyncBlocked'];
        }
        if (isset($data['dataBackupBlocked'])) {
            $this->dataBackupBlocked = $data['dataBackupBlocked'];
        }
        if (isset($data['deviceComplianceRequired'])) {
            $this->deviceComplianceRequired = $data['deviceComplianceRequired'];
        }
        if (isset($data['disableAppPinIfDevicePinIsSet'])) {
            $this->disableAppPinIfDevicePinIsSet = $data['disableAppPinIfDevicePinIsSet'];
        }
        if (isset($data['fingerprintBlocked'])) {
            $this->fingerprintBlocked = $data['fingerprintBlocked'];
        }
        if (isset($data['managedBrowser'])) {
            $this->managedBrowser = is_array($data['managedBrowser']) ? new ManagedBrowserType($data['managedBrowser']) : $data['managedBrowser'];
        }
        if (isset($data['managedBrowserToOpenLinksRequired'])) {
            $this->managedBrowserToOpenLinksRequired = $data['managedBrowserToOpenLinksRequired'];
        }
        if (isset($data['maximumPinRetries'])) {
            $this->maximumPinRetries = $data['maximumPinRetries'];
        }
        if (isset($data['minimumPinLength'])) {
            $this->minimumPinLength = $data['minimumPinLength'];
        }
        if (isset($data['minimumRequiredAppVersion'])) {
            $this->minimumRequiredAppVersion = $data['minimumRequiredAppVersion'];
        }
        if (isset($data['minimumRequiredOsVersion'])) {
            $this->minimumRequiredOsVersion = $data['minimumRequiredOsVersion'];
        }
        if (isset($data['minimumWarningAppVersion'])) {
            $this->minimumWarningAppVersion = $data['minimumWarningAppVersion'];
        }
        if (isset($data['minimumWarningOsVersion'])) {
            $this->minimumWarningOsVersion = $data['minimumWarningOsVersion'];
        }
        if (isset($data['organizationalCredentialsRequired'])) {
            $this->organizationalCredentialsRequired = $data['organizationalCredentialsRequired'];
        }
        if (isset($data['periodBeforePinReset'])) {
            $this->periodBeforePinReset = $data['periodBeforePinReset'];
        }
        if (isset($data['periodOfflineBeforeAccessCheck'])) {
            $this->periodOfflineBeforeAccessCheck = $data['periodOfflineBeforeAccessCheck'];
        }
        if (isset($data['periodOfflineBeforeWipeIsEnforced'])) {
            $this->periodOfflineBeforeWipeIsEnforced = $data['periodOfflineBeforeWipeIsEnforced'];
        }
        if (isset($data['periodOnlineBeforeAccessCheck'])) {
            $this->periodOnlineBeforeAccessCheck = $data['periodOnlineBeforeAccessCheck'];
        }
        if (isset($data['pinCharacterSet'])) {
            $this->pinCharacterSet = is_array($data['pinCharacterSet']) ? new ManagedAppPinCharacterSet($data['pinCharacterSet']) : $data['pinCharacterSet'];
        }
        if (isset($data['pinRequired'])) {
            $this->pinRequired = $data['pinRequired'];
        }
        if (isset($data['printBlocked'])) {
            $this->printBlocked = $data['printBlocked'];
        }
        if (isset($data['saveAsBlocked'])) {
            $this->saveAsBlocked = $data['saveAsBlocked'];
        }
        if (isset($data['simplePinBlocked'])) {
            $this->simplePinBlocked = $data['simplePinBlocked'];
        }
        if (isset($data['isAssigned'])) {
            $this->isAssigned = $data['isAssigned'];
        }
        if (isset($data['assignments'])) {
            $this->assignments = $data['assignments'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
