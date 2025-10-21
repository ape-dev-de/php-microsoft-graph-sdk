<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WorkforceIntegration
 */
class WorkforceIntegration
{
    public function __construct(
        /** API version for the callback URL. Start with 1. */
        public ?float $apiVersion = null,
        /** Name of the workforce integration. */
        public ?string $displayName = null,
        /** Support to view eligibility-filtered results. Possible values are: none, swapRequest, offerShiftRequest, unknownFutureValue, timeOffReason. Use the Prefer: include-unknown-enum-members request header to get the following value in this evolvable enum: timeOffReason. */
        public ?string $eligibilityFilteringEnabledEntities = null,
        /** The workforce integration encryption resource. */
        public ?string $encryption = null,
        /** Indicates whether this workforce integration is currently active and available. */
        public ?bool $isActive = null,
        /** The Shifts entities supported for synchronous change notifications. Shifts call back to the provided URL when client changes occur to the entities specified in this property. By default, no entities are supported for change notifications. Possible values are: none, shift, swapRequest, userShiftPreferences, openShift, openShiftRequest, offerShiftRequest, unknownFutureValue, timeCard, timeOffReason, timeOff, timeOffRequest. Use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: timeCard , timeOffReason , timeOff , timeOffRequest. */
        public ?string $supportedEntities = null,
        /** Workforce Integration URL for callbacks from the Shifts service. */
        public ?string $url = null
    ) {}
}
