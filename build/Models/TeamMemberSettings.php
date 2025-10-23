<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamMemberSettings
 */
class TeamMemberSettings
{
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
        if (isset($data['allowAddRemoveApps'])) {
            $this->allowAddRemoveApps = $data['allowAddRemoveApps'];
        }
        if (isset($data['allowCreatePrivateChannels'])) {
            $this->allowCreatePrivateChannels = $data['allowCreatePrivateChannels'];
        }
        if (isset($data['allowCreateUpdateChannels'])) {
            $this->allowCreateUpdateChannels = $data['allowCreateUpdateChannels'];
        }
        if (isset($data['allowCreateUpdateRemoveConnectors'])) {
            $this->allowCreateUpdateRemoveConnectors = $data['allowCreateUpdateRemoveConnectors'];
        }
        if (isset($data['allowCreateUpdateRemoveTabs'])) {
            $this->allowCreateUpdateRemoveTabs = $data['allowCreateUpdateRemoveTabs'];
        }
        if (isset($data['allowDeleteChannels'])) {
            $this->allowDeleteChannels = $data['allowDeleteChannels'];
        }
    }
}
