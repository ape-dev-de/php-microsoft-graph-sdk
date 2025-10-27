<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SubscribedSku
 */
class SubscribedSku
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The unique ID of the account this SKU belongs to. */
    public ?string $accountId = null;

    /** The name of the account this SKU belongs to. */
    public ?string $accountName = null;

    /** The target class for this SKU. Only SKUs with target class User are assignable. Possible values are: User, Company. */
    public ?string $appliesTo = null;

    /** Enabled indicates that the prepaidUnits property has at least one unit that is enabled. LockedOut indicates that the customer canceled their subscription. Possible values are: Enabled, Warning, Suspended, Deleted, LockedOut. */
    public ?string $capabilityStatus = null;

    /** The number of licenses that have been assigned. */
    public ?float $consumedUnits = null;

    /** 
     * Information about the number and status of prepaid licenses.
     * @var LicenseUnitsDetail|\stdClass|null
     */
    public mixed $prepaidUnits = null;

    /** 
     * Information about the service plans that are available with the SKU. Not nullable.
     * @var ServicePlanInfo[]
     */
    public array $servicePlans = [];

    /** The unique identifier (GUID) for the service SKU. */
    public ?string $skuId = null;

    /** The SKU part number; for example: AAD_PREMIUM or RMSBASIC. To get a list of commercial subscriptions that an organization has acquired, see List subscribedSkus. */
    public ?string $skuPartNumber = null;

    /** 
     * A list of all subscription IDs associated with this SKU.
     * @var string[]
     */
    public array $subscriptionIds = [];


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
        if (isset($data['accountId'])) {
            $this->accountId = $data['accountId'];
        }
        if (isset($data['accountName'])) {
            $this->accountName = $data['accountName'];
        }
        if (isset($data['appliesTo'])) {
            $this->appliesTo = $data['appliesTo'];
        }
        if (isset($data['capabilityStatus'])) {
            $this->capabilityStatus = $data['capabilityStatus'];
        }
        if (isset($data['consumedUnits'])) {
            $this->consumedUnits = $data['consumedUnits'];
        }
        if (isset($data['prepaidUnits'])) {
            $this->prepaidUnits = is_array($data['prepaidUnits']) ? new LicenseUnitsDetail($data['prepaidUnits']) : $data['prepaidUnits'];
        }
        if (isset($data['servicePlans'])) {
            $this->servicePlans = $data['servicePlans'];
        }
        if (isset($data['skuId'])) {
            $this->skuId = $data['skuId'];
        }
        if (isset($data['skuPartNumber'])) {
            $this->skuPartNumber = $data['skuPartNumber'];
        }
        if (isset($data['subscriptionIds'])) {
            $this->subscriptionIds = $data['subscriptionIds'];
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
