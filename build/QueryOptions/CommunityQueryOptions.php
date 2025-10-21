<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Community resources
 *
 * Available select fields:
 */
class CommunityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Community
     */

    /**
     * Select specific Community properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
