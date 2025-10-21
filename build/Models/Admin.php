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
        public ?Edge $edge = null,
        /** A container for the Microsoft 365 apps admin functionality. */
        public ?AdminMicrosoft365Apps $microsoft365Apps = null,
        /** Represents a setting to control people-related admin settings in the tenant. */
        public ?PeopleAdminSettings $people = null,
        /** A container for administrative resources to manage reports. */
        public ?AdminReportSettings $reportSettings = null,
        /** A container for service communications resources. Read-only. */
        public ?ServiceAnnouncement $serviceAnnouncement = null,
        /**  */
        public ?Sharepoint $sharepoint = null
    ) {}
}
