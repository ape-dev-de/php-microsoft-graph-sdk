<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppsInstallationOptionsForWindows
 */
class AppsInstallationOptionsForWindows
{
    public function __construct(
        /** Specifies whether users can install Microsoft 365 apps, including Skype for Business, on their Windows devices. The default value is true. */
        public ?bool $isMicrosoft365AppsEnabled = null,
        /** Specifies whether users can install Microsoft Project on their Windows devices. The default value is true. */
        public ?bool $isProjectEnabled = null,
        /** Specifies whether users can install Skype for Business (standalone) on their Windows devices. The default value is true. */
        public ?bool $isSkypeForBusinessEnabled = null,
        /** Specifies whether users can install Visio on their Windows devices. The default value is true. */
        public ?string $isVisioEnabled = null
    ) {}
}
