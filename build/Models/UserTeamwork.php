<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserTeamwork
 */
class UserTeamwork
{
    /**
     * Represents the location that a user selected in Microsoft Teams and doesn''t follow the Office''s locale setting. A user''s locale is represented by their preferred language and country or region. For example, en-us. The language component follows two-letter codes as defined in ISO 639-1, and the country component follows two-letter codes as defined in ISO 3166-1 alpha-2.
     */
    private ?string $locale;

    /**
     * Represents the region of the organization or the user. For users with multigeo licenses, the property contains the user''s region (if available). For users without multigeo licenses, the property contains the organization''s region.The region value can be any region supported by the Teams payload. The possible values are: Americas, Europe and MiddleEast, Asia Pacific, UAE, Australia, Brazil, Canada, Switzerland, Germany, France, India, Japan, South Korea, Norway, Singapore, United Kingdom, South Africa, Sweden, Qatar, Poland, Italy, Israel, Spain, Mexico, USGov Community Cloud, USGov Community Cloud High, USGov Department of Defense, and China.
     */
    private ?string $region;

    /**
     * The list of associatedTeamInfo objects that a user is associated with.
     */
    private array $associatedTeams = [];

    /**
     * The apps installed in the personal scope of this user.
     */
    private ?string $installedApps;

    public function getLocale(): ?string
    {
        return $this->locale;
    }

    public function setLocale(?string $locale): self
    {
        $this->locale = $locale;
        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(?string $region): self
    {
        $this->region = $region;
        return $this;
    }

    public function getAssociatedTeams(): array
    {
        return $this->associatedTeams;
    }

    public function setAssociatedTeams(array $associatedTeams): self
    {
        $this->associatedTeams = $associatedTeams;
        return $this;
    }

    public function getInstalledApps(): ?string
    {
        return $this->installedApps;
    }

    public function setInstalledApps(?string $installedApps): self
    {
        $this->installedApps = $installedApps;
        return $this;
    }

}
