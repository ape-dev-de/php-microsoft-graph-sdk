<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityCaseOperationStatus resources
 *
 * Available select fields:
 */
class SecurityCaseOperationStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityCaseOperationStatus
     */

    /**
     * Select specific SecurityCaseOperationStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
