<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityCaseOperation resources
 *
 * Available select fields:
 */
class SecurityCaseOperationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityCaseOperation
     */

    /**
     * Select specific SecurityCaseOperation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
