<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalSponsors resources
 *
 * Available select fields:
 */
class ExternalSponsorsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ExternalSponsors
     */

    /**
     * Select specific ExternalSponsors properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
