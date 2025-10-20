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
    public const FIELD_RETURN_CODE = 'returnCode';
    public const FIELD_TYPE = 'type';

    /**
     * Select specific Win32LobAppReturnCode properties
     * 
     * @param array<string> $select Use Win32LobAppReturnCodeQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
