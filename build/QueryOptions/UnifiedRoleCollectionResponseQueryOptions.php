<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRoleCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UnifiedRoleCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UnifiedRoleCollectionResponse properties
     * 
     * @param array<string> $select Use UnifiedRoleCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
