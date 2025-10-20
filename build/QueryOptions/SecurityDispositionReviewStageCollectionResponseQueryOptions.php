<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityDispositionReviewStageCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityDispositionReviewStageCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityDispositionReviewStageCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityDispositionReviewStageCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
