<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserSignInInsight
 */
class UserSignInInsight
{
    public function __construct(
        /** Indicates when the user last signed in. */
        public ?\DateTimeInterface $lastSignInDateTime = null
    ) {}
}
