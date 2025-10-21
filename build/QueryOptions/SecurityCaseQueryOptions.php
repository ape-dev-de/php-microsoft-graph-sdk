<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityCase resources
 *
 * Available select fields:
 */
class SecurityCaseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityCase
     */

    /**
     * Select specific SecurityCase properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
