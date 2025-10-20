<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OmaSettingBase64 resources
 *
 * Available select fields:
 * - fileName
 * - value
 */
class OmaSettingBase64QueryOptions extends QueryOptions
{
    public const FIELD_FILE_NAME = 'fileName';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific OmaSettingBase64 properties
     * 
     * @param array<string> $select Use OmaSettingBase64QueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
