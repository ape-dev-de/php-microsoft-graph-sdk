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
    /**
     * Available select fields for ExternalConnectorsConfiguration
     */
    public const FIELD_AUTHORIZED_APP_IDS = 'authorizedAppIds';

    /**
     * Select specific ExternalConnectorsConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
