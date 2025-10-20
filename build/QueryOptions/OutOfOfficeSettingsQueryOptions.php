<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OutOfOfficeSettings resources
 *
 * Available select fields:
 * - isOutOfOffice
 * - message
 */
class OutOfOfficeSettingsQueryOptions extends QueryOptions
{
    public const FIELD_IS_OUT_OF_OFFICE = 'isOutOfOffice';
    public const FIELD_MESSAGE = 'message';

    /**
     * Select specific OutOfOfficeSettings properties
     * 
     * @param array<string> $select Use OutOfOfficeSettingsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
