<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Organization
 */
class Organization
{
    /**
     * The collection of service plans associated with the tenant. Not nullable.
     */
    private array $assignedPlans = [];

    /**
     * Telephone number for the organization. Although this property is a string collection, only one number can be set.
     */
    private ?string $businessPhones;

    /**
     * City name of the address for the organization.
     */
    private ?string $city;

    /**
     * Country or region name of the address for the organization.
     */
    private ?string $country;

    /**
     * Country or region abbreviation for the organization in ISO 3166-2 format.
     */
    private ?string $countryLetterCode;

    /**
     * Timestamp of when the organization was created. The value can''t be modified and is automatically populated when the organization is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Two-letter ISO 3166 country code indicating the default service usage location of an organization.
     */
    private ?string $defaultUsageLocation;

    /**
     * The display name for the tenant.
     */
    private ?string $displayName;

    /**
     * Not nullable.
     */
    private ?string $marketingNotificationEmails;

    /**
     */
    private ?string $mobileDeviceManagementAuthority;

    /**
     * The time and date at which the tenant was last synced with the on-premises directory. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     */
    private ?\DateTimeInterface $onPremisesLastSyncDateTime;

    /**
     * true if this object is synced from an on-premises directory; false if this object was originally synced from an on-premises directory but is no longer synced. Nullable. null if this object isn't synced from on-premises active directory (default).
     */
    private ?bool $onPremisesSyncEnabled;

    /**
     * The type of partnership this tenant has with Microsoft. The possible values are: microsoftSupport, syndicatePartner, breadthPartner, breadthPartnerDelegatedAdmin, resellerPartnerDelegatedAdmin, valueAddedResellerPartnerDelegatedAdmin, unknownFutureValue. Nullable. For more information about the possible types, see partnerTenantType values.
     */
    private ?string $partnerTenantType;

    /**
     * Postal code of the address for the organization.
     */
    private ?string $postalCode;

    /**
     * The preferred language for the organization. Should follow ISO 639-1 Code; for example, en.
     */
    private ?string $preferredLanguage;

    /**
     * The privacy profile of an organization.
     */
    private ?string $privacyProfile;

    /**
     * Not nullable.
     */
    private array $provisionedPlans = [];

    /**
     * Not nullable.
     */
    private ?string $securityComplianceNotificationMails;

    /**
     * Not nullable.
     */
    private ?string $securityComplianceNotificationPhones;

    /**
     * State name of the address for the organization.
     */
    private ?string $state;

    /**
     * Street name of the address for organization.
     */
    private ?string $street;

    /**
     * Not nullable.
     */
    private ?string $technicalNotificationMails;

    /**
     * Not nullable. Can be one of the following types:  AAD - An enterprise identity access management (IAM) service that serves business-to-employee and business-to-business (B2B) scenarios.  AAD B2C An identity access management (IAM) service that serves business-to-consumer (B2C) scenarios.   CIAM - A customer identity & access management (CIAM) solution that provides an integrated platform to serve consumers, partners, and citizen scenarios.
     */
    private ?string $tenantType;

    /**
     * The collection of domains associated with this tenant. Not nullable.
     */
    private array $verifiedDomains = [];

    /**
     * Branding for the organization. Nullable.
     */
    private ?string $branding;

    /**
     * Navigation property to manage certificate-based authentication configuration. Only a single instance of certificateBasedAuthConfiguration can be created in the collection.
     */
    private array $certificateBasedAuthConfiguration = [];

    /**
     * The collection of open extensions defined for the organization. Read-only. Nullable.
     */
    private ?string $extensions;

    public function getAssignedPlans(): array
    {
        return $this->assignedPlans;
    }

    public function setAssignedPlans(array $assignedPlans): self
    {
        $this->assignedPlans = $assignedPlans;
        return $this;
    }

    public function getBusinessPhones(): ?string
    {
        return $this->businessPhones;
    }

    public function setBusinessPhones(?string $businessPhones): self
    {
        $this->businessPhones = $businessPhones;
        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;
        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): self
    {
        $this->country = $country;
        return $this;
    }

    public function getCountryLetterCode(): ?string
    {
        return $this->countryLetterCode;
    }

    public function setCountryLetterCode(?string $countryLetterCode): self
    {
        $this->countryLetterCode = $countryLetterCode;
        return $this;
    }

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getDefaultUsageLocation(): ?string
    {
        return $this->defaultUsageLocation;
    }

