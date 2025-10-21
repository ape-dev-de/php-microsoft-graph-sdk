<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UrlAssessmentRequest
 */
class UrlAssessmentRequest
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public ?ThreatCategory $category = null,
        /** The content type of threat assessment. Possible values are: mail, url, file. */
        public ?ThreatAssessmentContentType $contentType = null,
        /** The threat assessment request creator. */
        public ?IdentitySet $createdBy = null,
        /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $createdDateTime = null,
        /**  */
        public ?ThreatExpectedAssessment $expectedAssessment = null,
        /** The source of the threat assessment request. Possible values are: administrator. */
        public ?ThreatAssessmentRequestSource $requestSource = null,
        /** The assessment process status. Possible values are: pending, completed. */
        public ?ThreatAssessmentStatus $status = null,
        /** A collection of threat assessment results. Read-only. By default, a GET /threatAssessmentRequests/{id} does not return this property unless you apply $expand on it. */
        public array $results = [],
        /** The URL string. */
        public ?string $url = null
    ) {}
}
