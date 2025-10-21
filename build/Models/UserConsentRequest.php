<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserConsentRequest
 */
class UserConsentRequest
{
    public function __construct(
        /** The user's justification for requiring access to the app. Supports $filter (eq only) and $orderby. */
        public ?string $reason = null,
        /** Approval decisions associated with a request. */
        public ?string $approval = null
    ) {}
}
