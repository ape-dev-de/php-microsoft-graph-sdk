<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppAssignmentSettings
 */
class Win32LobAppAssignmentSettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * The auto-update settings to apply for this app assignment.
     * @var Win32LobAppAutoUpdateSettings|\stdClass|null
     */
    public Win32LobAppAutoUpdateSettings|\stdClass|null $autoUpdateSettings = null;

    /**  */
    public ?Win32LobAppDeliveryOptimizationPriority $deliveryOptimizationPriority = null;

    /** 
     * The install time settings to apply for this app assignment.
     * @var MobileAppInstallTimeSettings|\stdClass|null
     */
    public MobileAppInstallTimeSettings|\stdClass|null $installTimeSettings = null;

    /**  */
    public ?Win32LobAppNotification $notifications = null;

    /** 
     * The reboot settings to apply for this app assignment.
     * @var Win32LobAppRestartSettings|\stdClass|null
     */
    public Win32LobAppRestartSettings|\stdClass|null $restartSettings = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['autoUpdateSettings'])) {
            $this->autoUpdateSettings = is_array($data['autoUpdateSettings']) ? new Win32LobAppAutoUpdateSettings($data['autoUpdateSettings']) : $data['autoUpdateSettings'];
        }
        if (isset($data['deliveryOptimizationPriority'])) {
            $this->deliveryOptimizationPriority = is_array($data['deliveryOptimizationPriority']) ? new Win32LobAppDeliveryOptimizationPriority($data['deliveryOptimizationPriority']) : $data['deliveryOptimizationPriority'];
        }
        if (isset($data['installTimeSettings'])) {
            $this->installTimeSettings = is_array($data['installTimeSettings']) ? new MobileAppInstallTimeSettings($data['installTimeSettings']) : $data['installTimeSettings'];
        }
        if (isset($data['notifications'])) {
            $this->notifications = is_array($data['notifications']) ? new Win32LobAppNotification($data['notifications']) : $data['notifications'];
        }
        if (isset($data['restartSettings'])) {
            $this->restartSettings = is_array($data['restartSettings']) ? new Win32LobAppRestartSettings($data['restartSettings']) : $data['restartSettings'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
