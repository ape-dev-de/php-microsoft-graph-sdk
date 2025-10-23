<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TelecomExpenseManagementPartner
 */
class TelecomExpenseManagementPartner
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Whether the partner's AAD app has been authorized to access Intune. */
    public ?bool $appAuthorized = null;

    /** Display name of the TEM partner. */
    public ?string $displayName = null;

    /** Whether Intune's connection to the TEM service is currently enabled or disabled. */
    public ?bool $enabled = null;

    /** Timestamp of the last request sent to Intune by the TEM partner. */
    public ?\DateTimeInterface $lastConnectionDateTime = null;

    /** URL of the TEM partner's administrative control panel, where an administrator can configure their TEM service. */
    public ?string $url = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['appAuthorized'])) {
            $this->appAuthorized = $data['appAuthorized'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['enabled'])) {
            $this->enabled = $data['enabled'];
        }
        if (isset($data['lastConnectionDateTime'])) {
            $this->lastConnectionDateTime = $data['lastConnectionDateTime'];
        }
        if (isset($data['url'])) {
            $this->url = $data['url'];
        }
    }
}
