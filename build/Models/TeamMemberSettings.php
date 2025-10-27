<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamMemberSettings
 */
class TeamMemberSettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** If set to true, members can add and remove apps. */
    public ?bool $allowAddRemoveApps = null;

    /** If set to true, members can add and update private channels. */
    public ?bool $allowCreatePrivateChannels = null;

    /** If set to true, members can add and update channels. */
    public ?bool $allowCreateUpdateChannels = null;

    /** If set to true, members can add, update, and remove connectors. */
    public ?bool $allowCreateUpdateRemoveConnectors = null;

    /** If set to true, members can add, update, and remove tabs. */
    public ?bool $allowCreateUpdateRemoveTabs = null;

    /** If set to true, members can delete channels. */
    public ?bool $allowDeleteChannels = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['allowAddRemoveApps'])) {
            $this->allowAddRemoveApps = is_bool($data['allowAddRemoveApps']) ? $data['allowAddRemoveApps'] : (bool)$data['allowAddRemoveApps'];
        }
        if (isset($data['allowCreatePrivateChannels'])) {
            $this->allowCreatePrivateChannels = is_bool($data['allowCreatePrivateChannels']) ? $data['allowCreatePrivateChannels'] : (bool)$data['allowCreatePrivateChannels'];
        }
        if (isset($data['allowCreateUpdateChannels'])) {
            $this->allowCreateUpdateChannels = is_bool($data['allowCreateUpdateChannels']) ? $data['allowCreateUpdateChannels'] : (bool)$data['allowCreateUpdateChannels'];
        }
        if (isset($data['allowCreateUpdateRemoveConnectors'])) {
            $this->allowCreateUpdateRemoveConnectors = is_bool($data['allowCreateUpdateRemoveConnectors']) ? $data['allowCreateUpdateRemoveConnectors'] : (bool)$data['allowCreateUpdateRemoveConnectors'];
        }
        if (isset($data['allowCreateUpdateRemoveTabs'])) {
            $this->allowCreateUpdateRemoveTabs = is_bool($data['allowCreateUpdateRemoveTabs']) ? $data['allowCreateUpdateRemoveTabs'] : (bool)$data['allowCreateUpdateRemoveTabs'];
        }
        if (isset($data['allowDeleteChannels'])) {
            $this->allowDeleteChannels = is_bool($data['allowDeleteChannels']) ? $data['allowDeleteChannels'] : (bool)$data['allowDeleteChannels'];
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
