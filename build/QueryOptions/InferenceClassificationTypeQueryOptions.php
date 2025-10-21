<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for InferenceClassificationType resources
 *
 * Available select fields:
 */
class InferenceClassificationTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for InferenceClassificationType
     */

    /**
     * Select specific InferenceClassificationType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
