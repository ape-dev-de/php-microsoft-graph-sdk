<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CopilotAdminSetting resources
 *
 * Available select fields:
 * - limitedMode
 */
class CopilotAdminSettingQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CopilotAdminSetting
     */
    public const FIELD_LIMITED_MODE = 'limitedMode';

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
