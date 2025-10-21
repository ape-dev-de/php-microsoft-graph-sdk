<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventPresenterDetails
 */
class VirtualEventPresenterDetails
{
    /**
     * Bio of the presenter.
     */
    private ?string $bio;

    /**
     * The presenter's company name.
     */
    private ?string $company;

    /**
     * The presenter's job title.
     */
    private ?string $jobTitle;

    /**
     * The presenter's LinkedIn profile URL.
     */
    private ?string $linkedInProfileWebUrl;

    /**
     * The presenter's personal website URL.
     */
    private ?string $personalSiteWebUrl;

    /**
     * The content stream of the presenter's photo.
     */
    private ?string $photo;

    /**
     * The presenter's Twitter profile URL.
     */
    private ?string $twitterProfileWebUrl;


    public function getBio(): ?string
    {
        return $this->bio;
    }

    public function setBio(?string $bio): self
    {
        $this->bio = $bio;
        return $this;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(?string $company): self
    {
        $this->company = $company;
        return $this;
    }

    public function getJobTitle(): ?string
    {
        return $this->jobTitle;
    }

    public function setJobTitle(?string $jobTitle): self
    {
        $this->jobTitle = $jobTitle;
        return $this;
    }

    public function getLinkedInProfileWebUrl(): ?string
    {
        return $this->linkedInProfileWebUrl;
    }

    public function setLinkedInProfileWebUrl(?string $linkedInProfileWebUrl): self
    {
        $this->linkedInProfileWebUrl = $linkedInProfileWebUrl;
        return $this;
    }

    public function getPersonalSiteWebUrl(): ?string
    {
        return $this->personalSiteWebUrl;
    }

    public function setPersonalSiteWebUrl(?string $personalSiteWebUrl): self
    {
        $this->personalSiteWebUrl = $personalSiteWebUrl;
        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;
        return $this;
    }

    public function getTwitterProfileWebUrl(): ?string
    {
        return $this->twitterProfileWebUrl;
    }

    public function setTwitterProfileWebUrl(?string $twitterProfileWebUrl): self
    {
        $this->twitterProfileWebUrl = $twitterProfileWebUrl;
        return $this;
    }

}
