<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityHostReputationRule
 */
class SecurityHostReputationRule
{
    public function __construct(
        /** The description of the rule that gives more context. */
        public ?string $description = null,
        /** The name of the rule. */
        public ?string $name = null,
        /** Link to a web page with details related to this rule. */
        public ?string $relatedDetailsUrl = null,
        /**  */
        public ?SecurityHostReputationRuleSeverity $severity = null
    ) {}
}