    public function setDefaultUsageLocation(?string $defaultUsageLocation): self
    {
        $this->defaultUsageLocation = $defaultUsageLocation;
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

    public function getMarketingNotificationEmails(): ?string
    {
        return $this->marketingNotificationEmails;
    }

    public function setMarketingNotificationEmails(?string $marketingNotificationEmails): self
    {
        $this->marketingNotificationEmails = $marketingNotificationEmails;
        return $this;
    }

    public function getMobileDeviceManagementAuthority(): ?string
    {
        return $this->mobileDeviceManagementAuthority;
    }

    public function setMobileDeviceManagementAuthority(?string $mobileDeviceManagementAuthority): self
    {
        $this->mobileDeviceManagementAuthority = $mobileDeviceManagementAuthority;
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

    public function getOnPremisesSyncEnabled(): ?bool
    {
        return $this->onPremisesSyncEnabled;
    }

    public function setOnPremisesSyncEnabled(?bool $onPremisesSyncEnabled): self
    {
        $this->onPremisesSyncEnabled = $onPremisesSyncEnabled;
        return $this;
    }

    public function getPartnerTenantType(): ?string
    {
        return $this->partnerTenantType;
    }

    public function setPartnerTenantType(?string $partnerTenantType): self
    {
        $this->partnerTenantType = $partnerTenantType;
        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    public function setPostalCode(?string $postalCode): self
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    public function getPreferredLanguage(): ?string
    {
        return $this->preferredLanguage;
    }

    public function setPreferredLanguage(?string $preferredLanguage): self
    {
        $this->preferredLanguage = $preferredLanguage;
        return $this;
    }

    public function getPrivacyProfile(): ?string
    {
        return $this->privacyProfile;
    }

    public function setPrivacyProfile(?string $privacyProfile): self
    {
        $this->privacyProfile = $privacyProfile;
        return $this;
    }

    public function getProvisionedPlans(): array
    {
        return $this->provisionedPlans;
    }

    public function setProvisionedPlans(array $provisionedPlans): self
    {
        $this->provisionedPlans = $provisionedPlans;
        return $this;
    }

    public function getSecurityComplianceNotificationMails(): ?string
    {
        return $this->securityComplianceNotificationMails;
    }

    public function setSecurityComplianceNotificationMails(?string $securityComplianceNotificationMails): self
    {
        $this->securityComplianceNotificationMails = $securityComplianceNotificationMails;
        return $this;
    }

    public function getSecurityComplianceNotificationPhones(): ?string
    {
        return $this->securityComplianceNotificationPhones;
    }

    public function setSecurityComplianceNotificationPhones(?string $securityComplianceNotificationPhones): self
    {
        $this->securityComplianceNotificationPhones = $securityComplianceNotificationPhones;
        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): self
    {
        $this->state = $state;
        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(?string $street): self
    {
        $this->street = $street;
        return $this;
    }

    public function getTechnicalNotificationMails(): ?string
    {
        return $this->technicalNotificationMails;
    }

    public function setTechnicalNotificationMails(?string $technicalNotificationMails): self
    {
        $this->technicalNotificationMails = $technicalNotificationMails;
        return $this;
    }

    public function getTenantType(): ?string
    {
        return $this->tenantType;
    }

    public function setTenantType(?string $tenantType): self
    {
        $this->tenantType = $tenantType;
        return $this;
    }

    public function getVerifiedDomains(): array
    {
        return $this->verifiedDomains;
    }

    public function setVerifiedDomains(array $verifiedDomains): self
    {
        $this->verifiedDomains = $verifiedDomains;
        return $this;
    }

    public function getBranding(): ?string
    {
        return $this->branding;
    }

    public function setBranding(?string $branding): self
    {
        $this->branding = $branding;
        return $this;
    }

    public function getCertificateBasedAuthConfiguration(): array
    {
        return $this->certificateBasedAuthConfiguration;
    }

    public function setCertificateBasedAuthConfiguration(array $certificateBasedAuthConfiguration): self
    {
        $this->certificateBasedAuthConfiguration = $certificateBasedAuthConfiguration;
        return $this;
    }

    public function getExtensions(): ?string
    {
        return $this->extensions;
    }

    public function setExtensions(?string $extensions): self
    {
        $this->extensions = $extensions;
        return $this;
    }

}
