<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LocalAdminPasswordSettings resources
 *
 * Available select fields:
 * - isEnabled
 */
class LocalAdminPasswordSettingsQueryOptions extends QueryOptions
{
    public const FIELD_IS_ENABLED = 'isEnabled';

    /**
     * Select specific LocalAdminPasswordSettings properties
     * 
     * @param array<string> $select Use LocalAdminPasswordSettingsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
