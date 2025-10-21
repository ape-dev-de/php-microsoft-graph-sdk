<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityThreatIntelligence resources
 *
 * Available select fields:
 */
class SecurityThreatIntelligenceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityThreatIntelligence
     */

    /**
     * Select specific SecurityThreatIntelligence properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
