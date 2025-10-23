<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PartnersBillingAzureUsage
 */
class PartnersBillingAzureUsage
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?PartnersBillingBilledUsage $billed = null;

    /**  */
    public ?PartnersBillingUnbilledUsage $unbilled = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['billed'])) {
            $this->billed = is_array($data['billed']) ? new PartnersBillingBilledUsage($data['billed']) : $data['billed'];
        }
        if (isset($data['unbilled'])) {
            $this->unbilled = is_array($data['unbilled']) ? new PartnersBillingUnbilledUsage($data['unbilled']) : $data['unbilled'];
        }
    }
}
