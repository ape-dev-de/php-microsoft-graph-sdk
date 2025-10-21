<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MailTips
 */
class MailTips
{
    public function __construct(
        /** Mail tips for automatic reply if it has been set up by the recipient. */
        public ?string $automaticReplies = null,
        /** A custom mail tip that can be set on the recipient's mailbox. */
        public ?string $customMailTip = null,
        /** Whether the recipient''s mailbox is restricted, for example, accepting messages from only a predefined list of senders, rejecting messages from a predefined list of senders, or accepting messages from only authenticated senders. */
        public ?bool $deliveryRestricted = null,
        /** The email address of the recipient to get mailtips for. */
        public ?string $emailAddress = null,
        /** Errors that occur during the getMailTips action. */
        public ?string $error = null,
        /** The number of external members if the recipient is a distribution list. */
        public ?float $externalMemberCount = null,
        /** Whether sending messages to the recipient requires approval. For example, if the recipient is a large distribution list and a moderator has been set up to approve messages sent to that distribution list, or if sending messages to a recipient requires approval of the recipient''s manager. */
        public ?bool $isModerated = null,
        /** The mailbox full status of the recipient. */
        public ?bool $mailboxFull = null,
        /** The maximum message size that has been configured for the recipient's organization or mailbox. */
        public ?float $maxMessageSize = null,
        /** The scope of the recipient. Possible values are: none, internal, external, externalPartner, externalNonParther. For example, an administrator can set another organization to be its ''partner''. The scope is useful if an administrator wants certain mailtips to be accessible to certain scopes. It''s also useful to senders to inform them that their message may leave the organization, helping them make the correct decisions about wording, tone and content. */
        public ?string $recipientScope = null,
        /** Recipients suggested based on previous contexts where they appear in the same message. */
        public array $recipientSuggestions = [],
        /** The number of members if the recipient is a distribution list. */
        public ?string $totalMemberCount = null
    ) {}
}
