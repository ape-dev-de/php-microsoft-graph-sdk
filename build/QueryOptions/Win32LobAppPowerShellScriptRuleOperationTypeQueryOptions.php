<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Win32LobAppPowerShellScriptRuleOperationType resources
 *
 * Available select fields:
 */
class Win32LobAppPowerShellScriptRuleOperationTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Win32LobAppPowerShellScriptRuleOperationType
     */

    /**
     * Select specific Win32LobAppPowerShellScriptRuleOperationType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
