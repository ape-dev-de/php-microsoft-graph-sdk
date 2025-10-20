<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRoleDefinitionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UnifiedRoleDefinitionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UnifiedRoleDefinitionCollectionResponse properties
     * 
     * @param array<string> $select Use UnifiedRoleDefinitionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
