<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageAssignmentRequest
 */
class AccessPackageAssignmentRequest
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Answers provided by the requestor to accessPackageQuestions asked of them at the time of request. */
        public array $answers = [],
        /** The date of the end of processing, either successful or failure, of a request. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
        public ?\DateTimeInterface $completedDateTime = null,
        /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. Supports $filter. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Information about all the custom extension calls that were made during the access package assignment workflow. */
        public array $customExtensionCalloutInstances = [],
        /** The requestor's supplied justification. */
        public ?string $justification = null,
        /** The type of the request. The possible values are: notSpecified, userAdd, UserExtend, userUpdate, userRemove, adminAdd, adminUpdate, adminRemove, systemAdd, systemUpdate, systemRemove, onBehalfAdd (not supported), unknownFutureValue. Requests from the user have a requestType of userAdd, userUpdate, or userRemove. This property can''t be changed once set. */
        public ?string $requestType = null,
        /** The range of dates that access is to be assigned to the requestor. This property can''t be changed once set, but a new schedule for an assignment can be included in another userUpdate or UserExtend or adminUpdate assignment request. */
        public ?string $schedule = null,
        /** The state of the request. The possible values are: submitted, pendingApproval, delivering, delivered, deliveryFailed, denied, scheduled, canceled, partiallyDelivered, unknownFutureValue. Read-only. Supports $filter (eq). */
        public ?string $state = null,
        /** More information on the request processing status. Read-only. */
        public ?string $status = null,
        /** The access package associated with the accessPackageAssignmentRequest. An access package defines the collections of resource roles and the policies for how one or more users can get access to those resources. Read-only. Nullable.  Supports $expand. */
        public ?string $accessPackage = null,
        /** For a requestType of userAdd or adminAdd, this is an access package assignment requested to be created. For a requestType of userRemove, adminRemove or systemRemove, this has the id property of an existing assignment to be removed.   Supports $expand. */
        public ?string $assignment = null,
        /** The subject who requested or, if a direct assignment, was assigned. Read-only. Nullable. Supports $expand. */
        public ?string $requestor = null
    ) {}
}
