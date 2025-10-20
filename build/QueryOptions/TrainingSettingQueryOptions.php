<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TrainingSetting resources
 *
 * Available select fields:
 * - settingType
 */
class TrainingSettingQueryOptions extends QueryOptions
{
    public const FIELD_SETTING_TYPE = 'settingType';

    /**
     * Select specific TrainingSetting properties
     * 
     * @param array<string> $select Use TrainingSettingQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
