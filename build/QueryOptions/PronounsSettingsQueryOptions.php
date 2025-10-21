<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PronounsSettings resources
 *
 * Available select fields:
 * - isEnabledInOrganization
 */
class PronounsSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PronounsSettings
     */
    public const FIELD_IS_ENABLED_IN_ORGANIZATION = 'isEnabledInOrganization';

    /**
     * Select specific PronounsSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
