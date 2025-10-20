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
    public const FIELD_CONVERSATION = 'conversation';

    /**
     * Select specific ChatMessageMentionedIdentitySet properties
     * 
     * @param array<string> $select Use ChatMessageMentionedIdentitySetQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
