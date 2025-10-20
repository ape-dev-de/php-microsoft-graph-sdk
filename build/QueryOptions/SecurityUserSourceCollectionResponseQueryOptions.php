<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityUserSourceCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityUserSourceCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityUserSourceCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityUserSourceCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
