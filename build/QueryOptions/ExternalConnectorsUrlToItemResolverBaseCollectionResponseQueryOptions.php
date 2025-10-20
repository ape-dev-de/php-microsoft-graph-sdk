<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalConnectorsUrlToItemResolverBaseCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ExternalConnectorsUrlToItemResolverBaseCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ExternalConnectorsUrlToItemResolverBaseCollectionResponse properties
     * 
     * @param array<string> $select Use ExternalConnectorsUrlToItemResolverBaseCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
