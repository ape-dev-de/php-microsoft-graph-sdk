<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OrgContact
 */
class OrgContact
{
    /**
     * Postal addresses for this organizational contact. For now a contact can only have one physical address.
     */
    private array $addresses = [];

    /**
     * Name of the company that this organizational contact belongs to.  Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq for null values).
     */
    private ?string $companyName;

    /**
     * The name for the department in which the contact works.  Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq for null values).
     */
    private ?string $department;

    /**
     * Display name for this organizational contact. Maximum length is 256 characters. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq for null values), $search, and $orderby.
     */
    private ?string $displayName;

    /**
     * First name for this organizational contact. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq for null values).
     */
    private ?string $givenName;

    /**
     * Job title for this organizational contact. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq for null values).
     */
    private ?string $jobTitle;

    /**
     * The SMTP address for the contact, for example, ''jeff@contoso.com''. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq for null values).
     */
    private ?string $mail;

    /**
     * Email alias (portion of email address pre-pending the @ symbol) for this organizational contact. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq for null values).
     */
    private ?string $mailNickname;

    /**
     * Date and time when this organizational contact was last synchronized from on-premises AD. This date and time information uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $filter (eq, ne, not, ge, le, in).
     */
    private ?\DateTimeInterface $onPremisesLastSyncDateTime;

    /**
     * List of any synchronization provisioning errors for this organizational contact. Supports $filter (eq, not for category and propertyCausingError), /$count eq 0, /$count ne 0.
     */
    private array $onPremisesProvisioningErrors = [];

    /**
     * true if this object is synced from an on-premises directory; false if this object was originally synced from an on-premises directory but is no longer synced and now mastered in Exchange; null if this object has never been synced from an on-premises directory (default).   Supports $filter (eq, ne, not, in, and eq for null values).
     */
    private ?bool $onPremisesSyncEnabled;

    /**
     * List of phones for this organizational contact. Phone types can be mobile, business, and businessFax. Only one of each type can ever be present in the collection.
     */
    private array $phones = [];

    /**
     * For example: ''SMTP: bob@contoso.com'', ''smtp: bob@sales.contoso.com''. The any operator is required for filter expressions on multi-valued properties. Supports $filter (eq, not, ge, le, startsWith, /$count eq 0, /$count ne 0).
     * @var string[]
     */
    private array $proxyAddresses = [];

    /**
     * Errors published by a federated service describing a non-transient, service-specific error regarding the properties or link from an organizational contact object .  Supports $filter (eq, not, for isResolved and serviceInstance).
     */
    private array $serviceProvisioningErrors = [];

    /**
     * Last name for this organizational contact. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq for null values).
     */
    private ?string $surname;

    /**
     * The contact's direct reports. (The users and contacts that have their manager property set to this contact.)  Read-only. Nullable. Supports $expand.
     */
    private array $directReports = [];

    /**
     * The user or contact that is this contact's manager. Read-only. Supports $expand and $filter (eq) by id.
     */
    private ?string $manager;

    /**
     * Groups that this contact is a member of. Read-only. Nullable. Supports $expand.
     */
    private array $memberOf = [];

    /**
     * Groups that this contact is a member of, including groups that the contact is nested under. Read-only. Nullable.
     * @var string[]
     */
    private array $transitiveMemberOf = [];


    public function getAddresses(): array
    {
        return $this->addresses;
    }

    public function setAddresses(array $addresses): self
    {
        $this->addresses = $addresses;
        return $this;
    }

    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    public function setCompanyName(?string $companyName): self
    {
        $this->companyName = $companyName;
        return $this;
    }

    public function getDepartment(): ?string
    {
        return $this->department;
    }

    public function setDepartment(?string $department): self
    {
        $this->department = $department;
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

    public function getGivenName(): ?string
    {
        return $this->givenName;
    }

    public function setGivenName(?string $givenName): self
    {
        $this->givenName = $givenName;
        return $this;
    }

    public function getJobTitle(): ?string
    {
        return $this->jobTitle;
    }

    public function setJobTitle(?string $jobTitle): self
    {
        $this->jobTitle = $jobTitle;
        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(?string $mail): self
    {
        $this->mail = $mail;
        return $this;
    }

    public function getMailNickname(): ?string
    {
        return $this->mailNickname;
    }

    public function setMailNickname(?string $mailNickname): self
    {
        $this->mailNickname = $mailNickname;
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

    public function getOnPremisesProvisioningErrors(): array
    {
        return $this->onPremisesProvisioningErrors;
    }

    public function setOnPremisesProvisioningErrors(array $onPremisesProvisioningErrors): self
    {
        $this->onPremisesProvisioningErrors = $onPremisesProvisioningErrors;
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

    public function getPhones(): array
    {
        return $this->phones;
    }

    public function setPhones(array $phones): self
    {
        $this->phones = $phones;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getProxyAddresses(): array
    {
        return $this->proxyAddresses;
    }

    /**
     * @param string[] $proxyAddresses
     */
    public function setProxyAddresses(array $proxyAddresses): self
    {
        $this->proxyAddresses = $proxyAddresses;
        return $this;
    }

    public function getServiceProvisioningErrors(): array
    {
        return $this->serviceProvisioningErrors;
    }

    public function setServiceProvisioningErrors(array $serviceProvisioningErrors): self
    {
        $this->serviceProvisioningErrors = $serviceProvisioningErrors;
        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(?string $surname): self
    {
        $this->surname = $surname;
        return $this;
    }

    public function getDirectReports(): array
    {
        return $this->directReports;
    }

    public function setDirectReports(array $directReports): self
    {
        $this->directReports = $directReports;
        return $this;
    }

    public function getManager(): ?string
    {
        return $this->manager;
    }

    public function setManager(?string $manager): self
    {
        $this->manager = $manager;
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
