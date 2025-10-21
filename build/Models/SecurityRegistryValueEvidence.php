<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityRegistryValueEvidence
 */
class SecurityRegistryValueEvidence
{
    public function __construct(
        /** A unique identifier assigned to a device by Microsoft Defender for Endpoint. */
        public ?string $mdeDeviceId = null,
        /** Registry hive of the key that the recorded action was applied to. */
        public ?string $registryHive = null,
        /** Registry key that the recorded action was applied to. */
        public ?string $registryKey = null,
        /** Data of the registry value that the recorded action was applied to. */
        public ?string $registryValue = null,
        /** Name of the registry value that the recorded action was applied to. */
        public ?string $registryValueName = null,
        /** Data type, such as binary or string, of the registry value that the recorded action was applied to. */
        public ?string $registryValueType = null
    ) {}
}
