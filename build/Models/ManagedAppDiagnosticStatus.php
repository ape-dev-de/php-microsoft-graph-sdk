<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedAppDiagnosticStatus
 */
class ManagedAppDiagnosticStatus
{
    public function __construct(
        /** Instruction on how to mitigate a failed validation */
        public ?string $mitigationInstruction = null,
        /** The state of the operation */
        public ?string $state = null,
        /** The validation friendly name */
        public ?string $validationName = null
    ) {}
}
