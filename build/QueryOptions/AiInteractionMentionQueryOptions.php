<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AiInteractionMention resources
 *
 * Available select fields:
 * - mentioned
 * - mentionId
 * - mentionText
 */
class AiInteractionMentionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AiInteractionMention
     */
    public const FIELD_MENTIONED = 'mentioned';
    public const FIELD_MENTION_ID = 'mentionId';
    public const FIELD_MENTION_TEXT = 'mentionText';

    /**
     * Select specific AiInteractionMention properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
