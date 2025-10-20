<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CustomExtensionStageSetting resources
 *
 * Available select fields:
 * - stage
 * - customExtension
 */
class CustomExtensionStageSettingQueryOptions extends QueryOptions
{
    public const FIELD_STAGE = 'stage';
    public const FIELD_CUSTOM_EXTENSION = 'customExtension';

    /**
     * Select specific CustomExtensionStageSetting properties
     * 
     * @param array<string> $select Use CustomExtensionStageSettingQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
