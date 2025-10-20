<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationLinkedAssignmentResource
 */
class EducationLinkedAssignmentResource
{
    /**
     * URL of the actual assignment.
     */
    private ?string $url;

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }

}
