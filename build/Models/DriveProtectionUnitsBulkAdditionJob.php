<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DriveProtectionUnitsBulkAdditionJob
 */
class DriveProtectionUnitsBulkAdditionJob
{
    /**
     * The list of OneDrive directoryObjectIds to add to the OneDrive protection policy.
     */
    private ?string $directoryObjectIds;

    /**
     * The list of email addresses to add to the OneDrive protection policy.
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
