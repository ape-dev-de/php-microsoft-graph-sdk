<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PartnersBillingBillingReconciliation
 */
class PartnersBillingBillingReconciliation
{
    public function __construct(
        /**  */
        public ?string $billed = null,
        /**  */
        public ?string $unbilled = null
    ) {}
}
