<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppAssignmentSettings
 */
class Win32LobAppAssignmentSettings
{
    /** 
     * The auto-update settings to apply for this app assignment.
     * @var Win32LobAppAutoUpdateSettings|\stdClass|null
     */
    public mixed $autoUpdateSettings = null;

    /**  */
    public ?Win32LobAppDeliveryOptimizationPriority $deliveryOptimizationPriority = null;

    /** 
     * The install time settings to apply for this app assignment.
     * @var MobileAppInstallTimeSettings|\stdClass|null
     */
    public mixed $installTimeSettings = null;

    /**  */
    public ?Win32LobAppNotification $notifications = null;

    /** 
     * The reboot settings to apply for this app assignment.
     * @var Win32LobAppRestartSettings|\stdClass|null
     */
    public mixed $restartSettings = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['autoUpdateSettings'])) {
            $this->autoUpdateSettings = $data['autoUpdateSettings'];
        }
        if (isset($data['deliveryOptimizationPriority'])) {
            $this->deliveryOptimizationPriority = $data['deliveryOptimizationPriority'];
        }
        if (isset($data['installTimeSettings'])) {
            $this->installTimeSettings = $data['installTimeSettings'];
        }
        if (isset($data['notifications'])) {
            $this->notifications = $data['notifications'];
        }
        if (isset($data['restartSettings'])) {
            $this->restartSettings = $data['restartSettings'];
        }
    }
}
