<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TeleconferenceDeviceMediaQualityCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class TeleconferenceDeviceMediaQualityCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific TeleconferenceDeviceMediaQualityCollectionResponse properties
     * 
     * @param array<string> $select Use TeleconferenceDeviceMediaQualityCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
