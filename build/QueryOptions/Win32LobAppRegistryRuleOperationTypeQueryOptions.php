<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Win32LobAppRegistryRuleOperationType resources
 *
 * Available select fields:
 */
class Win32LobAppRegistryRuleOperationTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Win32LobAppRegistryRuleOperationType
     */

    /**
     * Select specific Win32LobAppRegistryRuleOperationType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
