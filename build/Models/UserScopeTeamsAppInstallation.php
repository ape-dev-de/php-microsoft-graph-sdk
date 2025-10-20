<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserScopeTeamsAppInstallation
 */
class UserScopeTeamsAppInstallation
{
    /**
     * The chat between the user and Teams app.
     */
    private ?string $chat;

    public function getChat(): ?string
    {
        return $this->chat;
    }

    public function setChat(?string $chat): self
    {
        $this->chat = $chat;
        return $this;
    }

}
