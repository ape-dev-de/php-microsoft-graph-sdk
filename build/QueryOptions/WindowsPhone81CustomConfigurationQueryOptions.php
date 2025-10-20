<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsPhone81CustomConfiguration resources
 *
 * Available select fields:
 * - omaSettings
 */
class WindowsPhone81CustomConfigurationQueryOptions extends QueryOptions
{
    public const FIELD_OMA_SETTINGS = 'omaSettings';

    /**
     * Select specific WindowsPhone81CustomConfiguration properties
     * 
     * @param array<string> $select Use WindowsPhone81CustomConfigurationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
