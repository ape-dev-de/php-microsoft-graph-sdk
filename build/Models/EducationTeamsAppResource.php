<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationTeamsAppResource
 */
class EducationTeamsAppResource
{
    /**
     * URL that points to the icon of the app.
     */
    private ?string $appIconWebUrl;

    /**
     * Teams app ID of the application.
     */
    private ?string $appId;

    /**
     * URL for the app resource that will be opened by Teams.
     */
    private ?string $teamsEmbeddedContentUrl;

    /**
     * URL for the app resource that can be opened in the browser.
     */
    private ?string $webUrl;

    public function getAppIconWebUrl(): ?string
    {
        return $this->appIconWebUrl;
    }

    public function setAppIconWebUrl(?string $appIconWebUrl): self
    {
        $this->appIconWebUrl = $appIconWebUrl;
        return $this;
    }

    public function getAppId(): ?string
    {
        return $this->appId;
    }

    public function setAppId(?string $appId): self
    {
        $this->appId = $appId;
        return $this;
    }

    public function getTeamsEmbeddedContentUrl(): ?string
    {
        return $this->teamsEmbeddedContentUrl;
    }

    public function setTeamsEmbeddedContentUrl(?string $teamsEmbeddedContentUrl): self
    {
        $this->teamsEmbeddedContentUrl = $teamsEmbeddedContentUrl;
        return $this;
    }

    public function getWebUrl(): ?string
    {
        return $this->webUrl;
    }

    public function setWebUrl(?string $webUrl): self
    {
        $this->webUrl = $webUrl;
        return $this;
    }

}
