<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IntuneBrand
 */
class IntuneBrand
{
    /**
     * Email address of the person/organization responsible for IT support.
     */
    private ?string $contactITEmailAddress;

    /**
     * Name of the person/organization responsible for IT support.
     */
    private ?string $contactITName;

    /**
     * Text comments regarding the person/organization responsible for IT support.
     */
    private ?string $contactITNotes;

    /**
     * Phone number of the person/organization responsible for IT support.
     */
    private ?string $contactITPhoneNumber;

    /**
     * Logo image displayed in Company Portal apps which have a dark background behind the logo.
     */
    private ?string $darkBackgroundLogo;

    /**
     * Company/organization name that is displayed to end users.
     */
    private ?string $displayName;

    /**
     * Logo image displayed in Company Portal apps which have a light background behind the logo.
     */
    private ?string $lightBackgroundLogo;

    /**
     * Display name of the company/organization’s IT helpdesk site.
     */
    private ?string $onlineSupportSiteName;

    /**
     * URL to the company/organization’s IT helpdesk site.
     */
    private ?string $onlineSupportSiteUrl;

    /**
     * URL to the company/organization’s privacy policy.
     */
    private ?string $privacyUrl;

    /**
     * Boolean that represents whether the administrator-supplied display name will be shown next to the logo image.
     */
    private ?bool $showDisplayNameNextToLogo;

    /**
     * Boolean that represents whether the administrator-supplied logo images are shown or not shown.
     */
    private ?bool $showLogo;

    /**
     * Boolean that represents whether the administrator-supplied display name will be shown next to the logo image.
     */
    private ?bool $showNameNextToLogo;

    /**
     * intuneBrand contains data which is used in customizing the appearance of the Company Portal applications as well as the end user web portal.
     */
    private ?string $themeColor;


    public function getContactITEmailAddress(): ?string
    {
        return $this->contactITEmailAddress;
    }

    public function setContactITEmailAddress(?string $contactITEmailAddress): self
    {
        $this->contactITEmailAddress = $contactITEmailAddress;
        return $this;
    }

    public function getContactITName(): ?string
    {
        return $this->contactITName;
    }

    public function setContactITName(?string $contactITName): self
    {
        $this->contactITName = $contactITName;
        return $this;
    }

    public function getContactITNotes(): ?string
    {
        return $this->contactITNotes;
    }

    public function setContactITNotes(?string $contactITNotes): self
    {
        $this->contactITNotes = $contactITNotes;
        return $this;
    }

    public function getContactITPhoneNumber(): ?string
    {
        return $this->contactITPhoneNumber;
    }

    public function setContactITPhoneNumber(?string $contactITPhoneNumber): self
    {
        $this->contactITPhoneNumber = $contactITPhoneNumber;
        return $this;
    }

    public function getDarkBackgroundLogo(): ?string
    {
        return $this->darkBackgroundLogo;
    }

    public function setDarkBackgroundLogo(?string $darkBackgroundLogo): self
    {
        $this->darkBackgroundLogo = $darkBackgroundLogo;
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

    public function getLightBackgroundLogo(): ?string
    {
        return $this->lightBackgroundLogo;
    }

    public function setLightBackgroundLogo(?string $lightBackgroundLogo): self
    {
        $this->lightBackgroundLogo = $lightBackgroundLogo;
        return $this;
    }

    public function getOnlineSupportSiteName(): ?string
    {
        return $this->onlineSupportSiteName;
    }

    public function setOnlineSupportSiteName(?string $onlineSupportSiteName): self
    {
        $this->onlineSupportSiteName = $onlineSupportSiteName;
        return $this;
    }

    public function getOnlineSupportSiteUrl(): ?string
    {
        return $this->onlineSupportSiteUrl;
    }

    public function setOnlineSupportSiteUrl(?string $onlineSupportSiteUrl): self
    {
        $this->onlineSupportSiteUrl = $onlineSupportSiteUrl;
        return $this;
    }

    public function getPrivacyUrl(): ?string
    {
        return $this->privacyUrl;
    }

    public function setPrivacyUrl(?string $privacyUrl): self
    {
        $this->privacyUrl = $privacyUrl;
        return $this;
    }

    public function getShowDisplayNameNextToLogo(): ?bool
    {
        return $this->showDisplayNameNextToLogo;
    }

    public function setShowDisplayNameNextToLogo(?bool $showDisplayNameNextToLogo): self
    {
        $this->showDisplayNameNextToLogo = $showDisplayNameNextToLogo;
        return $this;
    }

    public function getShowLogo(): ?bool
    {
        return $this->showLogo;
    }

    public function setShowLogo(?bool $showLogo): self
    {
        $this->showLogo = $showLogo;
        return $this;
    }

    public function getShowNameNextToLogo(): ?bool
    {
        return $this->showNameNextToLogo;
    }

    public function setShowNameNextToLogo(?bool $showNameNextToLogo): self
    {
        $this->showNameNextToLogo = $showNameNextToLogo;
        return $this;
    }

    public function getThemeColor(): ?string
    {
        return $this->themeColor;
    }

    public function setThemeColor(?string $themeColor): self
    {
        $this->themeColor = $themeColor;
        return $this;
    }

}
