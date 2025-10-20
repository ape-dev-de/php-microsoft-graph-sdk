<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalConnectorsExternalGroupCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ExternalConnectorsExternalGroupCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ExternalConnectorsExternalGroupCollectionResponse properties
     * 
     * @param array<string> $select Use ExternalConnectorsExternalGroupCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
