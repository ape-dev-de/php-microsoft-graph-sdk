<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Admin
 */
class Admin
{
    public function __construct(
        /** A container for Microsoft Edge resources. Read-only. */
        public ?string $edge = null,
        /** A container for the Microsoft 365 apps admin functionality. */
        public ?string $microsoft365Apps = null,
        /** Represents a setting to control people-related admin settings in the tenant. */
        public ?string $people = null,
        /** A container for administrative resources to manage reports. */
        public ?string $reportSettings = null,
        /** A container for service communications resources. Read-only. */
        public ?string $serviceAnnouncement = null,
        /**  */
        public ?string $sharepoint = null
    ) {}
}
