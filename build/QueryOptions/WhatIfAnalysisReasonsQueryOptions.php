<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WhatIfAnalysisReasons resources
 *
 * Available select fields:
 */
class WhatIfAnalysisReasonsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WhatIfAnalysisReasons
     */

    /**
     * Select specific WhatIfAnalysisReasons properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
