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
    /**
     * Available select fields for WhatIfAnalysisResult
     */
    public const FIELD_ANALYSIS_REASONS = 'analysisReasons';
    public const FIELD_POLICY_APPLIES = 'policyApplies';

    /**
     * Select specific WhatIfAnalysisResult properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
