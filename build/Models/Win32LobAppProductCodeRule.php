<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppProductCodeRule
 */
class Win32LobAppProductCodeRule
{
    public function __construct(
        /** A base complex type to store the detection or requirement rule data for a Win32 LOB app. */
        public ?string $ruleType = null,
        /** The product code of the app. */
        public ?string $productCode = null,
        /** The product version comparison value. */
        public ?string $productVersion = null,
        /** A complex type to store the product code and version rule data for a Win32 LOB app. This rule is not supported as a requirement rule. */
        public ?string $productVersionOperator = null
    ) {}
}
