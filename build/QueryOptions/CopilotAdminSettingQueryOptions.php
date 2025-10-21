<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CopilotAdminSetting resources
 *
 * Available select fields:
 */
class CopilotAdminSettingQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CopilotAdminSetting
     */

    /**
     * Select specific CopilotAdminSetting properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
