<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EmailFileAssessmentRequest
 */
class EmailFileAssessmentRequest
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?ThreatCategory $category = null;

    /** 
     * The content type of threat assessment. Possible values are: mail, url, file.
     * @var ThreatAssessmentContentType|\stdClass|null
     */
    public ThreatAssessmentContentType|\stdClass|null $contentType = null;

    /** 
     * The threat assessment request creator.
     * @var IdentitySet|\stdClass|null
     */
    public IdentitySet|\stdClass|null $createdBy = null;

    /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $createdDateTime = null;

    /**  */
    public ?ThreatExpectedAssessment $expectedAssessment = null;

    /** 
     * The source of the threat assessment request. Possible values are: administrator.
     * @var ThreatAssessmentRequestSource|\stdClass|null
     */
    public ThreatAssessmentRequestSource|\stdClass|null $requestSource = null;

    /** 
     * The assessment process status. Possible values are: pending, completed.
     * @var ThreatAssessmentStatus|\stdClass|null
     */
    public ThreatAssessmentStatus|\stdClass|null $status = null;

    /** 
     * A collection of threat assessment results. Read-only. By default, a GET /threatAssessmentRequests/{id} does not return this property unless you apply $expand on it.
     * @var ThreatAssessmentResult[]
     */
    public array $results = [];

    /** Base64 encoded .eml email file content. The file content can't fetch back because it isn't stored. */
    public ?string $contentData = null;

    /** 
     * The reason for mail routed to its destination. Possible values are: none, mailFlowRule, safeSender, blockedSender, advancedSpamFiltering, domainAllowList, domainBlockList, notInAddressBook, firstTimeSender, autoPurgeToInbox, autoPurgeToJunk, autoPurgeToDeleted, outbound, notJunk, junk.
     * @var MailDestinationRoutingReason|\stdClass|null
     */
    public MailDestinationRoutingReason|\stdClass|null $destinationRoutingReason = null;

    /** The mail recipient whose policies are used to assess the mail. */
    public ?string $recipientEmail = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['category'])) {
            $this->category = is_string($data['category']) ? ThreatCategory::tryFrom($data['category']) : $data['category'];
        }
        if (isset($data['contentType'])) {
            $this->contentType = is_string($data['contentType']) ? ThreatAssessmentContentType::tryFrom($data['contentType']) : $data['contentType'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = is_array($data['createdBy']) ? new IdentitySet($data['createdBy']) : $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['expectedAssessment'])) {
            $this->expectedAssessment = is_string($data['expectedAssessment']) ? ThreatExpectedAssessment::tryFrom($data['expectedAssessment']) : $data['expectedAssessment'];
        }
        if (isset($data['requestSource'])) {
            $this->requestSource = is_string($data['requestSource']) ? ThreatAssessmentRequestSource::tryFrom($data['requestSource']) : $data['requestSource'];
        }
        if (isset($data['status'])) {
            $this->status = is_string($data['status']) ? ThreatAssessmentStatus::tryFrom($data['status']) : $data['status'];
        }
        if (isset($data['results'])) {
            $this->results = $data['results'];
        }
        if (isset($data['contentData'])) {
            $this->contentData = $data['contentData'];
        }
        if (isset($data['destinationRoutingReason'])) {
            $this->destinationRoutingReason = is_string($data['destinationRoutingReason']) ? MailDestinationRoutingReason::tryFrom($data['destinationRoutingReason']) : $data['destinationRoutingReason'];
        }
        if (isset($data['recipientEmail'])) {
            $this->recipientEmail = $data['recipientEmail'];
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
