<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsFailureInfo
 */
class CallRecordsFailureInfo
{
    public function __construct(
        /** Classification of why a call or portion of a call failed. */
        public ?string $reason = null,
        /**  */
        public ?string $stage = null
    ) {}
}
