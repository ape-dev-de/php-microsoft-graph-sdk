<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EmailFileAssessmentRequest
 */
class EmailFileAssessmentRequest
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public ?string $category = null,
        /** The content type of threat assessment. Possible values are: mail, url, file. */
        public ?string $contentType = null,
        /** The threat assessment request creator. */
        public ?string $createdBy = null,
        /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $createdDateTime = null,
        /**  */
        public ?string $expectedAssessment = null,
        /** The source of the threat assessment request. Possible values are: administrator. */
        public ?string $requestSource = null,
        /** The assessment process status. Possible values are: pending, completed. */
        public ?string $status = null,
        /** A collection of threat assessment results. Read-only. By default, a GET /threatAssessmentRequests/{id} does not return this property unless you apply $expand on it. */
        public array $results = [],
        /** Base64 encoded .eml email file content. The file content can't fetch back because it isn't stored. */
        public ?string $contentData = null,
        /** The reason for mail routed to its destination. Possible values are: none, mailFlowRule, safeSender, blockedSender, advancedSpamFiltering, domainAllowList, domainBlockList, notInAddressBook, firstTimeSender, autoPurgeToInbox, autoPurgeToJunk, autoPurgeToDeleted, outbound, notJunk, junk. */
        public ?string $destinationRoutingReason = null,
        /** The mail recipient whose policies are used to assess the mail. */
        public ?string $recipientEmail = null
    ) {}
}
