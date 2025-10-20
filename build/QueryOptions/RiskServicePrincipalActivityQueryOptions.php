<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RiskServicePrincipalActivity resources
 *
 * Available select fields:
 * - detail
 * - riskEventTypes
 */
class RiskServicePrincipalActivityQueryOptions extends QueryOptions
{
    public const FIELD_DETAIL = 'detail';
    public const FIELD_RISK_EVENT_TYPES = 'riskEventTypes';

    /**
     * Select specific RiskServicePrincipalActivity properties
     * 
     * @param array<string> $select Use RiskServicePrincipalActivityQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
