<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for StandardWebPart resources
 *
 * Available select fields:
 */
class StandardWebPartQueryOptions extends QueryOptions
{
    /**
     * Available select fields for StandardWebPart
     */

    /**
     * Select specific StandardWebPart properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
