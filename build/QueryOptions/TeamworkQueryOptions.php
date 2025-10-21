<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Teamwork resources
 *
 * Available select fields:
 */
class TeamworkQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Teamwork
     */

    /**
     * Select specific Teamwork properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
