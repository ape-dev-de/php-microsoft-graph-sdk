<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsMinimumOperatingSystem resources
 *
 * Available select fields:
 * - v10_0
 * - v8_0
 * - v8_1
 */
class WindowsMinimumOperatingSystemQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsMinimumOperatingSystem
     */
    public const FIELD_V10_0 = 'v10_0';
    public const FIELD_V8_0 = 'v8_0';
    public const FIELD_V8_1 = 'v8_1';

    /**
     * Select specific WindowsMinimumOperatingSystem properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
