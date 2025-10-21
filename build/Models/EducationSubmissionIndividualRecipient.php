<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationSubmissionIndividualRecipient
 */
class EducationSubmissionIndividualRecipient
{
    public function __construct(
        /** User ID of the user to whom the submission is assigned. */
        public ?string $userId = null
    ) {}
}
