<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MailboxRestoreArtifact
 */
class MailboxRestoreArtifact
{
    /**
     * The new restored folder identifier for the user.
     */
    private ?string $restoredFolderId;

    /**
     * The new restored folder name.
     */
    private ?string $restoredFolderName;

    /**
     * The number of items that are being restored in the folder.
     */
    private ?string $restoredItemCount;


    public function getRestoredFolderId(): ?string
    {
        return $this->restoredFolderId;
    }

    public function setRestoredFolderId(?string $restoredFolderId): self
    {
        $this->restoredFolderId = $restoredFolderId;
        return $this;
    }

    public function getRestoredFolderName(): ?string
    {
        return $this->restoredFolderName;
    }

    public function setRestoredFolderName(?string $restoredFolderName): self
    {
        $this->restoredFolderName = $restoredFolderName;
        return $this;
    }

    public function getRestoredItemCount(): ?string
    {
        return $this->restoredItemCount;
    }

    public function setRestoredItemCount(?string $restoredItemCount): self
    {
        $this->restoredItemCount = $restoredItemCount;
        return $this;
    }

}
