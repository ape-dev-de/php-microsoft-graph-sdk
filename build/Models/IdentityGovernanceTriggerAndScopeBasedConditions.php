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
        public ?SubjectSet $scope = null,
        /** What triggers a workflow to run. */
        public ?IdentityGovernanceWorkflowExecutionTrigger $trigger = null
    ) {}
}
