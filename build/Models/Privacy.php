<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Privacy
 */
class Privacy
{
    /**
     * @var string[]
     */
    private array $subjectRightsRequests = [];


    /**
     * @return string[]
     */
    public function getSubjectRightsRequests(): array
    {
        return $this->subjectRightsRequests;
    }

    /**
     * @param string[] $subjectRightsRequests
     */
    public function setSubjectRightsRequests(array $subjectRightsRequests): self
    {
        $this->subjectRightsRequests = $subjectRightsRequests;
        return $this;
    }

}
