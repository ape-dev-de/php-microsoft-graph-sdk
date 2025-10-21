<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AndroidCustomConfiguration resources
 *
 * Available select fields:
 * - omaSettings
 */
class AndroidCustomConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AndroidCustomConfiguration
     */
    public const FIELD_OMA_SETTINGS = 'omaSettings';

    /**
     * Select specific AndroidCustomConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
