<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DriveRecipient
 */
class DriveRecipient
{
    /**
     * The alias of the domain object, for cases where an email address is unavailable (for example, security groups).
     */
    private ?string $alias;

    /**
     * The email address for the recipient, if the recipient has an associated email address.
     */
    private ?string $email;

    /**
     * The unique identifier for the recipient in the directory.
     */
    private ?string $objectId;

    public function getAlias(): ?string
    {
        return $this->alias;
    }

    public function setAlias(?string $alias): self
    {
        $this->alias = $alias;
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

    public function getObjectId(): ?string
    {
        return $this->objectId;
    }

    public function setObjectId(?string $objectId): self
    {
        $this->objectId = $objectId;
        return $this;
    }

}
