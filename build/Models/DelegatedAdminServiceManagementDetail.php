<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DelegatedAdminServiceManagementDetail
 */
class DelegatedAdminServiceManagementDetail
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The URL of the management portal for the managed service. Read-only. */
        public ?string $serviceManagementUrl = null,
        /** The name of a managed service. Read-only. */
        public ?string $serviceName = null
    ) {}
}
