<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosDeviceFeaturesConfiguration
 */
class IosDeviceFeaturesConfiguration
{
    public function __construct(
        /** Asset tag information for the device, displayed on the login window and lock screen. */
        public ?string $assetTagTemplate = null,
        /** A list of app and folders to appear on the Home Screen Dock. This collection can contain a maximum of 500 elements. */
        public array $homeScreenDockIcons = [],
        /** A list of pages on the Home Screen. This collection can contain a maximum of 500 elements. */
        public array $homeScreenPages = [],
        /** A footnote displayed on the login window and lock screen. Available in iOS 9.3.1 and later. */
        public ?string $lockScreenFootnote = null,
        /** @var string[] iOS Device Features Configuration Profile. */
        public array $notificationSettings = []
    ) {}
}
