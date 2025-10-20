<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UnifiedRoleAssignmentCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class UnifiedRoleAssignmentCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific UnifiedRoleAssignmentCollectionResponse properties
     * 
     * @param array<string> $select Use UnifiedRoleAssignmentCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
