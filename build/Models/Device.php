<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Device
 */
class Device
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Date and time when this object was deleted. Always null when the object hasn't been deleted. */
    public ?\DateTimeInterface $deletedDateTime = null;

    /** true if the account is enabled; otherwise, false. Required. Default is true.  Supports $filter (eq, ne, not, in). Only callers with at least the Cloud Device Administrator role can set this property. */
    public ?bool $accountEnabled = null;

    /** 
     * For internal use only. Not nullable. Supports $filter (eq, not, ge, le).
     * @var AlternativeSecurityId[]
     */
    public array $alternativeSecurityIds = [];

    /** The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. Supports $filter (eq, ne, not, ge, le, and eq on null values) and $orderby. */
    public ?\DateTimeInterface $approximateLastSignInDateTime = null;

    /** The timestamp when the device is no longer deemed compliant. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
    public ?\DateTimeInterface $complianceExpirationDateTime = null;

    /** User-defined property set by Intune to automatically add devices to groups and simplify managing devices. */
    public ?string $deviceCategory = null;

    /** Unique identifier set by Azure Device Registration Service at the time of registration. This alternate key can be used to reference the device object. Supports $filter (eq, ne, not, startsWith). */
    public ?string $deviceId = null;

    /** For internal use only. Set to null. */
    public ?string $deviceMetadata = null;

    /** Ownership of the device. Intune sets this property. Possible values are: unknown, company, personal. */
    public ?string $deviceOwnership = null;

    /** For internal use only. */
    public ?float $deviceVersion = null;

    /** The display name for the device. Maximum length is 256 characters. Required. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderby. */
    public ?string $displayName = null;

    /** Enrollment profile applied to the device. For example, Apple Device Enrollment Profile, Device enrollment - Corporate device identifiers, or Windows Autopilot profile name. This property is set by Intune. */
    public ?string $enrollmentProfileName = null;

    /** Enrollment type of the device. Intune sets this property. Possible values are: unknown, userEnrollment, deviceEnrollmentManager, appleBulkWithUser, appleBulkWithoutUser, windowsAzureADJoin, windowsBulkUserless, windowsAutoEnrollment, windowsBulkAzureDomainJoin, windowsCoManagement, windowsAzureADJoinUsingDeviceAuth,appleUserEnrollment, appleUserEnrollmentWithServiceAccount. NOTE: This property might return other values apart from those listed. */
    public ?string $enrollmentType = null;

    /** true if the device complies with Mobile Device Management (MDM) policies; otherwise, false. Read-only. This can only be updated by Intune for any device OS type or by an approved MDM app for Windows OS devices. Supports $filter (eq, ne, not). */
    public ?bool $isCompliant = null;

    /** true if the device is managed by a Mobile Device Management (MDM) app; otherwise, false. This can only be updated by Intune for any device OS type or by an approved MDM app for Windows OS devices. Supports $filter (eq, ne, not). */
    public ?bool $isManaged = null;

    /** Indicates whether the device is a member of a restricted management administrative unit. If not set, the default value is null and the default behavior is false. Read-only.  To manage a device that's a member of a restricted management administrative unit, the administrator or calling app must be assigned a Microsoft Entra role at the scope of the restricted management administrative unit. Returned only on $select. */
    public ?bool $isManagementRestricted = null;

    /** true if the device is rooted or jail-broken. This property can only be updated by Intune. */
    public ?bool $isRooted = null;

    /** The management channel of the device. This property is set by Intune. Possible values are: eas, mdm, easMdm, intuneClient, easIntuneClient, configurationManagerClient, configurationManagerClientMdm, configurationManagerClientMdmEas, unknown, jamf, googleCloudDevicePolicyController. */
    public ?string $managementType = null;

    /** Manufacturer of the device. Read-only. */
    public ?string $manufacturer = null;

    /** Application identifier used to register device into MDM. Read-only. Supports $filter (eq, ne, not, startsWith). */
    public ?string $mdmAppId = null;

    /** Model of the device. Read-only. */
    public ?string $model = null;

    /** The last time at which the object was synced with the on-premises directory. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z Read-only. Supports $filter (eq, ne, not, ge, le, in). */
    public ?\DateTimeInterface $onPremisesLastSyncDateTime = null;

    /** The on-premises security identifier (SID) for the user who was synchronized from on-premises to the cloud. Read-only. Returned only on $select. Supports $filter (eq). */
    public ?string $onPremisesSecurityIdentifier = null;

    /** true if this object is synced from an on-premises directory; false if this object was originally synced from an on-premises directory but is no longer synced; null if this object has never been synced from an on-premises directory (default). Read-only. Supports $filter (eq, ne, not, in, and eq on null values). */
    public ?bool $onPremisesSyncEnabled = null;

    /** The type of operating system on the device. Required. Supports $filter (eq, ne, not, ge, le, startsWith, and eq on null values). */
    public ?string $operatingSystem = null;

    /** The version of the operating system on the device. Required. Supports $filter (eq, ne, not, ge, le, startsWith, and eq on null values). */
    public ?string $operatingSystemVersion = null;

    /** 
     * For internal use only. Not nullable. Supports $filter (eq, not, ge, le, startsWith,/$count eq 0, /$count ne 0).
     * @var string[]
     */
    public array $physicalIds = [];

    /** The profile type of the device. Possible values: RegisteredDevice (default), SecureVM, Printer, Shared, IoT. */
    public ?string $profileType = null;

    /** Date and time of when the device was registered. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
    public ?\DateTimeInterface $registrationDateTime = null;

    /** 
     * List of labels applied to the device by the system. Supports $filter (/$count eq 0, /$count ne 0).
     * @var string[]
     */
    public array $systemLabels = [];

    /** Type of trust for the joined device. Read-only. Possible values:  Workplace (indicates bring your own personal devices), AzureAd (Cloud-only joined devices), ServerAd (on-premises domain joined devices joined to Microsoft Entra ID). For more information, see Introduction to device management in Microsoft Entra ID. Supports $filter (eq, ne, not, in). */
    public ?string $trustType = null;

    /** 
     * The collection of open extensions defined for the device. Read-only. Nullable.
     * @var Extension[]
     */
    public array $extensions = [];

    /** 
     * Groups and administrative units that this device is a member of. Read-only. Nullable. Supports $expand.
     * @var DirectoryObject[]
     */
    public array $memberOf = [];

    /** 
     * The user that cloud joined the device or registered their personal device. The registered owner is set at the time of registration. Read-only. Nullable. Supports $expand.
     * @var DirectoryObject[]
     */
    public array $registeredOwners = [];

    /** 
     * Collection of registered users of the device. For cloud joined devices and registered personal devices, registered users are set to the same value as registered owners at the time of registration. Read-only. Nullable. Supports $expand.
     * @var DirectoryObject[]
     */
    public array $registeredUsers = [];

    /** 
     * Groups and administrative units that the device is a member of. This operation is transitive. Supports $expand.
     * @var DirectoryObject[]
     */
    public array $transitiveMemberOf = [];


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
        if (isset($data['deletedDateTime'])) {
            $this->deletedDateTime = is_string($data['deletedDateTime']) ? new \DateTimeImmutable($data['deletedDateTime']) : $data['deletedDateTime'];
        }
        if (isset($data['accountEnabled'])) {
            $this->accountEnabled = $data['accountEnabled'];
        }
        if (isset($data['alternativeSecurityIds'])) {
            $this->alternativeSecurityIds = $data['alternativeSecurityIds'];
        }
        if (isset($data['approximateLastSignInDateTime'])) {
            $this->approximateLastSignInDateTime = is_string($data['approximateLastSignInDateTime']) ? new \DateTimeImmutable($data['approximateLastSignInDateTime']) : $data['approximateLastSignInDateTime'];
        }
        if (isset($data['complianceExpirationDateTime'])) {
            $this->complianceExpirationDateTime = is_string($data['complianceExpirationDateTime']) ? new \DateTimeImmutable($data['complianceExpirationDateTime']) : $data['complianceExpirationDateTime'];
        }
        if (isset($data['deviceCategory'])) {
            $this->deviceCategory = $data['deviceCategory'];
        }
        if (isset($data['deviceId'])) {
            $this->deviceId = $data['deviceId'];
        }
        if (isset($data['deviceMetadata'])) {
            $this->deviceMetadata = $data['deviceMetadata'];
        }
        if (isset($data['deviceOwnership'])) {
            $this->deviceOwnership = $data['deviceOwnership'];
        }
        if (isset($data['deviceVersion'])) {
            $this->deviceVersion = $data['deviceVersion'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['enrollmentProfileName'])) {
            $this->enrollmentProfileName = $data['enrollmentProfileName'];
        }
        if (isset($data['enrollmentType'])) {
            $this->enrollmentType = $data['enrollmentType'];
        }
        if (isset($data['isCompliant'])) {
            $this->isCompliant = $data['isCompliant'];
        }
        if (isset($data['isManaged'])) {
            $this->isManaged = $data['isManaged'];
        }
        if (isset($data['isManagementRestricted'])) {
            $this->isManagementRestricted = $data['isManagementRestricted'];
        }
        if (isset($data['isRooted'])) {
            $this->isRooted = $data['isRooted'];
        }
        if (isset($data['managementType'])) {
            $this->managementType = $data['managementType'];
        }
        if (isset($data['manufacturer'])) {
            $this->manufacturer = $data['manufacturer'];
        }
        if (isset($data['mdmAppId'])) {
            $this->mdmAppId = $data['mdmAppId'];
        }
        if (isset($data['model'])) {
            $this->model = $data['model'];
        }
        if (isset($data['onPremisesLastSyncDateTime'])) {
            $this->onPremisesLastSyncDateTime = is_string($data['onPremisesLastSyncDateTime']) ? new \DateTimeImmutable($data['onPremisesLastSyncDateTime']) : $data['onPremisesLastSyncDateTime'];
        }
        if (isset($data['onPremisesSecurityIdentifier'])) {
            $this->onPremisesSecurityIdentifier = $data['onPremisesSecurityIdentifier'];
        }
        if (isset($data['onPremisesSyncEnabled'])) {
            $this->onPremisesSyncEnabled = $data['onPremisesSyncEnabled'];
        }
        if (isset($data['operatingSystem'])) {
            $this->operatingSystem = $data['operatingSystem'];
        }
        if (isset($data['operatingSystemVersion'])) {
            $this->operatingSystemVersion = $data['operatingSystemVersion'];
        }
        if (isset($data['physicalIds'])) {
            $this->physicalIds = $data['physicalIds'];
        }
        if (isset($data['profileType'])) {
            $this->profileType = $data['profileType'];
        }
        if (isset($data['registrationDateTime'])) {
            $this->registrationDateTime = is_string($data['registrationDateTime']) ? new \DateTimeImmutable($data['registrationDateTime']) : $data['registrationDateTime'];
        }
        if (isset($data['systemLabels'])) {
            $this->systemLabels = $data['systemLabels'];
        }
        if (isset($data['trustType'])) {
            $this->trustType = $data['trustType'];
        }
        if (isset($data['extensions'])) {
            $this->extensions = $data['extensions'];
        }
        if (isset($data['memberOf'])) {
            $this->memberOf = $data['memberOf'];
        }
        if (isset($data['registeredOwners'])) {
            $this->registeredOwners = $data['registeredOwners'];
        }
        if (isset($data['registeredUsers'])) {
            $this->registeredUsers = $data['registeredUsers'];
        }
        if (isset($data['transitiveMemberOf'])) {
            $this->transitiveMemberOf = $data['transitiveMemberOf'];
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
