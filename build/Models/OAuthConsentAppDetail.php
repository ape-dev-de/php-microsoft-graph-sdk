<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OAuthConsentAppDetail
 */
class OAuthConsentAppDetail
{
    /**
     * App scope. Possible values are: unknown, readCalendar, readContact, readMail, readAllChat, readAllFile, readAndWriteMail, sendMail, unknownFutureValue.
     */
    private ?string $appScope;

    /**
     * App display logo.
     */
    private ?string $displayLogo;

    /**
     * App name.
     */
    private ?string $displayName;


    public function getAppScope(): ?string
    {
        return $this->appScope;
    }

    public function setAppScope(?string $appScope): self
    {
        $this->appScope = $appScope;
        return $this;
    }

    public function getDisplayLogo(): ?string
    {
        return $this->displayLogo;
    }

    public function setDisplayLogo(?string $displayLogo): self
    {
        $this->displayLogo = $displayLogo;
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

}
