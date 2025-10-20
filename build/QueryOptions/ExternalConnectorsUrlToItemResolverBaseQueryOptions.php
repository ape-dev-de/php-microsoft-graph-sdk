<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalConnectorsUrlToItemResolverBase resources
 *
 * Available select fields:
 * - priority
 */
class ExternalConnectorsUrlToItemResolverBaseQueryOptions extends QueryOptions
{
    public const FIELD_PRIORITY = 'priority';

    /**
     * Select specific ExternalConnectorsUrlToItemResolverBase properties
     * 
     * @param array<string> $select Use ExternalConnectorsUrlToItemResolverBaseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
