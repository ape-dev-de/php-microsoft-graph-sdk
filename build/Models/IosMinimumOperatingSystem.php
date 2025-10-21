<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosMinimumOperatingSystem
 */
class IosMinimumOperatingSystem
{
    public function __construct(
        /** When TRUE, only Version 10.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE. */
        public ?bool $v10_0 = null,
        /** When TRUE, only Version 11.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE. */
        public ?bool $v11_0 = null,
        /** When TRUE, only Version 12.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE. */
        public ?bool $v12_0 = null,
        /** When TRUE, only Version 13.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE. */
        public ?bool $v13_0 = null,
        /** When TRUE, only Version 14.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE. */
        public ?bool $v14_0 = null,
        /** When TRUE, only Version 15.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE. */
        public ?bool $v15_0 = null,
        /** When TRUE, only Version 8.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE. */
        public ?bool $v8_0 = null,
        /** Contains properties of the minimum operating system required for an iOS mobile app. */
        public ?string $v9_0 = null
    ) {}
}
