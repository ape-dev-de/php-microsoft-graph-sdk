<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserSignInInsight
 */
class UserSignInInsight
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Indicates when the insight was created. */
        public ?\DateTimeInterface $insightCreatedDateTime = null,
        /** Indicates when the user last signed in. */
        public ?\DateTimeInterface $lastSignInDateTime = null
    ) {}
}
