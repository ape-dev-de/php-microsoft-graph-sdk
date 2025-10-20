<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalConnectorsExternalItemCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ExternalConnectorsExternalItemCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ExternalConnectorsExternalItemCollectionResponse properties
     * 
     * @param array<string> $select Use ExternalConnectorsExternalItemCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
