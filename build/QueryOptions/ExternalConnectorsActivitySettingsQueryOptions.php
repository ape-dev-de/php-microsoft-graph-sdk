<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalConnectorsActivitySettings resources
 *
 * Available select fields:
 * - urlToItemResolvers
 */
class ExternalConnectorsActivitySettingsQueryOptions extends QueryOptions
{
    public const FIELD_URL_TO_ITEM_RESOLVERS = 'urlToItemResolvers';

    /**
     * Select specific ExternalConnectorsActivitySettings properties
     * 
     * @param array<string> $select Use ExternalConnectorsActivitySettingsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
