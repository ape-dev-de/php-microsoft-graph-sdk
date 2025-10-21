<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserFlowLanguageConfiguration resources
 *
 * Available select fields:
 */
class UserFlowLanguageConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserFlowLanguageConfiguration
     */

    /**
     * Select specific UserFlowLanguageConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
