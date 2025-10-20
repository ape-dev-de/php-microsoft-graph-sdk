<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OneDriveForBusinessRestoreSession
 */
class OneDriveForBusinessRestoreSession
{
    /**
     * A collection of restore points and destination details that can be used to restore a OneDrive for work or school drive.
     */
    private array $driveRestoreArtifacts = [];

    /**
     * A collection of user mailboxes and destination details that can be used to restore a OneDrive for work or school drive.
     */
    private ?string $driveRestoreArtifactsBulkAdditionRequests;

    public function getDriveRestoreArtifacts(): array
    {
        return $this->driveRestoreArtifacts;
    }

    public function setDriveRestoreArtifacts(array $driveRestoreArtifacts): self
    {
        $this->driveRestoreArtifacts = $driveRestoreArtifacts;
        return $this;
    }

    public function getDriveRestoreArtifactsBulkAdditionRequests(): ?string
    {
        return $this->driveRestoreArtifactsBulkAdditionRequests;
    }

    public function setDriveRestoreArtifactsBulkAdditionRequests(?string $driveRestoreArtifactsBulkAdditionRequests): self
    {
        $this->driveRestoreArtifactsBulkAdditionRequests = $driveRestoreArtifactsBulkAdditionRequests;
        return $this;
    }

}
