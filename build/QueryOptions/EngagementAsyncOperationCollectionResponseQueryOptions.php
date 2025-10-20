<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EngagementAsyncOperationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class EngagementAsyncOperationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific EngagementAsyncOperationCollectionResponse properties
     * 
     * @param array<string> $select Use EngagementAsyncOperationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
