<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OfferShiftRequest resources
 *
 * Available select fields:
 */
class OfferShiftRequestQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OfferShiftRequest
     */

    /**
     * Select specific OfferShiftRequest properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
