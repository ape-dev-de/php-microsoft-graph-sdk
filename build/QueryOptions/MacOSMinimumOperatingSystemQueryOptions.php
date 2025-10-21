<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MacOSMinimumOperatingSystem resources
 *
 * Available select fields:
 * - v10_10
 * - v10_11
 * - v10_12
 * - v10_13
 * - v10_14
 * - v10_15
 * - v10_7
 * - v10_8
 * - v10_9
 * - v11_0
 * - v12_0
 * - v13_0
 */
class MacOSMinimumOperatingSystemQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MacOSMinimumOperatingSystem
     */
    public const FIELD_V10_10 = 'v10_10';
    public const FIELD_V10_11 = 'v10_11';
    public const FIELD_V10_12 = 'v10_12';
    public const FIELD_V10_13 = 'v10_13';
    public const FIELD_V10_14 = 'v10_14';
    public const FIELD_V10_15 = 'v10_15';
    public const FIELD_V10_7 = 'v10_7';
    public const FIELD_V10_8 = 'v10_8';
    public const FIELD_V10_9 = 'v10_9';
    public const FIELD_V11_0 = 'v11_0';
    public const FIELD_V12_0 = 'v12_0';
    public const FIELD_V13_0 = 'v13_0';

    /**
     * Select specific MacOSMinimumOperatingSystem properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
