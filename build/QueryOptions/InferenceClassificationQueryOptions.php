<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for InferenceClassification resources
 *
 * Available select fields:
 */
class InferenceClassificationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for InferenceClassification
     */

    /**
     * Select specific InferenceClassification properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
