<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WebPart resources
 *
 * Available select fields:
 */
class WebPartQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WebPart
     */

    /**
     * Select specific WebPart properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
