<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AzureAdTokenAuthentication resources
 *
 * Available select fields:
 * - resourceId
 */
class AzureAdTokenAuthenticationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AzureAdTokenAuthentication
     */
    public const FIELD_RESOURCE_ID = 'resourceId';

    /**
     * Select specific AzureAdTokenAuthentication properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
