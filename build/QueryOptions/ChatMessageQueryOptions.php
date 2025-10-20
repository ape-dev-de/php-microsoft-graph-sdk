<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ChatMessage resources
 *
 * Available select fields:
 * - attachments
 * - body
 * - channelIdentity
 * - chatId
 * - createdDateTime
 * - deletedDateTime
 * - etag
 * - eventDetail
 * - from
 * - importance
 * - lastEditedDateTime
 * - lastModifiedDateTime
 * - locale
 * - mentions
 * - messageHistory
 * - messageType
 * - policyViolation
 * - reactions
 * - replyToId
 * - subject
 * - summary
 * - webUrl
 * - hostedContents
 * - replies
 */
class ChatMessageQueryOptions extends QueryOptions
{
    public const FIELD_ATTACHMENTS = 'attachments';
    public const FIELD_BODY = 'body';
    public const FIELD_CHANNEL_IDENTITY = 'channelIdentity';
    public const FIELD_CHAT_ID = 'chatId';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DELETED_DATE_TIME = 'deletedDateTime';
    public const FIELD_ETAG = 'etag';
    public const FIELD_EVENT_DETAIL = 'eventDetail';
    public const FIELD_FROM = 'from';
    public const FIELD_IMPORTANCE = 'importance';
    public const FIELD_LAST_EDITED_DATE_TIME = 'lastEditedDateTime';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_LOCALE = 'locale';
    public const FIELD_MENTIONS = 'mentions';
    public const FIELD_MESSAGE_HISTORY = 'messageHistory';
    public const FIELD_MESSAGE_TYPE = 'messageType';
    public const FIELD_POLICY_VIOLATION = 'policyViolation';
    public const FIELD_REACTIONS = 'reactions';
    public const FIELD_REPLY_TO_ID = 'replyToId';
    public const FIELD_SUBJECT = 'subject';
    public const FIELD_SUMMARY = 'summary';
    public const FIELD_WEB_URL = 'webUrl';
    public const FIELD_HOSTED_CONTENTS = 'hostedContents';
    public const FIELD_REPLIES = 'replies';

    /**
     * Select specific ChatMessage properties
     * 
     * @param array<string> $select Use ChatMessageQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
