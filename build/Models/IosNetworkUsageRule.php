<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosNetworkUsageRule
 */
class IosNetworkUsageRule
{
    /**
     * If set to true, corresponding managed apps will not be allowed to use cellular data at any time.
     */
    private ?bool $cellularDataBlocked;

    /**
     * If set to true, corresponding managed apps will not be allowed to use cellular data when roaming.
     */
    private ?bool $cellularDataBlockWhenRoaming;

    /**
     * Network Usage Rules allow enterprises to specify how managed apps use networks, such as cellular data networks.
     * @var string[]
     */
    private array $managedApps = [];


    public function getCellularDataBlocked(): ?bool
    {
        return $this->cellularDataBlocked;
    }

    public function setCellularDataBlocked(?bool $cellularDataBlocked): self
    {
        $this->cellularDataBlocked = $cellularDataBlocked;
        return $this;
    }

    public function getCellularDataBlockWhenRoaming(): ?bool
    {
        return $this->cellularDataBlockWhenRoaming;
    }

    public function setCellularDataBlockWhenRoaming(?bool $cellularDataBlockWhenRoaming): self
    {
        $this->cellularDataBlockWhenRoaming = $cellularDataBlockWhenRoaming;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getManagedApps(): array
    {
        return $this->managedApps;
    }

    /**
     * @param string[] $managedApps
     */
    public function setManagedApps(array $managedApps): self
    {
        $this->managedApps = $managedApps;
        return $this;
    }

}
