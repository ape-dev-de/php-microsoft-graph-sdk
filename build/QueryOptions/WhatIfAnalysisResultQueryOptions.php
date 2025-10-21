<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WhatIfAnalysisResult resources
 *
 * Available select fields:
 */
class WhatIfAnalysisResultQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WhatIfAnalysisResult
     */

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
