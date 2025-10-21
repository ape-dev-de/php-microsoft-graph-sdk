<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for GroupSettingTemplate resources
 *
 * Available select fields:
 */
class GroupSettingTemplateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for GroupSettingTemplate
     */

    /**
     * Select specific GroupSettingTemplate properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
