<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Win32LobAppReturnCode resources
 *
 * Available select fields:
 * - returnCode
 * - type
 */
class Win32LobAppReturnCodeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Win32LobAppReturnCode
     */
    public const FIELD_RETURN_CODE = 'returnCode';
    public const FIELD_TYPE = 'type';

    /**
     * Select specific Win32LobAppReturnCode properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
