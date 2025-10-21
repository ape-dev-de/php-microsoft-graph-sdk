<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppProductCodeRule
 */
class Win32LobAppProductCodeRule
{
    public function __construct(
        /**  */
        public ?Win32LobAppRuleType $ruleType = null,
        /** The product code of the app. */
        public ?string $productCode = null,
        /** The product version comparison value. */
        public ?string $productVersion = null,
        /**  */
        public ?Win32LobAppRuleOperator $productVersionOperator = null
    ) {}
}
