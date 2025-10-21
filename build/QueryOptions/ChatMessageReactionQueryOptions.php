<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChatMessageReaction resources
 *
 * Available select fields:
 * - createdDateTime
 * - displayName
 * - reactionContentUrl
 * - reactionType
 * - user
 */
class ChatMessageReactionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ChatMessageReaction
     */
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_REACTION_CONTENT_URL = 'reactionContentUrl';
    public const FIELD_REACTION_TYPE = 'reactionType';
    public const FIELD_USER = 'user';

    /**
     * Select specific ChatMessageReaction properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
