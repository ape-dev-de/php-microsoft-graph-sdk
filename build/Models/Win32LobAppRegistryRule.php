<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppRegistryRule
 */
class Win32LobAppRegistryRule
{
    public function __construct(
        /**  */
        public ?Win32LobAppRuleType $ruleType = null,
        /** A value indicating whether to search the 32-bit registry on 64-bit systems. */
        public ?bool $check32BitOn64System = null,
        /** The registry comparison value. */
        public ?string $comparisonValue = null,
        /** The full path of the registry entry containing the value to detect. */
        public ?string $keyPath = null,
        /**  */
        public ?Win32LobAppRegistryRuleOperationType $operationType = null,
        /**  */
        public ?Win32LobAppRuleOperator $operator = null,
        /** The name of the registry value to detect. */
        public ?string $valueName = null
    ) {}
}
