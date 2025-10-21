<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamMemberSettings
 */
class TeamMemberSettings
{
    public function __construct(
        /** If set to true, members can add and remove apps. */
        public ?bool $allowAddRemoveApps = null,
        /** If set to true, members can add and update private channels. */
        public ?bool $allowCreatePrivateChannels = null,
        /** If set to true, members can add and update channels. */
        public ?bool $allowCreateUpdateChannels = null,
        /** If set to true, members can add, update, and remove connectors. */
        public ?bool $allowCreateUpdateRemoveConnectors = null,
        /** If set to true, members can add, update, and remove tabs. */
        public ?bool $allowCreateUpdateRemoveTabs = null,
        /** If set to true, members can delete channels. */
        public ?bool $allowDeleteChannels = null
    ) {}
}
