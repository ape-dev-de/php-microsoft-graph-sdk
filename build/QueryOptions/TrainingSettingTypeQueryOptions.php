<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TrainingSettingType resources
 *
 * Available select fields:
 */
class TrainingSettingTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TrainingSettingType
     */

    /**
     * Select specific TrainingSettingType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
