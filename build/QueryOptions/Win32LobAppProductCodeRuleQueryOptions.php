<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Win32LobAppProductCodeRule resources
 *
 * Available select fields:
 * - productCode
 * - productVersion
 * - productVersionOperator
 */
class Win32LobAppProductCodeRuleQueryOptions extends QueryOptions
{
    public const FIELD_PRODUCT_CODE = 'productCode';
    public const FIELD_PRODUCT_VERSION = 'productVersion';
    public const FIELD_PRODUCT_VERSION_OPERATOR = 'productVersionOperator';

    /**
     * Select specific Win32LobAppProductCodeRule properties
     * 
     * @param array<string> $select Use Win32LobAppProductCodeRuleQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
