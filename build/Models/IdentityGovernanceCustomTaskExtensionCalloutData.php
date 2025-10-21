<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceCustomTaskExtensionCalloutData
 */
class IdentityGovernanceCustomTaskExtensionCalloutData
{
    public function __construct(
        /**  */
        public ?User $subject = null,
        /**  */
        public ?IdentityGovernanceTask $task = null,
        /**  */
        public ?IdentityGovernanceTaskProcessingResult $taskProcessingresult = null,
        /**  */
        public ?IdentityGovernanceWorkflow $workflow = null
    ) {}
}
