<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserFlowLanguagePage resources
 *
 * Available select fields:
 */
class UserFlowLanguagePageQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserFlowLanguagePage
     */

    /**
     * Select specific UserFlowLanguagePage properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
