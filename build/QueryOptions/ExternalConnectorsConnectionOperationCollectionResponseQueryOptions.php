<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalConnectorsConnectionOperationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ExternalConnectorsConnectionOperationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ExternalConnectorsConnectionOperationCollectionResponse properties
     * 
     * @param array<string> $select Use ExternalConnectorsConnectionOperationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
