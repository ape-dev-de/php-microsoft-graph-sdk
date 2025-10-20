<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnlineMeetingCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class OnlineMeetingCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific OnlineMeetingCollectionResponse properties
     * 
     * @param array<string> $select Use OnlineMeetingCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
