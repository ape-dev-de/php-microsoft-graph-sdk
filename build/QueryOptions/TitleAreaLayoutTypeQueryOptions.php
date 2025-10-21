<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TitleAreaLayoutType resources
 *
 * Available select fields:
 */
class TitleAreaLayoutTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TitleAreaLayoutType
     */

    /**
     * Select specific TitleAreaLayoutType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
