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
        public ?string $subject = null,
        /**  */
        public ?string $task = null,
        /**  */
        public ?string $taskProcessingresult = null,
        /**  */
        public ?string $workflow = null
    ) {}
}
