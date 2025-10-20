<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WhatIfAnalysisResult resources
 *
 * Available select fields:
 * - analysisReasons
 * - policyApplies
 */
class WhatIfAnalysisResultQueryOptions extends QueryOptions
{
    public const FIELD_ANALYSIS_REASONS = 'analysisReasons';
    public const FIELD_POLICY_APPLIES = 'policyApplies';

    /**
     * Select specific WhatIfAnalysisResult properties
     * 
     * @param array<string> $select Use WhatIfAnalysisResultQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
