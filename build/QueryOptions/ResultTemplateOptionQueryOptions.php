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
    public const FIELD_ENABLE_RESULT_TEMPLATE = 'enableResultTemplate';

    /**
     * Select specific ResultTemplateOption properties
     * 
     * @param array<string> $select Use ResultTemplateOptionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
