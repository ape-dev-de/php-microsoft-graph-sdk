<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttributeRuleMembers
 */
class AttributeRuleMembers
{
    public function __construct(
        /** A description of the membership rule. */
        public ?string $description = null,
        /** Determines the allowed target users for this policy. For more information about the syntax of the membership rule, see Membership Rules syntax. */
        public ?string $membershipRule = null
    ) {}
}
