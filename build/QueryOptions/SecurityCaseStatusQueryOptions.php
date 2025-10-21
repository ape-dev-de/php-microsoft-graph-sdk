<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityCaseStatus resources
 *
 * Available select fields:
 */
class SecurityCaseStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityCaseStatus
     */

    /**
     * Select specific SecurityCaseStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
