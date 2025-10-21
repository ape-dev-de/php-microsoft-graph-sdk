<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceAttributeChangeTrigger
 */
class IdentityGovernanceAttributeChangeTrigger
{
    public function __construct(
        /** The trigger attribute being changed that triggers the workflowexecutiontrigger of a workflow.) */
        public array $triggerAttributes = []
    ) {}
}
