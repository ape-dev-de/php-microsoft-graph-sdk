<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ServiceUpdateMessageCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ServiceUpdateMessageCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ServiceUpdateMessageCollectionResponse properties
     * 
     * @param array<string> $select Use ServiceUpdateMessageCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
