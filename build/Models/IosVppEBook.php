<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosVppEBook
 */
class IosVppEBook
{
    /**
     * The Apple ID associated with Vpp token.
     */
    private ?string $appleId;

    /**
     * Genres.
     * @var string[]
     */
    private array $genres = [];

    /**
     * Language.
     */
    private ?string $language;

    /**
     * Seller.
     */
    private ?string $seller;

    /**
     * Total license count.
     */
    private ?float $totalLicenseCount;

    /**
     * Used license count.
     */
    private ?float $usedLicenseCount;

    /**
     * The Vpp token's organization name.
     */
    private ?string $vppOrganizationName;

    /**
     * A class containing the properties for iOS Vpp eBook.
     */
    private ?string $vppTokenId;


    public function getAppleId(): ?string
    {
        return $this->appleId;
    }

    public function setAppleId(?string $appleId): self
    {
        $this->appleId = $appleId;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getGenres(): array
    {
        return $this->genres;
    }

    /**
     * @param string[] $genres
     */
    public function setGenres(array $genres): self
    {
        $this->genres = $genres;
        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(?string $language): self
    {
        $this->language = $language;
        return $this;
    }

    public function getSeller(): ?string
    {
        return $this->seller;
    }

    public function setSeller(?string $seller): self
    {
        $this->seller = $seller;
        return $this;
    }

    public function getTotalLicenseCount(): ?float
    {
        return $this->totalLicenseCount;
    }

    public function setTotalLicenseCount(?float $totalLicenseCount): self
    {
        $this->totalLicenseCount = $totalLicenseCount;
        return $this;
    }

    public function getUsedLicenseCount(): ?float
    {
        return $this->usedLicenseCount;
    }

    public function setUsedLicenseCount(?float $usedLicenseCount): self
    {
        $this->usedLicenseCount = $usedLicenseCount;
        return $this;
    }

    public function getVppOrganizationName(): ?string
    {
        return $this->vppOrganizationName;
    }

    public function setVppOrganizationName(?string $vppOrganizationName): self
    {
        $this->vppOrganizationName = $vppOrganizationName;
        return $this;
    }

    public function getVppTokenId(): ?string
    {
        return $this->vppTokenId;
    }

    public function setVppTokenId(?string $vppTokenId): self
    {
        $this->vppTokenId = $vppTokenId;
        return $this;
    }

}
