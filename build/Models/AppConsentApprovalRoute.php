<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppConsentApprovalRoute
 */
class AppConsentApprovalRoute
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** @var string[] A collection of appConsentRequest objects representing apps for which admin consent has been requested by one or more users. */
        public array $appConsentRequests = []
    ) {}
}
