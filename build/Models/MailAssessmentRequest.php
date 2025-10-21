<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MailAssessmentRequest
 */
class MailAssessmentRequest
{
    public function __construct(
        /** The reason for mail routed to its destination. Possible values are: none, mailFlowRule, safeSender, blockedSender, advancedSpamFiltering, domainAllowList, domainBlockList, notInAddressBook, firstTimeSender, autoPurgeToInbox, autoPurgeToJunk, autoPurgeToDeleted, outbound, notJunk, junk. */
        public ?string $destinationRoutingReason = null,
        /** The resource URI of the mail message for assessment. */
        public ?string $messageUri = null,
        /** The mail recipient whose policies are used to assess the mail. */
        public ?string $recipientEmail = null
    ) {}
}
