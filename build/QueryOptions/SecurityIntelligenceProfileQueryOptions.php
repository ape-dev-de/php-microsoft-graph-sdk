<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityIntelligenceProfile resources
 *
 * Available select fields:
 */
class SecurityIntelligenceProfileQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityIntelligenceProfile
     */

    /**
     * Select specific SecurityIntelligenceProfile properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
