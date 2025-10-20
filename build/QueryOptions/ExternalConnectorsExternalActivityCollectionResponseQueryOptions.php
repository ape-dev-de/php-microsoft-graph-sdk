<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalConnectorsExternalActivityCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ExternalConnectorsExternalActivityCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ExternalConnectorsExternalActivityCollectionResponse properties
     * 
     * @param array<string> $select Use ExternalConnectorsExternalActivityCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
