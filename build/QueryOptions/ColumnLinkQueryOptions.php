<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ColumnLink resources
 *
 * Available select fields:
 */
class ColumnLinkQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ColumnLink
     */

    /**
     * Select specific ColumnLink properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
