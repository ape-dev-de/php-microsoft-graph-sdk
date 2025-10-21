<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProvisioningStep
 */
class ProvisioningStep
{
    public function __construct(
        /** Summary of what occurred during the step. */
        public ?string $description = null,
        /** Details of what occurred during the step. */
        public ?DetailsInfo $details = null,
        /** Name of the step. */
        public ?string $name = null,
        /** Type of step. Possible values are: import, scoping, matching, processing, referenceResolution, export, unknownFutureValue. */
        public ?ProvisioningStepType $provisioningStepType = null,
        /** Status of the step. Possible values are: success, warning,  failure, skipped, unknownFutureValue. */
        public ?ProvisioningResult $status = null
    ) {}
}
