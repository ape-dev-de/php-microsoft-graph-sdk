<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Invitation resources
 *
 * Available select fields:
 */
class InvitationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Invitation
     */

    /**
     * Select specific Invitation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
