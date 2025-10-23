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
    public array $recipients = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['recipients'])) {
            $this->recipients = $data['recipients'];
        }
    }
}
