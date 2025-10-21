<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Conversation resources
 *
 * Available select fields:
 * - hasAttachments
 * - lastDeliveredDateTime
 * - preview
 * - topic
 * - uniqueSenders
 * - threads
 */
class ConversationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Conversation
     */
    public const FIELD_HAS_ATTACHMENTS = 'hasAttachments';
    public const FIELD_LAST_DELIVERED_DATE_TIME = 'lastDeliveredDateTime';
    public const FIELD_PREVIEW = 'preview';
    public const FIELD_TOPIC = 'topic';
    public const FIELD_UNIQUE_SENDERS = 'uniqueSenders';
    public const FIELD_THREADS = 'threads';

    /**
     * Select specific Conversation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
