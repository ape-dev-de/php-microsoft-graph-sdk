<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MessageRulePredicates
 */
class MessageRulePredicates
{
    public function __construct(
        /** @var string[] Represents the strings that should appear in the body of an incoming message in order for the condition or exception to apply. */
        public array $bodyContains = [],
        /** @var string[] Represents the strings that should appear in the body or subject of an incoming message in order for the condition or exception to apply. */
        public array $bodyOrSubjectContains = [],
        /** @var string[] Represents the categories that an incoming message should be labeled with in order for the condition or exception to apply. */
        public array $categories = [],
        /** Represents the specific sender email addresses of an incoming message in order for the condition or exception to apply. */
        public array $fromAddresses = [],
        /** Indicates whether an incoming message must have attachments in order for the condition or exception to apply. */
        public ?bool $hasAttachments = null,
        /** @var string[] Represents the strings that appear in the headers of an incoming message in order for the condition or exception to apply. */
        public array $headerContains = [],
        /** The importance that is stamped on an incoming message in order for the condition or exception to apply: low, normal, high. */
        public ?Importance $importance = null,
        /** Indicates whether an incoming message must be an approval request in order for the condition or exception to apply. */
        public ?bool $isApprovalRequest = null,
        /** Indicates whether an incoming message must be automatically forwarded in order for the condition or exception to apply. */
        public ?bool $isAutomaticForward = null,
        /** Indicates whether an incoming message must be an auto reply in order for the condition or exception to apply. */
        public ?bool $isAutomaticReply = null,
        /** Indicates whether an incoming message must be encrypted in order for the condition or exception to apply. */
        public ?bool $isEncrypted = null,
        /** Indicates whether an incoming message must be a meeting request in order for the condition or exception to apply. */
        public ?bool $isMeetingRequest = null,
        /** Indicates whether an incoming message must be a meeting response in order for the condition or exception to apply. */
        public ?bool $isMeetingResponse = null,
        /** Indicates whether an incoming message must be a non-delivery report in order for the condition or exception to apply. */
        public ?bool $isNonDeliveryReport = null,
        /** Indicates whether an incoming message must be permission controlled (RMS-protected) in order for the condition or exception to apply. */
        public ?bool $isPermissionControlled = null,
        /** Indicates whether an incoming message must be a read receipt in order for the condition or exception to apply. */
        public ?bool $isReadReceipt = null,
        /** Indicates whether an incoming message must be S/MIME-signed in order for the condition or exception to apply. */
        public ?bool $isSigned = null,
        /** Indicates whether an incoming message must be a voice mail in order for the condition or exception to apply. */
        public ?bool $isVoicemail = null,
        /** Represents the flag-for-action value that appears on an incoming message in order for the condition or exception to apply. The possible values are: any, call, doNotForward, followUp, fyi, forward, noResponseNecessary, read, reply, replyToAll, review. */
        public ?MessageActionFlag $messageActionFlag = null,
        /** Indicates whether the owner of the mailbox must not be a recipient of an incoming message in order for the condition or exception to apply. */
        public ?bool $notSentToMe = null,
        /** @var string[] Represents the strings that appear in either the toRecipients or ccRecipients properties of an incoming message in order for the condition or exception to apply. */
        public array $recipientContains = [],
        /** @var string[] Represents the strings that appear in the from property of an incoming message in order for the condition or exception to apply. */
        public array $senderContains = [],
        /** Represents the sensitivity level that must be stamped on an incoming message in order for the condition or exception to apply. The possible values are: normal, personal, private, confidential. */
        public ?Sensitivity $sensitivity = null,
        /** Indicates whether the owner of the mailbox must be in the ccRecipients property of an incoming message in order for the condition or exception to apply. */
        public ?bool $sentCcMe = null,
        /** Indicates whether the owner of the mailbox must be the only recipient in an incoming message in order for the condition or exception to apply. */
        public ?bool $sentOnlyToMe = null,
        /** Represents the email addresses that an incoming message must have been sent to in order for the condition or exception to apply. */
        public array $sentToAddresses = [],
        /** Indicates whether the owner of the mailbox must be in the toRecipients property of an incoming message in order for the condition or exception to apply. */
        public ?bool $sentToMe = null,
        /** Indicates whether the owner of the mailbox must be in either a toRecipients or ccRecipients property of an incoming message in order for the condition or exception to apply. */
        public ?bool $sentToOrCcMe = null,
        /** @var string[] Represents the strings that appear in the subject of an incoming message in order for the condition or exception to apply. */
        public array $subjectContains = [],
        /** Represents the minimum and maximum sizes (in kilobytes) that an incoming message must fall in between in order for the condition or exception to apply. */
        public ?SizeRange $withinSizeRange = null
    ) {}
}
