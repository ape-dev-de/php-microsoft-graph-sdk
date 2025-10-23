<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PartnersBillingBilling
 */
class PartnersBillingBilling
{
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
            $this->reconciliation = $data['reconciliation'];
        }
        if (isset($data['usage'])) {
            $this->usage = $data['usage'];
        }
    }
}
