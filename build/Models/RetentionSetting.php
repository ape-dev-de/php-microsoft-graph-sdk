<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RetentionSetting
 */
class RetentionSetting
{
    public function __construct(
        /** The frequency of the backup. */
        public ?string $interval = null,
        /** The period of time to retain the protected data for a single Microsoft 365 service. */
        public ?string $period = null
    ) {}
}
