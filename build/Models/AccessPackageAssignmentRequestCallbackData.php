<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageAssignmentRequestCallbackData
 */
class AccessPackageAssignmentRequestCallbackData
{
    public function __construct(
        /** Details for the callback. */
        public ?string $customExtensionStageInstanceDetail = null,
        /** Unique identifier of the callout to the custom extension. */
        public ?string $customExtensionStageInstanceId = null,
        /** Indicates the stage at which the custom callout extension is executed. The possible values are: assignmentRequestCreated, assignmentRequestApproved, assignmentRequestGranted, assignmentRequestRemoved, assignmentFourteenDaysBeforeExpiration, assignmentOneDayBeforeExpiration, unknownFutureValue. */
        public ?string $stage = null,
        /** Allow the extension to be able to deny or cancel the request submitted by the requestor. The supported values are Denied and Canceled. This property can only be set for an assignmentRequestCreated stage. */
        public ?string $state = null
    ) {}
}
