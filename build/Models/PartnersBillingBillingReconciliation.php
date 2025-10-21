<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PartnersBillingBillingReconciliation
 */
class PartnersBillingBillingReconciliation
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public ?PartnersBillingBilledReconciliation $billed = null,
        /**  */
        public ?PartnersBillingUnbilledReconciliation $unbilled = null
    ) {}
}
