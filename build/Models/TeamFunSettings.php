<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamFunSettings
 */
class TeamFunSettings
{
    /**
     * If set to true, enables users to include custom memes.
     */
    private ?bool $allowCustomMemes;

    /**
     * If set to true, enables Giphy use.
     */
    private ?bool $allowGiphy;

    /**
     * If set to true, enables users to include stickers and memes.
     */
    private ?bool $allowStickersAndMemes;

    /**
     * Giphy content rating. Possible values are: moderate, strict.
     */
    private ?string $giphyContentRating;


    public function getAllowCustomMemes(): ?bool
    {
        return $this->allowCustomMemes;
    }

    public function setAllowCustomMemes(?bool $allowCustomMemes): self
    {
        $this->allowCustomMemes = $allowCustomMemes;
        return $this;
    }

    public function getAllowGiphy(): ?bool
    {
        return $this->allowGiphy;
    }

    public function setAllowGiphy(?bool $allowGiphy): self
    {
        $this->allowGiphy = $allowGiphy;
        return $this;
    }

    public function getAllowStickersAndMemes(): ?bool
    {
        return $this->allowStickersAndMemes;
    }

    public function setAllowStickersAndMemes(?bool $allowStickersAndMemes): self
    {
        $this->allowStickersAndMemes = $allowStickersAndMemes;
        return $this;
    }

    public function getGiphyContentRating(): ?string
    {
        return $this->giphyContentRating;
    }

    public function setGiphyContentRating(?string $giphyContentRating): self
    {
        $this->giphyContentRating = $giphyContentRating;
        return $this;
    }

}
