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
     */
    private ?string $directoryObjectIds;

    /**
     * The list of email addresses that are added to the corresponding OneDrive for work or school restore session in a bulk operation.
     */
    private ?string $drives;

    public function getDirectoryObjectIds(): ?string
    {
        return $this->directoryObjectIds;
    }

    public function setDirectoryObjectIds(?string $directoryObjectIds): self
    {
        $this->directoryObjectIds = $directoryObjectIds;
        return $this;
    }

    public function getDrives(): ?string
    {
        return $this->drives;
    }

    public function setDrives(?string $drives): self
    {
        $this->drives = $drives;
        return $this;
    }

}
