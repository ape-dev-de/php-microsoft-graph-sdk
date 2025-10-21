<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MediaConfig resources
 *
 * Available select fields:
 */
class MediaConfigQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MediaConfig
     */

    /**
     * Select specific MediaConfig properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
