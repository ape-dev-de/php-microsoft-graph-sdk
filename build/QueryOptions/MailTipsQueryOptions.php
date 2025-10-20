<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MailTips resources
 *
 * Available select fields:
 * - automaticReplies
 * - customMailTip
 * - deliveryRestricted
 * - emailAddress
 * - error
 * - externalMemberCount
 * - isModerated
 * - mailboxFull
 * - maxMessageSize
 * - recipientScope
 * - recipientSuggestions
 * - totalMemberCount
 */
class MailTipsQueryOptions extends QueryOptions
{
    public const FIELD_AUTOMATIC_REPLIES = 'automaticReplies';
    public const FIELD_CUSTOM_MAIL_TIP = 'customMailTip';
    public const FIELD_DELIVERY_RESTRICTED = 'deliveryRestricted';
    public const FIELD_EMAIL_ADDRESS = 'emailAddress';
    public const FIELD_ERROR = 'error';
    public const FIELD_EXTERNAL_MEMBER_COUNT = 'externalMemberCount';
    public const FIELD_IS_MODERATED = 'isModerated';
    public const FIELD_MAILBOX_FULL = 'mailboxFull';
    public const FIELD_MAX_MESSAGE_SIZE = 'maxMessageSize';
    public const FIELD_RECIPIENT_SCOPE = 'recipientScope';
    public const FIELD_RECIPIENT_SUGGESTIONS = 'recipientSuggestions';
    public const FIELD_TOTAL_MEMBER_COUNT = 'totalMemberCount';

    /**
     * Select specific MailTips properties
     * 
     * @param array<string> $select Use MailTipsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
