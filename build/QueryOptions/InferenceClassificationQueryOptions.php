<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for InferenceClassification resources
 *
 * Available select fields:
 * - overrides
 */
class InferenceClassificationQueryOptions extends QueryOptions
{
    public const FIELD_OVERRIDES = 'overrides';

    /**
     * Select specific InferenceClassification properties
     * 
     * @param array<string> $select Use InferenceClassificationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
