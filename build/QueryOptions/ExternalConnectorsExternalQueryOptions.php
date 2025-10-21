<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalConnectorsExternal resources
 *
 * Available select fields:
 * - connections
 */
class ExternalConnectorsExternalQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ExternalConnectorsExternal
     */
    public const FIELD_CONNECTIONS = 'connections';

    /**
     * Select specific ExternalConnectorsExternal properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
