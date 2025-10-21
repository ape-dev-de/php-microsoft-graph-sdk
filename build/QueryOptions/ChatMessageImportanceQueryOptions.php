<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChatMessageImportance resources
 *
 * Available select fields:
 */
class ChatMessageImportanceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ChatMessageImportance
     */

    /**
     * Select specific ChatMessageImportance properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
