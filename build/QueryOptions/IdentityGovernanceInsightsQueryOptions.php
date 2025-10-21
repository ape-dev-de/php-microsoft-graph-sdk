<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceInsights resources
 *
 * Available select fields:
 */
class IdentityGovernanceInsightsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityGovernanceInsights
     */

    /**
     * Select specific IdentityGovernanceInsights properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
