<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserSecurityStateCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UserSecurityStateCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UserSecurityStateCollectionResponse properties
     * 
     * @param array<string> $select Use UserSecurityStateCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
