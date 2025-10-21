<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RiskEventType resources
 *
 * Available select fields:
 */
class RiskEventTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RiskEventType
     */

    /**
     * Select specific RiskEventType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
