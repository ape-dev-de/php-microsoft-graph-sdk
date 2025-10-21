<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChatMessageMentionedIdentitySet resources
 *
 * Available select fields:
 * - conversation
 */
class ChatMessageMentionedIdentitySetQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ChatMessageMentionedIdentitySet
     */
    public const FIELD_CONVERSATION = 'conversation';

    /**
     * Select specific ChatMessageMentionedIdentitySet properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
