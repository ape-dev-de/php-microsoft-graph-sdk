<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Partners
 */
class Partners
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Represents billing details for billed and unbilled data.
     * @var PartnersBillingBilling|\stdClass|null
     */
    public mixed $billing = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['billing'])) {
            $this->billing = is_array($data['billing']) ? new PartnersBillingBilling($data['billing']) : $data['billing'];
        }
    }
}
