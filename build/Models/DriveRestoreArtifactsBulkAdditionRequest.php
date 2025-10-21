<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DriveRestoreArtifactsBulkAdditionRequest
 */
class DriveRestoreArtifactsBulkAdditionRequest
{
    /**
     * The list of directory object IDs that are added to the corresponding OneDrive for work or school restore session in a bulk operation.
     * @var string[]
     */
    private array $directoryObjectIds = [];

    /**
     * The list of email addresses that are added to the corresponding OneDrive for work or school restore session in a bulk operation.
     * @var string[]
     */
    private array $drives = [];


    /**
     * @return string[]
     */
    public function getDirectoryObjectIds(): array
    {
        return $this->directoryObjectIds;
    }

    /**
     * @param string[] $directoryObjectIds
     */
    public function setDirectoryObjectIds(array $directoryObjectIds): self
    {
        $this->directoryObjectIds = $directoryObjectIds;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getDrives(): array
    {
        return $this->drives;
    }

    /**
     * @param string[] $drives
     */
    public function setDrives(array $drives): self
    {
        $this->drives = $drives;
        return $this;
    }

}
