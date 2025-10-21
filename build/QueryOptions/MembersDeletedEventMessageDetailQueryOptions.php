<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MembersDeletedEventMessageDetail resources
 *
 * Available select fields:
 */
class MembersDeletedEventMessageDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MembersDeletedEventMessageDetail
     */

    /**
     * Select specific MembersDeletedEventMessageDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
