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
    /**
     * Available select fields for ChatMessageMention
     */
    public const FIELD_ID = 'id';
    public const FIELD_MENTIONED = 'mentioned';
    public const FIELD_MENTION_TEXT = 'mentionText';

    /**
     * Select specific ChatMessageMention properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
