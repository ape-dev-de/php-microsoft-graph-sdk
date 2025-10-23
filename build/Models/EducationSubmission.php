<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationSubmission
 */
class EducationSubmission
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The unique identifier for the assignment with which this submission is associated. A submission is always associated with one and only one assignment. */
    public ?string $assignmentId = null;

    /** 
     * The user that marked the submission as excused.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $excusedBy = null;

    /** The time that the submission was excused. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $excusedDateTime = null;

    /** 
     * The identities of those who modified the submission.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $lastModifiedBy = null;

    /** The date and time the submission was modified. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** 
     * User who moved the status of this submission to reassigned.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $reassignedBy = null;

    /** Moment in time when the submission was reassigned. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $reassignedDateTime = null;

    /** 
     * Who this submission is assigned to.
     * @var EducationSubmissionRecipient|\stdClass|null
     */
    public mixed $recipient = null;

    /** Folder where all file resources for this submission need to be stored. */
    public ?string $resourcesFolderUrl = null;

    /** 
     * User who moved the status of this submission to returned.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $returnedBy = null;

    /** Moment in time when the submission was returned. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $returnedDateTime = null;

    /** 
     * Read-only. Possible values are: excused, reassigned, returned, submitted and working. Use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: excused and reassigned.
     * @var EducationSubmissionStatus|\stdClass|null
     */
    public mixed $status = null;

    /** 
     * User who moved the resource into the submitted state.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $submittedBy = null;

    /** Moment in time when the submission was moved into the submitted state. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $submittedDateTime = null;

    /** 
     * User who moved the resource from submitted into the working state.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $unsubmittedBy = null;

    /** Moment in time when the submission was moved from submitted into the working state. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $unsubmittedDateTime = null;

    /** The deep link URL for the given submission. */
    public ?string $webUrl = null;

    /** 
     * 
     * @var EducationOutcome[]
     */
    public array $outcomes = [];

    /** 
     * 
     * @var EducationSubmissionResource[]
     */
    public array $resources = [];

    /** 
     * 
     * @var EducationSubmissionResource[]
     */
    public array $submittedResources = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['assignmentId'])) {
            $this->assignmentId = $data['assignmentId'];
        }
        if (isset($data['excusedBy'])) {
            $this->excusedBy = $data['excusedBy'];
        }
        if (isset($data['excusedDateTime'])) {
            $this->excusedDateTime = $data['excusedDateTime'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = $data['lastModifiedDateTime'];
        }
        if (isset($data['reassignedBy'])) {
            $this->reassignedBy = $data['reassignedBy'];
        }
        if (isset($data['reassignedDateTime'])) {
            $this->reassignedDateTime = $data['reassignedDateTime'];
        }
        if (isset($data['recipient'])) {
            $this->recipient = $data['recipient'];
        }
        if (isset($data['resourcesFolderUrl'])) {
            $this->resourcesFolderUrl = $data['resourcesFolderUrl'];
        }
        if (isset($data['returnedBy'])) {
            $this->returnedBy = $data['returnedBy'];
        }
        if (isset($data['returnedDateTime'])) {
            $this->returnedDateTime = $data['returnedDateTime'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
        if (isset($data['submittedBy'])) {
            $this->submittedBy = $data['submittedBy'];
        }
        if (isset($data['submittedDateTime'])) {
            $this->submittedDateTime = $data['submittedDateTime'];
        }
        if (isset($data['unsubmittedBy'])) {
            $this->unsubmittedBy = $data['unsubmittedBy'];
        }
        if (isset($data['unsubmittedDateTime'])) {
            $this->unsubmittedDateTime = $data['unsubmittedDateTime'];
        }
        if (isset($data['webUrl'])) {
            $this->webUrl = $data['webUrl'];
        }
        if (isset($data['outcomes'])) {
            $this->outcomes = $data['outcomes'];
        }
        if (isset($data['resources'])) {
            $this->resources = $data['resources'];
        }
        if (isset($data['submittedResources'])) {
            $this->submittedResources = $data['submittedResources'];
        }
    }
}
