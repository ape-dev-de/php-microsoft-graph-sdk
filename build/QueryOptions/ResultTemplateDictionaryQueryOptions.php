<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ResultTemplateDictionary resources
 *
 * Available select fields:
 */
class ResultTemplateDictionaryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ResultTemplateDictionary
     */

    /**
     * Select specific ResultTemplateDictionary properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
