<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Post resources
 *
 * Available select fields:
 * - body
 * - conversationId
 * - conversationThreadId
 * - from
 * - hasAttachments
 * - newParticipants
 * - receivedDateTime
 * - sender
 * - attachments
 * - extensions
 * - inReplyTo
 * - multiValueExtendedProperties
 * - singleValueExtendedProperties
 */
class PostQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Post
     */
    public const FIELD_BODY = 'body';
    public const FIELD_CONVERSATION_ID = 'conversationId';
    public const FIELD_CONVERSATION_THREAD_ID = 'conversationThreadId';
    public const FIELD_FROM = 'from';
    public const FIELD_HAS_ATTACHMENTS = 'hasAttachments';
    public const FIELD_NEW_PARTICIPANTS = 'newParticipants';
    public const FIELD_RECEIVED_DATE_TIME = 'receivedDateTime';
    public const FIELD_SENDER = 'sender';
    public const FIELD_ATTACHMENTS = 'attachments';
    public const FIELD_EXTENSIONS = 'extensions';
    public const FIELD_IN_REPLY_TO = 'inReplyTo';
    public const FIELD_MULTI_VALUE_EXTENDED_PROPERTIES = 'multiValueExtendedProperties';
    public const FIELD_SINGLE_VALUE_EXTENDED_PROPERTIES = 'singleValueExtendedProperties';

    /**
     * Select specific Post properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
