<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceCustomTaskExtensionCallbackData
 */
class IdentityGovernanceCustomTaskExtensionCallbackData
{
    public function __construct(
        /** Operation status that's provided by the Azure Logic App indicating whenever the Azure Logic App has run successfully or not. Supported values: completed, failed, unknownFutureValue. */
        public ?IdentityGovernanceCustomTaskExtensionOperationStatus $operationStatus = null
    ) {}
}
