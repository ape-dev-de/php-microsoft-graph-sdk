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
    public const FIELD_RESOURCE_ID = 'resourceId';

    /**
     * Select specific AzureAdTokenAuthentication properties
     * 
     * @param array<string> $select Use AzureAdTokenAuthenticationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
