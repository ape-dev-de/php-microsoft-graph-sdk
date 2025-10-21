<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OmaSettingStringXml resources
 *
 * Available select fields:
 */
class OmaSettingStringXmlQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OmaSettingStringXml
     */

    /**
     * Select specific OmaSettingStringXml properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
