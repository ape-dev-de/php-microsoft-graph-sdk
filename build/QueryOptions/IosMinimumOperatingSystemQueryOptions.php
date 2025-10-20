<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosMinimumOperatingSystem resources
 *
 * Available select fields:
 * - v10_0
 * - v11_0
 * - v12_0
 * - v13_0
 * - v14_0
 * - v15_0
 * - v8_0
 * - v9_0
 */
class IosMinimumOperatingSystemQueryOptions extends QueryOptions
{
    public const FIELD_V10_0 = 'v10_0';
    public const FIELD_V11_0 = 'v11_0';
    public const FIELD_V12_0 = 'v12_0';
    public const FIELD_V13_0 = 'v13_0';
    public const FIELD_V14_0 = 'v14_0';
    public const FIELD_V15_0 = 'v15_0';
    public const FIELD_V8_0 = 'v8_0';
    public const FIELD_V9_0 = 'v9_0';

    /**
     * Select specific IosMinimumOperatingSystem properties
     * 
     * @param array<string> $select Use IosMinimumOperatingSystemQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
