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
    /**
     * Available select fields for ExternalConnectorsExternalGroup
     */
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_MEMBERS = 'members';

    /**
     * Select specific ExternalConnectorsExternalGroup properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
