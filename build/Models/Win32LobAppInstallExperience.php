<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppInstallExperience
 */
class Win32LobAppInstallExperience
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

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
        $this->rawData = $data;
        if (isset($data['deviceRestartBehavior'])) {
            $this->deviceRestartBehavior = is_string($data['deviceRestartBehavior']) ? Win32LobAppRestartBehavior::tryFrom($data['deviceRestartBehavior']) : $data['deviceRestartBehavior'];
        }
        if (isset($data['runAsAccount'])) {
            $this->runAsAccount = is_string($data['runAsAccount']) ? RunAsAccountType::tryFrom($data['runAsAccount']) : $data['runAsAccount'];
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
