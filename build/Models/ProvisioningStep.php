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
        public ?string $details = null,
        /** Name of the step. */
        public ?string $name = null,
        /** Type of step. Possible values are: import, scoping, matching, processing, referenceResolution, export, unknownFutureValue. */
        public ?string $provisioningStepType = null,
        /** Status of the step. Possible values are: success, warning,  failure, skipped, unknownFutureValue. */
        public ?string $status = null
    ) {}
}
