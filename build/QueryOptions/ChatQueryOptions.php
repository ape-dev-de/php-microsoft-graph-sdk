<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Chat resources
 *
 * Available select fields:
 */
class ChatQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Chat
     */

    /**
     * Select specific Chat properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
