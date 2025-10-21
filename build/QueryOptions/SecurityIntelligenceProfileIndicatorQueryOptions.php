<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityIntelligenceProfileIndicator resources
 *
 * Available select fields:
 */
class SecurityIntelligenceProfileIndicatorQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityIntelligenceProfileIndicator
     */

    /**
     * Select specific SecurityIntelligenceProfileIndicator properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
