<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AndroidMinimumOperatingSystem resources
 *
 * Available select fields:
 * - v10_0
 * - v11_0
 * - v4_0
 * - v4_0_3
 * - v4_1
 * - v4_2
 * - v4_3
 * - v4_4
 * - v5_0
 * - v5_1
 * - v6_0
 * - v7_0
 * - v7_1
 * - v8_0
 * - v8_1
 * - v9_0
 */
class AndroidMinimumOperatingSystemQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AndroidMinimumOperatingSystem
     */
    public const FIELD_V10_0 = 'v10_0';
    public const FIELD_V11_0 = 'v11_0';
    public const FIELD_V4_0 = 'v4_0';
    public const FIELD_V4_0_3 = 'v4_0_3';
    public const FIELD_V4_1 = 'v4_1';
    public const FIELD_V4_2 = 'v4_2';
    public const FIELD_V4_3 = 'v4_3';
    public const FIELD_V4_4 = 'v4_4';
    public const FIELD_V5_0 = 'v5_0';
    public const FIELD_V5_1 = 'v5_1';
    public const FIELD_V6_0 = 'v6_0';
    public const FIELD_V7_0 = 'v7_0';
    public const FIELD_V7_1 = 'v7_1';
    public const FIELD_V8_0 = 'v8_0';
    public const FIELD_V8_1 = 'v8_1';
    public const FIELD_V9_0 = 'v9_0';

    /**
     * Select specific AndroidMinimumOperatingSystem properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
