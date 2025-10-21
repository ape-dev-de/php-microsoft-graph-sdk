<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppPowerShellScriptRule
 */
class Win32LobAppPowerShellScriptRule
{
    public function __construct(
        /** The script output comparison value. Do not specify a value if the rule is used for detection. */
        public ?string $comparisonValue = null,
        /** The display name for the rule. Do not specify this value if the rule is used for detection. */
        public ?string $displayName = null,
        /** A value indicating whether a signature check is enforced. */
        public ?bool $enforceSignatureCheck = null,
        /**  */
        public ?string $operationType = null,
        /**  */
        public ?string $operator = null,
        /** A value indicating whether the script should run as 32-bit. */
        public ?bool $runAs32Bit = null,
        /** The execution context of the script. Do not specify this value if the rule is used for detection. Script detection rules will run in the same context as the associated app install context. Possible values are: system, user. */
        public ?string $runAsAccount = null,
        /** A complex type to store the PowerShell script rule data for a Win32 LOB app. */
        public ?string $scriptContent = null
    ) {}
}
