<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RemovedState
 */
class RemovedState
{
    public function __construct(
        /** The removal reason for the participant resource. */
        public ?string $reason = null
    ) {}
}
