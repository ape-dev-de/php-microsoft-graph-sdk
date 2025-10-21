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
        /** @var string[] A collection of threat assessment results. Read-only. By default, a GET /threatAssessmentRequests/{id} does not return this property unless you apply $expand on it. */
        public array $results = [],
        /** The URL string. */
        public ?string $url = null
    ) {}
}
