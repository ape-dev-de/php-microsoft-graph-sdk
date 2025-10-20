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
    public const FIELD_BINARY_NAME = 'binaryName';
    public const FIELD_BINARY_VERSION_HIGH = 'binaryVersionHigh';
    public const FIELD_BINARY_VERSION_LOW = 'binaryVersionLow';

    /**
     * Select specific WindowsInformationProtectionDesktopApp properties
     * 
     * @param array<string> $select Use WindowsInformationProtectionDesktopAppQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
