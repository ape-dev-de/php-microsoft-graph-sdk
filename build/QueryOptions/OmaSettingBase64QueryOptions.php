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
    /**
     * Available select fields for OmaSettingBase64
     */
    public const FIELD_FILE_NAME = 'fileName';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific OmaSettingBase64 properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
