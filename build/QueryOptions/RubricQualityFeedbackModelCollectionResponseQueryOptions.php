<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RubricQualityFeedbackModelCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class RubricQualityFeedbackModelCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific RubricQualityFeedbackModelCollectionResponse properties
     * 
     * @param array<string> $select Use RubricQualityFeedbackModelCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
