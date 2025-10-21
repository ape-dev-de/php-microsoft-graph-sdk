<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AllowedLobbyAdmitterRoles resources
 *
 * Available select fields:
 */
class AllowedLobbyAdmitterRolesQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AllowedLobbyAdmitterRoles
     */

    /**
     * Select specific AllowedLobbyAdmitterRoles properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
