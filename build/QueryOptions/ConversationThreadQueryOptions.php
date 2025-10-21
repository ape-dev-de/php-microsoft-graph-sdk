<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConversationThread resources
 *
 * Available select fields:
 */
class ConversationThreadQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ConversationThread
     */

    /**
     * Select specific ConversationThread properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
