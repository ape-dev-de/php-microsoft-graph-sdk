<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Device
 */
class Device
{
    /**
     * true if the account is enabled; otherwise, false. Required. Default is true.  Supports $filter (eq, ne, not, in). Only callers with at least the Cloud Device Administrator role can set this property.
     */
    private ?bool $accountEnabled;

    /**
     * For internal use only. Not nullable. Supports $filter (eq, not, ge, le).
     */
    private array $alternativeSecurityIds = [];

    /**
     * The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. Supports $filter (eq, ne, not, ge, le, and eq on null values) and $orderby.
     */
    private ?\DateTimeInterface $approximateLastSignInDateTime;

    /**
     * The timestamp when the device is no longer deemed compliant. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     */
    private ?\DateTimeInterface $complianceExpirationDateTime;

    /**
     * User-defined property set by Intune to automatically add devices to groups and simplify managing devices.
     */
    private ?string $deviceCategory;

    /**
     * Unique identifier set by Azure Device Registration Service at the time of registration. This alternate key can be used to reference the device object. Supports $filter (eq, ne, not, startsWith).
     */
    private ?string $deviceId;

    /**
     * For internal use only. Set to null.
     */
    private ?string $deviceMetadata;

    /**
     * Ownership of the device. Intune sets this property. Possible values are: unknown, company, personal.
     */
    private ?string $deviceOwnership;

    /**
     * For internal use only.
     */
    private ?float $deviceVersion;

    /**
     * The display name for the device. Maximum length is 256 characters. Required. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderby.
     */
    private ?string $displayName;

    /**
     * Enrollment profile applied to the device. For example, Apple Device Enrollment Profile, Device enrollment - Corporate device identifiers, or Windows Autopilot profile name. This property is set by Intune.
     */
    private ?string $enrollmentProfileName;

    /**
     * Enrollment type of the device. Intune sets this property. Possible values are: unknown, userEnrollment, deviceEnrollmentManager, appleBulkWithUser, appleBulkWithoutUser, windowsAzureADJoin, windowsBulkUserless, windowsAutoEnrollment, windowsBulkAzureDomainJoin, windowsCoManagement, windowsAzureADJoinUsingDeviceAuth,appleUserEnrollment, appleUserEnrollmentWithServiceAccount. NOTE: This property might return other values apart from those listed.
     */
    private ?string $enrollmentType;

    /**
     * true if the device complies with Mobile Device Management (MDM) policies; otherwise, false. Read-only. This can only be updated by Intune for any device OS type or by an approved MDM app for Windows OS devices. Supports $filter (eq, ne, not).
     */
    private ?bool $isCompliant;

    /**
     * true if the device is managed by a Mobile Device Management (MDM) app; otherwise, false. This can only be updated by Intune for any device OS type or by an approved MDM app for Windows OS devices. Supports $filter (eq, ne, not).
     */
    private ?bool $isManaged;

    /**
     * Indicates whether the device is a member of a restricted management administrative unit. If not set, the default value is null and the default behavior is false. Read-only.  To manage a device that''s a member of a restricted management administrative unit, the administrator or calling app must be assigned a Microsoft Entra role at the scope of the restricted management administrative unit. Returned only on $select.
     */
    private ?bool $isManagementRestricted;

    /**
     * true if the device is rooted or jail-broken. This property can only be updated by Intune.
     */
    private ?bool $isRooted;

    /**
     * The management channel of the device. This property is set by Intune. Possible values are: eas, mdm, easMdm, intuneClient, easIntuneClient, configurationManagerClient, configurationManagerClientMdm, configurationManagerClientMdmEas, unknown, jamf, googleCloudDevicePolicyController.
     */
    private ?string $managementType;

    /**
     * Manufacturer of the device. Read-only.
     */
    private ?string $manufacturer;

    /**
     * Application identifier used to register device into MDM. Read-only. Supports $filter (eq, ne, not, startsWith).
     */
    private ?string $mdmAppId;

    /**
     * Model of the device. Read-only.
     */
    private ?string $model;

    /**
     * The last time at which the object was synced with the on-premises directory. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z Read-only. Supports $filter (eq, ne, not, ge, le, in).
     */
    private ?\DateTimeInterface $onPremisesLastSyncDateTime;

    /**
     * The on-premises security identifier (SID) for the user who was synchronized from on-premises to the cloud. Read-only. Returned only on $select. Supports $filter (eq).
     */
    private ?string $onPremisesSecurityIdentifier;

    /**
     * true if this object is synced from an on-premises directory; false if this object was originally synced from an on-premises directory but is no longer synced; null if this object has never been synced from an on-premises directory (default). Read-only. Supports $filter (eq, ne, not, in, and eq on null values).
     */
    private ?bool $onPremisesSyncEnabled;

    /**
     * The type of operating system on the device. Required. Supports $filter (eq, ne, not, ge, le, startsWith, and eq on null values).
     */
    private ?string $operatingSystem;

    /**
     * The version of the operating system on the device. Required. Supports $filter (eq, ne, not, ge, le, startsWith, and eq on null values).
     */
    private ?string $operatingSystemVersion;

