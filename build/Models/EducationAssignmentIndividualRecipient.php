<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationAssignmentIndividualRecipient
 */
class EducationAssignmentIndividualRecipient
{
    /**
     * A collection of IDs of the recipients.
     */
    private ?string $recipients;

    public function getRecipients(): ?string
    {
        return $this->recipients;
    }

    public function setRecipients(?string $recipients): self
    {
        $this->recipients = $recipients;
        return $this;
    }

}
