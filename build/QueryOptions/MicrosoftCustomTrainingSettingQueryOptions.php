<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MicrosoftCustomTrainingSetting resources
 *
 * Available select fields:
 */
class MicrosoftCustomTrainingSettingQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MicrosoftCustomTrainingSetting
     */

    /**
     * Select specific MicrosoftCustomTrainingSetting properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
