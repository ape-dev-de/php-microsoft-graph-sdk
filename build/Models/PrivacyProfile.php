<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrivacyProfile
 */
class PrivacyProfile
{
    /**
     * A valid smtp email address for the privacy statement contact. Not required.
     */
    private ?string $contactEmail;

    /**
     * A valid URL format that begins with http:// or https://. Maximum length is 255 characters. The URL that directs to the company's privacy statement. Not required.
     */
    private ?string $statementUrl;

    public function getContactEmail(): ?string
    {
        return $this->contactEmail;
    }

    public function setContactEmail(?string $contactEmail): self
    {
        $this->contactEmail = $contactEmail;
        return $this;
    }

    public function getStatementUrl(): ?string
    {
        return $this->statementUrl;
    }

    public function setStatementUrl(?string $statementUrl): self
    {
        $this->statementUrl = $statementUrl;
        return $this;
    }

}
