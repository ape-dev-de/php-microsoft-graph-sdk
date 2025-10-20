<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SubjectRightsRequest
 */
class SubjectRightsRequest
{
    /**
     * Identity that the request is assigned to.
     */
    private ?string $assignedTo;

    /**
     * The date and time when the request was closed. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $closedDateTime;

    /**
     * KQL based content query that should be used for search. This property is defined only for APIs accessed using the /security query path and not the /privacy query path.
     */
    private ?string $contentQuery;

    /**
     * Identity information for the entity that created the request.
     */
    private ?string $createdBy;

    /**
     * The date and time when the request was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Information about the data subject.
     */
    private ?string $dataSubject;

    /**
     * The type of the data subject. Possible values are: customer, currentEmployee, formerEmployee, prospectiveEmployee, student, teacher, faculty, other, unknownFutureValue.
     */
    private ?string $dataSubjectType;

    /**
     * Description for the request.
     */
    private ?string $description;

    /**
     * The name of the request.
     */
    private ?string $displayName;

    /**
     * The external ID for the request that is immutable after creation and is used for tracking the request for the external system. This property is defined only for APIs accessed using the /security query path and not the /privacy query path.
     */
    private ?string $externalId;

    /**
     * Collection of history change events.
     */
    private array $history = [];

    /**
     * Include all versions of the documents. By default, the current copies of the documents are returned. If SharePoint sites have versioning enabled, including all versions includes the historical copies of the documents. This property is defined only for APIs accessed using the /security query path and not the /privacy query path.
     */
    private ?bool $includeAllVersions;

    /**
     * Include content authored by the data subject. This property is defined only for APIs accessed using the /security query path and not the /privacy query path.
     */
    private ?bool $includeAuthoredContent;

    /**
     * Insight about the request.
     */
    private ?string $insight;

    /**
     * The date and time when the request is internally due. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $internalDueDateTime;

    /**
     * Identity information for the entity that last modified the request.
     */
    private ?string $lastModifiedBy;

    /**
     * The date and time when the request was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * The mailbox locations that should be searched. This property is defined only for APIs accessed using the /security query path and not the /privacy query path.
     */
    private ?string $mailboxLocations;

    /**
     * Pause the request after estimate has finished. By default, the data estimate runs and then pauses, allowing you to preview results and then select the option to retrieve data in the UI. You can set this property to false if you want it to perform the estimate and then automatically begin with the retrieval of the content. This property is defined only for APIs accessed using the /security query path and not the /privacy query path.
     */
    private ?bool $pauseAfterEstimate;

    /**
     * List of regulations that this request fulfill.
     */
    private ?string $regulations;

    /**
     * The SharePoint and OneDrive site locations that should be searched. This property is defined only for APIs accessed using the /security query path and not the /privacy query path.
     */
    private ?string $siteLocations;

    /**
     * Information about the different stages for the request.
     */
    private array $stages = [];

    /**
     * The status of the request. Possible values are: active, closed, unknownFutureValue.
     */
    private ?string $status;

    /**
     * The type of the request. Possible values are: export, delete, access, tagForAction, unknownFutureValue.
     */
    private ?string $type;

    /**
     * Collection of users who can approve the request. Currently only supported for requests of type delete.
     */
    private array $approvers = [];

    /**
     * Collection of users who can collaborate on the request.
     */
    private array $collaborators = [];

    /**
     * List of notes associated with the request.
     */
    private array $notes = [];

    /**
     * Information about the Microsoft Teams team that was created for the request.
     */
    private ?string $team;

    public function getAssignedTo(): ?string
    {
        return $this->assignedTo;
    }

    public function setAssignedTo(?string $assignedTo): self
    {
        $this->assignedTo = $assignedTo;
        return $this;
    }

    public function getClosedDateTime(): ?\DateTimeInterface
    {
        return $this->closedDateTime;
    }

