<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MessageRulePredicates resources
 *
 * Available select fields:
 * - bodyContains
 * - bodyOrSubjectContains
 * - categories
 * - fromAddresses
 * - hasAttachments
 * - headerContains
 * - importance
 * - isApprovalRequest
 * - isAutomaticForward
 * - isAutomaticReply
 * - isEncrypted
 * - isMeetingRequest
 * - isMeetingResponse
 * - isNonDeliveryReport
 * - isPermissionControlled
 * - isReadReceipt
 * - isSigned
 * - isVoicemail
 * - messageActionFlag
 * - notSentToMe
 * - recipientContains
 * - senderContains
 * - sensitivity
 * - sentCcMe
 * - sentOnlyToMe
 * - sentToAddresses
 * - sentToMe
 * - sentToOrCcMe
 * - subjectContains
 * - withinSizeRange
 */
class MessageRulePredicatesQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MessageRulePredicates
     */
    public const FIELD_BODY_CONTAINS = 'bodyContains';
    public const FIELD_BODY_OR_SUBJECT_CONTAINS = 'bodyOrSubjectContains';
    public const FIELD_CATEGORIES = 'categories';
    public const FIELD_FROM_ADDRESSES = 'fromAddresses';
    public const FIELD_HAS_ATTACHMENTS = 'hasAttachments';
    public const FIELD_HEADER_CONTAINS = 'headerContains';
    public const FIELD_IMPORTANCE = 'importance';
    public const FIELD_IS_APPROVAL_REQUEST = 'isApprovalRequest';
    public const FIELD_IS_AUTOMATIC_FORWARD = 'isAutomaticForward';
    public const FIELD_IS_AUTOMATIC_REPLY = 'isAutomaticReply';
    public const FIELD_IS_ENCRYPTED = 'isEncrypted';
    public const FIELD_IS_MEETING_REQUEST = 'isMeetingRequest';
    public const FIELD_IS_MEETING_RESPONSE = 'isMeetingResponse';
    public const FIELD_IS_NON_DELIVERY_REPORT = 'isNonDeliveryReport';
    public const FIELD_IS_PERMISSION_CONTROLLED = 'isPermissionControlled';
    public const FIELD_IS_READ_RECEIPT = 'isReadReceipt';
    public const FIELD_IS_SIGNED = 'isSigned';
    public const FIELD_IS_VOICEMAIL = 'isVoicemail';
    public const FIELD_MESSAGE_ACTION_FLAG = 'messageActionFlag';
    public const FIELD_NOT_SENT_TO_ME = 'notSentToMe';
    public const FIELD_RECIPIENT_CONTAINS = 'recipientContains';
    public const FIELD_SENDER_CONTAINS = 'senderContains';
    public const FIELD_SENSITIVITY = 'sensitivity';
    public const FIELD_SENT_CC_ME = 'sentCcMe';
    public const FIELD_SENT_ONLY_TO_ME = 'sentOnlyToMe';
    public const FIELD_SENT_TO_ADDRESSES = 'sentToAddresses';
    public const FIELD_SENT_TO_ME = 'sentToMe';
    public const FIELD_SENT_TO_OR_CC_ME = 'sentToOrCcMe';
    public const FIELD_SUBJECT_CONTAINS = 'subjectContains';
    public const FIELD_WITHIN_SIZE_RANGE = 'withinSizeRange';

    /**
     * Select specific MessageRulePredicates properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
