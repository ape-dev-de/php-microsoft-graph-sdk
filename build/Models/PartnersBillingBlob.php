<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PartnersBillingBlob
 */
class PartnersBillingBlob
{
    public function __construct(
        /** The blob name. */
        public ?string $name = null,
        /** The partition that contains the file. A large partition is split into multiple files, each with the same partitionValue. */
        public ?string $partitionValue = null
    ) {}
}
