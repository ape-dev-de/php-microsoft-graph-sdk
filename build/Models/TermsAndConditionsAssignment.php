<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TermsAndConditionsAssignment
 */
class TermsAndConditionsAssignment
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Assignment target that the T&C policy is assigned to. */
        public ?string $target = null
    ) {}
}
