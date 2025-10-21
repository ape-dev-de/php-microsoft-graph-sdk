<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsDeviceStartupProcessPerformance
 */
class UserExperienceAnalyticsDeviceStartupProcessPerformance
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The count of devices which initiated this process on startup. Supports: $filter, $select, $OrderBy. Read-only. */
        public ?float $deviceCount = null,
        /** The median impact of startup process on device boot time in milliseconds. Supports: $filter, $select, $OrderBy. Read-only. */
        public ?float $medianImpactInMs = null,
        /** The name of the startup process. Examples: outlook, excel. Supports: $select, $OrderBy. Read-only. */
        public ?string $processName = null,
        /** The product name of the startup process. Examples: Microsoft Outlook, Microsoft Excel. Supports: $select, $OrderBy. Read-only. */
        public ?string $productName = null,
        /** The publisher of the startup process. Examples: Microsoft Corporation, Contoso Corp. Supports: $select, $OrderBy. Read-only. */
        public ?string $publisher = null,
        /** The total impact of startup process on device boot time in milliseconds. Supports: $filter, $select, $OrderBy. Read-only. */
        public ?float $totalImpactInMs = null
    ) {}
}
