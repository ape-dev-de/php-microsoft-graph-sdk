<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventPresenter
 */
class VirtualEventPresenter
{
    /**
     * Email address of the presenter.
     */
    private ?string $email;

    /**
     * Identity information of the presenter. The supported identities are: communicationsGuestIdentity and communicationsUserIdentity.
     */
    private ?string $identity;

    /**
     * Other details about the presenter. This property returns null when the virtual event type is virtualEventTownhall.
     */
    private ?string $presenterDetails;


    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getIdentity(): ?string
    {
        return $this->identity;
    }

    public function setIdentity(?string $identity): self
    {
        $this->identity = $identity;
        return $this;
    }

    public function getPresenterDetails(): ?string
    {
        return $this->presenterDetails;
    }

    public function setPresenterDetails(?string $presenterDetails): self
    {
        $this->presenterDetails = $presenterDetails;
        return $this;
    }

}
