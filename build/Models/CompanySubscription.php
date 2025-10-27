<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CompanySubscription
 */
class CompanySubscription
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The ID of this subscription in the commerce system. Alternate key. */
    public ?string $commerceSubscriptionId = null;

    /** The date and time when this subscription was created. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** Whether the subscription is a free trial or purchased. */
    public ?bool $isTrial = null;

    /** The date and time when the subscription will move to the next state (as defined by the status property) if not renewed by the tenant. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $nextLifecycleDateTime = null;

    /** The object ID of the account admin. */
    public ?string $ownerId = null;

    /** The unique identifier for the Microsoft partner tenant that created the subscription on a customer tenant. */
    public ?string $ownerTenantId = null;

    /** Indicates the entity that ownerId belongs to, for example, 'User'. */
    public ?string $ownerType = null;

    /** 
     * The provisioning status of each service included in this subscription.
     * @var ServicePlanInfo[]
     */
    public array $serviceStatus = [];

    /** The object ID of the SKU associated with this subscription. */
    public ?string $skuId = null;

    /** The SKU associated with this subscription. */
    public ?string $skuPartNumber = null;

    /** The status of this subscription. Possible values are: Enabled, Deleted, Suspended, Warning, LockedOut. */
    public ?string $status = null;

    /** The number of licenses included in this subscription. */
    public ?float $totalLicenses = null;


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
        if (isset($data['commerceSubscriptionId'])) {
            $this->commerceSubscriptionId = $data['commerceSubscriptionId'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['isTrial'])) {
            $this->isTrial = is_bool($data['isTrial']) ? $data['isTrial'] : (bool)$data['isTrial'];
        }
        if (isset($data['nextLifecycleDateTime'])) {
            $this->nextLifecycleDateTime = is_string($data['nextLifecycleDateTime']) ? new \DateTimeImmutable($data['nextLifecycleDateTime']) : $data['nextLifecycleDateTime'];
        }
        if (isset($data['ownerId'])) {
            $this->ownerId = $data['ownerId'];
        }
        if (isset($data['ownerTenantId'])) {
            $this->ownerTenantId = $data['ownerTenantId'];
        }
        if (isset($data['ownerType'])) {
            $this->ownerType = $data['ownerType'];
        }
        if (isset($data['serviceStatus'])) {
            $this->serviceStatus = $data['serviceStatus'];
        }
        if (isset($data['skuId'])) {
            $this->skuId = $data['skuId'];
        }
        if (isset($data['skuPartNumber'])) {
            $this->skuPartNumber = $data['skuPartNumber'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
        if (isset($data['totalLicenses'])) {
            $this->totalLicenses = is_numeric($data['totalLicenses']) ? (float)$data['totalLicenses'] : $data['totalLicenses'];
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
