<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IncludeAllAccountTargetContent resources
 *
 * Available select fields:
 */
class IncludeAllAccountTargetContentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IncludeAllAccountTargetContent
     */

    /**
     * Select specific IncludeAllAccountTargetContent properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