    public function setClosedDateTime(?\DateTimeInterface $closedDateTime): self
    {
        $this->closedDateTime = $closedDateTime;
        return $this;
    }

    public function getContentQuery(): ?string
    {
        return $this->contentQuery;
    }

    public function setContentQuery(?string $contentQuery): self
    {
        $this->contentQuery = $contentQuery;
        return $this;
    }

    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?string $createdBy): self
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getDataSubject(): ?string
    {
        return $this->dataSubject;
    }

    public function setDataSubject(?string $dataSubject): self
    {
        $this->dataSubject = $dataSubject;
        return $this;
    }

    public function getDataSubjectType(): ?string
    {
        return $this->dataSubjectType;
    }

    public function setDataSubjectType(?string $dataSubjectType): self
    {
        $this->dataSubjectType = $dataSubjectType;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getExternalId(): ?string
    {
        return $this->externalId;
    }

    public function setExternalId(?string $externalId): self
    {
        $this->externalId = $externalId;
        return $this;
    }

    public function getHistory(): array
    {
        return $this->history;
    }

    public function setHistory(array $history): self
    {
        $this->history = $history;
        return $this;
    }

    public function getIncludeAllVersions(): ?bool
    {
        return $this->includeAllVersions;
    }

    public function setIncludeAllVersions(?bool $includeAllVersions): self
    {
        $this->includeAllVersions = $includeAllVersions;
        return $this;
    }

    public function getIncludeAuthoredContent(): ?bool
    {
        return $this->includeAuthoredContent;
    }

    public function setIncludeAuthoredContent(?bool $includeAuthoredContent): self
    {
        $this->includeAuthoredContent = $includeAuthoredContent;
        return $this;
    }

    public function getInsight(): ?string
    {
        return $this->insight;
    }

    public function setInsight(?string $insight): self
    {
        $this->insight = $insight;
        return $this;
    }

    public function getInternalDueDateTime(): ?\DateTimeInterface
    {
        return $this->internalDueDateTime;
    }

    public function setInternalDueDateTime(?\DateTimeInterface $internalDueDateTime): self
    {
        $this->internalDueDateTime = $internalDueDateTime;
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

    public function getMailboxLocations(): ?string
    {
        return $this->mailboxLocations;
    }

    public function setMailboxLocations(?string $mailboxLocations): self
    {
        $this->mailboxLocations = $mailboxLocations;
        return $this;
    }

    public function getPauseAfterEstimate(): ?bool
    {
        return $this->pauseAfterEstimate;
    }

    public function setPauseAfterEstimate(?bool $pauseAfterEstimate): self
    {
        $this->pauseAfterEstimate = $pauseAfterEstimate;
        return $this;
    }

    public function getRegulations(): ?string
    {
        return $this->regulations;
    }

    public function setRegulations(?string $regulations): self
    {
        $this->regulations = $regulations;
        return $this;
    }

    public function getSiteLocations(): ?string
    {
        return $this->siteLocations;
    }

    public function setSiteLocations(?string $siteLocations): self
    {
        $this->siteLocations = $siteLocations;
        return $this;
    }

    public function getStages(): array
    {
        return $this->stages;
    }

    public function setStages(array $stages): self
    {
        $this->stages = $stages;
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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getApprovers(): array
    {
        return $this->approvers;
    }

    public function setApprovers(array $approvers): self
    {
        $this->approvers = $approvers;
        return $this;
    }

    public function getCollaborators(): array
    {
        return $this->collaborators;
    }

    public function setCollaborators(array $collaborators): self
    {
        $this->collaborators = $collaborators;
        return $this;
    }

    public function getNotes(): array
    {
        return $this->notes;
    }

    public function setNotes(array $notes): self
    {
        $this->notes = $notes;
        return $this;
    }

    public function getTeam(): ?string
    {
        return $this->team;
    }

    public function setTeam(?string $team): self
    {
        $this->team = $team;
        return $this;
    }

}
