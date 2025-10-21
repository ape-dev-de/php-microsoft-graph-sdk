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
    /**
     * Available select fields for LoginPageLayoutConfiguration
     */
    public const FIELD_IS_FOOTER_SHOWN = 'isFooterShown';
    public const FIELD_IS_HEADER_SHOWN = 'isHeaderShown';
    public const FIELD_LAYOUT_TEMPLATE_TYPE = 'layoutTemplateType';

    /**
     * Select specific LoginPageLayoutConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
