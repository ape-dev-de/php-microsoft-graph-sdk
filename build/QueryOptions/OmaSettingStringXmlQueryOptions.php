<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OmaSettingStringXml resources
 *
 * Available select fields:
 * - fileName
 * - value
 */
class OmaSettingStringXmlQueryOptions extends QueryOptions
{
    public const FIELD_FILE_NAME = 'fileName';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific OmaSettingStringXml properties
     * 
     * @param array<string> $select Use OmaSettingStringXmlQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
