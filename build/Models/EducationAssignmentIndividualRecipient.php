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
     * @var string[]
     */
    private array $recipients = [];


    /**
     * @return string[]
     */
    public function getRecipients(): array
    {
        return $this->recipients;
    }

    /**
     * @param string[] $recipients
     */
    public function setRecipients(array $recipients): self
    {
        $this->recipients = $recipients;
        return $this;
    }

}
