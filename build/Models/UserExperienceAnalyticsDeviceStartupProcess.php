<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsDeviceStartupProcess
 */
class UserExperienceAnalyticsDeviceStartupProcess
{
    public function __construct(
        /** The Intune device id of the device. Supports: $select, $OrderBy. Read-only. */
        public ?string $managedDeviceId = null,
        /** The name of the process. Examples: outlook, excel. Supports: $select, $OrderBy. Read-only. */
        public ?string $processName = null,
        /** The product name of the process. Examples: Microsoft Outlook, Microsoft Excel. Supports: $select, $OrderBy. Read-only. */
        public ?string $productName = null,
        /** The publisher of the process. Examples: Microsoft Corporation, Contoso Corp. Supports: $select, $OrderBy. Read-only. */
        public ?string $publisher = null,
        /** The user experience analytics device startup process details. */
        public ?string $startupImpactInMs = null
    ) {}
}
