<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceTriggerAndScopeBasedConditions
 */
class IdentityGovernanceTriggerAndScopeBasedConditions
{
    public function __construct(
        /** Defines who the workflow runs for. */
        public ?string $scope = null,
        /** What triggers a workflow to run. */
        public ?string $trigger = null
    ) {}
}
