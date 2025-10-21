<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedEBookAssignment
 */
class ManagedEBookAssignment
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public ?InstallIntent $installIntent = null,
        /** The assignment target for eBook. */
        public ?DeviceAndAppManagementAssignmentTarget $target = null
    ) {}
}
