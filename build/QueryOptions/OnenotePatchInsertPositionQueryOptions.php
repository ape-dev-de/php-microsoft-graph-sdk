<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnenotePatchInsertPosition resources
 *
 * Available select fields:
 */
class OnenotePatchInsertPositionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnenotePatchInsertPosition
     */

    /**
     * Select specific OnenotePatchInsertPosition properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
