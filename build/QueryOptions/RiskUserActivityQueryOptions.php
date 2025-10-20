<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RiskUserActivity resources
 *
 * Available select fields:
 * - detail
 * - riskEventTypes
 */
class RiskUserActivityQueryOptions extends QueryOptions
{
    public const FIELD_DETAIL = 'detail';
    public const FIELD_RISK_EVENT_TYPES = 'riskEventTypes';

    /**
     * Select specific RiskUserActivity properties
     * 
     * @param array<string> $select Use RiskUserActivityQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
