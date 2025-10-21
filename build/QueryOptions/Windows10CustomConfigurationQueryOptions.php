<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Windows10CustomConfiguration resources
 *
 * Available select fields:
 * - omaSettings
 */
class Windows10CustomConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Windows10CustomConfiguration
     */
    public const FIELD_OMA_SETTINGS = 'omaSettings';

    /**
     * Select specific Windows10CustomConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
