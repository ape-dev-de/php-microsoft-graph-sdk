<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AndroidWorkProfileCustomConfiguration resources
 *
 * Available select fields:
 * - omaSettings
 */
class AndroidWorkProfileCustomConfigurationQueryOptions extends QueryOptions
{
    public const FIELD_OMA_SETTINGS = 'omaSettings';

    /**
     * Select specific AndroidWorkProfileCustomConfiguration properties
     * 
     * @param array<string> $select Use AndroidWorkProfileCustomConfigurationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