    /**
     * For internal use only. Not nullable. Supports $filter (eq, not, ge, le, startsWith,/$count eq 0, /$count ne 0).
     * @var string[]
     */
    private array $physicalIds = [];

    /**
     * The profile type of the device. Possible values: RegisteredDevice (default), SecureVM, Printer, Shared, IoT.
     */
    private ?string $profileType;

    /**
     * Date and time of when the device was registered. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     */
    private ?\DateTimeInterface $registrationDateTime;

    /**
     * List of labels applied to the device by the system. Supports $filter (/$count eq 0, /$count ne 0).
     * @var string[]
     */
    private array $systemLabels = [];

    /**
     * Type of trust for the joined device. Read-only. Possible values:  Workplace (indicates bring your own personal devices), AzureAd (Cloud-only joined devices), ServerAd (on-premises domain joined devices joined to Microsoft Entra ID). For more information, see Introduction to device management in Microsoft Entra ID. Supports $filter (eq, ne, not, in).
     */
    private ?string $trustType;

    /**
     * The collection of open extensions defined for the device. Read-only. Nullable.
     */
    private array $extensions = [];

    /**
     * Groups and administrative units that this device is a member of. Read-only. Nullable. Supports $expand.
     */
    private array $memberOf = [];

    /**
     * The user that cloud joined the device or registered their personal device. The registered owner is set at the time of registration. Read-only. Nullable. Supports $expand.
     */
    private array $registeredOwners = [];

    /**
     * Collection of registered users of the device. For cloud joined devices and registered personal devices, registered users are set to the same value as registered owners at the time of registration. Read-only. Nullable. Supports $expand.
     */
    private array $registeredUsers = [];

    /**
     * Groups and administrative units that the device is a member of. This operation is transitive. Supports $expand.
     * @var string[]
     */
    private array $transitiveMemberOf = [];


    public function getAccountEnabled(): ?bool
    {
        return $this->accountEnabled;
    }

    public function setAccountEnabled(?bool $accountEnabled): self
    {
        $this->accountEnabled = $accountEnabled;
        return $this;
    }

    public function getAlternativeSecurityIds(): array
    {
        return $this->alternativeSecurityIds;
    }

    public function setAlternativeSecurityIds(array $alternativeSecurityIds): self
    {
        $this->alternativeSecurityIds = $alternativeSecurityIds;
        return $this;
    }

    public function getApproximateLastSignInDateTime(): ?\DateTimeInterface
    {
        return $this->approximateLastSignInDateTime;
    }

    public function setApproximateLastSignInDateTime(?\DateTimeInterface $approximateLastSignInDateTime): self
    {
        $this->approximateLastSignInDateTime = $approximateLastSignInDateTime;
        return $this;
    }

    public function getComplianceExpirationDateTime(): ?\DateTimeInterface
    {
        return $this->complianceExpirationDateTime;
    }

    public function setComplianceExpirationDateTime(?\DateTimeInterface $complianceExpirationDateTime): self
    {
        $this->complianceExpirationDateTime = $complianceExpirationDateTime;
        return $this;
    }

    public function getDeviceCategory(): ?string
    {
        return $this->deviceCategory;
    }

    public function setDeviceCategory(?string $deviceCategory): self
    {
        $this->deviceCategory = $deviceCategory;
        return $this;
    }

    public function getDeviceId(): ?string
    {
        return $this->deviceId;
    }

    public function setDeviceId(?string $deviceId): self
    {
        $this->deviceId = $deviceId;
        return $this;
    }

    public function getDeviceMetadata(): ?string
    {
        return $this->deviceMetadata;
    }

    public function setDeviceMetadata(?string $deviceMetadata): self
    {
        $this->deviceMetadata = $deviceMetadata;
        return $this;
    }

    public function getDeviceOwnership(): ?string
    {
        return $this->deviceOwnership;
    }

    public function setDeviceOwnership(?string $deviceOwnership): self
    {
        $this->deviceOwnership = $deviceOwnership;
        return $this;
    }

    public function getDeviceVersion(): ?float
    {
        return $this->deviceVersion;
    }

