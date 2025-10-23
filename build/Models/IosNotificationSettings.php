<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosNotificationSettings
 */
class IosNotificationSettings
{
    /**  */
    public ?IosNotificationAlertType $alertType = null;

    /** Application name to be associated with the bundleID. */
    public ?string $appName = null;

    /** Indicates whether badges are allowed for this app. */
    public ?bool $badgesEnabled = null;

    /** Bundle id of app to which to apply these notification settings. */
    public ?string $bundleID = null;

    /** Indicates whether notifications are allowed for this app. */
    public ?bool $enabled = null;

    /** Publisher to be associated with the bundleID. */
    public ?string $publisher = null;

    /** Indicates whether notifications can be shown in notification center. */
    public ?bool $showInNotificationCenter = null;

    /** Indicates whether notifications can be shown on the lock screen. */
    public ?bool $showOnLockScreen = null;

    /** Indicates whether sounds are allowed for this app. */
    public ?bool $soundsEnabled = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['alertType'])) {
            $this->alertType = $data['alertType'];
        }
        if (isset($data['appName'])) {
            $this->appName = $data['appName'];
        }
        if (isset($data['badgesEnabled'])) {
            $this->badgesEnabled = $data['badgesEnabled'];
        }
        if (isset($data['bundleID'])) {
            $this->bundleID = $data['bundleID'];
        }
        if (isset($data['enabled'])) {
            $this->enabled = $data['enabled'];
        }
        if (isset($data['publisher'])) {
            $this->publisher = $data['publisher'];
        }
        if (isset($data['showInNotificationCenter'])) {
            $this->showInNotificationCenter = $data['showInNotificationCenter'];
        }
        if (isset($data['showOnLockScreen'])) {
            $this->showOnLockScreen = $data['showOnLockScreen'];
        }
        if (isset($data['soundsEnabled'])) {
            $this->soundsEnabled = $data['soundsEnabled'];
        }
    }
}
