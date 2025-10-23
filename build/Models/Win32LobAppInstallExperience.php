<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppInstallExperience
 */
class Win32LobAppInstallExperience
{
    /**  */
    public ?Win32LobAppRestartBehavior $deviceRestartBehavior = null;

    /**  */
    public ?RunAsAccountType $runAsAccount = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['deviceRestartBehavior'])) {
            $this->deviceRestartBehavior = is_array($data['deviceRestartBehavior']) ? new Win32LobAppRestartBehavior($data['deviceRestartBehavior']) : $data['deviceRestartBehavior'];
        }
        if (isset($data['runAsAccount'])) {
            $this->runAsAccount = is_array($data['runAsAccount']) ? new RunAsAccountType($data['runAsAccount']) : $data['runAsAccount'];
        }
    }
}
