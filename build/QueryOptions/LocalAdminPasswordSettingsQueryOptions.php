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
    /**
     * Available select fields for LocalAdminPasswordSettings
     */
    public const FIELD_IS_ENABLED = 'isEnabled';

    /**
     * Select specific LocalAdminPasswordSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
