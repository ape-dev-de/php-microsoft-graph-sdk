<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Win32LobAppReturnCodeCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class Win32LobAppReturnCodeCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific Win32LobAppReturnCodeCollectionResponse properties
     * 
     * @param array<string> $select Use Win32LobAppReturnCodeCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
