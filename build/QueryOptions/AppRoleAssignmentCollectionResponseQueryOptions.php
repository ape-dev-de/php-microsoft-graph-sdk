<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AppRoleAssignmentCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AppRoleAssignmentCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AppRoleAssignmentCollectionResponse properties
     * 
     * @param array<string> $select Use AppRoleAssignmentCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
