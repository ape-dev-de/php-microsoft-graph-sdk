<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CustomExtensionStageSetting resources
 *
 * Available select fields:
 */
class CustomExtensionStageSettingQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CustomExtensionStageSetting
     */

    /**
     * Select specific CustomExtensionStageSetting properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
