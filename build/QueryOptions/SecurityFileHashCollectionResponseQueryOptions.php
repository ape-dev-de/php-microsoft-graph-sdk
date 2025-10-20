<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityFileHashCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityFileHashCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityFileHashCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityFileHashCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
