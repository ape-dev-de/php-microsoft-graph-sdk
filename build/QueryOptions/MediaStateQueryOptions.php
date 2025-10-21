<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MediaState resources
 *
 * Available select fields:
 */
class MediaStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MediaState
     */

    /**
     * Select specific MediaState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
