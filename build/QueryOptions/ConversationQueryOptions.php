<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Conversation resources
 *
 * Available select fields:
 */
class ConversationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Conversation
     */

    /**
     * Select specific Conversation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
