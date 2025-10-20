<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConversationThread resources
 *
 * Available select fields:
 * - ccRecipients
 * - hasAttachments
 * - isLocked
 * - lastDeliveredDateTime
 * - preview
 * - topic
 * - toRecipients
 * - uniqueSenders
 * - posts
 */
class ConversationThreadQueryOptions extends QueryOptions
{
    public const FIELD_CC_RECIPIENTS = 'ccRecipients';
    public const FIELD_HAS_ATTACHMENTS = 'hasAttachments';
    public const FIELD_IS_LOCKED = 'isLocked';
    public const FIELD_LAST_DELIVERED_DATE_TIME = 'lastDeliveredDateTime';
    public const FIELD_PREVIEW = 'preview';
    public const FIELD_TOPIC = 'topic';
    public const FIELD_TO_RECIPIENTS = 'toRecipients';
    public const FIELD_UNIQUE_SENDERS = 'uniqueSenders';
    public const FIELD_POSTS = 'posts';

    /**
     * Select specific ConversationThread properties
     * 
     * @param array<string> $select Use ConversationThreadQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
