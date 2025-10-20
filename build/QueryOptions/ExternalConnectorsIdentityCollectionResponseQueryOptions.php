<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalConnectorsIdentityCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ExternalConnectorsIdentityCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ExternalConnectorsIdentityCollectionResponse properties
     * 
     * @param array<string> $select Use ExternalConnectorsIdentityCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
