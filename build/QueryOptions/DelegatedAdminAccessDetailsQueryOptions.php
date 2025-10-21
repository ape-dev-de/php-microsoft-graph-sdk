<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DelegatedAdminAccessDetails resources
 *
 * Available select fields:
 * - unifiedRoles
 */
class DelegatedAdminAccessDetailsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DelegatedAdminAccessDetails
     */
    public const FIELD_UNIFIED_ROLES = 'unifiedRoles';

    /**
     * Select specific DelegatedAdminAccessDetails properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
