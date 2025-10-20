<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for InferenceClassificationOverrideCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class InferenceClassificationOverrideCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific InferenceClassificationOverrideCollectionResponse properties
     * 
     * @param array<string> $select Use InferenceClassificationOverrideCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
