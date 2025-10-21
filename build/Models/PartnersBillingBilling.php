<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PartnersBillingBilling
 */
class PartnersBillingBilling
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Represents metadata for the exported data. */
        public array $manifests = [],
        /** Represents an operation to export the billing data of a partner. */
        public array $operations = [],
        /**  */
        public ?string $reconciliation = null,
        /**  */
        public ?string $usage = null
    ) {}
}
