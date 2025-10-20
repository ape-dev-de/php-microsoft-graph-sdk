<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceCustomTaskExtensionCallbackData resources
 *
 * Available select fields:
 * - operationStatus
 */
class IdentityGovernanceCustomTaskExtensionCallbackDataQueryOptions extends QueryOptions
{
    public const FIELD_OPERATION_STATUS = 'operationStatus';

    /**
     * Select specific IdentityGovernanceCustomTaskExtensionCallbackData properties
     * 
     * @param array<string> $select Use IdentityGovernanceCustomTaskExtensionCallbackDataQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
