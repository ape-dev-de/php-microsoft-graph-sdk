<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityCaseType resources
 *
 * Available select fields:
 */
class SecurityCaseTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityCaseType
     */

    /**
     * Select specific SecurityCaseType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
