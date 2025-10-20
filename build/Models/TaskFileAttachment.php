<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TaskFileAttachment
 */
class TaskFileAttachment
{
    /**
     * The base64-encoded contents of the file.
     */
    private ?string $contentBytes;

    public function getContentBytes(): ?string
    {
        return $this->contentBytes;
    }

    public function setContentBytes(?string $contentBytes): self
    {
        $this->contentBytes = $contentBytes;
        return $this;
    }

}
