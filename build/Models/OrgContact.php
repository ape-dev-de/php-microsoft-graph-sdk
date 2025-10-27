<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OrgContact
 */
class OrgContact
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Date and time when this object was deleted. Always null when the object hasn't been deleted. */
    public ?\DateTimeInterface $deletedDateTime = null;

    /** 
     * Postal addresses for this organizational contact. For now a contact can only have one physical address.
     * @var PhysicalOfficeAddress[]
     */
    public array $addresses = [];

    /** Name of the company that this organizational contact belongs to.  Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq for null values). */
    public ?string $companyName = null;

    /** The name for the department in which the contact works.  Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq for null values). */
    public ?string $department = null;

    /** Display name for this organizational contact. Maximum length is 256 characters. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq for null values), $search, and $orderby. */
    public ?string $displayName = null;

    /** First name for this organizational contact. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq for null values). */
    public ?string $givenName = null;

    /** Job title for this organizational contact. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq for null values). */
    public ?string $jobTitle = null;

    /** The SMTP address for the contact, for example, 'jeff@contoso.com'. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq for null values). */
    public ?string $mail = null;

    /** Email alias (portion of email address pre-pending the @ symbol) for this organizational contact. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq for null values). */
    public ?string $mailNickname = null;

    /** Date and time when this organizational contact was last synchronized from on-premises AD. This date and time information uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $filter (eq, ne, not, ge, le, in). */
    public ?\DateTimeInterface $onPremisesLastSyncDateTime = null;

    /** 
     * List of any synchronization provisioning errors for this organizational contact. Supports $filter (eq, not for category and propertyCausingError), /$count eq 0, /$count ne 0.
     * @var OnPremisesProvisioningError[]
     */
    public array $onPremisesProvisioningErrors = [];

    /** true if this object is synced from an on-premises directory; false if this object was originally synced from an on-premises directory but is no longer synced and now mastered in Exchange; null if this object has never been synced from an on-premises directory (default).   Supports $filter (eq, ne, not, in, and eq for null values). */
    public ?bool $onPremisesSyncEnabled = null;

    /** 
     * List of phones for this organizational contact. Phone types can be mobile, business, and businessFax. Only one of each type can ever be present in the collection.
     * @var Phone[]
     */
    public array $phones = [];

    /** 
     * For example: 'SMTP: bob@contoso.com', 'smtp: bob@sales.contoso.com'. The any operator is required for filter expressions on multi-valued properties. Supports $filter (eq, not, ge, le, startsWith, /$count eq 0, /$count ne 0).
     * @var string[]
     */
    public array $proxyAddresses = [];

    /** 
     * Errors published by a federated service describing a non-transient, service-specific error regarding the properties or link from an organizational contact object .  Supports $filter (eq, not, for isResolved and serviceInstance).
     * @var ServiceProvisioningError[]
     */
    public array $serviceProvisioningErrors = [];

    /** Last name for this organizational contact. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq for null values). */
    public ?string $surname = null;

    /** 
     * The contact's direct reports. (The users and contacts that have their manager property set to this contact.)  Read-only. Nullable. Supports $expand.
     * @var DirectoryObject[]
     */
    public array $directReports = [];

    /** 
     * The user or contact that is this contact's manager. Read-only. Supports $expand and $filter (eq) by id.
     * @var DirectoryObject|\stdClass|null
     */
    public DirectoryObject|\stdClass|null $manager = null;

    /** 
     * Groups that this contact is a member of. Read-only. Nullable. Supports $expand.
     * @var DirectoryObject[]
     */
    public array $memberOf = [];

    /** 
     * Groups that this contact is a member of, including groups that the contact is nested under. Read-only. Nullable.
     * @var DirectoryObject[]
     */
    public array $transitiveMemberOf = [];


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
        if (isset($data['addresses'])) {
            $this->addresses = $data['addresses'];
        }
        if (isset($data['companyName'])) {
            $this->companyName = $data['companyName'];
        }
        if (isset($data['department'])) {
            $this->department = $data['department'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['givenName'])) {
            $this->givenName = $data['givenName'];
        }
        if (isset($data['jobTitle'])) {
            $this->jobTitle = $data['jobTitle'];
        }
        if (isset($data['mail'])) {
            $this->mail = $data['mail'];
        }
        if (isset($data['mailNickname'])) {
            $this->mailNickname = $data['mailNickname'];
        }
        if (isset($data['onPremisesLastSyncDateTime'])) {
            $this->onPremisesLastSyncDateTime = is_string($data['onPremisesLastSyncDateTime']) ? new \DateTimeImmutable($data['onPremisesLastSyncDateTime']) : $data['onPremisesLastSyncDateTime'];
        }
        if (isset($data['onPremisesProvisioningErrors'])) {
            $this->onPremisesProvisioningErrors = $data['onPremisesProvisioningErrors'];
        }
        if (isset($data['onPremisesSyncEnabled'])) {
            $this->onPremisesSyncEnabled = is_bool($data['onPremisesSyncEnabled']) ? $data['onPremisesSyncEnabled'] : (bool)$data['onPremisesSyncEnabled'];
        }
        if (isset($data['phones'])) {
            $this->phones = $data['phones'];
        }
        if (isset($data['proxyAddresses'])) {
            $this->proxyAddresses = $data['proxyAddresses'];
        }
        if (isset($data['serviceProvisioningErrors'])) {
            $this->serviceProvisioningErrors = $data['serviceProvisioningErrors'];
        }
        if (isset($data['surname'])) {
            $this->surname = $data['surname'];
        }
        if (isset($data['directReports'])) {
            $this->directReports = $data['directReports'];
        }
        if (isset($data['manager'])) {
            $this->manager = is_array($data['manager']) ? new DirectoryObject($data['manager']) : $data['manager'];
        }
        if (isset($data['memberOf'])) {
            $this->memberOf = $data['memberOf'];
        }
        if (isset($data['transitiveMemberOf'])) {
            $this->transitiveMemberOf = $data['transitiveMemberOf'];
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
