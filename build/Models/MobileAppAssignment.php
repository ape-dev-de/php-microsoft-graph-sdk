<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MobileAppAssignment
 */
class MobileAppAssignment
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public ?InstallIntent $intent = null,
        /** The settings for target assignment defined by the admin. */
        public ?MobileAppAssignmentSettings $settings = null,
        /** The target group assignment defined by the admin. */
        public ?DeviceAndAppManagementAssignmentTarget $target = null
    ) {}
}
