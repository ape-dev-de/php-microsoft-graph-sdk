<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MailTips
 */
class MailTips
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Mail tips for automatic reply if it has been set up by the recipient.
     * @var AutomaticRepliesMailTips|\stdClass|null
     */
    public mixed $automaticReplies = null;

    /** A custom mail tip that can be set on the recipient's mailbox. */
    public ?string $customMailTip = null;

    /** Whether the recipient's mailbox is restricted, for example, accepting messages from only a predefined list of senders, rejecting messages from a predefined list of senders, or accepting messages from only authenticated senders. */
    public ?bool $deliveryRestricted = null;

    /** 
     * The email address of the recipient to get mailtips for.
     * @var EmailAddress|\stdClass|null
     */
    public mixed $emailAddress = null;

    /** 
     * Errors that occur during the getMailTips action.
     * @var MailTipsError|\stdClass|null
     */
    public mixed $error = null;

    /** The number of external members if the recipient is a distribution list. */
    public ?float $externalMemberCount = null;

    /** Whether sending messages to the recipient requires approval. For example, if the recipient is a large distribution list and a moderator has been set up to approve messages sent to that distribution list, or if sending messages to a recipient requires approval of the recipient's manager. */
    public ?bool $isModerated = null;

    /** The mailbox full status of the recipient. */
    public ?bool $mailboxFull = null;

    /** The maximum message size that has been configured for the recipient's organization or mailbox. */
    public ?float $maxMessageSize = null;

    /** 
     * The scope of the recipient. Possible values are: none, internal, external, externalPartner, externalNonParther. For example, an administrator can set another organization to be its 'partner'. The scope is useful if an administrator wants certain mailtips to be accessible to certain scopes. It's also useful to senders to inform them that their message may leave the organization, helping them make the correct decisions about wording, tone and content.
     * @var RecipientScopeType|\stdClass|null
     */
    public mixed $recipientScope = null;

    /** 
     * Recipients suggested based on previous contexts where they appear in the same message.
     * @var Recipient[]
     */
    public array $recipientSuggestions = [];

    /** The number of members if the recipient is a distribution list. */
    public ?float $totalMemberCount = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['automaticReplies'])) {
            $this->automaticReplies = is_array($data['automaticReplies']) ? new AutomaticRepliesMailTips($data['automaticReplies']) : $data['automaticReplies'];
        }
        if (isset($data['customMailTip'])) {
            $this->customMailTip = $data['customMailTip'];
        }
        if (isset($data['deliveryRestricted'])) {
            $this->deliveryRestricted = $data['deliveryRestricted'];
        }
        if (isset($data['emailAddress'])) {
            $this->emailAddress = is_array($data['emailAddress']) ? new EmailAddress($data['emailAddress']) : $data['emailAddress'];
        }
        if (isset($data['error'])) {
            $this->error = is_array($data['error']) ? new MailTipsError($data['error']) : $data['error'];
        }
        if (isset($data['externalMemberCount'])) {
            $this->externalMemberCount = $data['externalMemberCount'];
        }
        if (isset($data['isModerated'])) {
            $this->isModerated = $data['isModerated'];
        }
        if (isset($data['mailboxFull'])) {
            $this->mailboxFull = $data['mailboxFull'];
        }
        if (isset($data['maxMessageSize'])) {
            $this->maxMessageSize = $data['maxMessageSize'];
        }
        if (isset($data['recipientScope'])) {
            $this->recipientScope = is_array($data['recipientScope']) ? new RecipientScopeType($data['recipientScope']) : $data['recipientScope'];
        }
        if (isset($data['recipientSuggestions'])) {
            $this->recipientSuggestions = $data['recipientSuggestions'];
        }
        if (isset($data['totalMemberCount'])) {
            $this->totalMemberCount = $data['totalMemberCount'];
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
