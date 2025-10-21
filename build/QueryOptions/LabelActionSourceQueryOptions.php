<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LabelActionSource resources
 *
 * Available select fields:
 */
class LabelActionSourceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for LabelActionSource
     */

    /**
     * Select specific LabelActionSource properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
