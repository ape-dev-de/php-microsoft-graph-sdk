<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ContentBase resources
 *
 * Available select fields:
 */
class ContentBaseQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ContentBase
     */

    /**
     * Select specific ContentBase properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
