<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MembersJoinedEventMessageDetail resources
 *
 * Available select fields:
 */
class MembersJoinedEventMessageDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MembersJoinedEventMessageDetail
     */

    /**
     * Select specific MembersJoinedEventMessageDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
