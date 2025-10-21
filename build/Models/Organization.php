<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Organization
 */
class Organization
{
    public function __construct(
        /** The collection of service plans associated with the tenant. Not nullable. */
        public array $assignedPlans = [],
        /** @var string[] Telephone number for the organization. Although this property is a string collection, only one number can be set. */
        public array $businessPhones = [],
        /** City name of the address for the organization. */
        public ?string $city = null,
        /** Country or region name of the address for the organization. */
        public ?string $country = null,
        /** Country or region abbreviation for the organization in ISO 3166-2 format. */
        public ?string $countryLetterCode = null,
        /** Timestamp of when the organization was created. The value can''t be modified and is automatically populated when the organization is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Two-letter ISO 3166 country code indicating the default service usage location of an organization. */
        public ?string $defaultUsageLocation = null,
        /** The display name for the tenant. */
        public ?string $displayName = null,
        /** @var string[] Not nullable. */
        public array $marketingNotificationEmails = [],
        /**  */
        public ?string $mobileDeviceManagementAuthority = null,
        /** The time and date at which the tenant was last synced with the on-premises directory. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
        public ?\DateTimeInterface $onPremisesLastSyncDateTime = null,
        /** true if this object is synced from an on-premises directory; false if this object was originally synced from an on-premises directory but is no longer synced. Nullable. null if this object isn't synced from on-premises active directory (default). */
        public ?bool $onPremisesSyncEnabled = null,
        /** The type of partnership this tenant has with Microsoft. The possible values are: microsoftSupport, syndicatePartner, breadthPartner, breadthPartnerDelegatedAdmin, resellerPartnerDelegatedAdmin, valueAddedResellerPartnerDelegatedAdmin, unknownFutureValue. Nullable. For more information about the possible types, see partnerTenantType values. */
        public ?string $partnerTenantType = null,
        /** Postal code of the address for the organization. */
        public ?string $postalCode = null,
        /** The preferred language for the organization. Should follow ISO 639-1 Code; for example, en. */
        public ?string $preferredLanguage = null,
        /** The privacy profile of an organization. */
        public ?string $privacyProfile = null,
        /** Not nullable. */
        public array $provisionedPlans = [],
        /** @var string[] Not nullable. */
        public array $securityComplianceNotificationMails = [],
        /** @var string[] Not nullable. */
        public array $securityComplianceNotificationPhones = [],
        /** State name of the address for the organization. */
        public ?string $state = null,
        /** Street name of the address for organization. */
        public ?string $street = null,
        /** @var string[] Not nullable. */
        public array $technicalNotificationMails = [],
        /** Not nullable. Can be one of the following types:  AAD - An enterprise identity access management (IAM) service that serves business-to-employee and business-to-business (B2B) scenarios.  AAD B2C An identity access management (IAM) service that serves business-to-consumer (B2C) scenarios.   CIAM - A customer identity & access management (CIAM) solution that provides an integrated platform to serve consumers, partners, and citizen scenarios. */
        public ?string $tenantType = null,
        /** The collection of domains associated with this tenant. Not nullable. */
        public array $verifiedDomains = [],
        /** Branding for the organization. Nullable. */
        public ?string $branding = null,
        /** Navigation property to manage certificate-based authentication configuration. Only a single instance of certificateBasedAuthConfiguration can be created in the collection. */
        public array $certificateBasedAuthConfiguration = [],
        /** @var string[] The collection of open extensions defined for the organization. Read-only. Nullable. */
        public array $extensions = []
    ) {}
}
