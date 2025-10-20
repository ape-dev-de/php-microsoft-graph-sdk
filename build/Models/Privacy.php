<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Privacy
 */
class Privacy
{
    /**
     */
    private ?string $subjectRightsRequests;

    public function getSubjectRightsRequests(): ?string
    {
        return $this->subjectRightsRequests;
    }

    public function setSubjectRightsRequests(?string $subjectRightsRequests): self
    {
        $this->subjectRightsRequests = $subjectRightsRequests;
        return $this;
    }

}
