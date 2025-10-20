<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChatMessageMention resources
 *
 * Available select fields:
 * - id
 * - mentioned
 * - mentionText
 */
class ChatMessageMentionQueryOptions extends QueryOptions
{
    public const FIELD_ID = 'id';
    public const FIELD_MENTIONED = 'mentioned';
    public const FIELD_MENTION_TEXT = 'mentionText';

    /**
     * Select specific ChatMessageMention properties
     * 
     * @param array<string> $select Use ChatMessageMentionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
