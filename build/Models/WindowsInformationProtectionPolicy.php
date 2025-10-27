<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsInformationProtectionPolicy
 */
class WindowsInformationProtectionPolicy
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

    /** Specifies whether to allow Azure RMS encryption for WIP */
    public ?bool $azureRightsManagementServicesAllowed = null;

    /** 
     * Specifies a recovery certificate that can be used for data recovery of encrypted files. This is the same as the data recovery agent(DRA) certificate for encrypting file system(EFS)
     * @var WindowsInformationProtectionDataRecoveryCertificate|\stdClass|null
     */
    public WindowsInformationProtectionDataRecoveryCertificate|\stdClass|null $dataRecoveryCertificate = null;

    /**  */
    public ?WindowsInformationProtectionEnforcementLevel $enforcementLevel = null;

    /** Primary enterprise domain */
    public ?string $enterpriseDomain = null;

    /** 
     * This is the comma-separated list of internal proxy servers. For example, '157.54.14.28, 157.54.11.118, 10.202.14.167, 157.53.14.163, 157.69.210.59'. These proxies have been configured by the admin to connect to specific resources on the Internet. They are considered to be enterprise network locations. The proxies are only leveraged in configuring the EnterpriseProxiedDomains policy to force traffic to the matched domains through these proxies
     * @var WindowsInformationProtectionResourceCollection[]
     */
    public array $enterpriseInternalProxyServers = [];

    /** 
     * Sets the enterprise IP ranges that define the computers in the enterprise network. Data that comes from those computers will be considered part of the enterprise and protected. These locations will be considered a safe destination for enterprise data to be shared to
     * @var WindowsInformationProtectionIPRangeCollection[]
     */
    public array $enterpriseIPRanges = [];

    /** Boolean value that tells the client to accept the configured list and not to use heuristics to attempt to find other subnets. Default is false */
    public ?bool $enterpriseIPRangesAreAuthoritative = null;

    /** 
     * This is the list of domains that comprise the boundaries of the enterprise. Data from one of these domains that is sent to a device will be considered enterprise data and protected These locations will be considered a safe destination for enterprise data to be shared to
     * @var WindowsInformationProtectionResourceCollection[]
     */
    public array $enterpriseNetworkDomainNames = [];

    /** 
     * List of enterprise domains to be protected
     * @var WindowsInformationProtectionResourceCollection[]
     */
    public array $enterpriseProtectedDomainNames = [];

    /** 
     * Contains a list of Enterprise resource domains hosted in the cloud that need to be protected. Connections to these resources are considered enterprise data. If a proxy is paired with a cloud resource, traffic to the cloud resource will be routed through the enterprise network via the denoted proxy server (on Port 80). A proxy server used for this purpose must also be configured using the EnterpriseInternalProxyServers policy
     * @var WindowsInformationProtectionProxiedDomainCollection[]
     */
    public array $enterpriseProxiedDomains = [];

    /** 
     * This is a list of proxy servers. Any server not on this list is considered non-enterprise
     * @var WindowsInformationProtectionResourceCollection[]
     */
    public array $enterpriseProxyServers = [];

    /** Boolean value that tells the client to accept the configured list of proxies and not try to detect other work proxies. Default is false */
    public ?bool $enterpriseProxyServersAreAuthoritative = null;

    /** 
     * Exempt applications can also access enterprise data, but the data handled by those applications are not protected. This is because some critical enterprise applications may have compatibility problems with encrypted data.
     * @var WindowsInformationProtectionApp[]
     */
    public array $exemptApps = [];

    /** Determines whether overlays are added to icons for WIP protected files in Explorer and enterprise only app tiles in the Start menu. Starting in Windows 10, version 1703 this setting also configures the visibility of the WIP icon in the title bar of a WIP-protected app */
    public ?bool $iconsVisible = null;

    /** This switch is for the Windows Search Indexer, to allow or disallow indexing of items */
    public ?bool $indexingEncryptedStoresOrItemsBlocked = null;

    /** Indicates if the policy is deployed to any inclusion groups or not. */
    public ?bool $isAssigned = null;

    /** 
     * List of domain names that can used for work or personal resource
     * @var WindowsInformationProtectionResourceCollection[]
     */
    public array $neutralDomainResources = [];

    /** 
     * Protected applications can access enterprise data and the data handled by those applications are protected with encryption
     * @var WindowsInformationProtectionApp[]
     */
    public array $protectedApps = [];

    /** Specifies whether the protection under lock feature (also known as encrypt under pin) should be configured */
    public ?bool $protectionUnderLockConfigRequired = null;

    /** This policy controls whether to revoke the WIP keys when a device unenrolls from the management service. If set to 1 (Don't revoke keys), the keys will not be revoked and the user will continue to have access to protected files after unenrollment. If the keys are not revoked, there will be no revoked file cleanup subsequently. */
    public ?bool $revokeOnUnenrollDisabled = null;

    /** TemplateID GUID to use for RMS encryption. The RMS template allows the IT admin to configure the details about who has access to RMS-protected file and how long they have access */
    public ?string $rightsManagementServicesTemplateId = null;

    /** 
     * Specifies a list of file extensions, so that files with these extensions are encrypted when copying from an SMB share within the corporate boundary
     * @var WindowsInformationProtectionResourceCollection[]
     */
    public array $smbAutoEncryptedFileExtensions = [];

    /** 
     * Navigation property to list of security groups targeted for policy.
     * @var TargetedManagedAppPolicyAssignment[]
     */
    public array $assignments = [];

    /** 
     * Another way to input exempt apps through xml files
     * @var WindowsInformationProtectionAppLockerFile[]
     */
    public array $exemptAppLockerFiles = [];

    /** 
     * Another way to input protected apps through xml files
     * @var WindowsInformationProtectionAppLockerFile[]
     */
    public array $protectedAppLockerFiles = [];

    /** Offline interval before app data is wiped (days) */
    public ?float $daysWithoutContactBeforeUnenroll = null;

    /** Enrollment url for the MDM */
    public ?string $mdmEnrollmentUrl = null;

    /** Specifies the maximum amount of time (in minutes) allowed after the device is idle that will cause the device to become PIN or password locked.   Range is an integer X where 0 <= X <= 999. */
    public ?float $minutesOfInactivityBeforeDeviceLock = null;

    /** Integer value that specifies the number of past PINs that can be associated to a user account that can't be reused. The largest number you can configure for this policy setting is 50. The lowest number you can configure for this policy setting is 0. If this policy is set to 0, then storage of previous PINs is not required. This node was added in Windows 10, version 1511. Default is 0. */
    public ?float $numberOfPastPinsRemembered = null;

    /** The number of authentication failures allowed before the device will be wiped. A value of 0 disables device wipe functionality. Range is an integer X where 4 <= X <= 16 for desktop and 0 <= X <= 999 for mobile devices. */
    public ?float $passwordMaximumAttemptCount = null;

    /** Integer value specifies the period of time (in days) that a PIN can be used before the system requires the user to change it. The largest number you can configure for this policy setting is 730. The lowest number you can configure for this policy setting is 0. If this policy is set to 0, then the user's PIN will never expire. This node was added in Windows 10, version 1511. Default is 0. */
    public ?float $pinExpirationDays = null;

    /**  */
    public ?WindowsInformationProtectionPinCharacterRequirements $pinLowercaseLetters = null;

    /** Integer value that sets the minimum number of characters required for the PIN. Default value is 4. The lowest number you can configure for this policy setting is 4. The largest number you can configure must be less than the number configured in the Maximum PIN length policy setting or the number 127, whichever is the lowest. */
    public ?float $pinMinimumLength = null;

    /**  */
    public ?WindowsInformationProtectionPinCharacterRequirements $pinSpecialCharacters = null;

    /**  */
    public ?WindowsInformationProtectionPinCharacterRequirements $pinUppercaseLetters = null;

    /** New property in RS2, pending documentation */
    public ?bool $revokeOnMdmHandoffDisabled = null;

    /** Boolean value that sets Windows Hello for Business as a method for signing into Windows. */
    public ?bool $windowsHelloForBusinessBlocked = null;


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
        if (isset($data['azureRightsManagementServicesAllowed'])) {
            $this->azureRightsManagementServicesAllowed = is_bool($data['azureRightsManagementServicesAllowed']) ? $data['azureRightsManagementServicesAllowed'] : (bool)$data['azureRightsManagementServicesAllowed'];
        }
        if (isset($data['dataRecoveryCertificate'])) {
            $this->dataRecoveryCertificate = is_array($data['dataRecoveryCertificate']) ? new WindowsInformationProtectionDataRecoveryCertificate($data['dataRecoveryCertificate']) : $data['dataRecoveryCertificate'];
        }
        if (isset($data['enforcementLevel'])) {
            $this->enforcementLevel = is_array($data['enforcementLevel']) ? new WindowsInformationProtectionEnforcementLevel($data['enforcementLevel']) : $data['enforcementLevel'];
        }
        if (isset($data['enterpriseDomain'])) {
            $this->enterpriseDomain = $data['enterpriseDomain'];
        }
        if (isset($data['enterpriseInternalProxyServers'])) {
            $this->enterpriseInternalProxyServers = $data['enterpriseInternalProxyServers'];
        }
        if (isset($data['enterpriseIPRanges'])) {
            $this->enterpriseIPRanges = $data['enterpriseIPRanges'];
        }
        if (isset($data['enterpriseIPRangesAreAuthoritative'])) {
            $this->enterpriseIPRangesAreAuthoritative = is_bool($data['enterpriseIPRangesAreAuthoritative']) ? $data['enterpriseIPRangesAreAuthoritative'] : (bool)$data['enterpriseIPRangesAreAuthoritative'];
        }
        if (isset($data['enterpriseNetworkDomainNames'])) {
            $this->enterpriseNetworkDomainNames = $data['enterpriseNetworkDomainNames'];
        }
        if (isset($data['enterpriseProtectedDomainNames'])) {
            $this->enterpriseProtectedDomainNames = $data['enterpriseProtectedDomainNames'];
        }
        if (isset($data['enterpriseProxiedDomains'])) {
            $this->enterpriseProxiedDomains = $data['enterpriseProxiedDomains'];
        }
        if (isset($data['enterpriseProxyServers'])) {
            $this->enterpriseProxyServers = $data['enterpriseProxyServers'];
        }
        if (isset($data['enterpriseProxyServersAreAuthoritative'])) {
            $this->enterpriseProxyServersAreAuthoritative = is_bool($data['enterpriseProxyServersAreAuthoritative']) ? $data['enterpriseProxyServersAreAuthoritative'] : (bool)$data['enterpriseProxyServersAreAuthoritative'];
        }
        if (isset($data['exemptApps'])) {
            $this->exemptApps = $data['exemptApps'];
        }
        if (isset($data['iconsVisible'])) {
            $this->iconsVisible = is_bool($data['iconsVisible']) ? $data['iconsVisible'] : (bool)$data['iconsVisible'];
        }
        if (isset($data['indexingEncryptedStoresOrItemsBlocked'])) {
            $this->indexingEncryptedStoresOrItemsBlocked = is_bool($data['indexingEncryptedStoresOrItemsBlocked']) ? $data['indexingEncryptedStoresOrItemsBlocked'] : (bool)$data['indexingEncryptedStoresOrItemsBlocked'];
        }
        if (isset($data['isAssigned'])) {
            $this->isAssigned = is_bool($data['isAssigned']) ? $data['isAssigned'] : (bool)$data['isAssigned'];
        }
        if (isset($data['neutralDomainResources'])) {
            $this->neutralDomainResources = $data['neutralDomainResources'];
        }
        if (isset($data['protectedApps'])) {
            $this->protectedApps = $data['protectedApps'];
        }
        if (isset($data['protectionUnderLockConfigRequired'])) {
            $this->protectionUnderLockConfigRequired = is_bool($data['protectionUnderLockConfigRequired']) ? $data['protectionUnderLockConfigRequired'] : (bool)$data['protectionUnderLockConfigRequired'];
        }
        if (isset($data['revokeOnUnenrollDisabled'])) {
            $this->revokeOnUnenrollDisabled = is_bool($data['revokeOnUnenrollDisabled']) ? $data['revokeOnUnenrollDisabled'] : (bool)$data['revokeOnUnenrollDisabled'];
        }
        if (isset($data['rightsManagementServicesTemplateId'])) {
            $this->rightsManagementServicesTemplateId = $data['rightsManagementServicesTemplateId'];
        }
        if (isset($data['smbAutoEncryptedFileExtensions'])) {
            $this->smbAutoEncryptedFileExtensions = $data['smbAutoEncryptedFileExtensions'];
        }
        if (isset($data['assignments'])) {
            $this->assignments = $data['assignments'];
        }
        if (isset($data['exemptAppLockerFiles'])) {
            $this->exemptAppLockerFiles = $data['exemptAppLockerFiles'];
        }
        if (isset($data['protectedAppLockerFiles'])) {
            $this->protectedAppLockerFiles = $data['protectedAppLockerFiles'];
        }
        if (isset($data['daysWithoutContactBeforeUnenroll'])) {
            $this->daysWithoutContactBeforeUnenroll = is_numeric($data['daysWithoutContactBeforeUnenroll']) ? (float)$data['daysWithoutContactBeforeUnenroll'] : $data['daysWithoutContactBeforeUnenroll'];
        }
        if (isset($data['mdmEnrollmentUrl'])) {
            $this->mdmEnrollmentUrl = $data['mdmEnrollmentUrl'];
        }
        if (isset($data['minutesOfInactivityBeforeDeviceLock'])) {
            $this->minutesOfInactivityBeforeDeviceLock = is_numeric($data['minutesOfInactivityBeforeDeviceLock']) ? (float)$data['minutesOfInactivityBeforeDeviceLock'] : $data['minutesOfInactivityBeforeDeviceLock'];
        }
        if (isset($data['numberOfPastPinsRemembered'])) {
            $this->numberOfPastPinsRemembered = is_numeric($data['numberOfPastPinsRemembered']) ? (float)$data['numberOfPastPinsRemembered'] : $data['numberOfPastPinsRemembered'];
        }
        if (isset($data['passwordMaximumAttemptCount'])) {
            $this->passwordMaximumAttemptCount = is_numeric($data['passwordMaximumAttemptCount']) ? (float)$data['passwordMaximumAttemptCount'] : $data['passwordMaximumAttemptCount'];
        }
        if (isset($data['pinExpirationDays'])) {
            $this->pinExpirationDays = is_numeric($data['pinExpirationDays']) ? (float)$data['pinExpirationDays'] : $data['pinExpirationDays'];
        }
        if (isset($data['pinLowercaseLetters'])) {
            $this->pinLowercaseLetters = is_array($data['pinLowercaseLetters']) ? new WindowsInformationProtectionPinCharacterRequirements($data['pinLowercaseLetters']) : $data['pinLowercaseLetters'];
        }
        if (isset($data['pinMinimumLength'])) {
            $this->pinMinimumLength = is_numeric($data['pinMinimumLength']) ? (float)$data['pinMinimumLength'] : $data['pinMinimumLength'];
        }
        if (isset($data['pinSpecialCharacters'])) {
            $this->pinSpecialCharacters = is_array($data['pinSpecialCharacters']) ? new WindowsInformationProtectionPinCharacterRequirements($data['pinSpecialCharacters']) : $data['pinSpecialCharacters'];
        }
        if (isset($data['pinUppercaseLetters'])) {
            $this->pinUppercaseLetters = is_array($data['pinUppercaseLetters']) ? new WindowsInformationProtectionPinCharacterRequirements($data['pinUppercaseLetters']) : $data['pinUppercaseLetters'];
        }
        if (isset($data['revokeOnMdmHandoffDisabled'])) {
            $this->revokeOnMdmHandoffDisabled = is_bool($data['revokeOnMdmHandoffDisabled']) ? $data['revokeOnMdmHandoffDisabled'] : (bool)$data['revokeOnMdmHandoffDisabled'];
        }
        if (isset($data['windowsHelloForBusinessBlocked'])) {
            $this->windowsHelloForBusinessBlocked = is_bool($data['windowsHelloForBusinessBlocked']) ? $data['windowsHelloForBusinessBlocked'] : (bool)$data['windowsHelloForBusinessBlocked'];
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
