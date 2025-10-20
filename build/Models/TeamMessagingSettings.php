<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamMessagingSettings
 */
class TeamMessagingSettings
{
    /**
     * If set to true, @channel mentions are allowed.
     */
    private ?bool $allowChannelMentions;

    /**
     * If set to true, owners can delete any message.
     */
    private ?bool $allowOwnerDeleteMessages;

    /**
     * If set to true, @team mentions are allowed.
     */
    private ?bool $allowTeamMentions;

    /**
     * If set to true, users can delete their messages.
     */
    private ?bool $allowUserDeleteMessages;

    /**
     * If set to true, users can edit their messages.
     */
    private ?string $allowUserEditMessages;

    public function getAllowChannelMentions(): ?bool
    {
        return $this->allowChannelMentions;
    }

    public function setAllowChannelMentions(?bool $allowChannelMentions): self
    {
        $this->allowChannelMentions = $allowChannelMentions;
        return $this;
    }

    public function getAllowOwnerDeleteMessages(): ?bool
    {
        return $this->allowOwnerDeleteMessages;
    }

    public function setAllowOwnerDeleteMessages(?bool $allowOwnerDeleteMessages): self
    {
        $this->allowOwnerDeleteMessages = $allowOwnerDeleteMessages;
        return $this;
    }

    public function getAllowTeamMentions(): ?bool
    {
        return $this->allowTeamMentions;
    }

    public function setAllowTeamMentions(?bool $allowTeamMentions): self
    {
        $this->allowTeamMentions = $allowTeamMentions;
        return $this;
    }

    public function getAllowUserDeleteMessages(): ?bool
    {
        return $this->allowUserDeleteMessages;
    }

    public function setAllowUserDeleteMessages(?bool $allowUserDeleteMessages): self
    {
        $this->allowUserDeleteMessages = $allowUserDeleteMessages;
        return $this;
    }

    public function getAllowUserEditMessages(): ?string
    {
        return $this->allowUserEditMessages;
    }

    public function setAllowUserEditMessages(?string $allowUserEditMessages): self
    {
        $this->allowUserEditMessages = $allowUserEditMessages;
        return $this;
    }

}
