<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationSubmission
 */
class EducationSubmission
{
    /**
     * The unique identifier for the assignment with which this submission is associated. A submission is always associated with one and only one assignment.
     */
    private ?string $assignmentId;

    /**
     * The user that marked the submission as excused.
     */
    private ?string $excusedBy;

    /**
     * The time that the submission was excused. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $excusedDateTime;

    /**
     * The identities of those who modified the submission.
     */
    private ?string $lastModifiedBy;

    /**
     * The date and time the submission was modified.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * User who moved the status of this submission to reassigned.
     */
    private ?string $reassignedBy;

    /**
     * Moment in time when the submission was reassigned. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $reassignedDateTime;

    /**
     * Who this submission is assigned to.
     */
    private ?string $recipient;

    /**
     * Folder where all file resources for this submission need to be stored.
     */
    private ?string $resourcesFolderUrl;

    /**
     * User who moved the status of this submission to returned.
     */
    private ?string $returnedBy;

    /**
     * Moment in time when the submission was returned. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $returnedDateTime;

    /**
     * Read-only. Possible values are: excused, reassigned, returned, submitted and working. Use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: excused and reassigned.
     */
    private ?string $status;

    /**
     * User who moved the resource into the submitted state.
     */
    private ?string $submittedBy;

    /**
     * Moment in time when the submission was moved into the submitted state. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $submittedDateTime;

    /**
     * User who moved the resource from submitted into the working state.
     */
    private ?string $unsubmittedBy;

    /**
     * Moment in time when the submission was moved from submitted into the working state. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $unsubmittedDateTime;

    /**
     * The deep link URL for the given submission.
     */
    private ?string $webUrl;

    /**
     */
    private array $outcomes = [];

    /**
     */
    private array $resources = [];

    /**
     */
    private ?string $submittedResources;

    public function getAssignmentId(): ?string
    {
        return $this->assignmentId;
    }

    public function setAssignmentId(?string $assignmentId): self
    {
        $this->assignmentId = $assignmentId;
        return $this;
    }

    public function getExcusedBy(): ?string
    {
        return $this->excusedBy;
    }

    public function setExcusedBy(?string $excusedBy): self
    {
        $this->excusedBy = $excusedBy;
        return $this;
    }

    public function getExcusedDateTime(): ?\DateTimeInterface
    {
        return $this->excusedDateTime;
    }

    public function setExcusedDateTime(?\DateTimeInterface $excusedDateTime): self
    {
        $this->excusedDateTime = $excusedDateTime;
        return $this;
    }

    public function getLastModifiedBy(): ?string
    {
        return $this->lastModifiedBy;
    }

    public function setLastModifiedBy(?string $lastModifiedBy): self
    {
        $this->lastModifiedBy = $lastModifiedBy;
        return $this;
    }

    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function setLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): self
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        return $this;
    }

    public function getReassignedBy(): ?string
    {
        return $this->reassignedBy;
    }

    public function setReassignedBy(?string $reassignedBy): self
    {
        $this->reassignedBy = $reassignedBy;
        return $this;
    }

    public function getReassignedDateTime(): ?\DateTimeInterface
    {
        return $this->reassignedDateTime;
    }

    public function setReassignedDateTime(?\DateTimeInterface $reassignedDateTime): self
    {
        $this->reassignedDateTime = $reassignedDateTime;
        return $this;
    }

    public function getRecipient(): ?string
    {
        return $this->recipient;
    }

    public function setRecipient(?string $recipient): self
    {
        $this->recipient = $recipient;
        return $this;
    }

    public function getResourcesFolderUrl(): ?string
    {
        return $this->resourcesFolderUrl;
    }

    public function setResourcesFolderUrl(?string $resourcesFolderUrl): self
    {
        $this->resourcesFolderUrl = $resourcesFolderUrl;
        return $this;
    }

    public function getReturnedBy(): ?string
    {
        return $this->returnedBy;
    }

    public function setReturnedBy(?string $returnedBy): self
    {
        $this->returnedBy = $returnedBy;
        return $this;
    }

    public function getReturnedDateTime(): ?\DateTimeInterface
    {
        return $this->returnedDateTime;
    }

    public function setReturnedDateTime(?\DateTimeInterface $returnedDateTime): self
    {
        $this->returnedDateTime = $returnedDateTime;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getSubmittedBy(): ?string
    {
        return $this->submittedBy;
    }

    public function setSubmittedBy(?string $submittedBy): self
    {
        $this->submittedBy = $submittedBy;
        return $this;
    }

    public function getSubmittedDateTime(): ?\DateTimeInterface
    {
        return $this->submittedDateTime;
    }

    public function setSubmittedDateTime(?\DateTimeInterface $submittedDateTime): self
    {
        $this->submittedDateTime = $submittedDateTime;
        return $this;
    }

    public function getUnsubmittedBy(): ?string
    {
        return $this->unsubmittedBy;
    }

    public function setUnsubmittedBy(?string $unsubmittedBy): self
    {
        $this->unsubmittedBy = $unsubmittedBy;
        return $this;
    }

    public function getUnsubmittedDateTime(): ?\DateTimeInterface
    {
        return $this->unsubmittedDateTime;
    }

    public function setUnsubmittedDateTime(?\DateTimeInterface $unsubmittedDateTime): self
    {
        $this->unsubmittedDateTime = $unsubmittedDateTime;
        return $this;
    }

    public function getWebUrl(): ?string
    {
        return $this->webUrl;
    }

    public function setWebUrl(?string $webUrl): self
    {
        $this->webUrl = $webUrl;
        return $this;
    }

    public function getOutcomes(): array
    {
        return $this->outcomes;
    }

    public function setOutcomes(array $outcomes): self
    {
        $this->outcomes = $outcomes;
        return $this;
    }

    public function getResources(): array
    {
        return $this->resources;
    }

    public function setResources(array $resources): self
    {
        $this->resources = $resources;
        return $this;
    }

    public function getSubmittedResources(): ?string
    {
        return $this->submittedResources;
    }

    public function setSubmittedResources(?string $submittedResources): self
    {
        $this->submittedResources = $submittedResources;
        return $this;
    }

}
