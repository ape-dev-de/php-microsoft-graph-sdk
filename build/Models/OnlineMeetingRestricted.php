<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnlineMeetingRestricted
 */
class OnlineMeetingRestricted
{
    public function __construct(
        /** Specifies the reason shared content from this participant is disabled. Possible values are: watermarkProtection, unknownFutureValue. */
        public ?OnlineMeetingContentSharingDisabledReason $contentSharingDisabled = null,
        /** Specifies the reason video from this participant is disabled. Possible values are: watermarkProtection, unknownFutureValue. */
        public ?OnlineMeetingVideoDisabledReason $videoDisabled = null
    ) {}
}
