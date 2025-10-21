<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageAssignment
 */
class AccessPackageAssignment
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Information about all the custom extension calls that were made during the access package assignment workflow. */
        public array $customExtensionCalloutInstances = [],
        /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
        public ?\DateTimeInterface $expiredDateTime = null,
        /** When the access assignment is to be in place. Read-only. */
        public ?string $schedule = null,
        /** The state of the access package assignment. The possible values are: delivering, partiallyDelivered, delivered, expired, deliveryFailed, unknownFutureValue. Read-only. Supports $filter (eq). */
        public ?string $state = null,
        /** More information about the assignment lifecycle. Possible values include Delivering, Delivered, AutoAssignmentInGracePeriod, NearExpiry1DayNotificationTriggered, or ExpiredNotificationTriggered. Read-only. */
        public ?string $status = null,
        /** Read-only. Nullable. Supports $filter (eq) on the id property and $expand query parameters. */
        public ?string $accessPackage = null,
        /** Read-only. Supports $filter (eq) on the id property and $expand query parameters. */
        public ?string $assignmentPolicy = null,
        /** The subject of the access package assignment. Read-only. Nullable. Supports $expand. Supports $filter (eq) on objectId. */
        public ?string $target = null
    ) {}
}
