<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChatMessageHostedContent resources
 *
 * Available select fields:
 */
class ChatMessageHostedContentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ChatMessageHostedContent
     */

    /**
     * Select specific ChatMessageHostedContent properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
