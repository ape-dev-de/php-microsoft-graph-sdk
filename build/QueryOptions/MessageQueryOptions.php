<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Message resources
 *
 * Available select fields:
 * - bccRecipients
 * - body
 * - bodyPreview
 * - ccRecipients
 * - conversationId
 * - conversationIndex
 * - flag
 * - from
 * - hasAttachments
 * - importance
 * - inferenceClassification
 * - internetMessageHeaders
 * - internetMessageId
 * - isDeliveryReceiptRequested
 * - isDraft
 * - isRead
 * - isReadReceiptRequested
 * - parentFolderId
 * - receivedDateTime
 * - replyTo
 * - sender
 * - sentDateTime
 * - subject
 * - toRecipients
 * - uniqueBody
 * - webLink
 * - attachments
 * - extensions
 * - multiValueExtendedProperties
 * - singleValueExtendedProperties
 */
class MessageQueryOptions extends QueryOptions
{
    public const FIELD_BCC_RECIPIENTS = 'bccRecipients';
    public const FIELD_BODY = 'body';
    public const FIELD_BODY_PREVIEW = 'bodyPreview';
    public const FIELD_CC_RECIPIENTS = 'ccRecipients';
    public const FIELD_CONVERSATION_ID = 'conversationId';
    public const FIELD_CONVERSATION_INDEX = 'conversationIndex';
    public const FIELD_FLAG = 'flag';
    public const FIELD_FROM = 'from';
    public const FIELD_HAS_ATTACHMENTS = 'hasAttachments';
    public const FIELD_IMPORTANCE = 'importance';
    public const FIELD_INFERENCE_CLASSIFICATION = 'inferenceClassification';
    public const FIELD_INTERNET_MESSAGE_HEADERS = 'internetMessageHeaders';
    public const FIELD_INTERNET_MESSAGE_ID = 'internetMessageId';
    public const FIELD_IS_DELIVERY_RECEIPT_REQUESTED = 'isDeliveryReceiptRequested';
    public const FIELD_IS_DRAFT = 'isDraft';
    public const FIELD_IS_READ = 'isRead';
    public const FIELD_IS_READ_RECEIPT_REQUESTED = 'isReadReceiptRequested';
    public const FIELD_PARENT_FOLDER_ID = 'parentFolderId';
    public const FIELD_RECEIVED_DATE_TIME = 'receivedDateTime';
    public const FIELD_REPLY_TO = 'replyTo';
    public const FIELD_SENDER = 'sender';
    public const FIELD_SENT_DATE_TIME = 'sentDateTime';
    public const FIELD_SUBJECT = 'subject';
    public const FIELD_TO_RECIPIENTS = 'toRecipients';
    public const FIELD_UNIQUE_BODY = 'uniqueBody';
    public const FIELD_WEB_LINK = 'webLink';
    public const FIELD_ATTACHMENTS = 'attachments';
    public const FIELD_EXTENSIONS = 'extensions';
    public const FIELD_MULTI_VALUE_EXTENDED_PROPERTIES = 'multiValueExtendedProperties';
    public const FIELD_SINGLE_VALUE_EXTENDED_PROPERTIES = 'singleValueExtendedProperties';

    /**
     * Select specific Message properties
     * 
     * @param array<string> $select Use MessageQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
