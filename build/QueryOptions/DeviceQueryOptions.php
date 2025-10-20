<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Device resources
 *
 * Available select fields:
 * - accountEnabled
 * - alternativeSecurityIds
 * - approximateLastSignInDateTime
 * - complianceExpirationDateTime
 * - deviceCategory
 * - deviceId
 * - deviceMetadata
 * - deviceOwnership
 * - deviceVersion
 * - displayName
 * - enrollmentProfileName
 * - enrollmentType
 * - isCompliant
 * - isManaged
 * - isManagementRestricted
 * - isRooted
 * - managementType
 * - manufacturer
 * - mdmAppId
 * - model
 * - onPremisesLastSyncDateTime
 * - onPremisesSecurityIdentifier
 * - onPremisesSyncEnabled
 * - operatingSystem
 * - operatingSystemVersion
 * - physicalIds
 * - profileType
 * - registrationDateTime
 * - systemLabels
 * - trustType
 * - extensions
 * - memberOf
 * - registeredOwners
 * - registeredUsers
 * - transitiveMemberOf
 */
class DeviceQueryOptions extends QueryOptions
{
    public const FIELD_ACCOUNT_ENABLED = 'accountEnabled';
    public const FIELD_ALTERNATIVE_SECURITY_IDS = 'alternativeSecurityIds';
    public const FIELD_APPROXIMATE_LAST_SIGN_IN_DATE_TIME = 'approximateLastSignInDateTime';
    public const FIELD_COMPLIANCE_EXPIRATION_DATE_TIME = 'complianceExpirationDateTime';
    public const FIELD_DEVICE_CATEGORY = 'deviceCategory';
    public const FIELD_DEVICE_ID = 'deviceId';
    public const FIELD_DEVICE_METADATA = 'deviceMetadata';
    public const FIELD_DEVICE_OWNERSHIP = 'deviceOwnership';
    public const FIELD_DEVICE_VERSION = 'deviceVersion';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_ENROLLMENT_PROFILE_NAME = 'enrollmentProfileName';
    public const FIELD_ENROLLMENT_TYPE = 'enrollmentType';
    public const FIELD_IS_COMPLIANT = 'isCompliant';
    public const FIELD_IS_MANAGED = 'isManaged';
    public const FIELD_IS_MANAGEMENT_RESTRICTED = 'isManagementRestricted';
    public const FIELD_IS_ROOTED = 'isRooted';
    public const FIELD_MANAGEMENT_TYPE = 'managementType';
    public const FIELD_MANUFACTURER = 'manufacturer';
    public const FIELD_MDM_APP_ID = 'mdmAppId';
    public const FIELD_MODEL = 'model';
    public const FIELD_ON_PREMISES_LAST_SYNC_DATE_TIME = 'onPremisesLastSyncDateTime';
    public const FIELD_ON_PREMISES_SECURITY_IDENTIFIER = 'onPremisesSecurityIdentifier';
    public const FIELD_ON_PREMISES_SYNC_ENABLED = 'onPremisesSyncEnabled';
    public const FIELD_OPERATING_SYSTEM = 'operatingSystem';
    public const FIELD_OPERATING_SYSTEM_VERSION = 'operatingSystemVersion';
    public const FIELD_PHYSICAL_IDS = 'physicalIds';
    public const FIELD_PROFILE_TYPE = 'profileType';
    public const FIELD_REGISTRATION_DATE_TIME = 'registrationDateTime';
    public const FIELD_SYSTEM_LABELS = 'systemLabels';
    public const FIELD_TRUST_TYPE = 'trustType';
    public const FIELD_EXTENSIONS = 'extensions';
    public const FIELD_MEMBER_OF = 'memberOf';
    public const FIELD_REGISTERED_OWNERS = 'registeredOwners';
    public const FIELD_REGISTERED_USERS = 'registeredUsers';
    public const FIELD_TRANSITIVE_MEMBER_OF = 'transitiveMemberOf';

    /**
     * Select specific Device properties
     * 
     * @param array<string> $select Use DeviceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
