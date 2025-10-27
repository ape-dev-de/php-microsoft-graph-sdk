<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DefaultManagedAppProtection
 */
class DefaultManagedAppProtection
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

    /**  */
    public ?ManagedAppDataEncryptionType $appDataEncryptionType = null;

    /** 
     * A set of string key and string value pairs to be sent to the affected users, unalterned by this service
     * @var KeyValuePair[]
     */
    public array $customSettings = [];

    /** Count of apps to which the current policy is deployed. */
    public ?float $deployedAppCount = null;

    /** When this setting is enabled, app level encryption is disabled if device level encryption is enabled. (Android only) */
    public ?bool $disableAppEncryptionIfDeviceEncryptionIsEnabled = null;

    /** Indicates whether managed-app data should be encrypted. (Android only) */
    public ?bool $encryptAppData = null;

    /** Indicates whether use of the FaceID is allowed in place of a pin if PinRequired is set to True. (iOS Only) */
    public ?bool $faceIdBlocked = null;

    /** Define the oldest required Android security patch level a user can have to gain secure access to the app. (Android only) */
    public ?string $minimumRequiredPatchVersion = null;

    /** Versions less than the specified version will block the managed app from accessing company data. (iOS Only) */
    public ?string $minimumRequiredSdkVersion = null;

    /** Define the oldest recommended Android security patch level a user can have for secure access to the app. (Android only) */
    public ?string $minimumWarningPatchVersion = null;

    /** Indicates whether screen capture is blocked. (Android only) */
    public ?bool $screenCaptureBlocked = null;

    /** 
     * List of apps to which the policy is deployed.
     * @var ManagedMobileApp[]
     */
    public array $apps = [];

    /** 
     * Navigation property to deployment summary of the configuration.
     * @var ManagedAppPolicyDeploymentSummary|\stdClass|null
     */
    public ManagedAppPolicyDeploymentSummary|\stdClass|null $deploymentSummary = null;


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
            $this->allowedInboundDataTransferSources = is_string($data['allowedInboundDataTransferSources']) ? ManagedAppDataTransferLevel::tryFrom($data['allowedInboundDataTransferSources']) : $data['allowedInboundDataTransferSources'];
        }
        if (isset($data['allowedOutboundClipboardSharingLevel'])) {
            $this->allowedOutboundClipboardSharingLevel = is_string($data['allowedOutboundClipboardSharingLevel']) ? ManagedAppClipboardSharingLevel::tryFrom($data['allowedOutboundClipboardSharingLevel']) : $data['allowedOutboundClipboardSharingLevel'];
        }
        if (isset($data['allowedOutboundDataTransferDestinations'])) {
            $this->allowedOutboundDataTransferDestinations = is_string($data['allowedOutboundDataTransferDestinations']) ? ManagedAppDataTransferLevel::tryFrom($data['allowedOutboundDataTransferDestinations']) : $data['allowedOutboundDataTransferDestinations'];
        }
        if (isset($data['contactSyncBlocked'])) {
            $this->contactSyncBlocked = is_bool($data['contactSyncBlocked']) ? $data['contactSyncBlocked'] : (bool)$data['contactSyncBlocked'];
        }
        if (isset($data['dataBackupBlocked'])) {
            $this->dataBackupBlocked = is_bool($data['dataBackupBlocked']) ? $data['dataBackupBlocked'] : (bool)$data['dataBackupBlocked'];
        }
        if (isset($data['deviceComplianceRequired'])) {
            $this->deviceComplianceRequired = is_bool($data['deviceComplianceRequired']) ? $data['deviceComplianceRequired'] : (bool)$data['deviceComplianceRequired'];
        }
        if (isset($data['disableAppPinIfDevicePinIsSet'])) {
            $this->disableAppPinIfDevicePinIsSet = is_bool($data['disableAppPinIfDevicePinIsSet']) ? $data['disableAppPinIfDevicePinIsSet'] : (bool)$data['disableAppPinIfDevicePinIsSet'];
        }
        if (isset($data['fingerprintBlocked'])) {
            $this->fingerprintBlocked = is_bool($data['fingerprintBlocked']) ? $data['fingerprintBlocked'] : (bool)$data['fingerprintBlocked'];
        }
        if (isset($data['managedBrowser'])) {
            $this->managedBrowser = is_string($data['managedBrowser']) ? ManagedBrowserType::tryFrom($data['managedBrowser']) : $data['managedBrowser'];
        }
        if (isset($data['managedBrowserToOpenLinksRequired'])) {
            $this->managedBrowserToOpenLinksRequired = is_bool($data['managedBrowserToOpenLinksRequired']) ? $data['managedBrowserToOpenLinksRequired'] : (bool)$data['managedBrowserToOpenLinksRequired'];
        }
        if (isset($data['maximumPinRetries'])) {
            $this->maximumPinRetries = is_numeric($data['maximumPinRetries']) ? (float)$data['maximumPinRetries'] : $data['maximumPinRetries'];
        }
        if (isset($data['minimumPinLength'])) {
            $this->minimumPinLength = is_numeric($data['minimumPinLength']) ? (float)$data['minimumPinLength'] : $data['minimumPinLength'];
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
            $this->organizationalCredentialsRequired = is_bool($data['organizationalCredentialsRequired']) ? $data['organizationalCredentialsRequired'] : (bool)$data['organizationalCredentialsRequired'];
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
            $this->pinCharacterSet = is_string($data['pinCharacterSet']) ? ManagedAppPinCharacterSet::tryFrom($data['pinCharacterSet']) : $data['pinCharacterSet'];
        }
        if (isset($data['pinRequired'])) {
            $this->pinRequired = is_bool($data['pinRequired']) ? $data['pinRequired'] : (bool)$data['pinRequired'];
        }
        if (isset($data['printBlocked'])) {
            $this->printBlocked = is_bool($data['printBlocked']) ? $data['printBlocked'] : (bool)$data['printBlocked'];
        }
        if (isset($data['saveAsBlocked'])) {
            $this->saveAsBlocked = is_bool($data['saveAsBlocked']) ? $data['saveAsBlocked'] : (bool)$data['saveAsBlocked'];
        }
        if (isset($data['simplePinBlocked'])) {
            $this->simplePinBlocked = is_bool($data['simplePinBlocked']) ? $data['simplePinBlocked'] : (bool)$data['simplePinBlocked'];
        }
        if (isset($data['appDataEncryptionType'])) {
            $this->appDataEncryptionType = is_string($data['appDataEncryptionType']) ? ManagedAppDataEncryptionType::tryFrom($data['appDataEncryptionType']) : $data['appDataEncryptionType'];
        }
        if (isset($data['customSettings'])) {
            $this->customSettings = $data['customSettings'];
        }
        if (isset($data['deployedAppCount'])) {
            $this->deployedAppCount = is_numeric($data['deployedAppCount']) ? (float)$data['deployedAppCount'] : $data['deployedAppCount'];
        }
        if (isset($data['disableAppEncryptionIfDeviceEncryptionIsEnabled'])) {
            $this->disableAppEncryptionIfDeviceEncryptionIsEnabled = is_bool($data['disableAppEncryptionIfDeviceEncryptionIsEnabled']) ? $data['disableAppEncryptionIfDeviceEncryptionIsEnabled'] : (bool)$data['disableAppEncryptionIfDeviceEncryptionIsEnabled'];
        }
        if (isset($data['encryptAppData'])) {
            $this->encryptAppData = is_bool($data['encryptAppData']) ? $data['encryptAppData'] : (bool)$data['encryptAppData'];
        }
        if (isset($data['faceIdBlocked'])) {
            $this->faceIdBlocked = is_bool($data['faceIdBlocked']) ? $data['faceIdBlocked'] : (bool)$data['faceIdBlocked'];
        }
        if (isset($data['minimumRequiredPatchVersion'])) {
            $this->minimumRequiredPatchVersion = $data['minimumRequiredPatchVersion'];
        }
        if (isset($data['minimumRequiredSdkVersion'])) {
            $this->minimumRequiredSdkVersion = $data['minimumRequiredSdkVersion'];
        }
        if (isset($data['minimumWarningPatchVersion'])) {
            $this->minimumWarningPatchVersion = $data['minimumWarningPatchVersion'];
        }
        if (isset($data['screenCaptureBlocked'])) {
            $this->screenCaptureBlocked = is_bool($data['screenCaptureBlocked']) ? $data['screenCaptureBlocked'] : (bool)$data['screenCaptureBlocked'];
        }
        if (isset($data['apps'])) {
            $this->apps = $data['apps'];
        }
        if (isset($data['deploymentSummary'])) {
            $this->deploymentSummary = is_array($data['deploymentSummary']) ? new ManagedAppPolicyDeploymentSummary($data['deploymentSummary']) : $data['deploymentSummary'];
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
