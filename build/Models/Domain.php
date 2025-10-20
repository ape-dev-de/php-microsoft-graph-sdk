<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Domain
 */
class Domain
{
    /**
     * Indicates the configured authentication type for the domain. The value is either Managed or Federated. Managed indicates a cloud managed domain where Microsoft Entra ID performs user authentication. Federated indicates authentication is federated with an identity provider such as the tenant''s on-premises Active Directory via Active Directory Federation Services. Not nullable.  To update this property in delegated scenarios, the calling app must be assigned the Directory.AccessAsUser.All delegated permission.
     */
    private ?string $authenticationType;

    /**
     * This property is always null except when the verify action is used. When the verify action is used, a domain entity is returned in the response. The availabilityStatus property of the domain entity in the response is either AvailableImmediately or EmailVerifiedDomainTakeoverScheduled.
     */
    private ?string $availabilityStatus;

    /**
     * The value of the property is false if the DNS record management of the domain is delegated to Microsoft 365. Otherwise, the value is true. Not nullable
     */
    private ?bool $isAdminManaged;

    /**
     * true if this is the default domain that is used for user creation. There's only one default domain per company. Not nullable.
     */
    private ?bool $isDefault;

    /**
     * true if this is the initial domain created by Microsoft Online Services (contoso.com). There's only one initial domain per company. Not nullable
     */
    private ?bool $isInitial;

    /**
     * true if the domain is a verified root domain. Otherwise, false if the domain is a subdomain or unverified. Not nullable.
     */
    private ?bool $isRoot;

    /**
     * true if the domain completed domain ownership verification. Not nullable.
     */
    private ?bool $isVerified;

    /**
     */
    private ?string $manufacturer;

    /**
     */
    private ?string $model;

    /**
     * Specifies the number of days before a user receives notification that their password expires. If the property isn''t set, a default value of 14 days is used.
     */
    private ?float $passwordNotificationWindowInDays;

    /**
     * Specifies the length of time that a password is valid before it must be changed. If the property isn''t set, a default value of 90 days is used.
     */
    private ?float $passwordValidityPeriodInDays;

    /**
     * Status of asynchronous operations scheduled for the domain.
     */
    private ?string $state;

    /**
     * The capabilities assigned to the domain. Can include 0, 1 or more of following values: Email, Sharepoint, EmailInternalRelayOnly, OfficeCommunicationsOnline, SharePointDefaultDomain, FullRedelegation, SharePointPublic, OrgIdAuthentication, Yammer, Intune. The values that you can add or remove using the API include: Email, OfficeCommunicationsOnline, Yammer. Not nullable.
     */
    private ?string $supportedServices;

    /**
     * The objects such as users and groups that reference the domain ID. Read-only, Nullable. Doesn''t support $expand. Supports $filter by the OData type of objects returned. For example, /domains/{domainId}/domainNameReferences/microsoft.graph.user and /domains/{domainId}/domainNameReferences/microsoft.graph.group.
     */
    private array $domainNameReferences = [];

    /**
     * Domain settings configured by a customer when federated with Microsoft Entra ID. Doesn't support $expand.
     */
    private array $federationConfiguration = [];

    /**
     * Root domain of a subdomain. Read-only, Nullable. Supports $expand.
     */
    private ?string $rootDomain;

    /**
     * DNS records the customer adds to the DNS zone file of the domain before the domain can be used by Microsoft Online services. Read-only, Nullable. Doesn''t support $expand.
     */
    private array $serviceConfigurationRecords = [];

    /**
     * DNS records that the customer adds to the DNS zone file of the domain before the customer can complete domain ownership verification with Microsoft Entra ID. Read-only, Nullable. Doesn''t support $expand.
     */
    private ?string $verificationDnsRecords;

    public function getAuthenticationType(): ?string
    {
        return $this->authenticationType;
    }

    public function setAuthenticationType(?string $authenticationType): self
    {
        $this->authenticationType = $authenticationType;
        return $this;
    }

    public function getAvailabilityStatus(): ?string
    {
        return $this->availabilityStatus;
    }

    public function setAvailabilityStatus(?string $availabilityStatus): self
    {
        $this->availabilityStatus = $availabilityStatus;
        return $this;
    }

    public function getIsAdminManaged(): ?bool
    {
        return $this->isAdminManaged;
    }

    public function setIsAdminManaged(?bool $isAdminManaged): self
    {
        $this->isAdminManaged = $isAdminManaged;
        return $this;
    }

    public function getIsDefault(): ?bool
    {
        return $this->isDefault;
    }

    public function setIsDefault(?bool $isDefault): self
    {
        $this->isDefault = $isDefault;
        return $this;
    }

    public function getIsInitial(): ?bool
    {
        return $this->isInitial;
    }

    public function setIsInitial(?bool $isInitial): self
    {
        $this->isInitial = $isInitial;
        return $this;
    }

    public function getIsRoot(): ?bool
    {
        return $this->isRoot;
    }

    public function setIsRoot(?bool $isRoot): self
    {
        $this->isRoot = $isRoot;
        return $this;
    }

    public function getIsVerified(): ?bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(?bool $isVerified): self
    {
        $this->isVerified = $isVerified;
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

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(?string $model): self
    {
        $this->model = $model;
        return $this;
    }

    public function getPasswordNotificationWindowInDays(): ?float
    {
        return $this->passwordNotificationWindowInDays;
    }

    public function setPasswordNotificationWindowInDays(?float $passwordNotificationWindowInDays): self
    {
        $this->passwordNotificationWindowInDays = $passwordNotificationWindowInDays;
        return $this;
    }

    public function getPasswordValidityPeriodInDays(): ?float
    {
        return $this->passwordValidityPeriodInDays;
    }

    public function setPasswordValidityPeriodInDays(?float $passwordValidityPeriodInDays): self
    {
        $this->passwordValidityPeriodInDays = $passwordValidityPeriodInDays;
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

    public function getSupportedServices(): ?string
    {
        return $this->supportedServices;
    }

    public function setSupportedServices(?string $supportedServices): self
    {
        $this->supportedServices = $supportedServices;
        return $this;
    }

    public function getDomainNameReferences(): array
    {
        return $this->domainNameReferences;
    }

    public function setDomainNameReferences(array $domainNameReferences): self
    {
        $this->domainNameReferences = $domainNameReferences;
        return $this;
    }

    public function getFederationConfiguration(): array
    {
        return $this->federationConfiguration;
    }

    public function setFederationConfiguration(array $federationConfiguration): self
    {
        $this->federationConfiguration = $federationConfiguration;
        return $this;
    }

    public function getRootDomain(): ?string
    {
        return $this->rootDomain;
    }

    public function setRootDomain(?string $rootDomain): self
    {
        $this->rootDomain = $rootDomain;
        return $this;
    }

    public function getServiceConfigurationRecords(): array
    {
        return $this->serviceConfigurationRecords;
    }

    public function setServiceConfigurationRecords(array $serviceConfigurationRecords): self
    {
        $this->serviceConfigurationRecords = $serviceConfigurationRecords;
        return $this;
    }

    public function getVerificationDnsRecords(): ?string
    {
        return $this->verificationDnsRecords;
    }

    public function setVerificationDnsRecords(?string $verificationDnsRecords): self
    {
        $this->verificationDnsRecords = $verificationDnsRecords;
        return $this;
    }

}
