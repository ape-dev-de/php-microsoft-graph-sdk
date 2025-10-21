<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityRetentionEventStatus
 */
class SecurityRetentionEventStatus
{
    public function __construct(
        /** The error if the status isn't successful. */
        public ?string $error = null,
        /** The status of the distribution. The possible values are: pending, error, success, notAvaliable. */
        public ?string $status = null
    ) {}
}
