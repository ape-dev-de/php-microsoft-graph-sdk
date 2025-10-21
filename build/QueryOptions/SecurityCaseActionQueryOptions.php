<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityCaseAction resources
 *
 * Available select fields:
 */
class SecurityCaseActionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityCaseAction
     */

    /**
     * Select specific SecurityCaseAction properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
