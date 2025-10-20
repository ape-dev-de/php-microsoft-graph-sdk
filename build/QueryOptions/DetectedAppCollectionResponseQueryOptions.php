<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DetectedAppCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DetectedAppCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DetectedAppCollectionResponse properties
     * 
     * @param array<string> $select Use DetectedAppCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
