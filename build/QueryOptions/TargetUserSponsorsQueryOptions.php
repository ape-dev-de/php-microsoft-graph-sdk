<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TargetUserSponsors resources
 *
 * Available select fields:
 */
class TargetUserSponsorsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TargetUserSponsors
     */

    /**
     * Select specific TargetUserSponsors properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
