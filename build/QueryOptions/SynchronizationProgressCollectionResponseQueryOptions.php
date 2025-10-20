<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SynchronizationProgressCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SynchronizationProgressCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SynchronizationProgressCollectionResponse properties
     * 
     * @param array<string> $select Use SynchronizationProgressCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
