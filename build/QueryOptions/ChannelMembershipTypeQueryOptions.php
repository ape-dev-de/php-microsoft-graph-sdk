<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChannelMembershipType resources
 *
 * Available select fields:
 */
class ChannelMembershipTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ChannelMembershipType
     */

    /**
     * Select specific ChannelMembershipType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
