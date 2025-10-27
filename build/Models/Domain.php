<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Domain
 */
class Domain
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Indicates the configured authentication type for the domain. The value is either Managed or Federated. Managed indicates a cloud managed domain where Microsoft Entra ID performs user authentication. Federated indicates authentication is federated with an identity provider such as the tenant's on-premises Active Directory via Active Directory Federation Services. Not nullable.  To update this property in delegated scenarios, the calling app must be assigned the Directory.AccessAsUser.All delegated permission. */
    public ?string $authenticationType = null;

    /** This property is always null except when the verify action is used. When the verify action is used, a domain entity is returned in the response. The availabilityStatus property of the domain entity in the response is either AvailableImmediately or EmailVerifiedDomainTakeoverScheduled. */
    public ?string $availabilityStatus = null;

    /** The value of the property is false if the DNS record management of the domain is delegated to Microsoft 365. Otherwise, the value is true. Not nullable */
    public ?bool $isAdminManaged = null;

    /** true if this is the default domain that is used for user creation. There's only one default domain per company. Not nullable. */
    public ?bool $isDefault = null;

    /** true if this is the initial domain created by Microsoft Online Services (contoso.com). There's only one initial domain per company. Not nullable */
    public ?bool $isInitial = null;

    /** true if the domain is a verified root domain. Otherwise, false if the domain is a subdomain or unverified. Not nullable. */
    public ?bool $isRoot = null;

    /** true if the domain completed domain ownership verification. Not nullable. */
    public ?bool $isVerified = null;

    /**  */
    public ?string $manufacturer = null;

    /**  */
    public ?string $model = null;

    /** Specifies the number of days before a user receives notification that their password expires. If the property isn't set, a default value of 14 days is used. */
    public ?float $passwordNotificationWindowInDays = null;

    /** Specifies the length of time that a password is valid before it must be changed. If the property isn't set, a default value of 90 days is used. */
    public ?float $passwordValidityPeriodInDays = null;

    /** 
     * Status of asynchronous operations scheduled for the domain.
     * @var DomainState|\stdClass|null
     */
    public DomainState|\stdClass|null $state = null;

    /** 
     * The capabilities assigned to the domain. Can include 0, 1 or more of following values: Email, Sharepoint, EmailInternalRelayOnly, OfficeCommunicationsOnline, SharePointDefaultDomain, FullRedelegation, SharePointPublic, OrgIdAuthentication, Yammer, Intune. The values that you can add or remove using the API include: Email, OfficeCommunicationsOnline, Yammer. Not nullable.
     * @var string[]
     */
    public array $supportedServices = [];

    /** 
     * The objects such as users and groups that reference the domain ID. Read-only, Nullable. Doesn't support $expand. Supports $filter by the OData type of objects returned. For example, /domains/{domainId}/domainNameReferences/microsoft.graph.user and /domains/{domainId}/domainNameReferences/microsoft.graph.group.
     * @var DirectoryObject[]
     */
    public array $domainNameReferences = [];

    /** 
     * Domain settings configured by a customer when federated with Microsoft Entra ID. Doesn't support $expand.
     * @var InternalDomainFederation[]
     */
    public array $federationConfiguration = [];

    /** 
     * Root domain of a subdomain. Read-only, Nullable. Supports $expand.
     * @var Domain|\stdClass|null
     */
    public Domain|\stdClass|null $rootDomain = null;

    /** 
     * DNS records the customer adds to the DNS zone file of the domain before the domain can be used by Microsoft Online services. Read-only, Nullable. Doesn't support $expand.
     * @var DomainDnsRecord[]
     */
    public array $serviceConfigurationRecords = [];

    /** 
     * DNS records that the customer adds to the DNS zone file of the domain before the customer can complete domain ownership verification with Microsoft Entra ID. Read-only, Nullable. Doesn't support $expand.
     * @var DomainDnsRecord[]
     */
    public array $verificationDnsRecords = [];


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
        if (isset($data['authenticationType'])) {
            $this->authenticationType = $data['authenticationType'];
        }
        if (isset($data['availabilityStatus'])) {
            $this->availabilityStatus = $data['availabilityStatus'];
        }
        if (isset($data['isAdminManaged'])) {
            $this->isAdminManaged = is_bool($data['isAdminManaged']) ? $data['isAdminManaged'] : (bool)$data['isAdminManaged'];
        }
        if (isset($data['isDefault'])) {
            $this->isDefault = is_bool($data['isDefault']) ? $data['isDefault'] : (bool)$data['isDefault'];
        }
        if (isset($data['isInitial'])) {
            $this->isInitial = is_bool($data['isInitial']) ? $data['isInitial'] : (bool)$data['isInitial'];
        }
        if (isset($data['isRoot'])) {
            $this->isRoot = is_bool($data['isRoot']) ? $data['isRoot'] : (bool)$data['isRoot'];
        }
        if (isset($data['isVerified'])) {
            $this->isVerified = is_bool($data['isVerified']) ? $data['isVerified'] : (bool)$data['isVerified'];
        }
        if (isset($data['manufacturer'])) {
            $this->manufacturer = $data['manufacturer'];
        }
        if (isset($data['model'])) {
            $this->model = $data['model'];
        }
        if (isset($data['passwordNotificationWindowInDays'])) {
            $this->passwordNotificationWindowInDays = is_numeric($data['passwordNotificationWindowInDays']) ? (float)$data['passwordNotificationWindowInDays'] : $data['passwordNotificationWindowInDays'];
        }
        if (isset($data['passwordValidityPeriodInDays'])) {
            $this->passwordValidityPeriodInDays = is_numeric($data['passwordValidityPeriodInDays']) ? (float)$data['passwordValidityPeriodInDays'] : $data['passwordValidityPeriodInDays'];
        }
        if (isset($data['state'])) {
            $this->state = is_array($data['state']) ? new DomainState($data['state']) : $data['state'];
        }
        if (isset($data['supportedServices'])) {
            $this->supportedServices = $data['supportedServices'];
        }
        if (isset($data['domainNameReferences'])) {
            $this->domainNameReferences = $data['domainNameReferences'];
        }
        if (isset($data['federationConfiguration'])) {
            $this->federationConfiguration = $data['federationConfiguration'];
        }
        if (isset($data['rootDomain'])) {
            $this->rootDomain = is_array($data['rootDomain']) ? new Domain($data['rootDomain']) : $data['rootDomain'];
        }
        if (isset($data['serviceConfigurationRecords'])) {
            $this->serviceConfigurationRecords = $data['serviceConfigurationRecords'];
        }
        if (isset($data['verificationDnsRecords'])) {
            $this->verificationDnsRecords = $data['verificationDnsRecords'];
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
