<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserTeamwork resources
 *
 * Available select fields:
 */
class UserTeamworkQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserTeamwork
     */

    /**
     * Select specific UserTeamwork properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
