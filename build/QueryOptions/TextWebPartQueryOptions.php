<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TextWebPart resources
 *
 * Available select fields:
 */
class TextWebPartQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TextWebPart
     */

    /**
     * Select specific TextWebPart properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
