<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LoginPageLayoutConfiguration resources
 *
 * Available select fields:
 * - isFooterShown
 * - isHeaderShown
 * - layoutTemplateType
 */
class LoginPageLayoutConfigurationQueryOptions extends QueryOptions
{
    public const FIELD_IS_FOOTER_SHOWN = 'isFooterShown';
    public const FIELD_IS_HEADER_SHOWN = 'isHeaderShown';
    public const FIELD_LAYOUT_TEMPLATE_TYPE = 'layoutTemplateType';

    /**
     * Select specific LoginPageLayoutConfiguration properties
     * 
     * @param array<string> $select Use LoginPageLayoutConfigurationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
