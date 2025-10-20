<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationSubmissionIndividualRecipient
 */
class EducationSubmissionIndividualRecipient
{
    /**
     * User ID of the user to whom the submission is assigned.
     */
    private ?string $userId;

    public function getUserId(): ?string
    {
        return $this->userId;
    }

    public function setUserId(?string $userId): self
    {
        $this->userId = $userId;
        return $this;
    }

}
