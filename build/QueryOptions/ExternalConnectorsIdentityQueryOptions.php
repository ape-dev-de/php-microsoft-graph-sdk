<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalConnectorsIdentity resources
 *
 * Available select fields:
 * - type
 */
class ExternalConnectorsIdentityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ExternalConnectorsIdentity
     */
    public const FIELD_TYPE = 'type';

    /**
     * Select specific ExternalConnectorsIdentity properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
