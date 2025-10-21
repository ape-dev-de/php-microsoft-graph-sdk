<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MembersAddedEventMessageDetail resources
 *
 * Available select fields:
 */
class MembersAddedEventMessageDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MembersAddedEventMessageDetail
     */

    /**
     * Select specific MembersAddedEventMessageDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
