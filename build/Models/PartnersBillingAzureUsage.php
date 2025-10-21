<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PartnersBillingAzureUsage
 */
class PartnersBillingAzureUsage
{
    public function __construct(
        /**  */
        public ?string $billed = null,
        /**  */
        public ?string $unbilled = null
    ) {}
}
