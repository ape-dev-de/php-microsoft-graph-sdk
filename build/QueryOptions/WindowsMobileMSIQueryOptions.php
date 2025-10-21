<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsMobileMSI resources
 *
 * Available select fields:
 * - commandLine
 * - ignoreVersionDetection
 * - productCode
 * - productVersion
 */
class WindowsMobileMSIQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsMobileMSI
     */
    public const FIELD_COMMAND_LINE = 'commandLine';
    public const FIELD_IGNORE_VERSION_DETECTION = 'ignoreVersionDetection';
    public const FIELD_PRODUCT_CODE = 'productCode';
    public const FIELD_PRODUCT_VERSION = 'productVersion';

    /**
     * Select specific WindowsMobileMSI properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
