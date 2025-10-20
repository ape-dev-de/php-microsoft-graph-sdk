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
    public const FIELD_LIMITED_MODE = 'limitedMode';

    /**
     * Select specific CopilotAdminSetting properties
     * 
     * @param array<string> $select Use CopilotAdminSettingQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
