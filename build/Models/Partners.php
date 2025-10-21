<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Partners
 */
class Partners
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Represents billing details for billed and unbilled data. */
        public ?PartnersBillingBilling $billing = null
    ) {}
}
