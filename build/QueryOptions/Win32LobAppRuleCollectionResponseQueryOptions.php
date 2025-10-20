<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Win32LobAppRuleCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class Win32LobAppRuleCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific Win32LobAppRuleCollectionResponse properties
     * 
     * @param array<string> $select Use Win32LobAppRuleCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
