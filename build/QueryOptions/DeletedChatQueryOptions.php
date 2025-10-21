<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeletedChat resources
 *
 * Available select fields:
 */
class DeletedChatQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeletedChat
     */

    /**
     * Select specific DeletedChat properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
