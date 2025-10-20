<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalConnectorsExternalGroup resources
 *
 * Available select fields:
 * - description
 * - displayName
 * - members
 */
class ExternalConnectorsExternalGroupQueryOptions extends QueryOptions
{
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_MEMBERS = 'members';

    /**
     * Select specific ExternalConnectorsExternalGroup properties
     * 
     * @param array<string> $select Use ExternalConnectorsExternalGroupQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
