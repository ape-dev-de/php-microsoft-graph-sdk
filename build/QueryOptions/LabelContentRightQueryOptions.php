<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LabelContentRight resources
 *
 * Available select fields:
 */
class LabelContentRightQueryOptions extends QueryOptions
{
    /**
     * Available select fields for LabelContentRight
     */

    /**
     * Select specific LabelContentRight properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
