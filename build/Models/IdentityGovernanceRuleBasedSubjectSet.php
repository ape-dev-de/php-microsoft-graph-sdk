<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceRuleBasedSubjectSet
 */
class IdentityGovernanceRuleBasedSubjectSet
{
    public function __construct(
        /** The rule for the subject set. Lifecycle Workflows supports a rich set of user properties for configuring the rules using $filter query expressions. For more information, see supported user and query parameters. */
        public ?string $rule = null
    ) {}
}
