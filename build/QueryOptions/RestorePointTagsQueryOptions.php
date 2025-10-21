<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RestorePointTags resources
 *
 * Available select fields:
 */
class RestorePointTagsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RestorePointTags
     */

    /**
     * Select specific RestorePointTags properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
