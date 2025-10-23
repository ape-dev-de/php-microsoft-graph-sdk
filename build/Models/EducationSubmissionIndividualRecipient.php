<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationSubmissionIndividualRecipient
 */
class EducationSubmissionIndividualRecipient
{
    /** User ID of the user to whom the submission is assigned. */
    public ?string $userId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['userId'])) {
            $this->userId = $data['userId'];
        }
    }
}
