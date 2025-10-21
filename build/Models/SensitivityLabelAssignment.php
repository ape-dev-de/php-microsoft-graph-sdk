<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SensitivityLabelAssignment
 */
class SensitivityLabelAssignment
{
    public function __construct(
        /**  */
        public ?string $assignmentMethod = null,
        /** The unique identifier for the sensitivity label assigned to the file. */
        public ?string $sensitivityLabelId = null,
        /** The unique identifier for the tenant that hosts the file when this label is applied. */
        public ?string $tenantId = null
    ) {}
}
