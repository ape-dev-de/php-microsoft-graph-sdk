<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkforceIntegration
 */
class WorkforceIntegration
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Identity of the creator of the entity. */
        public ?IdentitySet $createdBy = null,
        /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Identity of the person who last modified the entity. */
        public ?IdentitySet $lastModifiedBy = null,
        /** The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** API version for the callback URL. Start with 1. */
        public ?float $apiVersion = null,
        /** Name of the workforce integration. */
        public ?string $displayName = null,
        /** Support to view eligibility-filtered results. Possible values are: none, swapRequest, offerShiftRequest, unknownFutureValue, timeOffReason. Use the Prefer: include-unknown-enum-members request header to get the following value in this evolvable enum: timeOffReason. */
        public ?EligibilityFilteringEnabledEntities $eligibilityFilteringEnabledEntities = null,
        /** The workforce integration encryption resource. */
        public ?WorkforceIntegrationEncryption $encryption = null,
        /** Indicates whether this workforce integration is currently active and available. */
        public ?bool $isActive = null,
        /** The Shifts entities supported for synchronous change notifications. Shifts call back to the provided URL when client changes occur to the entities specified in this property. By default, no entities are supported for change notifications. Possible values are: none, shift, swapRequest, userShiftPreferences, openShift, openShiftRequest, offerShiftRequest, unknownFutureValue, timeCard, timeOffReason, timeOff, timeOffRequest. Use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: timeCard , timeOffReason , timeOff , timeOffRequest. */
        public ?WorkforceIntegrationSupportedEntities $supportedEntities = null,
        /** Workforce Integration URL for callbacks from the Shifts service. */
        public ?string $url = null
    ) {}
}
