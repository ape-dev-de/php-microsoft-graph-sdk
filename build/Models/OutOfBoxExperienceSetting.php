<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OutOfBoxExperienceSetting
 */
class OutOfBoxExperienceSetting
{
    public function __construct(
        /**  */
        public ?string $deviceUsageType = null,
        /** When TRUE, the link that allows user to start over with a different account on company sign-in is hidden. When false, the link that allows user to start over with a different account on company sign-in is available. Default value is FALSE. */
        public ?bool $escapeLinkHidden = null,
        /** When TRUE, EULA is hidden to the end user during OOBE. When FALSE, EULA is shown to the end user during OOBE. Default value is FALSE. */
        public ?bool $eulaHidden = null,
        /** When TRUE, the keyboard selection page is hidden to the end user during OOBE if Language and Region are set. When FALSE, the keyboard selection page is skipped during OOBE. */
        public ?bool $keyboardSelectionPageSkipped = null,
        /** When TRUE, privacy settings is hidden to the end user during OOBE. When FALSE, privacy settings is shown to the end user during OOBE. Default value is FALSE. */
        public ?bool $privacySettingsHidden = null,
        /** The Windows Autopilot Deployment Profile settings used by the device for the out-of-box experience. Supports: $select, $top, $skip. $Search, $orderBy and $filter are not supported. */
        public ?string $userType = null
    ) {}
}
