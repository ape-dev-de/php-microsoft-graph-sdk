<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsInformationProtectionDesktopApp resources
 *
 * Available select fields:
 * - binaryName
 * - binaryVersionHigh
 * - binaryVersionLow
 */
class WindowsInformationProtectionDesktopAppQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsInformationProtectionDesktopApp
     */
    public const FIELD_BINARY_NAME = 'binaryName';
    public const FIELD_BINARY_VERSION_HIGH = 'binaryVersionHigh';
    public const FIELD_BINARY_VERSION_LOW = 'binaryVersionLow';

    /**
     * Select specific WindowsInformationProtectionDesktopApp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
