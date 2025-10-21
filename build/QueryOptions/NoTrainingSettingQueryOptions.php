<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for NoTrainingSetting resources
 *
 * Available select fields:
 */
class NoTrainingSettingQueryOptions extends QueryOptions
{
    /**
     * Available select fields for NoTrainingSetting
     */

    /**
     * Select specific NoTrainingSetting properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
