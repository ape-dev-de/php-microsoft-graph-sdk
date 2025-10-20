<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityUnifiedGroupSourceCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SecurityUnifiedGroupSourceCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SecurityUnifiedGroupSourceCollectionResponse properties
     * 
     * @param array<string> $select Use SecurityUnifiedGroupSourceCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
