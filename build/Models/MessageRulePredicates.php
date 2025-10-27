<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MessageRulePredicates
 */
class MessageRulePredicates
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Represents the strings that should appear in the body of an incoming message in order for the condition or exception to apply.
     * @var string[]
     */
    public array $bodyContains = [];

    /** 
     * Represents the strings that should appear in the body or subject of an incoming message in order for the condition or exception to apply.
     * @var string[]
     */
    public array $bodyOrSubjectContains = [];

    /** 
     * Represents the categories that an incoming message should be labeled with in order for the condition or exception to apply.
     * @var string[]
     */
    public array $categories = [];

    /** 
     * Represents the specific sender email addresses of an incoming message in order for the condition or exception to apply.
     * @var Recipient[]
     */
    public array $fromAddresses = [];

    /** Indicates whether an incoming message must have attachments in order for the condition or exception to apply. */
    public ?bool $hasAttachments = null;

    /** 
     * Represents the strings that appear in the headers of an incoming message in order for the condition or exception to apply.
     * @var string[]
     */
    public array $headerContains = [];

    /** 
     * The importance that is stamped on an incoming message in order for the condition or exception to apply: low, normal, high.
     * @var Importance|\stdClass|null
     */
    public Importance|\stdClass|null $importance = null;

    /** Indicates whether an incoming message must be an approval request in order for the condition or exception to apply. */
    public ?bool $isApprovalRequest = null;

    /** Indicates whether an incoming message must be automatically forwarded in order for the condition or exception to apply. */
    public ?bool $isAutomaticForward = null;

    /** Indicates whether an incoming message must be an auto reply in order for the condition or exception to apply. */
    public ?bool $isAutomaticReply = null;

    /** Indicates whether an incoming message must be encrypted in order for the condition or exception to apply. */
    public ?bool $isEncrypted = null;

    /** Indicates whether an incoming message must be a meeting request in order for the condition or exception to apply. */
    public ?bool $isMeetingRequest = null;

    /** Indicates whether an incoming message must be a meeting response in order for the condition or exception to apply. */
    public ?bool $isMeetingResponse = null;

    /** Indicates whether an incoming message must be a non-delivery report in order for the condition or exception to apply. */
    public ?bool $isNonDeliveryReport = null;

    /** Indicates whether an incoming message must be permission controlled (RMS-protected) in order for the condition or exception to apply. */
    public ?bool $isPermissionControlled = null;

    /** Indicates whether an incoming message must be a read receipt in order for the condition or exception to apply. */
    public ?bool $isReadReceipt = null;

    /** Indicates whether an incoming message must be S/MIME-signed in order for the condition or exception to apply. */
    public ?bool $isSigned = null;

    /** Indicates whether an incoming message must be a voice mail in order for the condition or exception to apply. */
    public ?bool $isVoicemail = null;

    /** 
     * Represents the flag-for-action value that appears on an incoming message in order for the condition or exception to apply. The possible values are: any, call, doNotForward, followUp, fyi, forward, noResponseNecessary, read, reply, replyToAll, review.
     * @var MessageActionFlag|\stdClass|null
     */
    public MessageActionFlag|\stdClass|null $messageActionFlag = null;

    /** Indicates whether the owner of the mailbox must not be a recipient of an incoming message in order for the condition or exception to apply. */
    public ?bool $notSentToMe = null;

    /** 
     * Represents the strings that appear in either the toRecipients or ccRecipients properties of an incoming message in order for the condition or exception to apply.
     * @var string[]
     */
    public array $recipientContains = [];

    /** 
     * Represents the strings that appear in the from property of an incoming message in order for the condition or exception to apply.
     * @var string[]
     */
    public array $senderContains = [];

    /** 
     * Represents the sensitivity level that must be stamped on an incoming message in order for the condition or exception to apply. The possible values are: normal, personal, private, confidential.
     * @var Sensitivity|\stdClass|null
     */
    public Sensitivity|\stdClass|null $sensitivity = null;

    /** Indicates whether the owner of the mailbox must be in the ccRecipients property of an incoming message in order for the condition or exception to apply. */
    public ?bool $sentCcMe = null;

    /** Indicates whether the owner of the mailbox must be the only recipient in an incoming message in order for the condition or exception to apply. */
    public ?bool $sentOnlyToMe = null;

    /** 
     * Represents the email addresses that an incoming message must have been sent to in order for the condition or exception to apply.
     * @var Recipient[]
     */
    public array $sentToAddresses = [];

    /** Indicates whether the owner of the mailbox must be in the toRecipients property of an incoming message in order for the condition or exception to apply. */
    public ?bool $sentToMe = null;

    /** Indicates whether the owner of the mailbox must be in either a toRecipients or ccRecipients property of an incoming message in order for the condition or exception to apply. */
    public ?bool $sentToOrCcMe = null;

    /** 
     * Represents the strings that appear in the subject of an incoming message in order for the condition or exception to apply.
     * @var string[]
     */
    public array $subjectContains = [];

    /** 
     * Represents the minimum and maximum sizes (in kilobytes) that an incoming message must fall in between in order for the condition or exception to apply.
     * @var SizeRange|\stdClass|null
     */
    public SizeRange|\stdClass|null $withinSizeRange = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['bodyContains'])) {
            $this->bodyContains = $data['bodyContains'];
        }
        if (isset($data['bodyOrSubjectContains'])) {
            $this->bodyOrSubjectContains = $data['bodyOrSubjectContains'];
        }
        if (isset($data['categories'])) {
            $this->categories = $data['categories'];
        }
        if (isset($data['fromAddresses'])) {
            $this->fromAddresses = $data['fromAddresses'];
        }
        if (isset($data['hasAttachments'])) {
            $this->hasAttachments = is_bool($data['hasAttachments']) ? $data['hasAttachments'] : (bool)$data['hasAttachments'];
        }
        if (isset($data['headerContains'])) {
            $this->headerContains = $data['headerContains'];
        }
        if (isset($data['importance'])) {
            $this->importance = is_string($data['importance']) ? Importance::tryFrom($data['importance']) : $data['importance'];
        }
        if (isset($data['isApprovalRequest'])) {
            $this->isApprovalRequest = is_bool($data['isApprovalRequest']) ? $data['isApprovalRequest'] : (bool)$data['isApprovalRequest'];
        }
        if (isset($data['isAutomaticForward'])) {
            $this->isAutomaticForward = is_bool($data['isAutomaticForward']) ? $data['isAutomaticForward'] : (bool)$data['isAutomaticForward'];
        }
        if (isset($data['isAutomaticReply'])) {
            $this->isAutomaticReply = is_bool($data['isAutomaticReply']) ? $data['isAutomaticReply'] : (bool)$data['isAutomaticReply'];
        }
        if (isset($data['isEncrypted'])) {
            $this->isEncrypted = is_bool($data['isEncrypted']) ? $data['isEncrypted'] : (bool)$data['isEncrypted'];
        }
        if (isset($data['isMeetingRequest'])) {
            $this->isMeetingRequest = is_bool($data['isMeetingRequest']) ? $data['isMeetingRequest'] : (bool)$data['isMeetingRequest'];
        }
        if (isset($data['isMeetingResponse'])) {
            $this->isMeetingResponse = is_bool($data['isMeetingResponse']) ? $data['isMeetingResponse'] : (bool)$data['isMeetingResponse'];
        }
        if (isset($data['isNonDeliveryReport'])) {
            $this->isNonDeliveryReport = is_bool($data['isNonDeliveryReport']) ? $data['isNonDeliveryReport'] : (bool)$data['isNonDeliveryReport'];
        }
        if (isset($data['isPermissionControlled'])) {
            $this->isPermissionControlled = is_bool($data['isPermissionControlled']) ? $data['isPermissionControlled'] : (bool)$data['isPermissionControlled'];
        }
        if (isset($data['isReadReceipt'])) {
            $this->isReadReceipt = is_bool($data['isReadReceipt']) ? $data['isReadReceipt'] : (bool)$data['isReadReceipt'];
        }
        if (isset($data['isSigned'])) {
            $this->isSigned = is_bool($data['isSigned']) ? $data['isSigned'] : (bool)$data['isSigned'];
        }
        if (isset($data['isVoicemail'])) {
            $this->isVoicemail = is_bool($data['isVoicemail']) ? $data['isVoicemail'] : (bool)$data['isVoicemail'];
        }
        if (isset($data['messageActionFlag'])) {
            $this->messageActionFlag = is_string($data['messageActionFlag']) ? MessageActionFlag::tryFrom($data['messageActionFlag']) : $data['messageActionFlag'];
        }
        if (isset($data['notSentToMe'])) {
            $this->notSentToMe = is_bool($data['notSentToMe']) ? $data['notSentToMe'] : (bool)$data['notSentToMe'];
        }
        if (isset($data['recipientContains'])) {
            $this->recipientContains = $data['recipientContains'];
        }
        if (isset($data['senderContains'])) {
            $this->senderContains = $data['senderContains'];
        }
        if (isset($data['sensitivity'])) {
            $this->sensitivity = is_string($data['sensitivity']) ? Sensitivity::tryFrom($data['sensitivity']) : $data['sensitivity'];
        }
        if (isset($data['sentCcMe'])) {
            $this->sentCcMe = is_bool($data['sentCcMe']) ? $data['sentCcMe'] : (bool)$data['sentCcMe'];
        }
        if (isset($data['sentOnlyToMe'])) {
            $this->sentOnlyToMe = is_bool($data['sentOnlyToMe']) ? $data['sentOnlyToMe'] : (bool)$data['sentOnlyToMe'];
        }
        if (isset($data['sentToAddresses'])) {
            $this->sentToAddresses = $data['sentToAddresses'];
        }
        if (isset($data['sentToMe'])) {
            $this->sentToMe = is_bool($data['sentToMe']) ? $data['sentToMe'] : (bool)$data['sentToMe'];
        }
        if (isset($data['sentToOrCcMe'])) {
            $this->sentToOrCcMe = is_bool($data['sentToOrCcMe']) ? $data['sentToOrCcMe'] : (bool)$data['sentToOrCcMe'];
        }
        if (isset($data['subjectContains'])) {
            $this->subjectContains = $data['subjectContains'];
        }
        if (isset($data['withinSizeRange'])) {
            $this->withinSizeRange = is_array($data['withinSizeRange']) ? new SizeRange($data['withinSizeRange']) : $data['withinSizeRange'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
