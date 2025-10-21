<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for InternalSponsors resources
 *
 * Available select fields:
 */
class InternalSponsorsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for InternalSponsors
     */

    /**
     * Select specific InternalSponsors properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
