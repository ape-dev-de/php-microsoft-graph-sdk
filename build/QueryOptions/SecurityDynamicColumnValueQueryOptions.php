<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityDynamicColumnValue resources
 *
 * Available select fields:
 */
class SecurityDynamicColumnValueQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityDynamicColumnValue
     */

    /**
     * Select specific SecurityDynamicColumnValue properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
