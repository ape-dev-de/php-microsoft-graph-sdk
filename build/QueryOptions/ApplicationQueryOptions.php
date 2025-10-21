<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Application resources
 *
 * Available select fields:
 */
class ApplicationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Application
     */

    /**
     * Select specific Application properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
