<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SharingLink
 */
class SharingLink
{
    /**
     * The app the link is associated with.
     */
    private ?string $application;

    /**
     * If true then the user can only use this link to view the item on the web, and cannot use it to download the contents of the item. Only for OneDrive for Business and SharePoint.
     */
    private ?bool $preventsDownload;

    /**
     * The scope of the link represented by this permission. Value anonymous indicates the link is usable by anyone, organization indicates the link is only usable for users signed into the same tenant.
     */
    private ?string $scope;

    /**
     * The type of the link created.
     */
    private ?string $type;

    /**
     * For embed links, this property contains the HTML code for an <iframe> element that will embed the item in a webpage.
     */
    private ?string $webHtml;

    /**
     * A URL that opens the item in the browser on the OneDrive website.
     */
    private ?string $webUrl;


    public function getApplication(): ?string
    {
        return $this->application;
    }

    public function setApplication(?string $application): self
    {
        $this->application = $application;
        return $this;
    }

    public function getPreventsDownload(): ?bool
    {
        return $this->preventsDownload;
    }

    public function setPreventsDownload(?bool $preventsDownload): self
    {
        $this->preventsDownload = $preventsDownload;
        return $this;
    }

    public function getScope(): ?string
    {
        return $this->scope;
    }

    public function setScope(?string $scope): self
    {
        $this->scope = $scope;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getWebHtml(): ?string
    {
        return $this->webHtml;
    }

    public function setWebHtml(?string $webHtml): self
    {
        $this->webHtml = $webHtml;
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
