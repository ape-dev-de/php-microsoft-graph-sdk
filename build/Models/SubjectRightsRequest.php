<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SubjectRightsRequest
 */
class SubjectRightsRequest
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Identity that the request is assigned to.
     * @var Identity|\stdClass|null
     */
    public mixed $assignedTo = null;

    /** The date and time when the request was closed. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $closedDateTime = null;

    /** KQL based content query that should be used for search. This property is defined only for APIs accessed using the /security query path and not the /privacy query path. */
    public ?string $contentQuery = null;

    /** 
     * Identity information for the entity that created the request.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $createdBy = null;

    /** The date and time when the request was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** 
     * Information about the data subject.
     * @var DataSubject|\stdClass|null
     */
    public mixed $dataSubject = null;

    /** 
     * The type of the data subject. Possible values are: customer, currentEmployee, formerEmployee, prospectiveEmployee, student, teacher, faculty, other, unknownFutureValue.
     * @var DataSubjectType|\stdClass|null
     */
    public mixed $dataSubjectType = null;

    /** Description for the request. */
    public ?string $description = null;

    /** The name of the request. */
    public ?string $displayName = null;

    /** The external ID for the request that is immutable after creation and is used for tracking the request for the external system. This property is defined only for APIs accessed using the /security query path and not the /privacy query path. */
    public ?string $externalId = null;

    /** 
     * Collection of history change events.
     * @var SubjectRightsRequestHistory[]
     */
    public array $history = [];

    /** Include all versions of the documents. By default, the current copies of the documents are returned. If SharePoint sites have versioning enabled, including all versions includes the historical copies of the documents. This property is defined only for APIs accessed using the /security query path and not the /privacy query path. */
    public ?bool $includeAllVersions = null;

    /** Include content authored by the data subject. This property is defined only for APIs accessed using the /security query path and not the /privacy query path. */
    public ?bool $includeAuthoredContent = null;

    /** 
     * Insight about the request.
     * @var SubjectRightsRequestDetail|\stdClass|null
     */
    public mixed $insight = null;

    /** The date and time when the request is internally due. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $internalDueDateTime = null;

    /** 
     * Identity information for the entity that last modified the request.
     * @var IdentitySet|\stdClass|null
     */
    public mixed $lastModifiedBy = null;

    /** The date and time when the request was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** 
     * The mailbox locations that should be searched. This property is defined only for APIs accessed using the /security query path and not the /privacy query path.
     * @var SubjectRightsRequestMailboxLocation|\stdClass|null
     */
    public mixed $mailboxLocations = null;

    /** Pause the request after estimate has finished. By default, the data estimate runs and then pauses, allowing you to preview results and then select the option to retrieve data in the UI. You can set this property to false if you want it to perform the estimate and then automatically begin with the retrieval of the content. This property is defined only for APIs accessed using the /security query path and not the /privacy query path. */
    public ?bool $pauseAfterEstimate = null;

    /** 
     * List of regulations that this request fulfill.
     * @var string[]
     */
    public array $regulations = [];

    /** 
     * The SharePoint and OneDrive site locations that should be searched. This property is defined only for APIs accessed using the /security query path and not the /privacy query path.
     * @var SubjectRightsRequestSiteLocation|\stdClass|null
     */
    public mixed $siteLocations = null;

    /** 
     * Information about the different stages for the request.
     * @var SubjectRightsRequestStageDetail[]
     */
    public array $stages = [];

    /** 
     * The status of the request. Possible values are: active, closed, unknownFutureValue.
     * @var SubjectRightsRequestStatus|\stdClass|null
     */
    public mixed $status = null;

    /** 
     * The type of the request. Possible values are: export, delete, access, tagForAction, unknownFutureValue.
     * @var SubjectRightsRequestType|\stdClass|null
     */
    public mixed $type = null;

    /** 
     * Collection of users who can approve the request. Currently only supported for requests of type delete.
     * @var User[]
     */
    public array $approvers = [];

    /** 
     * Collection of users who can collaborate on the request.
     * @var User[]
     */
    public array $collaborators = [];

    /** 
     * List of notes associated with the request.
     * @var AuthoredNote[]
     */
    public array $notes = [];

    /** 
     * Information about the Microsoft Teams team that was created for the request.
     * @var Team|\stdClass|null
     */
    public mixed $team = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['assignedTo'])) {
            $this->assignedTo = $data['assignedTo'];
        }
        if (isset($data['closedDateTime'])) {
            $this->closedDateTime = $data['closedDateTime'];
        }
        if (isset($data['contentQuery'])) {
            $this->contentQuery = $data['contentQuery'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = $data['createdDateTime'];
        }
        if (isset($data['dataSubject'])) {
            $this->dataSubject = $data['dataSubject'];
        }
        if (isset($data['dataSubjectType'])) {
            $this->dataSubjectType = $data['dataSubjectType'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['externalId'])) {
            $this->externalId = $data['externalId'];
        }
        if (isset($data['history'])) {
            $this->history = $data['history'];
        }
        if (isset($data['includeAllVersions'])) {
            $this->includeAllVersions = $data['includeAllVersions'];
        }
        if (isset($data['includeAuthoredContent'])) {
            $this->includeAuthoredContent = $data['includeAuthoredContent'];
        }
        if (isset($data['insight'])) {
            $this->insight = $data['insight'];
        }
        if (isset($data['internalDueDateTime'])) {
            $this->internalDueDateTime = $data['internalDueDateTime'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = $data['lastModifiedDateTime'];
        }
        if (isset($data['mailboxLocations'])) {
            $this->mailboxLocations = $data['mailboxLocations'];
        }
        if (isset($data['pauseAfterEstimate'])) {
            $this->pauseAfterEstimate = $data['pauseAfterEstimate'];
        }
        if (isset($data['regulations'])) {
            $this->regulations = $data['regulations'];
        }
        if (isset($data['siteLocations'])) {
            $this->siteLocations = $data['siteLocations'];
        }
        if (isset($data['stages'])) {
            $this->stages = $data['stages'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
        if (isset($data['type'])) {
            $this->type = $data['type'];
        }
        if (isset($data['approvers'])) {
            $this->approvers = $data['approvers'];
        }
        if (isset($data['collaborators'])) {
            $this->collaborators = $data['collaborators'];
        }
        if (isset($data['notes'])) {
            $this->notes = $data['notes'];
        }
        if (isset($data['team'])) {
            $this->team = $data['team'];
        }
    }
}
