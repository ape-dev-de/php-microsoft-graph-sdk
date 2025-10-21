<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Device
 */
class Device
{
    public function __construct(
        /** true if the account is enabled; otherwise, false. Required. Default is true.  Supports $filter (eq, ne, not, in). Only callers with at least the Cloud Device Administrator role can set this property. */
        public ?bool $accountEnabled = null,
        /** For internal use only. Not nullable. Supports $filter (eq, not, ge, le). */
        public array $alternativeSecurityIds = [],
        /** The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. Supports $filter (eq, ne, not, ge, le, and eq on null values) and $orderby. */
        public ?\DateTimeInterface $approximateLastSignInDateTime = null,
        /** The timestamp when the device is no longer deemed compliant. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
        public ?\DateTimeInterface $complianceExpirationDateTime = null,
        /** User-defined property set by Intune to automatically add devices to groups and simplify managing devices. */
        public ?string $deviceCategory = null,
        /** Unique identifier set by Azure Device Registration Service at the time of registration. This alternate key can be used to reference the device object. Supports $filter (eq, ne, not, startsWith). */
        public ?string $deviceId = null,
        /** For internal use only. Set to null. */
        public ?string $deviceMetadata = null,
        /** Ownership of the device. Intune sets this property. Possible values are: unknown, company, personal. */
        public ?string $deviceOwnership = null,
        /** For internal use only. */
        public ?float $deviceVersion = null,
        /** The display name for the device. Maximum length is 256 characters. Required. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderby. */
        public ?string $displayName = null,
        /** Enrollment profile applied to the device. For example, Apple Device Enrollment Profile, Device enrollment - Corporate device identifiers, or Windows Autopilot profile name. This property is set by Intune. */
        public ?string $enrollmentProfileName = null,
        /** Enrollment type of the device. Intune sets this property. Possible values are: unknown, userEnrollment, deviceEnrollmentManager, appleBulkWithUser, appleBulkWithoutUser, windowsAzureADJoin, windowsBulkUserless, windowsAutoEnrollment, windowsBulkAzureDomainJoin, windowsCoManagement, windowsAzureADJoinUsingDeviceAuth,appleUserEnrollment, appleUserEnrollmentWithServiceAccount. NOTE: This property might return other values apart from those listed. */
        public ?string $enrollmentType = null,
        /** true if the device complies with Mobile Device Management (MDM) policies; otherwise, false. Read-only. This can only be updated by Intune for any device OS type or by an approved MDM app for Windows OS devices. Supports $filter (eq, ne, not). */
        public ?bool $isCompliant = null,
        /** true if the device is managed by a Mobile Device Management (MDM) app; otherwise, false. This can only be updated by Intune for any device OS type or by an approved MDM app for Windows OS devices. Supports $filter (eq, ne, not). */
        public ?bool $isManaged = null,
        /** Indicates whether the device is a member of a restricted management administrative unit. If not set, the default value is null and the default behavior is false. Read-only.  To manage a device that''s a member of a restricted management administrative unit, the administrator or calling app must be assigned a Microsoft Entra role at the scope of the restricted management administrative unit. Returned only on $select. */
        public ?bool $isManagementRestricted = null,
        /** true if the device is rooted or jail-broken. This property can only be updated by Intune. */
        public ?bool $isRooted = null,
        /** The management channel of the device. This property is set by Intune. Possible values are: eas, mdm, easMdm, intuneClient, easIntuneClient, configurationManagerClient, configurationManagerClientMdm, configurationManagerClientMdmEas, unknown, jamf, googleCloudDevicePolicyController. */
        public ?string $managementType = null,
        /** Manufacturer of the device. Read-only. */
        public ?string $manufacturer = null,
        /** Application identifier used to register device into MDM. Read-only. Supports $filter (eq, ne, not, startsWith). */
        public ?string $mdmAppId = null,
        /** Model of the device. Read-only. */
        public ?string $model = null,
        /** The last time at which the object was synced with the on-premises directory. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z Read-only. Supports $filter (eq, ne, not, ge, le, in). */
        public ?\DateTimeInterface $onPremisesLastSyncDateTime = null,
        /** The on-premises security identifier (SID) for the user who was synchronized from on-premises to the cloud. Read-only. Returned only on $select. Supports $filter (eq). */
        public ?string $onPremisesSecurityIdentifier = null,
        /** true if this object is synced from an on-premises directory; false if this object was originally synced from an on-premises directory but is no longer synced; null if this object has never been synced from an on-premises directory (default). Read-only. Supports $filter (eq, ne, not, in, and eq on null values). */
        public ?bool $onPremisesSyncEnabled = null,
        /** The type of operating system on the device. Required. Supports $filter (eq, ne, not, ge, le, startsWith, and eq on null values). */
        public ?string $operatingSystem = null,
        /** The version of the operating system on the device. Required. Supports $filter (eq, ne, not, ge, le, startsWith, and eq on null values). */
        public ?string $operatingSystemVersion = null,
        /** @var string[] For internal use only. Not nullable. Supports $filter (eq, not, ge, le, startsWith,/$count eq 0, /$count ne 0). */
        public array $physicalIds = [],
        /** The profile type of the device. Possible values: RegisteredDevice (default), SecureVM, Printer, Shared, IoT. */
        public ?string $profileType = null,
        /** Date and time of when the device was registered. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
        public ?\DateTimeInterface $registrationDateTime = null,
        /** @var string[] List of labels applied to the device by the system. Supports $filter (/$count eq 0, /$count ne 0). */
        public array $systemLabels = [],
        /** Type of trust for the joined device. Read-only. Possible values:  Workplace (indicates bring your own personal devices), AzureAd (Cloud-only joined devices), ServerAd (on-premises domain joined devices joined to Microsoft Entra ID). For more information, see Introduction to device management in Microsoft Entra ID. Supports $filter (eq, ne, not, in). */
        public ?string $trustType = null,
        /** The collection of open extensions defined for the device. Read-only. Nullable. */
        public array $extensions = [],
        /** Groups and administrative units that this device is a member of. Read-only. Nullable. Supports $expand. */
        public array $memberOf = [],
        /** The user that cloud joined the device or registered their personal device. The registered owner is set at the time of registration. Read-only. Nullable. Supports $expand. */
        public array $registeredOwners = [],
        /** Collection of registered users of the device. For cloud joined devices and registered personal devices, registered users are set to the same value as registered owners at the time of registration. Read-only. Nullable. Supports $expand. */
        public array $registeredUsers = [],
        /** @var string[] Groups and administrative units that the device is a member of. This operation is transitive. Supports $expand. */
        public array $transitiveMemberOf = []
    ) {}
}
