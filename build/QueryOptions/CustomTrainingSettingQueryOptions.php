<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CustomTrainingSetting resources
 *
 * Available select fields:
 */
class CustomTrainingSettingQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CustomTrainingSetting
     */

    /**
     * Select specific CustomTrainingSetting properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
