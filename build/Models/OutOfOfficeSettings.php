<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OutOfOfficeSettings
 */
class OutOfOfficeSettings
{
    public function __construct(
        /** If true, either of the following is met:The current time falls within the out-of-office window configured in Outlook or Teams.An event marked as ''Show as Out of Office'' appears on the user''s calendar.Otherwise, false. */
        public ?bool $isOutOfOffice = null,
        /** The out-of-office message configured by the user in the Outlook client (Automatic replies) or the Teams client (Schedule out of office). */
        public ?string $message = null
    ) {}
}
