<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MicrosoftManagedTrainingSetting resources
 *
 * Available select fields:
 */
class MicrosoftManagedTrainingSettingQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MicrosoftManagedTrainingSetting
     */

    /**
     * Select specific MicrosoftManagedTrainingSetting properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
