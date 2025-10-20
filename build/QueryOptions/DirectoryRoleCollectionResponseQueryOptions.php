<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DirectoryRoleCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DirectoryRoleCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DirectoryRoleCollectionResponse properties
     * 
     * @param array<string> $select Use DirectoryRoleCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
