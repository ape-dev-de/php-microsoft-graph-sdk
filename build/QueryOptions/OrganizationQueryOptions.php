<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Organization resources
 *
 * Available select fields:
 * - assignedPlans
 * - businessPhones
 * - city
 * - country
 * - countryLetterCode
 * - createdDateTime
 * - defaultUsageLocation
 * - displayName
 * - marketingNotificationEmails
 * - mobileDeviceManagementAuthority
 * - onPremisesLastSyncDateTime
 * - onPremisesSyncEnabled
 * - partnerTenantType
 * - postalCode
 * - preferredLanguage
 * - privacyProfile
 * - provisionedPlans
 * - securityComplianceNotificationMails
 * - securityComplianceNotificationPhones
 * - state
 * - street
 * - technicalNotificationMails
 * - tenantType
 * - verifiedDomains
 * - branding
 * - certificateBasedAuthConfiguration
 * - extensions
 */
class OrganizationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Organization
     */
    public const FIELD_ASSIGNED_PLANS = 'assignedPlans';
    public const FIELD_BUSINESS_PHONES = 'businessPhones';
    public const FIELD_CITY = 'city';
    public const FIELD_COUNTRY = 'country';
    public const FIELD_COUNTRY_LETTER_CODE = 'countryLetterCode';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DEFAULT_USAGE_LOCATION = 'defaultUsageLocation';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_MARKETING_NOTIFICATION_EMAILS = 'marketingNotificationEmails';
    public const FIELD_MOBILE_DEVICE_MANAGEMENT_AUTHORITY = 'mobileDeviceManagementAuthority';
    public const FIELD_ON_PREMISES_LAST_SYNC_DATE_TIME = 'onPremisesLastSyncDateTime';
    public const FIELD_ON_PREMISES_SYNC_ENABLED = 'onPremisesSyncEnabled';
    public const FIELD_PARTNER_TENANT_TYPE = 'partnerTenantType';
    public const FIELD_POSTAL_CODE = 'postalCode';
    public const FIELD_PREFERRED_LANGUAGE = 'preferredLanguage';
    public const FIELD_PRIVACY_PROFILE = 'privacyProfile';
    public const FIELD_PROVISIONED_PLANS = 'provisionedPlans';
    public const FIELD_SECURITY_COMPLIANCE_NOTIFICATION_MAILS = 'securityComplianceNotificationMails';
    public const FIELD_SECURITY_COMPLIANCE_NOTIFICATION_PHONES = 'securityComplianceNotificationPhones';
    public const FIELD_STATE = 'state';
    public const FIELD_STREET = 'street';
    public const FIELD_TECHNICAL_NOTIFICATION_MAILS = 'technicalNotificationMails';
    public const FIELD_TENANT_TYPE = 'tenantType';
    public const FIELD_VERIFIED_DOMAINS = 'verifiedDomains';
    public const FIELD_BRANDING = 'branding';
    public const FIELD_CERTIFICATE_BASED_AUTH_CONFIGURATION = 'certificateBasedAuthConfiguration';
    public const FIELD_EXTENSIONS = 'extensions';

    /**
     * Select specific Organization properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