    public function setDeviceVersion(?float $deviceVersion): self
    {
        $this->deviceVersion = $deviceVersion;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getEnrollmentProfileName(): ?string
    {
        return $this->enrollmentProfileName;
    }

    public function setEnrollmentProfileName(?string $enrollmentProfileName): self
    {
        $this->enrollmentProfileName = $enrollmentProfileName;
        return $this;
    }

    public function getEnrollmentType(): ?string
    {
        return $this->enrollmentType;
    }

    public function setEnrollmentType(?string $enrollmentType): self
    {
        $this->enrollmentType = $enrollmentType;
        return $this;
    }

    public function getIsCompliant(): ?bool
    {
        return $this->isCompliant;
    }

    public function setIsCompliant(?bool $isCompliant): self
    {
        $this->isCompliant = $isCompliant;
        return $this;
    }

    public function getIsManaged(): ?bool
    {
        return $this->isManaged;
    }

    public function setIsManaged(?bool $isManaged): self
    {
        $this->isManaged = $isManaged;
        return $this;
    }

    public function getIsManagementRestricted(): ?bool
    {
        return $this->isManagementRestricted;
    }

    public function setIsManagementRestricted(?bool $isManagementRestricted): self
    {
        $this->isManagementRestricted = $isManagementRestricted;
        return $this;
    }

    public function getIsRooted(): ?bool
    {
        return $this->isRooted;
    }

    public function setIsRooted(?bool $isRooted): self
    {
        $this->isRooted = $isRooted;
        return $this;
    }

    public function getManagementType(): ?string
    {
        return $this->managementType;
    }

    public function setManagementType(?string $managementType): self
    {
        $this->managementType = $managementType;
        return $this;
    }

    public function getManufacturer(): ?string
    {
        return $this->manufacturer;
    }

    public function setManufacturer(?string $manufacturer): self
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    public function getMdmAppId(): ?string
    {
        return $this->mdmAppId;
    }

    public function setMdmAppId(?string $mdmAppId): self
    {
        $this->mdmAppId = $mdmAppId;
        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(?string $model): self
    {
        $this->model = $model;
        return $this;
    }

    public function getOnPremisesLastSyncDateTime(): ?\DateTimeInterface
    {
        return $this->onPremisesLastSyncDateTime;
    }

    public function setOnPremisesLastSyncDateTime(?\DateTimeInterface $onPremisesLastSyncDateTime): self
    {
        $this->onPremisesLastSyncDateTime = $onPremisesLastSyncDateTime;
        return $this;
    }

    public function getOnPremisesSecurityIdentifier(): ?string
    {
        return $this->onPremisesSecurityIdentifier;
    }

    public function setOnPremisesSecurityIdentifier(?string $onPremisesSecurityIdentifier): self
    {
        $this->onPremisesSecurityIdentifier = $onPremisesSecurityIdentifier;
        return $this;
    }

    public function getOnPremisesSyncEnabled(): ?bool
    {
        return $this->onPremisesSyncEnabled;
    }

    public function setOnPremisesSyncEnabled(?bool $onPremisesSyncEnabled): self
    {
        $this->onPremisesSyncEnabled = $onPremisesSyncEnabled;
        return $this;
    }

    public function getOperatingSystem(): ?string
    {
        return $this->operatingSystem;
    }

    public function setOperatingSystem(?string $operatingSystem): self
    {
        $this->operatingSystem = $operatingSystem;
        return $this;
    }

    public function getOperatingSystemVersion(): ?string
    {
        return $this->operatingSystemVersion;
    }

    public function setOperatingSystemVersion(?string $operatingSystemVersion): self
    {
        $this->operatingSystemVersion = $operatingSystemVersion;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getPhysicalIds(): array
    {
        return $this->physicalIds;
    }

    /**
     * @param string[] $physicalIds
     */
    public function setPhysicalIds(array $physicalIds): self
    {
        $this->physicalIds = $physicalIds;
        return $this;
    }

    public function getProfileType(): ?string
    {
        return $this->profileType;
    }

    public function setProfileType(?string $profileType): self
    {
        $this->profileType = $profileType;
        return $this;
    }

    public function getRegistrationDateTime(): ?\DateTimeInterface
    {
        return $this->registrationDateTime;
    }

    public function setRegistrationDateTime(?\DateTimeInterface $registrationDateTime): self
    {
        $this->registrationDateTime = $registrationDateTime;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSystemLabels(): array
    {
        return $this->systemLabels;
    }

    /**
     * @param string[] $systemLabels
     */
    public function setSystemLabels(array $systemLabels): self
    {
        $this->systemLabels = $systemLabels;
        return $this;
    }

    public function getTrustType(): ?string
    {
        return $this->trustType;
    }

    public function setTrustType(?string $trustType): self
    {
        $this->trustType = $trustType;
        return $this;
    }

    public function getExtensions(): array
    {
        return $this->extensions;
    }

    public function setExtensions(array $extensions): self
    {
        $this->extensions = $extensions;
        return $this;
    }

    public function getMemberOf(): array
    {
        return $this->memberOf;
    }

    public function setMemberOf(array $memberOf): self
    {
        $this->memberOf = $memberOf;
        return $this;
    }

    public function getRegisteredOwners(): array
    {
        return $this->registeredOwners;
    }

    public function setRegisteredOwners(array $registeredOwners): self
    {
        $this->registeredOwners = $registeredOwners;
        return $this;
    }

    public function getRegisteredUsers(): array
    {
        return $this->registeredUsers;
    }

    public function setRegisteredUsers(array $registeredUsers): self
    {
        $this->registeredUsers = $registeredUsers;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTransitiveMemberOf(): array
    {
        return $this->transitiveMemberOf;
    }

    /**
     * @param string[] $transitiveMemberOf
     */
    public function setTransitiveMemberOf(array $transitiveMemberOf): self
    {
        $this->transitiveMemberOf = $transitiveMemberOf;
        return $this;
    }

}
