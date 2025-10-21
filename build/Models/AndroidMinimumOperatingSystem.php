<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AndroidMinimumOperatingSystem
 */
class AndroidMinimumOperatingSystem
{
    public function __construct(
        /** When TRUE, only Version 10.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE. */
        public ?bool $v10_0 = null,
        /** When TRUE, only Version 11.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE. */
        public ?bool $v11_0 = null,
        /** When TRUE, only Version 4.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE. */
        public ?bool $v4_0 = null,
        /** When TRUE, only Version 4.0.3 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE. */
        public ?bool $v4_0_3 = null,
        /** When TRUE, only Version 4.1 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE. */
        public ?bool $v4_1 = null,
        /** When TRUE, only Version 4.2 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE. */
        public ?bool $v4_2 = null,
        /** When TRUE, only Version 4.3 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE. */
        public ?bool $v4_3 = null,
        /** When TRUE, only Version 4.4 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE. */
        public ?bool $v4_4 = null,
        /** When TRUE, only Version 5.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE. */
        public ?bool $v5_0 = null,
        /** When TRUE, only Version 5.1 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE. */
        public ?bool $v5_1 = null,
        /** When TRUE, only Version 6.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE. */
        public ?bool $v6_0 = null,
        /** When TRUE, only Version 7.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE. */
        public ?bool $v7_0 = null,
        /** When TRUE, only Version 7.1 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE. */
        public ?bool $v7_1 = null,
        /** When TRUE, only Version 8.0 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE. */
        public ?bool $v8_0 = null,
        /** When TRUE, only Version 8.1 or later is supported. Default value is FALSE. Exactly one of the minimum operating system boolean values will be TRUE. */
        public ?bool $v8_1 = null,
        /** Contains properties for the minimum operating system required for an Android mobile app. */
        public ?string $v9_0 = null
    ) {}
}
