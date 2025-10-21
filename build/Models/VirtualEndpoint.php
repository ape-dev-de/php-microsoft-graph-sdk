<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEndpoint
 */
class VirtualEndpoint
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** A collection of Cloud PC audit events. */
        public array $auditEvents = [],
        /** A collection of cloud-managed virtual desktops. */
        public array $cloudPCs = [],
        /** A collection of device image resources on Cloud PC. */
        public array $deviceImages = [],
        /** A collection of gallery image resources on Cloud PC. */
        public array $galleryImages = [],
        /** A defined collection of Azure resource information that can be used to establish Azure network connections for Cloud PCs. */
        public array $onPremisesConnections = [],
        /** A collection of Cloud PC provisioning policies. */
        public array $provisioningPolicies = [],
        /** @var string[] A collection of Cloud PC user settings. */
        public array $userSettings = []
    ) {}
}
