<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationSubmission
 */
class EducationSubmission
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The unique identifier for the assignment with which this submission is associated. A submission is always associated with one and only one assignment. */
        public ?string $assignmentId = null,
        /** The user that marked the submission as excused. */
        public ?string $excusedBy = null,
        /** The time that the submission was excused. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $excusedDateTime = null,
        /** The identities of those who modified the submission. */
        public ?string $lastModifiedBy = null,
        /** The date and time the submission was modified. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** User who moved the status of this submission to reassigned. */
        public ?string $reassignedBy = null,
        /** Moment in time when the submission was reassigned. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $reassignedDateTime = null,
        /** Who this submission is assigned to. */
        public ?string $recipient = null,
        /** Folder where all file resources for this submission need to be stored. */
        public ?string $resourcesFolderUrl = null,
        /** User who moved the status of this submission to returned. */
        public ?string $returnedBy = null,
        /** Moment in time when the submission was returned. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $returnedDateTime = null,
        /** Read-only. Possible values are: excused, reassigned, returned, submitted and working. Use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: excused and reassigned. */
        public ?string $status = null,
        /** User who moved the resource into the submitted state. */
        public ?string $submittedBy = null,
        /** Moment in time when the submission was moved into the submitted state. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $submittedDateTime = null,
        /** User who moved the resource from submitted into the working state. */
        public ?string $unsubmittedBy = null,
        /** Moment in time when the submission was moved from submitted into the working state. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $unsubmittedDateTime = null,
        /** The deep link URL for the given submission. */
        public ?string $webUrl = null,
        /**  */
        public array $outcomes = [],
        /**  */
        public array $resources = [],
        /** @var string[]  */
        public array $submittedResources = []
    ) {}
}
