<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LobbyBypassSettings
 */
class LobbyBypassSettings
{
    /**
     * Specifies whether or not to always let dial-in callers bypass the lobby. Optional.
     */
    private ?bool $isDialInBypassEnabled;

    /**
     * Specifies the type of participants that are automatically admitted into a meeting, bypassing the lobby. Optional.
     */
    private ?string $scope;

    public function getIsDialInBypassEnabled(): ?bool
    {
        return $this->isDialInBypassEnabled;
    }

    public function setIsDialInBypassEnabled(?bool $isDialInBypassEnabled): self
    {
        $this->isDialInBypassEnabled = $isDialInBypassEnabled;
        return $this;
    }

    public function getScope(): ?string
    {
        return $this->scope;
    }

    public function setScope(?string $scope): self
    {
        $this->scope = $scope;
        return $this;
    }

}
