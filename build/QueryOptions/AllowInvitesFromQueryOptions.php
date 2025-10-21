<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AllowInvitesFrom resources
 *
 * Available select fields:
 */
class AllowInvitesFromQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AllowInvitesFrom
     */

    /**
     * Select specific AllowInvitesFrom properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
