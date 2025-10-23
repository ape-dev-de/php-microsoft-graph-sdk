<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MailAssessmentRequest
 */
class MailAssessmentRequest
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?ThreatCategory $category = null;

    /** 
     * The content type of threat assessment. Possible values are: mail, url, file.
     * @var ThreatAssessmentContentType|\stdClass|null
     */
    public mixed $contentType = null;

    /** 
     * The threat assessment request creator.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $createdBy = null;

    /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $createdDateTime = null;

    /**  */
    public ?ThreatExpectedAssessment $expectedAssessment = null;

    /** 
     * The source of the threat assessment request. Possible values are: administrator.
     * @var ThreatAssessmentRequestSource|\stdClass|null
     */
    public mixed $requestSource = null;

    /** 
     * The assessment process status. Possible values are: pending, completed.
     * @var ThreatAssessmentStatus|\stdClass|null
     */
    public mixed $status = null;

    /** 
     * A collection of threat assessment results. Read-only. By default, a GET /threatAssessmentRequests/{id} does not return this property unless you apply $expand on it.
     * @var ThreatAssessmentResult[]
     */
    public array $results = [];

    /** 
     * The reason for mail routed to its destination. Possible values are: none, mailFlowRule, safeSender, blockedSender, advancedSpamFiltering, domainAllowList, domainBlockList, notInAddressBook, firstTimeSender, autoPurgeToInbox, autoPurgeToJunk, autoPurgeToDeleted, outbound, notJunk, junk.
     * @var MailDestinationRoutingReason|\stdClass|null
     */
    public mixed $destinationRoutingReason = null;

    /** The resource URI of the mail message for assessment. */
    public ?string $messageUri = null;

    /** The mail recipient whose policies are used to assess the mail. */
    public ?string $recipientEmail = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['category'])) {
            $this->category = $data['category'];
        }
        if (isset($data['contentType'])) {
            $this->contentType = $data['contentType'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['expectedAssessment'])) {
            $this->expectedAssessment = $data['expectedAssessment'];
        }
        if (isset($data['requestSource'])) {
            $this->requestSource = $data['requestSource'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
        if (isset($data['results'])) {
            $this->results = $data['results'];
        }
        if (isset($data['destinationRoutingReason'])) {
            $this->destinationRoutingReason = $data['destinationRoutingReason'];
        }
        if (isset($data['messageUri'])) {
            $this->messageUri = $data['messageUri'];
        }
        if (isset($data['recipientEmail'])) {
            $this->recipientEmail = $data['recipientEmail'];
        }
    }
}
