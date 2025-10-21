<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RelyingPartyDetailedSummary resources
 *
 * Available select fields:
 */
class RelyingPartyDetailedSummaryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RelyingPartyDetailedSummary
     */

    /**
     * Select specific RelyingPartyDetailedSummary properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
