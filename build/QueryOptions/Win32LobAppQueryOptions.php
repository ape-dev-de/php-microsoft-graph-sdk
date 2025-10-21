<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Win32LobApp resources
 *
 * Available select fields:
 * - allowedArchitectures
 * - applicableArchitectures
 * - installCommandLine
 * - installExperience
 * - minimumCpuSpeedInMHz
 * - minimumFreeDiskSpaceInMB
 * - minimumMemoryInMB
 * - minimumNumberOfProcessors
 * - minimumSupportedWindowsRelease
 * - msiInformation
 * - returnCodes
 * - rules
 * - setupFilePath
 * - uninstallCommandLine
 */
class Win32LobAppQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Win32LobApp
     */
    public const FIELD_ALLOWED_ARCHITECTURES = 'allowedArchitectures';
    public const FIELD_APPLICABLE_ARCHITECTURES = 'applicableArchitectures';
    public const FIELD_INSTALL_COMMAND_LINE = 'installCommandLine';
    public const FIELD_INSTALL_EXPERIENCE = 'installExperience';
    public const FIELD_MINIMUM_CPU_SPEED_IN_MHZ = 'minimumCpuSpeedInMHz';
    public const FIELD_MINIMUM_FREE_DISK_SPACE_IN_MB = 'minimumFreeDiskSpaceInMB';
    public const FIELD_MINIMUM_MEMORY_IN_MB = 'minimumMemoryInMB';
    public const FIELD_MINIMUM_NUMBER_OF_PROCESSORS = 'minimumNumberOfProcessors';
    public const FIELD_MINIMUM_SUPPORTED_WINDOWS_RELEASE = 'minimumSupportedWindowsRelease';
    public const FIELD_MSI_INFORMATION = 'msiInformation';
    public const FIELD_RETURN_CODES = 'returnCodes';
    public const FIELD_RULES = 'rules';
    public const FIELD_SETUP_FILE_PATH = 'setupFilePath';
    public const FIELD_UNINSTALL_COMMAND_LINE = 'uninstallCommandLine';

    /**
     * Select specific Win32LobApp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
