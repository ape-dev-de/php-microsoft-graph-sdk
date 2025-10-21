<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChatMessageActions resources
 *
 * Available select fields:
 */
class ChatMessageActionsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ChatMessageActions
     */

    /**
     * Select specific ChatMessageActions properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
