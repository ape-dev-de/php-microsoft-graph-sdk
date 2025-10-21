<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharePointIdentity
 */
class SharePointIdentity
{
    /**
     * The sign in name of the SharePoint identity.
     */
    private ?string $loginName;


    public function getLoginName(): ?string
    {
        return $this->loginName;
    }

    public function setLoginName(?string $loginName): self
    {
        $this->loginName = $loginName;
        return $this;
    }

}
