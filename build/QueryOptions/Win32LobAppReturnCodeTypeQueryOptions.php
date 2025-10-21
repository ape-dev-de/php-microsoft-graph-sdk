<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Win32LobAppReturnCodeType resources
 *
 * Available select fields:
 */
class Win32LobAppReturnCodeTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Win32LobAppReturnCodeType
     */

    /**
     * Select specific Win32LobAppReturnCodeType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
