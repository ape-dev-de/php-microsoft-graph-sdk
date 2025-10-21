<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EmailFileAssessmentRequest
 */
class EmailFileAssessmentRequest
{
    public function __construct(
        /** Base64 encoded .eml email file content. The file content can't fetch back because it isn't stored. */
        public ?string $contentData = null,
        /** The reason for mail routed to its destination. Possible values are: none, mailFlowRule, safeSender, blockedSender, advancedSpamFiltering, domainAllowList, domainBlockList, notInAddressBook, firstTimeSender, autoPurgeToInbox, autoPurgeToJunk, autoPurgeToDeleted, outbound, notJunk, junk. */
        public ?string $destinationRoutingReason = null,
        /** The mail recipient whose policies are used to assess the mail. */
        public ?string $recipientEmail = null
    ) {}
}
