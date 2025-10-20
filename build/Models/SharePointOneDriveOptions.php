<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharePointOneDriveOptions
 */
class SharePointOneDriveOptions
{
    /**
     * The type of search content. The possible values are: sharedContent, privateContent, unknownFutureValue. Read-only.
     */
    private ?string $includeContent;

    public function getIncludeContent(): ?string
    {
        return $this->includeContent;
    }

    public function setIncludeContent(?string $includeContent): self
    {
        $this->includeContent = $includeContent;
        return $this;
    }

}
