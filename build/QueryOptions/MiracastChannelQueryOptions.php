<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MiracastChannel resources
 *
 * Available select fields:
 */
class MiracastChannelQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MiracastChannel
     */

    /**
     * Select specific MiracastChannel properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
