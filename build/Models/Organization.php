<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Organization
 */
class Organization
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Date and time when this object was deleted. Always null when the object hasn't been deleted. */
    public ?\DateTimeInterface $deletedDateTime = null;

    /** 
     * The collection of service plans associated with the tenant. Not nullable.
     * @var AssignedPlan[]
     */
    public array $assignedPlans = [];

    /** 
     * Telephone number for the organization. Although this property is a string collection, only one number can be set.
     * @var string[]
     */
    public array $businessPhones = [];

    /** City name of the address for the organization. */
    public ?string $city = null;

    /** Country or region name of the address for the organization. */
    public ?string $country = null;

    /** Country or region abbreviation for the organization in ISO 3166-2 format. */
    public ?string $countryLetterCode = null;

    /** Timestamp of when the organization was created. The value can't be modified and is automatically populated when the organization is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Two-letter ISO 3166 country code indicating the default service usage location of an organization. */
    public ?string $defaultUsageLocation = null;

    /** The display name for the tenant. */
    public ?string $displayName = null;

    /** 
     * Not nullable.
     * @var string[]
     */
    public array $marketingNotificationEmails = [];

    /**  */
    public ?MdmAuthority $mobileDeviceManagementAuthority = null;

    /** The time and date at which the tenant was last synced with the on-premises directory. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
    public ?\DateTimeInterface $onPremisesLastSyncDateTime = null;

    /** true if this object is synced from an on-premises directory; false if this object was originally synced from an on-premises directory but is no longer synced. Nullable. null if this object isn't synced from on-premises active directory (default). */
    public ?bool $onPremisesSyncEnabled = null;

    /** 
     * The type of partnership this tenant has with Microsoft. The possible values are: microsoftSupport, syndicatePartner, breadthPartner, breadthPartnerDelegatedAdmin, resellerPartnerDelegatedAdmin, valueAddedResellerPartnerDelegatedAdmin, unknownFutureValue. Nullable. For more information about the possible types, see partnerTenantType values.
     * @var PartnerTenantType|\stdClass|null
     */
    public PartnerTenantType|\stdClass|null $partnerTenantType = null;

    /** Postal code of the address for the organization. */
    public ?string $postalCode = null;

    /** The preferred language for the organization. Should follow ISO 639-1 Code; for example, en. */
    public ?string $preferredLanguage = null;

    /** 
     * The privacy profile of an organization.
     * @var PrivacyProfile|\stdClass|null
     */
    public PrivacyProfile|\stdClass|null $privacyProfile = null;

    /** 
     * Not nullable.
     * @var ProvisionedPlan[]
     */
    public array $provisionedPlans = [];

    /** 
     * Not nullable.
     * @var string[]
     */
    public array $securityComplianceNotificationMails = [];

    /** 
     * Not nullable.
     * @var string[]
     */
    public array $securityComplianceNotificationPhones = [];

    /** State name of the address for the organization. */
    public ?string $state = null;

    /** Street name of the address for organization. */
    public ?string $street = null;

    /** 
     * Not nullable.
     * @var string[]
     */
    public array $technicalNotificationMails = [];

    /** Not nullable. Can be one of the following types:  AAD - An enterprise identity access management (IAM) service that serves business-to-employee and business-to-business (B2B) scenarios.  AAD B2C An identity access management (IAM) service that serves business-to-consumer (B2C) scenarios.   CIAM - A customer identity & access management (CIAM) solution that provides an integrated platform to serve consumers, partners, and citizen scenarios. */
    public ?string $tenantType = null;

    /** 
     * The collection of domains associated with this tenant. Not nullable.
     * @var VerifiedDomain[]
     */
    public array $verifiedDomains = [];

    /** 
     * Branding for the organization. Nullable.
     * @var OrganizationalBranding|\stdClass|null
     */
    public OrganizationalBranding|\stdClass|null $branding = null;

    /** 
     * Navigation property to manage certificate-based authentication configuration. Only a single instance of certificateBasedAuthConfiguration can be created in the collection.
     * @var CertificateBasedAuthConfiguration[]
     */
    public array $certificateBasedAuthConfiguration = [];

    /** 
     * The collection of open extensions defined for the organization. Read-only. Nullable.
     * @var Extension[]
     */
    public array $extensions = [];


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
        if (isset($data['assignedPlans'])) {
            $this->assignedPlans = $data['assignedPlans'];
        }
        if (isset($data['businessPhones'])) {
            $this->businessPhones = $data['businessPhones'];
        }
        if (isset($data['city'])) {
            $this->city = $data['city'];
        }
        if (isset($data['country'])) {
            $this->country = $data['country'];
        }
        if (isset($data['countryLetterCode'])) {
            $this->countryLetterCode = $data['countryLetterCode'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['defaultUsageLocation'])) {
            $this->defaultUsageLocation = $data['defaultUsageLocation'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['marketingNotificationEmails'])) {
            $this->marketingNotificationEmails = $data['marketingNotificationEmails'];
        }
        if (isset($data['mobileDeviceManagementAuthority'])) {
            $this->mobileDeviceManagementAuthority = is_string($data['mobileDeviceManagementAuthority']) ? MdmAuthority::tryFrom($data['mobileDeviceManagementAuthority']) : $data['mobileDeviceManagementAuthority'];
        }
        if (isset($data['onPremisesLastSyncDateTime'])) {
            $this->onPremisesLastSyncDateTime = is_string($data['onPremisesLastSyncDateTime']) ? new \DateTimeImmutable($data['onPremisesLastSyncDateTime']) : $data['onPremisesLastSyncDateTime'];
        }
        if (isset($data['onPremisesSyncEnabled'])) {
            $this->onPremisesSyncEnabled = is_bool($data['onPremisesSyncEnabled']) ? $data['onPremisesSyncEnabled'] : (bool)$data['onPremisesSyncEnabled'];
        }
        if (isset($data['partnerTenantType'])) {
            $this->partnerTenantType = is_string($data['partnerTenantType']) ? PartnerTenantType::tryFrom($data['partnerTenantType']) : $data['partnerTenantType'];
        }
        if (isset($data['postalCode'])) {
            $this->postalCode = $data['postalCode'];
        }
        if (isset($data['preferredLanguage'])) {
            $this->preferredLanguage = $data['preferredLanguage'];
        }
        if (isset($data['privacyProfile'])) {
            $this->privacyProfile = is_array($data['privacyProfile']) ? new PrivacyProfile($data['privacyProfile']) : $data['privacyProfile'];
        }
        if (isset($data['provisionedPlans'])) {
            $this->provisionedPlans = $data['provisionedPlans'];
        }
        if (isset($data['securityComplianceNotificationMails'])) {
            $this->securityComplianceNotificationMails = $data['securityComplianceNotificationMails'];
        }
        if (isset($data['securityComplianceNotificationPhones'])) {
            $this->securityComplianceNotificationPhones = $data['securityComplianceNotificationPhones'];
        }
        if (isset($data['state'])) {
            $this->state = $data['state'];
        }
        if (isset($data['street'])) {
            $this->street = $data['street'];
        }
        if (isset($data['technicalNotificationMails'])) {
            $this->technicalNotificationMails = $data['technicalNotificationMails'];
        }
        if (isset($data['tenantType'])) {
            $this->tenantType = $data['tenantType'];
        }
        if (isset($data['verifiedDomains'])) {
            $this->verifiedDomains = $data['verifiedDomains'];
        }
        if (isset($data['branding'])) {
            $this->branding = is_array($data['branding']) ? new OrganizationalBranding($data['branding']) : $data['branding'];
        }
        if (isset($data['certificateBasedAuthConfiguration'])) {
            $this->certificateBasedAuthConfiguration = $data['certificateBasedAuthConfiguration'];
        }
        if (isset($data['extensions'])) {
            $this->extensions = $data['extensions'];
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
