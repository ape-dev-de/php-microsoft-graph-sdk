<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationAssignmentIndividualRecipient
 */
class EducationAssignmentIndividualRecipient
{
    public function __construct(
        /** @var string[] A collection of IDs of the recipients. */
        public array $recipients = []
    ) {}
}
