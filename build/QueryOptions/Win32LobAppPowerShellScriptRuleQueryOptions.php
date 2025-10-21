<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Win32LobAppPowerShellScriptRule resources
 *
 * Available select fields:
 */
class Win32LobAppPowerShellScriptRuleQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Win32LobAppPowerShellScriptRule
     */

    /**
     * Select specific Win32LobAppPowerShellScriptRule properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
