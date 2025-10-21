<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewInactiveUsersQueryScope
 */
class AccessReviewInactiveUsersQueryScope
{
    public function __construct(
        /** Defines the duration of inactivity. Inactivity is based on the last sign in date of the user compared to the access review instance''s start date. If this property is not specified, it''s assigned the default value PT0S. */
        public ?string $inactiveDuration = null
    ) {}
}
