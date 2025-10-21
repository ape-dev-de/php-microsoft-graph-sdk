<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RemoteDesktopSecurityConfiguration
 */
class RemoteDesktopSecurityConfiguration
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Determines if Microsoft Entra ID RDS authentication protocol for RDP is enabled. */
        public ?bool $isRemoteDesktopProtocolEnabled = null,
        /** @var string[] The collection of target device groups that are associated with the RDS security configuration that will be enabled for SSO when a client connects to the target device over RDP using the new Microsoft Entra ID RDS authentication protocol. */
        public array $targetDeviceGroups = []
    ) {}
}
