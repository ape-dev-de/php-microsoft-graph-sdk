<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SubjectRightsRequest
 */
class SubjectRightsRequest
{
    public function __construct(
        /** Identity that the request is assigned to. */
        public ?string $assignedTo = null,
        /** The date and time when the request was closed. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $closedDateTime = null,
        /** KQL based content query that should be used for search. This property is defined only for APIs accessed using the /security query path and not the /privacy query path. */
        public ?string $contentQuery = null,
        /** Identity information for the entity that created the request. */
        public ?string $createdBy = null,
        /** The date and time when the request was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Information about the data subject. */
        public ?string $dataSubject = null,
        /** The type of the data subject. Possible values are: customer, currentEmployee, formerEmployee, prospectiveEmployee, student, teacher, faculty, other, unknownFutureValue. */
        public ?string $dataSubjectType = null,
        /** Description for the request. */
        public ?string $description = null,
        /** The name of the request. */
        public ?string $displayName = null,
        /** The external ID for the request that is immutable after creation and is used for tracking the request for the external system. This property is defined only for APIs accessed using the /security query path and not the /privacy query path. */
        public ?string $externalId = null,
        /** Collection of history change events. */
        public array $history = [],
        /** Include all versions of the documents. By default, the current copies of the documents are returned. If SharePoint sites have versioning enabled, including all versions includes the historical copies of the documents. This property is defined only for APIs accessed using the /security query path and not the /privacy query path. */
        public ?bool $includeAllVersions = null,
        /** Include content authored by the data subject. This property is defined only for APIs accessed using the /security query path and not the /privacy query path. */
        public ?bool $includeAuthoredContent = null,
        /** Insight about the request. */
        public ?string $insight = null,
        /** The date and time when the request is internally due. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $internalDueDateTime = null,
        /** Identity information for the entity that last modified the request. */
        public ?string $lastModifiedBy = null,
        /** The date and time when the request was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** The mailbox locations that should be searched. This property is defined only for APIs accessed using the /security query path and not the /privacy query path. */
        public ?string $mailboxLocations = null,
        /** Pause the request after estimate has finished. By default, the data estimate runs and then pauses, allowing you to preview results and then select the option to retrieve data in the UI. You can set this property to false if you want it to perform the estimate and then automatically begin with the retrieval of the content. This property is defined only for APIs accessed using the /security query path and not the /privacy query path. */
        public ?bool $pauseAfterEstimate = null,
        /** @var string[] List of regulations that this request fulfill. */
        public array $regulations = [],
        /** The SharePoint and OneDrive site locations that should be searched. This property is defined only for APIs accessed using the /security query path and not the /privacy query path. */
        public ?string $siteLocations = null,
        /** Information about the different stages for the request. */
        public array $stages = [],
        /** The status of the request. Possible values are: active, closed, unknownFutureValue. */
        public ?string $status = null,
        /** The type of the request. Possible values are: export, delete, access, tagForAction, unknownFutureValue. */
        public ?string $type = null,
        /** Collection of users who can approve the request. Currently only supported for requests of type delete. */
        public array $approvers = [],
        /** Collection of users who can collaborate on the request. */
        public array $collaborators = [],
        /** List of notes associated with the request. */
        public array $notes = [],
        /** Information about the Microsoft Teams team that was created for the request. */
        public ?string $team = null
    ) {}
}
