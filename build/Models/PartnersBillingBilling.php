<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PartnersBillingBilling
 */
class PartnersBillingBilling
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Represents metadata for the exported data.
     * @var PartnersBillingManifest[]
     */
    public array $manifests = [];

    /** 
     * Represents an operation to export the billing data of a partner.
     * @var PartnersBillingOperation[]
     */
    public array $operations = [];

    /**  */
    public ?PartnersBillingBillingReconciliation $reconciliation = null;

    /**  */
    public ?PartnersBillingAzureUsage $usage = null;


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
        if (isset($data['manifests'])) {
            $this->manifests = $data['manifests'];
        }
        if (isset($data['operations'])) {
            $this->operations = $data['operations'];
        }
        if (isset($data['reconciliation'])) {
            $this->reconciliation = is_array($data['reconciliation']) ? new PartnersBillingBillingReconciliation($data['reconciliation']) : $data['reconciliation'];
        }
        if (isset($data['usage'])) {
            $this->usage = is_array($data['usage']) ? new PartnersBillingAzureUsage($data['usage']) : $data['usage'];
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
