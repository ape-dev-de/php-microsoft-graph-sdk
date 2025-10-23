<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageAssignmentRequest
 */
class AccessPackageAssignmentRequest
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Answers provided by the requestor to accessPackageQuestions asked of them at the time of request.
     * @var AccessPackageAnswer[]
     */
    public array $answers = [];

    /** The date of the end of processing, either successful or failure, of a request. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
    public ?\DateTimeInterface $completedDateTime = null;

    /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. Supports $filter. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** 
     * Information about all the custom extension calls that were made during the access package assignment workflow.
     * @var CustomExtensionCalloutInstance[]
     */
    public array $customExtensionCalloutInstances = [];

    /** The requestor's supplied justification. */
    public ?string $justification = null;

    /** 
     * The type of the request. The possible values are: notSpecified, userAdd, UserExtend, userUpdate, userRemove, adminAdd, adminUpdate, adminRemove, systemAdd, systemUpdate, systemRemove, onBehalfAdd (not supported), unknownFutureValue. Requests from the user have a requestType of userAdd, userUpdate, or userRemove. This property can't be changed once set.
     * @var AccessPackageRequestType|\stdClass|null
     */
    public mixed $requestType = null;

    /** 
     * The range of dates that access is to be assigned to the requestor. This property can't be changed once set, but a new schedule for an assignment can be included in another userUpdate or UserExtend or adminUpdate assignment request.
     * @var EntitlementManagementSchedule|\stdClass|null
     */
    public mixed $schedule = null;

    /** 
     * The state of the request. The possible values are: submitted, pendingApproval, delivering, delivered, deliveryFailed, denied, scheduled, canceled, partiallyDelivered, unknownFutureValue. Read-only. Supports $filter (eq).
     * @var AccessPackageRequestState|\stdClass|null
     */
    public mixed $state = null;

    /** More information on the request processing status. Read-only. */
    public ?string $status = null;

    /** 
     * The access package associated with the accessPackageAssignmentRequest. An access package defines the collections of resource roles and the policies for how one or more users can get access to those resources. Read-only. Nullable.  Supports $expand.
     * @var AccessPackage|\stdClass|null
     */
    public mixed $accessPackage = null;

    /** 
     * For a requestType of userAdd or adminAdd, this is an access package assignment requested to be created. For a requestType of userRemove, adminRemove or systemRemove, this has the id property of an existing assignment to be removed.   Supports $expand.
     * @var AccessPackageAssignment|\stdClass|null
     */
    public mixed $assignment = null;

    /** 
     * The subject who requested or, if a direct assignment, was assigned. Read-only. Nullable. Supports $expand.
     * @var AccessPackageSubject|\stdClass|null
     */
    public mixed $requestor = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['answers'])) {
            $this->answers = $data['answers'];
        }
        if (isset($data['completedDateTime'])) {
            $this->completedDateTime = is_string($data['completedDateTime']) ? new \DateTimeImmutable($data['completedDateTime']) : $data['completedDateTime'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['customExtensionCalloutInstances'])) {
            $this->customExtensionCalloutInstances = $data['customExtensionCalloutInstances'];
        }
        if (isset($data['justification'])) {
            $this->justification = $data['justification'];
        }
        if (isset($data['requestType'])) {
            $this->requestType = is_array($data['requestType']) ? new AccessPackageRequestType($data['requestType']) : $data['requestType'];
        }
        if (isset($data['schedule'])) {
            $this->schedule = is_array($data['schedule']) ? new EntitlementManagementSchedule($data['schedule']) : $data['schedule'];
        }
        if (isset($data['state'])) {
            $this->state = is_array($data['state']) ? new AccessPackageRequestState($data['state']) : $data['state'];
        }
        if (isset($data['status'])) {
            $this->status = $data['status'];
        }
        if (isset($data['accessPackage'])) {
            $this->accessPackage = is_array($data['accessPackage']) ? new AccessPackage($data['accessPackage']) : $data['accessPackage'];
        }
        if (isset($data['assignment'])) {
            $this->assignment = is_array($data['assignment']) ? new AccessPackageAssignment($data['assignment']) : $data['assignment'];
        }
        if (isset($data['requestor'])) {
            $this->requestor = is_array($data['requestor']) ? new AccessPackageSubject($data['requestor']) : $data['requestor'];
        }
    }
}
