<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExternalConnectorsConfiguration resources
 *
 * Available select fields:
 * - authorizedAppIds
 */
class ExternalConnectorsConfigurationQueryOptions extends QueryOptions
{
    public const FIELD_AUTHORIZED_APP_IDS = 'authorizedAppIds';

    /**
     * Select specific ExternalConnectorsConfiguration properties
     * 
     * @param array<string> $select Use ExternalConnectorsConfigurationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
