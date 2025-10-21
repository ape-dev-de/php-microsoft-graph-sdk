<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ResultTemplateOption resources
 *
 * Available select fields:
 * - enableResultTemplate
 */
class ResultTemplateOptionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ResultTemplateOption
     */
    public const FIELD_ENABLE_RESULT_TEMPLATE = 'enableResultTemplate';

    /**
     * Select specific ResultTemplateOption properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
