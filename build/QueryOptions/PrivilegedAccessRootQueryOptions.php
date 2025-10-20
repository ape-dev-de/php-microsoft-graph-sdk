<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrivilegedAccessRoot resources
 *
 * Available select fields:
 * - group
 */
class PrivilegedAccessRootQueryOptions extends QueryOptions
{
    public const FIELD_GROUP = 'group';

    /**
     * Select specific PrivilegedAccessRoot properties
     * 
     * @param array<string> $select Use PrivilegedAccessRootQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
