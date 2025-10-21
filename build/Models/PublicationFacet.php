<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PublicationFacet
 */
class PublicationFacet
{
    /**
     * The user who checked out the file.
     */
    private ?string $checkedOutBy;

    /**
     * The state of publication for this document. Either published or checkout. Read-only.
     */
    private ?string $level;

    /**
     * The unique identifier for the version that is visible to the current caller. Read-only.
     */
    private ?string $versionId;


    public function getCheckedOutBy(): ?string
    {
        return $this->checkedOutBy;
    }

    public function setCheckedOutBy(?string $checkedOutBy): self
    {
        $this->checkedOutBy = $checkedOutBy;
        return $this;
    }

    public function getLevel(): ?string
    {
        return $this->level;
    }

    public function setLevel(?string $level): self
    {
        $this->level = $level;
        return $this;
    }

    public function getVersionId(): ?string
    {
        return $this->versionId;
    }

    public function setVersionId(?string $versionId): self
    {
        $this->versionId = $versionId;
        return $this;
    }

}
