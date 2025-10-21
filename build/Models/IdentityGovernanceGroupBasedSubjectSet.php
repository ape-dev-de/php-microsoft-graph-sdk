<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceGroupBasedSubjectSet
 */
class IdentityGovernanceGroupBasedSubjectSet
{
    public function __construct(
        /** @var string[]  */
        public array $groups = []
    ) {}
}
