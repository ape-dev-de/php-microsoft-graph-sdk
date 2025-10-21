<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppConsentApprovalRoute
 */
class AppConsentApprovalRoute
{
    public function __construct(
        /** @var string[] A collection of appConsentRequest objects representing apps for which admin consent has been requested by one or more users. */
        public array $appConsentRequests = []
    ) {}
}
