<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WhatIfAnalysisResultCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class WhatIfAnalysisResultCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific WhatIfAnalysisResultCollectionResponse properties
     * 
     * @param array<string> $select Use WhatIfAnalysisResultCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
