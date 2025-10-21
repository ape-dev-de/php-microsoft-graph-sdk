<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MembersLeftEventMessageDetail resources
 *
 * Available select fields:
 */
class MembersLeftEventMessageDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MembersLeftEventMessageDetail
     */

    /**
     * Select specific MembersLeftEventMessageDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
