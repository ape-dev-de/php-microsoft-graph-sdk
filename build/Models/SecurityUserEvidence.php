<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityUserEvidence
 */
class SecurityUserEvidence
{
    public function __construct(
        /**  */
        public ?string $stream = null,
        /** The user account details. */
        public ?string $userAccount = null
    ) {}
}
