<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for TemplateScenarios resources
 *
 * Available select fields:
 */
class TemplateScenariosQueryOptions extends QueryOptions
{
    /**
     * Available select fields for TemplateScenarios
     */

    /**
     * Select specific TemplateScenarios properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
