<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Win32LobAppPowerShellScriptRule resources
 *
 * Available select fields:
 * - comparisonValue
 * - displayName
 * - enforceSignatureCheck
 * - operationType
 * - operator
 * - runAs32Bit
 * - runAsAccount
 * - scriptContent
 */
class Win32LobAppPowerShellScriptRuleQueryOptions extends QueryOptions
{
    public const FIELD_COMPARISON_VALUE = 'comparisonValue';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_ENFORCE_SIGNATURE_CHECK = 'enforceSignatureCheck';
    public const FIELD_OPERATION_TYPE = 'operationType';
    public const FIELD_OPERATOR = 'operator';
    public const FIELD_RUN_AS32BIT = 'runAs32Bit';
    public const FIELD_RUN_AS_ACCOUNT = 'runAsAccount';
    public const FIELD_SCRIPT_CONTENT = 'scriptContent';

    /**
     * Select specific Win32LobAppPowerShellScriptRule properties
     * 
     * @param array<string> $select Use Win32LobAppPowerShellScriptRuleQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
