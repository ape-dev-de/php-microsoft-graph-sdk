<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppPowerShellScriptRule
 */
class Win32LobAppPowerShellScriptRule
{
    public function __construct(
        /**  */
        public ?Win32LobAppRuleType $ruleType = null,
        /** The script output comparison value. Do not specify a value if the rule is used for detection. */
        public ?string $comparisonValue = null,
        /** The display name for the rule. Do not specify this value if the rule is used for detection. */
        public ?string $displayName = null,
        /** A value indicating whether a signature check is enforced. */
        public ?bool $enforceSignatureCheck = null,
        /**  */
        public ?Win32LobAppPowerShellScriptRuleOperationType $operationType = null,
        /**  */
        public ?Win32LobAppRuleOperator $operator = null,
        /** A value indicating whether the script should run as 32-bit. */
        public ?bool $runAs32Bit = null,
        /** The execution context of the script. Do not specify this value if the rule is used for detection. Script detection rules will run in the same context as the associated app install context. Possible values are: system, user. */
        public ?RunAsAccountType $runAsAccount = null,
        /** The base64-encoded script content. */
        public ?string $scriptContent = null
    ) {}
}
