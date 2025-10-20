<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MailboxProtectionUnit
 */
class MailboxProtectionUnit
{
    /**
     * The ID of the directory object.
     */
    private ?string $directoryObjectId;

    /**
     * Display name of the directory object.
     */
    private ?string $displayName;

    /**
     * Email address associated with the directory object.
     */
    private ?string $email;

    public function getDirectoryObjectId(): ?string
    {
        return $this->directoryObjectId;
    }

    public function setDirectoryObjectId(?string $directoryObjectId): self
    {
        $this->directoryObjectId = $directoryObjectId;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }

}
