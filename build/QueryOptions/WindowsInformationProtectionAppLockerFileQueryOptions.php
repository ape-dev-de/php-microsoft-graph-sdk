<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsInformationProtectionAppLockerFile resources
 *
 * Available select fields:
 * - displayName
 * - file
 * - fileHash
 * - version
 */
class WindowsInformationProtectionAppLockerFileQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsInformationProtectionAppLockerFile
     */
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_FILE = 'file';
    public const FIELD_FILE_HASH = 'fileHash';
    public const FIELD_VERSION = 'version';

    /**
     * Select specific WindowsInformationProtectionAppLockerFile properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
