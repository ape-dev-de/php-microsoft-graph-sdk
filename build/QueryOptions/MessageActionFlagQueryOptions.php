<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MessageActionFlag resources
 *
 * Available select fields:
 */
class MessageActionFlagQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MessageActionFlag
     */

    /**
     * Select specific MessageActionFlag properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
