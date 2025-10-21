<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessPolicyDetail
 */
class ConditionalAccessPolicyDetail
{
    public function __construct(
        /**  */
        public ?string $conditions = null,
        /** Represents grant controls that must be fulfilled for the policy. */
        public ?string $grantControls = null,
        /** Represents a complex type of session controls that is enforced after sign-in. */
        public ?string $sessionControls = null
    ) {}
}
