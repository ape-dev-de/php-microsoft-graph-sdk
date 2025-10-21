<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Agreement
 */
class Agreement
{
    public function __construct(
        /** Display name of the agreement. The display name is used for internal tracking of the agreement but isn't shown to end users who view the agreement. Supports $filter (eq). */
        public ?string $displayName = null,
        /** Indicates whether end users are required to accept this agreement on every device that they access it from. The end user is required to register their device in Microsoft Entra ID, if they haven''t already done so. Supports $filter (eq). */
        public ?bool $isPerDeviceAcceptanceRequired = null,
        /** Indicates whether the user has to expand the agreement before accepting. Supports $filter (eq). */
        public ?bool $isViewingBeforeAcceptanceRequired = null,
        /** Expiration schedule and frequency of agreement for all users. Supports $filter (eq). */
        public ?string $termsExpiration = null,
        /** The duration after which the user must reaccept the terms of use. The value is represented in ISO 8601 format for durations. Supports $filter (eq). */
        public ?string $userReacceptRequiredFrequency = null,
        /** Read-only. Information about acceptances of this agreement. */
        public array $acceptances = [],
        /** Default PDF linked to this agreement. */
        public ?string $file = null,
        /** @var string[] PDFs linked to this agreement. This property is in the process of being deprecated. Use the  file property instead. Supports $expand. */
        public array $files = []
    ) {}
}
